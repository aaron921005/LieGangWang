<?php defined('IN_DESTOON') or exit('Access Denied');?><?php if(is_array($tags)) { foreach($tags as $i => $t) { ?>
<li class="goods f-cb" id="<?php echo $t['itemid'];?>">
    <a href="<?php echo $t['linkurl'];?>" class="pic" target="_blank">
    <img src="<?php echo $t['thumb'];?>" title="<?php echo $t['alt'];?>" onerror="this.src='<?php echo DT_SKIN;?>image/sx_nopic90_90.png'">
    <?php if($i==2) { ?><span class="custom-corner"><b>超级推荐</b></span><?php } ?>
               
    </a>
    <div class="detail_mall">
     <h3 class="intro"><a href="<?php echo $t['linkurl'];?>" target="_blank" title="<?php echo $t['alt'];?>"><?php echo $t['title'];?></a></h3>
     <h3 class="shortTitle"><a href="<?php echo $t['linkurl'];?>" target="_blank"><?php echo dsubstr($t['introduce'], 60, '…');?> </a></h3>
     <p class="price"><b><?php echo $DT['money_sign'];?></b><?php echo $t['price'];?></p>
     <?php if($i==0) { ?>
      <div class="process"><b style="width: 10%;"></b><p class="text">剩余90%</p></div>
      <?php } else if($i==1) { ?>
       <div class="process"><b style="width: 5%;"></b><p class="text">剩余95%</p></div>
      <?php } else if($i==2) { ?>
       <div class="process"><b style="width: 30%;"></b><p class="text">剩余70%</p></div>
      <?php } else if($i==3) { ?>
       <div class="process"><b style="width: 12%;"></b><p class="text">剩余88%</p></div>
      <?php } ?>
      <a class="btn_mall f-hover" href="<?php echo $t['linkurl'];?>" target="_blank">立即抢购</a>
      </div>
</li>
<?php } } ?>