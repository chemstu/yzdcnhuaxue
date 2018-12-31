<?php

namespace App\Handlers;
use Illuminate\Support\Facades\Storage;
use Image;
use App\Services\OSS;

class ImageUploadHandler
{
    protected $allowed_ext = ["png", "jpg", "gif", 'jpeg'];

    public function  save($file, $folder, $file_prefix, $max_width = false)
    {

        $content_type = mime_content_type($file->getRealPath());

        $folder_name = "uploads/images/$folder/" . date("Ym/d", time());

        $extension = strtolower($file->getClientOriginalExtension()) ?: 'png';

        $filename = $file_prefix . '_' . time() . '_' . str_random(10) . '.' . $extension;

        // 如果上传的不是图片将终止操作
        if ( ! in_array($extension, $this->allowed_ext)) {
            return false;
        }
        //阿里云上传
        //OSS::publicUploadContent('cnhuaxue',$folder_name .'/'.$filename,file_get_contents($file),['ContentType' => $content_type]);
        //阿里云上传结束


        //本地上传开始 ，使用Intervention 构建缩略图
        Storage::disk('public')->put($folder_name .'/'.$filename,fopen($file,'r+'),'public');

        //如果限制了图片宽度，就进行裁剪
        if ($max_width && $extension != 'gif') {
            // 此类中封装的函数，用于裁剪图片
            $this->reduceSize($folder_name . '/' . $filename, $max_width);
        }
        //本地上传结束*/
        return [
            //oss缩略图 外加  ?x-oss-process=style/400300
            // 'path' => config('app.url') . "/$folder_name/$filename?x-oss-process=style/500"

            //本地上传返回原图或缩略图地址
            'path' => config('app.url') . "/$folder_name/$filename"

        ];
    }

    public function reduceSize($file_path, $max_width)
    {
        // 先实例化，传参是文件的磁盘物理路径
        $image = Image::make($file_path);

        // 进行大小调整的操作
        $image->resize($max_width, null, function ($constraint) {

            // 设定宽度是 $max_width，高度等比例双方缩放
            $constraint->aspectRatio();

            // 防止裁图时图片尺寸变大
            $constraint->upsize();
        });

        // 对图片修改后进行保存
        $image->save();
    }
}
