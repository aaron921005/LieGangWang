<?php defined('IN_DESTOON') or exit('Access Denied');?></td>
</tr>
</table>
</div>
<?php if($DT_TOUCH) { ?>
<?php } else { ?>
<div class="clear">&nbsp;</div>
<div class="footer">
    <div class="layout">
        <div class="f-btm">
            <div class="links">
               <a href="<?php echo $MODULE['1']['linkurl'];?>">网站首页</a>
    <?php echo tag("table=webpage&condition=item=1&areaid=$cityid&order=listorder desc,itemid desc&template=list-webpage");?>
    | <a href="<?php echo $MODULE['1']['linkurl'];?>sitemap/" target="_blank">网站地图</a>
    | <a href="<?php echo $EXT['spread_url'];?>" target="_blank">排名推广</a>
    <?php if($EXT['ad_enable']) { ?> | <a href="<?php echo $EXT['ad_url'];?>" target="_blank">广告服务</a><?php } ?>
    <?php if($EXT['gift_enable']) { ?> | <a href="<?php echo $EXT['gift_url'];?>" target="_blank">积分换礼</a><?php } ?>
    <?php if($EXT['guestbook_enable']) { ?> | <a href="<?php echo $EXT['guestbook_url'];?>" target="_blank">网站留言</a><?php } ?>
    <?php if($EXT['feed_enable']) { ?> | <a href="<?php echo $EXT['feed_url'];?>" target="_blank">RSS订阅</a><?php } ?>
            </div>
            <p class="copyright" id="copyright"><?php echo $DT['copyright'];?></p>
      <?php if($DT['icpno']) { ?><p class="copyright"><a href="http://www.miibeian.gov.cn" target="_blank" rel="nofollow"><?php echo $DT['icpno'];?></a></p><?php } ?>
            <?php if(DT_DEBUG) { ?><div class="px11"><?php echo debug();?></div><?php } ?>
        </div>
    </div>
</div>
<?php include template('zxzx-2');?>
<!--div class="back2top"><a href="javascript:void(0);" title="返回顶部">&nbsp;</a></div-->
<script type="text/javascript">
if(document.body.clientHeight > Dd('main').scrollHeight) Dd('main').style.height=document.body.clientHeight+'px';
if(get_local('m_side') == 'Y' && Dd('side_oh').className == 'side_h') {Dh('side');Dd('side_oh').className = 'side_s';}
var destoon_message = <?php echo $_message;?>;
var destoon_chat = <?php echo $_chat;?>;
<?php if($_message && $_sound) { ?>
if(window.location.href.indexOf('message.php') == -1) $('#destoon_space').html(sound('message_<?php echo $_sound;?>'));
<?php } ?>
<?php if($_chat) { ?>
if(window.location.href.indexOf('chat.php') == -1) $('#destoon_space').html(sound('chat_new'));
<?php } ?>
<?php if($_message) { ?>
Dnotification('new_message', '<?php echo $MODULE['2']['linkurl'];?>message.php', '<?php echo useravatar($_username, 'large');?>', '站内信 (<?php echo $_message;?>)', '收到新的站内信件，点击查看');
<?php } ?>
<?php if($_chat) { ?>
Dnotification('new_chat', '<?php echo $MODULE['2']['linkurl'];?>chat.php', '<?php echo useravatar($_username, 'large');?>', '新对话 (<?php echo $_chat;?>)', '收到新的对话请求，点击交谈');
<?php } ?>
<?php if($_userid && $DT['pushtime']) { ?>
window.setInterval('PushNew()',<?php echo $DT['pushtime'];?>*1000);
<?php } ?>
if($('#mini_profile').length > 0) {
$('#my_profile').mouseover(function(){
$('#mini_profile').show('fast');
$('#my_profile').bind('mouseleave',function(){ 
$('#mini_profile').hide(); 
});
}); 
}
</script>
<?php } ?>
</body>
</html>