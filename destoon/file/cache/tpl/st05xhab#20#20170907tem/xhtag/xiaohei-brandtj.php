<?php defined('IN_DESTOON') or exit('Access Denied');?><?php if(is_array($tags)) { foreach($tags as $i => $t) { ?>
<?php if($i%16==0) { ?><ul<?php if($i>0) { ?> style="display: none;"<?php } ?>
><?php } ?>
<li class="fl">
<img alt="<?php echo $t['alt'];?>" title="<?php echo $t['alt'];?>" src="<?php echo $t['thumb'];?>" onerror="this.src='<?php echo DT_SKIN;?>image/sx_nopic150_108.png'">
<span>
<p><?php echo $t['title'];?></p>
<p><a href="<?php echo $t['linkurl'];?>" target="_blank" rel="nofollow">点击进入</a></p>
</span>
</li>
<?php if($i%16==15) { ?></ul><?php } ?>
<?php } } ?>  