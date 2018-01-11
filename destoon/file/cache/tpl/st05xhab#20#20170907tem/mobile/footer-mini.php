<?php defined('IN_DESTOON') or exit('Access Denied');?> <div class="footer" style="padding-bottom:2em;">
      <div class="links" id="ECS_MEMBERZONE">
  <a href="login.php?forward=my.php" data-transition="slideup"><span>登录</span></a><a href="javascript:window.scrollTo(0,0);"><span>返回顶部</span></a>
</div>
      <div class="links">
      <a href="javascript:;"><span class="gl">触屏版</span></a>
      <a href="javascript:;"><span>安卓端</span></a>
      <a href="javascript:;"><span>苹果端</span></a>
      </div>
<div class="links">Copyright © 2004-2017 <?php echo $DT['jdname'];?> <?php echo $DT['jdhttp'];?> 版权所有</div>
</div>
<section>
  <div id="jisou-info" class="jisou-info" style="display: none;"></div>
  <div class="info-nr">
    <div id="info-nr-phone" class="info-nr-phone color-orange">
      <input id="info-nr-btn" type="checkbox" name="" value="" class="info-nr-menu">
      <div class=""> <a href="tel:<?php echo $DT['telephone'];?>" class="icon-phone"></a> </div>
      <div class=""> <a href="index.php" data-transition="none" data-ajax="false" class="icon-location"></a> </div>
      <div class=""> <a href="message.php" class="icon-message"></a> </div>
      <div class=""> <a href="share.php" class="icon-share"></a> </div>
    </div>
  </div>
</section>
<script>
        window.addEventListener("DOMContentLoaded", function () {
            btn = document.getElementById("info-nr-btn");
            btn.onclick = function () {
                var divs = document.getElementById("info-nr-phone").querySelectorAll("div");
                var className = className = this.checked ? "on" : "";
                for (i = 0; i < divs.length; i++) {
                    divs[i].className = className;
                }
                document.getElementById("jisou-info").style.display = "on" == className ? "block" : "none";
            }
        }, false);
    </script>
<script>
$(function () {
            new Swipe(document.getElementById('jisou-banner'), {
                speed: 500,
                auto: 3000,
                callback: function () {
                    var lis = $(this.element).next("ol").children();
                    lis.removeClass("on").eq(this.index).addClass("on");
                }
            });
        });
</script>
</body>
</html>