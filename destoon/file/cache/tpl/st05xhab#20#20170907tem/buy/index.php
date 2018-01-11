<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header');?>
<link rel="stylesheet" type="text/css" href="<?php echo DT_SKIN;?>ppad.css">
<div id="wrap_1">
  <div id="banner" class="clearfix">
    <div class="imgs rel" id="focus">
      <ul>
        <li><a href="/." target="_blank"><img src="<?php echo DT_SKIN;?>images/aa/buy/foc_1.jpg" width="815" height="300" alt=""></a></li>
        <li><a href="/." target="_blank"><img src="<?php echo DT_SKIN;?>images/aa/buy/foc_2.jpg" width="815" height="300" alt=""></a></li>
        <li><a href="/." target="_blank"><img src="<?php echo DT_SKIN;?>images/aa/buy/foc_3.jpg" width="815" height="300" alt=""></a></li>
      </ul>
      <i class="adicon"></i>
    </div>
    <div class="tabs js-tab">
    <div class="hd">
      <ul class="tit clearfix">
        <li class="on">我是采购商</li>
        <li class="">我是供应商</li>
      </ul>
      </div>
     <div class="bd">
      <div class="con">
      <div class="btn-wrap clf">
       <!--会员在线状态 S-->
        <div class="xh_dl">
        <a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_login'];?>" class="sign-in" target="_blank">登录</a><a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_register'];?>" class="sign-up" target="_blank">注册</a>
        </div>
        <div class="xh_dl_2_no">
        <a href="<?php echo $MODULE['2']['linkurl'];?>" class="sign-in" target="_blank" rel="nofollow">商务中心</a><a href="<?php echo $MODULE['2']['linkurl'];?>logout.php" class="sign-up" rel="nofollow">退出</a>
        </div>
        <!--会员在线状态 END-->
      </div>
        <a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_my'];?>?mid=6&amp;action=add" class="btn_buyer" rel="nofollow">免费发布采购单</a>
        <ul data-gct="2">
           <?php echo tag("moduleid=52&catid=9773&condition=status=3&areaid=$cityid&pagesize=3&length=30&order=hits desc&dir=xhtag&template=help-textsell");?>
         </ul>
      </div>
      <div class="con">
      <div class="btn-wrap clf">
      <!--会员在线状态 S-->
        <div class="xh_dl_x">
        <a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_login'];?>" class="sign-in" target="_blank">登录</a><a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_register'];?>" class="sign-up" target="_blank">注册</a>
        </div>
        <div class="xh_dl_x_2_no">
        <a href="<?php echo $MODULE['2']['linkurl'];?>" class="sign-in" target="_blank" rel="nofollow">商务中心</a><a href="<?php echo $MODULE['2']['linkurl'];?>logout.php" class="sign-up" rel="nofollow">退出</a>
        </div>
        <!--会员在线状态 END-->
      </div>
      <a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_my'];?>?mid=5&amp;action=add" class="btn_seller" rel="nofollow">免费发布产品信息</a>
        <ul data-gct="2">
         <?php echo tag("moduleid=52&catid=9774&condition=status=3&areaid=$cityid&pagesize=3&length=30&order=hits desc&dir=xhtag&template=help-textsell");?>
         </ul>
      </div>
  </div>
    </div>
  </div>
 <script type="text/javascript">
    jQuery(".js-tab").slide({});
</script>
  <div class="sblock20"></div>
     <div class="btm_pur">
    <div class="tit">
      <ul>
        <li class="cur">名企大宗采购</li>
      </ul>
    </div>
    <div class="con">
      <ul class="clearfix">
<?php echo tag("moduleid=$moduleid&condition=status=3 and level=1&areaid=$cityid&pagesize=5&length=20&order=".$MOD['order']."&showcat=1&dir=xhtag&template=list-buyindextj");?>
      </ul>
    </div>
  </div>
  <div class="sblock10"></div>
  <!--楼层区-->
  <?php $mid = $moduleid;?>
  <?php $child = get_maincat(0, $mid, 1);?>
  <?php if(is_array($child)) { foreach($child as $i => $c) { ?>
  <?php $kk=$i+1?>
  <?php $catid=$c['catid']?>
  <?php if($i<5) { ?>
   <div class="sblock30"></div>
   <div class="class_con inf_class_<?php echo $kk;?> clearfix">
    <div class="ads">
    <?php if($kk==1) { ?>
  <a href="<?php echo $MODULE[$mid]['linkurl'];?><?php echo $c['linkurl'];?>"><img src="<?php echo DT_SKIN;?>images/aa/buy/buy_news_1.png" alt="<?php echo $c['catname'];?>"></a>
  <?php } else if($kk==2) { ?>
  <a href="<?php echo $MODULE[$mid]['linkurl'];?><?php echo $c['linkurl'];?>"><img src="<?php echo DT_SKIN;?>images/aa/buy/buy_news_2.png" alt="<?php echo $c['catname'];?>"></a>
  <?php } else if($kk==3) { ?>
  <a href="<?php echo $MODULE[$mid]['linkurl'];?><?php echo $c['linkurl'];?>"><img src="<?php echo DT_SKIN;?>images/aa/buy/buy_news_3.png" alt="<?php echo $c['catname'];?>"></a>
  <?php } else if($kk==4) { ?>
  <a href="<?php echo $MODULE[$mid]['linkurl'];?><?php echo $c['linkurl'];?>"><img src="<?php echo DT_SKIN;?>images/aa/buy/buy_news_4.png" alt="<?php echo $c['catname'];?>"></a>
  <?php } else if($kk==5) { ?>
  <a href="<?php echo $MODULE[$mid]['linkurl'];?><?php echo $c['linkurl'];?>"><img src="<?php echo DT_SKIN;?>images/aa/buy/buy_news_5.png" alt="<?php echo $c['catname'];?>"></a>
  <?php } else { ?>
  <a href="<?php echo $MODULE[$mid]['linkurl'];?><?php echo $c['linkurl'];?>"><img src="<?php echo DT_SKIN;?>images/aa/buy/buy_news_6.png" alt="<?php echo $c['catname'];?>"></a>
  <?php } ?>
    </div>
    <div class="list_category">
      <h3 class="tit"><a href="<?php echo $MODULE[$mid]['linkurl'];?><?php echo $c['linkurl'];?>" target="_blank"><?php echo $c['catname'];?></a></h3>
      <div class="con">
        <ul>
    <?php if($c['child']) { ?>
    <?php $sub = get_maincat($c['catid'], $mid, 1);?>
    <?php if(is_array($sub)) { foreach($sub as $j => $s) { ?><?php if($j < 26) { ?>
       <li> <a href="<?php echo $MODULE[$mid]['linkurl'];?><?php echo $s['linkurl'];?>" target="_blank"><?php echo set_style($s['catname'], $s['style']);?></a></li>       
    <?php } ?>
<?php } } ?>
    <?php } ?>
        </ul>
      </div>
    </div>
    <div class="list_company">
      <h3 class="tit"><a href="<?php echo $MODULE[$mid]['linkurl'];?><?php echo $c['linkurl'];?>" target="_blank"><span style="color: #0565df;font-size: 14px;text-decoration: none;">更多</span></a>最新<?php echo $c['catname'];?>采购信息<em>专业的电商采购平台</em></h3>
      <div class="con">
        <ul>
      <?php echo tag("moduleid=$moduleid&condition=status=3$dtype&catid=$catid&pagesize=7&datetype=3&order=".$MOD['order']."&fields=".$MOD['fields']."&length=50&template=list-buyindex");?>
        </ul>
      </div>
    </div>
  </div>
    <?php } ?>
  <?php } } ?>
<!--按行业找采购-->
<div class="sblock20"></div>
<div class="m com-cat">
<h3>按行业找采购</h3>
 <div class="com-div">
   <ul class="com-list">
   <?php $mid = $moduleid;?>
   <?php $child = get_maincat(0, $mid, 1);?>
   <?php if(is_array($child)) { foreach($child as $i => $c) { ?>
  <li><a href="<?php echo $MOD['linkurl'];?><?php echo $c['linkurl'];?>" title="<?php echo $c['catname'];?>"><?php echo $c['catname'];?></a></li>
   <?php } } ?>
   </ul>
 </div>
</div> 
<!--按地区找采购-->
<div class="sblock20"></div>
<div class="m com-cat">
<h3>按地区找采购</h3>
 <div class="com-div">
   <ul class="com-list">
  <?php $mainarea = get_mainarea(0)?>
  <?php if(is_array($mainarea)) { foreach($mainarea as $k => $v) { ?>
  <li><a href="<?php echo $MOD['linkurl'];?>search.php?areaid=<?php echo $v['areaid'];?>" title="<?php echo $v['areaname'];?>" rel="nofollow"><?php echo $v['areaname'];?></a></li>
   <?php } } ?>
   </ul>
 </div>
</div>
<!--采购中心服务 S-->
<div class="sblock20"></div>
 <div class="ml-center-serve-wrap">
  <h2 class="ml-title">采购中心服务</h2>
  <div class="ml-content">
    <div class="ml-list-wrap ml-fl">
      <div class="ml-list ml-fl">
        <div class="ml-bg-img ml-bg-img1 ml-fl"></div>
        <div class="ml-text ml-fl">
          <h4><a href="javascript:;" target="_blank" rel="nofollow">免费撮合</a></h4>
          <p>供求匹配</p>
          <p>精准牵线</p>
          <p>优质供应商</p>
        </div>
      </div>
      <div class="ml-list ml-fl">
        <div class="ml-bg-img ml-bg-img2 ml-fl"></div>
        <div class="ml-text ml-fl">
          <h4><a href="javascript:;" target="_blank" rel="nofollow">金融支持</a></h4>
          <p>交易安全</p>
          <p>交易保障</p>
          <p>贷款大全</p>
        </div>
      </div>
      <div class="ml-list ml-fl">
        <div class="ml-bg-img ml-bg-img3 ml-fl"></div>
        <div class="ml-text ml-fl">
          <h4><a href="javascript:;" target="_blank" rel="nofollow">新手指南</a></h4>
          <p>免费注册</p>
          <p>新手成长</p>
          <p>买家入门</p>
        </div>
      </div>
      <div class="ml-list ml-fl">
        <div class="ml-bg-img ml-bg-img4 ml-fl"></div>
        <div class="ml-text ml-fl">
          <h4><a href="javascript:;" target="_blank" rel="nofollow">常见问题</a></h4>
          <p>如何找产品</p>
          <p>发布询报价</p>
          <p>发布采购信息</p>
        </div>
      </div>
    </div>
    <div class="ml-tel ml-fr">
      <h3>联系采购部</h3>
      <p>客服：<?php echo $DT['telephone'];?> </p>
      <?php if($DT['telephone2']) { ?><p>专线：<?php echo $DT['telephone2'];?></p><?php } ?>
      <p>交易员QQ：
        <?php if($DT['qq1']) { ?><a href="//wpa.qq.com/msgrd?v=3&amp;uin=<?php echo $DT['qq1'];?>&amp;site=qq&amp;menu=yes" target="blank"><?php echo $DT['qq1'];?></a><?php } ?>
<?php if($DT['qq2']) { ?> / <a href="//wpa.qq.com/msgrd?v=3&amp;uin=<?php echo $DT['qq2'];?>&amp;site=qq&amp;menu=yes" target="blank"><?php echo $DT['qq2'];?></a><?php } ?>
      </p>
      <?php if($DT['emaill']) { ?><p>邮箱：<a href="mailto:<?php echo $DT['emaill'];?>"><?php echo $DT['emaill'];?></a></p><?php } ?>
    </div>
  </div>
</div>
<!--采购中心服务 END-->
 </div>
 <script type="text/javascript">
<!--
$(document).ready(function() {
  $(".tabs>ul.tit>li").click(function(){
$(".tabs>ul.tit>li").removeClass('cur').eq($(this).index()).addClass('cur');
$(".tabs>.con").hide().eq($(this).index()).show();
  });
  $(".f_shop>.tit>ul>li").click(function(){
$(".f_shop>.tit>ul>li").removeClass('cur').eq($(this).index()).addClass('cur');
$(".f_shop>.con").hide().eq($(this).index()).show();
  });
});
-->
</script>
<?php include template('footer');?>