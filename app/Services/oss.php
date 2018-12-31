<?php

namespace App\Services;
use JohnLui\AliyunOSS;
use Exception;
use DateTime;

class OSS
{
    private $ossClient;

    /**
     * 私有初始化 API，非 API，不用关注
     * @param boolean 是否使用内网
     */
    public function __construct($isInternal = false)
    {
        if (config('oss.networkType') == 'VPC' && !$isInternal) {
            throw new Exception("VPC 网络下不提供外网上传、下载等功能");
        }
        $this->ossClient = AliyunOSS::boot(
            config('oss.city'),
            config('oss.networkType'),
            $isInternal,
            config('oss.AccessKeyId'),
            config('oss.AccessKeySecret')
        );
    }

    /**
     * 使用外网上传文件
     * @param  string bucket名称
     * @param  string 上传之后的 OSS object 名称
     * @param  string 上传文件路径
     * @return boolean 上传是否成功
     */
    public static function publicUpload($bucketName, $ossKey, $filePath, $options = [])
    {
        $oss = new OSS();
        $oss->ossClient->setBucket($bucketName);
        return $oss->ossClient->uploadFile($ossKey, $filePath, $options);
    }

    /**
     * 使用阿里云内网上传文件
     * @param  string bucket名称
     * @param  string 上传之后的 OSS object 名称
     * @param  string 上传文件路径
     * @return boolean 上传是否成功
     */
    public static function privateUpload($bucketName, $ossKey, $filePath, $options = [])
    {
        $oss = new OSS(true);
        $oss->ossClient->setBucket($bucketName);
        return $oss->ossClient->uploadFile($ossKey, $filePath, $options);
    }

    /**
     * 使用外网直接上传变量内容
     * @param  string bucket名称
     * @param  string 上传之后的 OSS object 名称
     * @param  string 上传的变量
     * @return boolean 上传是否成功
     */
    public static function publicUploadContent($bucketName, $ossKey, $content, $options = [])
    {
        $oss = new OSS();
        $oss->ossClient->setBucket($bucketName);
        return $oss->ossClient->uploadContent($ossKey, $content, $options);
    }

    /**
     * 使用阿里云内网直接上传变量内容
     * @param  string bucket名称
     * @param  string 上传之后的 OSS object 名称
     * @param  string 上传的变量
     * @return boolean 上传是否成功
     */
    public static function privateUploadContent($bucketName, $ossKey, $content, $options = [])
    {
        $oss = new OSS(true);
        $oss->ossClient->setBucket($bucketName);
        return $oss->ossClient->uploadContent($ossKey, $content, $options);
    }

    /**
     * 使用外网删除文件
     * @param  string bucket名称
     * @param  string 目标 OSS object 名称
     * @return boolean 删除是否成功
     */
    public static function publicDeleteObject($bucketName, $ossKey)
    {
        $oss = new OSS();
        $oss->ossClient->setBucket($bucketName);
        return $oss->ossClient->deleteObject($bucketName, $ossKey);
    }

    /**
     * 使用阿里云内网删除文件
     * @param  string bucket名称
     * @param  string 目标 OSS object 名称
     * @return boolean 删除是否成功
     */
    public static function privateDeleteObject($bucketName, $ossKey)
    {
        $oss = new OSS(true);   // 上传文件使用内网，免流量费
        $oss->ossClient->setBucket($bucketName);
        return $oss->ossClient->deleteObject($bucketName, $ossKey);
    }

    /**
     * 复制存储在阿里云OSS中的Object
     *
     * @param string $sourceBuckt 复制的源Bucket
     * @param string $sourceKey - 复制的的源Object的Key
     * @param string $destBucket - 复制的目的Bucket
     * @param string $destKey - 复制的目的Object的Key
     */

    public function copyObject($sourceBuckt, $sourceKey, $destBucket, $destKey)
    {
        $oss = new OSS();
        return $oss->ossClient->copyObject($sourceBuckt, $sourceKey, $destBucket, $destKey);
    }
    /**
     * 移动存储在阿里云OSS中的Object
     *
     * @param string $sourceBuckt 复制的源Bucket
     * @param string $sourceKey - 复制的的源Object的Key
     * @param string $destBucket - 复制的目的Bucket
     * @param string $destKey - 复制的目的Object的Key

     */
    public function moveObject($sourceBuckt, $sourceKey, $destBucket, $destKey)
    {
        $oss = new OSS();
        return $oss->ossClient->moveObject($sourceBuckt, $sourceKey, $destBucket, $destKey);
    }

    // 获取公开文件的 URL
    public static function getPublicObjectURL($bucketName, $ossKey)
    {
        if(config('oss.ossDomain')){
            return config('oss.ossDomain').'/'.$ossKey;
        }
        $oss = new OSS();
        $oss->ossClient->setBucket($bucketName);
        return $oss->ossClient->getPublicUrl($ossKey);
    }

    // 获取私有文件的URL，并设定过期时间，如 \DateTime('+1 day')
    public static function getPrivateObjectURLWithExpireTime($bucketName, $ossKey, DateTime $expire_time)
    {
        $oss = new OSS();
        $oss->ossClient->setBucket($bucketName);
        return $oss->ossClient->getUrl($ossKey, $expire_time);
    }

    public static function createBucket($bucketName)
    {
        $oss = new OSS();
        return $oss->ossClient->createBucket($bucketName);
    }
    // 获取该 Bucket 中所有文件的文件名，返回 Arraybb
    public static function getAllObjectKey($bucketName)
    {
        $oss = new OSS();
        return $oss->ossClient->getAllObjectKey($bucketName);
    }

    /**
     * 获取指定Object的元信息
     *
     * @param  string $bucketName 源Bucket名称
     * @param  string $key 存储的key（文件路径和文件名）
     * @return object 元信息
     */

    public static function getObjectMeta($bucketName, $ossKey)
    {
        $oss = new OSS();
        return $oss->ossClient->getObjectMeta($bucketName, $ossKey);
    }
}
