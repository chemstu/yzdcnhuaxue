<?php

namespace App\Http\Controllers\Admin;

use App\Http\Models\Category;
use App\Http\Models\Post;
use App\Http\Models\Tag;
use App\Http\Requests\PostRequest;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\OSS;
use Intervention\Image\Facades\Image;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Post::with('category')->get();

        return view('admin.post_index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories=Category::all();
        $tags=Tag::all();
        return view('admin.post_create',compact('categories','tags'));
    }

    public function store(PostRequest $request,Post $post)
    {
        $post->fill($request->all());
        if ($request->hasFile('thumbnail')) {
        //带扩展名的文件名
            $filenamewithextension=$request->file('thumbnail')->getClientOriginalName();
            //不带扩展名的文件名
            $filename=pathinfo($filenamewithextension,PATHINFO_FILENAME);
            //文件扩展名
            $extention=$request->file('thumbnail')->getClientOriginalExtension();
            //新的文件名
            $file_name =  'post/' . time() . rand(10, 99) . '.' .$extention;
            //上传文件至oss
            //文件类型
            $content_type= mime_content_type($request->file('thumbnail')->getRealPath());
            $content = file_get_contents($request->file('thumbnail'));
            $bucket_name = config('oss.bucketName');
            OSS::publicUploadContent($bucket_name, $file_name, $content,['ContentType' => $content_type]);//设置HTTP头
            //获取公开文件URL
            $url = OSS::getPublicObjectURL($bucket_name, $file_name);
            $post->thumbnail=$file_name;
        }
        $post->save();
        Toastr::success('文章添加成功', 'OK');
        return redirect(route('admin.post.index'));
    }

    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
     }

    public function upload_img(Request $request)
    {
        if ($file=$request->upload) {
            //带扩展名的文件名
            $filenamewithextension=$file->getClientOriginalName();
            //不带扩展名的文件名
            $filename=pathinfo($filenamewithextension,PATHINFO_FILENAME);
            //文件扩展名
            $extention=$file->getClientOriginalExtension();
            //新的文件名
            $file_name =  'post/' . time() . rand(10, 99) . '.' .$extention;
            //上传文件至oss
            //文件类型
            $content_type= mime_content_type($file->getRealPath());
            $content = file_get_contents($file);
            $bucket_name = config('oss.bucketName');
            //存储于oss
            $result=OSS::publicUploadContent($bucket_name, $file_name, $content,['ContentType' => $content_type]);//设置HTTP头
            //获取公开文件URL
            $url = OSS::getPublicObjectURL($bucket_name, $file_name);
            if($result){
                $data=[
                    'uploaded'=>1,
                    'url'=>'http://'.$url,

                ];
            }
            return $data;
        }
    }
}
