<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header-index', 'mobile');?>
<link rel="stylesheet" type="text/css" href="images/xhdtwap-index.css"/>
<div id="head-bar">
<div class="head-bar">
<?php if($DT_MOB['browser']=='b2b') { ?>
<div class="head-bar-back" onclick="api.execScript({name:'root',script:'Dexec(<?php echo $_userid;?>);'});api.closeWin({name:'destoon'});api.closeFrame({name:'destoon'});">
<img src="static/img/icon-back.png" width="24" height="24"/><span>返回</span>
</div>
<?php } else { ?>
<div class="head-bar-left">
<a href="channel.php"><img src="static/img/icon-sort.png" width="24" height="24"/></a>
</div>
<?php } ?>
<div class="head-bar-title"><img src="images/img/wap-ico.png" width="20" height="20"><?php echo $head_name;?></div>
<div class="head-bar-right">
<a href="login.php" data-transition="none"><img src="static/img/icon-my-on.png" width="24" height="24"/></a>
</div>
</div>
<div class="head-bar-fix"></div>
</div>
<div class="home-search">
    <div class="f_l m_logo"><img src="images/img/m-logo.png" alt="<?php echo $head_name;?>" style=""/></div>
<div class="f_l so"><a href="search.php"><img src="static/img/ico-search.png"/><span>输入关键词搜索</span></a></div>
</div>
<!--大幻灯图，默认为14号位-->
<script type="text/javascript" src="images/js/TouchSlide.js"></script>
<?php if($ads) { ?>
<div id="focus" class="focus region">
<div class="hd">
    <ul>
<?php if(is_array($ads)) { foreach($ads as $i => $t) { ?>
<li <?php if($i==0) { ?>class="on"<?php } ?>
></li>
<?php } } ?>
</ul>
  </div>
  <div class="bd">
<ul>
<?php if(is_array($ads)) { foreach($ads as $i => $t) { ?>
<li><a href="<?php echo $t['url'];?>" target="_blank" rel="external"><img src="<?php echo $t['image_src'];?>" width="360" height="168" border="0"/></a></li>
<?php } } ?>
</ul>
  </div>
</div>
<?php } ?>
<!--大幻灯图-->
<div class="quick">
<ul>
<li><a href="<?php echo mobileurl(5);?>" data-transition="slideup"><img src="image/home-1.png" width="46" height="46"/><span>最新供应</span></a></li>
    <li><a href="<?php echo mobileurl(6);?>" data-transition="slideup"><img src="image/home-2.png" width="46" height="46"/><span>全球采购</span></a></li>
    <li><a href="<?php echo mobileurl(4);?>" data-transition="slideup"><img src="image/home-3.png" width="46" height="46"/><span>企业名录</span></a></li>
    <li><a href="<?php echo mobileurl(21);?>" data-transition="slideup"><img src="image/home-5.png" width="46" height="46"/><span>行业资讯</span></a></li>
    <?php if(isset($MODULE['16'])) { ?>
    <li class="dh02"><a href="<?php echo mobileurl(16);?>" data-transition="slideup"><img src="image/home-6.png" width="46" height="46"/><span>在线购物</span></a></li>
    <?php } else { ?>
    <li class="dh02"><a href="my.php" data-transition="slideup"><img src="image/home-15.png" width="46" height="46"/><span>会员中心</span></a></li>
    <?php } ?>
    <li class="dh02"><a href="<?php echo mobileurl(8);?>" data-transition="slideup"><img src="image/home-7.png" width="46" height="46"/><span>行业展会</span></a></li>  
<li class="dh02"><a href="<?php echo mobileurl(18);?>" data-transition="slideup"><img src="image/home-8.png" width="46" height="46"/><span>以商会友</span></a></li>
    <li class="dh02"><a href="wapcredit.php?action=qiandao" data-transition="slideup"><img src="image/home-9.png" width="46" height="46"/><span>领积分</span></a></li>
</ul>
</div>
<!--资讯快报-->
<div class="xh-express-news">
<a class="J_ping xh-news-tit" href="<?php echo mobileurl(21);?>"><img src="image/xh-news-tit.png"></a>
<div class="news-list-wrapper">
       <div id="site_stats" style="overflow:hidden;height:44px;margin-top: 10px;">
<ul>
      <?php $tagsxh=tag("moduleid=21&length=40&condition=status=3&pagesize=6&fields=itemid,title,edittime&order=edittime desc&template=null");?> 
                    <?php if(is_array($tagsxh)) { foreach($tagsxh as $i => $v) { ?>
  <li class="news-item">
 <a href="<?php echo mobileurl(21, 0, $v['itemid']);?>">
  <!--span class="red">推</span--><?php echo $v['title'];?>
</a>
           </li>
<?php } } ?>
</ul>

 </div>
   <a class="xh-news-more" href="<?php echo mobileurl(21);?>"><i class="line"></i>更多</a>
</div>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/marquee.js"></script>
<script type="text/javascript">
new dmarquee(44, 10, 3000, 'site_stats');
</script>
 <?php if(isset($MODULE['16'])) { ?>
<!--秒杀-->
<div class="miao-content box">
   <div class="miao-index-title">
  <div class="dt-text-color2"><span class="seckill-icon"></span> 掌上秒杀</div>
  <span class="miao-right-more miao-text-gray fz13" onclick="window.location.href='<?php echo mobileurl(16);?>'">更多秒杀</span></div>
  <ul class="miao-list-view miao-grid-view">
    <?php $tags=tag("table=mall&condition=status=3 and thumb<>''&pagesize=6&fields=itemid,title,thumb,price,hits,edittime&order=edittime desc&template=null");?> 
    <?php if(is_array($tags)) { foreach($tags as $v) { ?>
    <li class="miao-list-view-cell miao-col-xs-3" onclick="window.location.href='<?php echo mobileurl(16, 0, $v['itemid']);?>'">
<div class="miao-body"> 
<div class="miao-img-object">
<img src="<?php if($v['thumb']) { ?><?php echo $v['thumb'];?><?php } else { ?>image/nopic-60.png<?php } ?>
" onerror="this.src='image/nopic-60.png';">
</div>
      <div class="miao-img-body miao-text-left"> 
        <span class="miao-list-view-title dt-text-ellipsis"><?php echo $v['title'];?></span>
        <span class="goods-price miao-text-danger"><?php echo $DT['money_sign'];?><?php echo $v['price'];?> <?php echo $DT['money_unit'];?></span>
        </div>
</div>
    </li>
    <?php } } ?>
  </ul>
</div>
<?php } ?>
<!--最新供应-->
<div class="miao-content">
  <div class="miao-index-title">
    <div class="box-title">最新供应</div>
    <span class="miao-right-more miao-text-gray fz13" onclick="window.location.href='<?php echo mobileurl(5);?>'">更多</span></div>
  <ul class="miao-list-view">
    <?php $tags=tag("table=sell_5&condition=status=3 and thumb<>''&pagesize=6&fields=itemid,title,thumb,vip,username,company,hits,areaid,edittime,price,unit&order=edittime desc&template=null");?> 
    <?php if(is_array($tags)) { foreach($tags as $v) { ?>
  <div class="list-img120"> <a href="<?php echo mobileurl(5, 0, $v['itemid']);?>"><img src="<?php if($v['thumb']) { ?><?php echo $v['thumb'];?><?php } else { ?>static/img/nopic-60.png<?php } ?>
" width="100" height="100" alt="" onerror="this.src='static/img/nopic-60.png';"/></a>
  <ul>
  <a href="<?php echo mobileurl(5, 0, $v['itemid']);?>">
    <li><a href="<?php echo mobileurl(5, 0, $v['itemid']);?>"><strong><?php echo $v['title'];?></strong></a></li>
    <li class="jg"><?php if($v['unit'] && $v['price']) { ?><span class="f_red"><?php echo $DT['money_sign'];?> <?php echo $v['price'];?></span>/<?php echo $v['unit'];?><?php } else { ?><span class="f_red">面议</span><?php } ?>
</li>
    <li<?php if($v['vip']) { ?> class="vip" title="<?php echo VIP;?>:<?php echo $v['vip'];?>"<?php } ?>
><span><?php echo $v['company'];?></span></li>
    <li>更新时间：<em><?php echo timetodate($v['edittime'], 5);?></em></li>
    <li><em><?php echo area_pos($v['areaid'], '-');?></em> <em class="f_r qgg"><a href="<?php echo mobileurl(5, 0, $v['itemid']);?>">立即购买</a></em> </li>
</a>
  </ul>
</div>
    <?php } } ?>
  </ul>
</div>
 <?php if(isset($MODULE['6'])) { ?>
<!--最新求购-->
<div class="miao-content">
  <div class="miao-index-title">
    <div class="box-title">最新求购</div>
    <span class="miao-right-more miao-text-gray fz13" onclick="window.location.href='<?php echo mobileurl(6);?>'">更多</span></div>
  <ul class="miao-list-view">
    <?php $tags=tag("table=buy_6&condition=status=3&pagesize=6&fields=itemid,title,vip,company,hits,areaid,edittime&order=edittime desc&template=null");?> 
    <?php if(is_array($tags)) { foreach($tags as $v) { ?>
  <div class="list-txt-buy">
  <ul>
    <li<?php if($v['vip']) { ?> class="vip" title="<?php echo VIP;?>:<?php echo $v['vip'];?>"<?php } ?>
><a class="f_l indexbuy" href="<?php echo mobileurl(6, 0, $v['itemid']);?>"><strong><?php echo $v['title'];?></strong></a><em class="f_r qgg"><a href="<?php echo mobileurl(6, 0, $v['itemid']);?>">报价</a></em></li>
  </ul>
</div>
    <?php } } ?>
  </ul>
</div>
<?php } ?>
<!--最新公司-->
<div class="miao-content">
  <div class="miao-index-title">
    <div class="box-title">最新公司</div>
    <span class="miao-right-more miao-text-gray fz13" onclick="window.location.href='<?php echo mobileurl(4);?>'">更多</span></div>
  <ul class="miao-list-view">
     <?php $tags=tag("table=company&condition=groupid>5 and catids<>''&pagesize=6&fields=company,vip,business,address,areaid,thumb,mode,username,validated&order=userid desc&template=null");?> 
    <?php if(is_array($tags)) { foreach($tags as $v) { ?>
  <div class="list-img"><?php if($v['thumb']) { ?> <a href="index.php?moduleid=4&username=<?php echo $v['username'];?>"><img src="<?php if($v['thumb']) { ?><?php echo $v['thumb'];?><?php } else { ?>static/img/nopic-60.png<?php } ?>
" width="60" height="60" alt="" onerror="this.src='static/img/nopic-60.png';"/></a><?php } ?>
  <ul>
  <a href="index.php?moduleid=4&username=<?php echo $v['username'];?>">
    <li<?php if($v['vip']) { ?> class="vip" title="<?php echo VIP;?>:<?php echo $v['vip'];?>"<?php } ?>
><a href="index.php?moduleid=4&username=<?php echo $v['username'];?>"><strong><?php echo $v['company'];?></strong></a>
    </li>
    <li><span>主营：<?php echo $v['business'];?></span></li>
    <li><span><?php echo area_pos($v['areaid'], '', 2);?><?php if($v['mode']) { ?>&nbsp;&nbsp;(<?php echo $v['mode'];?>)<?php } ?>
&nbsp;&nbsp;<?php if($v['validated']) { ?>[已核实]<?php } else { ?>[未核实]<?php } ?>
</span></li>
</a>
  </ul>
</div>
    <?php } } ?>
  </ul>
</div>
 <?php if(isset($MODULE['21'])) { ?>
<!--最新资讯-->
<div class="miao-content">
  <div class="miao-index-title">
    <div class="box-title">最新资讯</div>
    <span class="miao-right-more miao-text-gray fz13" onclick="window.location.href='<?php echo mobileurl(21);?>'">更多</span></div>
  <ul class="miao-list-view">
   <?php $tags=tag("moduleid=21&condition=status=3&pagesize=6&fields=itemid,title,catid,thumb,introduce,hits,edittime&order=edittime desc&template=null");?> 
    <?php if(is_array($tags)) { foreach($tags as $v) { ?>
    <?php if($v['thumb']) { ?>
<div class="list-img100 index-newsl"> 
  <ul>
  <a href="<?php echo mobileurl(21, 0, $v['itemid']);?>">
    <li><a href="<?php echo mobileurl(21, 0, $v['itemid']);?>"><strong><?php echo $v['title'];?></strong></a></li>
    <li><a href="<?php echo mobileurl(21, 0, $v['itemid']);?>">摘要：<?php echo dsubstr($v['introduce'], 44, '..');?></a></li>
    <li>更新时间：<em><?php echo timetodate($v['edittime'], 5);?></em></li>
<li><em class="red">【<?php echo cat_name($v['catid']);?>】</em> <em>阅读量：<?php echo $v['hits'];?></em></li>
</a>
  </ul>
   <a href="<?php echo mobileurl(21, 0, $v['itemid']);?>"><img src="<?php if($v['thumb']) { ?><?php echo $v['thumb'];?><?php } else { ?>static/img/nopic-60.png<?php } ?>
" width="100" height="80" alt="" onerror="this.src='static/img/nopic-60.png';"/></a>
</div>
<?php } else { ?>
  <div class="list-img100"> 
  <ul>
  <a href="<?php echo mobileurl(21, 0, $v['itemid']);?>">
    <li><a href="<?php echo mobileurl(21, 0, $v['itemid']);?>"><strong><?php echo $v['title'];?></strong></a></li>
    <li><a href="<?php echo mobileurl(21, 0, $v['itemid']);?>">摘要：<?php echo dsubstr($v['introduce'], 64, '..');?></a></li>
    <li>更新时间：<em><?php echo timetodate($v['edittime'], 5);?></em></li>
  <li><em class="red">【<?php echo cat_name($v['catid']);?>】</em> <em>阅读量：<?php echo $v['hits'];?></em></li>
  </a>
  </ul>
</div>
<?php } ?>
 <?php } } ?>
</ul>
</div>
<?php } ?>
<script type="text/javascript">
TouchSlide({ 
slideCell:"#focus",
titCell:".hd ul", //开启自动播放 autoPage:true ，此时设置 titCell 为导航元素包裹层
mainCell:".bd ul", 
effect:"leftLoop", 
autoPlay:true,//自动播放
autoPage:true //自动分页
});
</script>
<?php include template('footer_banquan', 'mobile');?> 
<?php include template('footer', 'mobile');?>