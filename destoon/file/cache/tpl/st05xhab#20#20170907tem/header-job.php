<?php defined('IN_DESTOON') or exit('Access Denied');?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns=http://www.w3.org/1999/xhtml>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=<?php echo DT_CHARSET;?>"/>
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
<meta name="generator" content="Template - b2b.bjlsjp.cn"/>
<link rel="shortcut icon" type="image/x-icon" href="<?php echo DT_STATIC;?>favicon.ico"/>
<link rel="bookmark" type="image/x-icon" href="<?php echo DT_STATIC;?>favicon.ico"/>
<?php if($head_canonical) { ?>
<link rel="canonical" href="<?php echo $head_canonical;?>"/>
<?php } ?>
<?php if($EXT['archiver_enable']) { ?>
<link rel="archives" title="<?php echo $DT['sitename'];?>" href="<?php echo $EXT['archiver_url'];?>"/>
<?php } ?>
<link rel="stylesheet" type="text/css" href="<?php echo DT_SKIN;?>style.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo DT_SKIN;?>css/header.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo DT_SKIN;?>css/footer.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo DT_SKIN;?>css/css_index.css"/>
<?php if($moduleid>4) { ?><link rel="stylesheet" type="text/css" href="<?php echo DT_SKIN;?><?php echo $module;?>.css"/><?php } ?>
<?php if($CSS) { ?>
<?php if(is_array($CSS)) { foreach($CSS as $css) { ?>
<link rel="stylesheet" type="text/css" href="<?php echo DT_SKIN;?><?php echo $css;?>.css"/>
<?php } } ?>
<?php } ?>
<!--[if lte IE 6]>
<link rel="stylesheet" type="text/css" href="<?php echo DT_SKIN;?>ie6.css"/>
<![endif]-->
<?php if(!DT_DEBUG) { ?><script type="text/javascript">window.onerror=function(){return true;}</script><?php } ?>
<script type="text/javascript" src="<?php echo DT_STATIC;?>lang/<?php echo DT_LANG;?>/lang.js"></script>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/config.js"></script>
<script type="text/javascript" src="<?php echo DT_SKIN;?>js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/common.js"></script>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/page.js"></script>
<script type="text/javascript" src="<?php echo DT_SKIN;?>js/jquery.SuperSlide.2.1.1.js"></script>
<?php if($JS) { ?>
<?php if(is_array($JS)) { foreach($JS as $js) { ?>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/<?php echo $js;?>.js"></script>
<?php } } ?>
<?php } ?>
<?php $searchid = ($moduleid > 3 && $MODULE[$moduleid]['ismenu'] && !$MODULE[$moduleid]['islink']) ? $moduleid : 9;?>
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
</head>
<body>
<div class="header">
<?php include template('top-mini');?><!--mini顶部-->
</div>
<div class="nav_hd_top">
<div class="nav_top">
<?php if($head_mobile) { ?><div id="destoon_qrcode" style="display:none;"></div><?php } ?>
<div id="destoon_space"></div>
<div class="hd_logo fl"><a href="<?php echo $MODULE['1']['linkurl'];?>"><img src="<?php if($MODULE[$moduleid]['logo']) { ?><?php echo DT_SKIN;?>image/logo_<?php echo $moduleid;?>.gif<?php } else if($DT['logo']) { ?><?php echo $DT['logo'];?><?php } else { ?><?php echo DT_SKIN;?>image/logo.gif<?php } ?>
" alt="<?php echo $DT['sitename'];?>"/></a></div>
<?php if($DT['city']) { ?>
<div class="city_top_select">
<div class="oncity"><a href="javascript:;" id="destoon_city"><?php echo $city_name;?></a></div>
<div class="citylist">
<div class="cybt">
<span class="fl">已有以下省开通了 <?php echo $DT['sitename'];?> 分站</span>
<a class="fr" href="http://wpa.qq.com/msgrd?v=3&amp;uin=<?php echo $DT['qq1'];?>&amp;site=<?php echo $DT['qq1name'];?>&amp;menu=yes" target="_blank" rel="nofollow">申请开通分站</a>
</div>
<div class="clear"></div>
<ul>
<li><a href="javascript:gocity('');"<?php if($cityid == 0) { ?> class="cur"<?php } ?>
><?php echo $L['allcity'];?></a></li>
<?php $xhbq=tag("table=city&order=listorder&template=null");?>
<?php if(is_array($xhbq)) { foreach($xhbq as $k => $s) { ?>
<li><a href="<?php if($s['linkurl']) { ?><?php echo $s['linkurl'];?><?php } else { ?>javascript:gocity('areaid=<?php echo $s['areaid'];?>');<?php } ?>
"<?php if($cityid == $s['areaid']) { ?> class="cur"<?php } ?>
><?php echo set_style($s['name'], $s['style']);?></a></li>
<?php } } ?>
</ul>
</div>
</div>
<?php } else { ?>
<?php if($moduleid>4) { ?>
<div class="logo-ft-modname"><?php echo $MOD['name'];?></div>
<?php } else { ?>
<div class="logo-ft"><img src="<?php echo DT_SKIN;?>css/img/logo-ft.png" width="100" height="53" /></div>
<?php } ?>
<?php } ?>
<div class="main_uc fl mtb">
<div class="head_search"  onmouseout="Dh('search_module');">
<div id="search_module" class="search_module" style="display:none;" onmouseout="Dh('search_module');" onmouseover="Ds('search_module');">
<?php if(is_array($MODULE)) { foreach($MODULE as $m) { ?><?php if($m['ismenu'] && !$m['islink']) { ?><a href="javascript:void(0);" onclick="setModule('<?php echo $m['moduleid'];?>','<?php echo $m['name'];?>')"><?php echo $m['name'];?></a><?php } ?>
<?php } } ?>
</div>
<!--[if IE]>
<div id="search_tips" class="search_tips" style="display:none;"></div>
<![endif]-->
<div id="search_tips" class="search_tips" style="display:none;" onmouseout="this.style.display='none';" onmouseover="this.style.display='block';"></div>
<form id="destoon_search" action="<?php echo $MODULE[$searchid]['linkurl'];?>search.php"  onsubmit="return Dsearch(1);" class="search_form">
<input type="hidden" name="moduleid" value="<?php echo $searchid;?>" id="destoon_moduleid"/>
<input type="hidden" name="spread" value="0" id="destoon_spread"/>
<div class="hsit" id="hsit">
<input type="text" id="destoon_select" class="search_m" value="<?php echo $MODULE[$searchid]['name'];?>" readonly onfocus="this.blur();" onclick="$('#search_module').fadeIn('fast');"/>
<input name="kw" id="destoon_kw" type="text" class="search_i" value="<?php if($kw) { ?><?php echo $kw;?><?php } else { ?>请输入关键词<?php } ?>
" onfocus="if(this.value=='请输入关键词') this.value='';"<?php if($DT['search_tips']) { ?> onkeyup="STip(this.value);" autocomplete="off"<?php } ?>
 x-webkit-speech speech/>
<div class="hotkw" id="destoon_word">
<?php echo tag("moduleid=$searchid&table=keyword&condition=moduleid=$searchid and status=3&pagesize=2&order=total_search desc&template=list-search_kwnew");?>
</div>
</div>
<input type="submit" value="搜索" class="hsbn"/>
</form> 
<div class="clear"></div>
</div>
</div>
<div class="fr fabu">
<div class="head_bprice fl mtb">
<a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_my'];?>?mid=9&action=add" target="_blank" rel="nofollow">发布招聘</a>
</div>
<div class="head_bprice fl mtb">
<a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_my'];?>?mid=9&action=add&resume=1" target="_blank" rel="nofollow">发布求职</a>
</div>
</div>
 </div>
<div class="clear"></div>
</div>
<div class="btcolor"></div>
<div class="clear mt10"></div>