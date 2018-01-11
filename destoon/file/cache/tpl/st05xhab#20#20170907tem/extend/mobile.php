<?php defined('IN_DESTOON') or exit('Access Denied');?><!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=<?php echo DT_CHARSET;?>"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta http-equiv="x-ua-compatible" content="IE=edge"/>
<title><?php if($seo_title) { ?><?php echo $seo_title;?><?php } else { ?><?php if($head_title) { ?><?php echo $head_title;?><?php echo $DT['seo_delimiter'];?><?php } ?>
<?php if($city_sitename) { ?><?php echo $city_sitename;?><?php } else { ?><?php echo $DT['sitename'];?><?php } ?>
<?php } ?>
</title>
<?php if($head_keywords) { ?>
<meta name="keywords" content="<?php echo $head_keywords;?>"/>
<?php } ?>
<?php if($head_description) { ?>
<meta name="description" content="<?php echo $head_description;?>"/>
<?php } ?>
<?php if($head_mobile) { ?>
<meta http-equiv="mobile-agent" content="format=html5;url=<?php echo $head_mobile;?>">
<?php } ?>
<meta name="generator" content="template - b2b.bjlsjp.cn"/>
<link rel="shortcut icon" type="image/x-icon" href="<?php echo DT_STATIC;?>favicon.ico"/>
<link rel="bookmark" type="image/x-icon" href="<?php echo DT_STATIC;?>favicon.ico"/>
<?php if($head_canonical) { ?>
<link rel="canonical" href="<?php echo $head_canonical;?>"/>
<?php } ?>
<?php if($EXT['archiver_enable']) { ?>
<link rel="archives" title="<?php echo $DT['sitename'];?>" href="<?php echo $EXT['archiver_url'];?>"/>
<?php } ?>
<link type="text/css" rel="stylesheet" href="style/css/jquery.fullPage.css" media="screen">
<link type="text/css" rel="stylesheet" href="style/css/style.css" media="screen">
<?php if(!DT_DEBUG) { ?><script type="text/javascript">window.onerror=function(){return true;}</script><?php } ?>
<script type="text/javascript" src="<?php echo DT_STATIC;?>lang/<?php echo DT_LANG;?>/lang.js"></script>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/config.js"></script>
<script type="text/javascript" src="<?php echo DT_SKIN;?>js/jquery-1.7.2.min.js" ignoreapd="false"></script>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/common.js"></script>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/page.js"></script>
<script type="text/javascript" src="style/js/jquery-ui-1.10.3.min.js"></script>
<script type="text/javascript" src="style/js/jquery.fullPage.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
$.fn.fullpage({
slidesColor: ['#0075D10', '#9462e0', '#6ac75b', '#ff8838', '#4c9cf5'],
anchors: ['page1', 'page2', 'page3', 'page4', 'page5'],
menu: '#menu',
afterRender: function(){
$('.screen-main span').each(function(){
var $rel = $(this).attr('rel');
var $arr = $rel.split(',');
$(this).animate({
left: $arr[2] + 'px',
top: $arr[3] + 'px'
}, 3000);
});
$('.inner a').each(function(){
var $rel = $(this).attr('rel');
var $arr = $rel.split(',');
$(this).animate({
left: $arr[0] + 'px',
bottom: $arr[1] + 'px'
}, 3000);
});
},
afterLoad: function(anchorLink, index){
if(index == 1){
$('.screen-main span').each(function(){
var $rel = $(this).attr('rel');
var $arr = $rel.split(',');
$(this).animate({
left: $arr[2] + 'px',
top: $arr[3] + 'px'
}, 3000);
});
}
if(index == 2 || index == 3 || index == 4 || index == 5){
$('.inner').eq(index - 2).find('a').each(function(){
var $rel = $(this).attr('rel');
var $arr = $rel.split(',');
$(this).animate({
left: $arr[2] + 'px',
bottom: $arr[3] + 'px'
}, 3000);
});
}
},
onLeave: function(index, direction){
if(index == 1){
$('.screen-main span').each(function(){
var $rel = $(this).attr('rel');
var $arr = $rel.split(',');
$(this).animate({
left: $arr[0] + 'px',
top: $arr[0] + 'px'
}, 500);
});
}
if(index == 2 || index == 3 || index == 4 || index == 5){
$('.inner').eq(index - 2).find('a').each(function(){
var $rel = $(this).attr('rel');
var $arr = $rel.split(',');
$(this).animate({
left: $arr[0] + 'px',
bottom: $arr[1] + 'px'
}, 500);
});
}
}
});
if($(".welcome_nav").length>0){
        $(".top_nav_wrap ").css('top','57px')
    }
});
</script>
<?php if($JS) { ?>
<?php if(is_array($JS)) { foreach($JS as $js) { ?>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/<?php echo $js;?>.js"></script>
<?php } } ?>
<?php } ?>
<?php $searchid = ($moduleid > 3 && $MODULE[$moduleid]['ismenu'] && !$MODULE[$moduleid]['islink']) ? $moduleid : 5;?>
<script type="text/javascript">
<?php if($head_mobile && $EXT['mobile_goto']) { ?>
GoMobile('<?php echo $head_mobile;?>');
<?php } ?>
var searchid = <?php echo $searchid;?>;
<?php if($itemid && $DT['anticopy']) { ?>
document.oncontextmenu=function(e){return false;};
document.onselectstart=function(e){return false;};
<?php } ?>
</script>
<script>
  //IE低版本的提示
  $(function(){
  function IETester(userAgent){var UA =  userAgent || navigator.userAgent;if(/msie/i.test(UA)){return UA.match(/msie (\d+\.\d+)/i)[1];}else if(~UA.toLowerCase().indexOf('trident') && ~UA.indexOf('rv')){return UA.match(/rv:(\d+\.\d+)/)[1];}else{return 0}}
      var version = Math.floor(IETester());
      var $xhtml = "<div class='ieTester'>亲！您的浏览器版本较低，为了您更好的体验请升级您的浏览器。<a href='//rj.baidu.com/soft/detail/14917.html?ald' target='_blank'>立即更新</a></div>";
   if (version > 1 && version < 9) {$("body").prepend($xhtml);}
        })
</script>
</head>
<body>
<ul id="menu">
<li data-menuanchor="page1" class="active"><a href="#page1"></a></li>
<li data-menuanchor="page2"><a href="#page2"></a></li>
<li data-menuanchor="page3"><a href="#page3"></a></li>
<li data-menuanchor="page4"><a href="#page4"></a></li>
<li data-menuanchor="page5"><a href="#page5"></a></li>
</ul>
<div class="top_nav_wrap">
<div class="top_nav cl">
<a href="/" target="_blank" class="fl"><img src="style/logo.png"/></a>
<a href="<?php echo $MODULE['52']['linkurl'];?>" target="_blank" class="fr" style="margin-left: 80px;">帮助中心</a>
<a href="<?php echo $MODULE['1']['linkurl'];?>" class="fr">平台首页</a>
</div>
</div>
<div class="section section1">
<div class="screen-main">
<span class="shi1" rel="-501,-355,300,100" id="qrcode-box"><img src="<?php echo DT_PATH;?>api/qrcode.png.php?auth=<?php echo urlencode($url);?>" id="qrcode-img" width="160" height="160"/></span>
<span class="shi2" rel="1387,-355,550,100"></span>
<span class="shi2_text" rel="1387,-355,550,200"><?php if($action=='device') { ?><p class="f_red">提示：抱歉，请用手机访问，谢谢</p><?php } ?>
<p>在手机浏览器地址栏输入：<a href="<?php echo $url;?>" class="b"><?php echo $url;?></a></p>
<p>或者用二维码扫描软件(微信、QQ等)扫描左侧的二维码</p></span>
<span class="shi3" rel="-619,459,507,359"></span>
<span class="shi4" rel="1295,459,574,363"><?php echo $MOD['mobile_sitename'];?></span>
<span class="ji1" rel="-328,-589,235,434">专注B2B贸易电商行业</span>
<ul class="type_tag_2">
   <?php if($EXT['weixin']) { ?>
   <li class="qr_li" id="type_1" onclick="Dqr(1);">
<span class="ji5" rel="-244,-488,130,553"><a href="javascript:;">微信关注</a></span></li>
<?php } ?>
   <li class="qr_on" id="type_0" onclick="Dqr(0);"><span class="ji4" rel="1648,-487,386,553"><a href="javascript:;">手机浏览</a></span></li>
<?php if($ios_app) { ?>
<li class="qr_li" id="type_2" onclick="Dqr(2);"><span class="ji2" rel="244,-488,642,553" ><a href="javascript:;">苹果客户端</a></span></li>
<?php } ?>
<?php if($android_app) { ?>
<li class="qr_li" id="type_3" onclick="Dqr(3);"><span class="ji3" rel="844,-488,898,553"><a href="javascript:;">安卓客户端</a></span></li>
<?php } ?>
</ul>
</div>
</div>
<div class="section">
<div class="science-inner inner">
<a class="stiteml st1" href="javascript:void(0)" rel="0,-350,42,515">大量实力厂商</a>
<a class="stiteml st2" href="javascript:void(0)" rel="0,-350,42,452">快速找厂</a>
<a class="stiteml st3" href="javascript:void(0)" rel="0,-350,42,402">买家采购，卖家供货，手机轻松做交易</a>
<a class="stiteml st4" href="javascript:void(0)" rel="0,-350,42,74"></a>
<a class="stiteml st5" href="javascript:void(0)" rel="1250,316,596,0"></a>
<a class="stiteml st6" href="javascript:void(0)" rel="1250,46,790,193"></a>
<a class="stiteml st7" href="javascript:void(0)" rel="1250,30,655,219"></a>
</div>
</div>
<div class="section">
<div class="famous-inner inner">
<a class="faitemr fa1" href="javascript:void(0)"  rel="42,-800,42,0"></a>
<a class="faitemr fa2" href="javascript:void(0)" rel="0,-500,0,219"></a>
<a class="faitemr fa3" href="javascript:void(0)" rel="268,-1000,268,244"></a>
<a class="faiteml fa4" href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_my'];?>?mid=5&action=add" target="_blank" rel="1280,203,674,506">免费发布货源</a>
<a class="faiteml fa5" href="javascript:void(0)" rel="1280,227,674,441">快速找货源</a>
<a class="faiteml fa6" href="javascript:void(0)" rel="1150,290,674,393">大量厂商采购，手机随时随地谈生意。</a>
<a class="faiteml fa7" href="javascript:void(0)" rel="1390,355,674,65,"></a>
</div>
</div>
<div class="section">
<div class="social-inner inner">
<a class="soiteml so1" href="javascript:void(0)" rel="42,-175,42,506"></a>
<a class="soiteml so2" href="javascript:void(0)" rel="42,-175,42,441"></a>
<a class="soiteml so3" href="javascript:void(0)" rel="42,-175,42,393"></a>
<a class="soiteml so4" href="<?php echo $MODULE['52']['linkurl'];?>" target="_blank" rel="42,-175,42,355"></a>
<a class="soiteml so5" href="javascript:void(0)" rel="42,-375,42,65"></a>
<a class="soiteml so6" href="javascript:void(0)" rel="1110,288,596,0"></a>
<a class="soiteml so7" href="javascript:void(0)" rel="1200,340,790,223"></a>
</div>
</div>
<div class="section">
<div class="net-inner inner">
<a class="netitemr net1" href="javascript:void(0)" rel="42,-850,42,0"></a>
<a class="netitemr net2" href="javascript:void(0)" rel="0,-240,703,504"></a>
<a class="netitemr net3" href="javascript:void(0)" rel="0,-240,703,406"></a>
<a class="netitemr net4" href="javascript:void(0)" rel="0,-240,703,345"></a>
<a class="netitemr net5" href="javascript:void(0)" rel="674,-500,674,63"></a>
<a class="netitemr footer_m" rel="674,-500,674,20">版权&copy;<?php echo $DT['sitename'];?></a>
<?php if($DT['icpno']) { ?><a class="netitemr footer_icp" href="http://www.miibeian.gov.cn" target="_blank" rel="674,-500,904,20"><?php echo $DT['icpno'];?></a><?php } ?>
</a>
</div>
</div>
<script type="text/javascript">
var tid = 0;
var qrc = [
'<?php echo DT_PATH;?>api/qrcode.png.php?auth=<?php echo urlencode($url);?>',
'<?php echo DT_PATH;?>api/weixin/qrcode.php',
'<?php echo $ios_app;?>',
'<?php echo $android_app;?>',
];
function Dqr(id) {
if(id == tid) return;
$('.type_tag_2 li').each(function(i){
   if($(this).attr('class') == 'qr_on') $(this).attr('class', 'qr_li');
});
$('#type_'+id).attr('class', 'qr_on');
$('#qrcode-img').fadeOut(50);
$('#qrcode-img').attr('src', qrc[id]);
$('#qrcode-img').fadeIn(200);
tid = id;
}
$(document).ready(function() {
if($('.type_tag_2 li').length== 1) $('.type_tag_2').html('');
$('.type_tag_2').show('slow');
});
</script>
</html>