<?php defined('IN_DESTOON') or exit('Access Denied');?><?php $CSS = array('index');?>
<?php include template('header-index');?>
<div id="ipad_tips" style="display:none;"></div>
<link rel="stylesheet" type="text/css" href="<?php echo DT_SKIN;?>css/index_banner.css" />
    <div class="prime">
    <!-- 分类 -->
    <div class="categorys">
    <div class="cate-wrap" id="nav">
        <div class="cate-title-list">
       <?php $mid=5?>
   <?php $child = get_maincat(0,$mid,1);$cols=6?>
   <?php if(is_array($child)) { foreach($child as $i => $c) { ?>
           <?php if($i < $cols) { ?>
            <div class="cate-m fore<?php echo $i+1;?>">
                <div class="cate-mt">
                    <h2 class="title_cat">
<a class="text" target="_blank" href="<?php echo $MODULE[$mid]['linkurl'];?><?php echo $c['linkurl'];?>"><?php echo $c['catname'];?></a>
                    </h2>
                    <div class="extra">
<?php if($c['child']) { ?>
    <?php $sub = get_maincat($c['catid'],$mid,1);?>
    <?php if(is_array($sub)) { foreach($sub as $j => $s) { ?><?php if($j < 3) { ?>
      <a href="<?php echo $MODULE[$mid]['linkurl'];?><?php echo $s['linkurl'];?>"><?php echo set_style($s['catname'], $s['style']);?></a>
    <?php } ?>
<?php } } ?>
    <?php } ?>
                    </div>
                    <span class="angle"></span>
                </div>

                <div class="cate-content-list cate-mc fore<?php echo $i+1;?>" style="display: none;">
                <div class="title_cat">
                    <span class="text"><?php echo $c['catname'];?></span>
                    <span class="extra">专业的B2B电商交易平台</span>
                    <a target="_blank" href="<?php echo $MODULE[$mid]['linkurl'];?><?php echo $c['linkurl'];?>" class="more">更多<i></i></a>
                </div>
                <div class="goods-list">
    <?php if($c['child']) { ?>
    <?php $sub = get_maincat($c['catid'],$mid,1);?>
    <?php if(is_array($sub)) { foreach($sub as $j => $s) { ?><?php if($j<45) { ?>
      <a href="<?php echo $MODULE[$mid]['linkurl'];?><?php echo $s['linkurl'];?>"><?php echo set_style($s['catname'], $s['style']);?></a>
    <?php } ?>
<?php } } ?>
    <?php } ?>
</div>
      <div class="goods-promotion j_categorysPromotion1">
  <?php if($i==0) { ?>
  <a href="<?php echo $MODULE['5']['linkurl'];?><?php echo $c['linkurl'];?>" target="_blank" rel="nofollow" ><img src="<?php echo DT_SKIN;?>images/fenlei/1.jpg" width="500" height="200" alt=""/></a>
  <?php } else if($i==1) { ?>
  <a href="<?php echo $MODULE['5']['linkurl'];?><?php echo $c['linkurl'];?>" target="_blank" rel="nofollow" ><img src="<?php echo DT_SKIN;?>images/fenlei/2.jpg" width="500" height="200" alt=""/></a>
   <?php } else if($i==2) { ?>
  <a href="<?php echo $MODULE['5']['linkurl'];?><?php echo $c['linkurl'];?>" target="_blank" rel="nofollow" ><img src="<?php echo DT_SKIN;?>images/fenlei/3.jpg" width="500" height="200" alt=""/></a>
   <?php } else if($i==3) { ?>
  <a href="<?php echo $MODULE['5']['linkurl'];?><?php echo $c['linkurl'];?>" target="_blank" rel="nofollow"><img src="<?php echo DT_SKIN;?>images/fenlei/4.jpg" width="500" height="200" alt=""/></a>
   <?php } else if($i==4) { ?>
  <a href="<?php echo $MODULE['5']['linkurl'];?><?php echo $c['linkurl'];?>" target="_blank" rel="nofollow"><img src="<?php echo DT_SKIN;?>images/fenlei/5.jpg" width="500" height="200" alt=""/></a>
     <?php } else if($i==5) { ?>
    <a href="<?php echo $MODULE['5']['linkurl'];?><?php echo $c['linkurl'];?>" target="_blank" rel="nofollow"><img src="<?php echo DT_SKIN;?>images/fenlei/4.jpg" width="500" height="200" alt=""/></a>
  <?php } ?>
  </div>
     <div class="goods-extra">
       <div class="content_gg rel">
<?php if($i==0) { ?>
<a href="/." target="_blank" rel="nofollow"><img src="<?php echo DT_SKIN;?>images/fenlei/1-1.jpg"/></a>
<a href="/." target="_blank" rel="nofollow"><img src="<?php echo DT_SKIN;?>images/fenlei/1-2.jpg"/></a>
<a href="/." target="_blank" rel="nofollow"><img src="<?php echo DT_SKIN;?>images/fenlei/1-3.jpg"/></a>
<?php } else if($i==1) { ?>
<a href="/." target="_blank" rel="nofollow"><img src="<?php echo DT_SKIN;?>images/fenlei/2-1.jpg"/></a>
<a href="/." target="_blank" rel="nofollow"><img src="<?php echo DT_SKIN;?>images/fenlei/2-2.jpg"/></a>
<a href="/." target="_blank" rel="nofollow"><img src="<?php echo DT_SKIN;?>images/fenlei/2-3.jpg"/></a>
<?php } else if($i==2) { ?>
<a href="/." target="_blank" rel="nofollow"><img src="<?php echo DT_SKIN;?>images/fenlei/3-1.jpg"/></a>
<a href="/." target="_blank" rel="nofollow"><img src="<?php echo DT_SKIN;?>images/fenlei/3-2.jpg"/></a>
<a href="/." target="_blank" rel="nofollow"><img src="<?php echo DT_SKIN;?>images/fenlei/3-3.jpg"/></a>
<?php } else if($i==3) { ?>
<a href="/." target="_blank" rel="nofollow"><img src="<?php echo DT_SKIN;?>images/fenlei/4-1.jpg"/></a>
<a href="/." target="_blank" rel="nofollow"><img src="<?php echo DT_SKIN;?>images/fenlei/4-2.jpg"/></a>
<a href="/." target="_blank" rel="nofollow"><img src="<?php echo DT_SKIN;?>images/fenlei/4-3.jpg"/></a>
<?php } else if($i==4) { ?>
<a href="/." target="_blank" rel="nofollow"><img src="<?php echo DT_SKIN;?>images/fenlei/5-1.jpg"/></a>
<a href="/." target="_blank" rel="nofollow"><img src="<?php echo DT_SKIN;?>images/fenlei/5-2.jpg"/></a>
<a href="/." target="_blank" rel="nofollow"><img src="<?php echo DT_SKIN;?>images/fenlei/5-3.jpg"/></a>
<?php } else if($i==5) { ?>
<a href="/." target="_blank" rel="nofollow"><img src="<?php echo DT_SKIN;?>images/fenlei/3-1.jpg"/></a>
<a href="/." target="_blank" rel="nofollow"><img src="<?php echo DT_SKIN;?>images/fenlei/3-2.jpg"/></a>
<a href="/." target="_blank" rel="nofollow"><img src="<?php echo DT_SKIN;?>images/fenlei/3-3.jpg"/></a>
<?php } ?>
<i class="adicon"></i>
</div>
                </div>
            </div>
            </div>
<?php } ?>
<?php } } ?> 
            <div class="cate-m fore7">
                <div class="cate-mt">
                    <div class="img j_categorysPromotion7">
     <a href="javascript:;" target="_blank" onclick="Go('<?php echo DT_PATH;?>sitemap/<?php echo rewrite('index.php?mid=5');?>');"><img src="<?php echo DT_SKIN;?>images/huoyuan.png" width="170" height="43" alt="更多行业货源"></a>
                    </div>
                </div>
            </div>
        </div>
<div class="cate-tabs-list">
    <ul>
        <li class="fore1 curr"></li>
    </ul>
</div>
   </div>
</div> 
    <!-- 分类 end -->
<script type="text/javascript">
jQuery("#nav").slide({ 
type:"menu", //效果类型
titCell:".cate-m", // 鼠标触发对象
targetCell:".cate-mc", // 效果对象，必须被titCell包含
delayTime:150, // 效果时间
triggerTime:1, //鼠标延迟触发时间
defaultPlay:false,//默认执行
returnDefault:true//返回默认
});
</script> 
 <div class="index_c">
    <!-- 幻灯焦点图 -->
<div class="fuSlide ck-slide imgs rel">
<ul class="ck-slide-wrapper">
                             <li class="li6 current">
                                <a href="//b2b.bjlsjp.cn" target="_blank">
                                    <img src="<?php echo DT_SKIN;?>images/aa/index/6_1_1779_710_300.jpg" alt="DT模板网">
                                    <img src="<?php echo DT_SKIN;?>images/aa/index/6_2_1779_710_300.png" alt="DT模板网" class="img1">
                                    <img src="<?php echo DT_SKIN;?>images/aa/index/6_3_1779_710_300.png" alt="DT模板网" class="img2">
                                </a>
                            </li>
                             <li class="li5">
                                <a href="<?php echo $MODULE['1']['linkurl'];?>vip" target="_blank">
                                    <img src="<?php echo DT_SKIN;?>images/aa/index/5_1_1779_710_300.jpg" alt="vip服务">
                                    <img src="<?php echo DT_SKIN;?>images/aa/index/5_2_1779_710_300.png" alt="vip服务" class="img1">
                                    <img src="<?php echo DT_SKIN;?>images/aa/index/5_3_1779_710_300.png" alt="vip服务" class="img2">
                                </a>
                            </li>
                            <li class="li1">
                                <a href="<?php echo $MODULE['1']['linkurl'];?>vip/jianzhan.php" target="_blank">
                                    <img src="<?php echo DT_SKIN;?>images/aa/index/1_1_1779_710_300.png" alt="建站服务">
                                    <img src="<?php echo DT_SKIN;?>images/aa/index/1_2_1779_710_300.png" alt="建站服务" class="img1">
                                    <img src="<?php echo DT_SKIN;?>images/aa/index/1_3_1779_710_300.png" alt="建站服务" class="img2">
                                </a>
                            </li>
                            <li class="li2">
                                <a href="<?php echo $MODULE['1']['linkurl'];?>vip/hyfw.php" target="_blank">
                                    <img src="<?php echo DT_SKIN;?>images/aa/index/2_1_1779_710_300.png" alt="会员服务">
                                    <img src="<?php echo DT_SKIN;?>images/aa/index/2_2_1779_710_300.png" alt="会员服务" class="img1">
                                    <img src="<?php echo DT_SKIN;?>images/aa/index/2_3_1779_710_300.png" alt="会员服务" class="img2">
                                </a>
                            </li>
                            <li class="li3">
                                <a href="<?php echo cat_url(868);?>" target="_blank">
                                    <img src="<?php echo DT_SKIN;?>images/aa/index/3_1_1779_710_300.jpg" alt="女神鞋柜">
                                    <img src="<?php echo DT_SKIN;?>images/aa/index/3_2_1779_710_300.png" alt="女神鞋柜" class="img1">
                                    <img src="<?php echo DT_SKIN;?>images/aa/index/3_3_1779_710_300.png" alt="女神鞋柜" class="img2">
                                </a>
                            </li>
                            <li class="li4">
                                <a href="<?php echo cat_url(723);?>" target="_blank">
                                    <img src="<?php echo DT_SKIN;?>images/aa/index/4_1_1779_710_300.jpg" alt="纺织现货">
                                    <img src="<?php echo DT_SKIN;?>images/aa/index/4_2_1779_710_300.png" alt="纺织现货" class="img1">
                                    <img src="<?php echo DT_SKIN;?>images/aa/index/4_3_1779_710_300.png" alt="纺织现货" class="img2">
                                </a>
                            </li>
                        </ul>
<a href="javascript:;" class="ctrl-slide ck-prev"></a> <a href="javascript:;" class="ctrl-slide ck-next"></a>
                        <div class="ck-slidebox">
                            <div class="slideWrap">
                                <ul class="dot-wrap">
                                    <li class="current"><em>1</em></li>
                                    <li><em>2</em></li>
                                    <li><em>3</em></li>
                                    <li><em>4</em></li>
                                    <li><em>5</em></li>
                                    <li><em>6</em></li>
                                </ul>
                            </div>
                        </div>
<i class="adicon"></i>
</div>
<!-- 幻灯焦点图 end -->
<div class="index_c_sell">
<div class="hotproductC">
<div class="tempWrap_2">
<ul>
  <?php echo tag("moduleid=5&length=16&condition=status=3 and level>0 and thumb<>''&areaid=$cityid&pagesize=12&order=hits desc,vip desc,addtime desc&width=140&height=135&target=_blank&lazy=$lazy&dir=xhtag&template=xh-thumb-tableindex");?> 
  </ul>
</div>
<div class="hotproductT">
<a class="hotproductT_r prev"><i></i></a>
<a class="hotproductT_l next"><i></i></a>
</div>
  <script type="text/javascript">
jQuery(".index_c_sell").slide({titCell:".hotproductT ul",mainCell:".tempWrap_2 ul",autoPage:true,effect:"left",autoPlay:true,scroll:1,vis:4,delayTime:1500});
</script>
</div>
</div>
</div>
<div class="prime-s">
<div class="prime-s-r">
<!--1-->
<div class="tl-brand-item-3">
<!--状态 S-->
<div class="xh_dl">
<script language="javaScript"> 
    function showwenhou()
    {
        now = new Date(),hour = now.getHours() 
        if(hour < 6){document.write("凌晨好！")} 
        else if (hour < 9){document.write("早上好！")} 
        else if (hour < 12){document.write("上午好！")} 
        else if (hour < 14){document.write("中午好！")} 
        else if (hour < 17){document.write("下午好！")} 
        else if (hour < 19){document.write("傍晚好！")} 
        else if (hour < 22){document.write("晚上好！")} 
        else {document.write("夜里好！")} 
    }
</script>
<div class="brand_login"><img src="<?php echo DT_SKIN;?>css/img/head_picture.png" class="brand_img"/><div class="u-info"><div id="login_user">Hi，<i id="showWelTime"><script type="text/javascript">showwenhou();</script></i></div><div class="u-wel"><span>欢迎来到<?php echo $DT['jdname'];?></span></div></div></div><div class="brand_botton"><a class="u-btn login-btn" rel="nofollow" href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_login'];?>" title="登录">登录</a><a class="u-btn sign-btn" rel="nofollow" href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_register'];?>" title="免费注册">免费注册</a></div>
</div>
<div class="xh_dl_2_no">
<div class="brand_login" id="xh_memberimg"></div><!--chip-line-->
<div class="brand_botton"><a class="u-btn login-btn-y" rel="nofollow" href="<?php echo $MODULE['2']['linkurl'];?>" title="商务中心">商务中心</a><a class="u-btn sign-btn-y" rel="nofollow" href="<?php echo $MODULE['2']['linkurl'];?>logout.php" title="退出">退出</a></div>
</div>
<!--状态 END-->
</div>
<!--2-->
 <div class="xub-news">
<div class="xub-tab hd">
<ul>
<li class="on"><span>网站公告</span></li>
<li class=""><span>常见问题</span></li>
</ul>
</div>
<div class="bd">
<div class="hover" style="display: block;">
<ul class="xubt-list">
<?php echo tag("table=announce&condition=totime=0 or totime>$today_endtime-86400&areaid=$cityid&pagesize=4&order=listorder desc,addtime desc&length=26&cname=公告&dir=xhtag&template=xiaohei-gonggao");?>
</ul>
</div>
<div style="display: none;">
<ul class="xubt-list">
<?php echo tag("moduleid=52&length=26&condition=status=3&areaid=$cityid&pagesize=4&order=addtime desc&cname=帮助&dir=xhtag&template=xiaohei-gonggao");?> 
      </ul>
    </div>
      </div>
    </div>
<script type="text/javascript">
jQuery(".xub-news").slide({});
</script>
<!--3-->
<div class="xub-server">
                <div class="xubs-tit"><span class="icon-redbar"></span>会员服务</div>
                
                <a href="<?php echo $MODULE['2']['linkurl'];?>grade.php" rel="nofollow" target="_blank">
                <span style="top: 0px;">
                    <i class="icon-hysj"></i>
                    <p class="xubs-name">会员升级</p>
                </span>
                </a>
                <a href="<?php echo $EXT['gift_url'];?>index2.php" rel="nofollow" target="_blank">
                <span style="top: 0px;">
                    <i class="icon-jfsc"></i>
                    <p class="xubs-name">积分商城</p>
                </span>
                </a>
                <a href="<?php echo $EXT['ad_url'];?>" rel="nofollow" target="_blank">
                <span style="top: 0px;">
                    <i class="icon-adfw"></i>
                    <p class="xubs-name">广告服务</p>
                </span>
                </a>
            </div>
<!--3 END-->
</div>
</div>
</div>
<div class="zhanting">
<div class="zhanting1">
    <p class="zhanting1_p1">管道厂商推荐</p>
 <?php echo tag("moduleid=4&catid=8302&length=26&condition=level=1 and catids<>''&areaid=$cityid&pagesize=1&order=userid desc&dir=xhtag&template=xiaohei-indexcomtj");?>
    </div>
    <div class="zhanting1">
    <p class="zhanting1_p1">商储厂商推荐</p>
       <?php echo tag("moduleid=4&catid=8317&length=26&condition=level=1 and catids<>''&areaid=$cityid&pagesize=1&order=userid desc&dir=xhtag&template=xiaohei-indexcomtj");?>
    </div>
    <div class="zhanting1" style="border-right:1px solid #eee;">
    <p class="zhanting1_p1">橡塑厂商推荐</p>
       <?php echo tag("moduleid=4&catid=8348&length=26&condition=level=1 and catids<>''&areaid=$cityid&pagesize=1&order=userid desc&dir=xhtag&template=xiaohei-indexcomtj");?>
    </div>
    <div class="zhanting2">
    <div class="zhanting2_title">信息动态</div>
        <div class="zhanting2_content">
        <ul>
  <?php echo tag("moduleid=6&length=50&condition=status=3&areaid=$cityid&pagesize=20&order=addtime desc&dir=xhtag&template=xiaohei-txtbuy");?> 
          </ul>
        </div>
    </div>
<script type="text/javascript">jQuery(".zhanting2").slide({titCell:".hd ul",mainCell:".zhanting2_content ul",autoPage:true,effect:"top",autoPlay:true,effect:"topLoop",vis:3,delayTime:1000,pnLoop:false});</script>
    <div class="zhanting03">  
<div class="zhanting1">
    <p class="zhanting1_p1">农机厂商推荐</p>
   <?php echo tag("moduleid=4&catid=8369&length=26&condition=level=1 and catids<>''&areaid=$cityid&pagesize=1&order=userid desc&dir=xhtag&template=xiaohei-indexcomtj");?>
    </div>
    <div class="zhanting1">
    <p class="zhanting1_p1">阀门厂商推荐</p>
       <?php echo tag("moduleid=4&catid=8383&length=26&condition=level=1 and catids<>''&areaid=$cityid&pagesize=1&order=userid desc&dir=xhtag&template=xiaohei-indexcomtj");?>
    </div>
    <div class="zhanting1" style="border-right:1px solid #eee;">
    <p class="zhanting1_p1">线缆厂商推荐</p>
       <?php echo tag("moduleid=4&catid=8412&length=26&condition=level=1 and catids<>''&areaid=$cityid&pagesize=1&order=userid desc&dir=xhtag&template=xiaohei-indexcomtj");?>
    </div>
    </div>
    <div class="zhanting4">
<div class="zhanting_content">
<ul>
 <?php echo tag("moduleid=5&length=50&condition=status=3&areaid=$cityid&pagesize=30&order=addtime desc&dir=xhtag&template=xiaohei-sell-gundong");?>
 </ul>
</div>
    </div>
</div>
<script type="text/javascript">jQuery(".zhanting4").slide({titCell:".hd ul",mainCell:".zhanting_content ul",autoPage:true,effect:"top",autoPlay:true,effect:"topLoop",vis:1,delayTime:2000,pnLoop:false});</script>
<div class="tl_gg rel">
<ul>
<li class="tlgg_90"><a target="_blank" href="http://b2b.bjlsjp.cn" rel="nofollow"><img src="<?php echo DT_SKIN;?>images/aa/tl_muban.jpg" alt="" /></a></li>
</ul>
<i class="adicon"></i>
</div>
<div class="brand" id="lous">
<div class="brand_title">
   <h2>品牌推荐</h2>
   <a id="changes" style="cursor:pointer;">换一批</a>
</div>
    <div class="brand_content">
<!--推荐级别1-->
     <?php echo tag("moduleid=13&length=20&condition=status=3 and level=1&areaid=$cityid&pagesize=32&order=addtime desc&lazy=$lazy&dir=xhtag&template=xiaohei-brandtj");?> 
    </div>
<div class="brand_content_line"></div>
</div>
<script>
$(function(){
var tit = $("#changes"),
con = $(".brand_content>ul"),
page = con.length,
index = 0;
if (page>=2) {
tit.click(function(){
if(index < (page-1)){
index++;
}else{
index = 0;
}
con.eq(index).show(500).siblings().hide(500);
});
}
});
</script>
<!--楼层S-->
<div id="main">
  <?php $mid=5?>
  <?php $child = get_maincat(0,$mid,1);?>
  <?php if(is_array($child)) { foreach($child as $i => $c) { ?>
  <?php $kk=$i+1?>
<?php if($i < 5) { ?>
<div class="louxh">
<!--AD-->
<div class="tl_gg rel">
<span t="<?php echo $kk;?>" id="f<?php echo $kk;?>" name="f<?php echo $kk;?>"></span>
<ul>
<?php if($kk==1) { ?>
<li class="tlgg_40"><a target="_blank" href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_register'];?>" rel="nofollow"><img src="<?php echo DT_SKIN;?>images/aa/tl_1.jpg" alt="" /></a></li>
<?php } else if($kk==2) { ?>
<li class="tlgg_90"><a target="_blank" href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_register'];?>" rel="nofollow"><img src="<?php echo DT_SKIN;?>images/aa/tl_2.jpg" alt="" /></a></li>
<?php } else if($kk==3) { ?>
<li class="tlgg_90"><a target="_blank" href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_register'];?>" rel="nofollow"><img src="<?php echo DT_SKIN;?>images/aa/tl_3.jpg" alt="" /></a></li>
<?php } else if($kk==4) { ?>
<li class="tlgg_90"><a target="_blank" href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_register'];?>" rel="nofollow"><img src="<?php echo DT_SKIN;?>images/aa/tl_4.jpg" alt="" /></a></li>
<?php } else if($kk==5) { ?>
<li class="tlgg_90"><a target="_blank" href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_register'];?>" rel="nofollow"><img src="<?php echo DT_SKIN;?>images/aa/tl_5.jpg" alt="" /></a></li>
<?php } else { ?>
<li class="tlgg_90"><a target="_blank" href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_register'];?>" rel="nofollow"><img src="<?php echo DT_SKIN;?>images/aa/tl_6.jpg" alt="" /></a></li>
<?php } ?>
</ul>
<i class="adicon"></i>
</div>
<div class="floor">
<div class="floor_title">
    <h2><span><?php echo $kk;?>F</span><a target="_blank" href="<?php echo $MODULE[$mid]['linkurl'];?><?php echo $c['linkurl'];?>"><?php echo $c['catname'];?></a></h2>
        <p><a target="_blank" href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_my'];?>?mid=5&action=add">免费加入<?php echo $c['catname'];?>市场</a></p>
    </div>
    <div class="floor_content">
    <div class="floor_content_left">
  <div class="floor_content_left_ad  rel">
        <?php if($kk==1) { ?> 
            <a href="/." target="_blank" ><img src="<?php echo DT_SKIN;?>images/ff/1.png" width="249" height="239" alt="广告招商"/></a>
      <?php } else if($kk==2) { ?> 
            <a href="/." target="_blank" ><img src="<?php echo DT_SKIN;?>images/ff/2.png" width="249" height="239" alt="广告招商"/></a>
      <?php } else if($kk==3) { ?> 
            <a href="/." target="_blank" ><img src="<?php echo DT_SKIN;?>images/ff/3.png" width="249" height="239" alt="广告招商"/></a>
      <?php } else if($kk==4) { ?> 
            <a href="/." target="_blank" ><img src="<?php echo DT_SKIN;?>images/ff/4.png" width="249" height="239" alt="广告招商"/></a>
      <?php } else if($kk==5) { ?> 
            <a href="/." target="_blank" ><img src="<?php echo DT_SKIN;?>images/ff/5.png" width="249" height="239" alt="广告招商"/></a>
      <?php } ?>
      <i class="adicon"></i>
      </div>
        <ul>
 <?php if($c['child']) { ?>
    <?php $sub = get_maincat($c['catid'],5,1);?>
    <?php if(is_array($sub)) { foreach($sub as $j => $s) { ?><?php if($j < 12) { ?>
    <li><a target="_blank" href="<?php echo $MODULE['5']['linkurl'];?><?php echo $s['linkurl'];?>" title="<?php echo $s['alt'];?>"><?php echo set_style($s['catname'], $s['style']);?></a></li>
    <?php } ?>
<?php } } ?>
    <?php } ?>
 </ul>
    </div>
        <div class="floor_content_center">
<!--当前分类下的产品-->
        <ul>
<?php $xhbq=tag("moduleid=5&catid=".$c['catid']."&condition=status=3 and thumb!=''&areaid=$cityid&pagesize=8&order=addtime desc&length=20&lazy=$lazy&template=null");?> 
     <?php if(is_array($xhbq)) { foreach($xhbq as $k => $t) { ?>
<li>
      <a href="<?php echo $t['linkurl'];?>" class="floor_content_img"><img onerror="this.src='<?php echo DT_SKIN;?>image/nopic100.gif'" src="<?php echo $t['thumb'];?>" alt="<?php echo $t['alt'];?>" title="<?php echo $t['alt'];?>" /></a>
      <p class="floor_content_center_li_p1"><a href="<?php echo $t['linkurl'];?>"><?php echo $t['title'];?></a></p>
      <p class="floor_content_center_li_p2"><?php if($t['unit'] && $t['price']>0) { ?><?php echo $DT['money_sign'];?>&nbsp;<span><?php echo $t['price'];?></span><?php } else { ?>&nbsp;<span>面议</span><?php } ?>
</p>
<p class="floor_content_center_li_p3"><span><a href="<?php echo userurl($t['username']);?>" target="_blank">商铺</a></span></p>
  </li>
<?php } } ?>  
            </ul>
        </div>
        <div class="floor_content_right">
        <div class="hd_company"><h3><i class="cx_ico"></i>诚信商家</h3></div>
        <ul>
                <!--对应公司分类-->
                  <?php if($kk==1) { ?> 
                      <?php $xhbq=tag("moduleid=4&catid=8302&condition=groupid>5 and catids<>''&areaid=$cityid&pagesize=5&order=vip desc,userid desc&template=null");?> 
                      <?php } else if($kk==2) { ?> 
                      <?php $xhbq=tag("moduleid=4&catid=8317&condition=groupid>5 and catids<>''&areaid=$cityid&pagesize=5&order=vip desc,userid desc&template=null")?> 
                      <?php } else if($kk==3) { ?> 
                      <?php $xhbq=tag("moduleid=4&catid=8348&condition=groupid>5 and catids<>''&areaid=$cityid&pagesize=5&order=vip desc,userid desc&template=null")?> 
                      <?php } else if($kk==4) { ?> 
                      <?php $xhbq=tag("moduleid=4&catid=8369&condition=groupid>5 and catids<>''&areaid=$cityid&pagesize=5&order=vip desc,userid desc&template=null")?> 
                      <?php } else if($kk==5) { ?> 
                      <?php $xhbq=tag("moduleid=4&catid=8383&condition=groupid>5 and catids<>''&areaid=$cityid&pagesize=5&order=vip desc,userid desc&template=null")?> 
                      <?php } ?>
<?php if(is_array($xhbq)) { foreach($xhbq as $t) { ?>
<li>
<p><a href="<?php echo $t['linkurl'];?>" target="_blank" ><?php if($t['vip']) { ?><img src="<?php echo DT_SKIN;?>image/vip_<?php echo $t['vip'];?>.gif" alt="<?php echo VIP;?>" title="<?php echo VIP;?>:<?php echo $t['vip'];?>级" align="absmiddle"/> <?php } ?>
<?php echo $t['company'];?></a></p>
<p>所在地：<?php echo area_pos($t['areaid'], '/', 2);?></p>
<p>主营产品：<?php echo $t['business'];?></p>
</li>
<?php } } ?>
            </ul>
        </div>
        <div class="floor_content_line"></div>
    </div>
  </div>
</div>
  <?php } ?>
  <?php } } ?> 
</div>
<!--楼层end-->
<!--综合区部分开始-->
<div class="newquotation">
  <div class="newquotationT">
    <h2 class="fl">综合区</h2>
    <ul class="fr">
       <li>商城</li>
   <li>招商</li>
       <li>展会</li>
       <li>图库</li>
       <li>视频</li>
       <li>商圈</li>
    </ul>
  </div>
  <div class="newquotation_tab"> 
<!--1商城S-->
<div class="newquotationC">
<div class="newlist fl">
<ul>
<?php $xhbq=tag("moduleid=16&condition=status=3 and thumb!=''&areaid=$cityid&pagesize=4&order=editdate desc,vip desc,edittime desc&length=20&page=1&lazy=$lazy&template=null");?> 
     <?php if(is_array($xhbq)) { foreach($xhbq as $i => $t) { ?>
<li class="shang <?php if($i%4==3) { ?>no_r<?php } ?>
">
    <a href="<?php echo $t['linkurl'];?>" target="_blank" class="shang_img"><img onerror="this.src='<?php echo DT_SKIN;?>image/nopic100.gif'" src="<?php echo $t['thumb'];?>"  alt="<?php echo $t['alt'];?>" title="<?php echo $t['alt'];?>" /></a>
    <p class="floor_content_center_li_p1"><a href="<?php echo $t['linkurl'];?>" target="_blank"><?php echo $t['title'];?></a></p>
    <p class="floor_content_center_li_p2"><?php echo $DT['money_sign'];?>&nbsp;<span class="red f14"><?php echo $t['price'];?></span></p>
<div class="btn-index"><a href="<?php echo $t['linkurl'];?>" target="_blank">立即抢购</a></div>
    </li>
<?php } } ?> 
  </ul>
</div>
<div class="newquotationC1 fr">
    <?php $xhbq=tag("moduleid=16&condition=status=3 and thumb!=''&areaid=$cityid&pagesize=1&order=editdate desc,vip desc,edittime desc&length=20&page=2&lazy=$lazy&template=null");?> 
     <?php if(is_array($xhbq)) { foreach($xhbq as $i => $t) { ?>
<li>
    <a href="<?php echo $t['linkurl'];?>" target="_blank" class="shang_img"><img onerror="this.src='<?php echo DT_SKIN;?>image/nopic100.gif'" src="<?php echo $t['thumb'];?>" alt="<?php echo $t['alt'];?>" title="<?php echo $t['alt'];?>" /></a>
    <p class="floor_content_center_li_p1"><a href="<?php echo $t['linkurl'];?>"><?php echo $t['title'];?></a></p>
    <p class="floor_content_center_li_p2"><?php echo $DT['money_sign'];?>&nbsp;<span class="red f14"><?php echo $t['price'];?></span></p>
    <div class="btn-index"><a href="<?php echo $t['linkurl'];?>" target="_blank">立即抢购</a></div>
    </li>
<?php } } ?> 
    </div>
  </div>
<!--2招商S-->  
<div class="newquotationC">
<div class="newlist fl">
<ul>
 <?php $xhbq=tag("moduleid=22&condition=status=3&areaid=$cityid&pagesize=8&showcat=1&order=editdate desc,vip desc,edittime desc&length=14&template=null");?> 
     <?php if(is_array($xhbq)) { foreach($xhbq as $i => $t) { ?>
<li class="<?php if($i<4) { ?>oh<?php } else { ?>ho<?php } ?>
 <?php if($i%4==3) { ?>no_r<?php } ?>
">
<p class="newquotationcp1 clear_two"><a class="fl" href="<?php echo $t['linkurl'];?>" target="_blank" alt="<?php echo $t['alt'];?>"><?php echo $t['title'];?></a><span class="fr fenlei-name"><?php echo $t['catname'];?></span></p>
<p class="newquotationcp2 clear_two"><span><?php echo $t['tzed'];?></span></p>
<p class="newquotationcp3 clear_two"><a class="fl" ><?php echo area_pos($t['areaid'], ' - ', 2);?></a><span class="fr"><a href="<?php echo $t['linkurl'];?>" target="_blank">我要加盟</a></span></p>
<?php if($i<4) { ?><div class="heng"></div><?php } ?>
  </li>
  <?php } } ?> 
</ul>
</div>
    <div class="newquotationC1 fr">
 <?php $xhbq=tag("moduleid=22&condition=status=3 and thumb!='' and level=1&areaid=$cityid&pagesize=1&order=editdate desc,vip desc,edittime desc&length=14&lazy=$lazy&template=null");?> 
     <?php if(is_array($xhbq)) { foreach($xhbq as $k => $t) { ?>
<li>
    <a href="<?php echo $t['linkurl'];?>" target="_blank" class="shang_img"><img onerror="this.src='<?php echo DT_SKIN;?>image/nopic100.gif'" src="<?php echo $t['thumb'];?>" alt="<?php echo $t['alt'];?>" title="<?php echo $t['alt'];?>" /></a>
    <p class="floor_content_center_li_p1"><span class="red">【荐】</span><a href="<?php echo $t['linkurl'];?>"><?php echo $t['title'];?></a></p>
    <p class="floor_content_center_li_p2"><span><?php echo area_pos($t['areaid'], '', 2);?></span></p>
    <div class="btn-index"><a href="<?php echo $t['linkurl'];?>" target="_blank">我要加盟</a></div>
    </li>
<?php } } ?> 
    </div>
  </div>
  <!--3展会S-->  
<div class="newquotationC">
<div class="newlist fl">
<ul>
<?php $xhbq=tag("moduleid=8&condition=status=3&areaid=$cityid&pagesize=8&showcat=1&order=addtime desc&length=26&template=null");?> 
     <?php if(is_array($xhbq)) { foreach($xhbq as $i => $t) { ?>
<li class="<?php if($i<4) { ?>oh<?php } else { ?>ho<?php } ?>
 <?php if($i%4==3) { ?>no_r<?php } ?>
">
<p class="newquotationcp1-1 clear_two"><a class="fl" href="<?php echo $t['linkurl'];?>" target="_blank" alt="<?php echo $t['alt'];?>"><?php echo $t['title'];?></a></p>
<p class="newquotationcp2-1 clear_two">地址:<?php echo $t['address'];?></p>
<p class="newquotationcp2-2 clear_two">主办:<?php echo $t['sponsor'];?></p>
<p class="newquotationcp3 clear_two"><a class="fl" ><?php echo timetodate($t['fromtime'], 3);?> ~ <?php echo timetodate($t['totime'], 3);?></a><span class="fr"><a href="<?php echo $t['linkurl'];?>" target="_blank">报名</a></span></p>
<?php if($i<4) { ?><div class="heng"></div><?php } ?>
  </li>
  <?php } } ?> 
          </ul>
</div>
    <div class="newquotationC1 fr">
<h1 class="xhname">推荐展会</h1>
    <?php $xhbq=tag("moduleid=8&condition=status=3 and level=3 and thumb!=''&areaid=$cityid&order=addtime desc&pagesize=1&template=null")?>
     <?php if(is_array($xhbq)) { foreach($xhbq as $k => $t) { ?>
    <li>
    <a href="<?php echo $t['linkurl'];?>" target="_blank" class="shang_img"><img onerror="this.src='<?php echo DT_SKIN;?>image/nopic100.gif'" src="<?php echo $t['thumb'];?>" alt="<?php echo $t['alt'];?>" title="<?php echo $t['alt'];?>" /></a>
    </li>
    <?php } } ?> 
    </div>
  </div>
<!--4图库S-->  
    <div class="newquotationC">
<div class="newlist fl">
<ul>
 <?php $xhbq=tag("moduleid=12&condition=status=3 and open=3&page=1&areaid=$cityid&pagesize=4&order=edittime desc&length=20&lazy=$lazy&template=null");?> 
     <?php if(is_array($xhbq)) { foreach($xhbq as $i => $t) { ?>
<li class="shang <?php if($i%4==3) { ?>no_r<?php } ?>
">
    <a href="<?php echo $t['linkurl'];?>" target="_blank" class="shang_img"><img onerror="this.src='<?php echo DT_SKIN;?>image/nopic100.gif'" src="<?php echo $t['thumb'];?>"  alt="<?php echo $t['alt'];?>" title="<?php echo $t['alt'];?>" /></a>
    <p class="floor_content_center_li_p1"><a href="<?php echo $t['linkurl'];?>" target="_blank"><?php echo $t['title'];?></a></p>
     <p class="floor_content_center_li_p2">已传&nbsp;<span><?php echo $t['items'];?></span>&nbsp;张</p>
<div class="btn-index"><a href="<?php echo $t['linkurl'];?>" target="_blank">进入图集</a></div>
     </li>
<?php } } ?> 
  </ul>
</div>
<div class="newquotationC1 fr">
    <?php $xhbq=tag("moduleid=12&condition=status=3 and open=3&page=2&areaid=$cityid&pagesize=1&order=edittime desc&length=20&lazy=$lazy&template=null");?> 
     <?php if(is_array($xhbq)) { foreach($xhbq as $k => $t) { ?>
<li>
    <a href="<?php echo $t['linkurl'];?>" target="_blank" class="shang_img"><img onerror="this.src='<?php echo DT_SKIN;?>image/nopic100.gif'" src="<?php echo $t['thumb'];?>" alt="<?php echo $t['alt'];?>" title="<?php echo $t['alt'];?>" /></a>
    <p class="floor_content_center_li_p1"><a href="<?php echo $t['linkurl'];?>"><?php echo $t['title'];?></a></p>
    <p class="floor_content_center_li_p2">已传&nbsp;<span><?php echo $t['items'];?></span>&nbsp;张</p>
    <div class="btn-index"><a href="<?php echo $t['linkurl'];?>" target="_blank">进入图集</a></div>
    </li>
<?php } } ?> 
    </div>
  </div>
<!--5视频S-->  
    <div class="newquotationC">
<div class="newlist fl">
<ul>
<?php $xhbq=tag("moduleid=14&condition=status=3 and thumb!=''&areaid=$cityid&pagesize=4&order=edittime desc&length=20&showcat=1&page=1&lazy=$lazy&template=null");?> 
     <?php if(is_array($xhbq)) { foreach($xhbq as $i => $t) { ?>
<li class="shang <?php if($i%4==3) { ?>no_r<?php } ?>
">
    <a href="<?php echo $t['linkurl'];?>" target="_blank" class="shang_img"><img onerror="this.src='<?php echo DT_SKIN;?>image/nopic100.gif'" src="<?php echo $t['thumb'];?>"  alt="<?php echo $t['alt'];?>" title="<?php echo $t['alt'];?>" /></a>
    <p class="floor_content_center_li_p1"><a href="<?php echo $t['linkurl'];?>" target="_blank" title="{&t[alt]}"><?php echo $t['title'];?></a></p>
     <p class="floor_content_center_li_p2"><span><?php echo $t['catname'];?></span></p>
<div class="btn-index"><a href="<?php echo $t['linkurl'];?>" target="_blank"><img src="<?php echo DT_SKIN;?>css/img/bo.png" width="20" height="20">播放</a></div>
     </li>
<?php } } ?> 
  </ul>
</div>
<div class="newquotationC1 fr">
    <?php $xhbq=tag("moduleid=14&condition=status=3 and thumb!=''&areaid=$cityid&pagesize=1&order=edittime desc&length=20&showcat=1&page=2&lazy=$lazy&template=null");?> 
     <?php if(is_array($xhbq)) { foreach($xhbq as $i => $t) { ?>
<li>
    <a href="<?php echo $t['linkurl'];?>" target="_blank" class="shang_img"><img onerror="this.src='<?php echo DT_SKIN;?>image/nopic100.gif'" src="<?php echo $t['thumb'];?>" alt="<?php echo $t['alt'];?>" title="<?php echo $t['alt'];?>"/></a>
    <p class="floor_content_center_li_p1"><a href="<?php echo $t['linkurl'];?>" target="_blank" title="{&t[alt]}"><?php echo $t['title'];?></a></p>
    <p class="floor_content_center_li_p2"><span><?php echo $t['catname'];?></span></p>
    <div class="btn-index"><a href="<?php echo $t['linkurl'];?>" target="_blank"><img src="<?php echo DT_SKIN;?>css/img/bo.png" width="20" height="20">播放</a></div>
    </li>
<?php } } ?> 
    </div>
  </div>
  <!--6商圈S-->  
    <div class="newquotationC">
<div class="newlist fl">
<ul>
<li class="shang">
<h2 class="quan_name">论坛圈</h2>
 <?php $xhbq=tag("moduleid=18&catid=9818&condition=status=3&areaid=$cityid&pagesize=8&order=addtime desc&length=22&template=null");?> 
     <?php if(is_array($xhbq)) { foreach($xhbq as $i => $t) { ?>
    <p class="quan"><i></i><a href="<?php echo $t['linkurl'];?>" title="<?php echo $t['alt'];?>" target="_blank"><?php echo $t['title'];?></a><?php if($t['thumb']) { ?> <span><img src="<?php echo DT_SKIN;?>css/img/club_thumb.gif" width="16" height="16"></span><?php } ?>
</p>
<?php } } ?> 
 </li>
      
  <li class="shang">
<h2 class="quan_name">原材料</h2>
 <?php $xhbq=tag("moduleid=18&catid=9819&condition=status=3&areaid=$cityid&pagesize=8&order=addtime desc&length=22&template=null");?> 
     <?php if(is_array($xhbq)) { foreach($xhbq as $i => $t) { ?>
    <p class="quan"><i></i><a href="<?php echo $t['linkurl'];?>" title="<?php echo $t['alt'];?>" target="_blank"><?php echo $t['title'];?></a><?php if($t['thumb']) { ?> <span><img src="<?php echo DT_SKIN;?>css/img/club_thumb.gif" width="16" height="16"></span><?php } ?>
</p>
<?php } } ?> 
 </li>
      
  <li class="shang">
<h2 class="quan_name">工业品</h2>
 <?php $xhbq=tag("moduleid=18&catid=9820&condition=status=3&areaid=$cityid&pagesize=8&order=addtime desc&length=22&template=null");?> 
     <?php if(is_array($xhbq)) { foreach($xhbq as $i => $t) { ?>
    <p class="quan"><i></i><a href="<?php echo $t['linkurl'];?>" title="<?php echo $t['alt'];?>" target="_blank"><?php echo $t['title'];?></a><?php if($t['thumb']) { ?> <span><img src="<?php echo DT_SKIN;?>css/img/club_thumb.gif" width="16" height="16"></span><?php } ?>
</p>
<?php } } ?> 
 </li>
      
  <li class="shang no_r">
<h2 class="quan_name">服装服饰</h2>
 <?php $xhbq=tag("moduleid=18&catid=9821&condition=status=3&areaid=$cityid&pagesize=8&order=addtime desc&length=22&template=null");?> 
     <?php if(is_array($xhbq)) { foreach($xhbq as $i => $t) { ?>
    <p class="quan"><i></i><a href="<?php echo $t['linkurl'];?>" title="<?php echo $t['alt'];?>" target="_blank"><?php echo $t['title'];?></a><?php if($t['thumb']) { ?> <span><img src="<?php echo DT_SKIN;?>css/img/club_thumb.gif" width="16" height="16"></span><?php } ?>
</p>
<?php } } ?> 
 </li>
          </ul>
</div>
    <div class="newquotationC1 fr">
    <li>
<h2 class="quan_name">热门圈子</h2>
 <?php $xhbq=tag("moduleid=18&table=club_group&condition=status=3&areaid=$cityid&pagesize=8&order=addtime desc&length=22&template=null");?> 
     <?php if(is_array($xhbq)) { foreach($xhbq as $i => $t) { ?>
    <p class="quan"><i></i><a href="<?php echo $t['linkurl'];?>" title="<?php echo $t['alt'];?>" target="_blank"><?php echo $t['title'];?></a><span class="fr">主题：<?php echo $t['post'];?></span></p>
<?php } } ?> 
 </li>
    </div>
  </div>
<!--END-->
    </div>
</div>
<script type="text/javascript">
jQuery(".newquotation").slide({ titCell:".newquotationT ul li", mainCell:".newquotation_tab",effect:"left",trigger:"click" });
</script>
<!--综合区部分结束-->
<div class="news">
    <div class="news_title">
    <h2>行业资讯</h2>
        <p>
<?php $xhbq=tag("table=category&condition=moduleid=21 and parentid=0&pagesize=10&order=listorder,catid&template=null");?>
<?php if(is_array($xhbq)) { foreach($xhbq as $i => $t) { ?><a href="<?php echo $MODULE['21']['linkurl'];?><?php echo $t['linkurl'];?>" target="_blank"><?php echo $t['catname'];?></a><?php } } ?>
      </p>
    </div>
    <div class="news_content">
    <div class="news_content_left">
    <div class="news_side">
    <div class="focus bd">
    <ul>
   <?php $xhtags=tag("moduleid=21&length=34&condition=status=3 and level=2 and thumb<>''&areaid=$cityid&pagesize=3&target=_blank&order=addtime desc&template=null");?> 
    <?php if(is_array($xhtags)) { foreach($xhtags as $i => $t) { ?>
     <li class="fcon" <?php if($i==0) { ?>style="display: block;"<?php } else { ?>style="display: none;"<?php } ?>
> <a target="_blank" href="/"><img src="<?php echo str_replace('thumb', 'middle', $t['thumb']);?>" width="360" height="240" alt="<?php echo $t['alt'];?>" style="opacity: 1;"></a> <span class="shadow"><a target="_blank" href="<?php echo $t['linkurl'];?>" title="<?php echo $t['alt'];?>"><?php echo $t['title'];?></a></span></li>
    <?php } } ?>
    </ul>
    </div>
    <a class="prev" href="javascript:void(0)"></a>
    <a class="next" href="javascript:void(0)"></a>
<script type="text/javascript">
   jQuery(".news_side").slide({mainCell:".bd ul",autoPlay:true});
</script>
    </div>
    <div class="news_tui">
    <ul>
    <?php $xhbq=tag("moduleid=21&length=40&condition=status=3 and level>0&areaid=$cityid&order=addtime desc&pagesize=5&template=null")?>
    <?php if(is_array($xhbq)) { foreach($xhbq as $i => $t) { ?>
      <li><i><?php echo $i+1;?>、</i><a href="<?php echo $t['linkurl'];?>" target="_blank" title="<?php echo $t['alt'];?>"><?php echo $t['title'];?></a></li>
      <?php } } ?>
      </ul>
    </div>
        </div>
        <div class="news_content_center">
<?php $xhbq=tag("moduleid=21&length=50&condition=status=3 and level=5&areaid=$cityid&order=addtime desc&pagesize=1&template=null")?>
<?php if(is_array($xhbq)) { foreach($xhbq as $i => $t) { ?>
        <p><a href="<?php echo $t['linkurl'];?>" target="_blank" title="<?php echo $t['alt'];?>"><i class="toutiao">头条</i><?php echo $t['title'];?></a><br /><?php echo dsubstr($t['introduce'], 100, '…');?> </p><?php } } ?>
<?php $xhbq=tag("moduleid=21&length=50&condition=status=3&areaid=$cityid&order=addtime desc&pagesize=10&template=null")?>
<?php if(is_array($xhbq)) { foreach($xhbq as $i => $t) { ?>
            <?php if($i%5==0) { ?> <ul><?php } ?>
            <li><i></i><a href="<?php echo $t['linkurl'];?>" target="_blank" title="<?php echo $t['alt'];?>"><?php echo $t['title'];?></a><span><?php echo timetodate($t['addtime'], 4);?></span></li>
            <?php if($i%5==4) { ?></ul><?php } ?>
<?php } } ?>
</div>
        <div class="news_content_right">
        <div class="news_content_right_top"></div>
<?php $xhbq=tag("moduleid=21&length=28&condition=status=3 and level=1&areaid=$cityid&order=hits desc&pagesize=3&template=null")?>
<?php if(is_array($xhbq)) { foreach($xhbq as $i => $t) { ?>
             <p><a href="<?php echo $t['linkurl'];?>" target="_blank" title="<?php echo $t['alt'];?>"><i class="red"><?php echo $i+1;?>、</i><?php echo $t['title'];?></a><br />
             <?php echo dsubstr($t['introduce'], 82, '…');?><br />
             <span><a href="<?php echo cat_url($t['catid']);?>" target="_blank"><?php echo cat_name($t['catid']);?> | </a></span><?php echo timetodate($t['addtime'], 4);?></p>
        <?php } } ?>
        </div>
    </div>
</div>
<div class="bottom">
    <div class="layout">
        <div   class="friend-link clf">
                <div class="fls-lab"><a href="<?php echo $EXT['link_url'];?>" target="_blank" rel="nofollow">友情链接</a>：</div>
                <div class="fls-con clf">
<?php if($DT['page_text']) { ?> 
      <?php echo tag("table=link&condition=status=3 and level>0 and thumb='' and username=''&areaid=$cityid&pagesize=".$DT['page_text']."&order=listorder desc,itemid desc&dir=xhtag&template=xiaohei-link");?> 
      <?php } ?>
      <a href="<?php echo $EXT['link_url'];?><?php echo rewrite('index.php?action=reg');?>" target="_blank" class="a-item a-more" rel="nofollow">申请</a>
                </div>
        </div>
    </div>
</div>
<?php include template('daohang');?> 
<!--底部版权--> 
<!--大幻灯特效JS-->
<script charset="utf-8" type="text/javascript" src="<?php echo DT_SKIN;?>js/slide.js"></script>
<script>
   $('.ck-slide').ckSlide({autoPlay: true});
</script>
<?php include template('footer-index');?> 