<?php defined('IN_DESTOON') or exit('Access Denied');?><?php if(is_array($tags)) { foreach($tags as $k => $t) { ?>
<a href="<?php echo $t['linkurl'];?>" title="<?php echo $t['alt'];?>"<?php if($target) { ?> target="_blank"<?php } ?>
><img src="<?php echo $t['thumb'];?>" width="<?php echo $width;?>" height="<?php echo $height;?>" alt="<?php echo $t['alt'];?>"/>
<div class="news-tit"><?php echo $t['title'];?></div>
</a>
<?php } } ?>
