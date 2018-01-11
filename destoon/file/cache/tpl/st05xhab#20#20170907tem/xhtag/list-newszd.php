<?php defined('IN_DESTOON') or exit('Access Denied');?><?php if(is_array($tags)) { foreach($tags as $k => $t) { ?>
<?php if($t['thumb']) { ?>
<div class="news-item-new topnews yesimg" id="item_<?php echo $t['itemid'];?>">
<div class="text-list">
            <div class="img-list news-box-img"> <a target="_blank" title="<?php echo $t['alt'];?>" href="<?php echo $t['linkurl'];?>"> <img src="<?php echo $t['thumb'];?>" style="display: inline;"> </a> </div>
            <h3 class="news-tit2"><span class="topnews-ico">置顶</span><a target="_blank" title="<?php echo $t['alt'];?>" href="<?php echo $t['linkurl'];?>"><?php echo $t['title'];?></a></h3>
            <div class="mess"><?php echo dsubstr($t['introduce'], 200, '…');?> </div>
            <div class="time"><span class="time_ico"><?php echo timetodate($t['addtime'], 5);?></span><span class="f10"></span><span>类目：<a target="_blank" title="<?php echo cat_name($t['catid']);?>" href="<?php echo cat_url($t['catid']);?>"><em class="font-none2"><?php echo cat_name($t['catid']);?></em></a></span> </div>
</div>
</div>
<?php } else { ?>
<div class="news-item-new topnews yesimg" id="item_<?php echo $t['itemid'];?>">
<div class="text-list">
            <h3 class="news-tit2"><span class="topnews-ico">置顶</span><a target="_blank" title="<?php echo $t['alt'];?>" href="<?php echo $t['linkurl'];?>"><?php echo $t['title'];?></a></h3>
            <div class="mess"><?php echo dsubstr($t['introduce'], 200, '…');?> </div>
            <div class="time"><span class="time_ico"><?php echo timetodate($t['addtime'], 5);?></span><span class="f10"></span><span>类目：<a target="_blank" title="<?php echo cat_name($t['catid']);?>" href="<?php echo cat_url($t['catid']);?>"><em class="font-none2"><?php echo cat_name($t['catid']);?></em></a></span></div>
</div>
</div>
<?php } ?>
<?php } } ?>