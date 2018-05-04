<?php 

namespace backend\controllers;
use yii;
class ProductsController extends BaseController
 {
 	public $enableCsrfValidation = false;
 	public function actionProducts()
 	{
 		$where = ' where 1 = 1';
 		if(isset($_GET['name']) && !empty($_GET['name'])){
 			$name = $_GET['name'];
 			$where.= " and goods_name like '%$name%'";
 		}
 		$connection = \Yii::$app->db;
 		$command = $connection->createCommand("select * from goods ".$where);
        $data = $command->queryAll();

 		return $this->render('products',['data'=>$data]);
 	}

 	public function actionBrand()
 	{
 		return $this->render('brand');
 	}

 	public function actionCate()
 	{
 		$arr = array();
 		$connection = \Yii::$app->db;
 		$command = $connection->createCommand("select * from goods");
 		$data = $command->queryAll();
 		$nan = '';
 		$nv = '';
 		$qing = '';
 		foreach($data as $key=>$val){
 			if(stripos($val['cate'],'男士')!==false){
 				$nan.=$val['goods_name'].',';
 				
 			}
 			if(stripos($val['cate'],'女士')!==false){
 				$nv.=$val['goods_name'].',';
 				
 			}
 			if(stripos($val['cate'],'情侣啊')!==false){
 				$qing.=$val['goods_name'].',';
 				
 			}
 		}	
 		$arr['男士'] = $nan;$arr['女士'] = $nv;$arr['情侣啊'] = $qing;
 		
 		return $this->render('cate',['nan'=>$nan,'nv'=>$nv,'qing'=>$qing]);
 	}

 	public function actionAdd_product(){
 		return $this->render('add_product');
 	}

 	public function actionAdd_shop(){

 		$data=yii::$app->request->post();
 		//print_r($data);die;
 		$res = Yii::$app->db->createCommand()->insert('goods',['cate'=>$data['cate'],'goods_name'=>$data['goods_name'],'goods_brief'=>$data['goods_brief']])->execute();
 		
 		$id = Yii::$app->db->getLastInsertId();
 		if($res){
 			
	 		$str = $data['str'];
	 		$str = explode('__',$str);
	 		$array = array();
	 		foreach($str as $key=>$val){
	 			if(!empty($val)){
	 				$array[] = explode('_',$val);
	 			}
	 		}
		  	foreach($array as $key=>$val){
				$res = Yii::$app->db->createCommand()->insert('sn',['sn_color'=>$val[0],'sn_price'=>$val[1],'sn_number'=>$val[2],'goods_id'=>$id])->execute();


		  	}
		  	if($res){
	  			echo 1;
	  		}else{
	  			echo 2;
	  		}

 		}
 		
 	}

 	public function actionDel(){
 		$id = $_GET['id'];
 		$request = yii::$app->request;
        $res = Yii::$app->db->createCommand()->delete('goods',['goods_id'=>$id])->execute();
        if($res){
        	return $this->redirect(array('products/products'));
        }else{
        	echo 2;die;
        }
	}

	public function actionDelall(){
		$id = $_GET['id'];
		$id = rtrim($id,'_');
		$id = explode('_',$id);
		$str = '';
		foreach($id as $key=>$val){
			$str.=$val.',';
		}
		$str = rtrim($str,',');
		$connection = yii::$app->db;
		$res = $connection ->createCommand("delete from goods where goods_id in ($str)")
            ->execute();
        if($res){
        	return $this->redirect(array('products/products'));
        }else{
        	echo "删除失败";die;
        }
		
	}

}



 