<?php
namespace backend\controllers;
use Yii;
 class AdverController extends BaseController
 {
 	public $enableCsrfValidation=false;
 	public function actionList()
 	{
 		if(!Yii::$app->request->isPost){
 			$res = Yii::$app->db->createCommand("select * from adver")->queryAll();
			return $this->render('list',['data'=>$res]); 
        }else{
        	$data = Yii::$app->request->post();
        	//print_r($res);die;
        	$add_time = date("Y-m-d H:i:s");
        	$error = $_FILES['img']['error'];
            $name = $_FILES['img']['name'];
			$tmp = $_FILES['img']['tmp_name'];
            if($error == 0){
				//建目录
				$path = date("md",time());
				if(!file_exists($path)){     //判断这个目录是否存在
					mkdir($path);            //创建目录 make dir
				}
				//生成不重复的文件名
				$arr = pathinfo($name);  //后缀名
				$new_path = $path.'/'.time().mt_rand(1,9999999).'.'.$arr['extension'];
				$str="http://localhost/watch/backend/web/$new_path";
				if(move_uploaded_file($tmp,$new_path)){
	            $res = Yii::$app->db->createCommand()->insert('adver', [
	                'gname' => $data['gname'],
	                'info' => $data['info'],
	                'adress' => $data['adress'],
	                'img' => $str,
	                'type' => $data['type'],
	                'spjs' => $data['spjs'],
	                'add_time' => $add_time,
	            ])->execute();
	            if ($res){
	                echo "<script>alert('添加成功');location.href='?r=adver/list'</script>";
	            }

				}else{
					echo '移动失败！';
				}
			}else{
				echo "上传有误。错误码是：$error";
			}
        }
        	
	}
 	public function actionAdd(){
 		return $this->render('add');
 	}

 	public function actionDel(){
 		$data = Yii::$app->request->post();
        print_r($res);die;

 		return $this->render('add');
 	}


 	
 	public function actionSort(){
 		return $this->render('Advertising_sort');
 	}
 }