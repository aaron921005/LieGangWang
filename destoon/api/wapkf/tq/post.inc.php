<?php
defined('IN_DESTOON') or exit('Access Denied');
$kf_tq = preg_match("/^[0-9]{5,11}$/", $kf) ? $kf : '';
?>
<tr id="kf_post_tq" style="display:none;">
<td class="tl">在线客服</td>
<td class="tr">
<input type="text" name="kf[tq]" id="kf_tq" value="<?php echo $kf_tq;?>" size="10"/>&nbsp;&nbsp;
<?php if($kf_tq) { ?>
<a href="http://www.tq.cn/" class="t" target="_blank">帐号管理</a>
<?php } else { ?>
<a href="http://www.tq.cn/" class="t" target="_blank">帐号申请</a>
<?php } ?>
</td>
</tr>