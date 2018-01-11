<?php defined('IN_DESTOON') or exit('Access Denied');?><div class="de_wraper">
<div class="option_index">
<div class="de_hide_list">
  <div class="de_abbr">
     <div class="first_list webkit-box-flex" id="first_list">
       <ul>
                <li class="directory">全部分类</li>
                <?php $child = get_maincat(0, $moduleid, 1);?>
                <?php if(is_array($child)) { foreach($child as $i => $c) { ?>
<li class="directory"><?php echo $c['catname'];?></li>
                <?php } } ?>
               </ul>
     </div>
   <div class="second_list webkit-box-flex" id="second_list">
              <ul>
                  <li class="two_directory"><a href="index.php?moduleid=<?php echo $moduleid;?>&catid=0&areaid=<?php echo $areaid;?>">全部</a></li>
              </ul>
               <?php if(is_array($child)) { foreach($child as $i => $c) { ?>
   <ul>
                  <li class="two_directory"><a href="index.php?moduleid=<?php echo $moduleid;?>&catid=<?php echo $c['catid'];?>&areaid=<?php echo $areaid;?>">全部</a></li>
                   <?php $sub = get_maincat($c['catid'], $moduleid, 1);?>
          <?php if(is_array($sub)) { foreach($sub as $j => $s) { ?>
                  <li class="two_directory"><a href="index.php?moduleid=<?php echo $moduleid;?>&catid=<?php echo $s['catid'];?>&areaid=<?php echo $areaid;?>"><?php echo $s['catname'];?></a></li>
                  <?php } } ?>
         </ul>
                <?php } } ?>
</div>
  </div>
  <div class="de_abbr">
     <div class="first_list webkit-box-flex" id="first_list">
        <ul>
                <?php $mainarea = get_mainarea(0)?>
                <li class="directory">全国</li>
                <?php if(is_array($mainarea)) { foreach($mainarea as $k => $v) { ?>
<li class="directory"><?php echo $v['areaname'];?></li>
                <?php } } ?>
 </ul>
     </div>
   <div class="second_list webkit-box-flex" id="second_list">
            <ul>
             <li class="two_directory"><a href="index.php?moduleid=<?php echo $moduleid;?>&catid=<?php echo $catid;?>&areaid=0">全国</a></li>
             </ul>
            <?php if(is_array($mainarea)) { foreach($mainarea as $k => $v) { ?>
             <ul>
             <?php $mainarea = get_mainarea($v['areaid'])?>
             <li class="two_directory"><a href="index.php?moduleid=<?php echo $moduleid;?>&catid=<?php echo $catid;?>&areaid=<?php echo $v['areaid'];?>"><?php echo $v['areaname'];?></a></li>
             <?php if(is_array($mainarea)) { foreach($mainarea as $k => $s) { ?>
             <li class="two_directory"><a href="index.php?moduleid=<?php echo $moduleid;?>&catid=<?php echo $catid;?>&areaid=<?php echo $s['areaid'];?><?php if($listview) { ?>&listview=1<?php } ?>
"><?php echo $s['areaname'];?></a></li>
             <?php } } ?>
             </ul>
             <?php } } ?>
            </div>
  </div>
  
</div>
 <div class="de_main_list">
    <ul class="de_mall-cate webkit-box">
       <li class="webkit-box-flex dt-text-ellipsis <?php if($catid) { ?>curr<?php } ?>
"><?php if($catid) { ?><?php echo cat_name($catid);?><?php } else { ?>全部分类<?php } ?>
<i class="fa fa-sort-desc ml5"></i></li>
   <li class="webkit-box-flex dt-text-ellipsis <?php if($areaid) { ?>curr<?php } ?>
"><?php if($areaid) { ?><?php echo ar_name($areaid);?><?php } else { ?>所在地区<?php } ?>
<i class="fa fa-sort-desc ml5"></i></li>
   <li class="webkit-box-flex dt-text-ellipsis"></li>
    </ul>
 </div>
<script type="text/javascript" src="images/assets/js/option.js"></script>
</div>
</div>