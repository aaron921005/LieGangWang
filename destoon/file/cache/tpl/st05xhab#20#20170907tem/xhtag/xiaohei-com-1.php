<?php defined('IN_DESTOON') or exit('Access Denied');?> <?php if(is_array($tags)) { foreach($tags as $k => $t) { ?>
 <li class="bl-itm">
   <a href="<?php echo $t['linkurl'];?>" target="_blank" class="mod-brand" title="<?php echo $t['company'];?>">
   <div class="img-wrap">
      <div class="img-box">
<img src="<?php if($t['comlogo']) { ?><?php echo $t['comlogo'];?><?php } else { ?><?php echo DT_SKIN;?>images/company/no_comlogo.png<?php } ?>
" alt="<?php echo $t['company'];?>" onerror="this.src='<?php echo DT_SKIN;?>image/sx_nopic200.gif'">
      </div>
    </div>
     <p class="name"><?php echo $t['company'];?></p>
      </a>
    </li>
<?php } } ?>