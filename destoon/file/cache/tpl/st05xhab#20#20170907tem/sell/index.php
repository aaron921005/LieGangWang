<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header');?>
<link rel="stylesheet" type="text/css" href="<?php echo DT_SKIN;?>sell_index.css">
<link rel="stylesheet" type="text/css" href="<?php echo DT_SKIN;?>ppad.css">
<script type="text/javascript" src="<?php echo DT_SKIN;?>js/sell-index.js"></script> 
<!--1p-->
<div id="wrap_1">
  <div id="banner" class="clearfix">
    <div class="imgs rel" id="focus">
      <ul>
      <li><a href="javascript:;" target="_blank"><img src="<?php echo DT_SKIN;?>images/aa/sell/banner1.png" width="815" height="300" alt="招商中"></a></li>
      <li><a href="javascript:;" target="_blank"><img src="<?php echo DT_SKIN;?>images/aa/sell/banner2.png" width="815" height="300" alt="招商中"></a></li>
      </ul>
      <i class="adicon"></i> </div>
    <div class="tabs js-tab">
    <div class="hd">
      <ul class="tit clearfix">
        <li class="on">我是供应商</li>
        <li class="">我是采购商</li>
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
      <a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_my'];?>?mid=5&amp;action=add" class="btn_seller" rel="nofollow">免费发布产品信息</a>
        <ul>
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
        <a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_my'];?>?mid=6&amp;action=add" class="btn_buyer" rel="nofollow">免费发布采购单</a>
        <ul>
        <?php echo tag("moduleid=52&catid=9774&condition=status=3&areaid=$cityid&pagesize=3&length=30&order=hits desc&dir=xhtag&template=help-textsell");?>
        </ul>
      </div>
      </div>
 <script type="text/javascript">
    jQuery(".js-tab").slide({});
</script>     
    </div>
  </div>
  <div class="sblock20"></div>
</div>
<!--2p-->
<div class="m mod-hot-product">
  <div class="col-xs-2 column-hot-product-img"><img src="<?php echo DT_SKIN;?>images/sell/c_06.jpg"></div>
  <div class="col-xs-8 hot-reccom-product"> <span id="nextbtn" class="glyphicon glyphicon-menu-left"></span> <span id="prebtn" class="glyphicon glyphicon-menu-right"></span>
    <div class="row" id="scroller">
      <ul>
        <?php echo tag("moduleid=$moduleid&condition=status=3 and thumb<>''&areaid=$cityid&pagesize=12&length=30&order=hits desc&showcat=1&dir=xhtag&lazy=$lazy&template=list-sellindexrank");?>
      </ul>
    </div>
    <script>
      $(function(){
      $("#scroller").jCarouselLite({btnNext: "#prebtn",btnPrev: "#nextbtn",visible: 4,scroll: 4 }); 
       })
   </script> 
  </div>
  <div class="col-xs-2 padding-none today-reccom">
    <div style="width:100%;"> 
      <?php echo tag("moduleid=$moduleid&condition=status=3 and level=2 and thumb<>''&areaid=$cityid&pagesize=3&length=30&order=addtime desc&showcat=1&dir=xhtag&template=list-sellindexranktj");?> 
    </div>
    <nav class="nav-today-recomm">
      <ul class="pagination-today-recomm">
        <li><a class="glyphicon glyphicon-triangle-left font14" href="#" id="product_good_btnUp"></a></li>
        <li>0<span id="product_good_pagenum">1</span>/03</li>
        <li><a class="glyphicon glyphicon-triangle-right font14" href="#" id="product_good_btnDown"></a></li>
      </ul>
    </nav>
    <script type="text/javascript">
              $(function () {
                var product_good_pagenum = 1
                function product_good_page(num){
                    $("#product_good_1").addClass('hide');
                    $("#product_good_2").addClass('hide');
                    $("#product_good_3").addClass('hide');
                    $("#product_good_"+num).removeClass('hide');
                    $("#product_good_pagenum").text(product_good_pagenum);
                }
                $('#product_good_btnUp').click(function(){
                    product_good_pagenum=parseInt(product_good_pagenum)-1;
                    if(product_good_pagenum <=0){
                        product_good_pagenum = 3
                    }
                    product_good_page(product_good_pagenum);
                    return false;
                });
                $('#product_good_btnDown').click(function(){
                    product_good_pagenum=parseInt(product_good_pagenum)+1;
                    if(product_good_pagenum >3){
                        product_good_pagenum = 1
                    }
                    product_good_page(product_good_pagenum);
                    return false;
                });
              });
            </script> 
  </div>
</div>
</div>
<!--2p-lou S-->
  <?php $mid = $moduleid;?>
  <?php $child = get_maincat(0, $mid, 1);?>
  <?php if(is_array($child)) { foreach($child as $i => $c) { ?>
  <?php $kk=$i+1?>
  <?php $catid=$c['catid']?>
  <?php if($i<5) { ?>
<div class="m margin-top-10 sell-product-show">
  <div class="mod-header"><span class="w1-ico">F<?php echo $kk;?></span><a href="<?php echo $MODULE[$mid]['linkurl'];?><?php echo $c['linkurl'];?>" target="_blank">
    <div class="sell-tit2">
    <h2><?php echo $c['catname'];?></h2>
    </div>
    </a><span class="fr more"><a href="<?php echo $MODULE[$mid]['linkurl'];?><?php echo $c['linkurl'];?>" target="_blank">更多>></a></div>
  <div class="row">
    <div class="col-xs-2">
      <ul class="nav-sell nav-pills nav-stacked sell-nav-product-cate">
        <li class="allcate"><span class="tit"><a href="<?php echo $MODULE[$mid]['linkurl'];?><?php echo $c['linkurl'];?>" target="_blank">全部</a><span class="glyphicon glyphicon-plus"></span></span>
          <div class="layer-left-product-cate">
            <ul class="grid-left-product-cate">
      <?php if($c['child']) { ?>
    <?php $sub = get_maincat($c['catid'], $mid, 1);?>
    <?php if(is_array($sub)) { foreach($sub as $j => $s) { ?><?php if($j < 50) { ?>
     <li><a href="<?php echo $MODULE[$mid]['linkurl'];?><?php echo $s['linkurl'];?>" target="_blank"><?php echo set_style($s['catname'], $s['style']);?></a></li>
      <?php } ?>
<?php } } ?>
    <?php } ?>
            </ul>
          </div>
        </li>
     <?php if($c['child']) { ?>
    <?php $sub = get_maincat($c['catid'], $mid, 1);?>
    <?php if(is_array($sub)) { foreach($sub as $j => $s) { ?><?php if($j < 12) { ?>
    <li class="w1<?php if($j==11) { ?> no_bm<?php } ?>
"><a href="<?php echo $MODULE[$mid]['linkurl'];?><?php echo $s['linkurl'];?>" target="_blank"><?php echo set_style($s['catname'], $s['style']);?></a></li>
    <?php } ?>
<?php } } ?>
    <?php } ?>
      </ul>
    </div>
    <div class="col-xs-2 col-xs-2-250 grid-commen-list padding-none">
      <div class="sell-tit3">区域市场</div>
      <div class="margin-top-20 grid-regional-market"> 
  <?php if($kk==1) { ?> 
      <span class="btn-info btn-lg btn-common"> <a class="font20" href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?areaid=17&catid='.$catid);?>" target="_blank">河南市场</a> </span> 
      <span class="btn-warning btn-lg btn-common"> <a class="font20" href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?areaid=20&catid='.$catid);?>" target="_blank">广东市场</a> </span> 
      <span class="btn-danger btn-lg btn-common"> <a class="font20" href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?areaid=2&catid='.$catid);?>" target="_blank">上海市场</a> </span> 
      <span class="btn-success btn-lg btn-common"> <a class="font20" href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?areaid=16&catid='.$catid);?>" target="_blank">山东市场</a> </span> 
      <span class="btn-primary btn-lg btn-common"> <a class="font20" href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?areaid=5&catid='.$catid);?>" target="_blank">河北市场</a> </span> 
      <span class="btn-default btn-lg btn-common"> <a class="font20" href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?areaid=12&catid='.$catid);?>" target="_blank">浙江市场</a> </span>
  <?php } else if($kk==2) { ?> 
      <span class="btn-success btn-lg btn-common"> <a class="font20" href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?areaid=16&catid='.$catid);?>" target="_blank">山东市场</a> </span> 
      <span class="btn-primary btn-lg btn-common"> <a class="font20" href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?areaid=5&catid='.$catid);?>" target="_blank">河北市场</a> </span> 
      <span class="btn-default btn-lg btn-common"> <a class="font20" href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?areaid=12&catid='.$catid);?>" target="_blank">浙江市场</a> </span>
      <span class="btn-info btn-lg btn-common"> <a class="font20" href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?areaid=17&catid='.$catid);?>" target="_blank">河南市场</a> </span> 
      <span class="btn-warning btn-lg btn-common"> <a class="font20" href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?areaid=20&catid='.$catid);?>" target="_blank">广东市场</a> </span> 
      <span class="btn-danger btn-lg btn-common"> <a class="font20" href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?areaid=2&catid='.$catid);?>" target="_blank">上海市场</a> </span> 
  <?php } else if($kk==3) { ?>
      <span class="btn-danger btn-lg btn-common"> <a class="font20" href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?areaid=2&catid='.$catid);?>" target="_blank">上海市场</a> </span> 
      <span class="btn-success btn-lg btn-common"> <a class="font20" href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?areaid=16&catid='.$catid);?>" target="_blank">山东市场</a> </span> 
      <span class="btn-primary btn-lg btn-common"> <a class="font20" href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?areaid=5&catid='.$catid);?>" target="_blank">河北市场</a> </span>
      <span class="btn-info btn-lg btn-common"> <a class="font20" href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?areaid=17&catid='.$catid);?>" target="_blank">河南市场</a> </span> 
      <span class="btn-warning btn-lg btn-common"> <a class="font20" href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?areaid=20&catid='.$catid);?>" target="_blank">广东市场</a> </span> 
      <span class="btn-default btn-lg btn-common"> <a class="font20" href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?areaid=12&catid='.$catid);?>" target="_blank">浙江市场</a> </span> 
  <?php } else if($kk==4) { ?> 
      <span class="btn-primary btn-lg btn-common"> <a class="font20" href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?areaid=5&catid='.$catid);?>" target="_blank">河北市场</a> </span> 
      <span class="btn-default btn-lg btn-common"> <a class="font20" href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?areaid=12&catid='.$catid);?>" target="_blank">浙江市场</a> </span>
      <span class="btn-info btn-lg btn-common"> <a class="font20" href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?areaid=17&catid='.$catid);?>" target="_blank">河南市场</a> </span> 
      <span class="btn-warning btn-lg btn-common"> <a class="font20" href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?areaid=20&catid='.$catid);?>" target="_blank">广东市场</a> </span> 
      <span class="btn-danger btn-lg btn-common"> <a class="font20" href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?areaid=2&catid='.$catid);?>" target="_blank">上海市场</a> </span> 
      <span class="btn-success btn-lg btn-common"> <a class="font20" href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?areaid=16&catid='.$catid);?>" target="_blank">山东市场</a> </span> 
 <?php } else if($kk==5) { ?>
      <span class="btn-success btn-lg btn-common"> <a class="font20" href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?areaid=16&catid='.$catid);?>" target="_blank">山东市场</a> </span> 
      <span class="btn-warning btn-lg btn-common"> <a class="font20" href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?areaid=20&catid='.$catid);?>" target="_blank">广东市场</a> </span>
      <span class="btn-info btn-lg btn-common"> <a class="font20" href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?areaid=17&catid='.$catid);?>" target="_blank">河南市场</a> </span> 
      <span class="btn-danger btn-lg btn-common"> <a class="font20" href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?areaid=2&catid='.$catid);?>" target="_blank">上海市场</a> </span> 
      <span class="btn-primary btn-lg btn-common"> <a class="font20" href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?areaid=5&catid='.$catid);?>" target="_blank">河北市场</a> </span> 
      <span class="btn-default btn-lg btn-common"> <a class="font20" href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?areaid=12&catid='.$catid);?>" target="_blank">浙江市场</a> </span> 
<?php } else { ?> 
      <span class="btn-info btn-lg btn-common"> <a class="font20" href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?areaid=17&catid='.$catid);?>" target="_blank">河南市场</a> </span> 
      <span class="btn-warning btn-lg btn-common"> <a class="font20" href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?areaid=20&catid='.$catid);?>" target="_blank">广东市场</a> </span> 
      <span class="btn-danger btn-lg btn-common"> <a class="font20" href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?areaid=2&catid='.$catid);?>" target="_blank">上海市场</a> </span> 
      <span class="btn-success btn-lg btn-common"> <a class="font20" href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?areaid=16&catid='.$catid);?>" target="_blank">山东市场</a> </span> 
      <span class="btn-primary btn-lg btn-common"> <a class="font20" href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?areaid=5&catid='.$catid);?>" target="_blank">河北市场</a> </span> 
      <span class="btn-default btn-lg btn-common"> <a class="font20" href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?areaid=12&catid='.$catid);?>" target="_blank">浙江市场</a> </span>
  <?php } ?>
      </div>
      <div class="margin-top-10 ad rel">
      <?php if($kk==1) { ?> 
      <img alt="黄金展位" src="<?php echo DT_SKIN;?>images/aa/sell/lou_f.jpg">
      <?php } else if($kk==2) { ?>
      <img alt="黄金展位" src="<?php echo DT_SKIN;?>images/aa/sell/lou_f.jpg">
      <?php } else if($kk==3) { ?>
      <img alt="黄金展位" src="<?php echo DT_SKIN;?>images/aa/sell/lou_f.jpg">
      <?php } else if($kk==4) { ?>
      <img alt="黄金展位" src="<?php echo DT_SKIN;?>images/aa/sell/lou_f.jpg">
      <?php } else if($kk==5) { ?>
      <img alt="黄金展位" src="<?php echo DT_SKIN;?>images/aa/sell/lou_f.jpg">
      <?php } else { ?>
      <img alt="黄金展位" src="<?php echo DT_SKIN;?>images/aa/sell/lou_f.jpg">
      <?php } ?>
      <i class="adicon"></i>
      </div>
      <div class="sell-tit3 margin-top-30">优质供应商</div>
      <div class="margin-top-10">
        <ul class="grid-list-ui">
  <?php if($kk==1) { ?> 
    <?php echo tag("moduleid=4&catid=8302&condition=groupid>5 and catids<>''&pagesize=10&order=userid desc&dir=xhtag&template=list-sellindexloucompany");?> 
  <?php } else if($kk==2) { ?> 
    <?php echo tag("moduleid=4&catid=8317&condition=groupid>5 and catids<>''&pagesize=10&order=userid desc&dir=xhtag&template=list-sellindexloucompany");?> 
  <?php } else if($kk==3) { ?> 
    <?php echo tag("moduleid=4&catid=8348&condition=groupid>5 and catids<>''&pagesize=10&order=userid desc&dir=xhtag&template=list-sellindexloucompany");?> 
  <?php } else if($kk==4) { ?> 
    <?php echo tag("moduleid=4&catid=8369&condition=groupid>5 and catids<>''&pagesize=10&order=userid desc&dir=xhtag&template=list-sellindexloucompany");?> 
 <?php } else if($kk==5) { ?> 
    <?php echo tag("moduleid=4&catid=8383&condition=groupid>5 and catids<>''&pagesize=10&order=userid desc&dir=xhtag&template=list-sellindexloucompany");?> 
 <?php } else { ?> 
    <?php echo tag("moduleid=4&catid=8302&condition=groupid>5 and catids<>''&pagesize=10&order=userid desc&dir=xhtag&template=list-sellindexloucompany");?>
  <?php } ?>
        </ul>
      </div>
    </div>
    <div class="col-xs-8 padding-none col-xs-8-710">
    <div class="row product-reccom-company">
    <?php if($kk==1) { ?> 
    <span class="em5"></span><a href="#" class="font14" target="_blank">展位招商</a>
    <span class="em5"></span><a href="#" class="font14" target="_blank">已预订</a>
    <span class="em5"></span><a href="#" class="font14" target="_blank">展位招商</a>
    <span class="em5"></span><a href="#" class="font14" target="_blank">已预订</a>
    <span class="em5"></span><a href="#" class="font14" target="_blank">展位招商</a>
    <span class="em5"></span><a href="#" class="font14" target="_blank">展位招商</a>
    <?php } else if($kk==2) { ?>
    <span class="em5"></span><a href="#" class="font14" target="_blank">展位招商</a>
    <span class="em5"></span><a href="#" class="font14" target="_blank">已预订</a>
    <span class="em5"></span><a href="#" class="font14" target="_blank">展位招商</a>
    <span class="em5"></span><a href="#" class="font14" target="_blank">已预订</a>
    <span class="em5"></span><a href="#" class="font14" target="_blank">展位招商</a>
    <span class="em5"></span><a href="#" class="font14" target="_blank">展位招商</a>
    <?php } else if($kk==3) { ?>
    <span class="em5"></span><a href="#" class="font14" target="_blank">展位招商</a>
    <span class="em5"></span><a href="#" class="font14" target="_blank">已预订</a>
    <span class="em5"></span><a href="#" class="font14" target="_blank">展位招商</a>
    <span class="em5"></span><a href="#" class="font14" target="_blank">已预订</a>
    <span class="em5"></span><a href="#" class="font14" target="_blank">展位招商</a>
    <span class="em5"></span><a href="#" class="font14" target="_blank">展位招商</a>
    <?php } else if($kk==4) { ?>
    <span class="em5"></span><a href="#" class="font14" target="_blank">展位招商</a>
    <span class="em5"></span><a href="#" class="font14" target="_blank">已预订</a>
    <span class="em5"></span><a href="#" class="font14" target="_blank">展位招商</a>
    <span class="em5"></span><a href="#" class="font14" target="_blank">已预订</a>
    <span class="em5"></span><a href="#" class="font14" target="_blank">展位招商</a>
    <span class="em5"></span><a href="#" class="font14" target="_blank">展位招商</a>
    <?php } else if($kk==5) { ?>
    <span class="em5"></span><a href="#" class="font14" target="_blank">展位招商</a>
    <span class="em5"></span><a href="#" class="font14" target="_blank">已预订</a>
    <span class="em5"></span><a href="#" class="font14" target="_blank">展位招商</a>
    <span class="em5"></span><a href="#" class="font14" target="_blank">已预订</a>
    <span class="em5"></span><a href="#" class="font14" target="_blank">展位招商</a>
    <span class="em5"></span><a href="#" class="font14" target="_blank">展位招商</a>
    <?php } else { ?>
    <span class="em5"></span><a href="#" class="font14" target="_blank">展位招商</a>
    <span class="em5"></span><a href="#" class="font14" target="_blank">已预订</a>
    <span class="em5"></span><a href="#" class="font14" target="_blank">展位招商</a>
    <span class="em5"></span><a href="#" class="font14" target="_blank">已预订</a>
    <span class="em5"></span><a href="#" class="font14" target="_blank">展位招商</a>
    <span class="em5"></span><a href="#" class="font14" target="_blank">展位招商</a>
    <?php } ?>
    </div>
      <div class="row margin-left-n1">
      <?php echo tag("moduleid=$moduleid&catid=$catid&condition=status=3 and thumb<>''&areaid=$cityid&pagesize=3&length=30&order=addtime desc&showcat=1&page=1&dir=xhtag&lazy=$lazy&template=list-sellindexlou");?> 
      </div>
      <div class="row product-reccom-company">
    <?php if($kk==1) { ?> 
    <span class="em5"></span><a href="#" class="font14" target="_blank">展位招商</a>
    <span class="em5"></span><a href="#" class="font14" target="_blank">已预订</a>
    <span class="em5"></span><a href="#" class="font14" target="_blank">展位招商</a>
    <span class="em5"></span><a href="#" class="font14" target="_blank">已预订</a>
    <span class="em5"></span><a href="#" class="font14" target="_blank">展位招商</a>
    <span class="em5"></span><a href="#" class="font14" target="_blank">展位招商</a>
    <?php } else if($kk==2) { ?>
    <span class="em5"></span><a href="#" class="font14" target="_blank">展位招商</a>
    <span class="em5"></span><a href="#" class="font14" target="_blank">已预订</a>
    <span class="em5"></span><a href="#" class="font14" target="_blank">展位招商</a>
    <span class="em5"></span><a href="#" class="font14" target="_blank">已预订</a>
    <span class="em5"></span><a href="#" class="font14" target="_blank">展位招商</a>
    <span class="em5"></span><a href="#" class="font14" target="_blank">展位招商</a>
    <?php } else if($kk==3) { ?>
    <span class="em5"></span><a href="#" class="font14" target="_blank">展位招商</a>
    <span class="em5"></span><a href="#" class="font14" target="_blank">已预订</a>
    <span class="em5"></span><a href="#" class="font14" target="_blank">展位招商</a>
    <span class="em5"></span><a href="#" class="font14" target="_blank">已预订</a>
    <span class="em5"></span><a href="#" class="font14" target="_blank">展位招商</a>
    <span class="em5"></span><a href="#" class="font14" target="_blank">展位招商</a>
    <?php } else if($kk==4) { ?>
    <span class="em5"></span><a href="#" class="font14" target="_blank">展位招商</a>
    <span class="em5"></span><a href="#" class="font14" target="_blank">已预订</a>
    <span class="em5"></span><a href="#" class="font14" target="_blank">展位招商</a>
    <span class="em5"></span><a href="#" class="font14" target="_blank">已预订</a>
    <span class="em5"></span><a href="#" class="font14" target="_blank">展位招商</a>
    <span class="em5"></span><a href="#" class="font14" target="_blank">展位招商</a>
    <?php } else if($kk==5) { ?>
    <span class="em5"></span><a href="#" class="font14" target="_blank">展位招商</a>
    <span class="em5"></span><a href="#" class="font14" target="_blank">已预订</a>
    <span class="em5"></span><a href="#" class="font14" target="_blank">展位招商</a>
    <span class="em5"></span><a href="#" class="font14" target="_blank">已预订</a>
    <span class="em5"></span><a href="#" class="font14" target="_blank">展位招商</a>
    <span class="em5"></span><a href="#" class="font14" target="_blank">展位招商</a>
    <?php } else { ?>
    <span class="em5"></span><a href="#" class="font14" target="_blank">展位招商</a>
    <span class="em5"></span><a href="#" class="font14" target="_blank">已预订</a>
    <span class="em5"></span><a href="#" class="font14" target="_blank">展位招商</a>
    <span class="em5"></span><a href="#" class="font14" target="_blank">已预订</a>
    <span class="em5"></span><a href="#" class="font14" target="_blank">展位招商</a>
    <span class="em5"></span><a href="#" class="font14" target="_blank">展位招商</a>
    <?php } ?>
    </div>
      <div class="row margin-left-n1">
       <?php echo tag("moduleid=$moduleid&catid=$catid&condition=status=3 and thumb<>''&areaid=$cityid&pagesize=3&length=30&order=addtime desc&showcat=1&page=2&dir=xhtag&lazy=$lazy&template=list-sellindexlou");?> 
      </div>
    </div>
  </div>
</div>
<?php } ?>
<?php } } ?>
<!--3ping-->
<div class="m com-cat margin-top-10">
<h3>按行业找货源</h3>
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
<!--按地区找货源-->
<div class="m com-cat margin-top-10">
<h3>按地区找货源</h3>
 <div class="com-div">
   <ul class="com-list">
  <?php $mainarea = get_mainarea(0)?>
  <?php if(is_array($mainarea)) { foreach($mainarea as $k => $v) { ?>
  <li><a href="<?php echo $MOD['linkurl'];?>search.php?areaid=<?php echo $v['areaid'];?>" title="<?php echo $v['areaname'];?>" rel="nofollow"><?php echo $v['areaname'];?></a></li>
   <?php } } ?>
   </ul>
 </div>
</div>
<!--4p热销产品推荐开始-->
<div class="m margin-top-10 hotproduct">
<div class="hotproductT">
<h2>热销产品推荐</h2>
<a class="hotproductT_Ar prev"></a>
<a class="hotproductT_Al next"></a>
</div>
<div class="hotproductC">
<ul>
  <?php echo tag("moduleid=$moduleid&length=36&condition=status=3 and level>0 and thumb<>''&areaid=$cityid&pagesize=15&order=hits desc,vip desc,addtime desc&width=180&height=180&cols=5&target=_blank&lazy=$lazy&dir=xhtag&template=xh-thumb-table");?> 
  </ul>
</div>
</div>
<script type="text/javascript">
jQuery(".hotproduct").slide({titCell:".hotproductT ul",mainCell:".hotproductC ul",autoPage:true,effect:"left",autoPlay:true,vis:6,easing:"easeOutCirc",delayTime:700,trigger:"click"});
</script>
<!---热销产品推荐结束-->
<!--1P-TAG 切换--> 
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