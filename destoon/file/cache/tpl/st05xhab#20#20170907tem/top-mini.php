<?php defined('IN_DESTOON') or exit('Access Denied');?><div class="header_top">
      <div class="header_l fl">
        <div class="header_login" id="xh_member"></div>
  <div class="telephone_top"><img src="<?php echo DT_SKIN;?>images/ico-minidianhua.png">客服热线：<span><?php echo $DT['telephone'];?></span></div>
        </div>
        <div class="header_nav fr">
            <ul id="jsddm" class="jsddm">
            <?php if(isset($MODULE['16'])) { ?><li class="cart_new"><a href="<?php echo $MODULE['16']['linkurl'];?>cart.php"  target="_blank" rel="nofollow" class="cart_text"><div class="cart_name">我的进货单</div><div class="cart_buy"><span class="cart_mall" id="destoon_cart">0</span></div></a></li><?php } ?>
            <?php if($moduleid>1 || $fuwu=vip) { ?><li><a href="<?php echo $MODULE['1']['linkurl'];?>" rel="nofollow">平台首页</a><span>|</span></li><?php } ?>
               <?php if($EXT['mobile_enable']) { ?><li class="phone-icon" style="display: none;"><a href="<?php echo $EXT['mobile_url'];?>mobile.php" rel="nofollow"><img src="<?php echo DT_SKIN;?>css/img/phone-icon.png"> 手机版</a><span>|</span></li><?php } ?>
<?php if($head_mobile) { ?><li class="er-icon"><a href="javascript:Dqrcode();"><img src="<?php echo DT_SKIN;?>css/img/er-icon.png"> 二维码</a><span>|</span></li><?php } ?>
                <li class="jsl"><a href="javascript:;" class="nav" rel="nofollow">客服中心</a><span>|</span>
                <div class="ut-dwn ut-fw" id="gywm">                        
                        <div class="ut-con">                                                  
                        <div class="last">                                                              
                         <ul class="yhzx">                                    
                         <li class="h-itm"><a href="<?php echo $MODULE['52']['linkurl'];?>" target="_blank" rel="nofollow">帮助中心</a></li> 
                         <li class="h-itm"><a href="<?php echo $EXT['guestbook_url'];?>" target="_blank" rel="nofollow">反馈意见</a></li> 
                         <li class="h-itm"><a href="<?php echo $MODULE['1']['linkurl'];?>about/contact.html" target="_blank" rel="nofollow">联系我们</a></li> 
                         </ul>
                            </div>                        
                        </div>
                    </div>
                </li>

                <li class="jsl">
                <a href="javascript:void(0);" class="nav"  rel="nofollow">网站地图</a>
                    <div class="ut-dwn" id="maps">                        
                        <div class="ut-con ut-mid">                            
                            <div class="ut-row">                                
                                <h4 class="hd">特色频道</h4>                                
                                <ul class="clf"> 
<?php if(isset($MODULE['5'])) { ?><li class="m-li"><a href="<?php echo $MODULE['5']['linkurl'];?>" target="_blank" rel="nofollow"><?php echo $MODULE['5']['name'];?></a><span> | </span></li><?php } ?>
<?php if(isset($MODULE['6'])) { ?><li class="m-li"><a href="<?php echo $MODULE['6']['linkurl'];?>" target="_blank" rel="nofollow"><?php echo $MODULE['6']['name'];?></a><span> | </span></li><?php } ?>
<?php if(isset($MODULE['7'])) { ?><li class="m-li"><a href="<?php echo $MODULE['7']['linkurl'];?>" target="_blank" rel="nofollow"><?php echo $MODULE['7']['name'];?></a><span> | </span></li><?php } ?>
<?php if(isset($MODULE['8'])) { ?><li class="m-li"><a href="<?php echo $MODULE['8']['linkurl'];?>" target="_blank" rel="nofollow"><?php echo $MODULE['8']['name'];?></a><span> | </span></li><?php } ?>
<?php if(isset($MODULE['9'])) { ?><li class="m-li"><a href="<?php echo $MODULE['9']['linkurl'];?>" target="_blank" rel="nofollow"><?php echo $MODULE['9']['name'];?></a><span> | </span></li><?php } ?>
<?php if(isset($MODULE['10'])) { ?><li class="m-li"><a href="<?php echo $MODULE['10']['linkurl'];?>" target="_blank" rel="nofollow"><?php echo $MODULE['10']['name'];?></a><span> | </span></li><?php } ?>
<?php if(isset($MODULE['11'])) { ?><li class="m-li"><a href="<?php echo $MODULE['11']['linkurl'];?>" target="_blank" rel="nofollow"><?php echo $MODULE['11']['name'];?></a><span> | </span></li><?php } ?>
<?php if(isset($MODULE['12'])) { ?><li class="m-li"><a href="<?php echo $MODULE['12']['linkurl'];?>" target="_blank" rel="nofollow"><?php echo $MODULE['12']['name'];?></a><span> | </span></li><?php } ?>
<?php if(isset($MODULE['13'])) { ?><li class="m-li"><a href="<?php echo $MODULE['13']['linkurl'];?>" target="_blank" rel="nofollow"><?php echo $MODULE['13']['name'];?></a><span> | </span></li><?php } ?>
<?php if(isset($MODULE['14'])) { ?><li class="m-li"><a href="<?php echo $MODULE['14']['linkurl'];?>" target="_blank" rel="nofollow"><?php echo $MODULE['14']['name'];?></a><span> | </span></li><?php } ?>
<?php if(isset($MODULE['15'])) { ?><li class="m-li"><a href="<?php echo $MODULE['15']['linkurl'];?>" target="_blank" rel="nofollow"><?php echo $MODULE['15']['name'];?></a><span> | </span></li><?php } ?>
<?php if(isset($MODULE['16'])) { ?><li class="m-li"><a href="<?php echo $MODULE['16']['linkurl'];?>" target="_blank" rel="nofollow"><?php echo $MODULE['16']['name'];?></a><span> | </span></li><?php } ?>
<?php if(isset($MODULE['17'])) { ?><li class="m-li"><a href="<?php echo $MODULE['17']['linkurl'];?>" target="_blank" rel="nofollow"><?php echo $MODULE['17']['name'];?></a><span> | </span></li><?php } ?>
<?php if(isset($MODULE['18'])) { ?><li class="m-li"><a href="<?php echo $MODULE['18']['linkurl'];?>" target="_blank" rel="nofollow"><?php echo $MODULE['18']['name'];?></a><span> | </span></li><?php } ?>
<?php if(isset($MODULE['21'])) { ?><li class="m-li"><a href="<?php echo $MODULE['21']['linkurl'];?>" target="_blank" rel="nofollow"><?php echo $MODULE['21']['name'];?></a><span> | </span></li><?php } ?>
<?php if(isset($MODULE['22'])) { ?><li class="m-li"><a href="<?php echo $MODULE['22']['linkurl'];?>" target="_blank" rel="nofollow"><?php echo $MODULE['22']['name'];?></a><span> | </span></li><?php } ?>
<?php if(isset($MODULE['23'])) { ?><li class="m-li"><a href="<?php echo $MODULE['23']['linkurl'];?>"  target="_blank" rel="nofollow"><?php echo $MODULE['23']['name'];?></a><span> | </span></li><?php } ?>
<?php if(isset($MODULE['24'])) { ?><li class="m-li"><a href="<?php echo $MODULE['24']['linkurl'];?>" target="_blank" rel="nofollow"><?php echo $MODULE['24']['name'];?></a><span> | </span></li><?php } ?>
<li class="m-li"><a href="<?php echo $MODULE['4']['linkurl'];?>" target="_blank" rel="nofollow"><?php echo $MODULE['4']['name'];?></a></li>
                                </ul>                           
                            </div> 
<div class="ut-row">                                
      <h4 class="hd">扩展专区</h4>                                
        <ul class="clf">
      <li class="m-li"><a href="<?php echo $EXT['spread_url'];?>" target="_blank" rel="nofollow">排名推广</a></li>                  
      <?php if($EXT['gift_enable']) { ?><li class="m-li red"><span> | </span><a href="<?php echo $EXT['gift_url'];?>index2.php" target="_blank" rel="nofollow">积分商城</a></li><?php } ?>
      <?php if($EXT['ad_enable']) { ?><li class="m-li"><span> | </span><a href="<?php echo $EXT['ad_url'];?>" target="_blank" rel="nofollow">黄金广告</a></li><?php } ?>
 
      <?php if($EXT['guestbook_enable']) { ?><li class="m-li"><span> | </span><a href="<?php echo $EXT['guestbook_url'];?>" target="_blank" rel="nofollow">意见反馈</a></li><?php } ?>
 
          </ul>
      <ul class="clf"> 
      <li class="m-li"><a href="<?php echo $MODULE['1']['linkurl'];?>sitemap/" target="_blank" rel="nofollow">网站地图</a></li>
      <li class="m-li"><span> | </span><a href="<?php echo $EXT['announce_url'];?>" target="_blank" rel="nofollow">网站公告</a></li>
      <?php if($EXT['feed_enable']) { ?><li class="m-li"><span> | </span><a href="<?php echo $EXT['feed_url'];?>" target="_blank" rel="nofollow">RSS订阅</a></li><?php } ?>
      </ul> 
    </div>           
<div class="ut-row last">                                
    <h4 class="hd">用户专区</h4>                                
     <ul class="clf">                                    
        <li class="m-li"><a href="<?php echo $MODULE['2']['linkurl'];?>" target="_blank" rel="nofollow">用户中心</a><span> | </span></li>
        <li class="m-li"><a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_my'];?>?mid=5&action=add" target="_blank" rel="nofollow">发布货源</a><span> | </span></li>
        <li class="m-li"><a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_my'];?>?mid=6&action=add" target="_blank" rel="nofollow">发布采购</a><span> | </span></li>       
        <li class="m-li"><a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_my'];?>?mid=8&action=add" target="_blank" rel="nofollow">发布展会</a></li>                
      </ul>  
      <ul class="clf">                                    
         <li class="m-li"><a href="<?php echo $MODULE['52']['linkurl'];?>" target="_blank" rel="nofollow">常见问题</a><span> | </span></li> 
         <li class="m-li"><a href="<?php echo $MODULE['2']['linkurl'];?>grade.php" target="_blank" rel="nofollow"><?php echo VIP;?>会员</a></li>         
     </ul>
</div> 
  </div>
  </div>
  </li>
        </ul>
        </div>
    </div>
<script type="text/javascript">
$(document).ready(function()
{$('#jsddm > li').bind('mouseover', jsddm_open);
$('#jsddm > li').bind('mouseout',  jsddm_close);
});
function jsddm_open(){
ddmenuitem = $(this).find('.ut-dwn').eq(0).css('display', 'block');
}
function jsddm_close(){
if(ddmenuitem) ddmenuitem.css('display', 'none');
}
function jsddm_timer(){
closetimer = window.setTimeout(jsddm_close, timeout);
}
</script>
