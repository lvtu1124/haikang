<?php
namespace HaiKang;

class Error
{
    static $error = array(
        '0'=>'正常',
        '-1'=>'未知错误',
        '0x02401000'=>'APPKey为空',
        '0x02401001'=>'APPKey对应的合作方不存在',
        '0x02401002'=>'签名为空',
        '0x02401003'=>'签名不正确',
        '0x02401004'=>'API令牌的身份验证失败',
        '0x02401005'=>'API令牌为空',
        '0x02401006'=>'API令牌异常',
        '0x02401007'=>'API令牌过期',
        '0x02401008'=>'API接口未授权',
        '0x02401009'=>'权限验证异常',
        '0x0240100a'=>'参数转换异常，具体错误见异常信息	',
        '0x0240100b'=>'API接口调用次数受限',
        '0x0240100c'=>'接口调用统计异常',
        '0x02400004'=>'服务调用异常',
        '0x0240101b'=>'合作方IP受限',
        '0x0240101c'=>'合作方MAC受限',
        '0x0240101d'=>'合作方IP、MAC受限',
        '0x02401021'=>'解析请求JSON数据异常',
        '0x02401022'=>'解析返回JSON数据异常',
        '0x02401023'=>'不支持的请求编码字符集',
        '0x00072001'=>'必填参数为空',
        '0x00072002'=>'参数范围不正确',
        '0x00072003'=>'参数格式不正确',
        '0x00072004'=>'返回报文过长',
        '0x00072005'=>'参数不存在',
        '0x00072006'=>'参数内容过长',
        '0x00052101'=>'服务性能已达上限',
        '0x00052102'=>'服务出错',
        '0x00052103'=>'服务响应超时',
        '0x00052104'=>'服务不可用',
        '0x00072201'=>'资源访问未授权	',
        '0x00072202'=>'资源不存在',
        '0x00072203'=>'license数量受限',
        '0x00072204'=>'license未提供该功能',
        '0x00052301'=>'其他未知的错误	',
    );

    static function getMsg($code){
        if(isset(self::$error[$code])){
            return self::$error[$code];
        }
        return self::$error[-1];
    }

}