<?php defined('IN_DESTOON') or exit('Access Denied');?><?php if(is_array($tags)) { foreach($tags as $i => $t) { ?>
 <div class="item_2<?php if($i%4==3) { ?> no_mr<?php } ?>
">
      <div class="article-img"> <a href="<?php echo $t['linkurl'];?>" target="_blank"> <img src="<?php if($t['thumb']) { ?><?php echo $t['thumb'];?><?php } else { ?><?php echo DT_SKIN;?>images/job/man.png<?php } ?>
" width="150" height="150" alt=""> </a></div>
      <div class="poster clearfix">
        <div class="inform">
          <p><a href="<?php echo $t['linkurl'];?>" class="poster-name" target="_blank"><?php echo $t['truename'];?></a><span class="pos">(<?php if($t['gender']==1) { ?>男<?php } else { ?>女<?php } ?>
)</span></p>
          <p><span>意向行业</span> <i>·</i> <span><?php echo $t['catname'];?></span> </p>
        </div>
      </div>
      <p class="item-title"><i>要求工薪：</i><?php if($t['minsalary'] && $t['maxsalary']) { ?>
<?php echo $t['minsalary'];?>-<?php echo $t['maxsalary'];?><?php echo $DT['money_unit'];?>/月
<?php } else if($t['minsalary']) { ?>
<?php echo $t['minsalary'];?><?php echo $DT['money_unit'];?>/月以上
<?php } else if($t['maxsalary']) { ?>
<?php echo $t['maxsalary'];?><?php echo $DT['money_unit'];?>/月以内
<?php } else { ?>
面议
<?php } ?>
</p>
      <div class="ft"><span class="from-bbs">意向地区： <?php echo area_pos($t['areaid'], '', 1);?> </span> </div>
 </div>
<?php } } ?>