<?php defined('IN_DESTOON') or exit('Access Denied');?><?php if($foot) { ?>
<div class="foot-bar-fix"></div>
<div class="foot-bar">
<ul>
<li class="icon-home<?php if($foot=='home') { ?>-on<?php } ?>
"><a href="index.php" data-transition="none" data-ajax="false"><span>首页</span></a></li>
<li class="icon-channel<?php if($foot=='channel') { ?>-on<?php } ?>
"><a href="channel.php" data-transition="none"><span>频道</span></a></li>
<li class="icon-cart<?php if($foot=='cart') { ?>-on<?php } ?>
"><a href="cart.php" data-transition="none"><span>购物车</span></a><?php if($_cart) { ?><i><?php if($_cart>99) { ?>99<?php } else { ?><?php echo $_cart;?><?php } ?>
</i><?php } ?>
</li>
<li class="icon-my<?php if($foot=='my') { ?>-on<?php } ?>
"><a href="my.php" data-transition="none"><span>我的</span></a><?php if($_message || $_chat || $_cart) { ?><em></em><?php } ?>
</li>
<li class="icon-more<?php if($foot=='more') { ?>-on<?php } ?>
"><a href="more.php" data-transition="none"><span>更多</span></a></li>
</ul>
</div>
<?php } ?>
</div>
</body>
</html>