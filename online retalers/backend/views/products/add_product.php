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
<script src="js/Sellerber.js" type="text/javascript"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/jquery.dataTables.bootstrap.js"></script>
<script src="js/layer/layer.js" type="text/javascript"></script>
<script src="js/laydate/laydate.js" type="text/javascript"></script>
<!--[if lt IE 9]>
<script src="js/html5shiv.js" type="text/javascript"></script>
<script src="js/respond.min.js"></script>
<script src="js/css3-mediaqueries.js"  type="text/javascript"></script>
  <![endif]-->
<title>添加产品</title>
</head>

<body>
<div class="margin">
<div class="add_style">
 <ul>
  <li class="clearfix"><label class="label_name col-xs-1"><i>*</i>标题名称：&nbsp;&nbsp;</label><div class="Add_content col-xs-11"><input name="goods_name" type="text"  class="col-xs-6"/></div></li>
  <li class="clearfix"><label class="label_name col-xs-1"><i>*</i>简单描述：&nbsp;&nbsp;</label><div class="Add_content col-xs-11"><input name="goods_brief" type="text" class="col-xs-4"/></div></li>
   

  <li class="clearfix">
   <label class="label_name col-xs-1"><i>*</i>产品分类：&nbsp;&nbsp;</label> 
   <div class="" id="cate">

   <span class="classification_name l_f"><label ><input type="radio" name="form-field-radio" class="ace"><span class="lbl">男士</span></label></span>
   <span class="classification_name l_f"><label ><input type="radio" name="form-field-radio" class="ace"><span class="lbl">女士</span></label></span>
   <span class="classification_name l_f"><label ><input type="radio" name="form-field-radio" class="ace"><span class="lbl">情侣啊</span></label></span>
   
   </div> 
   </li>  

   <li class="clearfix" id="clear">
   <label class="label_name col-xs-1"><i>*</i>颜色分类：&nbsp;&nbsp;</label>
     <div class="Add_content col-xs-11" id="sku">
     
     <span class="classification_name l_f"><label ><input type="radio" name="form-field-radio2" class="ace"><span class="lbl">红色</span></label></span>
     <span class="classification_name l_f"><label ><input type="radio" name="form-field-radio2" class="ace"><span class="lbl">黑色</span></label></span>
     <span class="classification_name l_f"><label ><input type="radio" name="form-field-radio2" class="ace"><span class="lbl">紫色</span></label></span>
     <span class="classification_name l_f"><label ><input type="radio" name="form-field-radio2" class="ace"><span class="lbl">白色</span></label></span>
     <span class="classification_name l_f"><label ><input type="radio" name="form-field-radio2" class="ace"><span class="lbl">橙色</span></label></span>
     <span>价格</span>  <input type='text' name='price'/>
     <span>库存</span>  <input type='text' name='number'>
     <span class="jia">+</span>
     </div>



   </li>
   <script>
     var i = 0;
     $(".jia").click(function(){
        i++;
        var clone_ = $("#sku").clone();
        clone_.find('.jia').removeClass('jia').addClass('jian').html('-');
        var a = clone_.find("input[type='radio']");
        $.each(a,function(){
          $(this).attr('name',i);
        })
        $("#clear").append(clone_);
        
      })

      $(document).on("click",".jian",function(){
        $(this).parents("#sku").remove();
      })
   </script>


   <li class="clearfix"><label class="label_name col-xs-1">是否特价：&nbsp;&nbsp;</label> 
    <div class="Add_content col-xs-11">
    <label class="l_f checkbox_time"><input type="checkbox" name="checkbox" class="ace" id="checkbox"><span class="lbl">是</span></label>
    <div class="Date_selection" style="display:none">
      <span class="label_name">开始日：</span><p class="laydate-icon" id="start" style="width:200px; margin-right:10px; height:30px; line-height:30px; float:left"></p>
      <span class="label_name">结束日：</span><p class="laydate-icon" id="end" style="width:200px;height:30px; line-height:30px; float:left"></p>
    </div>
    </div>   
    </li>

     
   
    <li class="clearfix"><label class="label_name col-xs-1">设置规格：&nbsp;&nbsp;</label> 
    <div class="Add_content col-xs-11">    
       <input name="" type="text"  class="col-xs-6"/><em class="Prompt">如"颜色,尺寸,型号"中间以英文逗号隔开</em>
    </div>   
    </li>
     <li class="clearfix">
      <div class="col-xs-4">
     <label class="label_name col-xs-3">是否上架：&nbsp;&nbsp;</label> 
    <div class="Add_content col-xs-9">
    <label><input type="radio" name="checkbox" class="ace" checked="checked"><span class="lbl">是</span></label>
    <label><input type="radio" name="checkbox" class="ace"><span class="lbl">否</span></label>
    </div>   
    </div>
    
       
    <label class="l_f checkbox_time"><input type="checkbox" name="checkbox" class="ace" checked="checked"><span class="lbl"></span></label>
    </div>   
    </div>
    </li>
      <li class="clearfix">
     <label class="label_name col-xs-1"><i>*</i>产品图片：&nbsp;&nbsp;</label>
     <div class="Add_content col-xs-11" id="Upload">
     <div class="images_Upload clearfix margin-bottom" id="images_Upload">
      <span class="Upload_img"><input name="" type="file" /></span>
      <a href="javascript:ovid()" class="operating delete_Upload" onclick="delete_Upload(this.id)"><i class="fa fa-remove"></i></a>
      <a href="javascript:ovid()" class="operating" title="预览" onclick="preview_img(this.id)"><i class="fa  fa-image"></i></a>
    </div>
    <button type="button" class="add_Upload bg-deep-blue" id="add_Upload" onclick="add_Upload()"><i class="fa  fa-plus"></i></button>
     </div>
     </li>
     <li class="clearfix"><label class="label_name col-xs-1"><i>*</i>内容介绍：&nbsp;&nbsp;</label>
     <div class="Add_content col-xs-11"><script id="editor" type="text/plain" style="width:100%;height:500px;"></script></div>
     </li>  
 </ul>
 <div class="Button_operation btn_width">
    <button class="btn button_btn bg-deep-blue" type="button" id="button">保存并提交</button>
    <button class="btn button_btn bg-orange" type="button">保存草稿</button>
    <button class="btn button_btn bg-gray" type="button">取消添加</button>
 </div>

</div>
</div>
</body>
</html>

   <!--复文本编辑框-->
    <script type="text/javascript" charset="utf-8" src="js/utf8-jsp/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="js/utf8-jsp/ueditor.all.min.js"> </script>
    <script type="text/javascript" charset="utf-8" src="js/utf8-jsp/lang/zh-cn/zh-cn.js"></script>

<script>
$(function(){
  $("#button").click(function(){
    var goods_name = $("input[name='goods_name']").val();
    var goods_brief = $("input[name='goods_brief']").val();
    var cate = $("#cate").find("input[type='radio']:checked").next().html();
    var sku = $("#clear").find("div");
    var str = '';
    $.each(sku,function(){
      var a = $(this).find("input[type='radio']:checked").next().html();
      var b = $(this).find("input[name='price']").val();
      var c = $(this).find("input[name='number']").val();
      str+='__'+a+'_'+b+'_'+c;
    })
    $.ajax({
      type: 'POST',
      url: '../index.php?r=products/add_shop',
      data: {
        'goods_name':goods_name,
        'goods_brief':goods_brief,
        'cate':cate,
        'str':str
      },
      success: function(data){
        if(data == 1){
          window.location.href='../index.php?r=products/products';
        }else{
          alert('添加失败');
        }
      }
      
    });
      
})
 var ue = UE.getEditor('editor');
});
$(document).ready(function(){
    var spotMax = 8;
  if($('div.images_Upload').size() >= spotMax) {$(obj).hide();}
  $("#add_Upload").on('click',function(){ 
       var cid =$('.images_Upload').each(function(i){ $(this).attr('id',"Uimages_Upload_"+i)});
       addSpot(this, spotMax, cid);
  });
});
function addSpot(obj, sm ,sid) {
	  $("#Upload").append("<div class='images_Upload clearfix margin-bottom' id='"+sid+"'>"+
	  "<span class='Upload_img'><input name='' type='file' /></span>"+
	  "<a href='javascript:ovid()' class='operating delete_Upload'><i class='fa fa-remove'></i></a>"+
	  "<a href='javascript:ovid()' class='operating' onclick='preview_img(this.id)'><i class='fa  fa-image'></i></a>"+
	  "</div>&nbsp;")  
	.find(".delete_Upload").click(function(){
		if($('div.images_Upload').size()==1){
			layer.msg('请至少保留一张图片!',{icon:0,time:1000});			
			}
			else{
				 $(this).parent().remove();
                 $('#add_Upload').show();
				} 				
				
  });
  if($('.delete_Upload').size() >= sm) {$(obj).hide();layer.msg('当前为最大图片添加量!',{icon:0,time:1000});}}
 /*checkbox激发事件*/
$('#checkbox').on('click',function(){
	if($('input[name="checkbox"]').prop("checked")){
		 $('.Date_selection ').css('display','block');
		}
	else{
		
		 $('.Date_selection').css('display','none');
		}	
	});
function add_category(){
	 $(".add_category_style").toggle();
	
	}
  /******时间设置*******/
  var start = {
    elem: '#start',
    format: 'YYYY/MM/DD hh:mm:ss',
    min: laydate.now(), //设定最小日期为当前日期
    max: '2099-06-16 23:59:59', //最大日期
    istime: true,
    istoday: false,
    choose: function(datas){
         end.min = datas; //开始日选好后，重置结束日的最小日期
         end.start = datas //将结束日的初始值设定为开始日
    }
};
var end = {
    elem: '#end',
    format: 'YYYY/MM/DD hh:mm:ss',
    min: laydate.now(),
    max: '2099-06-16 23:59:59',
    istime: true,
    istoday: false,
    choose: function(datas){
        start.max = datas; //结束日选好后，重置开始日的最大日期
    }
};
laydate(start);
laydate(end);
/*********滚动事件*********/
$("body").niceScroll({  
	cursorcolor:"#888888",  
	cursoropacitymax:1,  
	touchbehavior:false,  
	cursorwidth:"5px",  
	cursorborder:"0",  
	cursorborderradius:"5px"  
});
</script>
<body class="view" contenteditable="true" spellcheck="false" style="overflow-y: hidden; height: 500px; cursor: text;">
  <p>a</p>
</body>