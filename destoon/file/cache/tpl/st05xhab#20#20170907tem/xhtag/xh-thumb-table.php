<?php defined('IN_DESTOON') or exit('Access Denied');?><?php if(is_array($tags)) { foreach($tags as $i => $t) { ?>
<li class="newborder <?php if($i<1) { ?>clone<?php } ?>
">
            <a href="<?php echo $t['linkurl'];?>" target="_blank" title="<?php echo $t['alt'];?>" class="li_img"><img src="<?php echo $t['thumb'];?>" alt="<?php echo $t['alt'];?>" onerror="this.src='<?php echo DT_SKIN;?>image/sx_nopic258_258.png'"></a>
            <p class="newborder_price"><?php if($t['unit'] && $t['price']>0) { ?><i class="sign"><?php echo $DT['money_sign'];?></i><?php echo $t['price'];?><i class="unit">/<?php echo $t['unit'];?></i><?php } else { ?>面议<?php } ?>
</p>
            <p class="newborder_text"><a href="<?php echo $t['linkurl'];?>" target="_blank" title="<?php echo $t['alt'];?>"><?php echo $t['title'];?></a></p>
        </li>
<?php } } ?>