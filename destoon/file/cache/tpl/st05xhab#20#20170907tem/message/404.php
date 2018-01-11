<?php defined('IN_DESTOON') or exit('Access Denied');?><?php if($moduleid==16) { ?>
<?php include template('header-mall');?>
<?php } else { ?>
<?php include template('header');?>
<?php } ?>
<link rel="stylesheet" type="text/css" href="<?php echo DT_SKIN;?>message_new.css"/>
<div class="m tip-art fl-clr">
        <img src="<?php echo DT_SKIN;?>images/message/404.png">
        <dl>
            <dt>抱歉，您所查看的页面不存在！</dt>
            <dd>有可能内容已被删除或您输入的网址不正确</dd>
            <dd class="dd2">您可以<a href="<?php echo $MODULE['1']['linkurl'];?>" class="btn_x goHome">去首页</a>或者去<a href="<?php echo $MODULE['1']['linkurl'];?>sitemap/" class="btn_x search_x">网站导航</a></dd>
            <dd class="dd3">找不到合适自己的，您可以<a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_my'];?>?mid=6&action=add" class="btn_x">快速发布求购</a></dd>
        </dl>
</div>
<div class="m mt30">
<div class="m_l f_l">
<div class="box_head"><div><span class="f_r"><a href="<?php echo $MODULE['5']['linkurl'];?>">更多&raquo;</a></span><a href="<?php echo $MODULE['5']['linkurl'];?>"><strong>供应产品</strong></a></div></div>
<div class="box_body thumb_m"><?php echo tag("moduleid=5&length=14&condition=status=3 and vip>0 and thumb<>''&pagesize=20&order=addtime desc&width=150&height=150&cols=5&target=_blank&template=thumb-table");?></div>
</div>
<div class="m_n f_l">&nbsp;</div>
<div class="m_r f_l">
<div class="box_head"><div><span class="f_r"><a href="<?php echo $MODULE['6']['linkurl'];?>">更多&raquo;</a></span><a href="<?php echo $MODULE['6']['linkurl'];?>"><strong>求购信息</strong></a></div></div>
<div class="box_body li_dot f_gray"><?php echo tag("moduleid=6&condition=status=3 and vip>0&pagesize=10&datetype=2&order=addtime desc&target=_blank");?>
</div>
<div class="b10">&nbsp;</div>
<div class="box_head"><div><span class="f_r"><a href="<?php echo $MODULE['4']['linkurl'];?>">更多&raquo;</a></span><a href="<?php echo $MODULE['4']['linkurl'];?>"><strong><?php echo VIP;?>企业</strong></a></div></div>
<div class="box_body li_dot f_gray"><?php echo tag("moduleid=4&condition=vip>0 and catids<>''&pagesize=10&order=userid desc&template=list-com");?>
</div>
</div>
</div>
<?php include template('footer');?>