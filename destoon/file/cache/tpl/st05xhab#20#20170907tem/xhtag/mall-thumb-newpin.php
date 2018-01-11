<?php defined('IN_DESTOON') or exit('Access Denied');?><?php if(is_array($tags)) { foreach($tags as $i => $t) { ?>
<?php if($i==0) { ?>
<li class="itm itm-brand" id="<?php echo $t['itemid'];?>"><a href="<?php echo $t['linkurl'];?>" title="<?php echo $t['alt'];?>" target="_blank">
<p class="desc"><?php echo $t['title'];?></p>
<p class="profix"><span><?php echo $DT['money_sign'];?><i><?php echo $t['price'];?></i><?php echo $DT['money_unit'];?></span></p>
<p class="btn_mall f-hover">立即抢购</p>
</a></li>
<li class="itm itm-pic"><a href="<?php echo $t['linkurl'];?>" title="<?php echo $t['alt'];?>" target="_blank"><img src="<?php echo $t['thumb'];?>" alt="<?php echo $t['alt'];?>" onerror="this.src='<?php echo DT_SKIN;?>image/sx_nopic90_90.png'"></a></li>
<?php } else { ?>
 <li class="itm itm-goods" id="<?php echo $t['itemid'];?>"><a class="pic" target="_blank" title="<?php echo $t['alt'];?>" href="<?php echo $t['linkurl'];?>"><img src="<?php echo $t['thumb'];?>" alt="<?php echo $t['alt'];?>" onerror="this.src='<?php echo DT_SKIN;?>image/sx_nopic90_90.png'"></a><a class="tit" target="_blank" title="<?php echo $t['alt'];?>" href="<?php echo $t['linkurl'];?>"><?php echo $t['title'];?></a>
 <p class="price"><span class="cur"><?php echo $DT['money_sign'];?><b><?php echo $t['price'];?></b></span></p>
 </li>
 <?php } ?>
<?php } } ?>