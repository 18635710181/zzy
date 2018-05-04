<?php
/**
 * Created by PhpStorm.
 * User: zzy
 * Date: 2018/4/23
 * Time: 16:38
 */

namespace frontend\controllers;


use yii\web\Controller;

class DefaultController extends Controller
{
    private static $header = null;
    private static $cookie = null;

    private static function curl($type,$url,$data=[]){
        $curl = curl_init();
        curl_setopt($curl,CURLOPT_URL,$url);
        curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);//不默认输出 0默认输出
        curl_setopt($curl,CURLOPT_HEADER,0);//是否输出头信息 0 不输出  1输出
        curl_setopt($curl,CURLOPT_USERAGENT,$_SERVER['HTTP_USER_AGENT']);//模拟浏览器信息;
        curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,false);//绕过 https 请求认证
        curl_setopt($curl,CURLOPT_CERTINFO,1);//模拟https证书
        curl_setopt($curl,CURLOPT_TIMEOUT,10);//最长请求时间
        curl_setopt($curl,CURLOPT_FOLLOWLOCATION,1);//跟随重定向
        if(!empty(self::$header)){
            curl_setopt($curl,CURLOPT_HEADER,self::$header);//设置header头信息
        }
        if (!empty(self::$cookie)){
            curl_setopt($curl,CURLOPT_COOKIE,self::$cookie);//设置cooke信息
        }
        if ($type =='post'){
            curl_setopt($curl,CURLOPT_PORT,1);//post请求
            curl_setopt($curl,CURLOPT_POSTFIELDS,http_build_query($data));
        }
        $info = curl_exec($curl);//执行

        $error = curl_error($curl);//错误信息
        if($error){
            $erron = curl_errno($curl);//错误码
            return $erron.":".$error;
        }
        curl_close($curl);
        return $info;

    }
    public static function setHeader($header){
        self::$header = $header;
    }
    public static function setCookie($cookie){
        self::$cookie = $cookie;
    }

    public  function get($url){
       return  self::curl('get',$url);
    }

    public  function post($data,$url){
        return  self::curl('post',$url,$data);
    }

}