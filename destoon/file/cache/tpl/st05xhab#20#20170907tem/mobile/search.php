<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header', 'mobile');?>
<style type="text/css">
.search {background:#FFFFFF;padding:20px 10px;}
.search-btn {background:#FFFFFF;text-align:center;}
.search-btn div {background:#007AFF;padding:8px;border-radius:4px;font-size:16px;color:#FFFFFF;}
</style>
<div id="head-bar">
<div class="head-bar">
<div class="head-bar-back">
<a href="javascript:Dback('index.php');" data-direction="reverse"><img src="static/img/icon-back.png" width="24" height="24"/><span>返回</span></a>
</div>
<div class="head-bar-title">搜索</div>
<div class="head-bar-right">
<a href="channel.php" data-transition="slideup"><span>频道</span></a>
</div>
</div>
<div class="head-bar-fix"></div>
</div>
<div style="background:#FFFFFF;padding:16px;">
<form action="search.php" method="post" id="dform">
<input type="hidden" name="ok" value="1"/>
<select name="action" style="-webkit-appearance:none;width:100%;height:34px;border:#D8D8D8 1px solid;font-size:16px;background:#FFFFFF;">
<?php if(is_array($MOB_MODULE)) { foreach($MOB_MODULE as $i => $m) { ?>
<option value="mod<?php echo $m['moduleid'];?>"<?php if($action=='mod'.$m['moduleid']) { ?> selected<?php } ?>
><?php echo $m['name'];?></option>
<?php } } ?>
<option value="message"<?php if($action=='message') { ?> selected<?php } ?>
>消息</option>
<?php if($club_post) { ?><option value="<?php echo $action;?>" selected>帖子</option><?php } ?>
</select>
<div style="border:#D8D8D8 1px solid;margin:16px 0;padding:2px 6px;border-radius:4px;"><input name="wd" id="wd" type="search" style="width:100%;height:28px;line-height:28px;border:none;font-size:14px;padding:0;" placeholder="请输入关键词" onblur="window.scrollTo(0,0);" autofocus="autofocus"/></div>
<div style="padding:0;" onclick="Dsearch();">
<div class="btn-blue">搜 索</div>
</div>
</form>
</div>
<script type="text/javascript">
function Dsearch() {
if(Dd('wd').value.length < 2) {
Dtoast('请输入关键词');
return false;
}
Dd('dform').submit();
}
</script>
<?php include template('footer', 'mobile');?>