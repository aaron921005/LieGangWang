<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header');?>
<div class="index-doc">
  <!--图标导航开始-->
  <div class="category-entrance fd-clr">
    <ul class="top-list">
      <li class="category-item category-sub-menu bbs-quan"><a href="<?php echo cat_url(45469);?>" target="_blank"><span class="category-img"></span><span class="category-name">论坛圈</span></a></li>
      <li class="category-item hot-quan"><a href="<?php echo cat_url(45477);?>" target="_blank"><span class="category-img"></span><span class="category-name">闲聊圈</span></a></li>
      <li class="category-item yuan-cai-liao"><a href="<?php echo cat_url(45470);?>" target="_blank"><span class="category-img"></span><span class="category-name">原材料</span></a></li>
      <li class="category-item gong-ye-pin"><a href="<?php echo cat_url(45471);?>" target="_blank"><span class="category-img"></span><span class="category-name">工业品</span></a></li>
      <li class="category-item fu-zhuang"><a href="<?php echo cat_url(45472);?>" target="_blank"><span class="category-img"></span><span class="category-name">服装服饰</span></a></li>
      <li class="category-item bai-huo"><a href="<?php echo cat_url(45473);?>" target="_blank"><span class="category-img"></span><span class="category-name">家居百货</span></a></li>
      <li class="category-item xiao-shang-pin"><a href="<?php echo cat_url(45474);?>" target="_blank"><span class="category-img"></span><span class="category-name">小商品</span></a></li>
      <li class="category-item fu-wu"><a href="<?php echo cat_url(45475);?>" target="_blank"><span class="category-img"></span><span class="category-name">商务服务</span></a></li>
      <li class="category-item sha-long"><a href="<?php echo cat_url(45476);?>" target="_blank"><span class="category-img"></span><span class="category-name">网商沙龙</span></a></li>
      <li class="category-item office-circle "><a href="<?php echo cat_url(45477);?>" target="_blank"><span class="category-img"></span><span class="category-name">官方圈</span></a></li>
    </ul>
  </div>
  <!--图标导航结束--> 
  
  <!--第一屏 开始-->
  <div class="row-screen first-screen fd-clr"> 
    <!-- 第一屏left start -->
    <div class="left">
      <div class="promo-tabs fui-tab-effect-default"> 
        <?php echo tag("moduleid=$moduleid&condition=status=3 and thumb!=''&areaid=$cityid&order=addtime DESC&pagesize=3&width=308&height=258&target=_blank&template=slide");?> 
      </div>
      <div class="hot-threads">
        <div class="headclub fd-clr"> <span class="area-title">本站热点</span><span class="new-post-info">昨日新增圈帖<span class="post-count"><?php echo $db->count($DT_PRE.'club', 'status=3', 1800);?> </span></span> </div>
        <div class="body">
          <ul class="fd-clr">
            <?php echo tag("moduleid=$moduleid&condition=status=3&length=32&areaid=$cityid&order=addtime DESC&pagesize=13&dir=xhtag&template=club-indexrd");?>
            
          </ul>
        </div>
      </div>
    </div>
    <!-- 第一屏left start --> 
    <!-- 第一屏center start -->
    <div class="center"> 
      <?php $tags=tag("moduleid=$moduleid&condition=status=3 and level=2 and thumb<>''&areaid=$cityid&order=addtime desc&pagesize=1&template=null");?> 
      <?php if(is_array($tags)) { foreach($tags as $t) { ?> <a class="main-title" href="<?php echo $t['linkurl'];?>"><?php echo $t['title'];?></a> <span class="main-info"><?php echo dsubstr($t['introduce'], 120, '…');?> <span class="fr" style="color:#FF0000"> 来自：<?php echo $t['passport'];?></span></span> <?php } } ?>
      <ul class="post-center">
        <?php echo tag("moduleid=$moduleid&condition=status=3&length=40&showcat=1&areaid=$cityid&order=addtime DESC&pagesize=5&dir=xhtag&template=club-indexzx");?>
      </ul>
      <!-- 首屏中心推荐位 -->
      <div class="seminar-suggest">
        <div class="headclub fd-clr"> <span class="area-title">推荐粉丝专栏贴</span> <span class="suggest-item"><span class="left-corner"></span><a href="#" target="_blank">创业故事</a><span class="right-corner"></span></span> <span class="suggest-item"><span class="left-corner"></span><a href="#" target="_blank">职场生涯</a><span class="right-corner"></span></span> <span class="suggest-item"><span class="left-corner"></span><a href="#" target="_blank">技术交流</a><span class="right-corner"></span></span> </div>
        <div class="body">
          <ul>
            <?php echo tag("moduleid=$moduleid&condition=status=3 and level=1&areaid=$cityid&order=addtime desc&pagesize=2&dir=xhtag&template=club-indexzt");?>
          </ul>
        </div>
      </div>
    </div>
    <!-- 第一屏center end --> 
    <!-- 第一屏right start -->
    <div class="right">
      <div class="unlogin">
        <div class="infoclub">
          <div class="data fd-left">
            <div class="welcome-tips">众多优质圈子，等你的加入！</div>
            <div class="desc">
              <p class="item">已有圈子： <span class="count"><?php echo $db->count($DT_PRE.'club_group', 'status=3', 1800);?></span> 个</p>
              <p class="item">已有帖子： <span class="count"><?php echo $db->count($DT_PRE.'club', 'status=3', 1800);?></span> 篇</p>
              <p class="item">热情粉丝： <span class="count"><?php echo $db->count($DT_PRE.'club_fans', 'status=3', 1800);?></span> 位</p>
            </div>
          </div>
          <?php $member=userinfo($username)?>
          <div class="default-avatar fd-right"><a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?username='.$member['username']);?>" target="_blank"> <img class="head-pic" src="<?php echo useravatar($member['username'], 'large');?>"> </a></div>
        </div>
        
        <!--会员在线状态-->
        <div class="xh_dl_2_no">
          <div class="has-login">
            <div class="my-operation fd-clr"> <a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_my'];?>?mid=18&amp;job=group" target="_blank" class="my-club fd-left">我的商圈</a> <a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_my'];?>?mid=18&amp;job=group&action=add" target="_blank" class="add-article fd-left">创建商圈</a> <a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_my'];?>?mid=18" target="_blank" class="my-homepage fd-left">我的主题</a> </div>
          </div>
        </div>
          <div class="xh_dl"> 
          <div class="bar">
          <a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_register'];?>" title="免费注册" class="sign">免费注册</a>
          <a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_login'];?>" title="登录" class="login">登录</a>
          <a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_my'];?>?mid=18&amp;job=group&action=add" class="getMoneny" title="创建商圈">创建商圈</a> 
          </div>
         </div>
        <!--会员在线状态END--> 
        
      </div>
      <div class="qr-code"> <a href="#" target="_blank"><img src="<?php echo DT_SKIN;?>images/club/01.png"/></a> </div>
      <div class="now-post">
        <div class="headclub fd-clr"> <span class="area-title">大家在聊</span><a href="<?php echo $MODULE['18']['linkurl'];?>search.php" id="change-btn">搜索话题</a> </div>
        <div class="body">
          <ul class="listclub">
            <?php echo tag("moduleid=$moduleid&condition=status=3&areaid=$cityid&order=hits desc&pagesize=3&showcat=1&dir=xhtag&template=club-indexdzl");?>
          </ul>
        </div>
      </div>
    </div>
    <!-- 第一屏right end --> 
  </div>
  <!--第一屏 结束-->
  
  <div class="sixth-screen fd-clr"><a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_my'];?>?mid=18&job=group&action=add" target="_blank"><img src="<?php echo DT_SKIN;?>images/club/c1.jpg"  width="1200" ></a></div>
  <div class="third-screen fd-clr">
    <ul id = "club-card-list">
      <?php if(is_array($childcat)) { foreach($childcat as $i => $c) { ?>
      <li class="club-card <?php if($i%2==1) { ?>odd<?php } ?>
">
        <div class="headclub fd-clr"> <span class="area-title"><?php echo $c['catname'];?></span> 
          <?php $tags=tag("moduleid=$moduleid&table=club_group&condition=status=3 and level=1&catid=".$c['catid']."&areaid=$cityid&order=addtime desc&pagesize=3&template=null");?> 
          <?php if(is_array($tags)) { foreach($tags as $i => $t) { ?> <a target="_blank" class="tag fd-left" href="<?php echo $t['linkurl'];?>"><?php echo $t['title'];?><?php echo $MOD['seo_name'];?></a> <?php } } ?> <a target="_blank" href="<?php echo $MOD['linkurl'];?><?php echo $c['linkurl'];?>" class="more-btn fd-right">更多<span>&gt</span></a> </div>
        <div class="body"> 
          <?php $tags=tag("moduleid=$moduleid&table=club_group&condition=status=3&catid=".$c['catid']."&areaid=$cityid&order=addtime desc&pagesize=4&template=null");?>
          <ul class="group-list">
            <?php if(is_array($tags)) { foreach($tags as $i => $t) { ?>
            <li><a target="_blank" href="<?php echo $t['linkurl'];?>"><img class="group-pic" src="<?php echo $t['thumb'];?>">
              <p class="group-name"><?php echo $t['title'];?><?php echo $MOD['seo_name'];?></p>
              <p class="group-count">主题：<?php echo $t['post'];?>   粉丝：<?php echo $t['fans'];?></p>
              </a></li>
            <?php } } ?>
          </ul>
          <div class="fd-left detailclub"> 
            <?php $tags=tag("moduleid=$moduleid&condition=status=3 and level=1&catid=".$c['catid']."&areaid=$cityid&order=addtime desc&pagesize=1&template=null");?> 
            <?php if(is_array($tags)) { foreach($tags as $x) { ?> <span class="tip">推荐</span> <span class="arrow"></span> <a class="title-new" href="<?php echo $x['linkurl'];?>"  target="_blank"><?php echo $x['title'];?></a>
            <div class="content-new"> <?php echo dsubstr($x['introduce'], 80, '…');?> </div>
            <p class="from">来自：<?php echo $x['passport'];?></p>
            <?php } } ?> 
            <?php $tags=tag("moduleid=$moduleid&condition=status=3&catid=".$c['catid']."&areaid=$cityid&order=addtime desc&pagesize=6&template=null");?>
            <ul class="articles">
              <?php if(is_array($tags)) { foreach($tags as $v) { ?>
              <li class="fd-clr"> <a class="fd-left" href="<?php echo $v['linkurl'];?>" target="_blank"><?php echo $v['title'];?></a><span class="view-count fd-left"><?php echo $t['hits'];?></span> </li>
              <?php } } ?>
            </ul>
          </div>
        </div>
      </li>
      <?php } } ?>
    </ul>
  </div>
  
  <!--综合排行榜-->
  <div class="clear"></div>
  <div class="row-screen zonghe-rank-container one-col-layout">
    <div class="header_club fd-clr"> <span class="area-title fd-left">综合排行榜</span>
      <ol class="new-filters filters fd-left">
        <li class="isell_2_2" id="isell_t_1" onmouseover="Tb(1, 2, 'isell', 'isell');"><a href="javascript:;">粉丝量</a></li>
        <li class="isell_2_1" id="isell_t_2" onmouseover="Tb(2, 2, 'isell', 'isell');"><a href="javascript:;">最新圈</a></li>
      </ol>
      <a class="fd-left more-btn" target="_blank" href="<?php echo $MODULE['18']['linkurl'];?>search.php">更多<span>&gt; </span></a> </div>
    <div class="body"> 
      <?php $tags=tag("moduleid=$moduleid&table=club_group&condition=status=3&areaid=$cityid&order=fans desc&pagesize=50&template=null");?>
      <div class="day-container fd-clr" id="isell_c_1" style="display:"> <?php if(is_array($tags)) { foreach($tags as $i => $t) { ?>          
        <?php if($i%10==0) { ?><ul class="lists fd-left  lists-first"><?php } ?>
          <li class="item fd-clr"> <span class="rank <?php if($i==0) { ?>rank-one<?php } else if($i==1) { ?>rank-two<?php } else if($i==2) { ?>rank-two<?php } ?>
"><?php echo $i+1;?></span> <a class="title-sq" target="_blank" href="<?php echo $t['linkurl'];?>"><?php echo $t['title'];?></a> <span class="trend"><?php echo $t['fans'];?></span> </li>
          <?php if($i%10==9) { ?></ul><?php } ?>
        <?php } } ?> </div>
      
      <?php $tags=tag("moduleid=$moduleid&table=club_group&condition=status=3&areaid=$cityid&order=addtime desc&pagesize=50&template=null");?>
      <div class="day-container fd-clr" id="isell_c_2" style="display: none;"> <?php if(is_array($tags)) { foreach($tags as $i => $t) { ?>          
        <?php if($i%10==0) { ?><ul class="lists fd-left  lists-first"><?php } ?>
          <li class="item fd-clr"> <span class="rank <?php if($i==0) { ?>rank-one<?php } else if($i==1) { ?>rank-two<?php } else if($i==2) { ?>rank-two<?php } ?>
"><?php echo $i+1;?></span> <a class="title-sq" target="_blank" href="<?php echo $t['linkurl'];?>"><?php echo $t['title'];?></a> <span class="trend"><?php echo $t['fans'];?></span> </li>
          <?php if($i%10==9) { ?></ul><?php } ?>
        <?php } } ?> </div>
    </div>
  </div>
  <div class="clear"></div>
</div>
<script type="text/javascript">
if(get_cookie('auth')) {
  $('.xh_dl')[0].className = 'xh_dl_no';
  $('.xh_dl_2_no')[0].className = 'xh_dl_2';
}
</script>
<?php include template('footer');?>