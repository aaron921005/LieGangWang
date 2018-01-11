<?php defined('IN_DESTOON') or exit('Access Denied');?><?php if($DT_TOUCH) { ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="<?php echo DT_CHARSET;?>"/>
<meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width"/>
<title><?php echo $head_title;?></title>
<?php } else { ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=<?php echo DT_CHARSET;?>"/>
<meta name="robots" content="nofollow"/>
<meta name="generator" content="b2b.bjlsjp.cn"/>
<meta http-equiv="X-UA-Compatible" content="IE=8" />
<title><?php if($head_title) { ?><?php echo $head_title;?><?php echo $DT['seo_delimiter'];?><?php } ?>
商务中心<?php echo $DT['seo_delimiter'];?><?php if($city_sitename) { ?><?php echo $city_sitename;?><?php } else { ?><?php echo $DT['sitename'];?><?php } ?>
<?php echo $DT['seo_delimiter'];?></title>
<?php } ?>
<link rel="shortcut icon" href="<?php echo DT_STATIC;?>favicon.ico"/>
<link rel="bookmark" href="<?php echo DT_STATIC;?>favicon.ico"/>
<link rel="stylesheet" type="text/css" href="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/style.css"/>
<?php if($DT_TOUCH) { ?>
<link rel="stylesheet" type="text/css" href="<?php echo $EXT['mobile_url'];?>static/member.css"/>
<script type="text/javascript">var Dbrowser = '<?php echo $DT_MOB['browser'];?>';</script>
<?php } else { ?>
<!--[if lte IE 6]>
<link rel="stylesheet" type="text/css" href="<?php echo DT_SKIN;?>ie6.css"/>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/ie6png.js"></script>
<script type="text/javascript">DD_belatedPNG.fix('*');</script>
<![endif]-->
<!--[if IE]>
<style type="text/css">
.head_user em {margin:-4px 0 0 -4px;}
#mini_profile {margin:20px 0 0 -140px;}
</style>
<![endif]-->
<?php } ?>
<?php if(!DT_DEBUG) { ?><script type="text/javascript">window.onerror= function(){return true;}</script><?php } ?>
<script type="text/javascript" src="<?php echo DT_STATIC;?>lang/<?php echo DT_LANG;?>/lang.js"></script>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/config.js"></script>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/jquery.js"></script>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/common.js"></script>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/admin.js"></script>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/member.js"></script>
<?php if($DT_TOUCH) { ?><script type="text/javascript" src="<?php echo $EXT['mobile_url'];?>static/js/fix.js"></script><?php } ?>
</head>
<body>
<div id="msgbox" style="display:none;"></div>
<?php echo dmsg();?>
<?php if($DT_TOUCH) { ?>
<div id="head-bar">
<div class="head-bar">
<div class="head-bar-right"><a href="<?php echo $EXT['mobile_url'];?>my.php?action=back"><span>我的</span></a></div>
<div class="head-bar-back"><a href="javascript:window.history.back();"><img src="<?php echo $EXT['mobile_url'];?>static/img/icon-back.png"/><span>返回</span></a></div>
<div class="head-bar-title"><?php if($head_title) { ?><?php echo $head_title;?><?php } else { ?>会员中心<?php } ?>
</div>
</div>
<div class="head-bar-fix"></div>
</div>
<?php } else { ?>
<div class="head" id="head">
<div class="head_m">
<div class="head_logo"><a href="<?php echo $MODULE['2']['linkurl'];?>"><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/logo.png" alt="商务中心"/></a></div>
<div class="head_main">
<ul>
<?php if($_userid) { ?>
<li class="menu_1" id="menu_0" onclick="c(0);">会员服务</li>
<li class="menu_2" id="menu_1" onclick="c(1);">信息管理</li>
<li class="menu_2" id="menu_2" onclick="c(2);">交易管理</li>
<?php if($MG['homepage'] || $show_menu) { ?><li class="menu_2" id="menu_3" onclick="c(3);">商铺管理</li><?php } ?>
<?php } ?>
</ul>
</div>
<div class="head_user">
<?php if($_userid) { ?>
<ul>
<li id="destoon_message" class="bell"><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/icon-bell.png" width="20" height="21" title="消息" align="absmiddle" /><a href="message.php"><em><?php echo $_message;?></em></a></li>
<?php if($DT['im_web']) { ?><li id="destoon_chat"><a href="chat.php">对话<?php if($_chat) { ?><em><?php echo $_chat;?></em><?php } ?>
</a></li><?php } ?>
<li><a href="ask.php">建议反馈</a></li>
    <li id="my_profile"><a href="avatar.php"><?php echo hideStar($_email);?></a>
<div id="mini_profile" style="display:none;">
<div>
<dl>
<dt>
<a href="edit.php"><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/set1.png" width="22" height="22" align="absmiddle" title="资料修改">
<p>资料设置</p>
</a>
</dt>
<dt>
<a href="validate.php?action=truename"><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/set2.png" width="22" height="22" align="absmiddle" title="实名认证">
<p>实名认证</p>
</a>
</dt>
<dt>
<a href="validate.php?action=company"><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/set3.png" width="22" height="22" align="absmiddle" title="企业认证">
<p>企业认证</p>
</a>
</dt>
<dt>
<a href="
validate.php?action=email"><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/set4.png" width="22" height="22" align="absmiddle" title="邮箱认证">
<p>邮箱认证</p>
</a>
</dt>
<dt>
<a href="favorite.php"><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/set5.png" width="22" height="22" align="absmiddle" title="我的收藏">
<p>我的收藏</p>
</a>
</dt>
<dt>
<a href="record.php"><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/set6.png" width="22" height="22" align="absmiddle" title="我的资金">
<p>我的资金</p>
</a>
</dt>
<dt>
<a href="credit.php"><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/set7.png" width="22" height="22" align="absmiddle" title="我的积分">
<p>我的积分</p>
</a>
</dt>
<dt>
<a href="profile.php"><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/set8.png" width="22" height="22" align="absmiddle" title="会员中心">
<p>账户详情</p>
</a>
</dt>
 <?php if($MOD['credit_qd']) { ?>
<dt>
<a href="qiandao.php"><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/set9.png" width="22" height="22" align="absmiddle" title="会员中心">
<p>每日签到</p>
</a>
</dt>
<?php } ?>
</dl>
<dl>
<dt class="logout2">
<a href="logout.php?forward=">退出</a>
</dt>
</dl>
</div>
</div>
</li>
<?php if($admin_user) { ?>
<li><a href="<?php echo DT_PATH;?>">网站首页</a></li>
<li class="no_br head_red"><a href="index.php?action=logout">注销授权</a></li>
<?php } else { ?>
<li class="no_br"><a href="<?php echo DT_PATH;?>" target="_blank">网站首页</a></li>
<?php } ?>
</ul>
<?php } else { ?>
<ul>
    <li><a href="<?php echo DT_PATH;?>" target="_blank">网站首页</a></li>
<li><a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_login'];?>">立即登录</a></li>
<li><a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_register'];?>">注册会员</a></li>
</ul>
<?php } ?>

</div>
<div class="c_b"></div>
</div>
</div>
<div class="head_s" id="destoon_space">&nbsp;</div>
<?php } ?>
<div class="main_tb">
<table cellpadding="0" cellspacing="0" width="<?php if($DT_TOUCH) { ?>960<?php } else { ?>100%<?php } ?>
">
<tr>
<?php if(!$DT_TOUCH) { ?>
<td valign="top" class="side" id="side">
<div class="left_memu">
<div id="sub_0" style="display:<?php if($_userid) { ?><?php } else { ?>none<?php } ?>
">
<?php if($_userid || $show_menu) { ?>
<div class="side_head" id="h_0"><div><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/ico_1.png" width="16" height="16" align="absmiddle" title="会员服务"/>&nbsp;会员服务</div></div>
<div class="side_body" id="b_0">
<ul>
<?php if($MG['inbox_limit']>-1 || $show_menu) { ?>
<li class="side_a" onmouseover="v(this.id);" onmouseout="t(this.id);" id="message"><span class="f_r"><a href="message.php?action=send" class="m">发信</a></span><a href="message.php" class="<?php if($MG['inbox_limit']>-1) { ?>n<?php } else { ?>f<?php } ?>
">站内信件</a><?php if($_message) { ?><em><?php echo $_message;?></em><?php } ?>
</li>
<?php } ?>
<?php if($MG['chat'] || $show_menu) { ?>
<?php if($DT['im_web']) { ?>
<li class="side_a" onmouseover="v(this.id);" onmouseout="t(this.id);" id="chats"><span class="f_r"><a href="chat.php?action=add" class="m">查看</a></span><a href="chat.php" class="<?php if($MG['inbox_limit']>-1) { ?>n<?php } else { ?>f<?php } ?>
">站内交谈</a><?php if($_chat) { ?><em><?php echo $_chat;?></em><?php } ?>
</li>
<?php } ?>
<?php } ?>
<?php if($MG['friend_limit']>-1 || $show_menu) { ?>
<li class="side_a" onmouseover="v(this.id);" onmouseout="t(this.id);" id="friend"><span class="f_r"><a href="friend.php?action=add" class="m">添加</a></span><a href="friend.php" class="<?php if($MG['friend_limit']>-1) { ?>n<?php } else { ?>f<?php } ?>
">我的商友</a></li>
<?php } ?>
<?php if($MG['favorite_limit']>-1 || $show_menu) { ?>
<li class="side_a" onmouseover="v(this.id);" onmouseout="t(this.id);" id="favorite"><span class="f_r"><a href="favorite.php?action=add" class="m">添加</a></span><a href="favorite.php" class="<?php if($MG['favorite_limit']>-1) { ?>n<?php } else { ?>f<?php } ?>
">我的收藏</a></li>
<?php } ?>
<?php if($MG['alert_limit']>-1 || $show_menu) { ?>
<li class="side_a" onmouseover="v(this.id);" onmouseout="t(this.id);" id="alert"><span class="f_r"><a href="alert.php?action=add" class="m">添加</a></span><a href="alert.php" class="<?php if($MG['alert_limit']>-1) { ?>n<?php } else { ?>f<?php } ?>
">贸易提醒</a></li>
<?php } ?>
<?php if($MG['sms'] || $show_menu) { ?>
<?php if($DT['sms']) { ?><li class="side_a" onmouseover="v(this.id);" onmouseout="t(this.id);" id="sms"><span class="f_r"><a href="sms.php?action=add" class="m">发送</a></span><a href="sms.php" class="<?php if($MG['sms']) { ?>n<?php } else { ?>f<?php } ?>
">手机短信</a></li><?php } ?>
<?php } ?>
<?php if($MG['mail'] || $show_menu) { ?>
<li class="side_a" onmouseover="v(this.id);" onmouseout="t(this.id);" id="mail"><span class="f_r"><a href="sendmail.php" class="m">电邮</a></span><a href="mail.php" class="<?php if($MG['mail']) { ?>n<?php } else { ?>f<?php } ?>
">邮件订阅</a></li>
<?php } ?>
<?php if($MG['spread'] || $show_menu) { ?>
<li class="side_a" onmouseover="v(this.id);" onmouseout="t(this.id);" id="spread"><span class="f_r"><a href="spread.php?action=add" class="m">购买</a></span><a href="spread.php" class="<?php if($MG['spread']) { ?>n<?php } else { ?>f<?php } ?>
">排名推广</a></li>
<?php } ?>
<?php if($MG['ad'] || $show_menu) { ?>
<li class="side_a" onmouseover="v(this.id);" onmouseout="t(this.id);" id="ad"><span class="f_r"><a href="ad.php?action=add" class="m">购买</a></span><a href="ad.php" class="<?php if($MG['ad']) { ?>n<?php } else { ?>f<?php } ?>
">广告预定</a></li>
<?php } ?>
<?php if($show_oauth) { ?>
<li class="side_a" onmouseover="v(this.id);" onmouseout="t(this.id);" id="oauth"><span class="f_r"><a href="oauth.php" class="m">绑定</a></span><a href="oauth.php" class="<?php if($_userid) { ?>n<?php } else { ?>f<?php } ?>
">一键登录</a></li>
<?php } ?>
<?php if($EXT['weixin']) { ?>
<li class="side_a" onmouseover="v(this.id);" onmouseout="t(this.id);" id="weixin"><span class="f_r"><a href="weixin.php" class="m">绑定</a></span><a href="weixin.php" class="<?php if($_userid) { ?>n<?php } else { ?>f<?php } ?>
">微信关注</a></li>
<?php } ?>
<li class="side_a" onmouseover="v(this.id);" onmouseout="t(this.id);" id="edit"><span class="f_r"><a href="avatar.php" class="m">头像</a></span><a href="edit.php" class="<?php if($_userid) { ?>n<?php } else { ?>f<?php } ?>
">修改资料</a></li>
<?php if($MG['ask'] || $show_menu) { ?>
<li class="side_a" onmouseover="v(this.id);" onmouseout="t(this.id);" id="ask"><span class="f_r"><a href="ask.php?action=add" class="m">提问</a></span><a href="ask.php" class="<?php if($_userid) { ?>n<?php } else { ?>f<?php } ?>
">客服中心</a></li>
<?php } ?>
</ul>
</div>
<?php } ?>
</div>
<div id="sub_1" style="display:<?php if($_userid) { ?>none<?php } else { ?><?php } ?>
">
<?php if($MYMODS || $show_menu) { ?>
<div class="side_head" id="h_1"><div><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/ico_2.png" width="22" height="22" align="absmiddle"/>&nbsp;信息管理</div></div>
<div class="side_body" id="b_1">
<ul>
<?php if(is_array($MENUMODS)) { foreach($MENUMODS as $k => $v) { ?>
<?php if($v==9) { ?>
<li class="side_a" onmouseover="v(this.id);" onmouseout="t(this.id);" id="mid_job"><span class="f_r"><a href="<?php echo $DT['file_my'];?>?mid=9&action=add" class="m">发布</a></span><a href="<?php echo $DT['file_my'];?>?mid=9" class="<?php if(in_array($v, $MYMODS)) { ?>n<?php } else { ?>f<?php } ?>
">招聘管理</a></li>
<?php } else if($v==-9) { ?>
<li class="side_a" onmouseover="v(this.id);" onmouseout="t(this.id);" id="mid_resume"><span class="f_r"><a href="<?php echo $DT['file_my'];?>?mid=9&action=add&resume=1" class="m">创建</a></span><a href="<?php echo $DT['file_my'];?>?mid=9&resume=1" class="<?php if(in_array($v, $MYMODS)) { ?>n<?php } else { ?>f<?php } ?>
">简历管理</a></li>
<?php } else if($v==18) { ?>
<li class="side_a" onmouseover="v(this.id);" onmouseout="t(this.id);"  id="mid_<?php echo $v;?>"><span class="f_r"><a href="<?php echo $DT['file_my'];?>?mid=<?php echo $v;?>&job=group&action=add" class="m">创建</a></span><a href="<?php echo $DT['file_my'];?>?mid=<?php echo $v;?>" class="<?php if(in_array($v, $MYMODS)) { ?>n<?php } else { ?>f<?php } ?>
"><?php echo $MODULE[$v]['name'];?>管理</a></li>
<?php } else { ?>
<li class="side_a" onmouseover="v(this.id);" onmouseout="t(this.id);"  id="mid_<?php echo $v;?>"><span class="f_r"><a href="<?php echo $DT['file_my'];?>?mid=<?php echo $v;?>&action=add" class="m">发布</a></span><a href="<?php echo $DT['file_my'];?>?mid=<?php echo $v;?>" class="<?php if(in_array($v, $MYMODS)) { ?>n<?php } else { ?>f<?php } ?>
"><?php echo $MODULE[$v]['name'];?>管理</a></li>
<?php } ?>
<?php } } ?>
</ul>
</div>
<?php } ?>
</div>
<div id="sub_2" style="display:none;">
<?php if($_userid || $show_menu) { ?>
<div class="side_head" id="h_2"><div><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/ico_3.png" width="20" height="20" align="absmiddle"/>&nbsp;交易管理</div></div>
<div class="side_body" id="b_2">
<ul>
<li class="side_a" onmouseover="v(this.id);" onmouseout="t(this.id);" id="trade"><span class="f_r"><a href="trade.php?action=order" class="m">买家</a></span><a href="trade.php" class="<?php if($_userid) { ?>n<?php } else { ?>f<?php } ?>
">我的订单</a></li>
<?php if(isset($MODULE['17'])) { ?>
<li class="side_a" onmouseover="v(this.id);" onmouseout="t(this.id);" id="group"><span class="f_r"><a href="group.php?action=order" class="m">买家</a></span><a href="group.php" class="<?php if($_userid) { ?>n<?php } else { ?>f<?php } ?>
">团购订单</a></li>
<?php } ?>
<li class="side_a" onmouseover="v(this.id);" onmouseout="t(this.id);" id="record"><span class="f_r"><a href="record.php?action=pay" class="m">站内</a></span><a href="record.php" class="<?php if($_userid) { ?>n<?php } else { ?>f<?php } ?>
"><?php echo $DT['money_name'];?>流水</a></li>
<li class="side_a" onmouseover="v(this.id);" onmouseout="t(this.id);" id="charge"><span class="f_r"><a href="charge.php?action=pay" class="m">充值</a></span><a href="charge.php?action=record" class="<?php if($_userid) { ?>n<?php } else { ?>f<?php } ?>
">充值记录</a></li>
<li class="side_a" onmouseover="v(this.id);" onmouseout="t(this.id);" id="deposit"><span class="f_r"><a href="deposit.php?action=add" class="m">增资</a></span><a href="deposit.php" class="<?php if($_userid) { ?>n<?php } else { ?>f<?php } ?>
">保 证 金</a></li>
<li class="side_a" onmouseover="v(this.id);" onmouseout="t(this.id);" id="cash"><span class="f_r"><a href="cash.php" class="m">提现</a></span><a href="cash.php?action=record" class="<?php if($_userid) { ?>n<?php } else { ?>f<?php } ?>
"><?php echo $DT['money_name'];?>提现</a></li>
<li class="side_a" onmouseover="v(this.id);" onmouseout="t(this.id);" id="credit"><span class="f_r"><a href="credit.php?action=buy" class="m">购买</a></span><a href="credit.php" class="<?php if($_userid) { ?>n<?php } else { ?>f<?php } ?>
"><?php echo $DT['credit_name'];?>管理</a></li>
<?php if($MG['address_limit']>-1 || $show_menu) { ?>
<li class="side_a" onmouseover="v(this.id);" onmouseout="t(this.id);" id="addr"><span class="f_r"><a href="address.php?action=add" class="m">添加</a></span><a href="address.php" class="<?php if($MG['address_limit']>-1) { ?>n<?php } else { ?>f<?php } ?>
">收货地址</a></li>
<?php } ?>
</ul>
</div>
<?php } ?>
</div>
<div id="sub_3" style="display:none;">
<?php if($MG['homepage'] || $show_menu) { ?>
<div class="side_head" id="h_3"><div><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/ico_4.png" width="20" height="20" align="absmiddle"/>&nbsp;商铺管理</div></div>
<div class="side_body" id="b_3">
<ul>
<?php if($MG['homepage'] || $show_menu) { ?>
<li class="side_a" onmouseover="v(this.id);" onmouseout="t(this.id);" id="homepage"><span class="f_r"><a href="<?php echo DT_PATH;?>index.php?homepage=<?php echo $_username;?>&update=1" class="m" target="_blank">预览</a></span><a href="home.php" class="<?php if($MG['homepage']) { ?>n<?php } else { ?>f<?php } ?>
">商铺设置</a></li>
<?php } ?>
<?php if($MG['homepage'] || $show_menu) { ?>
<li class="side_a" onmouseover="v(this.id);" onmouseout="t(this.id);" id="style"><span class="f_r"><a href="style.php?action=view" class="m">查看</a></span><a href="style.php" class="<?php if($MG['homepage']) { ?>n<?php } else { ?>f<?php } ?>
">模板选择</a></li>
<?php } ?>
<?php if(($MG['news_limit']>-1 && $MG['homepage']) || $show_menu) { ?>
<li class="side_a" onmouseover="v(this.id);" onmouseout="t(this.id);" id="news"><span class="f_r"><a href="news.php?action=add" class="m">发布</a></span><a href="news.php" class="<?php if($MG['news_limit']>-1 && $MG['homepage']) { ?>n<?php } else { ?>f<?php } ?>
">公司新闻</a></li>
<?php } ?>
<?php if(($MG['page_limit']>-1 && $MG['homepage']) || $show_menu) { ?>
<li class="side_a" onmouseover="v(this.id);" onmouseout="t(this.id);" id="page"><span class="f_r"><a href="page.php?action=add" class="m">添加</a></span><a href="page.php" class="<?php if($MG['page_limit']>-1 && $MG['homepage']) { ?>n<?php } else { ?>f<?php } ?>
">公司单页</a></li>
<?php } ?>
<?php if(($MG['honor_limit']>-1 && $MG['homepage']) || $show_menu) { ?>
<li class="side_a" onmouseover="v(this.id);" onmouseout="t(this.id);" id="honor"><span class="f_r"><a href="honor.php?action=add" class="m">添加</a></span><a href="honor.php" class="<?php if($MG['honor_limit']>-1 && $MG['homepage']) { ?>n<?php } else { ?>f<?php } ?>
">荣誉资质</a></li>
<?php } ?>
<?php if(($MG['link_limit']>-1 && $MG['homepage']) || $show_menu) { ?>
<li class="side_a" onmouseover="v(this.id);" onmouseout="t(this.id);" id="link"><span class="f_r"><a href="link.php?action=add" class="m">添加</a></span><a href="link.php" class="<?php if($MG['link_limit']>-1 && $MG['homepage']) { ?>n<?php } else { ?>f<?php } ?>
">友情链接</a></li>
<?php } ?>
</ul>
</div>
<?php } ?>
</div>
</div>
</td>
<td class="side_h" onclick="oh(this);" title="点击展开/隐藏侧栏" id="side_oh">&nbsp;</td>
<?php } ?>
<td valign="top" class="main" id="main">