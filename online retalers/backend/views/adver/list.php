<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="css/shop.css" type="text/css" rel="stylesheet" />
<link href="css/Sellerber.css" type="text/css"  rel="stylesheet" />
<link href="css/bkg_ui.css" type="text/css"  rel="stylesheet" />
<link href="font/css/font-awesome.min.css"  rel="stylesheet" type="text/css" />
<script src="js/jquery-1.9.1.min.js" type="text/javascript" ></script>
<script type="text/javascript" src="js/jquery.cookie.js"></script>
<script src="js/shopFrame.js" type="text/javascript"></script>
<script src="js/Sellerber.js" type="text/javascript"></script>
<script src="js/layer/layer.js" type="text/javascript"></script>
<title>广告列表</title>
</head>
<!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <script src="js/css3-mediaqueries.js"  type="text/javascript"></script>
  <![endif]-->
<body>
<div class="margin Competence_style" id="page_style">
<div class="operation clearfix">
<button class="btn button_btn btn-danger" type="button" id="del" ><i class="fa fa-trash-o">&nbsp;删除</i></button>
<span class="submenu"><a href="../index.php?r=adver/add" name="add_product.html" class="btn button_btn bg-deep-blue" title="添加广告"><i class="fa  fa-edit"></i>&nbsp;添加广告</a></span>
<div class="search  clearfix">
 <label class="label_name">商品搜索：</label><input name="" type="text"  class="form-control col-xs-6"/><button class="btn button_btn bg-deep-blue " onclick=""  type="button"><i class="fa  fa-search"></i>&nbsp;搜索</button>
</div>

<!--广告列表样式-->
<DIV class="compete_list">
  <table class="table table_list table_striped table-bordered dataTable no-footer">
   <thead>
    <tr>
    <th class="center" width="50"><label><input type="checkbox" id="all"><span class="lbl"></span></label></th>
    <th>ID</th>
    <th>广告名称</th>
    <th>介绍</th>
    <th>地址</th>
    <th>大小尺寸</th>
    <th>所属分类</th>
    <th>商品介绍</th>
    <th>添加时间</th>
    <th>状态</th>  
    </tr>
    <?php foreach ($data as $key => $val): ?>
      <tr>
          <td><input type="checkbox" class="a" checked></td>
          <td><?php echo $val['id'] ?></td>
          <td><?php echo $val['gname'] ?></td>
          <td><?php echo $val['info'] ?></td>
          <td><?php echo $val['adress'] ?></td>
          <td><img src="<?= $val['img']?>" height="50px;" width="50px;"></td>
          <td><?php echo $val['type'] ?></td>
          <td><?php echo $val['spjs'] ?></td>
          <td><?php echo $val['add_time'] ?></td>
          <td>
                <?php if($val['status']==0){ ?> 
                        存在
                <?php }else{ ?> 
                        不存在
                <?php } ?>
          </td>
      </tr>
    <?php endforeach ?>
   </thead>
   <tbody>
    <tr>
     <td></td>
    </tr>
   </tbody>
  </table>
</DIV>
</div>
</div>
</body>
</html>
<script type="text/javascript">
//全选
$("#all").click(function(){

  if(this.checked){
    $(".a").attr('checked',true);
  }else{
    $(".a").attr('checked',false);
  }

})
    $(function(){
      var del_id
    })
    

/*******滚动条*******/
$("body").niceScroll({  
	cursorcolor:"#888888",  
	cursoropacitymax:1,  
	touchbehavior:false,  
	cursorwidth:"5px",  
	cursorborder:"0",  
	cursorborderradius:"5px"  
});
</script>