<?php 

namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

class IndexController extends Controller
{
	public $enableCsrfValidation = false;
   	public $layout = false;//关闭yii框架自带样式

   	public function actionIndex()
   	{
        $brand_data = Yii::$app->db->createCommand("SELECT * FROM `brand`")->queryAll();
        $brand_datas =  $this->digui($brand_data);
//        print_r($brand_datas);die;
   		return $this->render('index',['brand_data'=>$brand_datas]);
   	}

   	public function digui($data,$pid=0){
   	    $gettree = '';
   	    foreach ($data as $key => $value){
   	        if($value['pid']==$pid){
   	            $value['pid']= $this->digui($data,$value['brand_id']);
   	            $gettree[]=$value;
            }
        }
        return $gettree;
    }

}


 ?>