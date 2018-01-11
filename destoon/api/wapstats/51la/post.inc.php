<?php
defined('IN_DESTOON') or exit('Access Denied');
$stats_51la = preg_match("/^[0-9]{5,11}$/", $stats) ? $stats : '';
?>
<tr id="stats_post_51la" style="display:none;">
<td class="tl">统计帐号</td>
<td class="tr">
<input type="text" name="stats[51la]" id="stats_51la" value="<?php echo $stats_51la;?>" size="10"/>&nbsp;&nbsp;
<?php if($stats_51la) { ?>
<a href="http://www.51.la/?<?php echo $stats_51la;?>" class="t" target="_blank">查看统计</a>
<?php } else { ?>
<a href="http://www.51.la/" class="t" target="_blank">帐号申请</a>
<?php } ?>
</td>
</tr>