<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="../index.php?r=adver/list" enctype="multipart/form-data">
		<tr>
			<td>广告名称</td>
			<td><input type="text" name="gname"></td>
		</tr><br><br><br>
		<tr>
			<td>介绍</td>
			<td><input type="text" name="info"></td>
		</tr><br><br><br>
		<tr>
			<td>地址</td>
			<td><input type="text" name="adress"></td>
		</tr><br><br><br>
		<tr>
			<td>大小尺寸</td>
			<td><input type="file" name="img"></td>
		</tr>
		<tr><br><br><br>
			<td>所属分类</td>
			<td>
				<select name="type">
					<option>123</option>
				</select>
				<!-- <?php 

				?> -->
			</td>
		</tr>
		<tr><br><br>
			<td>商品介绍</td><br><br>
			<td>
				<script id="container" name="spjs" type="text/plain"></script>
			</td>
		</tr><br><br><br>
		<tr>
			<td></td>
			<td><input type="submit"></td>
		</tr>
	</form>
</body>	
</html>


<!-- 编辑器源码文件 -->
<script type="text/javascript" src="../ueditor/ueditor.config.js"></script>    
<script type="text/javascript" src="../ueditor/ueditor.all.js"></script>

<!-- 实例化编辑器 container为c层接收数据时所用的name-->
<script type="text/javascript">
	var ue = UE.getEditor('container');
</script>