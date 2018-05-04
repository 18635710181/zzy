<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\LinkPager;
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>展示页面</title>
</head>
<body>
<center>
<h1><font style="color:red">展</font><font style="color:blue">示</font><font style="color:yellow">会</font><font style="color:pink">员</font></h1>
		



		<table>
		<tr>
		<td colspan="5">
		 <?php $form = ActiveForm::begin(['action'=>['text/show'],'method'=>'get',]);?>
         <? echo $form->field($model,'searchVal')->textInput(['maxlength'=>20,'placeholder'=>"请输入搜索的问题"]) ?>
	     <? echo Html::submitButton('搜索',['class'=>'btn btn-warning'])?>
         <?php ActiveForm::end();?>
         </td>
         </tr>
			<tr>
			    <td class="xz">选择</td>
			    <td>编号</td>
				<td>用户名</td>
				<td>电话号码</td>
				<td>爱好</td>
				<td>操作</td>
			</tr>
			<?php foreach ($models as $key => $value): ?>
				
			
			<tr>
			    <td class="xz"><input type="checkbox" name="" id="" value="<?php echo $value['id']?>"></td>
			    <td><?php echo $value['id']?></td>
				<td><?php echo $value['username']?></td>
				<td><?php echo $value['tel']?></td>
				<td><?php echo $value['hobby']?></td>
				<td><a href="?r=text/delete&id=<?php echo $value['id']?>">删除</a>||<a href="?r=text/update&id=<?php echo $value['id']?>">修改</a></td>
			</tr>

		    <?php endforeach ?>

		</table>
		  <div class="page">
                	<?php 
                	//显示分页页码
					echo LinkPager::widget([
					    'pagination' => $pages,
					]) ?>
                </div>
      <a href="?r=text/add">添加页面走起</a>
</body>
</center>
</html>