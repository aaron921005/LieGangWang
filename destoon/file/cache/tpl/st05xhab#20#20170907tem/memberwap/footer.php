<?php defined('IN_DESTOON') or exit('Access Denied');?></td>
</tr>
</table>
</div>
<?php if($foot) { ?>
<div class="foot-bar-fix"></div>
<div class="foot-bar">
<ul>
<li class="icon-home<?php if($foot=='home') { ?>-on<?php } ?>
"><a href="index.php" data-transition="none" data-ajax="false"><span>首页</span></a></li>
<li class="icon-channel"><a href="channel.php" data-transition="none"><span>频道</span></a></li>
<li class="icon-my2-on"><a href="my.php?action=info" data-transition="none" data-ajax="false"><span>发布</span></a></li>
<li class="icon-cart<?php if($foot=='cart') { ?>-on<?php } ?>
"><a href="cart.php" data-transition="none" data-ajax="false"><span>购物车</span></a><?php if($_cart) { ?><i><?php if($_cart>99) { ?>99<?php } else { ?><?php echo $_cart;?><?php } ?>
</i><?php } ?>
</li>
<li class="icon-my<?php if($foot=='my') { ?>-on<?php } ?>
"><a href="my.php" data-transition="none"><span>我的</span></a><?php if($_message || $_chat || $_cart) { ?><em></em><?php } ?>
</li>
</ul>
</div>
<?php } ?>
</div>
<script type="text/javascript">
$('.tb tr').find('>th:last').css('border-right', '#dedede 1px solid');
if(get_cookie('m_side') == 11 && Dd('side_oh').className == 'side_h') {Dh('side');Dd('side_oh').className = 'side_s';}
var destoon_message = <?php echo $_message;?>;
var destoon_chat = <?php echo $_chat;?>;
<?php if($_message && $_sound) { ?>
if(window.location.href.indexOf('message.php') == -1) $('#destoon_space').html(sound('message_<?php echo $_sound;?>'));
<?php } ?>
<?php if($_chat) { ?>
if(window.location.href.indexOf('chat.php') == -1) $('#destoon_space').html(sound('chat_new'));
<?php } ?>
<?php if($_userid && $DT['pushtime']) { ?>
window.setInterval('PushNew()',<?php echo $DT['pushtime'];?>*1000);
<?php } ?>
<?php if($DT_MOB['browser'] == 'weixin' || $DT_MOB['browser'] == 'qq') { ?>
$(document).on('pageshow', function(event) {
$("[data-role='page']").each(function(i) {
if($(this).attr('class').indexOf('-active') != -1) {
$(this).find('.share_icon img').css('display', 'block');
} else {
$(this).find('.share_icon img').css('display', 'none');
}
});
});
<?php } ?>
</script>
</body>
</html>