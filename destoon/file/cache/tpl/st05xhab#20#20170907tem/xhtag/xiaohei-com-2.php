<?php defined('IN_DESTOON') or exit('Access Denied');?><?php if(is_array($tags)) { foreach($tags as $i => $t) { ?>
<?php if($i%3==0) { ?><li class="sl-itm"><?php } ?>
  <div class="s-item unit">
    <div class="s-img"> <a href="<?php echo $t['linkurl'];?>" target="_blank" class="a-block s-a">
      <div class="com-img">
        <div class="img-wrap"> <img src="<?php echo imgurl($t['thumb'], 1);?>" alt="<?php echo $t['company'];?>" onerror="this.src='<?php echo DT_SKIN;?>image/sx_nopic197_157.png'"> </div>
      </div>
      <div class="s-cover">
        <p class="com-name"><?php echo $t['company'];?></p>
        <div class="line"></div>
        <p class="com-desc"><?php echo $t['business'];?></p>
      </div>
      </a> </div>
    <div class="s-product mt-20 clf"> 
      <?php $xhbq=tag("moduleid=5&length=20&condition=status=3 and thumb<>''and username='".$t['username']."'&areaid=$cityid&pagesize=3&order=edittime desc&template=null");?> 
      <?php if(is_array($xhbq)) { foreach($xhbq as $k => $v) { ?>
      <div class="pro-item"> <a href="<?php echo $v['linkurl'];?>" target="_blank" title="<?php echo $v['alt'];?>">
        <div class="img-wrap">
          <div class="img-box"> <img src="<?php echo $v['thumb'];?>" alt="<?php echo $v['alt'];?>"> </div>
        </div>
        </a> </div>
      <?php } } ?>
       </div>
  </div>
  <?php if($i%3==2) { ?></li><?php } ?>
<?php } } ?>