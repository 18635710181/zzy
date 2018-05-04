<?php 

namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

class DetailedController extends Controller
{
	public $enableCsrfValidation = false;
   	public $layout = false;//关闭yii框架自带样式

   	public function actionDetailed()
   	{
   	    $goods_id = Yii::$app->request->get('goods_id');
   	    $goods_info = Yii::$app->db->createCommand("SELECT goods_id,goods_price,goods_name,goods_brief FROM `goods` WHERE goods_id = $goods_id AND is_on_sale = 1")->queryOne();

   	    return $this->render('detailed',['goods_info'=>$goods_info]);
   	}

   	public  function actionShoppingCart(){
   	    $carts = [];
   	    $arr['goods_id'] = Yii::$app->request->post('goods_id');
        $arr['goods_price'] = Yii::$app->request->post('goods_price');
        $arr['goods_name'] = Yii::$app->request->post('goods_name');
        $arr['num'] = Yii::$app->request->post('num');
        $res = '';
        $cookies = Yii::$app->request->cookies;
        if(!isset($cookies['user'])){
            if(isset($_COOKIE['shopping_cart'])){
                $carts = json_decode($_COOKIE['shopping_cart'],true);
                if(!empty($carts[$arr["goods_id"]])){
                    //已存在
                    $res = [
                        'code'=>'1',
                        'mation'=>'该商品已经在您的购物车了'
                    ];
                }else{
                    $carts[$arr["goods_id"]] = $arr;
                    setcookie('shopping_cart',json_encode($carts));
                    $res = [
                        'code'=>'2',
                        'mation'=>'加入临时购物车成功,临时购物车在您关闭本网站就会清除，登陆后就可以放到您的购物车了'
                    ];
                }
            }else{
                $carts[$arr["goods_id"]] = $arr;
                setcookie('shopping_cart',json_encode($carts));
                $res = [
                    'code'=>'2',
                    'mation'=>'加入临时购物车成功,临时购物车在您关闭本网站就会清除，登陆后就可以放到您的购物车了'
                ];
            }
            return json_encode($res);
        }else{
            $user_id = $cookies->getValue('user')['user_id'];
            $goods_id = $arr['goods_id'];
            $res = Yii::$app->db->createCommand("SELECT * FROM `shopping_car` WHERE goods_id = $goods_id")->queryOne();
            if ($res){
                $res = [
                    'code'=>5,
                    'mation'=>'该商品已经在您的购物车了哦'
                ];
            }else{
                $join_time = time();
                $result = Yii::$app->db->createCommand()->insert('shoppingcar',[
                    'user_id'=>$user_id,
                    'goods_id'=>$arr['goods_id'],
                    'goods_price'=>$arr['goods_price'],
                    'goods_name'=>$arr['goods_name'],
                    'goods_num'=>$arr['num'],
                    'join_time'=>$join_time,
                ])->execute();
                if ($result){
                    $res = [
                        'code'=>3,
                        'mation'=>'添加购物车成功'
                    ];
                }else{
                    $res = [
                        'code'=>4,
                        'mation'=>'添加购物车失败'
                    ];
                }
            }
            return json_encode($res);
        }
    }


}


 ?>