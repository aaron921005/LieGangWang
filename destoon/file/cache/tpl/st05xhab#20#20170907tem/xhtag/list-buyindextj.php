<?php defined('IN_DESTOON') or exit('Access Denied');?><?php if(is_array($tags)) { foreach($tags as $k => $t) { ?>
<li <?php if($k==4) { ?>class="no_br" <?php } ?>
id="item_<?php echo $t['itemid'];?>">
<div class="buy_mq_1">
<p><a href="<?php echo $t['linkurl'];?>" target="_blank" title="<?php echo $t['alt'];?>"><?php echo $t['title'];?></a></p>
<p>采购数量：<?php if($t['amount']) { ?><?php echo $t['amount'];?><?php } else { ?>大量<?php } ?>
</p>
</div>
<div class="buy_mq_2">
<div class="buy_mq_2_1">
<p>发布时间：<?php echo timetodate($t['addtime'], 3);?></p>
<p>截止时间：<?php if(!$t['expired']) { ?><?php if($t['totime']) { ?><?php echo timetodate($t['totime'], 3);?><?php } else { ?>长期有效<?php } ?>
<?php } else { ?>已过期<?php } ?>
</p>
<p>采购类型：<?php echo $t['catname'];?></p>
<p>已有报价：<span class="red"><?php echo $t['pricenums'];?></span> 条</p>
</div>
<div class="buy_mq_2_2">
<p><?php if(!$t['username']) { ?>[未注册]<?php } else { ?><?php echo t_companyname($t['company']);?><?php } ?>
</p>
<div class="buy_btn2">
<?php $lasted_day =(strtotime(timetodate($t['totime'], 3))-strtotime(date('Y-m-d')))/3600/24;?>
<span class="time fl"><?php if($t['totime']) { ?><?php if($t['totime'] < $DT_TIME) { ?><strong>已过期</strong><?php } else { ?>还剩<strong><?php echo $lasted_day;?></strong>天<?php } ?>
<?php } else { ?>长期有效<?php } ?>
</span>
 <?php if($t['totime']) { ?>
 <?php if($t['totime'] > $DT_TIME) { ?>
<a href="<?php echo $t['linkurl'];?>" target="_blank" rel="nofollow"><div class="ml-btn fr">立即报价</div></a>
 <?php } else { ?>
 <a href="javascript:;" class="baojiajs"><div class="ml-btn-js fr">停止报价</div></a>
 <?php } ?>
<?php } else { ?>
<a href="<?php echo $t['linkurl'];?>" target="_blank" rel="nofollow"><div class="ml-btn fr">立即报价</div></a>
<?php } ?>
</div>
</div>
</div>
</li>
<?php } } ?>