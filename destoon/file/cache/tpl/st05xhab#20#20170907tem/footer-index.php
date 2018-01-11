<?php defined('IN_DESTOON') or exit('Access Denied');?><div class="footer_list"> 
<div class="layouts"> 
<div class="f-top clf">
<div class="f-top-l">
<img src="<?php echo DT_SKIN;?>images/service.png">
<p class="f24 gray9 arial bold mt10"><?php echo $DT['telephone'];?></p>
<p class="f12 gray9">[周一至周五 9:00-18:00]</p>
<p class="f12 gray9">客服邮箱: <a href="mailto:<?php echo $DT['emaill'];?>" target="_blank" class="gray9"><?php echo $DT['emaill'];?></a></p>
</div>
<div class="f-top-c">
<div class="f-nav"> 
<h5 class="tit">我是采购商</h5> 
    <ul class="f-lst"> 
    <li class="f-itm"><a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_my'];?>?mid=6&action=add" target="_blank" rel="nofollow">发布采购</a></li>
        <li class="f-itm"><a rel="nofollow" target="_blank" href="<?php echo $MODULE['5']['linkurl'];?>">找货源</a></li> 
        <li class="f-itm"><a rel="nofollow" href="<?php echo $MODULE['52']['linkurl'];?><?php echo rewrite('show.php?itemid=118');?>" target="_blank">如何查找？</a></li> 
        <li class="f-itm"><a rel="nofollow" href="<?php echo $MODULE['52']['linkurl'];?><?php echo rewrite('show.php?itemid=115');?>" target="_blank">如何发布采购？</a></li> 
        <li class="f-itm"><a rel="nofollow" href="<?php echo $MODULE['52']['linkurl'];?><?php echo rewrite('show.php?itemid=114');?>" target="_blank">如何向供应商询价？</a></li> 
        </ul> 
</div> 
<div class="f-nav"> 
<h5 class="tit">我是供应商</h5> 
    <ul class="f-lst"> 
    <li class="f-itm"><a rel="nofollow" href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_my'];?>?mid=5&action=add" target="_blank">发布货源</a></li> 
        <li class="f-itm"><a rel="nofollow" href="<?php echo $MODULE['6']['linkurl'];?>" target="_blank">看采购</a></li> 
        <li class="f-itm"><a rel="nofollow" href="<?php echo $MODULE['52']['linkurl'];?><?php echo rewrite('show.php?itemid=151');?>" target="_blank">如何上传证书？</a></li> 
        <li class="f-itm"><a rel="nofollow" href="<?php echo $MODULE['52']['linkurl'];?><?php echo rewrite('show.php?itemid=96');?>" target="_blank">如何找买家？</a></li> 
<li class="f-itm"><a rel="nofollow" href="<?php echo $MODULE['1']['linkurl'];?>vip" target="_blank"><?php echo VIP;?>服务</a></li> 
    </ul> 
</div> 
<div class="f-nav"> 
<h5 class="tit">帐户服务</h5> 
    <ul class="f-lst"> 
    <li class="f-itm"><a rel="nofollow" href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_register'];?>" target="_blank">用户注册</a></li>
    <li class="f-itm"><a rel="nofollow" href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_login'];?>" target="_blank">会员登录</a></li> 
    <li class="f-itm"><a rel="nofollow" href="<?php echo $MODULE['52']['linkurl'];?><?php echo rewrite('show.php?itemid=79');?>" target="_blank">如何找回密码？</a></li> 
    <li class="f-itm"><a rel="nofollow" href="<?php echo $MODULE['52']['linkurl'];?><?php echo rewrite('show.php?itemid=76');?>" target="_blank">如何修改联系方式？</a></li> 
    <li class="f-itm"><a rel="nofollow" href="<?php echo $MODULE['52']['linkurl'];?><?php echo rewrite('show.php?itemid=75');?>" target="_blank">修改公司资料</a></li> 
    </ul> 
</div> 
<div class="f-nav"> 
<h5 class="tit">常见问题</h5> 
    <ul class="f-lst"> 
    <li class="f-itm"><a rel="nofollow" href="<?php echo $MODULE['52']['linkurl'];?><?php echo rewrite('show.php?itemid=77');?>" target="_blank">看不到验证码</a></li> 
    <li class="f-itm"><a rel="nofollow" href="<?php echo $MODULE['52']['linkurl'];?><?php echo rewrite('show.php?itemid=86');?>" target="_blank">提示登录名错误？</a></li> 
    <li class="f-itm"><a rel="nofollow" href="<?php echo cat_url(9775);?>" target="_blank">交易安全</a></li> 
    <li class="f-itm"><a rel="nofollow" href="<?php echo cat_url(9776);?>" target="_blank">维权举报</a></li>
    <li class="f-itm"><a rel="nofollow" href="<?php echo cat_url(9781);?>" target="_blank">自助服务</a></li>  
    </ul> 
</div> 
</div>
<div class="f-top-r fl">
<div class="fl tc"><img src="<?php echo $DT['erwei'];?>" width="120" height="120"><br>模板网微信</div>
<div class="fl tc ml20"><img src="<?php echo $DT['waperwei'];?>" width="120" height="120"><br>模板网WAP</div>
</div> 
<div class="PublicAD-Bottom"> 
</div>
</div> 
</div>
<!-- footer start-->
<div class="footer">
<div class="layout">
<div class="f-btm">
<div class="links" >
<a href="<?php echo $MODULE['1']['linkurl'];?>">网站首页</a>
<?php echo tag("table=webpage&condition=item=1&areaid=$cityid&order=listorder desc,itemid desc&template=list-webpage");?>
| <a href="<?php echo $MODULE['1']['linkurl'];?>sitemap/" target="_blank">网站地图</a>
| <a href="<?php echo $EXT['spread_url'];?>" target="_blank">排名推广</a>
<?php if($EXT['ad_enable']) { ?> | <a href="<?php echo $EXT['ad_url'];?>" target="_blank">广告服务</a><?php } ?>
<?php if($EXT['gift_enable']) { ?> | <a href="<?php echo $EXT['gift_url'];?>index2.php" target="_blank">积分换礼</a><?php } ?>
<?php if($EXT['guestbook_enable']) { ?> | <a href="<?php echo $EXT['guestbook_url'];?>" target="_blank">网站留言</a><?php } ?>
<?php if($EXT['feed_enable']) { ?> | <a href="<?php echo $EXT['feed_url'];?>" target="_blank">RSS订阅</a><?php } ?>
</div>
<p class="copyright" id="copyright"><?php echo $DT['copyright'];?><?php if($DT['icpno']) { ?> <a href="http://www.miibeian.gov.cn" target="_blank" rel="nofollow"><?php echo $DT['icpno'];?></a><?php } ?>
</p>
<?php if(DT_DEBUG) { ?><p class="px11"><?php echo debug();?></p><?php } ?>
</div>
</div>
</div>
<script type="text/javascript" src="<?php echo DT_SKIN;?>js/xh_common.js?_=20170829"></script>
<!--在线咨询弹框 S-->
<?php include template('zxzx-2');?>
<!--在线咨询弹框 END-->
<script type="text/javascript">
  $('.fdtb').fixedDiv('.footer_list');
if(get_cookie('auth')) {
  $('.xh_dl')[0].className = 'xh_dl_no';
  $('.xh_dl_2_no')[0].className = 'xh_dl_2';
}
</script>
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