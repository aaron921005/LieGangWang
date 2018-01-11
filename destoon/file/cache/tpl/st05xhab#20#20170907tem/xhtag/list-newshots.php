<?php defined('IN_DESTOON') or exit('Access Denied');?><?php if(is_array($tags)) { foreach($tags as $k => $t) { ?>
<li class="<?php if($k < 3) { ?>hots<?php } ?>
<?php if($k==0) { ?> news-active<?php } ?>
"><em class="news-num"><?php echo $k+1;?></em><a title="<?php echo $t['alt'];?>" href="<?php echo $t['linkurl'];?>" class="font14 news-text" target="_blank"><?php echo $t['title'];?></a>
<div class="news-w1"><?php echo dsubstr($t['introduce'], 60, '…');?></div>
<div class="news-w2"> <span><?php echo timetodate($t['addtime'], 5);?></span> </div>
</li>
<?php } } ?>