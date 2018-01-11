<?php defined('IN_DESTOON') or exit('Access Denied');?><?php if(is_array($tags)) { foreach($tags as $k => $t) { ?>
 <li class="<?php if($k==6) { ?>no_bm <?php } ?>
clearfix" id="item_<?php echo $t['itemid'];?>">
 <?php $lasted_day =(strtotime(timetodate($t['totime'], 3))-strtotime(date('Y-m-d')))/3600/24;?>
 <a href="<?php echo $t['linkurl'];?>" target="_blank" title="<?php echo $t['alt'];?>">
 <span class="buy_chakan"><strong>查看详情</strong></span>
<span class="day"><?php if($t['totime']) { ?><?php if($t['totime'] < $DT_TIME) { ?><em>已过期</em><?php } else { ?>还剩<em><?php echo $lasted_day;?></em>天<?php } ?>
<?php } else { ?>长期有效<?php } ?>
</span>
<span class="time"><?php echo timetodate($t['edittime'], $datetype);?></span>
<span class="address"><?php echo area_pos($t['areaid'], '/', 2);?> </span>
<span class="name"><?php echo $t['title'];?></span>
</a>
</li>
<?php } } ?>