<?php

namespace backend\controllers;

use Yii;

use yii\web\Controller;

use yii\data\Pagination;

use backend\models\Textarr;

class TextController extends Controller
{
	
     public $enableCsrfValidation = false;
     public function actionAdd()
     {
     	return $this->render('add');
     }
     public function actionAdddo()
     {
     	$data = 
     	[
            'username' => yii::$app->request->post('username'),
     		'tel' => yii::$app->request->post('tel'),
     		'hobby' => yii::$app->request->post('hobby'),
     	];
     		
     	//print_r($data);die;
     	$result = yii::$app->db->createCommand()->insert('Textarr',$data)->execute();
     	//var_dump($result);die;
     	if($result)
     	{
     		return $this->redirect('?r=text/show');
     	}else{
     		echo "fail";
     	}
     }
     public function actionShow()
     {
      //     $query = Textarr::find();
      //     $countQuery = clone $query;
      //     $pages = new Pagination([
      //     'totalCount' => $countQuery->count(),
      //     'pageSize'   => 2,
      //      ]);
      //    $models = $query->offset($pages->offset)
      // ->limit($pages->limit)
      // ->all();
      //     	// $info = yii::$app->db->createCommand("select * from `text`")->queryAll();
      //     	return $this->render('show',['models'=>$models,'pages'=>$pages]);
            $model = new Textarr();
        $searchVal = Yii::$app->request->get('Textarr')['searchVal'];//搜索的问题

        // echo $searchVal;die;
        if($searchVal != '')
        {
            $count = Textarr::find()->andwhere(['or',['like','username',$searchVal]])->count();//获取满足条件的总条数
            $page =  new Pagination(['totalCount'=>$count,'pageSize'=>'3']);
            $models = Textarr::find()
            ->offset($page->offset)
            ->andwhere(['or',['like','username',$searchVal],])
            ->limit($page->limit)
            ->asArray()->all();
        }else{
            $count = Textarr::find()->count();//获取满足条件的总条数
            $page = new Pagination(['totalCount'=>$count,'pageSize'=>3]);
            $models =Textarr::find()
            ->offset($page->offset)
        
            ->limit($page->limit)
            ->asArray()
            ->all();
        }
        return $this->render('show',['models'=>$models,'model'=>$model,'pages'=>$page]);
     }

     public function actionDelete($id)
     {
     	// $id = yii::$app->request->post('id');
     	// var_dump($id);die;
     	$result=yii::$app->db->createCommand()->delete('Textarr',['id'=>$id])->execute();
     	//var_dump($result);die;
     	return $this->redirect('?r=text/show');
     }

     public function actionUpdate($id)
     {
     	$info = yii::$app->db->createCommand("select * from `textarr` where id=$id")->queryOne();
     	return $this->render('update',['info'=>$info]);
     }
     public function actionUpdatedo()
     {
     	$id = yii::$app->request->post('id');

     	// var_dump($id);die;
     	$data = 
     	[
            'username'=>yii::$app->request->post('username'),
            'tel'=>yii::$app->request->post('tel'),
            'hobby'=>yii::$app->request->post('hobby'),
     	];

     	$result = yii::$app->db->createCommand()->update('textarr',$data,['id'=>$id])->execute();
     	//var_dump($result);die;
     	if($result)
     	{
     		return $this->redirect('?r=text/show');
     	}else{
     		echo "no";
     	}
     }

    //   public     function actionSearch()
    // {
    //     $model = new Newsarr();
    //     $searchVal = Yii::$app->request->get('Newsarr')['searchVal'];//搜索的问题
    //     // echo $searchVal;die;
    //     if($searchVal != '')
    //     {
    //         $count = Textarr::find()->andwhere(['or',['like','QuestionName',$searchVal],])->count();//获取满足条件的总条数
    //         $page =  new Pagination(['TotalCount'=>$count,'pageSize'=>'3']);
    //         $questionInfo = Textarr::find()
    //         ->offset(offset:$page->offset)
    //         ->andwhere([or,['like','QuestionName',$searchVal],])
    //         ->limit(limit:$oage->limit)
    //         ->asArray()->all();
    //     }else{
    //         $count = Textarr::find()->count();//获取满足条件的总条数
    //         $page = new Pagination(['totalCount'=>$count,'pageSize'=>3]);
    //         $QuestionInfo =Textarr::find()
    //         ->offset(offset:$page->offset)
    //         ->where('isDel'=>0)
    //         ->limit(limit:$page->limit)
    //         ->asArray()
    //         ->all();
    //     }
    //     return $this->render(view:'show',params:['QuestionInfo'=>$questionInfo,'model'=>$model,'pages'=>$page]);
    // }
}