<?php defined('IN_DESTOON') or exit('Access Denied');?><?php if(is_array($tags)) { foreach($tags as $i => $t) { ?>
<tr>
<td class="title"><a href="<?php echo $t['linkurl'];?>" target="_blank"><?php echo $t['title'];?></a></td>
<td class="date"><?php echo timetodate($t['fromtime'], 3);?>~<?php echo timetodate($t['totime'], 3);?></td>
<td class="address"><?php echo $t['city'];?></td>
<td class="time">
<?php $lasted_day =(strtotime(timetodate($t['fromtime'], 3))-strtotime(date('Y-m-d')))/3600/24;?>
<?php if($lasted_day < 0) { ?>
<?php if($t['totime'] > $DT_TIME) { ?>
 <span class="f_green">正在进行中</span>
   <?php } else { ?>
<span class="f_red">已结束</span>
  <?php } ?>
<?php } else { ?>
<?php if($lasted_day == 0) { ?>
<span class="f_green">正在进行中</span>
<?php } else { ?>
 距离开幕<span><?php echo $lasted_day;?></span>天
 <?php } ?>
  <?php } ?>
</td>
</tr>
<?php } } ?>