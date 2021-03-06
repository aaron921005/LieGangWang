<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header-news');?>
<link rel="stylesheet" type="text/css" href="<?php echo DT_SKIN;?>ppslide_news.css">
<div class="container margin-top-30">
  <div class="row">
    <div class="col-xs-8 news-col-xs-8-700">
      <div class="row">
        <div class="col-xs-9 news-col-xs-9-530">
          <div class="news-slide news-slide-545" id="focus">
          <ul>
  <?php echo tag("moduleid=$moduleid&condition=status=3 and level=2 and thumb!=''&areaid=$cityid&order=".$MOD['order']."&pagesize=4&width=550&height=330&target=_blank&dir=xhtag&template=news-thumbslide");?>
           </ul>
            </div>
        </div>
        <div class="col-xs-3 news-col-xs-3-250">
          <div class="news-slide news-slide-250">
          <?php echo tag("moduleid=$moduleid&condition=status=3 and level=3 and thumb!=''&areaid=$cityid&order=".$MOD['order']."&pagesize=1&page=1&width=269&height=172&target=_blank&dir=xhtag&template=news-thumbslide1");?>
            </div>
          <div class="news-slide news-slide-250 margin-top-10">
          <?php echo tag("moduleid=$moduleid&condition=status=3 and level=3 and thumb!=''&areaid=$cityid&order=".$MOD['order']."&pagesize=1&page=2&width=269&height=172&target=_blank&dir=xhtag&template=news-thumbslide1");?>
          </div>
        </div>
      </div>
      <div class="news-news-tit margin-top-30">
        <h2 class="news-mod-header inline-block">最新资讯</h2>
        <div class="margin-top-20 pull-right font14">按级别阅读
        <span class="ui star rating">
      <a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?level=1');?>" target="_blank"><i title="1星资讯" class="fa-star icon1"></i></a>
      <a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?level=2');?>" target="_blank"><i title="2星资讯" class="fa-star icon2"></i></a>
      <a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?level=3');?>" target="_blank"><i title="3星资讯" class="fa-star icon3"></i></a>
      <a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?level=4');?>" target="_blank"><i title="4星资讯" class="fa-star icon4"></i></a>
      <a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?level=5');?>" target="_blank"><i title="5星资讯" class="fa-star icon5"></i></a>
        </span>
        </div>
        <div class="dropdown news-dropdown pull-right" id="classidarea"> <a href="javascript:;" class="dropdown-toggle">资讯行业<i class="fa-plus news-dropdown-plus"></i> </a>
          <div class="dropdown-menu news-dropdown-menu" style="width:530px;">
            <div class="margin-top-5"><b>热门行业资讯</b></div>
            <ul class="news-grid-news-select">
            <?php if(is_array($childcat)) { foreach($childcat as $i => $c) { ?>
              <li><a href="<?php echo $MOD['linkurl'];?><?php echo $c['linkurl'];?>"><?php echo $c['catname'];?></a></li>
             <?php } } ?>
            </ul>
            <div class="text-right margin-top-10"><span class="color-orange hide">如果没有您要查找的行业，请联系我们 <?php echo $DT['emaill'];?></span>
             </div>
          </div>
        </div>
      </div>
      <div class="news-grid-news-list"><!--1级置顶-->
      <?php echo tag("moduleid=$moduleid&condition=status=3 and level=1&areaid=$cityid&order=".$MOD['order']."&pagesize=3&target=_blank&dir=xhtag&template=list-newszd");?>
     <div class="newslist" id="results">
     <!--内容为瀑布流效果-->
    </div>
      </div>
      <div class="text-center news-more-con load_more" id="load_more_button"><i class="fa-plus font20"></i><a href="javascript:;" class="font20">点击加载更多资讯</a></div>
      <div class="text-center news-more-con animation_image" style="display:none;"><i class="fa-plus font20"></i><span class="font20">请歇歇！已经到底了</span></div> 
    </div>
<script type="text/javascript">  
    $(document).ready(function() {  
        var track_click = 0; 
        var total_pages = 4;  //最多加载多少页
        $('#results').load(AJPath+"?action=news", {'page':track_click, 'moduleid':21}, function() {track_click++;}); 
        $(".load_more").click(function (e) { 
            $(this).hide(); 
            $('.animation_image').show(); 
            if(track_click <= total_pages) 
            {  
                $.post(AJPath+'?action=news',{'page': track_click, 'moduleid':21}, function(data) {  
                    $(".load_more").show(); 
                    $("#results").append(data);   
                    //$("html, body").animate({scrollTop: $("#load_more_button").offset().top}, 500);  //跳到指定位置
                    $('.animation_image').hide(); 
                    track_click++; 
                }).fail(function(xhr, ajaxOptions, thrownError) {   
                    alert(thrownError); 
                    $(".load_more").show();
                    $('.animation_image').hide(); 
                });  
                if(track_click >= total_pages-1)  
                {  
                    $(".load_more").attr("disabled", "disabled");  
                }  
             }  
            });  
    });  
/*鼠标经过加class效果*/
$(function(){
  var children = $('.fa-star');  
        children.each(function(i){  
            //注意:this是js对象,$(this)是jquery对象.  
            $(this).mouseover(function(e) {  
                $(this).addClass('active');  
            }).mouseout(function(e) {  
                $(this).removeClass('active');  
            });  
        });   
}); 
</script>
    <div class="col-xs-4 news-col-xs-4-320">
    <!--今日头条-->
      <div class="news-column-right">
        <div class="news-tit-font18 margin-top-20">今日头条</div>
        <ul class="news-ul-24hotnew news-ul-hotnew">
        <?php echo tag("moduleid=$moduleid&condition=status=3 and level=5&areaid=$cityid&order=".$MOD['order']."&pagesize=10&target=_blank&dir=xhtag&template=list-newshots");?>
        </ul>
      </div>
      <!--标签-->
       <div class="news-column-right">
      <div class="biaoqian"">
       <h4 class="news-tit-font18 margin-top-10">热搜新闻词</h4>
       <ul class="news-ul-24hotnew news-ul-wordnew">
       <?php echo tag("moduleid=$moduleid&table=keyword&condition=moduleid=$moduleid and status=3&pagesize=20&order=total_search desc&dir=xhtag&template=list-newssearch_kw");?>
        </ul>
      </div>
      </div>
      <?php if(isset($MODULE['18'])) { ?>
      <!--以商会友-->
      <div class="news-column-right">
        <div class="news-tit-font18 margin-top-20">以商会友</div>
        <ul class="news-ul-listed-company">
       <?php $xhbq=tag("moduleid=18&table=club_group&condition=status=3&areaid=$cityid&pagesize=4&order=addtime desc&length=22&template=null");?> 
     <?php if(is_array($xhbq)) { foreach($xhbq as $i => $t) { ?>
    <li class="news-active">
            <div class="news-logo"> <a title="<?php echo $t['alt'];?>" href="<?php echo $t['linkurl'];?>" target="_blank"><img src="<?php echo $t['thumb'];?>"></a> </div>
            <div class="news-company"> <a title="<?php echo $t['alt'];?>" href="<?php echo $t['linkurl'];?>" class="font14 news-text" target="_blank"><?php echo $t['title'];?>圈</a>
              <div class="news-w1 news-up"><span class="w2">主题：</span><span class="w3"><?php echo $t['post'];?></span></div>
            </div>
          </li>
  <?php } } ?> 
        </ul>
        <div class="text-center margin-top-20 hide"> <a href="<?php echo $MODULE['18']['linkurl'];?>" target="_blank" class="news-company-more font14">更多行业商圈&gt;&gt;</a> </div>
      </div>
      <?php } ?>
      <div class="news-column-news">
        <div class="news-tit-news"></div>
        <div class="news-ul-star-list">
        <ul class="news-ul-star-news news-active">
        <li class="news-w1"><i class="news-tit-font18"></i>今日热点推荐</li>
        <?php echo tag("moduleid=$moduleid&condition=status=3 and level>0 and edittime>$today_endtime-86400&areaid=$cityid&order=hits desc&pagesize=10&dir=xhtag&template=list-newsxj");?>
        <li class="news-w3"></li>
        </ul>
        <ul class="news-ul-star-news">
        <li class="news-w1"><i class="news-tit-font18"></i>本周热点推荐</li>
        <?php echo tag("moduleid=$moduleid&condition=status=3 and level>0 and edittime>$today_endtime-30*86400&areaid=$cityid&order=hits desc&pagesize=10&dir=xhtag&template=list-newsxj");?>
        <li class="news-w3"></li>
        </ul>
        <ul class="news-ul-star-news">
        <li class="news-w1"><i class="news-tit-font18"></i>本月回顾推荐</li>
        <?php echo tag("moduleid=$moduleid&condition=status=3 and level>0 and edittime>$today_endtime-30*86400&areaid=$cityid&order=edittime desc&pagesize=10&dir=xhtag&template=list-newsxj");?>
        <li class="news-w3"></li>
        </ul>
        </div>
 <script>
  $(function(){
     $('.news-ul-star-list > .news-ul-star-news').mouseenter(function(){
     $('.news-ul-star-list > .news-ul-star-news').removeClass('news-active');
    $(this).addClass('news-active');
  });
 });
  $(function(){
      $('.news-ul-hotnew > li').mouseenter(function(){
      $('.news-ul-hotnew > li').removeClass('news-active');
      $(this).addClass('news-active');
    });
   });
</script> 
      </div>
    </div>
  </div>
</div>
<?php include template('footer');?>