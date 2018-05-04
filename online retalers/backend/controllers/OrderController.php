<?php 
namespace backend\controllers;
use yii;
class OrderController extends BaseController
 {
 	public function actionOrder()
 	{
 		$connection = \Yii::$app->db;
 		$command = $connection->createCommand("select * from detail");
 		$data = $command->queryAll();
 		return $this->render('order',['data'=>$data]);
 	}

 	public function actionOrder_detailed()
 	{
 		$order_id = $_GET['order_id'];
 		$sql = "select * from `order` inner join detail on order.order_id = detail.order_id where `order`.order_id = ".$order_id;
 		$connection = \Yii::$app->db;
 		$command = $connection->createCommand($sql);
 		$data = $command->queryOne();

 		$sql = "select * from product where o_id = ".$data['o_id'];
 		$command = $connection->createCommand($sql);
 		$shop = $command->queryAll();
 		//print_r($data);die;
 		return $this->render('order_detailed',['data'=>$data,'shop'=>$shop]);
 	}

 	public function actionOrder_wuliu()
 	{
 		return $this->render('order_wuliu');
 	}
 }

?>	