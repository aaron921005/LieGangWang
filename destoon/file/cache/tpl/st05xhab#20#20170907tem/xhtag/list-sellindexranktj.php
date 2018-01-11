<?php defined('IN_DESTOON') or exit('Access Denied');?><?php if(is_array($tags)) { foreach($tags as $k => $t) { ?>
<div class="thumbnail sell-thumbnail<?php if(!$k==0) { ?> hide<?php } ?>
" id="product_good_<?php echo $k+1;?>">
  <p class="today-recomm-ico">今日<br>推荐</p>
  <a class="font16" href="<?php echo $t['linkurl'];?>" target="_blank" title="<?php echo $t['alt'];?>">
  <div class="imgcon">
    <div class="imglist"><img src="<?php echo $t['thumb'];?>" alt="<?php echo $t['alt'];?>" onerror="this.src='<?php echo DT_SKIN;?>image/sx_nopic150_150.png'"></div>
  </div>
  <div class="caption text-center"><?php echo $t['title'];?></div>
  </a>
  <div class="margin-top-30 text-center"><a class="btn-sell btn-default btn-default-sameproduct font14" href="<?php echo $t['caturl'];?>" target="_blank"><?php echo $t['catname'];?></a></div>
</div>
<?php } } ?>
