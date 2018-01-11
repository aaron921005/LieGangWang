<?php defined('IN_DESTOON') or exit('Access Denied');?><?php $mid = $moduleid;?>
<?php $child = get_maincat(0,$mid,1);$cols=7?>
<?php if(is_array($child)) { foreach($child as $i => $c) { ?>
<?php if($i < $cols) { ?>
 <li data-type="<?php echo $i;?>" class="nav-list-fl hnl-first">
          <p class="title_2"><a href="<?php echo $MODULE[$mid]['linkurl'];?><?php echo $c['linkurl'];?>"><?php echo $c['catname'];?></a><em></em> </p>
          <p class="hn-detail-title">
  <?php $sub = get_maincat($c['catid'],$mid,1);?>
  <?php if(is_array($sub)) { foreach($sub as $j => $s) { ?>
    <?php if($j < 10) { ?>
  <?php $subc = get_maincat($s['catid'],$mid,2);?>
  <?php if(is_array($subc)) { foreach($subc as $k => $s) { ?>
<a href="<?php echo $MODULE[$mid]['linkurl'];?><?php echo $s['linkurl'];?>"><?php echo set_style($s['catname'], $s['style']);?></a>
  <?php } } ?>
  <?php } ?>
  <?php } } ?>
         </p>
          <div class="hn-detail-con">
            <div class="hn-detail-con-content">
  <?php $sub = get_maincat($c['catid'],$mid,1);?>
  <?php if(is_array($sub)) { foreach($sub as $j => $s) { ?>
              <div class="leftBox">
                <h3><a href="<?php echo $MODULE[$mid]['linkurl'];?><?php echo $s['linkurl'];?>"><?php echo set_style($s['catname'], $s['style']);?></a></h3>
                <ul class="hn-detail-list">
<?php $subx = get_maincat($s['catid'],$mid);?>
  <?php if(is_array($subx)) { foreach($subx as $j => $x) { ?>
   <li><a href="<?php echo $MODULE[$mid]['linkurl'];?><?php echo $x['linkurl'];?>" target="_blank"><?php echo set_style($x['catname'], $x['style']);?></a> </li>
   <?php } } ?>
                </ul>
              </div>
   <?php } } ?>
            </div>
            <dl class="ad_0">
              <dd><span>名企推荐</span></dd>
              <dt><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>images/aa/job/fenl-aa.png" alt=""></a></dt>
              <dt><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>images/aa/job/fenl-aa.png" alt=""></a></dt>
              <dt><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>images/aa/job/fenl-aa.png" alt=""></a></dt>
            </dl>
          </div>
        </li>
<?php } ?>
<?php } } ?>