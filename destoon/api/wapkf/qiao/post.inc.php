<?php
defined('IN_DESTOON') or exit('Access Denied');
$kf_qiao = preg_match("/^[0-9a-z]{32}$/", $kf) ? $kf : '';
?>
<tr id="kf_post_qiao" style="display:none;">
<td class="tl">在线客服</td>
<td class="tr">
<input type="text" name="kf[qiao]" id="kf_qiao" value="<?php echo $kf_qiao;?>" size="20"/>&nbsp;&nbsp;
<?php if($kf_qiao) { ?>
<a href="http://qiao.baidu.com/" class="t" target="_blank">帐号管理</a>
<?php } else { ?>
<a href="http://qiao.baidu.com/" class="t" target="_blank">帐号申请</a>
<?php } ?>
</td>
</tr>