<?php defined('IN_DESTOON') or exit('Access Denied');?> <?php if(is_array($tags)) { foreach($tags as $i => $t) { ?>
  <?php if($i%4==0) { ?><li class="rl-item"><?php } ?>
   <div class="rl-itm unit unit_2">
     <div class="img-wrap">
      <a href="<?php echo $t['linkurl'];?>" target="_blank" title="<?php echo $t['alt'];?>">
        <div class="img-box"><img src="<?php echo $t['thumb'];?>" onerror="this.src='<?php echo DT_SKIN;?>image/sx_nopic197_157.png'"></div>
      </a>
      </div>
     <p class="com_tit"><a href="<?php echo $t['linkurl'];?>" target="_blank"><?php echo $t['title'];?></a></p>
    <p class="desc">高精度高效率尊享出厂价</p>
</div>
   <?php if($i%4==3) { ?> </li><?php } ?>
<?php } } ?>