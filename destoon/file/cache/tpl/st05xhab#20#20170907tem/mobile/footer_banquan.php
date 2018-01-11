<?php defined('IN_DESTOON') or exit('Access Denied');?><footer class="xh-footer">
  <div class="xh-1px-line-up"></div>
  <ul class="xh-footer-links">
  <?php if($_userid) { ?>
    <li class=""><a rel="nofollow" class="J_ping" href="my.php?action=member" data-transition="none"><?php echo $_username;?></a></li>
    <li><a rel="nofollow" class="J_ping" href="my.php" data-transition="none">会员中心</a></li>
    <?php } else { ?>
    <li class=""><a rel="nofollow" class="J_ping" href="login.php?forward=my.php" data-transition="none">登录</a></li>
    <li><a rel="nofollow" class="J_ping" href="login.php?forward=my.php" data-transition="none">注册</a></li>
    <?php } ?>
    <li><a rel="nofollow" class="J_ping"  href="guestbook.php" data-transition="none">反馈</a></li>
    <li><a class="J_ping" report-eventid="MCommonHTail_ToTop" report-eventparam="" page_name="index" href="javascript:void(0)" onclick="window.scrollTo(0,0);">回到顶部</a></li>
  </ul>
  <div class="xh-1px-line-up"></div>
  <ul class="xh-footer-platforms">
    <li class="xh-footer-icon-apps"><a class="badge J_ping" href="<?php echo $app;?>" rel="external">客户端</a></li>
    <li class="xh-footer-icon-touchscreen current"><a class="J_ping" href="javascript:;">触屏版</a></li>
    <?php if(!in_array($DT_MOB['browser'], array('app', 'b2b', 'screen'))) { ?>
    <li class="xh-footer-icon-pc"><a class="J_ping"  href="mobile.php?action=pc" rel="external">电脑版</a></li>
    <?php } ?>
  </ul>
  <div class="xh-1px-line-up"></div>
  <div class="xh-footer-copyright">Copyright © 2004-2017 <?php echo $DT['jdname'];?> <?php echo $DT['jdhttp'];?> 版权所有</div>
</footer>
    <div class="fix-nav" id="fix-nav">
        <div class="fix-nav-wrap">
            <img class="i-totop" src="image/scroll-to-top-icon.png">
        </div>
    </div>
    <script type="text/javascript">
        jQuery(function($){
            $(window).bind("scroll",function() { 
                initScroll() 
            });
            var $fixnav = $('#fix-nav');
            function initScroll()
            {
                if ($(window).scrollTop() > $(window).height()/4) {
                    $fixnav.show();
                } else {
                    $fixnav.hide();
                }
            }
            $('.fix-nav-wrap').bind('click', function(e){
                $(window).scrollTop(0);
            });
        });
        
    </script>
