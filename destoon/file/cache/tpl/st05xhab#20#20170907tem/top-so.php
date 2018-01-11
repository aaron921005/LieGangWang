<?php defined('IN_DESTOON') or exit('Access Denied');?><div class="fdtb nav_hd_top">
<div class="nav_top2">
<div class="tlogo fl mta"><a href="<?php echo $MODULE['1']['linkurl'];?>" title="<?php echo $DT['sitename'];?>"><?php echo $DT['sitename'];?></a></div>
<div class="xt_bprice fr mra" style="margin-top:8px;">
<?php if($moduleid==16) { ?>
<a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_my'];?>?mid=16&action=add" target="_blank" rel="nofollow">免费发布商品信息</a>
<?php } else if($moduleid==6) { ?>
<a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_my'];?>?mid=6&action=add" target="_blank" rel="nofollow">免费发布求购信息</a>
<?php } else { ?>
<a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_my'];?>?mid=5&action=add" target="_blank" rel="nofollow">免费发布产品信息</a>
<?php } ?>
</div>
  <div class="fr mrc" style="margin-top:8px;">
<div class="xt_sch"  onmouseout="Dh('xtmde');">
<div id="xtmde" class="search_module" style="display:none;" onmouseout="Dh('xtmde');SetCn('xtst','search_m');" onmouseover="Ds('xtmde');SetCn('xtst','onsearch_m2');">
<?php if(is_array($MODULE)) { foreach($MODULE as $m) { ?><?php if($m['ismenu'] && !$m['islink']) { ?><a href="javascript:void(0);" onclick="setModule('<?php echo $m['moduleid'];?>','<?php echo $m['name'];?>','destoon_search','xtmde','xtgkw','destoon_moduleid','xtst');SetCn('xtst','search_m');"><?php echo $m['name'];?></a><?php } ?>
<?php } } ?>
</div>
<!--[if IE]>
<div id="sch_tips" class="search_tips" style="display:none;"></div>
<![endif]-->
<div id="sch_tips" class="search_tips" style="display:none;"  onmouseout="this.style.display='none';" onmouseover="this.style.display='block';"></div>
<?php $searchid = ($moduleid > 3 && $MODULE[$moduleid]['ismenu'] && !$MODULE[$moduleid]['islink']) ? $moduleid : 5;?>
<form id="destoon_search" action="<?php echo $MODULE[$searchid]['linkurl'];?>search.php" onsubmit="return Gsh(1);" autocomplete="off">
<input type="hidden" name="moduleid" value="<?php echo $searchid;?>" id="destoon_moduleid"/>
<input type="hidden" name="spread" value="0" id="destoon_spread"/>
<div class="hsit" id="xthsit">
<input type="text" id="xtst" class="search_m" value="<?php echo $MODULE[$searchid]['name'];?>" readonly onfocus="this.blur();" onmouseout="this.className='search_m';" onmouseover="this.className='onsearch_m';$('#xtmde').fadeIn('fast');"/>
<input type="text" id="xtgkw" name="kw" class="search_i" value="<?php if($kw) { ?><?php echo $kw;?><?php } else { ?>请输入关键词<?php } ?>
" onfocus="if(this.value=='请输入关键词') this.value='';"<?php if($DT['search_tips']) { ?> onkeyup="STip(this.value);" autocomplete="off"<?php } ?>
 x-webkit-speech speech />
<div class="hotkw" id="destoon_word">
<?php echo tag("moduleid=$searchid&table=keyword&condition=moduleid=$searchid and status=3&pagesize=2&order=total_search desc&template=list-search_kwnew");?>
</div>
</div>
<input type="submit" value="搜索" class="hsbn"/>
</form> 
</div>
</div>
</div>
<div class="clear"></div>
</div>