<?php
defined('IN_DESTOON') or exit('Access Denied');
$kf_qq = preg_match("/^[0-9a-z]{32,}$/i", $kf) ? $kf : '';
?>
<tr id="kf_post_qq" style="display:none;">
<td class="tl">在线客服</td>
<td class="tr">
<input type="text" name="kf[qq]" id="kf_qq" value="<?php echo $kf_qq;?>" size="20"/>&nbsp;&nbsp;
<?php if($kf_qq) { ?>
<a href="http://b.qq.com/" class="t" target="_blank">帐号管理</a>
<?php } else { ?>
<a href="http://b.qq.com/" class="t" target="_blank">帐号申请</a>
<?php } ?>
</td>
</tr>