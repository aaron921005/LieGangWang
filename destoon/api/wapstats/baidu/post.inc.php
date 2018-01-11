<?php
defined('IN_DESTOON') or exit('Access Denied');
$stats_baidu = preg_match("/^[a-z0-9]{32}$/", $stats) ? $stats : '';
?>
<tr id="stats_post_baidu" style="display:none;">
<td class="tl">统计帐号</td>
<td class="tr">
<input type="text" name="stats[baidu]" id="stats_baidu" value="<?php echo $stats_baidu;?>" size="20"/>&nbsp;&nbsp;
<?php if($stats_baidu) { ?>
<a href="http://tongji.baidu.com/" class="t" target="_blank">查看统计</a>
<?php } else { ?>
<a href="http://tongji.baidu.com/" class="t" target="_blank">帐号申请</a>
<?php } ?>
</td>
</tr>