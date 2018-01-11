<?php defined('IN_DESTOON') or exit('Access Denied');?><?php if(is_array($tags)) { foreach($tags as $k => $t) { ?>
<li style="overflow: hidden; float: left; width: 205px; height: 400px;">
  <div class="col-xs-3 col-xs-3-205 padding-none">
    <div class="thumbnail sell-thumbnail"> <a href="<?php echo $t['linkurl'];?>" target="_blank" title="<?php echo $t['alt'];?>" class="font16">
      <div class="caption product"><?php echo $t['title'];?></div>
      <div class="imgcon">
        <div class="imglist"><img src="<?php echo $t['thumb'];?>" alt="<?php echo $t['alt'];?>" onerror="this.src='<?php echo DT_SKIN;?>image/sx_nopic150_150.png'"></div>
      </div>
      </a> <a href="<?php echo userurl($t['username']);?>" target="_blank" class="company" title="<?php echo $t['company'];?>">
      <div class="caption3 margin-top-10 text-center">
        <div class="font14 color-senhui name"></div>
        <div class="margin-top-20"><span class="glyphicon glyphicon-menu-index font20"></span></div>
      </div>
      </a> </div>
  </div>
</li>
<?php } } ?>