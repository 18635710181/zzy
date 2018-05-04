<?php 

namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
session_start();

class CarController extends Controller
{
	public $enableCsrfValidation = false;
   	public $layout = false;//关闭yii框架自带样式

   	public function actionCar()
   	{
        $cookies = Yii::$app->request->cookies;
   	    if (!$cookies->has('user')){
   	        echo "<script>alert('您还没有登录,请先登录');location.href='?r=login/login'</script>";
        }else{
   	        $user_info = $cookies->getValue('user');
   	        $user_id = $user_info['user_id'];
   	        $s_car = Yii::$app->db->createCommand("SELECT * FROM `shoppingcar` WHERE user_id = $user_id ORDER BY goods_id")->queryAll();
            return $this->render('car',['s_car'=>$s_car]);
        }

   	}
}


 ?>