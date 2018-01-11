<?php
defined('IN_DESTOON') or exit('Access Denied');
$stats_qq = preg_match("/^[0-9]{5,11}$/", $stats) ? $stats : '';
?>
<tr id="stats_post_qq" style="display:none;">
<td class="tl">统计帐号</td>
<td class="tr">
<input type="text" name="stats[qq]" id="stats_qq" value="<?php echo $stats_qq;?>" size="10"/>&nbsp;&nbsp;
<?php if($stats_qq) { ?>
<a href="http://ta.qq.com/" class="t" target="_blank">查看统计</a>
<?php } else { ?>
<a href="http://ta.qq.com/" class="t" target="_blank">帐号申请</a>
<?php } ?>
</td>
</tr>