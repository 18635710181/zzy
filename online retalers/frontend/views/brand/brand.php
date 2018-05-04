<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Cache-Control" content="no-transform" />
    <title>喜悦手表网【官网】：中国最大的正品名表商城！买手表，上喜悦手表！</title>
    <meta name="keywords" content="手表,买手表,喜悦手表网,喜悦手表网官网,名表商城,正品手表，瑞士手表" />
    <meta name="description" content="【喜悦手表网官网】：买原装正品世界名表：浪琴、天梭、欧米茄、劳力士等瑞士手表品牌，信用卡分期付款，正品保证，全国联保，终身售后保障！" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8" />

    <!--[if lte IE 6]>
    <script src="<?=Yii::$app->params['ahead_js']?>/DD_belatedPNG.js"></script>
    <script>
        DD_belatedPNG.fix('.head .c__logo, .c__corner, .c__b_dotted, .bx-pager-link, .c__ls_pointer, .c__rs_pointer, .c__tMsk, .c__tm_more, .gMenu, .c__gotop, .c__suggest, .c__compare, .close, .n__dotted,.n__acn,.n__t_top,.n__t_bottom,.n__rank,.n__letter,.n__sina,.n__tqq,.n__app,.iphone,.android,.weixin, .n__left_brands,.n__right_brands, .n__arrleft,.n__arrright, .n__squ, .n__squ_small, .n__sign, .n__src_btn, .n__sa_rank, .n__smaller, .n__bigger, .n__red_pointer, .n__pl_btn, .n__ckb, .n__face, .n__sc_bg, .n__c_add, .n__c_rank, .n__r_bg, .n__sina_weibo, .n__qq_weibo, .n__weixin, .n__bo_pointer, .jb_ad img, #kf, #kfs, #goods #lookOver, .cc a.on span, #goods .agency, .bx-prev, .bx-next, .fancybox-wrap .hand, .c__pTag ');
    </script>
    <![endif]-->
    <!-- banner js -->
    <script src="<?=Yii::$app->params['ahead_js']?>/banner.js"></script>
    <!-- end banner js -->
    <link rel="stylesheet" href="css/sxg.css">
    <script src="<?=Yii::$app->params['ahead_js']?>/jquery.js"></script>
    <script src="Script<?=Yii::$app->params['ahead_js']?>/global.js"></script>
    <!--修订功能js错误 重置模块功能：下拉菜单隐藏、头部幻灯片， 修改时间2014年5月20日11:11:17 修改员：huang-->
    <script type="text/javascript">
        $(function() {
            //我们一开始就隐藏所有的下拉菜单
            $('#dropdown_nav li').find('.sub_nav').hide();
            //当鼠标悬停在主导航链接，我们发现下拉菜单中的相应链接。
            $('#dropdown_nav li').hover(function() {
                $(this).find('.sub_nav').fadeIn(100);
                $(this).find(".sub_link").addClass("cur");
            }, function() {
                $(this).find('.sub_nav').fadeOut(50);
                $(this).find(".sub_link").removeClass("cur");
            });
        });
    </script>
    <script type="text/javascript">
        function mOver()
        {
            document.getElementById("caier").style.display="block";
        }

        function mOut()
        {
            document.getElementById("caier").style.display="none";
        }
    </script>
    <!-- end 修改完毕-->
</head>
<body>
<!-- Begin header -->
<div id="member_info2"></div>
<div class="head">
    <div class="r1 w1225">
        <div class="le">
            <a href="#" rel="nofollow" class="ico c__sina" title="新浪微博" target="_blank"><img src="css/images/weibo1.png" /></a>
            <a href="javascript:;" rel="nofollow" class="ico c__dimension" onMouseOver="mOver()" onMouseOut="mOut()"><img src="css/images/weixin2.png" /></a>
            <span class="tFav"><a href="javascript:;" rel="nofollow" onclick="AddFavorite(window.location,document.title);" class="f12 c666">收藏</a></span>
            <div id="caier" style=" display:none; width:200px; height:200px;"><img src="<?=Yii::$app->params['ahead_css']?>/images/api.png" style="width:100%; height:100%" /></div>
        </div>
        <div class="ri">
            <span class="tLnk2"><a href="?r=car/car"  >购物车</a></span>
            <span class="tLnk1">
                <?php
                $cookies = Yii::$app->request->cookies;
                if ($cookies->has('user')){
                    echo isset($cookies['user']->value['user_name']) ? $cookies['user']->value['user_name']."欢迎登陆" : $cookies['user']->value ."欢迎登陆";
                }?>
                <a href="?r=login/login" class="f12">登录</a>


                <a href="?r=reg/reg" class="f12">注册</a>
            </span>
        </div>
    </div>
    <div class="r2 w1225">
        <h1 class="logo w440"><img src="<?=Yii::$app->params['ahead_css']?>/images/LOGO.png" /></h1>
        <div class="srh">
            <form id="searchForm" name="searchForm" method="get" action="/shoubiao.html" onsubmit="return checkSearchForm()"><input type="hidden" value="1" name="dow" id="dow">
                <input name="w" id="w" type="text" class="tIptTxt c999 f14" value="搜索 品牌/系列/型号" title="搜索 品牌/系列/型号" onfocus="javascript:var t=$(this); if(t.val()==t.attr('title')) t.val('');" onblur="javascript:var t=$(this); if(t.val()=='') t.val(t.attr('title'));" />
                <a class="c__search">搜索</b></a>
            </form>
        </div>
        <div class="wbPt">
            <span class="tTel" style="font-size:16px;">服务热线：400-888-8888</span>
        </div>
    </div>



    <!-- 模块修改：腕表弹出层，修改内容：从展开修改为收起。修改2014-5-19 15:17:34 修改员：huang-->
    <div class="r3 w1225" style="position:relative">

        <ul class="gNav">

            <li><a  title="首页" class="cur"  href="?r=index/index">首页</a></li>
            <li><a target="_blank"  href="?r=tejia/tejia" title="本期特价">本期特价</a></li>
            <li><a target="_blank"  href="?r=time/time" title="限时抢购">限时抢购</a></li>
            <li><a target="_blank"  href="?r=boy/boy" title="男士腕表">男士腕表</a></li>
            <li><a target="_blank"  href="?r=girl/girl" title="女士腕表">女士腕表</a></li>
            <!-- <li><a    href="jimai.html" title="免费寄卖">免费寄卖</a></li>
            <li><a href="huiyuan.html"    style="font-size:15px; color:#ce1739;" title="寻表专区/采购清单"><strong>寻表专区/采购清单</strong></a></li> -->
        </ul>
    </div>
</div>

<!-- End header -->
<link rel="stylesheet" href="css/index.css" type="text/css" media="screen, projection" />
<!--<script type="text/javascript" src="Script/index.js"></script>-->


<!--热销 start-->
<div id="hot_display_position"></div>
<div class="idxSet hotSet">

    <div class="tTit w1225">
        <span class="tNm">[<?=$brand_name['brand_name']?>]</span>
        <ul id="hotTit" class="tGud">

        </ul>

    </div>
    <div class="tBdy w1225" id="hotCon">
        <div class="tPdtLst">
            <div class="tLnk">

            </div>
            <ul>
                <?php foreach ($goods_data as $key => $value): ?>
                <li>
                    <a href="?r=detailed/detailed&goods_id=<?=$value['goods_id']?>"   onclick="_gaq.push(['_trackEvent','首页商品','热销-男士-1','百达翡丽5146R-001@热销-男士-1']);">
                        <!-- <i class="c__tMsk"></i> -->
                        <img src="<?=Yii::$app->params['ahead_img']?>/7718_63938.jpg"  width="250" height="250" />

                        <div class="tNm"><?=$value['goods_name']?></div >
                        <div class="tPrc"><?=$value['goods_price']?>&nbsp;<i class="del">371100</i></div>
                        <div class="tInfo">已售出<b>&nbsp;13(未实现，待修改)</b></div >
                    </a>
                </li>
                <?php endforeach; ?>
            </ul>
            <div class="mLnk">

            </div>
        </div>
        <div class="mLnk">

        </div>
    </div>

</div>


<p align="center">&nbsp;</p>






<!--底部 -->
<div class="foot">
    <div class="r1 w1225">
        <dl class=" w188">
            <dd class=" w110">
                <a href="/help-706.html"   rel="nofollow"><img src="css/images/logoxia.png"/></a>
            </dd>
        </dl>
        <dl class=" w188">
            <dt class=" w70"><i>新手</i></dt>
            <dd class=" w110">
                <a href=""   rel="nofollow">&bull;&nbsp;用户注册</a>
                <a href=""   rel="nofollow">&bull;&nbsp;找回密码</a>
                <a href=""   rel="nofollow">&bull;&nbsp;订购流程</a>
            </dd>
        </dl>
        <dl class=" w188">
            <dt class=" w70"><i>支付</i></dt>
            <dd class=" w110">
                <a href=""   rel="nofollow">&bull;&nbsp;支付方式</a>
                <a href=""   rel="nofollow">&bull;&nbsp;发票说明</a>
                <a href=""   rel="nofollow">&bull;&nbsp;支付问题</a>
            </dd>
        </dl>
        <dl class=" w188">
            <dt class=" w70"><i>配送</i></dt>
            <dd class=" w110">
                <a href=""   rel="nofollow">&bull;&nbsp;配送方式</a>
                <a href=""   rel="nofollow">&bull;&nbsp;配送说明</a>
                <a href=""   rel="nofollow">&bull;&nbsp;包裹签收</a>
            </dd>
        </dl>
        <dl class=" w188">
            <dt class=" w70"><i>保障</i></dt>
            <dd class=" w110">
                <a href=""   rel="nofollow">&bull;&nbsp;退换货政策说明</a>
                <a href=""   rel="nofollow">&bull;&nbsp;如何办理退货</a>
                <a href=""   rel="nofollow">&bull;&nbsp;常见问题</a>
            </dd>
        </dl>
        <dl class=" w188">
            <dt class=" w70"><i>寄卖</i></dt>
            <dd class=" w110">
                <a href=""   rel="nofollow">&bull;&nbsp;寄卖流程</a>
                <a href=""   rel="nofollow">&bull;&nbsp;寄卖说明</a>
                <a href=""   rel="nofollow">&bull;&nbsp;调价与撤卖</a>
            </dd>
        </dl>
    </div>
    <div class="r2 w1225 wide">
        <div class="f333 tmallLinks">
            <a href=""   rel="nofollow">正品保证</a>&nbsp;|&nbsp;
            <a href=""   rel="nofollow">7天退货</a>&nbsp;|&nbsp;
            <a href=""  >售后维修 </a>&nbsp;|&nbsp;
            <a href=""  >全场包邮</a>&nbsp;|&nbsp;
            <a href=""   rel="nofollow">投诉建议</a>
        </div>
        <div>
            喜悦名表 版权所有  Copyright 2014-2015 www.xxxxxxx.cn . LTD ALL RIGHT RESERVED.
            <br/>
        </div>
    </div>
</div><!-- End footer -->

<!--back top -->
<div id="top_item">
    <a id="back_top" onclick="return false;" title="回到顶部"></a>
</div>
<script type="text/javascript">
    $(function() {
        $(window).scroll(function(){
            var scrolltop=$(this).scrollTop();
            if(scrolltop>=200){
                $("#top_item").show();
            }else{
                $("#top_item").hide();
            }
        });
        $("#back_top").click(function(){
            $("html,body").animate({scrollTop: 0}, 500);
        });
    });
</script><!--back top -->
</body>
</html>