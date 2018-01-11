<?php defined('IN_DESTOON') or exit('Access Denied');?><div class="list_group">
<?php if(is_array($tags)) { foreach($tags as $i => $t) { ?>
<?php $t['price'] = str_replace('.00', '', $t['price']);?>
<?php $t['marketprice'] = str_replace('.00', '', $t['marketprice']);?>
<div class="list_group_box<?php if($i%$cols==0) { ?> list_group_box_r<?php } ?>
">
<div><a href="<?php echo $t['linkurl'];?>" target="_blank" id="link_<?php echo $t['itemid'];?>"><img src="<?php echo $t['thumb'];?>" width="332" height="280" alt="<?php echo $t['alt'];?>" class="list_group_img"/></a></div>
<div class="list_group_price"><span class="f_r"><strong class="list_group_s3"><?php echo $t['orders'];?></strong>人购买</span>原价：<span class="list_group_s1"><?php echo $t['marketprice'];?></span>&nbsp;&nbsp;<span class="list_group_s2"><strong><?php echo $t['discount'];?></strong>折</span> </div>
<div class="list_group_join" onclick="Go(Dd('link_<?php echo $t['itemid'];?>').href);"><?php echo $DT['money_sign'];?><strong><?php echo $t['price'];?></strong></div>
<div class="list_group_title"><a href="<?php echo $t['linkurl'];?>" target="_blank">仅售<?php echo $t['price'];?><?php echo $DT['money_unit'];?>！原价<?php echo $t['marketprice'];?><?php echo $DT['money_unit'];?>的<?php echo $t['title'];?></a></div>
</div>
<?php } } ?>
</div>
<?php if($showpage && $pages) { ?><div class="pages c_b"><?php echo $pages;?></div><?php } ?>
