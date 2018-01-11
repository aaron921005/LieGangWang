<?php defined('IN_DESTOON') or exit('Access Denied');?><?php isset($file) or $file='search';?>
<ul>
<?php if(is_array($tags)) { foreach($tags as $i => $t) { ?>
<li title="搜索<?php echo $t[$key];?>次 约<?php echo $t['items'];?>条结果"><em class="<?php if($i==0) { ?>one<?php } else if($i==1) { ?>two<?php } else if($i==2) { ?>three<?php } else { ?>no_bg<?php } ?>
"><?php echo $i+1;?></em><a href="<?php echo $MODULE[$moduleid]['linkurl'];?><?php echo $file;?>.php?kw=<?php echo urlencode($t['word']);?>"<?php if($target) { ?> target="<?php echo $target;?>"<?php } ?>
 rel="nofollow"><?php echo $t['word'];?></a><span class="f_r px11 f_gray">&nbsp;<?php echo $t['items'];?>条</span></li>
<?php } } ?>
</ul>