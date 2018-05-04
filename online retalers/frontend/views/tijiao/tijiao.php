<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0096)http://cart.wbiao.cn/success?order_id=102338&payment_id=2&token=846a32919ddd22bffc6d85fa1781e2d6 -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>订单提交成功_喜悦手表网</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8">

<link rel="stylesheet" href="css/2.css">
<!--[if lte IE 6]>
<link rel="stylesheet" href="http://qd.wbiao.cn/src2/css/common/3.0/ie6.css?t=201307300952">
<![endif]-->
</head>

<body style="">
<div id="member_info2"></div>
<div id="header">
    <div class="top">
    <ul>
        <li id="member_info"><a href="?r=login/login" title="登录" rel="nofollow">登录</a><span>&nbsp;|&nbsp;</span><a href="?r=reg/reg" title="注册" rel="nofollow">注册</a></li>
        <li>&nbsp;|&nbsp;</li>
        <li><a href="?r=order/order" rel="nofollow" title="我的订单">我的订单</a></li>
        <li>&nbsp;|&nbsp;</li>
        <li class="s__center"><a class="link_center" href="#" rel="nofollow" title="会员中心">会员中心&nbsp;<span class="s__arrow_red_down">&nbsp;</span></a>
            <div id="user_menu_list">
                <p>您好! 进入会员中心请先<a href="?r=login/login" >&nbsp;登录&nbsp;</a>或<a href="?r=reg/reg" >&nbsp;注册&nbsp;</a></p>
            </div>
        </li>
        <li>&nbsp;|&nbsp;</li>
        <li class="s__clearing"><div class="s__cart"><a href="?r=car/car" rel="nofollow">去购物车结算&nbsp;<span class="s__arrow_red_down">&nbsp;</span></a></div></li>
    </ul>
    </div> 
    <div class="w750 mt30 fr">
        <ul class="m_0_23 inline w464 fr li_left li">
            <li class="w14 h14 circle bp_0-36"></li>
            <li class="w136 h8 mt6 bt_2_f1f">&nbsp;</li>
            <li class="w14 h14 circle bp_0-36"></li>
            <li class="w136 h8 mt6 bt_2_f1f">&nbsp;</li>
            <li class="w14 h14 circle bp_0-36"></li>
            <li class="w136 h8 mt6 bt_2_f1f">&nbsp;</li>
            <li class="w14 h14 circle bp_0-19"></li>
        </ul>
        <ul class="w510 mt10 fr li_left li">
            <li class="w60 bold f14 c666">选购商品</li>
            <li class="w90">&nbsp;</li>
            <li class="w60 bold f14 cd00">提交订单</li>
            <li class="w90">&nbsp;</li>
            <li class="w60 bold f14 c666">支付订单</li>
            <li class="w90">&nbsp;</li>
            <li class="w60 bold f14 c666">等待签收</li>
        </ul>
    </div>
    <h1><br /><img src="css/images/LOGO.png" /></h1>
</div>

<style>
#main{overflow: visible;}
input.error{
    border:1px solid #d00000;
}
label.error{
    position: absolute;
    top: -15px;
    left: 5px;    
    color: #fff !important;
    background-color: #d00000;
    font-size: 12px;
    height: 16px;
    line-height: 16px;    
    text-align: center;
    display: block;    
}
</style>

<script>
var rules = {"rules":{"shipping_address_id":{"required":true},"bonus":{"non_default":true,"alpha_num":true,"maxlength":15},"order_note":{"non_default":true,"real_str":true,"maxlength":255}},"messages":{"shipping_address_id":{"required":"\u8bf7\u9009\u62e9\u6536\u8d27\u5730\u5740"},"bonus":{"non_default":"\u4e0d\u80fd\u8f93\u5165\u9ed8\u8ba4\u503c","alpha_num":"\u8bf7\u8f93\u5165\u5b57\u6bcd,\u6570\u5b57","maxlength":"\u8f93\u5165\u7684\u5b57\u7b26\u957f\u5ea6\u4e0d\u80fd\u8d85\u8fc715\u4e2a\u5b57\u7b26"},"order_note":{"non_default":"\u4e0d\u80fd\u8f93\u5165\u9ed8\u8ba4\u503c","real_str":"\u4e0d\u80fd\u5305\u542b\u7279\u6b8a\u5b57\u7b26\u6216\u7a7a\u683c","maxlength":"\u8f93\u5165\u7684\u5b57\u7b26\u957f\u5ea6\u4e0d\u80fd\u8d85\u8fc7255\u4e2a\u5b57\u7b26"}}};
rules.messages.province_id = {"min":"\u8BF7\u9009\u62E9\u7701\u4EFD"};
rules.messages.city_id = {"min":"\u8BF7\u9009\u62E9\u57CE\u5E02"};
rules.messages.county_id = {"min":"\u8BF7\u9009\u62E9\u53BF/\u533A"};

$(function(){

    rules.ignore = '.ignore';
    $("#order_form").validate(rules);

    coupon(); //优惠券
    gift_card();  //礼品卡

});

function formCheck(){
    if($('#chaAddr').length>0){
        alert('请先保存收货地址！');
        $('.gotop').trigger('click');
        return false;
    }

    if($('#newAddr').find('input:radio:checked').length>0){
        alert('请选择收货地址！');
        $('.gotop').trigger('click');
        $('#newAddr').trigger('click');
        return false;
    }

    if(!$("#order_form").valid()) return false; //验证失败不提交

    var order_note = $('#order_note');
    order_note.val() == order_note.attr('tip') ? order_note.val('').addClass('ignore') : order_note.removeClass('ignore');

    var bonus = $('#bonus');
    bonus.val() == bonus.attr('tip') ? bonus.val('').addClass('ignore') : bonus.removeClass('ignore');

}

function coupon(){
    //订单页选择使用优惠券
    $('a#bonus_button').bind('click', function() {
        var $bonus = $('#bonus');
        if(typeof($(this).attr("oprid"))!='undefined'){
            $bonus.val($(this).attr("oprid"));
        }

        if($.trim($bonus.val()) == ''){
            alert('请输入优惠券');return false;
        }
        var p1 = /^(\d{9,12})$/;
        var p2 = /^[a-z]\d{6,}$/i;
        var bonus_val = $.trim($bonus.val());
        if (!p1.test(bonus_val) && !p2.test(bonus_val) && bonus_val != 'NYYH200') {
            alert('请输入正确的优惠券');return false;
        }
        var bonus = $.trim($bonus.val());
        $.post(cart_wbiao_cn + "index/bonus", { bonus : bonus },
            function(result){
                if(result.errors == 0){
                    $("#bonus_amount").html(result.bonus_money);
                    $("#order_total").html(result.order_amount);
                    if(parseInt(result.order_amount) <= 0){
                        //更新礼品卡使用金额
                        change_gift_card_money(result.bonus_money);
                    }
                }else{
                    alert(result); return false;
                }
            }, "json");

        return false;
    });        
}

</script>

<script type="text/javascript">

    //绑定礼品卡事件
    function gift_card(){

        var gift_card_sn_1 = $("#gift_card_sn_1");
        var gift_card_sn_2 = $("#gift_card_sn_2");
        var gift_card_pwd = $("#gift_card_pwd");
        var gift_card_button = $("#gift_card_button");

        gift_card_sn_1.bind('keyup', function(){
            if($(this).val().length==4){
                gift_card_sn_2.focus();
            }
        });
        gift_card_sn_2.bind('keyup', function(){
            if($(this).val().length==11){
                gift_card_pwd.focus();
            }
        });
        gift_card_pwd.bind('keyup', function(){
            if($(this).val().length==10){
                gift_card_button.focus();
            }
        });
        gift_card_button.bind('click', function(){

            if(!check_need_pay()){
                return false;
            }

            var gift_card_sn_1_val = $.trim(gift_card_sn_1.val());
            var gift_card_sn_2_val = $.trim(gift_card_sn_2.val());
            var gift_card_pwd_val = $.trim(gift_card_pwd.val());
            if(false==/\d{4}/.test(gift_card_sn_1_val)){
                alert('请输入前4位卡号');
                gift_card_sn_1.select().focus();
                return false;
            }
            if(false==/\d{11}/.test(gift_card_sn_2_val)){
                alert('请输入后11位卡号');
                gift_card_sn_2.select().focus();
                return false;
            }
            if(false==/[a-zA-Z0-9]{10}/.test(gift_card_pwd_val)){
                alert('请输入密码');
                gift_card_pwd.select().focus();
                return false;
            }
            var sn = gift_card_sn_1_val+gift_card_sn_2_val;
            var pwd = gift_card_pwd_val;

            $.ajax({
                type: 'POST',
                cache: false,
                url: 'giftcard/toggle_use_status_by_sn_pwd',
                data: {sn:sn,pwd:pwd},
                dataType: 'json',
                success: function(result){
                    if(result.errors == 1){
                        alert(result.message);
                    }else{
                        add_gift_card(result.data);
                    }
                }
            });

        });

        //绑定复选框单击事件
        $("input[name='gift_card_button']").each(function(){
            $(this).bind("click", function(){
                if($(this).attr("checked")!="checked"){
                    //没有余额，不允许使用
                    if(parseInt($('#balance_'+$(this).val()).text())<=0){
                        return false;
                    }
                    if(!check_need_pay()){
                        return false;
                    }
                }
                on_gift_card_button_click(this);
            });
        });
    }

    //检查是否需要使用礼品卡
    function check_need_pay(){
        return parseInt($("#order_total").text())>0;
    }

    //复选框单击事件
    function on_gift_card_button_click(_this){

        var $this = $(_this);
        var val = $this.val();
        toggle_use_gift_card(val);
        if(parseInt($this.attr('anonymous'))==0){
            $("#gift_card_" + val).remove();
            $("#gift_card_" + val + '_line').remove();
        }else{
            toggle_gift_card_style(val);
        }
    }

    //统计正在使用中的礼品卡
    function stat_using_gift_card(){
        var input = $("input:checked[name=gift_card_button]");
        var arr = $("span[name=use_amount]");
        var count = input.length;
        var amount = 0.00;
        arr.each(function(){
            amount += parseFloat($(this).text());
        });
        $("#stat_use_count").text(count);
        $("#stat_use_amount").text(amount);
        $("#gift_card_amount").text(amount);
    }

    //更新订单最终应付金额
    function update_order_amount(){
        var goods_amount = parseInt($("#goods_amount").text());
        var discount_amount = parseInt($("#discount_amount").text());
        var bonus_amount = parseInt($("#bonus_amount").text());
        var gift_card_amount = parseInt($("#gift_card_amount").text());
        if(isNaN(discount_amount)) discount_amount = 0;
        var order_amount = goods_amount - discount_amount - bonus_amount - gift_card_amount;
        $("#order_total").text(order_amount);
    }

    //切换礼品卡的使用状态样式
    function toggle_gift_card_style(v){
        $("#gift_card_"+v).toggleClass("c000");
        var btn = $("#gift_card_button_"+v);
        btn.attr("checked", ! btn.attr("checked"));
    }

    //添加礼品卡
    function add_gift_card(data){
        if(data.use_amount<=0){
            return false;
        }
        if($("#gift_card_"+data.user_gift_card_id).length==0){
            var html = '';
            html += '<dl id="gift_card_'+data.user_gift_card_id+'" class="m_5_0 pl10 h20 c000">';
            html += '<dt class="fl bold">匿名礼品卡</dt>';
            html += '<dd class="w160 tc fl">卡号：'+data.gift_card_sn+'</dd>';
            html += '<dd class="w100 tc fl">金额：'+data.amount+'.00元</dd>';
            html += '<dd class="w100 tc fl">余额：'+data.balance+'.00元</dd>';
            html += '<dd class="w100 tc fl">使用：<span id="use_amount_'+data.user_gift_card_id+'" name="use_amount">'+data.use_amount+'.00</span>元</dd>';
            html += '<dd class="w70 tc fl">&nbsp;&nbsp;<label class="c000 ul"><input type="checkbox" checked="checked" anonymous='+(data.user_id>0?1:0)+' data="'+data.balance+'" value="'+data.user_gift_card_id+'" name="gift_card_button" id="gift_card_button_'+data.user_gift_card_id+'" onclick="javascript:on_gift_card_button_click(this);">使用</label></dd>';
            html += '</dl>';
            html += '<dl id="gift_card_'+data.user_gift_card_id+'_line" class="bt_1_f6f h1"></dl>';
            $("#gift_card_input_container").before(html);
            stat_using_gift_card();
            update_order_amount();
            reset_gift_card_input();
        }
    }

    //使用/不使用礼品卡
    function toggle_use_gift_card(id){

        $.ajax({
            type: 'POST',
            cache: false,
            url: 'giftcard/toggle_use_status',
            data: {id: id},
            dataType: 'json',
            success: function(result){
                if(result.errors==1){
                    $("#gift_card_button_"+id).attr("checked", false);
                    $("#gift_card_"+id).removeClass("c000");
                    alert(result.message);
                    return false;
                }
                //使用金额为0，取消使用
                if(result.data.use_amount==0){
                    $("#gift_card_button_"+result.data.user_gift_card_id).attr("checked", false);
                    $("#gift_card_"+result.data.user_gift_card_id).removeClass("c000");
                    return false;
                }
                //更新使用金额
                if($("#gift_card_button_"+result.data.user_gift_card_id).attr("checked")!="checked"){
                    $("#use_amount_"+result.data.user_gift_card_id).text("0.00");
                }else{
                    $("#use_amount_"+result.data.user_gift_card_id).text(result.data.use_amount+".00");
                }
                //更新使用状态
                stat_using_gift_card();
                //更新订单应付金额
                update_order_amount();
            }
        });
    }

    //重置礼品卡输入框
    function reset_gift_card_input(){
        $("#gift_card_sn_1").val("卡号").removeClass("c000 bold").addClass("c999");
        $("#gift_card_sn_2").val("卡号").removeClass("c000 bold").addClass("c999");
        $("#gift_card_pwd").val("密码").removeClass("c000 bold").addClass("c999");
    }

    //减少礼品卡金额
    function change_gift_card_money(money){
        var $last = $("input:checked[name='gift_card_button']:last");
        if($last){
            var $use_amount = $("#use_amount_"+$last.val());
            var use_amount = parseInt($use_amount.text());
            if(isNaN(use_amount)==false){
                if(use_amount - money > 0){
                    $use_amount.text(use_amount - money+".00");
                    stat_using_gift_card();
                }else{
                    $use_amount.text("0");
                    toggle_gift_card_style($last.val());
                    stat_using_gift_card();
                    change_gift_card_money(money-use_amount);
                }
            }
        }
    }

    function refresh_gift_card_list(){
        var goods_amount = parseInt($("#goods_amount").text());
        var discount_amount = parseInt($("#discount_amount").text());
        var bonus_amount = parseInt($("#bonus_amount").text());
        var gift_card_amount = parseInt($("#gift_card_amount").text());
        if(isNaN(discount_amount)) discount_amount = 0;
        var money = gift_card_amount - goods_amount + discount_amount + bonus_amount;
        if(money > 0 ){
            change_gift_card_money(money);
        }
    }

    function reload_gift_card_list(){
        $.ajax({
            type: 'GET',
            cache: false,
            url:'order/gift_card_list',
            success:function(html){
                $("#f_gift_card_div_container").html(html);
                $("#gift_card_amount").text(parseInt($("#stat_use_amount").text()));
                gift_card(); //绑定礼品卡事件
            }
        });
    }

</script><div id="main">
    <form id="order_form" name="order_form" action="#" method="post" onsubmit="return formCheck()" novalidate="novalidate">
    <div class="mt30">
        <div>
            <b class="f14">收货信息：</b>
            <font class="c999">我们将选用最专业的快递公司联邦快递、顺丰快递、EMS等</font>
        </div>
        <script>
var rules2 = {"rules":{"consignee":{"required":true,"non_default":true,"real_str":true,"rangelength":[2,20],"maxlength":50},"province_id":{"required":true,"min":1,"number":true,"digits":true},"city_id":{"required":true,"min":1,"number":true,"digits":true},"county_id":{"min":1,"number":true,"digits":true},"zipcode":{"non_default":true,"digits":true,"rangelength":[6,6],"maxlength":6},"address":{"required":true,"non_default":true,"real_str":true,"maxlength":255},"mobile":{"required":true,"non_default":true,"mobile":true,"maxlength":11},"email":{"non_default":true,"email":true,"maxlength":255}},"messages":{"consignee":{"required":"\u8bf7\u586b\u5199\u6536\u8d27\u4eba","non_default":"\u4e0d\u80fd\u8f93\u5165\u9ed8\u8ba4\u503c","real_str":"\u4e0d\u80fd\u5305\u542b\u7279\u6b8a\u5b57\u7b26\u6216\u7a7a\u683c","rangelength":"\u8bf7\u8f93\u51652~10\u4e2a\u4e2d\u6587\u5b57\u7b26","maxlength":"\u8f93\u5165\u7684\u5b57\u7b26\u957f\u5ea6\u4e0d\u80fd\u8d85\u8fc750\u4e2a\u5b57\u7b26"},"province_id":{"required":"\u4e0d\u80fd\u4e3a\u7a7a","min":"\u8bf7\u9009\u62e9\u7701\u4efd","number":"\u8bf7\u8f93\u5165\u6570\u5b57","digits":"\u8bf7\u8f93\u5165\u6574\u6570"},"city_id":{"required":"\u4e0d\u80fd\u4e3a\u7a7a","min":"\u8bf7\u9009\u62e9\u57ce\u5e02","number":"\u8bf7\u8f93\u5165\u6570\u5b57","digits":"\u8bf7\u8f93\u5165\u6574\u6570"},"county_id":{"min":"\u8bf7\u9009\u62e9\u53bf\/\u533a","number":"\u8bf7\u8f93\u5165\u6570\u5b57","digits":"\u8bf7\u8f93\u5165\u6574\u6570"},"zipcode":{"non_default":"\u4e0d\u80fd\u8f93\u5165\u9ed8\u8ba4\u503c","digits":"\u90ae\u7f16\u53ea\u80fd\u4e3a\u6570\u5b57","rangelength":"\u8bf7\u8f93\u5165\u6b63\u786e\u7684\u90ae\u7f16","maxlength":"\u8f93\u5165\u7684\u5b57\u7b26\u957f\u5ea6\u4e0d\u80fd\u8d85\u8fc76\u4e2a\u5b57\u7b26"},"address":{"required":"\u4e0d\u80fd\u4e3a\u7a7a","non_default":"\u4e0d\u80fd\u8f93\u5165\u9ed8\u8ba4\u503c","real_str":"\u4e0d\u80fd\u5305\u542b\u7279\u6b8a\u5b57\u7b26\u6216\u7a7a\u683c","maxlength":"\u8f93\u5165\u7684\u5b57\u7b26\u957f\u5ea6\u4e0d\u80fd\u8d85\u8fc7255\u4e2a\u5b57\u7b26"},"mobile":{"required":"\u4e0d\u80fd\u4e3a\u7a7a","non_default":"\u4e0d\u80fd\u8f93\u5165\u9ed8\u8ba4\u503c","mobile":"\u8bf7\u8f93\u5165\u6b63\u786e\u7684\u624b\u673a\u683c\u5f0f","maxlength":"\u8f93\u5165\u7684\u5b57\u7b26\u957f\u5ea6\u4e0d\u80fd\u8d85\u8fc711\u4e2a\u5b57\u7b26"},"email":{"non_default":"\u4e0d\u80fd\u8f93\u5165\u9ed8\u8ba4\u503c","email":"\u8bf7\u8f93\u5165\u6b63\u786e\u7684\u90ae\u7bb1\u683c\u5f0f","maxlength":"\u8f93\u5165\u7684\u5b57\u7b26\u957f\u5ea6\u4e0d\u80fd\u8d85\u8fc7255\u4e2a\u5b57\u7b26"}}};
rules2.ignore = '.ignore';

$(function(){

    deliery_addr('#addrIfr'); //收货地址操作

    $("#area").area({cache:region});

});

//收货信息js处理
function deliery_addr(id){
    var $id = $(id); //对查找的对象赋值
    _clk('#login_now'); //登录状态判断
    _defAddr(id); //选择默认的地址
    _hovBg(id); //经过的着色效果
    _changeInfo(id); //更改收货信息
    _canAddr(id); //取消提交地址
    _loadArea(id); //加载地区js
    _cfmAddr(id); //确认提交地址

    
    _closeForm(id); //关闭表单，单选按钮切换

}

var _clk = function(id){ //未登录触发弹窗
    var $id = $(id);
    if($('#no_login_user').attr('oprid')=='1'){
        fcbox(id, true); //弹窗
        $id.trigger("click");
    }
};

var _defAddr = function(id){ //选择默认地址
    var shipping_address_id = parseInt($.cookie('shipping_address_id'));
    var address_id = $('#address_'+shipping_address_id);
    if(shipping_address_id){
        if(address_id.length == '0'){
            $.cookie('shipping_address_id', '', { expires:-1 });
            _choRadio(id,0);
        }else{
            address_id.find(':radio').prop("checked", true);
            address_id.find('label').removeClass('bgf6f bold br5 c000 w960').addClass('bgf6f bold br5 c000');
        }  
    }else{
        _choRadio(id,0);
    }
};

var _changeInfo = function(id){  //更改收货信息
    var $id = $(id);
    $id.on('click', 'a#change', function(){        
        var $this=$(this).parent().parent(), name=($this.find('#name').text().length>0)?$this.find('#name').text():'收货人姓名', address=($this.find('#address').text().length>0)?$this.find('#address').text():'街道地址', mobile=($this.find('#mobile').text().length>0)?$this.find('#mobile').text():'收件联系及接收通知', email=($this.find('#email').text().length>0)?$this.find('#email').text():'查阅订单最新情况', zipcode=($this.find('#zipcode').text().length>0)?$this.find('#zipcode').text():'邮编(选填)', pr_id=($this.find('#region').attr('d1').length>0)?$this.find('#region').attr('d1'):'0', ci_id=($this.find('#region').attr('d2').length>0)?$this.find('#region').attr('d2'):'0', co_id=($this.find('#region').attr('d3').length>0)?$this.find('#region').attr('d3'):'0';
        var i = $(this).index('a#change');
        _chaLet('hide',id,i);
        _choRadio(id,i);
        _chaLet('show',id,i);
        $id.find('#chaAddr').remove();
        $(this).parent().after('<ul id="chaAddr"class="w970 m0a bgf6f br10 pb20 f13 show"><li class="pl30 h34 pt10 pb2"><span class="f14 fl w80 tr mr5"><b class="cd00 pr5">*</b>收货人:</span><div class="rel inbl"><input type="text"name="consignee"class="b_1_e5e p_0_5 w264 h34 c000"value="'+name+'"tip="收货人姓名"maxlength="10"/></div></li><li class="mt10 pl30 h34 pt2 pb2 rel z100"><span class="f14 fl w80 tr mr5"><b class="cd00 pr5">*</b>地区:</span><div id="area"><dl id="province"class="h34 c000 bold b_1_e5e bgfff rel z10 mr3 fl"><dt class="pl10 pr50 f14 hand"><font data="'+pr_id+'">省</font><s class="w8 h4 tool ab_t50_r10 show ie_f1"></s></dt></dl><dl id="city"class="h34 c000 bold b_1_e5e bgfff rel z10 mr3 fl rel"><dt class="pl10 pr50 f14 hand"><font data="'+ci_id+'">市</font><s class="w8 h4 tool ab_t50_r10 show ie_f1"></s></dt></dl><dl id="county"class="h34 c000 bold b_1_e5e bgfff rel z10 mr3 fl rel pr25"><dt class="pl10 pr25 f14 hand"><font data="'+co_id+'">区/县</font><s class="w8 h4 tool ab_t50_r10 show ie_f1"></s></dt></dl></div><div class="fl rel ml10"><input type="text"class="ignore b_1_e5e p_0_5 w116 h34 c000"name="zipcode"value="'+zipcode+'"tip="邮编(选填)"maxlength="6"/></div></li><li class="mt10 pl30 h34 pt10 pb2"><span class="f14 fl w80 tr mr5"><b class="cd00 pr5">*</b>街道地址:</span><div class="rel inbl"><input type="text"class="b_1_e5e p_0_5 w440 h34 c000"name="address"value="'+address+'"tip="街道地址"maxlength="150"/></div></li><li class="mt10 pl30 h34 pt2 pb2"><span class="f14 fl w80 tr mr5"><b class="cd00 pr5">*</b>手机:</span><div class="rel inbl"><input type="text"class="b_1_e5e p_0_5 w264 h34 c000"name="mobile"value="'+mobile+'"tip="收件联系及接收通知"maxlength="11"/></div></li><li class="mt10 pl30 h34 pt2 pb2"><span class="f14 fl w80 tr mr5"><b class="cd00 pr5">&nbsp;</b>邮箱:</span><div class="rel inbl"><input type="text"class="ignore b_1_e5e p_0_5 w264 h34 c000"name="email"value="'+email+'"tip="查阅订单最新情况"maxlength="60"/></div></li><li class="mt10 pl30 h34 pt2 pb2"><span class="f14 fl w80 tr mr5">&nbsp;</span><div class="rel inbl"><a href="javascript:;"id="confirm"class="w80 h26 f14 bold bgd00 inbl tc cfff mr15">保存</a><a href="javascript:;"id="cancel"class="w80 h26 f14 bold bgccc inbl tc cfff">取消</a></div></li></ul>');
    });    
};

var _newAddr = function(id){ //插入新地址
    var $id = $(id);
    var label = $id.find('li:last-child > label');
    var i = label.index('label');
    _choRadio(id,i);
    label.addClass('w970').after('<ul id="chaAddr"class="w940 m0a bgf6f br10 pb20 f13 pl30 show"><li class="h34 pt10 pb2 rel"><span class="f14 fl w80 tr mr5"><b class="cd00 pr5">*</b>收货人:</span><div class="rel inbl"><input type="text"name="consignee"class="b_1_e5e p_0_5 w264 h34 c999"value="收货人姓名"tip="收货人姓名"maxlength="10"/></div></li><li class="mt10 h34 pt2 pb2 rel z100"><span class="f14 fl w80 tr mr5"><b class="cd00 pr5">*</b>地区:</span><div id="area"><dl id="province"class="h34 c999 bold b_1_e5e bgfff rel z10 mr3 fl"><dt class="pl10 pr50 f14 hand"><font data="0">省</font><s class="w8 h4 tool ab_t50_r10 show ie_f1"></s></dt></dl><dl id="city"class="h34 c999 bold b_1_e5e bgfff rel z10 mr3 fl rel"><dt class="pl10 pr50 f14 hand"><font data="0">市</font><s class="w8 h4 tool ab_t50_r10 show ie_f1"></s></dt></dl><dl id="county"class="h34 c999 bold b_1_e5e bgfff rel z10 mr3 fl rel pr25"><dt class="pl10 pr25 f14 hand"><font data="0">区/县</font><s class="w8 h4 tool ab_t50_r10 show ie_f1"></s></dt></dl></div><div class="rel fl ml10"><input type="text"class="ignore b_1_e5e p_0_5 w116 h34 c999"name="zipcode"value="邮编(选填)"tip="邮编(选填)"maxlength="6"/></div></li><li class="mt10 h34 pt10 pb2 rel"><span class="f14 fl w80 tr mr5"><b class="cd00 pr5">*</b>街道地址:</span><div class="rel inbl"><input type="text"class="b_1_e5e p_0_5 w440 h34 c999"name="address"value="街道地址"tip="街道地址"maxlength="150"/></div></li><li class="mt10 h34 pt2 pb2 rel"><span class="f14 fl w80 tr mr5"><b class="cd00 pr5">*</b>手机:</span><div class="rel inbl"><input type="text"class="b_1_e5e p_0_5 w264 h34 c999"name="mobile"value="收件联系及接收通知"tip="收件联系及接收通知"maxlength="11"/></div></li><li class="mt10 h34 pt2 pb2 rel"><span class="f14 fl w80 tr mr5"><b class="cd00 pr5">&nbsp;</b>邮箱:</span><div class="rel inbl"><input type="text"class="ignore b_1_e5e p_0_5 w264 h34 c999"name="email"value="查阅订单最新情况"tip="查阅订单最新情况"maxlength="60"/></div></li><li class="mt10 h34 pt2 pb2"><span class="f14 fl w80 tr mr5">&nbsp;</span><div class="rel inbl"><a href="javascript:;"id="confirm"class="w80 h26 f14 bold bgd00 inbl tc cfff mr15">保存</a><a href="javascript:;"id="cancel"class="w80 h26 f14 bold bgccc inbl tc cfff">取消</a></div></li></ul>');
};

var _choRadio = function(id,i){ //不同单选间切换
    var $id = $(id);
    $id.find(':radio:eq('+i+')').prop("checked", true);
    $id.find('label').removeClass('bgf6f bold br5 c000 w960');
    $id.find('label:eq('+i+')').addClass('bgf6f bold br5 c000');
};

var _chaLet = function(effect,id,i){ //模拟表单
    var $id = $(id);
    if(effect=="hide"){
        $id.find('span#choice').attr('rel','0');
        $id.find('label#label2').remove();
        $id.find('label').show();
    }else if(effect=="show"){
        var label = $id.find('label:eq('+i+')');
        label.parent().find('span#choice').attr('rel','1').removeClass('inline').addClass('hide');
        label.hide();
        label.after('<label id="label2"class="h34 bgf6f show p_10_5 bold br5 c000 w960"><input type="radio"checked="checked"><span class="m_0_5">更改地址</span></label>');        
    }
};

var _hovBg = function(id){ //鼠标经过显示更改删除操作
    var $id = $(id);
    $id.children().on({
        mouseenter: function(){
            if($(this).find('span#choice').attr('rel')==0){
                $(this).find('span#choice').removeClass('hide').addClass('inline');
            }
        },
        mouseleave: function(){
            $(this).find('span#choice').removeClass('inline').addClass('hide');
        }
    });
};

var _closeForm = function(id){ //关闭表单，单选按钮切换
    var $id = $(id);

    $id.find('label').not('#newAddr').click(function(){
        var i = $(this).index('label');
        $id.find('#chaAddr').remove();
        _choRadio(id,i);
        _chaLet('hide',id,i);
    });

    $id.find('li:last-child>label').click(function(){ 
        var chaAddr = $(this).parents('li:last-child').find('#chaAddr');
        if(chaAddr.length>0) return false;

        var i = $(this).index('label');
        $id.find('#chaAddr').remove();
        _choRadio(id,i);
        _chaLet('hide',id,i);
        _newAddr(id);
    });    
};

var _loadArea = function(id){ //预先加载地区
    var $id = $(id);
    $id.on('click', '#change, #newAddr', function(){
        $("#area").area({cache:region}); //地区三级联动
        _valid();
    });
};

var _valid = function(){
    $('#chaAddr').wrapInner('<form />'); //验证必须加上form
    var f = $('#chaAddr').find('form'); //寻找最接近的form元素
    rules2.submitOperation = false; //不使用.submit()

    f.validate(rules2); // 加载验证规则 
};

var _canAddr = function(id){
    var $id = $(id);
    $id.on('click', '#cancel', function(){ //取消地址
        var $parent = $(this).parents('li');
        $parent.find('#label2').remove();
        $parent.find('#chaAddr').remove();
        $parent.find('label').show();
        $parent.find('span#choice').attr('rel','0');
    });
};

var _cfmAddr = function(id){ //确认保存收货地址并提交
    var $id = $(id);
    $id.on('click', '#confirm', function(){
        
        $(this).trigger('submit');

        if($('label.error').is(':visible')) return false;
        $('#chaAddr').find('form').valid();

        var ipt_consignee = $('input[name="consignee"]');
        var ipt_address = $('input[name="address"]');
        var ipt_mobile = $('input[name="mobile"]');
        var ipt_email = $('input[name="email"]');
        var ipt_zipcode = $('input[name="zipcode"]');
        var ipt_province = $('input[name="province_id"]');
        var ipt_city = $('input[name="city_id"]');
        var ipt_county = $('input[name="county_id"]');

                    $.cookie('anonymity-info', ipt_consignee.val()+'|'+ipt_address.val()+'|'+ipt_mobile.val()+'|'+ipt_email.val()+'|'+ipt_zipcode.val()+'|'+ipt_province.val()+'|'+ipt_city.val()+'|'+ipt_county.val(), {expires:7,path:'/',domain:wb_domain});
            $('#addrIfr').html('<li class="mt5"><label class="h34 inbl bgf6f bold br5 c000"><input type="radio"name="shipping_address_id"id="shipping_address_id"value="0"checked="checked"><span class="m_0_5"id="name">'+ipt_consignee.val()+'</span><span class="m_0_5"id="address">'+ipt_address.val()+'</span><span class="m_0_5"id="mobile">'+ipt_mobile.val()+'</span><span class="hide"id="email">'+ipt_email.val()+'</span><span class="hide"id="zipcode">'+ipt_zipcode.val()+'</span><span class="hide"id="region"d1="'+ipt_province.val()+'"d2="'+ipt_city.val()+'"d3="'+ipt_county.val()+'"></span></label><span id="choice"rel="0"class="m_0_5 f12 hide"style="_position:relative;_bottom:10px;"><a href="javascript:void(0);"id="change"class="c999 mr5">更改</a></span><div class="hide"><input type="hidden"name="consignee"value="'+ipt_consignee.val()+'"><input type="hidden"name="address"value="'+ipt_address.val()+'"><input type="hidden"name="mobile"value="'+ipt_mobile.val()+'"><input type="hidden"name="email"value="'+(ipt_email.val()==ipt_email.attr('tip')?'':ipt_email.val())+'"><input type="hidden"name="zipcode"value="'+(ipt_zipcode.val()==ipt_zipcode.attr('tip')?'':ipt_zipcode.val())+'"><input type="hidden"name="province_id"value="'+ipt_province.val()+'"><input type="hidden"name="city_id"value="'+ipt_city.val()+'"><input type="hidden"name="county_id"value="'+ipt_county.val()+'"></div></li>');
            _hovBg('#addrIfr'); //经过的着色效果并显示更改
            });
};

function del_shipping_address(id){
    if (confirm('您确实要把该收货地址删除吗？'))
    $.get("/address/delete", { id : id },
               function(data){
                    $('#address_'+id).remove();
                    if(id == $.cookie('shipping_address_id')){ 
                        //如果本地记录的cookie与删除的id一样则删除cookie并自动选择第一个地址
                        $.cookie('shipping_address_id', '', { expires: -1 });
                    }
                    _choRadio('#addrIfr',0);
                    $('#chaAddr').remove();
                    alert("该地址已经删除!");
            });
}

</script>
<div class="mt20 bl_3_f6f">
    <ul id="addrIfr" class="w970 m0a f14 c333">
                    <div class="clear"></div>

                <li class="mt5">
                        <script>
            $(function(){
                if($.cookie('anonymity-info') !== undefined){
                    var arr = $.cookie('anonymity-info').split('|');
                    $('#addrIfr').html('<li class="mt5"><label class="h34 inbl bgf6f bold br5 c000"><input type="radio"name="shipping_address_id"id="shipping_address_id"value="0"checked="checked"><span class="m_0_5"id="name">'+arr[0]+'</span><span class="m_0_5"id="address">'+arr[1]+'</span><span class="m_0_5"id="mobile">'+arr[2]+'</span><span class="hide"id="email">'+arr[3]+'</span><span class="hide"id="zipcode">'+arr[4]+'</span><span class="hide"id="region"d1="'+arr[5]+'"d2="'+arr[6]+'"d3="'+arr[7]+'"></span></label><span id="choice"rel="0"class="m_0_5 f12 hide"style="_position:relative;_bottom:10px;"><a href="javascript:void(0);"id="change"class="c999 mr5">更改</a></span><div class="hide"><input type="hidden"name="consignee"value="'+arr[0]+'"><input type="hidden"name="address"value="'+arr[1]+'"><input type="hidden"name="mobile"value="'+arr[2]+'"><input type="hidden"name="email"value="'+arr[3]+'"><input type="hidden"name="zipcode"value="'+arr[4]+'"><input type="hidden"name="province_id"value="'+arr[5]+'"><input type="hidden"name="city_id"value="'+arr[6]+'"><input type="hidden"name="county_id"value="'+arr[7]+'"></div></li>');       
                    _hovBg('#addrIfr');
                    $("#change").trigger("click");
                }else{
                    $("#newAddr").trigger("click");
                    $('input[name="mobile"]').val("收件联系及接收通知");$('input[name="email"]').val("查阅订单最新情况");
                }
            })
            </script>
                        <label id="newAddr" class="h34 inbl w970 bgf6f bold br5 c000" style="">
                <input type="radio" name="shipping_address_id" value="">
                <span class="m_0_5">使用新地址</span>
            </label><ul id="chaAddr" class="w940 m0a bgf6f br10 pb20 f13 pl30 show"><form novalidate="novalidate"><li class="h34 pt10 pb2 rel"><span class="f14 fl w80 tr mr5"><b class="cd00 pr5">*</b>收货人:</span><div class="rel inbl"><input type="text" name="consignee" class="b_1_e5e p_0_5 w264 h34 c999" value="收货人姓名" tip="收货人姓名" maxlength="10"></div></li><li class="mt10 h34 pt2 pb2 rel z100"><span class="f14 fl w80 tr mr5"><b class="cd00 pr5">*</b>地区:</span><div id="area"><dl id="province" class="h34 c999 bold b_1_e5e bgfff rel z10 mr3 fl"><dt class="pl10 pr50 f14 hand"><font data="0">省</font><s class="w8 h4 tool ab_t50_r10 show ie_f1"></s><input type="hidden" name="province_id" value="0"></dt><dd class="f13 b_1_e5e bgfff cbbb ab_t34-l1 nowrap hide" style="display: none; "><ul><li class="pl10 pr50 hand h30 ofh show tsC3" data="2">北京</li><li class="pl10 pr50 hand h30 ofh show tsC3" data="3">安徽</li><li class="pl10 pr50 hand h30 ofh show tsC3" data="4">福建</li><li class="pl10 pr50 hand h30 ofh show tsC3" data="5">甘肃</li><li class="pl10 pr50 hand h30 ofh show tsC3" data="6">广东</li><li class="pl10 pr50 hand h30 ofh show tsC3" data="7">广西</li><li class="pl10 pr50 hand h30 ofh show tsC3" data="8">贵州</li><li class="pl10 pr50 hand h30 ofh show tsC3" data="9">海南</li><li class="pl10 pr50 hand h30 ofh show tsC3" data="10">河北</li><li class="pl10 pr50 hand h30 ofh show tsC3" data="11">河南</li><li class="pl10 pr50 hand h30 ofh show tsC3" data="12">黑龙江</li><li class="pl10 pr50 hand h30 ofh show tsC3" data="13">湖北</li><li class="pl10 pr50 hand h30 ofh show tsC3" data="14">湖南</li><li class="pl10 pr50 hand h30 ofh show tsC3" data="15">吉林</li><li class="pl10 pr50 hand h30 ofh show tsC3" data="16">江苏</li><li class="pl10 pr50 hand h30 ofh show tsC3" data="17">江西</li><li class="pl10 pr50 hand h30 ofh show tsC3" data="18">辽宁</li><li class="pl10 pr50 hand h30 ofh show tsC3" data="19">内蒙古</li><li class="pl10 pr50 hand h30 ofh show tsC3" data="20">宁夏</li><li class="pl10 pr50 hand h30 ofh show tsC3" data="21">青海</li><li class="pl10 pr50 hand h30 ofh show tsC3" data="22">山东</li><li class="pl10 pr50 hand h30 ofh show tsC3" data="23">山西</li><li class="pl10 pr50 hand h30 ofh show tsC3" data="24">陕西</li><li class="pl10 pr50 hand h30 ofh show tsC3" data="25">上海</li><li class="pl10 pr50 hand h30 ofh show tsC3" data="26">四川</li><li class="pl10 pr50 hand h30 ofh show tsC3" data="27">天津</li><li class="pl10 pr50 hand h30 ofh show tsC3" data="28">西藏</li><li class="pl10 pr50 hand h30 ofh show tsC3" data="29">新疆</li><li class="pl10 pr50 hand h30 ofh show tsC3" data="30">云南</li><li class="pl10 pr50 hand h30 ofh show tsC3" data="31">浙江</li><li class="pl10 pr50 hand h30 ofh show tsC3" data="32">重庆</li><li class="pl10 pr50 hand h30 ofh show tsC3" data="33">香港</li><li class="pl10 pr50 hand h30 ofh show tsC3" data="34">澳门</li><li class="pl10 pr50 hand h30 ofh show tsC3" data="35">台湾</li></ul></dd></dl><dl id="city" class="h34 c999 bold b_1_e5e bgfff rel z10 mr3 fl rel"><dt class="pl10 pr50 f14 hand"><font data="0">市</font><s class="w8 h4 tool ab_t50_r10 show ie_f1"></s><input type="hidden" name="city_id" value="0"></dt><dd class="f13 b_1_e5e bgfff cbbb ab_t34-l1 nowrap hide" style="display: none; "><ul></ul></dd></dl><dl id="county" class="h34 c999 bold b_1_e5e bgfff rel z10 mr3 fl rel pr25"><dt class="pl10 pr25 f14 hand"><font data="0">区/县</font><s class="w8 h4 tool ab_t50_r10 show ie_f1"></s><input type="hidden" name="county_id" value="0"></dt><dd class="f13 b_1_e5e bgfff cbbb ab_t34-l1 nowrap hide" style="display: none; "><ul></ul></dd></dl></div><div class="rel fl ml10"><input type="text" class="ignore b_1_e5e p_0_5 w116 h34 c999" name="zipcode" value="邮编(选填)" tip="邮编(选填)" maxlength="6"></div></li><li class="mt10 h34 pt10 pb2 rel"><span class="f14 fl w80 tr mr5"><b class="cd00 pr5">*</b>街道地址:</span><div class="rel inbl"><input type="text" class="b_1_e5e p_0_5 w440 h34 c999" name="address" value="街道地址" tip="街道地址" maxlength="150"></div></li><li class="mt10 h34 pt2 pb2 rel"><span class="f14 fl w80 tr mr5"><b class="cd00 pr5">*</b>手机:</span><div class="rel inbl"><input type="text" class="b_1_e5e p_0_5 w264 h34 c999" name="mobile" value="收件联系及接收通知" tip="收件联系及接收通知" maxlength="11"></div></li><li class="mt10 h34 pt2 pb2 rel"><span class="f14 fl w80 tr mr5"><b class="cd00 pr5">&nbsp;</b>邮箱:</span><div class="rel inbl"><input type="text" class="ignore b_1_e5e p_0_5 w264 h34 c999" name="email" value="查阅订单最新情况" tip="查阅订单最新情况" maxlength="60"></div></li><li class="mt10 h34 pt2 pb2"><span class="f14 fl w80 tr mr5">&nbsp;</span><div class="rel inbl"><a href="javascript:;" id="confirm" class="w80 h26 f14 bold bgd00 inbl tc cfff mr15">保存</a><a href="javascript:;" id="cancel" class="w80 h26 f14 bold bgccc inbl tc cfff">取消</a></div></li></form></ul>                       
        </li>
    </ul>
</div>    </div>
    <div class="mt30">
        <div>
            <b class="f14">商品详细：</b>
        </div>
        
        <div class="clear"></div>
        <div class="bl_3_f6f">
            <div class="w970 mt20 m0a bgf6f br10" id="product_list">
                <ul class="c999 f13 h40 li_left">
                    <li class="w510 tl pl20">商品</li>
                    <li class="w120 tc">售价</li>
                    <li class="w120 tc">数量</li>
                    <li class="w100 tr pl64">操作</li>
                </ul>

                                
                <ul class="bt_1_eae bb_1_fff" id="goods_line_548546"></ul>
                <ul class="c999 f13 h120 li_left" id="goods_list_548546">
                    <li class="w510 tl pl20">
                                                <a href="#" target="_blank" class="fl">
                                            <img src="images/3412_183_24_30_27_27885.jpg" width="100px" height="100px" class="m_10_20_10_0" alt="">
                        </a>
                        <font class="w390 bold c333 fl h20 mt35">瑞士爱宝时（EPOS）-Passion系列 3412.183.24.30.27 机械男表</font>
                    </li>
                    <li class="w120 tc">
                        <font class="bold ccf0 f16">￥9500</font>
                    </li>
                    <li class="w120 tc">
                                                <span class="btne3d w18 h22 inbl re-t0-l5 ie-t1_m50 ie_mi" oprtype="minus" oprid="548546">—</span>
                        <input type="text" id="goods_number_548546" name="goods_number" maxlength="4" size="2" value="1" class="ignore b_1_e5e p_0_5 tc w28 h20  ie-t1_m50 ie_mi goods_number c000 bold" oprid="548546" oprnum="1" title="1">
                        <span class="btne3d w18 h22 inbl re_t0-l5 ie-t1_m50 ie_mi" oprtype="add" oprid="548546">+</span>
                                                                        </li>
                    <li class="w100 tr pl64">
                        <a href="javascript:void(0)" data="548546" class="delete ul h120">删除</a>
                    </li>
                </ul>

                                
                                    <ul class="bt_1_eae bb_1_fff lb_ul"></ul>
                    <ul class="c999 f13 h40 li_left lb_ul">
                        <li class="w510 pl20"><font class="bold c333">爱宝时全球联保卡</font></li>
                        <li class="w120 tc"><font class="ccf0">标配</font></li>
                        <li class="w120 tc c333">1</li>
                        <li class="w100 tr pl64">&nbsp;</li>
                    </ul>

                    <ul class="bt_1_eae bb_1_fff lb_ul"></ul>
                    <ul class="c999 f13 h40 li_left lb_ul">
                        <li class="w510 pl20"><font class="bold c333">爱宝时说明书</font></li>
                        <li class="w120 tc"><font class="ccf0">标配</font></li>
                        <li class="w120 tc c333">1</li>
                        <li class="w100 tr pl64">&nbsp;</li>
                    </ul>
                                    




                <input type="hidden" id="refresh_when_delete" value="0">

                <ul class="bt_1_eae bb_1_fff"></ul>
                <div class="c999 f12">
                    <div class="fl">
                                                <div class="m20">
                                                       <div class="m20">
                            <b class="f14 c333">折扣优惠：</b>
                            <select class="w410" onchange="javascript:location.href=&#39;/index/select_activity?id=&#39;+this.value">
                                <option value="-1">----- 选择参与的活动折扣形式 -----</option>
                                <option value="124">兴业银行活动</option>
<option value="123">招行特惠活动：最高立减2000元！</option>
                                <!--<option value="-1" selected>直接使用优惠券（不参与活动）</option>-->
                            </select>
                            
                                                    </div>
                                                    </div>
                            


                        


                                                                        <div class="mt10 fl"></div>
                                            </div>


                    <div class="fr mt10">
                        <ul class="price">
                            <li class="w200 h24 f14 c333">
                                <span class="w100 tr fl">商品总额：</span>
                                <span class="w90 tr bold ccf0 fl" id="f_goods_total">￥<span id="goods_amount">9500</span></span>
                            </li>
                            <li class="w200 h24 f14 c333">
                                <span class="w100 tr fl">运费：</span>
                                <span class="w90 tr bold ccf0 fl">+￥0</span>
                            </li>
                            <li class="w200 h24 f14 c333">
                                <span class="w100 tr fl">优惠券：</span>
                                <span class="w90 tr bold ccf0 fl" id="bonus_detail">
                                                                            - ￥<span id="bonus_amount">0</span>
                                                                    </span>
                            </li>
                            <li class="w200 h24 f14 c333">
                                <span class="w100 tr fl">礼品卡：</span>
                                <span class="w90 tr bold ccf0 fl">
                                    - ￥<span id="gift_card_amount">0</span>
                                </span>
                            </li>
                                                    </ul>
                    </div>
                </div>

                    <div id="f_gift_card_div_container">


<div class="c999 f12">
    <div class="fl">
      <div class="mt10 fl"></div>
    </div>

</div></div>

                <div class="clear"></div>
            </div>
        </div>    
        <div id="ope" class="w930 m0a">
            <div class="fl">
                <div class="mt70 rel">
                    <input type="text" name="order_note" id="order_note" class="ignore b_1_e5e p_0_5 w464 h34 cbbb f14" value="写下你的订单留言..." tip="写下你的订单留言..." maxlength="255">
                </div>
            </div>
            <div class="fr">
                <div class="tc cd00 mt20">
                    <font class="f12 bold">最终需支付：￥</font>
                    <font class="f28" id="order_total">9500</font>
                </div>
                <div class="mt20">
                    <input type="hidden" id="all_has_stock" value="1">
                    <a rel="nofollow" id="order_pop_login" href="#" class=" fancybox.iframe" style="display:none;">检查登录</a> 
                    <input type="submit" id="order_checkout_submit" class="btnd00 w212 h40 f16 bold" value="提交订单，去支付">
                    <b id="wait_submit" class="hide">订单正在提交中，请稍候<img style="width:24px;height:24px;" src="images/loading_1.gif"></b>
                </div>
            </div>
        </div>
    </div>
    </form>
</div>



<div id="footer">
  <div class="info">
    <p class="copyright">                喜悦名表 版权所有  Copyright 2014-2015 www.xxxxxxx.cn . LTD ALL RIGHT RESERVED.

    </p>
  </div>
</div>
</body>
</html>