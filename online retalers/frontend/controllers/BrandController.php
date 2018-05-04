<?php
/**
 * Created by PhpStorm.
 * User: zzy
 * Date: 2018/4/25
 * Time: 20:02
 */

namespace frontend\controllers;


use yii\web\Controller;
use Yii;
class BrandController extends Controller
{
    public $layout = false;
    public function actionBrand(){
        $brand_id = Yii::$app->request->get('brand_id');
        $brand_name = Yii::$app->db->createCommand("SELECT * FROM `brand` WHERE brand_id = $brand_id")->queryOne();
        $goods_data = Yii::$app->db->createCommand("SELECT * FROM `goods` WHERE brand_id = $brand_id AND is_on_sale = 1")->queryAll();
        return $this->render('brand',['goods_data'=>$goods_data,'brand_name'=>$brand_name]);
    }
}