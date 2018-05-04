<?php

namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

class RegController extends Controller
{
	public $enableCsrfValidation = false;
   	public $layout = false;//关闭yii框架自带样式

   	public function actionReg()
   	{
   	    if (!Yii::$app->request->isPost){
            return $this->render('reg');
        }else{
   	        $user_name = Yii::$app->request->post("user_name");
   	        $password = Yii::$app->request->post('password');
   	        $phone = Yii::$app->request->post('phone');
   	        $email = Yii::$app->request->post('email');
            $email_yz = Yii::$app->request->post('email_yz');
            $arr=[];
            $cookie = Yii::$app->request->cookies;
            if ($cookie->has('email')){
                $sj = $cookie['email']->value; //$cookie[‘smister’] 其实这样也是可以读取的
                if($email_yz!=$sj){
                    $arr = [
                        'code'=>4,
                        'mation'=>'验证码不正确'
                    ];
                    return json_encode($arr);
                }
            }else{
                $arr = [
                    'code'=>5,
                    'mation'=>'验证码过期了 请重新获取'
                ];
                return json_encode($arr);
            }

   	        $creat_time = time();
   	        $str = $this->random();
   	        $new_password = sha1($password.$str);

            $res = Yii::$app->db->createCommand()->insert('user',[
                'user_name'=>$user_name,
                'password'=>$new_password,
                'mobile_phone'=>$phone,
                'emaile'=>$email,
                'reg_time'=>$creat_time,
                'range'=>$str,
            ])->execute();

            if ($res){
                $arr=[
                    'code'=>1,
                    'mation'=>'注册成功'
                ];
            }else{
                $arr=[
                    'code'=>2,
                    'mation'=>'注册失败'
                ];
            }
            return json_encode($arr);
        }
   	}

   	public function actionUserOnly(){
        $user_name = Yii::$app->request->post('user_name');
        $res = Yii::$app->db->createCommand("SELECT * FROM `user` WHERE user_name = $user_name")->queryOne();
        if ($res){
            return 1;
        }else{
            return 2;
        }
    }

    //随机字符串
    public function random(){
        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $lengh = strlen($chars)-1;
        //2.字符串截取开始位置
        $start = rand(0,$lengh);
        //3.字符串截取长度
        $count = rand(0,$lengh);
        $res = substr($chars,$start,$count);
        return $res;
    }

    //发送邮件
    public function actionSendEmail(){
        $email = Yii::$app->request->post('email');
        $sj  = $this->suiji();
        $cookies = Yii::$app->response->cookies;
        $cookies->add(new \yii\web\Cookie([
            'name' => 'email',
            'value' => $sj,
            'expire' => time() + 1800,
        ]));

        $mail= Yii::$app->mailer->compose();
        $mail->setTo($email); //要发送给那个人的邮箱
        $mail->setSubject("邮件主题"); //邮件主题
        $mail->setTextBody($sj); //发布纯文字文本
//            $mail->setHtmlBody("测试html text"); //发送的消息内容
        if ($mail->send()){
            return 1;
        }else{
            return 2;
        }
    }

    public function suiji(){
        return rand(1000,9999);
    }

}


 ?>