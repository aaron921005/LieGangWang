<?php defined('IN_DESTOON') or exit('Access Denied');?> <?php if(is_array($tags)) { foreach($tags as $k => $t) { ?>
<p class="zhanting1_p2"><a href="<?php echo $t['linkurl'];?>"  target="_blank"><?php echo $t['company'];?></a></p>
<p class="zhanting1_p3">主营：<span><?php echo $t['business'];?></span></p>
  <?php } } ?>