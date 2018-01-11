<?php defined('IN_DESTOON') or exit('Access Denied');?><!DOCTYPE html>
<html>
<head>
<meta charset="<?php echo DT_CHARSET;?>"/>
<meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width"/>
<title><?php echo $head_title;?></title>
<meta name="robots" content="nofollow"/>
<meta name="generator" content="template - b2b.bjlsjp.cn"/>
<link rel="shortcut icon" href="<?php echo DT_STATIC;?>favicon.ico"/>
<link rel="bookmark" href="<?php echo DT_STATIC;?>favicon.ico"/>
<link rel="stylesheet" type="text/css" href="<?php echo $EXT['mobile_url'];?>images/style.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo $EXT['mobile_url'];?>images/common.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo $EXT['mobile_url'];?>images/business-center.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo $EXT['mobile_url'];?>images/xiaoheimember.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo $EXT['mobile_url'];?>static/member.css"/>
<script type="text/javascript" src="<?php echo DT_STATIC;?>lang/<?php echo DT_LANG;?>/lang.js"></script>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/config.js"></script>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/common.js"></script>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/admin.js"></script>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/member.js"></script>
<script type="text/javascript" src="<?php echo $EXT['mobile_url'];?>images/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
$(document).bind("mobileinit", function() {
　　<?php if($EXT['mobile_ajax']) { ?>
$.mobile.defaultPageTransition = 'slide';
<?php } else { ?>
$.mobile.ajaxEnabled = false;
<?php } ?>
});
var AJPath = 'ajax.php';
var Dbrowser = '<?php echo $DT_MOB['browser'];?>';
//<?php if(!DT_DEBUG) { ?>
//if(!('ontouchend' in document) && window.location.href.indexOf('device.php') == -1) window.location='device.php';
//<?php } ?>
</script>
<script type="text/javascript" src="<?php echo $EXT['mobile_url'];?>static/js/fix.js"></script>
</head>
<body>
<div id="head-bar">
  <div class="head-bar">
    <div class="head-bar-right"><a href="<?php echo $EXT['mobile_url'];?>my.php?action=back"><span>我的</span></a></div>
    <div class="head-bar-back"><a href="javascript:window.history.back();"><img src="<?php echo $EXT['mobile_url'];?>static/img/icon-back.png"/><span>返回</span></a></div>
    <div class="head-bar-title"><?php if($head_title) { ?><?php echo $head_title;?><?php } else { ?>会员中心<?php } ?>
</div>
  </div>
  <div class="head-bar-fix"></div>
</div>
<div id="msgbox" style="display:none;"></div>
<?php echo dmsg();?> 