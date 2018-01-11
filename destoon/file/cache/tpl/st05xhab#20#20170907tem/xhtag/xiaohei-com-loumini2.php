<?php defined('IN_DESTOON') or exit('Access Denied');?><?php if(is_array($tags)) { foreach($tags as $i => $t) { ?>
<a href="<?php echo $t['linkurl'];?>" target="_blank" class="mod-brand" title="<?php echo $t['company'];?>">
<div class="img-wrap">
  <div class="img-box"> <img src="<?php if($t['comlogo']) { ?><?php echo $t['comlogo'];?><?php } else { ?><?php echo DT_SKIN;?>images/company/no_comlogo.png<?php } ?>
" alt="<?php echo $t['company'];?>"> </div>
</div>
<p class="name"><?php echo $t['company'];?><span class="new">新秀</span></p>
</a>
<ul class="key-list clf">
  <?php $xhbq=tag("moduleid=5&length=14&condition=status=3 and username='".$t['username']."'&areaid=$cityid&pagesize=4&order=edittime desc&template=null");?> 
  <?php if(is_array($xhbq)) { foreach($xhbq as $k => $v) { ?>
  <li class="kl-itm"> <a href="<?php echo $v['linkurl'];?>" target="_blank" title="<?php echo $v['alt'];?>"><?php echo $v['title'];?></a> </li>
  <?php } } ?>
</ul>
<?php } } ?>