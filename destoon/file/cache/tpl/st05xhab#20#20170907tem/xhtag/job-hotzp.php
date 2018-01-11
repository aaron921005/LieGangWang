<?php defined('IN_DESTOON') or exit('Access Denied');?><?php if(is_array($tags)) { foreach($tags as $i => $t) { ?>
<li data-url="<?php echo $t['linkurl'];?>">
<?php if($t['level']>0) { ?><em class="addIcon stick"></em><?php } ?>
<?php $uinfo = userinfo($t['username']);?>
<?php $MOD = cache_read('module-9.php');?>
<?php $EDUCATION = explode('|', trim($MOD['education']));?>
          <div class="logo"> <a href="<?php echo userurl($t['username']);?>" target="_blank"><img src="<?php echo imgurl($uinfo['thumb'], 100);?>" alt=""></a> </div>
          <div class="boxCenter">
            <p> <a href="<?php echo $t['linkurl'];?>" class="jobName" target="_blank"><?php echo $t['title'];?></a><span class="jobType post-lt"><a href="<?php echo $t['caturl'];?>" target="_blank"><?php echo $t['catname'];?></a></span> <span class="time"><?php echo timetodate($t['addtime'], 5);?> 发布</span> <?php if($t['level']>0) { ?><span class="fast"></span><?php } ?>
<?php if($i<3) { ?><a class="uped"></a> <?php } ?>
</p>
            <p> <span class="money">
            <?php if($t['minsalary'] && $t['maxsalary']) { ?>
<?php echo $t['minsalary'];?>-<?php echo $t['maxsalary'];?><?php echo $DT['money_unit'];?>/月
<?php } else if($t['minsalary']) { ?>
<?php echo $t['minsalary'];?><?php echo $DT['money_unit'];?>/月以上
<?php } else if($t['maxsalary']) { ?>
<?php echo $t['maxsalary'];?><?php echo $DT['money_unit'];?>/月以内
<?php } else { ?>
面议
<?php } ?>
</span><em>|</em> <span class="ads"><?php echo area_pos($t['areaid'], '', 1);?></span><em>|</em> <span class="suffer"><?php if($t['experience']) { ?><?php echo $t['experience'];?>年以上<?php } else { ?>不限工作经验<?php } ?>
</span><em>|</em> <span class="edu">学历：<?php echo $EDUCATION[$t['education']];?></span> </p>
          </div>
          <div class="companyMsg">
            <p> <a href="<?php echo userurl($t['username']);?>" target="_blank" class="companyName"><?php echo $t['company'];?></a><?php if($uinfo['vip']) { ?> <span class="c"></span><?php } ?>
 </p>
            <p> <span class="type_job"><?php echo dsubstr($uinfo['business'], 20, '…');?></span><?php if($uinfo['size']) { ?><em>|</em> <span class="personNum"><?php echo $uinfo['size'];?></span> <?php } ?>
</p>
          </div>
        </li>
<?php } } ?>