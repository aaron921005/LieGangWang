<?php defined('IN_DESTOON') or exit('Access Denied');?><?php if($action != 'ajax') { ?>
<?php include template('header', 'mobile');?>
<div id="head-bar">
  <div class="head-bar">
    <div class="head-bar-back"> <?php if($itemid || $catid || $areaid || $kw) { ?> <a href="<?php echo $back_link;?>" data-direction="reverse"><img src="static/img/icon-back.png" width="24" height="24"/><span>返回</span></a> <?php } else { ?> <a href="channel.php" data-direction="reverse"><img src="static/img/icon-back.png" width="24" height="24"/><span>频道</span></a> <?php } ?>
 </div>
    <div class="head-bar-title"><?php if($itemid) { ?><?php echo $title;?><?php } else { ?><?php echo $head_name;?><?php } ?>
</div>
    <div class="head-bar-right"> <a href="javascript:<?php if($itemid) { ?>Dsheet('<?php if($could_purchase) { ?><a href=&#34;purchase.php?moduleid=<?php echo $moduleid;?>&itemid=<?php echo $itemid;?>&#34;><span>立即购买</span></a>|<?php } ?>
<?php if($could_inquiry) { ?><a href=&#34;message.php?action=send&typeid=1&touser=<?php echo $username;?>&title=<?php echo encrypt('我对您发布的“'.$title.'”很感兴趣', DT_KEY.'SEND');?>&#34; data-transition=&#34;slideup&#34;><span>发送询价</span></a>|<?php } ?>
<a href=&#34;<?php if($DT_MOB['browser']=='weixin'||$DT_MOB['browser']=='qq') { ?>javascript:share_tips();<?php } else { ?>share.php?moduleid=<?php echo $moduleid;?>&itemid=<?php echo $itemid;?><?php } ?>
&#34;  data-transition=&#34;slideup&#34;><span>分享好友</span></a>|<a href=&#34;<?php echo mobileurl($moduleid);?>&#34; data-direction=&#34;reverse&#34;><span><?php echo $MOD['name'];?>首页</span></a>|<a href=&#34;channel.php&#34; data-direction=&#34;reverse&#34;><span>频道列表</span></a>', '取消');<?php } else { ?>Dsheet('<a href=&#34;search.php?action=mod<?php echo $moduleid;?>&catid=<?php echo $catid;?>&areaid=<?php echo $areaid;?>&#34;><span><?php echo $MOD['name'];?>搜索</span></a>|<a href=&#34;category.php?moduleid=<?php echo $moduleid;?>&#34;><span>按分类浏览</span></a>|<a href=&#34;area.php?moduleid=<?php echo $moduleid;?>&#34;><span>按地区浏览</span></a>', '取消');<?php } ?>
"><img src="static/img/icon-action.png" width="24" height="24"/></a> </div>
  </div>
  <div class="head-bar-fix"></div>
</div>
<?php } ?>
<?php if($itemid) { ?>
<div class="main-new"> <?php if($thumb) { ?><?php include template('chip-album', 'mobile');?><?php } ?>
  <div class="detail">
    <div class="left"> <b><?php if($price&&$unit) { ?><?php echo $DT['money_sign'];?><span class="f_red"><?php echo $price;?></span>/<?php echo $unit;?><?php } else { ?>面议<?php } ?>
</b> </div>
    <div class="right">
      <ul>
        <li class="fav"><a href="<?php if($DT_MOB['browser']=='weixin'||$DT_MOB['browser']=='qq') { ?>javascript:share_tips();<?php } else { ?>share.php?moduleid=<?php echo $moduleid;?>&itemid=<?php echo $itemid;?><?php } ?>
"  data-transition="slideup">分享</a></li>
      </ul>
    </div>
    <article><?php echo $title;?></article>
  </div>
  <div class="pr2 promotion"> <span class="f_l">更新时间：<?php echo $editdate;?></span> <span class="f_r f_red"><?php if($vip) { ?>高级会员<?php } else { ?>免费会员<?php } ?>
</span> </div>
  <div class="shop"> <a href="index.php?moduleid=4&username=<?php echo $username;?>">
    <div class="shop_con arrow_con">
      <div class="arrow"> 
        <?php if($member) { ?>
        <div class="logo"><img src="<?php if($member['thumb']) { ?><?php echo $member['thumb'];?><?php } else { ?>images/img/home-logo.png<?php } ?>
" width="34" height="34" alt="" onerror="this.src='images/img/home-logo.png';" alt="<?php echo $company;?>"></div>
        <?php } ?>
        <div class="name"><?php echo $company;?></div>
      </div>
    </div>
    </a>
    <ul class="evaluation">
      <li>
        <p>描述相符</p>
        <em>5.0</em> <i class="low">中</i> </li>
      <li>
        <p>服务态度</p>
        <em>5.0</em> <i class="low">中</i> </li>
      <li>
        <p>发货速度</p>
        <em>5.0</em> <i class="low">中</i> </li>
      <li>
        <p>浏览量</p>
        <em><?php echo $hits;?></em> </li>
    </ul>
    <div class="shop_btn"> <span><a href="index.php?moduleid=4&username=<?php echo $username;?>&action=sell"><img src="images/img/icon-sort-no.png" width="20" height="20"/> 全部商品</a></span> <span><a href="index.php?moduleid=4&username=<?php echo $username;?>"><img src="images/img/my-home-no.png" width="20" height="20"/> 进店逛逛</a></span> </div>
  </div>
 <!--详解--> 
 <div class="list-tab bd-t">
    <ul>
      <li class="on" id="t_0" onclick="Mshow(0)"><span>产品详情</span></li>
      <li id="t_1" onclick="Mshow(1)"><span>规格参数</span></li>
      <li id="t_2" onclick="Mshow(2)"><span>联系方式</span></li>
    </ul>
  </div>
  <div id="c_2" style="display:none;">
 <div class="contact"><?php include template('chip-contact', 'mobile');?></div>
  </div>
  <div id="c_1" style="display:none;">
   <div class="content"> 
<?php if($brand) { ?>
    品牌: <?php echo $brand;?></br>
    <?php } ?>
    <?php if($n1 && $v1) { ?>
    <?php echo $n1;?>: <?php echo $v1;?></br>
    <?php } ?>
    <?php if($n2 && $v2) { ?>
    <?php echo $n2;?>: <?php echo $v2;?></br>
    <?php } ?>
    <?php if($n3 && $v3) { ?>
    <?php echo $n3;?>: <?php echo $v3;?></br>
    <?php } ?>
    <?php if($minamount) { ?>
    起订: <?php echo $minamount;?><?php echo $unit;?></br>
    <?php } ?>
    <?php if($amount) { ?>
    供应: <?php echo $amount;?><?php echo $unit;?></br>
    <?php } ?>
    <?php if($days) { ?>
    发货: <?php echo $days;?>天内</br>
    <?php } ?>
    发货地: <?php echo area_pos($areaid, '-');?>
</div>
  </div>
  <div class="content" id="c_0"><?php echo $content;?></div>
  </div>
<script>
var s_s = {'1':0,'2':0,'3':0};
function Mshow(k) {
if($('#t_'+k).attr('class') == 'on') return;
for(var i = 0; i < 3; i++) {
if(i == k) {
$('#t_'+i).attr('class', 'on');
$('#c_'+i).show();
if(k == 1) load_comment(0);
if(k == 2) load_order(0);
} else {
$('#t_'+i).attr('class', '');
$('#c_'+i).hide();
}
}
}
function addE(i) {
$('#p'+i+' li').click(function() {
$('#p'+i+' li')[s_s[i]].className = 'nv_1';
this.className = 'nv_2';
s_s[i] = $(this).index();
});
}
function load_comment(p) {
if($('#c_1').html().indexOf('list-empty') != -1 || p) {
$('#c_1').load(''+p);
}
}
function load_order(p) {
if($('#c_2').html().indexOf('list-empty') != -1 || p) {
$('#c_2').load(''+p);
}
}
</script>
    <!-- 本店商品开始 -->
  <div class="J_guess">
    <div class="guess">
      <div class="title_con"><span class="titlenew">本店最新</span>
        <div class="line"></div>
      </div>
      <ul>
          <?php $tagx=tag("moduleid=5&condition=status=3 and username='$username' and thumb<>''&pagesize=6&order=edittime desc&fields=itemid,title,linkurl,thumb,edittime,unit,price&template=null");?>
          <?php if(is_array($tagx)) { foreach($tagx as $i => $v) { ?>
        <li> <a href="<?php echo mobileurl(5, 0, $v['itemid']);?>">
          <div><img src="<?php if($v['thumb']) { ?><?php echo $v['thumb'];?><?php } else { ?>static/img/nopic-60.png<?php } ?>
" alt="" onerror="this.src='static/img/nopic-60.png';"></div>
          <span><?php echo $v['title'];?></span> <em><?php if($v['unit'] && $v['price']) { ?><?php echo $DT['money_sign'];?> <?php echo $v['price'];?>/<?php echo $v['unit'];?><?php } else { ?>面议<?php } ?>
</em> </a> </li>
      <?php } } ?>
      </ul>
    </div>
  </div>
  <!-- 本店商品 -->
   <div class="J_guesstop"> </div>
  <!-- 猜你喜欢开始 -->
  <div class="J_guess">
    <div class="guess">
      <div class="title_con"><span class="titlenew">猜你喜欢</span>
        <div class="line"></div>
      </div>
      <ul>
         <?php $tagx=tag("moduleid=5&catid=$catid&condition=status=3 and thumb<>''&pagesize=6&order=edittime desc&fields=itemid,title,linkurl,thumb,edittime,unit,price&template=null");?>
          <?php if(is_array($tagx)) { foreach($tagx as $i => $v) { ?>
        <li> <a href="<?php echo mobileurl(5, 0, $v['itemid']);?>">
          <div><img src="<?php if($v['thumb']) { ?><?php echo $v['thumb'];?><?php } else { ?>static/img/nopic-60.png<?php } ?>
" alt="" onerror="this.src='static/img/nopic-60.png';"></div>
          <span><?php echo $v['title'];?></span> <em><?php if($v['unit'] && $v['price']) { ?><?php echo $DT['money_sign'];?> <?php echo $v['price'];?>/<?php echo $v['unit'];?><?php } else { ?>面议<?php } ?>
</em> </a> </li>
      <?php } } ?>
      </ul>
    </div>
  </div>
  <!-- 猜你喜欢结束 -->
<!-- 版权开始 -->
<?php include template('footer_banquanshow', 'mobile');?> 
<!-- 版权结束 -->
<?php if($DT_MOB['browser'] == 'weixin' ||  $DT_MOB['browser'] == 'qq') { ?><?php include template('chip-share', 'mobile');?><?php } ?>
<!-- 购物车开始 -->
<div class="foot-bar-fix"></div>
</div>
<div class="foot-bar">
  <table cellpadding="0" cellspacing="0" width="100%">
    <tr>
      <td width="15%" class="icon-1"><a onclick="Go('message.php?action=send&touser=<?php echo $username;?>');"><p>交谈</p></a></td>
      <td width="15%" class="icon-2"><a onclick="Go('index.php?moduleid=4&username=<?php echo $username;?>');"><p>店铺</p></a></td>
        <?php if(in_array($moduleid, explode(',', $EXT['comment_module']))) { ?>
       <td width="15%" class="icon-4"><a onclick="Go('comment.php?mid=<?php echo $moduleid;?>&itemid=<?php echo $itemid;?>');"><p>评论</p></a></td>
       <?php } else { ?>
        <td width="15%" class="icon-3"><a onclick="Go('share.php?moduleid=<?php echo $moduleid;?>&itemid=<?php echo $itemid;?>');"><p>分享</p></a></td>
        <?php } ?>
   <?php if($could_purchase) { ?>
      <td width="56%" onclick="Go('purchase.php?moduleid=<?php echo $moduleid;?>&itemid=<?php echo $itemid;?>');"><div class="btn-red" style="line-height:51px;font-size:16px;">立即购买</div></td>
      <?php } else if($could_inquiry) { ?>
        <td width="56%" onclick="Go('message.php?action=send&touser=<?php echo $member['username'];?>');"><div class="btn-green" style="line-height:51px;font-size:16px;">留言询价</div></td>
      <?php } ?>

    </tr>
  </table>
</div>
<!-- 购物车结束 -->
<?php } else { ?>
<?php include template('xh-option', 'mobile');?>
<?php include template('xh-list-tong', 'mobile');?>
<?php if($lists) { ?>
<?php if(is_array($lists)) { foreach($lists as $v) { ?>
<div class="list-img120"> <a href="<?php echo $v['linkurl'];?>"><img src="<?php if($v['thumb']) { ?><?php echo $v['thumb'];?><?php } else { ?>static/img/nopic-60.png<?php } ?>
" width="100" height="100" alt="" onerror="this.src='static/img/nopic-60.png';"/></a>
  <ul onclick="window.location.href='index.php?moduleid=<?php echo $moduleid;?>&itemid=<?php echo $v['itemid'];?>'">
    <li><strong><?php echo $v['title'];?></strong></li>
    <li class="jg"><?php if($v['unit'] && $v['price']) { ?><span class="f_red"><?php echo $DT['money_sign'];?> <?php echo $v['price'];?></span>/<?php echo $v['unit'];?><?php } else { ?><span class="f_red">面议</span><?php } ?>
</li>
    <li<?php if($v['vip']) { ?> class="vip" title="<?php echo VIP;?>:<?php echo $v['vip'];?>"<?php } ?>
><span><?php echo $v['company'];?></span>
    </li>
    <li>更新时间：<em><?php echo $v['date'];?></em></li>
    <li><em><?php echo area_pos($v['areaid'], '-');?></em> <em class="f_r qgg"><a href="<?php echo $v['linkurl'];?>">立即购买</a></em> </li>
  </ul>
</div>
<?php } } ?>
<?php } else { ?>
<?php include template('chip-empty', 'mobile');?>
<?php } ?>
    <script>
var $swi=$("#swipe i");
swipe = Swipe(document.getElementById('swipe'), {
startSlide: 0,
auto: 4000,
transitionEnd: function(index, element) {
$swi.removeClass("on").eq(index).addClass("on")
}
});
$("#swipe").on("click",".close_ad",function(){
$("#swipe").remove()
})
$("#nav div,#nav li").on("click",function(e){
$(this).toggleClass("on").siblings().filter(".on").removeClass("on");
e.stopPropagation()
})
var $nav=$("#nav"),
$w=$(window).on("scroll",function(){
if($w.scrollTop()>45)
$nav.css("position","fixed")
else
$nav.css("position","relative")
})
</script>
<?php } ?>
<?php if($action != 'ajax') { ?>
<?php if($pages) { ?>
<div class="pages"><?php echo $pages;?></div>
<?php } ?>
<?php include template('footer', 'mobile');?>
<?php } ?>
