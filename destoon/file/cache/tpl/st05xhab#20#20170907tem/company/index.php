<?php defined('IN_DESTOON') or exit('Access Denied');?><?php $CSS = array('company');?>
<?php include template('header');?>
<link rel="stylesheet" type="text/css" href="<?php echo DT_SKIN;?>ppad-company.css">
<!--1ping S-->
<div class="layout primary">
   <div class="main">
    <div class="banner" id="banner">
      <div class="gallery rel" id="focus">
         <ul>
    <li><a href="/" target="_blank"><img src="<?php echo DT_SKIN;?>images/aa/com/com-da-01.jpg" height="360" width="895" alt=""></a></li>
    <li><a href="/" target="_blank"><img src="<?php echo DT_SKIN;?>images/aa/com/com-da-02.jpg" height="360" width="895" alt=""></a></li>
    <li><a href="/" target="_blank"><img src="<?php echo DT_SKIN;?>images/aa/com/com-da-03.jpg" height="360" width="895" alt=""></a></li>
    <li><a href="/" target="_blank"><img src="<?php echo DT_SKIN;?>images/aa/com/com-da-04.jpg" height="360" width="895" alt=""></a></li>
       </ul>
        <i class="adicon"></i>
         </div>
            </div>
            <div class="com_brand unit">
                <ul class="brand-list clf">
    <?php echo tag("moduleid=$moduleid&condition=level>0 and catids<>''&areaid=$cityid&pagesize=5&order=vip desc&dir=xhtag&template=xiaohei-com-1");?>
           </ul>
            </div>
        </div>
        <div class="side">
            <div class="user unit">
                <div class="js-tab">
                    <div class="tab-nav hd clf">
                        <ul>
                        <li class="tn-item on">采购会员</li>
                        <li class="tn-item2">供应商</li>
                        </ul>
                    </div>
                    <div class="bd">
                    <ul class="tab-con">
                        <div class="login">
                             <div class="btn-wrap clf">
        <!--会员在线状态 S-->
        <div class="xh_dl">
        <a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_login'];?>" class="sign-in" target="_blank">登录</a><a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_register'];?>" class="sign-up" target="_blank">注册</a>
        </div>
        <div class="xh_dl_2_no">
        <a href="<?php echo $MODULE['2']['linkurl'];?>" class="sign-in" target="_blank" rel="nofollow">商务中心</a><a href="<?php echo $MODULE['2']['linkurl'];?>logout.php" class="sign-up" rel="nofollow">退出</a>
        </div>
        <!--会员在线状态 END-->
                             </div>
                            <ul class="opt-list clf">
                                <li class="ol-itm"><a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_my'];?>?mid=6" target="_blank">我的采购需求</a></li>
                                <li class="ol-itm"><a href="<?php echo $MODULE['2']['linkurl'];?>friend.php" target="_blank">我的货源商友</a></li>
                                <li class="ol-itm"><a href="<?php echo $MODULE['2']['linkurl'];?>favorite.php" target="_blank">收藏的商机</a></li>
                                <li class="ol-itm"><a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_my'];?>?mid=6&action=add" target="_blank">发布快速采购</a></li>
                            </ul>
                        </div>
                    </ul>
        <ul class="tab-con">
        <div class="login">
        <div class="btn-wrap clf">
        <!--会员在线状态 S-->
        <div class="xh_dl_x">
        <a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_login'];?>" class="sign-in" target="_blank">登录</a><a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_register'];?>" class="sign-up" target="_blank">注册</a>
        </div>
        <div class="xh_dl_x_2_no">
        <a href="<?php echo $MODULE['2']['linkurl'];?>" class="sign-in" target="_blank" rel="nofollow">商务中心</a><a href="<?php echo $MODULE['2']['linkurl'];?>logout.php" class="sign-up" rel="nofollow">退出</a>
        </div>
        <!--会员在线状态 END-->
                           </div>
                                <ul class="opt-list clf js-count-info">
                                <li class="ol-itm"><a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_my'];?>?mid=5" target="_blank">我的货源产品</a></li>
                                <li class="ol-itm"><a href="<?php echo $MODULE['2']['linkurl'];?>message.php" target="_blank">我收到的询盘</a></li>
                                <li class="ol-itm"><a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_my'];?>?mid=5&action=add" target="_blank">发布新货源产品</a></li>
                                <li class="ol-itm"><a href="<?php echo $MODULE['2']['linkurl'];?>message.php" target="_blank">收到的消息通知</a></li>
                            </ul>
                        </div>
                    </ul>
                   </div>
                </div>
            </div>
           <script type="text/javascript">
               jQuery(".js-tab").slide({});
           </script>
            <div class="expert unit mt-20">
                <div class="js-tab-2">
                    <div class="tab-nav hd clf">
                    <ul>
                        <li class="tn-item on">最新入驻商家</li>
                        <li class="tn-item2">常用工具</li>
                    </ul>
                    </div>
                     <div class="bd">
                     <ul>
                     <div class="tab-con">
                        <ul class="expert-list">
                        <?php echo tag("moduleid=$moduleid&condition=groupid>5 and catids<>''&areaid=$cityid&pagesize=5&order=userid desc&dir=xhtag&template=xiaohei-com-newzhu");?>
                         </ul>
                        <div class="notice">
                            <i class="i-notice"></i>
                            <?php echo tag("table=announce&condition=totime=0 or totime>$today_endtime-86400&areaid=$cityid&pagesize=1&order=listorder desc,addtime desc&length=26&cname=公告&dir=xhtag&template=xiaohei-gonggaocom");?>
                        </div>
                    </div>
                   </ul>
                   <ul>
                    <div class="tab-con">
                        <ul class="tool-list">
                            <li class="tl-itm">
                                <a href="<?php echo $MODULE['1']['linkurl'];?>api/go.php?url=https://www.hao123.com/haoserver/kuaidi.htm" target="_blank" class="c80">
                                    <i class="i-tool1"></i>
                                    <p>快递查询</p>
                                </a>
                            </li>
                            <li class="tl-itm">
                                <a href="<?php echo $MODULE['1']['linkurl'];?>api/go.php?url=http://www.12306.cn/" target="_blank" class="c80">
                                    <i class="i-tool2"></i>
                                    <p>火车票</p>
                                </a>
                            </li>
                            <li class="tl-itm">
                                <a href="<?php echo $MODULE['1']['linkurl'];?>api/go.php?url=https://flight.qunar.com/" target="_blank" class="c80">
                                    <i class="i-tool3"></i>
                                    <p>飞机票</p>
                                </a>
                            </li>
                            <li class="tl-itm">
                                <a href="<?php echo $MODULE['1']['linkurl'];?>api/go.php?url=http://policy.mofcom.gov.cn/" target="_blank" class="c80">
                                    <i class="i-tool4"></i>
                                    <p>法律法规</p>
                                </a>
                            </li>
                            <li class="tl-itm">
                                <a href="<?php echo $MODULE['1']['linkurl'];?>api/go.php?url=https://www.hao123.com/sjhmcx" target="_blank" class="c80">
                                    <i class="i-tool5"></i>
                                    <p>手机归属地</p>
                                </a>
                            </li>
                            <li class="tl-itm">
                                <a href="<?php echo $MODULE['1']['linkurl'];?>api/go.php?url=http://hotel.qunar.com/" target="_blank" class="c80">
                                    <i class="i-tool6"></i>
                                    <p>酒店</p>
                                </a>
                            </li>
                            <li class="tl-itm">
                                <a href="<?php echo $MODULE['21']['linkurl'];?>" target="_blank" class="c80">
                                    <i class="i-tool7"></i>
                                    <p>新闻资讯</p>
                                </a>
                            </li>
                            <li class="tl-itm">
                                <a href="<?php echo $MODULE['5']['linkurl'];?>" target="_blank" class="c80">
                                    <i class="i-tool8"></i>
                                    <p>货源库</p>
                                </a>
                            </li>
                            <li class="tl-itm">
                                <a href="<?php echo $MODULE['6']['linkurl'];?>" target="_blank" class="c80">
                                    <i class="i-tool9"></i>
                                    <p>大宗采购</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                    </ul>
                </div>
          <script type="text/javascript">
               jQuery(".js-tab-2").slide({});
           </script>
            </div>
            </div>
        </div>
    </div>
<!--2ping S-->
<div class="layout recommend mt-20">
        <div class="main supplier">
            <div class="supplier-slide">
            <ul>
    <?php echo tag("moduleid=$moduleid&condition=level>1 and thumb!='' and catids<>''&areaid=$cityid&pagesize=9&order=vip desc&dir=xhtag&template=xiaohei-com-2");?>
                </ul>
                <div class="hd_1">
                <a href="javascript:;" class="prev"></a>
                <a href="javascript:;" class="next"></a>
                </div>
            </div>
   <script type="text/javascript">         
      jQuery(".supplier").slide({titCell:".hd_1 ul",mainCell:".supplier-slide ul",autoPage:true,effect:"fade",vis:1});
</script>
        </div>
        <div class="side">
            <div class="area unit">
                <div class="com_tit">按地区查找实力工厂/供应商</div>
                <div class="city">
                    <dl class="area-row">
                        <dt>东北</dt>
                        <dd>
                            <a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?areaid=9');?>" target="_blank" class="c61">吉林</a>
                            <a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?areaid=8');?>" target="_blank" class="c61">辽宁</a>
                            <a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?areaid=10');?>" target="_blank" class="c61">黑龙江</a>
                        </dd>
                    </dl>
                    <dl class="area-row">
                        <dt>华北</dt>
                        <dd>
                            <a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?areaid=1');?>" target="_blank" class="c61">北京</a>
                            <a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?areaid=3');?>" target="_blank" class="c61">天津</a>
                            <a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?areaid=5');?>" target="_blank" class="c61">河北</a>
                            <a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?areaid=6');?>" target="_blank" class="c61">山西</a>
                            <a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?areaid=7');?>" target="_blank" class="c61">内蒙古</a>
                        </dd>
                    </dl>
                    <dl class="area-row">
                        <dt>华东</dt>
                        <dd>
                            <a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?areaid=16');?>" target="_blank" class="c61">山东</a>
                            <a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?areaid=11');?>" target="_blank" class="c61">江苏</a>
                            <a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?areaid=13');?>" target="_blank" class="c61">安徽</a>
                            <a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?areaid=12');?>" target="_blank" class="c61">浙江</a>
                            <a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?areaid=14');?>" target="_blank" class="c61">福建</a>
                            <a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?areaid=2');?>" target="_blank" class="c61">上海</a>
                        </dd>
                    </dl>
                    <dl class="area-row">
                        <dt>华中</dt>
                        <dd>
                            <a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?areaid=17');?>" target="_blank" class="c61">河南</a>
                            <a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?areaid=18');?>" target="_blank" class="c61">湖北</a>
                            <a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?areaid=19');?>" target="_blank" class="c61">湖南</a>
                            <a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?areaid=15');?>" target="_blank" class="c61">江西</a>
                        </dd>
                    </dl>
                    <dl class="area-row">
                        <dt>西北</dt>
                        <dd>
                            <a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?areaid=27');?>" target="_blank" class="c61">陕西</a>
                            <a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?areaid=28');?>" target="_blank" class="c61">甘肃</a>
                            <a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?areaid=30');?>" target="_blank" class="c61">宁夏</a>
                            <a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?areaid=31');?>" target="_blank" class="c61">新疆</a>
                            <a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?areaid=29');?>" target="_blank" class="c61">青海</a>
                        </dd>
                    </dl>
                    <dl class="area-row">
                        <dt>华南</dt>
                        <dd>
                            <a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?areaid=20');?>" target="_blank" class="c61">广东</a>
                            <a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?areaid=21');?>" target="_blank" class="c61">广西</a>
                            <a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?areaid=22');?>" target="_blank" class="c61">海南</a>
                            <a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?areaid=33');?>" target="_blank" class="c61">香港</a>
                            <a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?areaid=34');?>" target="_blank" class="c61">澳门</a>
                        </dd>
                    </dl>
                    <dl class="area-row">
                        <dt>西南</dt>
                        <dd>
                            <a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?areaid=23');?>" target="_blank" class="c61">四川</a>
                            <a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?areaid=4');?>" target="_blank" class="c61">重庆</a>
                            <a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?areaid=25');?>" target="_blank" class="c61">云南</a>
                            <a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?areaid=24');?>" target="_blank" class="c61">贵州</a>
                            <a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?areaid=26');?>" target="_blank" class="c61">西藏</a>
                        </dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
<!--3ping-->
<div class="layout activities mt-20">
        <div class="main">
            <div class="hot-active unit">
                <div class="hd">
                    <h4 class="com_tit">热门活动</h4>
                </div>
                <div class="active-slide">
                    <ul class="active-list">
                    <li class="al-li clf">
                              <div class="al-itm">
                                <a href="/" target="_blank" title="" class="c80">
                                    <img src="<?php echo DT_SKIN;?>images/aa/com/com_huo_1_1.jpg" height="122" width="266" alt="">
                                    <p>2.4万小尝试，50万刚开始</p>
                                </a>
                            </div>
                                                <div class="al-itm">
                                <a href="/" target="_blank" title="" class="c80">
                                    <img src="<?php echo DT_SKIN;?>images/aa/com/com_huo_1_2.jpg" height="122" width="266" alt="">
                                    <p>机械行业产品展销</p>
                                </a>
                            </div>
                                  <div class="al-itm">
                                <a href="/" target="_blank" title="" class="c80">
                                    <img src="<?php echo DT_SKIN;?>images/aa/com/com_huo_1_3.jpg" height="122" width="266" alt="">
                                    <p>综合类自动售货机优惠专场</p>
                                </a>
                            </div>
                     </li>
                    <li class="al-li clf">
                              <div class="al-itm">
                                <a href="/" target="_blank" title="" class="c80">
                                    <img src="<?php echo DT_SKIN;?>images/aa/com/com_huo_2_1.jpg"  height="122" width="266" alt="">
                                    <p>抠细节提质量-超硬材料采购专场</p>
                                </a>
                            </div>
                                                <div class="al-itm">
                                <a href="/" target="_blank" title="" class="c80">
                                    <img src="<?php echo DT_SKIN;?>images/aa/com/com_huo_2_2.jpg" height="122" width="266" alt="">
                                    <p>激光切割健身器材</p>
                                </a>
                            </div>
                                                <div class="al-itm">
                                <a href="/" target="_blank" title="" class="c80">
                                    <img src="<?php echo DT_SKIN;?>images/aa/com/com_huo_2_3.jpg" height="122" width="266" alt="">
                                    <p>5月游乐设备欢乐购</p>
                                </a>
                             </div>
                      </li>
                    <li class="al-li clf">
                              <div class="al-itm">
                                <a href="/" target="_blank" title="" class="c80">
                                    <img src="<?php echo DT_SKIN;?>images/aa/com/com_huo_3_1.jpg" height="122" width="266" alt="">
                                    <p>流动榨油坊，街边榨油店——榨油机工厂店</p>
                                </a>
                            </div>
                                                <div class="al-itm">
                                <a href="/" target="_blank" title="" class="c80">
                                    <img src="<?php echo DT_SKIN;?>images/aa/com/com_huo_3_2.jpg" height="122" width="266" alt="">
                                    <p>辊轴产品展示专场</p>
                                </a>
                            </div>
                                                <div class="al-itm">
                                <a href="/" target="_blank" title="" class="c80">
                                    <img src="<?php echo DT_SKIN;?>images/aa/com/com_huo_3_3.jpg" height="122" width="266" alt="">
                                    <p>精益求精求完美-水泵厂家直销</p>
                                </a>
                            </div>
                    </li>  
                    </ul>
                </div>
            <div class="hd_2">
                <a href="javascript:;" class="prev"></a>
                <a href="javascript:;" class="next"></a>
            </div>
            </div>
<script type="text/javascript">         
    jQuery(".hot-active").slide({titCell:".hd_2 ul",mainCell:".active-slide ul",autoPage:true,effect:"fade",vis:1});
</script>
        </div>
        <div class="side" data-gct="2">
            <div class="active-image img-wrap">
                <a href="<?php echo $EXT['gift_url'];?>index2.php" target="_blank" title="积分商城">
                    <img src="<?php echo DT_SKIN;?>images/aa/com/com_l_1.jpg" width="285" height="234" alt="积分商城">
                </a>
            </div>
        </div>
    </div>
<!--4ping-->
<?php $mid=4?>
<?php $child = get_maincat(0,$mid,1);?>
<?php if(is_array($child)) { foreach($child as $i => $c) { ?>
<?php $kk=$i+1?>
<?php $catid=$c['catid']?>
<?php if($i<6) { ?>
<?php if($i%2==0) { ?>
<div class="layout floor_com floor-container">
<div class="mod-floor floor-wrap lazy-floor">
 <div class="f-wrap clf" style="display: block;">
 <?php } ?>
 <!--1 S-->
    <div class="f-box">
        <div class="f-cate unit unit_2 js-tab-floor">
            <div class="f-head">
                <h3 class="f-title"><?php echo $c['catname'];?></h3>
                <div class="f-more">
                <div class="f_l hd">
                    <ul>
                        <li class="tab-nav">热门</li>
                        <li class="tab-nav">活动<i class="i-mark"></i></li>
                        </ul>
                  </div>
                  <div class="f_l">
    <?php $sub = get_maincat($c['catid'],$mid,1);?>
        <?php if(is_array($sub)) { foreach($sub as $j => $s) { ?>
        <?php if($j<4) { ?>
    <li class="link"><a href="<?php echo $MODULE[$mid]['linkurl'];?><?php echo $s['linkurl'];?>" target="_blank" class="c80"><?php echo set_style($s['catname'], $s['style']);?></a></li>
        <?php } ?>
        <?php } } ?> 
 <li class="link geng"><a href="<?php echo $MODULE[$mid]['linkurl'];?><?php echo $c['linkurl'];?>" target="_blank" class="c80">更多</a></li>
                 </div>
                </div>
            </div>
 <!--1-热门推荐厂商 S-->
          <div class="bd">
          <ul>
            <div class="js-tab-con clf tab-con-0">
                <div class="f-l">
                    <div class="f-hot">
             <?php echo tag("moduleid=$moduleid&catid=$catid&condition=level=3 and thumb!='' and catids<>''&areaid=$cityid&pagesize=1&order=vip desc&dir=xhtag&template=xiaohei-com-loumini1");?>
                    </div>
                    <div class="f-company">
                    <?php echo tag("moduleid=$moduleid&catid=$catid&condition=level=2 and catids<>''&areaid=$cityid&pagesize=1&order=vip desc&dir=xhtag&template=xiaohei-com-loumini2");?>
                    </div>
                    <div class="f-zone">
                        <p class="com_tit">产业带</p>
                        <ul class="zone-list clf">
                            
                            <li class="zl-itm">
                                <a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?areaid=17&catid='.$catid);?>" target="_blank">河南<?php echo $c['catname'];?></a>
                                <span>|</span>
                            </li>
                            
                            <li class="zl-itm">
                                <a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?areaid=16&catid='.$catid);?>" target="_blank">山东<?php echo $c['catname'];?></a>
                                <span>|</span>
                            </li>
                            
                            <li class="zl-itm">
                                <a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?areaid=5&catid='.$catid);?>" target="_blank">河北<?php echo $c['catname'];?></a>
                                
                            </li>
                            
                        </ul>
                    </div>
                </div>
                <div class="f-r">
                    <ul class="brand-list2">
           <?php echo tag("moduleid=$moduleid&catid=$catid&condition=level=1 and catids<>''&areaid=$cityid&pagesize=3&order=vip desc&dir=xhtag&template=xiaohei-com-loumini3");?>
                    </ul>
                     <ul class="brand-list3">
                     <h3>优质商家<i>最新入驻</i></h3>
           <?php echo tag("moduleid=$moduleid&catid=$catid&condition=groupid>5 and catids<>''&areaid=$cityid&pagesize=8&order=userid desc&dir=xhtag&template=xiaohei-com-loumini4");?>
                    </ul>
                </div>
            </div>
            </ul>
 <!--1-热门推荐厂商 END-->         
 <!--1-活动推荐 S-->
 <ul>
            <div class="js-tab-con clf tab-con-1"> 
                <div class="f-active">
      <?php if($kk==1) { ?>
                    <div class="f-active-item top-item">
                        <div class="f-slide">
                            <ul class="f-active-slide">
                                <li>
                                    <a href="/" target="_blank">
                                        <img src="<?php echo DT_SKIN;?>images/aa/com/com-lou-huo-1-1.jpg" height="242" width="528" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="f-active-item">
                        <div class="f-slide">
                            <ul class="f-active-slide">
                                <li>
                                    <a href="/" target="_blank">
                                        <img src="<?php echo DT_SKIN;?>images/aa/com/com-lou-huo-1-2.jpg" height="242" width="528" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
  <?php } else if($kk==2) { ?>
    <div class="f-active-item top-item">
                        <div class="f-slide">
                            <ul class="f-active-slide">
                                <li>
                                    <a href="/" target="_blank">
                                        <img src="<?php echo DT_SKIN;?>images/aa/com/com-lou-huo-2-1.jpg" height="242" width="528" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="f-active-item">
                        <div class="f-slide">
                            <ul class="f-active-slide">
                                <li>
                                    <a href="/" target="_blank">
                                        <img src="<?php echo DT_SKIN;?>images/aa/com/com-lou-huo-2-2.jpg" height="242" width="528" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
      </div>
 <?php } else if($kk==3) { ?>
    <div class="f-active-item top-item">
                        <div class="f-slide">
                            <ul class="f-active-slide">
                                <li>
                                    <a href="/" target="_blank">
                                        <img src="<?php echo DT_SKIN;?>images/aa/com/com-lou-huo-3-1.jpg" height="242" width="528" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="f-active-item">
                        <div class="f-slide">
                            <ul class="f-active-slide">
                                <li>
                                    <a href="/" target="_blank">
                                        <img src="<?php echo DT_SKIN;?>images/aa/com/com-lou-huo-3-2.jpg" height="242" width="528" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
      </div>
 <?php } else if($kk==4) { ?>
    <div class="f-active-item top-item">
                        <div class="f-slide">
                            <ul class="f-active-slide">
                                <li>
                                    <a href="/" target="_blank">
                                        <img src="<?php echo DT_SKIN;?>images/aa/com/com-lou-huo-4-1.jpg" height="242" width="528" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="f-active-item">
                        <div class="f-slide">
                            <ul class="f-active-slide">
                                <li>
                                    <a href="/" target="_blank">
                                        <img src="<?php echo DT_SKIN;?>images/aa/com/com-lou-huo-4-2.jpg" height="242" width="528" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
      </div>
       <?php } else if($kk==5) { ?>
    <div class="f-active-item top-item">
                        <div class="f-slide">
                            <ul class="f-active-slide">
                                <li>
                                    <a href="/" target="_blank">
                                        <img src="<?php echo DT_SKIN;?>images/aa/com/com-lou-huo-5-1.jpg" height="242" width="528" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="f-active-item">
                        <div class="f-slide">
                            <ul class="f-active-slide">
                                <li>
                                    <a href="/" target="_blank">
                                        <img src="<?php echo DT_SKIN;?>images/aa/com/com-lou-huo-5-2.jpg" height="242" width="528" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
      </div>
       <?php } else if($kk==6) { ?>
    <div class="f-active-item top-item">
                        <div class="f-slide">
                            <ul class="f-active-slide">
                                <li>
                                    <a href="/" target="_blank">
                                        <img src="<?php echo DT_SKIN;?>images/aa/com/com-lou-huo-6-1.jpg" height="242" width="528" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="f-active-item">
                        <div class="f-slide">
                            <ul class="f-active-slide">
                                <li>
                                    <a href="/" target="_blank">
                                        <img src="<?php echo DT_SKIN;?>images/aa/com/com-lou-huo-6-2.jpg" height="242" width="528" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
      </div>
       <?php } else if($kk==7) { ?>
    <div class="f-active-item top-item">
                        <div class="f-slide">
                            <ul class="f-active-slide">
                                <li>
                                    <a href="/" target="_blank">
                                        <img src="<?php echo DT_SKIN;?>images/aa/com/com-lou-huo-7-1.jpg" height="242" width="528" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="f-active-item">
                        <div class="f-slide">
                            <ul class="f-active-slide">
                                <li>
                                    <a href="/" target="_blank">
                                        <img src="<?php echo DT_SKIN;?>images/aa/com/com-lou-huo-7-2.jpg" height="242" width="528" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
      </div>
       <?php } else if($kk==8) { ?>
    <div class="f-active-item top-item">
                        <div class="f-slide">
                            <ul class="f-active-slide">
                                <li>
                                    <a href="/" target="_blank">
                                        <img src="<?php echo DT_SKIN;?>images/aa/com/com-lou-huo-8-1.jpg" height="242" width="528" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="f-active-item">
                        <div class="f-slide">
                            <ul class="f-active-slide">
                                <li>
                                    <a href="/" target="_blank">
                                        <img src="<?php echo DT_SKIN;?>images/aa/com/com-lou-huo-8-2.jpg" height="242" width="528" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
      </div>
       <?php } else { ?>
    <div class="f-active-item top-item">
                        <div class="f-slide">
                            <ul class="f-active-slide">
                                <li>
                                    <a href="/" target="_blank">
                                        <img src="<?php echo DT_SKIN;?>images/aa/com/com-lou-huo-8-1.jpg" height="242" width="528" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="f-active-item">
                        <div class="f-slide">
                            <ul class="f-active-slide">
                                <li>
                                    <a href="/" target="_blank">
                                        <img src="<?php echo DT_SKIN;?>images/aa/com/com-lou-huo-8-2.jpg" height="242" width="528" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
      </div>
      <?php } ?>
 </div>
 </div> 
 </ul>
  <!--1-活动推荐 END-->
<script type="text/javascript">
        jQuery(".js-tab-floor").slide({effect:"top",delayTime:-200});
    </script>  
     </div>   
</div>
<!--1-gg-S-->
<?php if($kk==1) { ?>
        <div class="f-img mt-10 rel">
            <a href="/" target="_blank">
          <img src="<?php echo DT_SKIN;?>images/aa/com/com_lou_1.jpg" height="120" width="590">
            </a>
         <i class="adicon"></i>
        </div>
 <?php } else if($kk==2) { ?>
   <div class="f-img mt-10 rel">
            <a href="/" target="_blank">
                <img src="<?php echo DT_SKIN;?>images/aa/com/com_lou_2.jpg" height="120" width="590">
            </a>
            <i class="adicon"></i>
        </div>
 <?php } else if($kk==3) { ?>
   <div class="f-img mt-10 rel">
            <a href="/" target="_blank">
                <img src="<?php echo DT_SKIN;?>images/aa/com/com_lou_3.jpg" height="120" width="590">
            </a>
            <i class="adicon"></i>
        </div>
  <?php } else if($kk==4) { ?>
   <div class="f-img mt-10 rel">
            <a href="/" target="_blank">
                <img src="<?php echo DT_SKIN;?>images/aa/com/com_lou_4.jpg" height="120" width="590">
            </a>
            <i class="adicon"></i>
        </div>
  <?php } else if($kk==5) { ?>
   <div class="f-img mt-10 rel">
            <a href="/" target="_blank">
                <img src="<?php echo DT_SKIN;?>images/aa/com/com_lou_5.jpg" height="120" width="590">
            </a>
            <i class="adicon"></i>
        </div> 
  <?php } else if($kk==6) { ?>
   <div class="f-img mt-10 rel">
            <a href="/" target="_blank">
                <img src="<?php echo DT_SKIN;?>images/aa/com/com_lou_6.jpg" height="120" width="590">
            </a>
            <i class="adicon"></i>
        </div>
    <?php } else { ?>
   <div class="f-img mt-10 rel">
            <a href="/" target="_blank">
                <img src="<?php echo DT_SKIN;?>images/aa/com/com_lou_7.jpg" height="120" width="590">
            </a>
            <i class="adicon"></i>
        </div>
    <?php } ?>
</div>
<?php if($i%2==1) { ?>   
  </div>   
</div>
</div>
<?php } ?>
<?php } ?>
<?php } } ?>
<!--6ping-->
<div class="layout com-cat mt-20">
<h3>按行业找实力厂商</h3>
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
<!--7ping-->
<div class="layout recommend-product mt-20">
        <h3>您可能感兴趣的货源</h3>
        <div class="recommend-slide">
            <ul class="recommend-list">
    <?php echo tag("moduleid=5&condition=status=3 and level>0 and thumb!=''&areaid=$cityid&pagesize=12&order=addtime desc&length=20&lazy=$lazy&dir=xhtag&template=xiaohei-com-sell");?> 
            </ul>
     <div class="hd_3">
                <a href="javascript:;" class="prev"></a>
                <a href="javascript:;" class="next"></a>
                </div>
            </div>
<script type="text/javascript">         
    jQuery(".recommend-product").slide({titCell:".hd_3 ul",mainCell:".recommend-slide ul",autoPage:true,effect:"fade",vis:1});
</script>
</div>
<?php include template('footer');?>