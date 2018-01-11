<?php defined('IN_DESTOON') or exit('Access Denied');?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<title><?php echo $head_title;?></title>
<meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width"/>
<meta name="format-detection" content="telephone=no,email=no,date=no,address=no">
<meta http-equiv="Cache-Control" content="no-siteapp"/>
<meta name="apple-mobile-web-app-capable" content="yes"/>
<meta name="apple-mobile-web-app-title" content="<?php echo $site_name;?>"/>
<meta name="apple-mobile-web-app-status-bar-style" content="default"/>
<link rel="apple-touch-icon-precomposed" href="apple-touch-icon-precomposed.png"/>
<meta name="mobile-web-app-capable" content="yes">
<link rel="icon" sizes="128x128" href="apple-touch-icon-precomposed.png">
<meta name="msapplication-TileImage" content="apple-touch-icon-precomposed.png">
<meta name="msapplication-TileColor" content="#007AFF">
<link rel="shortcut icon" type="image/x-icon" href="<?php echo DT_PATH;?>favicon.ico"/>
<link rel="bookmark" type="image/x-icon" href="<?php echo DT_PATH;?>favicon.ico"/>
<link rel="stylesheet" type="text/css" href="static/lib/jquery/jquery.mobile.custom.structure.min.css"/>
<link rel="stylesheet" type="text/css" href="static/style.css"/>
<link rel="stylesheet" type="text/css" href="images/xhdtwap.css"/>
<?php if($CSS) { ?>
<?php if(is_array($CSS)) { foreach($CSS as $css) { ?>
<link rel="stylesheet" type="text/css" href="static/<?php echo $css;?>.css"/>
<?php } } ?>
<?php } ?>
<?php include template('axhuicss', 'mobile');?>
<script type="text/javascript" src="static/lib/jquery/jquery-2.1.1.min.js"></script>
<script type="text/javascript">
$(document).bind("mobileinit", function() {
　　<?php if(isset($EXT['mobile_ajax']) && $EXT['mobile_ajax']) { ?>
$.mobile.defaultPageTransition = 'slide';
<?php } else { ?>
$.mobile.ajaxEnabled = false;
<?php } ?>
});
var AJPath = 'ajax.php';
var Dbrowser = '<?php echo $DT_MOB['browser'];?>';
<?php if(!DT_DEBUG) { ?>
if(!('ontouchend' in document) && window.location.href.indexOf('device.php') == -1) window.location='device.php';
<?php } ?>
</script>
<script type="text/javascript" src="static/js/common.js"></script>
<?php if($JS) { ?>
<?php if(is_array($JS)) { foreach($JS as $js) { ?>
<script type="text/javascript" src="static/<?php echo $js;?>.js"></script>
<?php } } ?>
<?php } ?>
<script type="text/javascript" src="static/js/fix.js"></script>
</head>
<body class="mhome">
<div data-role="page">
<div class="ui-toast"></div>
<div class="ui-mask"></div>
<div class="ui-sheet"></div>
