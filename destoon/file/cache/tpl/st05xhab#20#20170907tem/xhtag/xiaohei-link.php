<?php defined('IN_DESTOON') or exit('Access Denied');?><?php if(is_array($tags)) { foreach($tags as $i => $t) { ?>
<a href="<?php echo $t['linkurl'];?>" target="_blank" title="<?php echo $t['introduce'];?>" class="a-item"><?php echo $t['title'];?></a><span> | </span>
<?php } } ?>
<?php if($showpage && $pages) { ?><div class="pages"><?php echo $pages;?></div><?php } ?>
