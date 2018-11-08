<?php
// ////////////////////////////////////////////////////////////////////////////
//
// ATHER.SHU WWW.ASAREA.CN
// All Rights Reserved.
// email: shushenghong@gmail.com
//
// ///////////////////////////////////////////////////////////////////////////
/**
 * weixinadmin config
 *
 * @author Ather.Shu May 29, 2016 4:04:04 PM
 */
class WechatConfig {
    // http://mp.weixin.qq.com/wiki/8/f9a0b8382e0b77d87b3bcc1ce6fbc104.html
    // Token和EncodingAESKey，其中URL是开发者用来接收微信消息和事件的接口URL。
    // Token可由开发者可以任意填写，用作生成签名（该Token会和接口URL中包含的Token进行比对，从而验证安全性）。
    // EncodingAESKey由开发者手动填写或随机生成，将用作消息体加解密密钥。
    public static function getConfig()
    {
        return [ 
            'appid' => 'wx7b3ff25f7eeed3a0',
            'appsecret' => '5b513d6439e16334c5a468be7ccf7b7c',
            'token' => '',
            'encodingaeskey' => '',
            'cachedir' => __DIR__ . "/cache",
            'logfile' => __DIR__ . 'run.log' 
        ];
    }
}