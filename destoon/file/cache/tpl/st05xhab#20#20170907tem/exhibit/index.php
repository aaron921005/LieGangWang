<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header');?>
<script type="text/javascript" src="<?php echo DT_SKIN;?>js/optiontab.js"></script>
<div class="wrapper">
<!--滚动预告-->
<div class="foreshow">
<div class="attention"> <span class="attCloumn">展会预告：</span>
<div class="attBox">
<div class="attList" id="SocllDiv2" style="overflow: hidden; height: 32px;">
<table cellspacing="0" cellpadding="0" style="border-collapse:collapse;display:inline;">
<tbody>
<tr>
<td nowrap="true" style="white-space: nowrap;word-break:keep-all;">
<ul>
<?php echo tag("moduleid=$moduleid&condition=status=3&areaid=$cityid&pagesize=10&order=addtime desc&dir=xhtag&template=exhibit-marqueetext");?>
</ul>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
<!--p1图片推荐 S-->
<div class="tradeShow  clearfix">
<div class="promotion">
<div class="promotionBox rel" id="focus">
      <ul>
       <?php echo ad(150);?><!--850x390大幻灯id-->
      </ul>
      <i class="adicon"></i>
</div>
</div>
<!--左边3个广告-->
<div class="belt">
<li class="rel">
  <a href="/" title="2017中国（中部）国际农业机械展览会" rel="nofollow"><img src="<?php echo DT_SKIN;?>images/aa/exhibit/636371099798154875853.jpg " alt="2017中国（中部）国际农业机械展览会" title="2017中国（中部）国际农业机械展览会" height="117" width="331"></a>
  <i class="adicon"></i>
</li>
<li class="rel">
   <a href="/" title="广告招租" rel="nofollow"><img src="<?php echo DT_SKIN;?>images/aa/exhibit/636368290628368829729.jpg" alt="广告招租" title="广告招租" height="117" width="331"></a>
   <i class="adicon"></i>
</li>
<li class="no_bm rel">
   <a href="/" title="2017江苏现代农业装备暨农业机械展览会" rel="nofollow"><img src="<?php echo DT_SKIN;?>images/aa/exhibit/636362469345397450189.gif" alt="2017江苏现代农业装备暨农业机械展览会" title="2017江苏现代农业装备暨农业机械展览会" height="117" width="331"></a>
   <i class="adicon"></i>
</li>
   </div>
</div>
<!--P2分类直达 S-->
<div class="machine">
<ul>
<?php $mid = $moduleid;?>
   <?php $child = get_maincat(0, $mid, 1);?>
   <?php if(is_array($child)) { foreach($child as $i => $c) { ?>
  <li class="exhcat<?php if($i%8==7) { ?> no_mr<?php } ?>
 "><a href="<?php echo $MOD['linkurl'];?><?php echo $c['linkurl'];?>" title="<?php echo $c['catname'];?>"><?php echo $c['catname'];?></a></li>
   <?php } } ?>
</ul>
</div>
<!--P3最新展会 S-->
<div class="recently">
<h2><span class="newsLefttTop"><a class="active" onclick="return false;" href="javascript:void(0);">最近发布</a>|<a onclick="return false;" href="javascript:void(0);">推荐会展</a></span><b></b></h2>
<div id="topicBot0" style="display:block" class="topicBot">
<table border="0" cellspacing="0" cellpadding="0" class="exList">
<colgroup>
<col style="width:25%">
<col style="width:25%">
<col style="width:30%">
<col style="width:20%">
</colgroup>
<tbody>
<?php echo tag("moduleid=$moduleid&condition=status=3&areaid=$cityid&pagesize=12&order=addtime desc&dir=xhtag&template=exhibit-text");?>
</tbody>
</table>
</div>
<div id="topicBot1" style="display:none" class="topicBot">
<table border="0" cellspacing="0" cellpadding="0" class="exList">
<colgroup>
<col style="width:25%">
<col style="width:25%">
<col style="width:30%">
<col style="width:20%">
</colgroup>
<tbody>
<?php echo tag("moduleid=$moduleid&condition=status=3 and level=1&areaid=$cityid&pagesize=12&order=addtime desc&dir=xhtag&template=exhibit-text");?>
</tbody>
</table>
</div>
<script>
  tab3(".newsLefttTop a", ".topicBot");
</script>
<p><a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_my'];?>?mid=8&action=add" target="_blank"><img src="<?php echo DT_SKIN;?>images/exhibit/more.jpg" alt="我要发布展会" title="我要发布展会"></a></p>
</div>
<!--p4 图片广告展 S-->
<div class="bannerAdv">       
<ul>
           <li class="rel"><a href="javascript:;" title="广告招租" rel="nofollow"><img src="<?php echo DT_SKIN;?>images/aa/exhibit/exh-aa.png" alt="广告招租" title="广告招租" height="60" width="234"></a><i class="adicon"></i></li>
           <li class="rel"><a href="javascript:;" title="广告招租" rel="nofollow"><img src="<?php echo DT_SKIN;?>images/aa/exhibit/exh-aa-2.png" alt="广告招租" title="广告招租" height="60" width="234"></a><i class="adicon"></i></li>
           <li class="rel"><a href="javascript:;" title="广告招租" rel="nofollow"><img src="<?php echo DT_SKIN;?>images/aa/exhibit/exh-aa.png" alt="广告招租" title="广告招租" height="60" width="234"></a><i class="adicon"></i></li>
           <li class="rel"><a href="javascript:;" title="广告招租" rel="nofollow"><img src="<?php echo DT_SKIN;?>images/aa/exhibit/exh-aa-2.png" alt="广告招租" title="广告招租" height="60" width="234"></a><i class="adicon"></i></li>
           <li class="rel"><a href="javascript:;" title="广告招租" rel="nofollow"><img src="<?php echo DT_SKIN;?>images/aa/exhibit/exh-aa.png" alt="广告招租" title="广告招租" height="60" width="234"></a><i class="adicon"></i></li>
        </ul>
              <ul>
            <li class="rel"><a href="javascript:;" title="广告招租" rel="nofollow"><img src="<?php echo DT_SKIN;?>images/aa/exhibit/exh-aa-2.png" alt="广告招租" title="广告招租" height="60" width="234"></a><i class="adicon"></i></li>
            <li class="rel"><a href="javascript:;" title="广告招租" rel="nofollow"><img src="<?php echo DT_SKIN;?>images/aa/exhibit/exh-aa-3.png" alt="广告招租" title="广告招租" height="60" width="234"></a><i class="adicon"></i></li>
            <li class="rel"><a href="javascript:;" title="广告招租" rel="nofollow"><img src="<?php echo DT_SKIN;?>images/aa/exhibit/exh-aa.png" alt="广告招租" title="广告招租" height="60" width="234"></a><i class="adicon"></i></li>
            <li class="rel"><a href="javascript:;" title="广告招租" rel="nofollow"><img src="<?php echo DT_SKIN;?>images/aa/exhibit/exh-aa-3.png" alt="广告招租" title="广告招租" height="60" width="234"></a><i class="adicon"></i></li>
            <li class="rel"><a href="javascript:;" title="广告招租" rel="nofollow"><img src="<?php echo DT_SKIN;?>images/aa/exhibit/exh-aa.png" alt="广告招租" title="广告招租" height="60" width="234"></a><i class="adicon"></i></li>
        </ul>
  <br class="clear">
</ul>
</div>
<!--P5月份展会 S-->
<div class="recently date">
<div class="datename">
<h2>按月查找</h2><span class="dateexh">
<?php for($i=1;$i<13;$i++){ $j = $i<10 ? '0'.$i : $i;?>
    <a<?php if($j==date('m')) { ?> class="active"<?php } ?>
 href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?month='.$i);?>" rel="nofollow"><?php echo $j;?>月</a<?php if(date('m')!='12') { ?>>|<?php } ?>
    <?php } ?>
</span>
</div>
<div id="topicBot0"<?php if(date('m')!='01') { ?> style="display:none"<?php } else { ?> style="display:block"<?php } ?>
 class="topicBot">
<table border="0" cellspacing="0" cellpadding="0" class="exList">
<colgroup>
<col style="width:25%">
<col style="width:25%">
<col style="width:30%">
<col style="width:20%">
</colgroup>
<tbody>
<?php echo tag("moduleid=$moduleid&condition=status=3 and from_UNIXTIME(fromtime,'%Y%m') = '".timetodate($DT_TIME, 'Y')."01' &areaid=$cityid&pagesize=12&order=fromtime asc&dir=xhtag&template=exhibit-text");?>
</tbody>
</table>
</div>
<div id="topicBot1"<?php if(date('m')!='02') { ?> style="display:none"<?php } else { ?> style="display:block"<?php } ?>
 class="topicBot">
<table border="0" cellspacing="0" cellpadding="0" class="exList">
<colgroup>
<col style="width:25%">
<col style="width:25%">
<col style="width:30%">
<col style="width:20%">
</colgroup>
<tbody>
<?php echo tag("moduleid=$moduleid&condition=status=3 and from_UNIXTIME(fromtime,'%Y%m') = '".timetodate($DT_TIME, 'Y')."02' &areaid=$cityid&pagesize=12&order=fromtime asc&dir=xhtag&template=exhibit-text");?>
</tbody>
</table>
</div>
<div id="topicBot2"<?php if(date('m')!='03') { ?> style="display:none"<?php } else { ?> style="display:block"<?php } ?>
 class="topicBot">
<table border="0" cellspacing="0" cellpadding="0" class="exList">
<colgroup>
<col style="width:25%">
<col style="width:25%">
<col style="width:30%">
<col style="width:20%">
</colgroup>
<tbody>
<?php echo tag("moduleid=$moduleid&condition=status=3 and from_UNIXTIME(fromtime,'%Y%m') = '".timetodate($DT_TIME, 'Y')."03' &areaid=$cityid&pagesize=12&order=fromtime asc&dir=xhtag&template=exhibit-text");?>
</tbody>
</table>
</div>
<div id="topicBot3"<?php if(date('m')!='04') { ?> style="display:none"<?php } else { ?> style="display:block"<?php } ?>
 class="topicBot">
<table border="0" cellspacing="0" cellpadding="0" class="exList">
<colgroup>
<col style="width:25%">
<col style="width:25%">
<col style="width:30%">
<col style="width:20%">
</colgroup>
<tbody>
<?php echo tag("moduleid=$moduleid&condition=status=3 and from_UNIXTIME(fromtime,'%Y%m') = '".timetodate($DT_TIME, 'Y')."04' &areaid=$cityid&pagesize=12&order=fromtime asc&dir=xhtag&template=exhibit-text");?>
</tbody>
</table>
</div>
<div id="topicBot4"<?php if(date('m')!='05') { ?> style="display:none"<?php } else { ?> style="display:block"<?php } ?>
 class="topicBot">
<table border="0" cellspacing="0" cellpadding="0" class="exList">
<colgroup>
<col style="width:25%">
<col style="width:25%">
<col style="width:30%">
<col style="width:20%">
</colgroup>
<tbody>
<?php echo tag("moduleid=$moduleid&condition=status=3 and from_UNIXTIME(fromtime,'%Y%m') = '".timetodate($DT_TIME, 'Y')."05' &areaid=$cityid&pagesize=12&order=fromtime asc&dir=xhtag&template=exhibit-text");?>
</tbody>
</table>
</div>
<div id="topicBot5"<?php if(date('m')!='06') { ?> style="display:none"<?php } else { ?> style="display:block"<?php } ?>
 class="topicBot">
<table border="0" cellspacing="0" cellpadding="0" class="exList">
<colgroup>
<col style="width:25%">
<col style="width:25%">
<col style="width:30%">
<col style="width:20%">
</colgroup>
<tbody>
<?php echo tag("moduleid=$moduleid&condition=status=3 and from_UNIXTIME(fromtime,'%Y%m') = '".timetodate($DT_TIME, 'Y')."06' &areaid=$cityid&pagesize=12&order=fromtime asc&dir=xhtag&template=exhibit-text");?>
</tbody>
</table>
</div>
<div id="topicBot6"<?php if(date('m')!='07') { ?> style="display:none"<?php } else { ?> style="display:block"<?php } ?>
 class="topicBot">
<table border="0" cellspacing="0" cellpadding="0" class="exList">
<colgroup>
<col style="width:25%">
<col style="width:25%">
<col style="width:30%">
<col style="width:20%">
</colgroup>
<tbody>
<?php echo tag("moduleid=$moduleid&condition=status=3 and from_UNIXTIME(fromtime,'%Y%m') = '".timetodate($DT_TIME, 'Y')."07' &areaid=$cityid&pagesize=12&order=fromtime asc&dir=xhtag&template=exhibit-text");?>
</tbody>
</table>
</div>
<div id="topicBot7"<?php if(date('m')!='08') { ?> style="display:none"<?php } else { ?> style="display:block"<?php } ?>
 class="topicBot">
<table border="0" cellspacing="0" cellpadding="0" class="exList">
<colgroup>
<col style="width:25%">
<col style="width:25%">
<col style="width:30%">
<col style="width:20%">
</colgroup>
<tbody>
<?php echo tag("moduleid=$moduleid&condition=status=3 and from_UNIXTIME(fromtime,'%Y%m') = '".timetodate($DT_TIME, 'Y')."08' &areaid=$cityid&pagesize=12&order=fromtime asc&dir=xhtag&template=exhibit-text");?>
</tbody>
</table>
</div>
<div id="topicBot8"<?php if(date('m')!='09') { ?> style="display:none"<?php } else { ?> style="display:block"<?php } ?>
 class="topicBot">
<table border="0" cellspacing="0" cellpadding="0" class="exList">
<colgroup>
<col style="width:25%">
<col style="width:25%">
<col style="width:30%">
<col style="width:20%">
</colgroup>
<tbody>
<?php echo tag("moduleid=$moduleid&condition=status=3 and from_UNIXTIME(fromtime,'%Y%m') = '".timetodate($DT_TIME, 'Y')."09' &areaid=$cityid&pagesize=12&order=fromtime asc&dir=xhtag&template=exhibit-text");?>
</tbody>
</table>
</div>
<div id="topicBot9"<?php if(date('m')!='10') { ?> style="display:none"<?php } else { ?> style="display:block"<?php } ?>
 class="topicBot">
<table border="0" cellspacing="0" cellpadding="0" class="exList">
<colgroup>
<col style="width:25%">
<col style="width:25%">
<col style="width:30%">
<col style="width:20%">
</colgroup>
<tbody>
<?php echo tag("moduleid=$moduleid&condition=status=3 and from_UNIXTIME(fromtime,'%Y%m') = '".timetodate($DT_TIME, 'Y')."10' &areaid=$cityid&pagesize=12&order=fromtime asc&dir=xhtag&template=exhibit-text");?>
</tbody>
</table>
</div>
<div id="topicBot10"<?php if(date('m')!='11') { ?> style="display:none"<?php } else { ?> style="display:block"<?php } ?>
 class="topicBot">
<table border="0" cellspacing="0" cellpadding="0" class="exList">
<colgroup>
<col style="width:25%">
<col style="width:25%">
<col style="width:30%">
<col style="width:20%">
</colgroup>
<tbody>
<?php echo tag("moduleid=$moduleid&condition=status=3 and from_UNIXTIME(fromtime,'%Y%m') = '".timetodate($DT_TIME, 'Y')."11' &areaid=$cityid&pagesize=12&order=fromtime asc&dir=xhtag&template=exhibit-text");?>
</tbody>
</table>
</div>
<div id="topicBot11"<?php if(date('m')!='12') { ?> style="display:none"<?php } else { ?> style="display:block"<?php } ?>
 class="topicBot">
<table border="0" cellspacing="0" cellpadding="0" class="exList">
<colgroup>
<col style="width:25%">
<col style="width:25%">
<col style="width:30%">
<col style="width:20%">
</colgroup>
<tbody>
<?php echo tag("moduleid=$moduleid&condition=status=3 and from_UNIXTIME(fromtime,'%Y%m') = '".timetodate($DT_TIME, 'Y')."12' &areaid=$cityid&pagesize=12&order=fromtime asc&dir=xhtag&template=exhibit-text");?>
</tbody>
</table>
</div>
<script>
  tab3(".dateexh a", ".topicBot");
</script>
</div>
<!--p6 S展会资讯-->
<div class="exhibition clearfix">
<div class="report">
<h2>展馆介绍 <span>Exhibition Report</span><a href="<?php echo cat_url($MOD['cat_hall']);?>">更多</a></h2>
<?php echo tag("moduleid=$news_id&condition=status=3 and level=3 and thumb!=''&areaid=$cityid&catid=".$MOD['cat_hall']."&pagesize=1&length=20&order=addtime desc&dir=xhtag&template=exhibit-newsimg");?>
<?php echo tag("moduleid=$news_id&condition=status=3&areaid=$cityid&catid=".$MOD['cat_hall']."&pagesize=9&datetype=2&order=addtime desc&dir=xhtag&template=exhibit-newstext");?>
</div>
<div class="report review">
<h2>展会服务 <span>Exhibition Review</span><a href="<?php echo cat_url($MOD['cat_service']);?>">更多</a></h2>
<?php echo tag("moduleid=$news_id&condition=status=3 and level=3 and thumb!=''&areaid=$cityid&catid=".$MOD['cat_service']."&pagesize=1&length=20&order=addtime desc&dir=xhtag&template=exhibit-newsimg");?>
<?php echo tag("moduleid=$news_id&condition=status=3&areaid=$cityid&catid=".$MOD['cat_service']."&pagesize=9&datetype=2&order=addtime desc&dir=xhtag&template=exhibit-newstext");?>
</div>
<div class="report exhnews">
<h2>展商新闻 <span>Exhibition News</span><a href="<?php if($MOD['cat_news']) { ?><?php echo cat_url($MOD['cat_news']);?><?php } else { ?><?php echo $MODULE[$news_id]['linkurl'];?><?php } ?>
">更多</a></h2>
<?php echo tag("moduleid=$news_id&condition=status=3 and level=3 and thumb!=''&areaid=$cityid&catid=".$MOD['cat_news']."&pagesize=1&length=20&order=addtime desc&dir=xhtag&template=exhibit-newsimg");?>
<?php echo tag("moduleid=$news_id&condition=status=3&areaid=$cityid&catid=".$MOD['cat_news']."&pagesize=9&datetype=2&order=addtime desc&dir=xhtag&template=exhibit-newstext");?>
</div>
</div>
<!--p7 S 展会广告-->
<div class="bannerAdv">       
<ul>
           <li class="rel"><a href="javascript:;" title="广告招租" rel="nofollow"><img src="<?php echo DT_SKIN;?>images/aa/exhibit/exh-aa.png" alt="广告招租" title="广告招租" height="60" width="234"></a><i class="adicon"></i></li>
           <li class="rel"><a href="javascript:;" title="广告招租" rel="nofollow"><img src="<?php echo DT_SKIN;?>images/aa/exhibit/exh-aa-2.png" alt="广告招租" title="广告招租" height="60" width="234"></a><i class="adicon"></i></li>
           <li class="rel"><a href="javascript:;" title="广告招租" rel="nofollow"><img src="<?php echo DT_SKIN;?>images/aa/exhibit/exh-aa.png" alt="广告招租" title="广告招租" height="60" width="234"></a><i class="adicon"></i></li>
           <li class="rel"><a href="javascript:;" title="广告招租" rel="nofollow"><img src="<?php echo DT_SKIN;?>images/aa/exhibit/exh-aa-2.png" alt="广告招租" title="广告招租" height="60" width="234"></a><i class="adicon"></i></li>
           <li class="rel"><a href="javascript:;" title="广告招租" rel="nofollow"><img src="<?php echo DT_SKIN;?>images/aa/exhibit/exh-aa.png" alt="广告招租" title="广告招租" height="60" width="234"></a><i class="adicon"></i></li>
        </ul>
              <ul>
            <li class="rel"><a href="javascript:;" title="广告招租" rel="nofollow"><img src="<?php echo DT_SKIN;?>images/aa/exhibit/exh-aa-2.png" alt="广告招租" title="广告招租" height="60" width="234"></a><i class="adicon"></i></li>
            <li class="rel"><a href="javascript:;" title="广告招租" rel="nofollow"><img src="<?php echo DT_SKIN;?>images/aa/exhibit/exh-aa-3.png" alt="广告招租" title="广告招租" height="60" width="234"></a><i class="adicon"></i></li>
            <li class="rel"><a href="javascript:;" title="广告招租" rel="nofollow"><img src="<?php echo DT_SKIN;?>images/aa/exhibit/exh-aa.png" alt="广告招租" title="广告招租" height="60" width="234"></a><i class="adicon"></i></li>
            <li class="rel"><a href="javascript:;" title="广告招租" rel="nofollow"><img src="<?php echo DT_SKIN;?>images/aa/exhibit/exh-aa-3.png" alt="广告招租" title="广告招租" height="60" width="234"></a><i class="adicon"></i></li>
            <li class="rel"><a href="javascript:;" title="广告招租" rel="nofollow"><img src="<?php echo DT_SKIN;?>images/aa/exhibit/exh-aa.png" alt="广告招租" title="广告招租" height="60" width="234"></a><i class="adicon"></i></li>
        </ul>
  <br class="clear">
</ul>
</div>
<!--p8 s推荐展会-->
<div class="recommendExhibition">
<h2 class="clearfix"><span>推荐展会</span><b>品质展会 一手掌握 <a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_my'];?>?mid=8&action=add" target="_blank">发布展会信息 &gt;&gt;</a></b></h2>
<div class="RecommendBox clearfix">
<?php echo tag("moduleid=$moduleid&condition=status=3 and level=3 and thumb<>''&areaid=$cityid&pagesize=8&order=addtime desc&lazy=$lazy&dir=xhtag&template=exhibit-imgtj");?>
</div>
</div>
<!--p9 S展馆-->
<div class="atlas">
<h2>会展<span>图集</span> <a href="<?php if($MOD['cat_news']) { ?><?php echo cat_url($MOD['cat_news']);?><?php } else { ?><?php echo $MODULE[$news_id]['linkurl'];?><?php } ?>
">更多</a></h2>
<div class="atlasBox">
<div class="atlasPic">
<ul class="clearfix">
          <?php echo tag("moduleid=$news_id&condition=status=3 and level=3 and thumb!=''&areaid=$cityid&catid=".$MOD['cat_news']."&pagesize=5&length=30&order=addtime desc&lazy=$lazy&dir=xhtag&template=exhibit-newsphoto");?>
          </ul>
</div>
</div>
</div>
<!--p10 S展会合作-->
<div class="exhhz">
<ul>
<li>展会合作联系QQ：<a href="//wpa.qq.com/msgrd?v=3&amp;uin=<?php echo $DT['qq1'];?>&#10;&amp;site=qq&amp;menu=yes" rel="nofollow" target="_blank"><?php echo $DT['qq1'];?></a></li>
<li>合作电话：<?php echo $DT['telephone'];?></li>
<li class="no_mr">投诉电话：<?php echo $DT['telephone_tou'];?></li>
</ul>
</div>
<!--JS-->
<script type="text/javascript" src="<?php echo DT_SKIN;?>js/foreshow.js"></script>
<script type="text/javascript">
var marquee1 = new Marquee("SocllDiv2") 
marquee1.Direction ="left";
marquee1.Step = 1;
// marquee1.Width = ;
marquee1.Height = 32;
marquee1.Timer = 20;
marquee1.DelayTime = 0;
marquee1.WaitTime = 2000;
marquee1.ScrollStep =32;
marquee1.Start();
</script>
</div>
<?php include template('footer');?>