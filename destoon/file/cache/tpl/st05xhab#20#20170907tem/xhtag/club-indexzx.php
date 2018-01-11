<?php defined('IN_DESTOON') or exit('Access Denied');?> <?php if(is_array($tags)) { foreach($tags as $i => $t) { ?>  
 <li class="post-item fd-clr">
      <a class="post-category" href="<?php echo $t['caturl'];?>" target="_blank">[<?php echo $t['catname'];?>]</a>
      <a href="<?php echo $t['linkurl'];?>" target="_blank" class="post-title"><?php echo $t['title'];?></a><span class="click-count"><?php echo $t['hits'];?></span>
</li>
<?php } } ?>
