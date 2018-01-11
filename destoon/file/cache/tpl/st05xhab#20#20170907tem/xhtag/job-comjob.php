<?php defined('IN_DESTOON') or exit('Access Denied');?><?php if(is_array($tags)) { foreach($tags as $i => $t) { ?>
 <dl<?php if($i==5) { ?> class="no_br"<?php } ?>
>
      <a href="<?php echo $t['linkurl'];?>" target="_blank">
      <?php $uinfo = userinfo($t['username']);?>
      <dt><img src="<?php echo imgurl($uinfo['thumb'], 100);?>"/></dt>
      <dd><span class="jobName"><?php echo $t['company'];?></span></dd>
      <span class="bgS"></span>
      <p class="bgSt"><span><?php if($t['total']) { ?><?php echo $t['total'];?> 名<?php } else { ?>若干名<?php } ?>
</span> <br>
        在招【<?php echo $t['title'];?>】职位</p>
      </a>
</dl>
<?php } } ?>