<?php defined('IN_DESTOON') or exit('Access Denied');?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns=http://www.w3.org/1999/xhtml>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=<?php echo DT_CHARSET;?>"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
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
<link rel="stylesheet" type="text/css" href="<?php echo DT_SKIN;?>style.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo DT_SKIN;?>css/header.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo DT_SKIN;?>css/footer.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo DT_SKIN;?>css/css_index.css"/>
<?php if($moduleid>4) { ?>
<link rel="stylesheet" type="text/css" href="<?php echo DT_SKIN;?><?php echo $module;?>.css"/>
<?php } ?>
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
<?php if($lazy) { ?><script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/jquery.lazyload.js"></script><?php } ?>
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
</head>
<body class="news-news">
<div class="header"> <?php include template('top-mini');?><!--mini顶部--> 
</div>
<div class="nav_hd_top">
  <div class="nav_top"> <?php if($head_mobile) { ?>
    <div id="destoon_qrcode" style="display:none;"></div>
    <?php } ?>
    <div id="destoon_space"></div>
    <div class="hd_logo fl"><a href="<?php echo $MODULE['1']['linkurl'];?>"><img src="<?php if($MODULE[$moduleid]['logo']) { ?><?php echo DT_SKIN;?>image/logo_<?php echo $moduleid;?>.gif<?php } else if($DT['logo']) { ?><?php echo $DT['logo'];?><?php } else { ?><?php echo DT_SKIN;?>image/logo.gif<?php } ?>
" alt="<?php echo $DT['sitename'];?>"/></a></div>
    <div class="zhucename"><a href="<?php echo $MODULE['21']['linkurl'];?>"><?php echo $MOD['name'];?></a></div>
    <div class="fr dianhua">
      <div class="fl">
        <ul class="navs navbar-nav news-navbar-nav">
          <li><a href="<?php echo $MODULE['1']['linkurl'];?>">首页</a></li>
          <li class="dropdown" id="navdt"> <a href="javascript:;" class="dropdown-toggle">商机<span class="caret"></span></a>
            <ul class="dropdown-menu news-dropdown-menu news-dropdown-menu-nav">
              <?php if(isset($MODULE['16'])) { ?><li><a href="<?php echo $MODULE['16']['linkurl'];?>"><?php echo $MODULE['16']['name'];?></a></li><?php } ?>
              <?php if(isset($MODULE['5'])) { ?><li><a href="<?php echo $MODULE['5']['linkurl'];?>"><?php echo $MODULE['5']['name'];?></a></li><?php } ?>
              <?php if(isset($MODULE['6'])) { ?><li><a href="<?php echo $MODULE['6']['linkurl'];?>"><?php echo $MODULE['6']['name'];?></a></li><?php } ?>
              <li><a href="<?php echo $MODULE['4']['linkurl'];?>"><?php echo $MODULE['4']['name'];?></a></li>
              <?php if(isset($MODULE['13'])) { ?><li><a href="<?php echo $MODULE['13']['linkurl'];?>"><?php echo $MODULE['13']['name'];?></a></li><?php } ?>
              <?php if(isset($MODULE['22'])) { ?><li><a href="<?php echo $MODULE['22']['linkurl'];?>"><?php echo $MODULE['22']['name'];?></a></li><?php } ?>
              <?php if(isset($MODULE['8'])) { ?><li><a href="<?php echo $MODULE['8']['linkurl'];?>"><?php echo $MODULE['8']['name'];?></a></li><?php } ?>
            </ul>
          </li>
  <li class="dropdown active" id="navhy"> <a href="javascript:;" class="dropdown-toggle">资讯<span class="caret"></span></a>
            <ul class="dropdown-menu news-dropdown-menu news-dropdown-menu-nav">
            <li><a href="<?php echo $MODULE['21']['linkurl'];?>">全部资讯</a></li>
  <?php $xhbq=tag("table=category&condition=moduleid=21 and parentid=0&pagesize=20&order=listorder,catid&template=null");?>
      <?php if(is_array($xhbq)) { foreach($xhbq as $i => $v) { ?>
              <li><a href="<?php echo $MODULE['21']['linkurl'];?><?php echo $v['linkurl'];?>"><?php echo $v['catname'];?></a></li>
             <?php } } ?>
            </ul>
          </li>
        <?php if(isset($MODULE['18'])) { ?> <li><a href="<?php echo $MODULE['18']['linkurl'];?>"><?php echo $MODULE['18']['name'];?></a></li><?php } ?>
        <?php if(isset($MODULE['14'])) { ?><li><a href="<?php echo $MODULE['14']['linkurl'];?>"><?php echo $MODULE['14']['name'];?></a></li><?php } ?>
        </ul>
        <script type="text/javascript">
$(function(){
$('#navdt').mouseenter(function(e){
var _o = $(this);
_o.addClass('open');
$('body').on('mousemove.enterprise',function(e){
if(!_o.is(e.target) && _o.has(e.target).length === 0){
_o.removeClass('open');
$('body').off("mousemove.enterprise");
}
});
});
$('#navhy').mouseenter(function(e){
var _o = $(this);
_o.addClass('open');
$('body').on('mousemove.industry',function(e){
if(!_o.is(e.target) && _o.has(e.target).length === 0){
_o.removeClass('open');
$('body').off("mousemove.industry");
}
});
});
            $('#classidarea').mouseenter(function(e){
            var _o = $(this);
            _o.addClass('open');
            $('body').on('mousemove.industry',function(e){
              if(!_o.is(e.target) && _o.has(e.target).length === 0){
                _o.removeClass('open');
                $('body').off("mousemove.industry");
              }
            });
          });
$('.dropdown > a').click(function(e){
return false;
});
});
</script> 
      </div>
      <div class="fr margin-top-10">
      <div class="input-group news-input-group">
      <form id="destoon_search" action="<?php echo $MOD['linkurl'];?>search.php" onsubmit="return Dsearch(1);">
      <input type="hidden" name="moduleid" value="<?php echo $moduleid;?>" id="destoon_moduleid"/>
      <input type="hidden" name="spread" value="0" id="destoon_spread"/>
      <input type="text" name="kw" id="destoon_kw" class="form-control news-form-control" placeholder="请输入关键词" value="<?php if($kw) { ?><?php echo $kw;?><?php } else { ?>请输入关键词<?php } ?>
" onfocus="if(this.value=='请输入关键词') this.value='';"<?php if($DT['search_tips']) { ?> onkeyup="STip(this.value);" autocomplete="off"<?php } ?>
 x-webkit-speech speech/>
      <a href="javascript:;"><input type="submit" class="input-group-btn" value=""/></a>
      </form> 
        </div>
      </div>
    </div>
  </div>
  <div class="clear"></div>
</div>
