<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header', 'mobile');?>
<link rel="stylesheet" type="text/css" href="images/wapuser.css?v=1.0"/>
<div id="wrapper">
<div class="menu-my">
<img id="menu-bg" src="images/golden-gate-lights.jpg" />
<?php if($_userid) { ?>
<div class="menu-cd">
        <h3>快捷发布</h3>
        <ul>
          <?php if(isset($MODULE['5'])) { ?><a href="memberwap.php?mid=5&action=add"><li>供应添加</li></a><?php } ?>
          <?php if(isset($MODULE['6'])) { ?><a href="memberwap.php?mid=6&action=add"><li>求购添加</li></a><?php } ?>
          <?php if(isset($MODULE['16'])) { ?><a href="memberwap.php?mid=16&action=add"><li>商品添加</li></a><?php } ?>
  <?php if(isset($MODULE['22'])) { ?><a href="memberwap.php?mid=22&action=add"><li>招商添加</li></a><?php } ?>
  <?php if(isset($MODULE['13'])) { ?><a href="memberwap.php?mid=13&action=add"><li>品牌添加</li></a><?php } ?>
  <?php if(isset($MODULE['8'])) { ?><a href="memberwap.php?mid=8&action=add"><li>展会添加</li></a><?php } ?>
  <?php if(isset($MODULE['7'])) { ?><a href="memberwap.php?mid=7&action=add"><li>行情添加</li></a><?php } ?>
  <?php if(isset($MODULE['18'])) { ?><a href="memberwap.php?mid=18"><li>商圈添加</li></a><?php } ?>
  <?php if(isset($MODULE['12'])) { ?><a href="memberwap.php?mid=12&action=add"><li>图库添加</li></a><?php } ?>
          <?php if(isset($MODULE['21'])) { ?><a href="memberwap.php?mid=21&action=add"><li>资讯添加</li></a><?php } ?>
  <?php if(isset($MODULE['14'])) { ?><a href="memberwap.php?mid=14&action=add"><li>视频添加</li></a><?php } ?>
          <?php if(isset($MODULE['10'])) { ?><a href="memberwap.php?mid=10&action=add"><li>知道添加</li></a><?php } ?>
        </ul> 
       </div>
         <?php } ?>
   
<?php if($_userid) { ?><div class="menu-cd-02"><?php } else { ?><div class="menu-cd"><?php } ?>
        <h3><?php if($_userid) { ?>更多<?php } else { ?>快捷菜单<?php } ?>
</h3>
        <ul>
          <?php if($_userid) { ?><a href="my.php?action=member"><li>我的账户</li></a>
  <?php } else { ?>
  <a href="register.php?act=register" style="display:block;" data-transition="slideup"><li>注 册</li></a>
  <a href="login.php?forward=my.php" style="display:block;" data-transition="slideup"><li>登 录</li></a>
  <?php } ?>
          <a href="about.php"><li>关于我们</li></a>
  <a href="guestbook.php"><li>意见反馈</li></a>
         <?php if($_userid) { ?>
 <a href="javascript:Dsheet('<a href=&#34;logout.php&#34;><span style=&#34;color:red&#34;>注销登录</span></a>', '取消', '确定要注销本次登录吗？');"><li>退出登录</li></a>
 <?php } ?>
        </ul>
      </div>
  </div>
<div class="screen">
<div id="head-bar">
<div class="head-bar">
<?php if($action) { ?>
<div class="head-bar-back">
<a href="my.php" data-direction="reverse"><img src="static/img/icon-back.png" width="24" height="24"/><span>我的</span></a>
</div>
<?php } else { ?>
<div class="burger head-bar-back">
<div class="x"></div>
<div class="y"></div>
<div class="z"></div>
</div> 
<?php } ?>
<div class="head-bar-title"><?php echo $head_name;?></div>
<div class="head-bar-right">
<?php if($action == 'member') { ?>
<a href="javascript:Dsheet('<a href=&#34;logout.php&#34;><span style=&#34;color:red&#34;>注销登录</span></a>', '取消', '确定要注销本次登录吗？');"><span>注销</span></a>
<?php } else if($action == 'info') { ?>
<a href="channel.php" data-transition="slideup"><span>频道</span></a>
<?php } else if($action == 'home') { ?>
<a href="index.php?moduleid=4&username=<?php echo $_username;?>" data-transition="slideup"><span>预览</span></a>
<?php } else { ?>
<?php if($_userid) { ?>
<a href="my.php?action=member" data-transition="slideup"><img src="static/img/my-member.png" width="24" height="24"/></a>
<?php } ?>
<?php } ?>
</div>
</div>
<div class="head-bar-fix"></div>
</div>
<div class="list">
<?php if($action == 'member') { ?>
<div class="blank-20"></div>
<div class="list-set">
<ul>
<li><div style="border:none;"><span><?php echo $_money;?> <?php echo $DT['money_unit'];?></span><a href="waprecord.php" rel="external">我的<?php echo $DT['money_name'];?></a></div></li>
<li><div><span><?php echo $user['deposit'];?> <?php echo $DT['money_unit'];?></span><a href="wapdeposit.php" rel="external">保证金</a></div></li>
<li><div><span><?php echo $_credit;?> <?php echo $DT['credit_unit'];?></span><a href="wapcredit.php" rel="external">我的<?php echo $DT['credit_name'];?></a></div></li>
<?php if($DT['sms'] && $MG['sms']) { ?>
<li><div><span><?php echo $_sms;?> 条</span><a href="sms.php" rel="external">短信余额</a></div></li>
<?php } ?>
</ul>
</div>
<div class="blank-20"></div>
<div class="list-set">
<ul>
<li><div style="border:none;"><a href="wapedit.php" rel="external">修改资料</a></div></li>
<?php if($MG['friend_limit']>-1) { ?>
<li><div><a href="wapfriend.php" rel="external">我的商友</a></div></li>
<?php } ?>
<?php if($MG['favorite_limit']>-1) { ?>
<li><div><a href="wapfavorite.php" rel="external">商机收藏</a></div></li>
<?php } ?>
<?php if($MG['alert_limit']>-1) { ?>
<li><div><a href="wapalert.php" rel="external">贸易提醒</a></div></li>
<?php } ?>
<?php if($MG['sms'] && $DT['sms']) { ?>
<li><div><a href="sms.php" rel="external">手机短信</a></div></li>
<?php } ?>
<?php if($MG['mail']) { ?>
<li><div><a href="wapmail.php" rel="external">邮件订阅</a></div></li>
<?php } ?>
<?php if($MG['spread']) { ?>
<li><div><a href="wapspread.php" rel="external">排名推广</a></div></li>
<?php } ?>
<?php if($MG['ad']) { ?>
<li><div><a href="wapad.php" rel="external">广告预定</a></div></li>
<?php } ?>
<?php if($MOD['oauth']) { ?>
<li><div><a href="wapoauth.php" rel="external">一键登录</a></div></li>
<?php } ?>
<?php if($MG['ask']) { ?>
<li><div><a href="wapask.php" rel="external">客服中心</a></div></li>
<?php } ?>
</ul>
</div>
<?php } else if($action == 'info') { ?>
<div class="blank-20"></div>
<div class="list-set">
<ul>
<?php if(is_array($MYMODS)) { foreach($MYMODS as $k => $v) { ?>
<?php if($v==-9) { ?>
<li><div><a href="<?php echo $url;?>&resume=1" rel="external">简历管理</a></div></li>
<?php } else { ?>
<?php if(in_array($v, array(5,6,7,8,9,10,12,13,14,15,16,17,18,21,22,23))) { ?>
<?php $url = 'memberwap.php?mid='.$v.'';?>
<?php } else { ?>
<?php $url = ''.$MURL.$DT[file_my].'?mid='.$v.'';?>
<?php } ?>
<li><div<?php if($k==0) { ?> style="border:none;"<?php } ?>
><a href="<?php echo $url;?>" rel="external"><?php echo $MODULE[$v]['name'];?>管理</a></div></li>
<?php } ?>
<?php } } ?>
</ul>
</div>
<?php } else if($action == 'trade') { ?>
<div class="blank-20"></div>
<div class="list-set">
<ul>
<li><div style="border:none;"><a href="trade.php" rel="external">我的订单</a></div></li>
<?php if(isset($MODULE['17'])) { ?>
<li><div><a href="wapgroup.php" rel="external">团购订单</a></div></li>
<?php } ?>
<li><div><a href="waprecord.php" rel="external"><?php echo $DT['money_name'];?>流水</a></div></li>
<li><div><a href="charge.php?action=record" rel="external">充值记录</a></div></li>
<li><div><a href="wapdeposit.php" rel="external">保证金</a></div></li>
<li><div><a href="wapcash.php?action=record" rel="external"><?php echo $DT['money_name'];?>提现</a></div></li>
<li><div><a href="wapcredit.php" rel="external"><?php echo $DT['credit_name'];?>管理</a></div></li>
<?php if($MG['address_limit']>-1) { ?>
<li><div><a href="address.php?page=1" rel="external">收货地址</a></div></li>
<?php } ?>
</ul>
</div>
<?php } else if($action == 'home') { ?>
<div class="blank-20"></div>
<div class="list-set">
<ul>
<li><div style="border:none;"><a href="waphome.php" rel="external">PC端商铺设置</a></li>
<li><div><a href="wapstyle.php" rel="external">PC端模板设置</a></div></li>
<li><div><a href="waphome.php?tab=6" rel="external">WAP端设置</a></div></li>
<?php if(($MG['news_limit']>-1 && $MG['homepage'])) { ?>
<li><div><a href="wapnews.php" rel="external">公司新闻</a></div></li>
<?php } ?>
<?php if(($MG['page_limit']>-1 && $MG['homepage'])) { ?>
<li><div><a href="wappage.php" rel="external">公司单页</a></div></li>
<?php } ?>
<?php if(($MG['honor_limit']>-1 && $MG['homepage'])) { ?>
<li><div><a href="waphonor.php" rel="external">荣誉资质</a></div></li>
<?php } ?>
<?php if(($MG['link_limit']>-1 && $MG['homepage'])) { ?>
<li><div><a href="waplink.php" rel="external">友情链接</a></div></li>
<?php } ?>
</ul>
</div>
<?php } else { ?>
<?php if($_userid) { ?>
<div class="photo f_w por ">
          <?php if($MG['groupid'] == 8) { ?>
          <div class="top_bg68_8">
  <?php } else if($MG['groupid'] == 7) { ?>
  <div class="top_bg68_7">
  <?php } else if($MG['groupid'] == 6) { ?>
  <div class="top_bg68_6">
  <?php } else if($MG['groupid'] == 5) { ?>
  <div class="top_bg68_5">
  <?php } else if($MG['groupid'] == 1) { ?>
  <div class="top_bg68_1">
  <?php } else { ?>
  <div class="top_bg68">
  <?php } ?>
          <span class="gray_img"><a href="wapavatar.php" rel="external" data-transition="slideup"><img class="img" src="<?php echo useravatar($_username, 'large');?>" width="80" height="80"></a></span>
<p><?php echo $_username;?></p>
<p>您目前是 <?php echo $MG['groupname'];?></p>
          </div>
          <div class="pay_information">
         <li><a href="waprecord.php" data-transition="slideup"><p><?php echo $DT['money_name'];?></p><p class="red"><?php echo $_money;?> <?php echo $DT['money_unit'];?></p></a></li>
<li><a href="cart.php" data-transition="slideup"><p>购物车</p><p class="red"><?php echo $_cart;?></p></a></li>
<li class="bor_r_n"><a href="wapcredit.php" data-transition="slideup"><p><?php echo $DT['credit_name'];?></p><p class="red"><?php echo $_credit;?> <?php echo $DT['credit_unit'];?></p></a></li>
 </div>
</div>
<?php } else { ?>
<div class="photo f_w por ">
  <div class="top_bg68">
          <span class="gray_img"><a href="login.php?forward=my.php" rel="external" data-transition="slideup"><img class="img" src="<?php echo useravatar($_username, 'large');?>" width="80" height="80"></a></span>
<p>欢迎来到 <?php echo $DT['sitename'];?></p>
<p>您当前设备：<?php
//获取USER AGENT
$agent = strtolower($_SERVER['HTTP_USER_AGENT']);
 
//分析数据
$is_pc = (strpos($agent, 'windows nt')) ? true : false;   
$is_iphone = (strpos($agent, 'iphone')) ? true : false;   
$is_ipad = (strpos($agent, 'ipad')) ? true : false;   
$is_android = (strpos($agent, 'android')) ? true : false;   
 
//输出数据 
    if($is_pc){   
        echo "PC电脑";   
    }   
    if($is_iphone){   
        echo "iPhone手机";   
    }   
    if($is_ipad){   
        echo "iPad平板";   
    }   
    if($is_android){   
        echo "Android手机";   
    }   
?></p></p>
          </div>
          <div class="pay_information_no">
         <li><a href="login.php?forward=my.php" data-transition="slideup"><p>登录</p></a></li>
         <li class="bor_r_n"><a href="register.php?act=register" data-transition="slideup"><p>注册</p></a></li>
 </div>
</div>

<?php } ?>
<?php if($_userid) { ?>
<?php $qd=$db->get_one("SELECT itemid,addtime FROM ".$DT_PRE."qiandao WHERE userid=$_userid order by itemid desc");?>
<div class="blank-20"></div>
<div class="list-set-2 list-set-img mlr20 qiandao-ico">
<ul>
<li><div style="border:none;"><?php if(timetodate($qd['addtime'], 3)== timetodate($DT_TIME, 3)) { ?><span class="qian">
  今天已签到了</span><?php } else { ?> <span class="qian-no"><a href="wapqiandao.php">今天尚未签到</a></span><?php } ?>
<img src="images/img/calendar.png" width="24" height="24"/><?php if(timetodate($qd['addtime'], 3)== timetodate($DT_TIME, 3)) { ?>
           <a href="wapqiandao.php">签到记录</a><?php } else { ?> <a href="wapqiandao.php">每日签到</a><?php } ?>
</div></li>
</ul>
</div>
<?php } ?>
<?php if($_userid) { ?>
<div class="blank-20"></div>
<div class="list-set-2 list-set-img mlr20">
<ul>
<li><div style="border:none;"><?php if($_message) { ?><em><?php echo $_message;?></em><?php } ?>
<img src="static/img/my-message.png" width="24" height="24"/><a href="message.php">站内信件</a></div></li>
<?php if($DT['im_web']) { ?>
<li><div><?php if($_chat) { ?><em><?php echo $_chat;?></em><?php } ?>
<img src="static/img/my-chat.png" width="24" height="24"/><a href="chat.php">站内交谈</a></div></li>
<?php } ?>
<?php if(isset($MODULE['16'])) { ?>
<li><div><?php if($_cart) { ?><em><?php echo $_cart;?></em><?php } ?>
<img src="static/img/my-cart.png" width="24" height="24"/><a href="cart.php">购物车</a></div></li>
<?php } ?>
</ul>
</div>
<?php } ?>
<div class="blank-20"></div>
<div class="list-set-2 list-set-img mlr20">
<ul>
<li><div style="border:none;"><img src="static/img/my-member.png" width="24" height="24"/><a href="my.php?action=member">我的账户</a></div></li>
<li><div><img src="static/img/my-info.png" width="24" height="24"/><a href="my.php?action=info">信息管理</a></div></li>
<li><div><img src="static/img/my-trade.png" width="24" height="24"/><a href="my.php?action=trade">交易管理</a></div></li>
<?php if($MG['homepage'] || !$_userid) { ?>
<li><div><img src="static/img/my-home.png" width="24" height="24"/><a href="my.php?action=home">商铺设置</a></div></li>
<?php } ?>
</ul>
</div>
<?php if($_userid) { ?>
<?php } else { ?>
<div class="footer" style="padding-bottom:2em;">
      <div class="links" id="ECS_MEMBERZONE">
  <a href="login.php?forward=my.php" data-transition="slideup"><span>登录</span></a><a href="javascript:window.scrollTo(0,0);"><span>返回顶部</span></a>
</div>
      <div class="links">
      <a href="javascript:;"><span class="gl">触屏版</span></a>
      <a href="javascript:;"><span>安卓端</span></a>
      <a href="javascript:;"><span>苹果端</span></a>
      </div>
<div class="links">Copyright © 2004-2017 <?php echo $DT['jdname'];?> <?php echo $DT['jdhttp'];?> 版权所有</div>
</div>
<?php } ?>
<?php } ?>
</div>                            
</div>
 </div>
<link rel="stylesheet" type="text/css" href="images/Start-menu.css">
<script>
  if ('ontouchstart' in window) {
var click = 'touchstart';
} else {
var click = 'click';
}
$('div.burger').on(click, function () {
if (!$(this).hasClass('openmy')) {
openMenu();
} else {
closeMenu();
}
});
$('div.menu-my ul li a').on(click, function (e) {
e.preventDefault();
closeMenu();
});
function openMenu() {
$('div.burger').addClass('openmy');
$('div.y').fadeOut(100);
$('div.screen').addClass('animate');
setTimeout(function () {
$('div.x').addClass('rotate30');
$('div.z').addClass('rotate150');
$('.menu-my').addClass('animate');
setTimeout(function () {
$('div.x').addClass('rotate45');
$('div.z').addClass('rotate135');
}, 100);
}, 10);
}
function closeMenu() {
$('div.screen, .menu-my').removeClass('animate');
$('div.y').fadeIn(150);
$('div.burger').removeClass('openmy');
$('div.x').removeClass('rotate45').addClass('rotate30');
$('div.z').removeClass('rotate135').addClass('rotate150');
setTimeout(function () {
$('div.x').removeClass('rotate30');
$('div.z').removeClass('rotate150');
}, 50);
setTimeout(function () {
$('div.x, div.z').removeClass('collapse');
}, 70);
}
</script>
<?php include template('footer', 'mobile');?>