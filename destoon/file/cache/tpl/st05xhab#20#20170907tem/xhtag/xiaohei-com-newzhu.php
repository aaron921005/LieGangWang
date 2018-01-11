<?php defined('IN_DESTOON') or exit('Access Denied');?> <?php if(is_array($tags)) { foreach($tags as $k => $t) { ?>
     <li class="el-itm clf">
     <p class="con"><a href="<?php echo $t['linkurl'];?>" target="_blank" title="<?php echo $t['company'];?>" class="p c61"><?php echo $t['company'];?></a></p>
   </li>
<?php } } ?>