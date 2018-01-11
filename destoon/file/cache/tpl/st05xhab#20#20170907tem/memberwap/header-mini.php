<?php defined('IN_DESTOON') or exit('Access Denied');?><html>
<head>
<meta charset="UTF-8"/>
<title><?php echo $head_title;?></title>
<meta name="robots" content="NOINDEX,NOFOLLOW,noarchive" />
<meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width"/>
<meta http-equiv="Cache-Control" content="no-siteapp"/>
<meta name="generator" content="b2b.bjlsjp.cn"/>
<meta name="format-detection" content="telephone=no"/>
<meta name="apple-mobile-web-app-capable" content="yes"/>
<meta name="apple-mobile-web-app-title" content="<?php echo $site_name;?>"/>
<meta name="apple-mobile-web-app-status-bar-style" content="default"/>
<link rel="apple-touch-icon-precomposed" href="apple-touch-icon-precomposed.png"/>
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-touch-fullscreen" content="yes"/>
<meta name="full-screen" content="yes"/>
<meta name="x5-fullscreen" content="true"/>
<link rel="icon" sizes="128x128" href="apple-touch-icon-precomposed.png">
<meta name="msapplication-TileImage" content="apple-touch-icon-precomposed.png">
<meta name="msapplication-TileColor" content="#007AFF">
<link rel="shortcut icon" type="image/x-icon" href="<?php echo DT_PATH;?>favicon.ico"/>
<link rel="bookmark" type="image/x-icon" href="<?php echo DT_PATH;?>favicon.ico"/>
<link rel="stylesheet" type="text/css" href="<?php echo $EXT['mobile_url'];?>images/style.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo $EXT['mobile_url'];?>images/common.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo $EXT['mobile_url'];?>images/business-center.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo $EXT['mobile_url'];?>images/xiaoheimember.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo $EXT['mobile_url'];?>static/member.css"/>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/config.js"></script>
<script type="text/javascript" src="static/lib/jquery/jquery-2.1.1.min.js"></script>
<script type="text/javascript">
var AJPath = 'ajax.php';
var Dbrowser = '<?php echo $DT_MOB['browser'];?>';
</script>
<?php if($JS) { ?>
<?php if(is_array($JS)) { foreach($JS as $js) { ?>
<script type="text/javascript" src="static/<?php echo $js;?>.js"></script>
<?php } } ?>
<?php } ?>
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