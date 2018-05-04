
<?php
use yii\helpers\Html;
use yii\helpers\Url;

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>修改页面</title>
</head>
<body>
<center>
<h1><font style="color:red">修</font><font style="color:blue">改</font><font style="color:yellow">分</font><font style="color:pink">页</font></h1>
	<form action="<?php echo Url::toRoute(['text/updatedo'])?>" method="post">
	<table boeder="2">
		<tr>
			<td>用户名</td>
			<td><input type="text" name="username" value="<?php echo $info['username']?>"></td>
		</tr>
		<tr>
			<td>电话号码</td>
			<td><input type="text" name="tel" value="<?php echo $info['tel']?>"></td>
		</tr>
		<tr>
			<td>特长爱好</td>
			<td><input type="text" name="hobby" value="<?php echo $info['hobby']?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="修改"></td>
		</tr>
		<input type="hidden" name="id" value="<?php echo $info['id']?>">
	</table>
		
	</form>
</center>
</body>
</html>
