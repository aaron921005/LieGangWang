<?php defined('IN_DESTOON') or exit('Access Denied');?><?php if(is_array($tags)) { foreach($tags as $k => $t) { ?>
<li class="x_word"><a href="<?php echo $MODULE[$moduleid]['linkurl'];?>search.php?kw=<?php echo urlencode($t['word']);?>"<?php if($target) { ?> target="<?php echo $target;?>"<?php } ?>
 rel="nofollow"><?php echo $t['word'];?></a></li>
<?php } } ?>