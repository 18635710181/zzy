
<?php
use yii\helpers\Html;
use yii\helpers\Url;

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>添加页面</title>
</head>
<body>
<center>
<h1><font style="color:red">添</font><font style="color:blue">加</font><font style="color:yellow">会</font><font style="color:pink">员</font></h1>
	<form action="<?php echo Url::toRoute(['text/adddo'])?>" method="post">
	<table boeder="2">
		<tr>
			<td>用户名</td>
			<td><input type="text" name="username"></td>
		</tr>
		<tr>
			<td>电话号码</td>
			<td><input type="text" name="tel"></td>
		</tr>
		<tr>
			<td>特长爱好</td>
			<td><input type="text" name="hobby"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="提交"></td>
		</tr>
	</table>
		
	</form>
</center>
</body>
</html>