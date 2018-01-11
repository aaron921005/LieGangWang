<?php defined('IN_DESTOON') or exit('Access Denied');?><?php $CSS = array('index');?>
<?php $navAll=1;?>
<?php include template('header-mall');?>
<div class="prime"> 
  <!-- 全屏焦点图 -->
  <div class="fuSlide">
    <div class="bd"> 
      <?php echo ad(147);?><!--大幻灯id--> 
    </div>
    <div class="hd">
      <ul>
      </ul>
    </div>
  </div>
  <script type="text/javascript">
jQuery(".fuSlide").slide({ titCell:".hd ul", mainCell:".bd ul", effect:"topLoop",  autoPlay:true, autoPage:true,interTime:4000,trigger:"click" });
</script> 
  <!-- 全屏焦点图 end -->
  <div class="prime-s">
    <div class="prime-s-r">
      <div class="tl-brand-item-3"> 
        <!--状态 S-->
        <div class="xh_dl"> 
          <script language="javaScript"> 
    function showwenhou()
    {
        now = new Date(),hour = now.getHours() 
        if(hour < 6){document.write("凌晨好！")} 
        else if (hour < 9){document.write("早上好！")} 
        else if (hour < 12){document.write("上午好！")} 
        else if (hour < 14){document.write("中午好！")} 
        else if (hour < 17){document.write("下午好！")} 
        else if (hour < 19){document.write("傍晚好！")} 
        else if (hour < 22){document.write("晚上好！")} 
        else {document.write("夜里好！")} 
    }
</script>
          <div class="brand_login"><img src="<?php echo DT_SKIN;?>css/img/head_picture.png" class="brand_img"/>
            <div class="u-info">
              <div id="login_user">Hi，<i id="showWelTime"><script type="text/javascript">showwenhou();</script></i></div>
              <div class="u-wel"><span>欢迎来到<?php echo $DT['jdname'];?></span></div>
            </div>
          </div>
          <div class="brand_botton"><a class="u-btn login-btn" rel="nofollow" href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_login'];?>" title="登录">登录</a><a class="u-btn sign-btn" rel="nofollow" href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_register'];?>" title="免费注册">免费注册</a></div>
        </div>
        <div class="xh_dl_2_no">
          <div class="brand_login" id="xh_memberimg"></div><!--chip-line-->
          <div class="brand_botton"><a class="u-btn login-btn-y" rel="nofollow" href="<?php echo $MODULE['2']['linkurl'];?>" title="商务中心">商务中心</a><a class="u-btn sign-btn-y" rel="nofollow" href="<?php echo $MODULE['2']['linkurl'];?>logout.php" title="退出">退出</a></div>
        </div>
        <!--状态 END--> 
      </div>
      <!--r-2-->
      <div class="xub-news">
        <div class="xub-tab hd">
          <ul>
            <li class="on"><span>网站公告</span></li>
            <li class=""><span>常见问题</span></li>
          </ul>
        </div>
        <div class="bd">
          <div class="hover" style="display: block;">
            <ul class="xubt-list">
              <?php echo tag("table=announce&condition=totime=0 or totime>$today_endtime-86400&areaid=$cityid&pagesize=2&order=listorder desc,addtime desc&length=26&cname=公告&dir=xhtag&template=xiaohei-gonggao");?>
            </ul>
          </div>
          <div style="display: none;">
            <ul class="xubt-list">
              <?php echo tag("moduleid=52&length=26&condition=status=3&areaid=$cityid&pagesize=2&order=addtime desc&cname=帮助&dir=xhtag&template=xiaohei-gonggao");?>
            </ul>
          </div>
        </div>
      </div>
      <script type="text/javascript">
jQuery(".xub-news").slide({});
</script> 
      <!--r-3-->
      <div class="xub-server">
        <div class="xubs-tit"><span class="icon-redbar"></span>会员服务</div>
        <a href="<?php echo $MODULE['1']['linkurl'];?>vip" rel="nofollow" target="_blank"> <span style="top: 0px;"> <i class="icon-vip"></i>
        <p class="xubs-name"><?php echo VIP;?></p>
        </span> </a> <a href="<?php echo $MODULE['2']['linkurl'];?>trade.php?action=index" rel="nofollow" target="_blank"> <span style="top: 0px;"> <i class="icon-sddd"></i>
        <p class="xubs-name">收到订单</p>
        </span> </a> <a href="<?php echo $MODULE['2']['linkurl'];?>trade.php?action=order" rel="nofollow" target="_blank"> <span style="top: 0px;"> <i class="icon-mdsp"></i>
        <p class="xubs-name">买的商品</p>
        </span> </a> <a href="<?php echo $MODULE['2']['linkurl'];?>trade.php?action=express" rel="nofollow" target="_blank"> <span style="top: 0px;"> <i class="icon-wdkd"></i>
        <p class="xubs-name">我的快递</p>
        </span> </a> <a href="<?php echo $EXT['gift_url'];?>index2.php" rel="nofollow" target="_blank"> <span style="top: 0px;"> <i class="icon-jfcs"></i>
        <p class="xubs-name">积分商城</p>
        </span> </a> <a href="<?php echo $EXT['ad_url'];?>" rel="nofollow" target="_blank"> <span style="top: 0px;"> <i class="icon-adfw"></i>
        <p class="xubs-name">广告服务</p>
        </span> </a> </div>
      <!--r-3 END--> 
      
    </div>
  </div>
</div>
<!--cont-->
<div class="mainBgWrap clearfix" id="mainBgWrapHome">
<!--p2-->
<div class="m ping_2 mt20">
  <ul class="rowof4 row f-cb"><!--4大图-->
  <li class="pic"><a target="_blank" href="#" title=""><img title="" alt="" src="<?php echo DT_SKIN;?>images/aa/mall/p_2_aa1.jpg"></a></li>
  <li class="pic"><a target="_blank" href="#" title=""><img title="" alt="" src="<?php echo DT_SKIN;?>images/aa/mall/p_2_aa2.jpg"></a></li>
  <li class="pic"><a target="_blank" href="#" title=""><img title="" alt="" src="<?php echo DT_SKIN;?>images/aa/mall/p_2_aa3.jpg"></a></li>
  <li class="pic"><a target="_blank" href="#" title=""><img title="" alt="" src="<?php echo DT_SKIN;?>images/aa/mall/p_2_aa4.jpg"></a></li>
  <li class="pic no_mr"><a target="_blank" href="#" title=""><img title="" alt="" src="<?php echo DT_SKIN;?>images/aa/mall/p_2_aa5.jpg"></a></li>
  </ul>
</div>
<!--p-3-->
<div class="m ping_3 mt20" id="20170704xh1">
  <div class="m-dailylimit">
    <h2 class="w-tit1 w-tit1-1 tit"><span class="big">今日限时购</span><span id="times" class="timebox"></span><a class="more" href="<?php echo $MODULE['2']['linkurl'];?>grade.php" target="_blank">我也要出现在这里&gt;</a></h2>
    <div class="cnt f-cb">
      <ul class="goodslist" id="dao">
        <?php echo tag("moduleid=$moduleid&length=30&condition=status=3 and level=1&areaid=$cityid&pagesize=4&order=".$MOD['order']."&width=188&height=188&page=1&lazy=$lazy&dir=xhtag&target=_blank&template=mall-thumb-xianshigou");?>
      </ul>
      <ul class="goodslist" id="daoend" style="display:none;">
        <?php echo tag("moduleid=$moduleid&length=30&condition=status=3 and level=1&areaid=$cityid&pagesize=4&order=".$MOD['order']."&width=188&height=188&page=2&lazy=$lazy&dir=xhtag&target=_blank&template=mall-thumb-xianshigou-tow");?>
      </ul>
      <div class="aside">
        <li class="pic"><a href="#" target="_blank"><img src="<?php echo DT_SKIN;?>images/aa/mall/p_3_aa1.jpg"></a></li>
      </div>
    </div>
  </div>
</div>
<!--p-4-->
<div class="m m-recomds-new mt20" id="20170704xh2">
  <h2 class="w-tit1 w-tit1-1"><span class="big">每日上新</span>全世界好物，0点更新<a class="more" href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_my'];?>?mid=16&action=add" target="_blank">我也要发布现货&gt;</a></h2>
  <div class="itmBox">
    <ul class="f-cb itmWrap">
  <?php echo tag("moduleid=$moduleid&length=30&condition=status=3&areaid=$cityid&order=".$MOD['order']."&width=175&height=157&target=_blank&lazy=$lazy&pagesize=10&dir=xhtag&template=mall-thumb-newpin");?>
  <li class="itm itm-entra" style="background: url(&quot;<?php echo DT_SKIN;?>images/mall/j17sa7wz03_199_230.jpg&quot;) 0% 50% no-repeat rgb(255, 255, 255);"><a target="_blank" href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_my'];?>?mid=16&action=add"><span class="date"><b class="month f-act">
<script language="javascript">
d=new Date();
date=d.getDate();
month=d.getMonth()+1;
year=d.getYear();
document.write(month);
</script>
</b><i>.</i><b class="day f-act">
<script language="javascript">
d=new Date();
date=d.getDate();
month=d.getMonth()+1;
year=d.getYear();
document.write(date);
</script>
</b></span></a></li>
    </ul>
  </div>
</div>
<!--p-5-->
<?php $mid=$moduleid?>
<?php $malllou = get_maincat(0,$mid,1);?>
<?php if(is_array($malllou)) { foreach($malllou as $i => $c) { ?>
<?php $kk=$i+1?>
<?php if($i < 5) { ?>
<div class="m ping mt20" id="20170704xh<?php echo $i+3;?>">
<dl>
  <dt class="topic <?php if($i==0) { ?>blue<?php } else if($i==1) { ?>purple<?php } else if($i==2) { ?>brown<?php } else if($i==3) { ?>green<?php } else if($i==4) { ?>red<?php } else { ?>brown<?php } ?>
">
      <h3><i class="louico"><?php echo $kk;?>F</i><a target="_blank" href="<?php echo $MODULE[$mid]['linkurl'];?><?php echo $c['linkurl'];?>"><?php echo $c['catname'];?></a></h3>
      <a href="<?php echo $MODULE[$mid]['linkurl'];?><?php echo $c['linkurl'];?>" class="more">+More</a>
    <ul>
    <?php if($c['child']) { ?>
    <?php $malllousub = get_maincat($c['catid'],$mid,2);?>
    <?php if(is_array($malllousub)) { foreach($malllousub as $j => $s) { ?><?php if($j < 6) { ?>
    <li><a target="_blank" href="<?php echo $MODULE[$mid]['linkurl'];?><?php echo $s['linkurl'];?>" title="<?php echo $s['alt'];?>"><?php echo $s['catname'];?></a></li>
    <?php } ?>
<?php } } ?>
    <?php } ?>
         </ul>
        </dt>
        <dd>
      <div class="forum-adv">
      <div class="forum-adv-s">
      <div class="forum-adv-s-img"><!--楼层左侧大图-->
      <?php if($kk==1) { ?>
      <a href="<?php echo $MODULE[$mid]['linkurl'];?><?php echo $c['linkurl'];?>" title="<?php echo $c['catname'];?>" target="_blank">
         <img alt="<?php echo $c['catname'];?>" src="<?php echo DT_SKIN;?>images/aa/mall/p_5_l_aa1.jpg" style="opacity: 1;"></a>
      <?php } else if($kk==2) { ?>
       <a href="<?php echo $MODULE[$mid]['linkurl'];?><?php echo $c['linkurl'];?>" title="<?php echo $c['catname'];?>" target="_blank">
         <img alt="<?php echo $c['catname'];?>" src="<?php echo DT_SKIN;?>images/aa/mall/p_5_l_aa2.jpg" style="opacity: 1;"></a>
      <?php } else if($kk==3) { ?>
       <a href="<?php echo $MODULE[$mid]['linkurl'];?><?php echo $c['linkurl'];?>" title="<?php echo $c['catname'];?>" target="_blank">
         <img alt="<?php echo $c['catname'];?>" src="<?php echo DT_SKIN;?>images/aa/mall/p_5_l_aa3.jpg" style="opacity: 1;"></a>
      <?php } else if($kk==4) { ?>
       <a href="<?php echo $MODULE[$mid]['linkurl'];?><?php echo $c['linkurl'];?>" title="<?php echo $c['catname'];?>" target="_blank">
         <img alt="<?php echo $c['catname'];?>" src="<?php echo DT_SKIN;?>images/aa/mall/p_5_l_aa4.jpg" style="opacity: 1;"></a>
      <?php } else if($kk==5) { ?>
       <a href="<?php echo $MODULE[$mid]['linkurl'];?><?php echo $c['linkurl'];?>" title="<?php echo $c['catname'];?>" target="_blank">
         <img alt="<?php echo $c['catname'];?>" src="<?php echo DT_SKIN;?>images/aa/mall/p_5_l_aa5.jpg" style="opacity: 1;"></a>
      <?php } else { ?>
      <a href="<?php echo $MODULE[$mid]['linkurl'];?><?php echo $c['linkurl'];?>" title="<?php echo $c['catname'];?>" target="_blank">
         <img alt="<?php echo $c['catname'];?>" src="<?php echo DT_SKIN;?>images/aa/mall/p_5_l_aa6.jpg" style="opacity: 1;"></a>
      <?php } ?>
      </div>
   <div class="hy_lc_box_bg">
   <div class="hy_lc_box_bg_li">
   <span class="hy_lc hybg<?php echo $kk;?>">热门推荐</span>
    <ul class="forum-adv-text">
    <?php if($c['child']) { ?>
    <?php $malllousub = get_maincat($c['catid'],$mid,1);?>
    <?php if(is_array($malllousub)) { foreach($malllousub as $j => $s) { ?><?php if($j < 6) { ?>
    <li><a target="_blank" href="<?php echo $MODULE[$mid]['linkurl'];?><?php echo $s['linkurl'];?>" title="<?php echo $s['alt'];?>" class="child-name"><?php echo $s['catname'];?></a></li>
    <?php } ?>
<?php } } ?>
    <?php } ?>
      </ul>
      </div> 
       </div> 
    </div>
 <div class="forum-adv-x">
<div class="forum-hotproductT">
<h2>热销现货</h2>
<a class="forum-hotproductT_Ar prev"></a>
<a class="forum-hotproductT_Al next"></a>
</div>
<div class="forum-hotproductC">
<ul>
  <?php echo tag("moduleid=$moduleid&catid=".$c['catid']."&length=36&condition=status=3 and thumb<>''&areaid=$cityid&pagesize=5&order=hits desc,vip desc,addtime desc&width=170&height=170&cols=1&target=_blank&lazy=$lazy&dir=xhtag&template=mall-thumb-table");?> 
  </ul>
</div>
<script type="text/javascript">
jQuery(".forum-adv-x").slide({titCell:".forum-hotproductT ul",mainCell:".forum-hotproductC ul",autoPage:true,effect:"left",autoPlay:true,vis:1,easing:"easeOutCirc",delayTime:700,trigger:"click"});
</script>
    </div>
      </div>
    <div class="forum-pros">
    <ul class="forum-pros-list">
    <?php echo tag("moduleid=$moduleid&catid=".$c['catid']."&condition=status=3&areaid=$cityid&pagesize=8&order=addtime desc&length=28&lazy=$lazy&dir=xhtag&template=mall-thumb-lour");?>
    </ul>
     <div class="forum-adv-r-img"><!--楼层右侧3广告图-->
      <?php if($kk==1) { ?>
     <li><a href="#" title="广告招商1" target="_blank">
         <img alt="广告招商1" src="<?php echo DT_SKIN;?>images/aa/mall/p_5_r_aa1.png" style="opacity: 1;"></a></li>
     <li><a href="#" title="广告招商2" target="_blank">
         <img alt="广告招商2" src="<?php echo DT_SKIN;?>images/aa/mall/p_5_r_aa2.png" style="opacity: 1;"></a></li>
     <li class="no_mr"><a href="#" title="广告招商3" target="_blank">
         <img alt="广告招商3" src="<?php echo DT_SKIN;?>images/aa/mall/p_5_r_aa3.png" style="opacity: 1;"></a></li>
      <?php } else if($kk==2) { ?>
     <li><a href="#" title="广告招商1" target="_blank">
         <img alt="广告招商1" src="<?php echo DT_SKIN;?>images/aa/mall/p_5_r_aa3.png" style="opacity: 1;"></a></li>
     <li><a href="#" title="广告招商2" target="_blank">
         <img alt="广告招商2" src="<?php echo DT_SKIN;?>images/aa/mall/p_5_r_aa2.png" style="opacity: 1;"></a></li>
     <li class="no_mr"><a href="#" title="广告招商3" target="_blank">
         <img alt="广告招商3" src="<?php echo DT_SKIN;?>images/aa/mall/p_5_r_aa1.png" style="opacity: 1;"></a></li>
      <?php } else if($kk==3) { ?>
     <li><a href="#" title="广告招商1" target="_blank">
         <img alt="广告招商1" src="<?php echo DT_SKIN;?>images/aa/mall/p_5_r_aa2.png" style="opacity: 1;"></a></li>
     <li><a href="#" title="广告招商2" target="_blank">
         <img alt="广告招商2" src="<?php echo DT_SKIN;?>images/aa/mall/p_5_r_aa1.png" style="opacity: 1;"></a></li>
     <li class="no_mr"><a href="#" title="广告招商3" target="_blank">
         <img alt="广告招商3" src="<?php echo DT_SKIN;?>images/aa/mall/p_5_r_aa3.png" style="opacity: 1;"></a></li>
      <?php } else if($kk==4) { ?>
     <li><a href="#" title="广告招商1" target="_blank">
         <img alt="广告招商1" src="<?php echo DT_SKIN;?>images/aa/mall/p_5_r_aa2.png" style="opacity: 1;"></a></li>
     <li><a href="#" title="广告招商2" target="_blank">
         <img alt="广告招商2" src="<?php echo DT_SKIN;?>images/aa/mall/p_5_r_aa3.png" style="opacity: 1;"></a></li>
     <li class="no_mr"><a href="#" title="广告招商3" target="_blank">
         <img alt="广告招商3" src="<?php echo DT_SKIN;?>images/aa/mall/p_5_r_aa1.png" style="opacity: 1;"></a></li>
      <?php } else if($kk==5) { ?>
     <li><a href="#" title="广告招商1" target="_blank">
         <img alt="广告招商1" src="<?php echo DT_SKIN;?>images/aa/mall/p_5_r_aa3.png" style="opacity: 1;"></a></li>
     <li><a href="#" title="广告招商2" target="_blank">
         <img alt="广告招商2" src="<?php echo DT_SKIN;?>images/aa/mall/p_5_r_aa1.png" style="opacity: 1;"></a></li>
     <li class="no_mr"><a href="#" title="广告招商3" target="_blank">
         <img alt="广告招商3" src="<?php echo DT_SKIN;?>images/aa/mall/p_5_r_aa2.png" style="opacity: 1;"></a></li>
      <?php } else { ?>
     <li><a href="#" title="广告招商1" target="_blank">
         <img alt="广告招商1" src="<?php echo DT_SKIN;?>images/aa/mall/p_5_r_aa1.png" style="opacity: 1;"></a></li>
     <li><a href="#" title="广告招商2" target="_blank">
         <img alt="广告招商2" src="<?php echo DT_SKIN;?>images/aa/mall/p_5_r_aa2.png" style="opacity: 1;"></a></li>
     <li class="no_mr"><a href="#" title="广告招商3" target="_blank">
         <img alt="广告招商3" src="<?php echo DT_SKIN;?>images/aa/mall/p_5_r_aa3.png" style="opacity: 1;"></a></li>
      <?php } ?>
      </div>
    </div>
        </dd>
    </dl>
</div>
<?php } ?>
<?php } } ?>
<!--p-6热销产品推荐开始-->
<div class="m hotproduct mt20" id="20170704xh8">
<div class="hotproductT">
<h2>热销现货推荐<b><a href="<?php echo $MODULE['2']['linkurl'];?>grade.php">我也想出现在这里</a></b></h2>
<a class="hotproductT_Ar prev"></a>
<a class="hotproductT_Al next"></a>
</div>
<div class="hotproductC">
<ul>
  <?php echo tag("moduleid=$moduleid&length=36&condition=status=3 and level>0 and thumb<>''&areaid=$cityid&pagesize=15&order=hits desc,vip desc,addtime desc&width=180&height=180&cols=5&target=_blank&lazy=$lazy&dir=xhtag&template=mall-thumb-table");?> 
  </ul>
</div>
</div>
<script type="text/javascript">
jQuery(".hotproduct").slide({titCell:".hotproductT ul",mainCell:".hotproductC ul",autoPage:true,effect:"left",autoPlay:true,vis:5,easing:"easeOutCirc",delayTime:700,trigger:"click"});
</script>
<!---热销产品推荐结束-->
<!--p-7按行业找货源-->
<div class="m com-cat mt20" id="20170704xh9">
<h3>按行业找货源<b>查看来自各行各业的现货货源</b></h3>
 <div class="com-div">
   <ul class="com-list">
   <?php $mid = $moduleid;?>
   <?php $child = get_maincat(0, $mid, 1);?>
   <?php if(is_array($child)) { foreach($child as $i => $c) { ?>
  <li><a href="<?php echo $MOD['linkurl'];?><?php echo $c['linkurl'];?>" title="<?php echo $c['catname'];?>"><?php echo $c['catname'];?></a></li>
   <?php } } ?>
   </ul>
 </div>
</div>
<!--p-8按地区找货源-->
<div class="m com-cat mt20" id="hotproduct">
<h3>按地区找货源<b>查看来自全国各地的现货货源</b></h3>
 <div class="com-div">
   <ul class="com-list">
  <?php $mainarea = get_mainarea(0)?>
  <?php if(is_array($mainarea)) { foreach($mainarea as $k => $v) { ?>
  <li><a href="<?php echo $MOD['linkurl'];?>search.php?areaid=<?php echo $v['areaid'];?>" title="<?php echo $v['areaname'];?>" rel="nofollow"><?php echo $v['areaname'];?></a></li>
   <?php } } ?>
   </ul>
 </div>
</div>
<SCRIPT LANGUAGE="JavaScript">
// 每天限购倒计时
    var now = new Date();//当前时间
    var isjx=0;
    function GetServerTime(){
            var d= now.getYear()+"/"+now.getMonth()+"/"+now.getDate()+" 00:00:00";//设置每天的00.:00 为节点
            var urodz = new Date(d); 
            now.setTime(now.getTime()+250); 
            days = (urodz - now) / 1000 / 60 / 60 / 24; 
            daysRound = Math.floor(days); 
            hours = (urodz - now) / 1000 / 60 / 60 - (24 * daysRound); 
            hoursRound = Math.floor(hours); 
            minutes = (urodz - now) / 1000 /60 - (24 * 60 * daysRound) - (60 * hoursRound); 
            minutesRound = Math.floor(minutes); 
            seconds = (urodz - now) / 1000 - (24 * 60 * 60 * daysRound) - (60 * 60 * hoursRound) - (60 * minutesRound); 
            secondsRound = Math.round(seconds);          
            if((hoursRound==0 && minutesRound==0 && secondsRound==0)){//都等于0 说明过了00:00
                isjx=1;
            }
            //判断今天还是明天
            if(isjx==0 && (parseFloat(now.toTimeString().substr(0,2)+ now.toTimeString().substr(3,3).substr(0,2)+now.toTimeString().substr(6,7) )<=162959)){
               document.getElementById("times").innerHTML = "本场抢购还剩<span>"+hoursRound + "</span>小时<span>" + minutesRound + "</span>分钟<span>" + secondsRound +"</span>秒" ; 
            }else  {
             //否则
               document.getElementById("times").innerHTML = "离下一场抢购还有<span>"+hoursRound + "</span>小时<span>" + minutesRound + "</span>分钟<span>" + secondsRound +"</span>秒" ; 
            }
      if(isjx==0 && (parseFloat(now.toTimeString().substr(0,2)+ now.toTimeString().substr(3,3).substr(0,2)+now.toTimeString().substr(6,7) )<=162959)){
            //判断今天还是明天
            $("#dao").hide();
            //第一场隐藏
            $("#daoend").show();
            //第二场开始
        }else{
        //否则
           $("#dao").show();
           //第一场开始
           $("#daoend").hide();
           //第二场隐藏
          }
    }
 setInterval("GetServerTime()",250);
</script> 
<!--左侧导航-->
<div id="indexleft" class="m-indexleft arx_list_info" style="position:absolute; top: 0px;">
<a class="topImg" href="#" target="_blank"><img src="<?php echo DT_SKIN;?>images/mall/dh_70_35.jpg"></a>
<ul class="channel_dh">
<li><a href="#20170704xh1" class="j-floor" data-id="20170704xh1">今日限时购</a></li>
<li><a href="#20170704xh2" class="j-floor" data-id="20170704xh2">每日上新</a></li>
</ul>
<ul class="floor_dh">
<li><a href="#20170704xh3" class="j-floor" data-id="20170704xh3">1F食品</a></li>
<li><a href="#20170704xh4" class="j-floor" data-id="20170704xh4">2F管道</a></li>
<li><a href="#20170704xh5" class="j-floor" data-id="20170704xh5">3F商储</a></li>
<li><a href="#20170704xh6" class="j-floor" data-id="20170704xh6">4F橡塑</a></li>
<li><a href="#20170704xh7" class="j-floor" data-id="20170704xh7">5F农机</a></li>
</ul>
<ul class="channel_dh">
<li><a href="#20170704xh8" class="j-floor" data-id="20170704xh8">热销现货</a></li>
<li><a href="#20170704xh9" class="j-floor" data-id="20170704xh9">行业找现货</a></li>
<li><a href="#hotproduct" class="j-floor" data-id="hotproduct">地区找现货</a></li>
</ul>
</div>
</div>
<?php include template('footer');?>