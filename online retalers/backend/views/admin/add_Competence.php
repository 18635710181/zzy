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
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/jquery.dataTables.bootstrap.js"></script>
<title>权限设置</title>
</head>
<!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <script src="js/css3-mediaqueries.js"  type="text/javascript"></script>
  <![endif]-->
<body>
<div class="margin" id="page_style">
<div class="Competence_list">
  
  <div class="list_cont clearfix">
   <div class="clearfix col-xs-4 col-lg-6 ">
<div class=""> 
   <label class="" for="">选择角色：</label>
    <select name='sel'>
      <option value="">--qingxuan角色--</option>
      <?php foreach ($role as $key => $val): ?>
        <option value="<?php echo $val['r_id'] ?>"><?php echo $val['r_name'] ?></option>
      <?php endforeach ?>
    </select>
  </div>
    <dl class="Competence_name"> 
     <dt class="Columns_One"><label class="middle"><input class="ace" type="checkbox" id="id-disable-check"><span class="lbl">权限管理：</span></label></dt>
     <dd class="permission_list clearfix">
      <?php foreach ($node as $key => $val): ?>
        <label class="middle"><input class="ace" type="checkbox" name="checks" value="<?php echo $val['n_id'] ?>"><span class="lbl"><?php echo $val['n_title'] ?></span></label>
      <?php endforeach ?>
     </dd>
    </dl>
<!--按钮操作-->
      <div class="Button_operation btn_width">
        <button class="btn button_btn bg-deep-blue" type="button" id='but'>提交</button>
        <button class="btn button_btn bg-gray" type="button">取消添加</button>
        <a href="javascript:ovid()" onclick="javascript :history.back(-1);" class="btn btn-info button_btn"><i class="fa fa-reply"></i> 返回上一步</a>
    </div>
   </div>
</div> 
</div>
</div>
</body>
</html>
<script type="text/javascript">
/*******滚动条*******/
$("body").niceScroll({  
  cursorcolor:"#888888",  
  cursoropacitymax:1,  
  touchbehavior:false,  
  cursorwidth:"5px",  
  cursorborder:"0",  
  cursorborderradius:"5px"  
});
/*字数限制*/
function checkLength(which) {
  var maxChars = 200; //
  if(which.value.length > maxChars){
     layer.open({
     icon:2,
     title:'提示框',
     content:'您出入的字数超多限制!', 
    });
    // 超过限制的字数了就将 文本框中的内容按规定的字数 截取
    which.value = which.value.substring(0,maxChars);
    return false;
  }else{
    var curr = maxChars - which.value.length; //200 减去 当前输入的
    document.getElementById("sy").innerHTML = curr.toString();
    return true;
  }
};
/*按钮复选框选择*/
$(function(){
  $(".Competence_name dt input:checkbox").click(function(){
    $(this).closest("dl").find("dd input:checkbox").prop("checked",$(this).prop("checked"));
  });
  $(".permission_list input:checkbox").click(function(){
    var l =$(this).parent().parent().find("input:checked").length;
    if($(this).prop("checked")){
      $(this).closest("dl").find("dt input:checkbox").prop("checked",true);
      $(this).parents(".Competence_name").find("dt").first().find("input:checkbox").prop("checked",true);
    }
    else{
      if(l==0){
        $(this).closest("dl").find("dt input:checkbox").prop("checked",false);
      }     
    }   
  });
});
</script>
<script src="jquery-1.8.3.js" type="text/javascript"></script>
<script type="text/javascript">
  //添加
  $('#but').click(function(){
    // var str=""
    // var groupCheckbox = $("input[name='check']");
    // for(i=0;i<groupCheckbox.length;i++){
    //     if(groupCheckbox[i].checked){
    //         var str=+","+groupCheckbox[i].value;
    //         // alert(str);
    //     }
    // }
    // str = str.substr(1);
    // alert(str)
    //选择角色
    var role = $("option:selected").val(); 
    //选择权限
    var node = new Array();
    $("input[name='checks']:checked").each(function(i){
      node[i]=$(this).val()//i下标
    });
    var nodes = node.join(',')
    $.ajax({
        url:'../index.php?r=admin/competence',
        data:{role:role,nodes:nodes},
        type:'post',
        success:function(msg){
          // alert(msg)
          if(msg != 0) {
            location.href = '../index.php?r=admin/node';
          }else{
            alert('拥有权限');
          }

        }
    })
  })

</script>
