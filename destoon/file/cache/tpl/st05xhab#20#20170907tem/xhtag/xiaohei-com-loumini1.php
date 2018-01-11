<?php defined('IN_DESTOON') or exit('Access Denied');?><?php if(is_array($tags)) { foreach($tags as $i => $t) { ?> 
<a href="<?php echo $t['linkurl'];?>" target="_blank" class="a-block f-hot-a">
<div class="img-wrap-hot"> <img src="<?php echo imgurl($t['thumb'], 1);?>" alt="<?php echo $t['company'];?>" onerror="this.src='<?php echo DT_SKIN;?>image/sx_nopic197_157.png'"> </div>
<div class="mod-brand">
  <div class="img-wrap">
    <div class="img-box"> <img src="<?php if($t['comlogo']) { ?><?php echo $t['comlogo'];?><?php } else { ?><?php echo DT_SKIN;?>images/company/no_comlogo.png<?php } ?>
" alt="<?php echo $t['company'];?>"> </div>
  </div>
  <p class="name"><?php echo $t['company'];?></p>
</div>
<i class="i-hot"></i>
</a>
<?php } } ?>