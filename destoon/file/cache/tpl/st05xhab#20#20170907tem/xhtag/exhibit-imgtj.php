<?php defined('IN_DESTOON') or exit('Access Denied');?><?php if(is_array($tags)) { foreach($tags as $i => $t) { ?>
  <div class="countDown">
    <a href="<?php echo $t['linkurl'];?>" target="_blank">
<img src="<?php echo $t['thumb'];?>" alt="<?php echo $t['alt'];?>" title="<?php echo $t['alt'];?>" border="0" width="285" height="144">
</a>
    <div class="sign_a">
        <img src="<?php echo DT_SKIN;?>images/exhibit/sign.png">
        <div class="signText">
 <p id="exhi">
<?php $lasted_day =(strtotime(timetodate($t['fromtime'], 3))-strtotime(date('Y-m-d')))/3600/24;?>
<?php if($lasted_day < 0) { ?>
  <?php if($t['totime'] > $DT_TIME) { ?>
<font color="#008000">正在进行中</font>
  <?php } else { ?>
<font color="#e60000">已结束</font>
  <?php } ?>
<?php } else { ?>
<?php if($lasted_day == 0) { ?>
<font color="#008000">正在进行中</font>
<?php } else { ?>
距展会开始还有<font color="#e60000"><?php echo $lasted_day;?></font>天
<?php } ?>
<?php } ?>
    </p>
        </div>
    </div>
    <div class="countText">
        <h3><a href="<?php echo $t['linkurl'];?>" target="_blank"><?php echo $t['title'];?></a></h3>
        <p>展出时间：<?php echo timetodate($t['fromtime'], 3);?>~<?php echo timetodate($t['totime'], 3);?></p>
        <p>展出地点：<?php echo $t['city'];?></p>
    </div>
</div>
<?php } } ?>