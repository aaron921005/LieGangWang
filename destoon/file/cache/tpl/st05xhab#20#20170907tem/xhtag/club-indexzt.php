<?php defined('IN_DESTOON') or exit('Access Denied');?><?php if(is_array($tags)) { foreach($tags as $t) { ?>
<li class="post-item fd-clr post-item-current">
  <div class="post-item-hover"> <img src="<?php echo useravatar($t['username'], 'large');?>" alt=""/>
    <div class="infoclub"><a href="<?php echo $t['linkurl'];?>" target="_blank" class="titleclub"><?php echo $t['title'];?></a><a href="<?php echo userurl($t['username']);?>" target="_blank" class="quan-name"><?php echo $t['passport'];?></a></div>
  </div>
</li>
<?php $tags=tag("moduleid=$moduleid&condition=status=3 and username='".$t['username']."'&areaid=$cityid&order=addtime desc&pagesize=4&template=null");?> 
<?php if(is_array($tags)) { foreach($tags as $v) { ?>
<li class="post-item fd-clr"><a href="<?php echo $v['linkurl'];?>" target="_blank" class="post-title"><?php echo $v['title'];?></a><span class="click-count"><?php echo $t['hits'];?></span> </li>
<?php } } ?>              
 <?php } } ?>