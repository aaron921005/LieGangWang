<?php defined('IN_DESTOON') or exit('Access Denied');?><div class="clear">&nbsp;</div>
<div class="footer">
    <div class="layout">
        <div class="f-btm">
            <div class="links">
               <a href="<?php echo $MODULE['1']['linkurl'];?>">网站首页</a>
    <?php echo tag("table=webpage&condition=item=1&areaid=$cityid&order=listorder desc,itemid desc&template=list-webpage");?>
    | <a href="<?php echo $MODULE['1']['linkurl'];?>sitemap/" target="_blank">网站地图</a>
    | <a href="<?php echo $EXT['spread_url'];?>" target="_blank">排名推广</a>
    <?php if($EXT['ad_enable']) { ?> | <a href="<?php echo $EXT['ad_url'];?>" target="_blank">广告服务</a><?php } ?>
    <?php if($EXT['gift_enable']) { ?> | <a href="<?php echo $EXT['gift_url'];?>index2.php" target="_blank">积分换礼</a><?php } ?>
    <?php if($EXT['guestbook_enable']) { ?> | <a href="<?php echo $EXT['guestbook_url'];?>" target="_blank">网站留言</a><?php } ?>
    <?php if($EXT['feed_enable']) { ?> | <a href="<?php echo $EXT['feed_url'];?>" target="_blank">RSS订阅</a><?php } ?>
            </div>
            <p class="copyright" id="copyright"><?php echo $DT['copyright'];?></p>
      <?php if($DT['icpno']) { ?><p class="copyright"><a href="http://www.miibeian.gov.cn" target="_blank" rel="nofollow"><?php echo $DT['icpno'];?></a></p><?php } ?>
            <?php if(DT_DEBUG) { ?><div class="px11"><?php echo debug();?></div><?php } ?>
        </div>
    </div>
</div>
<script type="text/javascript" src="<?php echo DT_SKIN;?>js/xh_common.js?_=20170829"></script>
<script type="text/javascript">
<!--
//浮动-1种
/*set top*/
$('.arx_list_info').fixedDiv('#hotproduct');
$('.detailsT').fixedDiv('#hotproduct');
$('.right_zixun').fixedDiv('#hotproduct');  
$('.info_list').fixedDiv('#hotproduct');
jQuery(".hotproduct").slide({ mainCell:"ul",vis:5,scroll:1,autoPlay:true,prevCell:".sPrev",nextCell:".sNext",effect:"leftLoop"});
/* open */
gd_tab_open(".gright .sp_sort .sbt1","div.aRrow","iCred","iCadd",".sToggle");
 -->
</script>
<!--在线咨询弹框 S-->
<?php if($moduleid==52) { ?>
<?php include template('zxzx');?>
<?php } else { ?>
<?php include template('zxzx-2');?>
<?php } ?>
<script type="text/javascript">
if(get_cookie('auth')) {
  $('.xh_dl')[0].className = 'xh_dl_no';
  $('.xh_dl_2_no')[0].className = 'xh_dl_2';
  $('.xh_dl_x')[0].className = 'xh_dl_no';
  $('.xh_dl_x_2_no')[0].className = 'xh_dl_2';
}
</script>
<?php if($lazy) { ?><script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/jquery.lazyload.js"></script><?php } ?>
<script type="text/javascript">
<?php if($destoon_task) { ?>
show_task('<?php echo $destoon_task;?>');
<?php } else { ?>
<?php include DT_ROOT.'/api/task.inc.php';?>
<?php } ?>
<?php if($lazy) { ?>$("img").lazyload({effect : "fadeIn"});<?php } ?>
</script>
</body>
</html>