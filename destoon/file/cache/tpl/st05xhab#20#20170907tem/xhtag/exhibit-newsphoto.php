<?php defined('IN_DESTOON') or exit('Access Denied');?><?php if(is_array($tags)) { foreach($tags as $i => $t) { ?>
<li>
<a href="<?php echo $t['linkurl'];?>"><img src="<?php echo $t['thumb'];?>" border="0" width="217" height="158" alt="<?php echo $t['alt'];?>" title="<?php echo $t['alt'];?>"></a>
<p><a href="<?php echo $t['linkurl'];?>"><?php echo $t['title'];?></a></p>
</li>
<?php } } ?>