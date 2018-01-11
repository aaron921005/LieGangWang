<?php defined('IN_DESTOON') or exit('Access Denied');?><?php if(is_array($tags)) { foreach($tags as $k => $t) { ?>
<div class="col-xs-4 col-xs-4-236 padding-none">
          <div class="thumbnail sell-thumbnail sell-thumbnail2"> <a href="<?php echo $t['linkurl'];?>" target="_blank" title="<?php echo $t['alt'];?>">
            <div class="imgcon">
              <div class="imglist"><img src="<?php echo $t['thumb'];?>" alt="<?php echo $t['alt'];?>" onerror="this.src='<?php echo DT_SKIN;?>image/sx_nopic150_150.png'"></div>
            </div>
            <div class="product font16"><span class="em2"></span><?php echo $t['title'];?></div>
            </a>
            <div class="name"><a href="<?php echo userurl($t['username']);?>" target="_blank" title="<?php echo $t['company'];?>"><?php echo $t['company'];?></a></div>
            <a href="<?php echo $t['caturl'];?>" target="_blank" class="btn-sell btn-default btn-w2">同类产品</a> </div>
</div>
<?php } } ?>
