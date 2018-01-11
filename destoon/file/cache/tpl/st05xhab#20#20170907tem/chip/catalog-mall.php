<?php defined('IN_DESTOON') or exit('Access Denied');?><link rel="stylesheet" type="text/css" href="<?php echo DT_SKIN;?>css/mall_index_banner.css" />
<div class="categorys j_categorys">
    <div class="cate-wrap" id="nav">
      <div class="cate-title-list" style="display: block;">
        <?php $mid = $moduleid;?>
        <?php $child = get_maincat(0,$mid,1);$cols=5?>
        <?php if(is_array($child)) { foreach($child as $i => $c) { ?>
        <?php if($i < $cols) { ?>
        <div class="cate-m fore<?php echo $i+1;?>">
          <div class="cate-mt">
            <h2 class="title_cat"><a class="text" target="_blank" href="<?php echo $MODULE[$mid]['linkurl'];?><?php echo $c['linkurl'];?>"><?php echo $c['catname'];?></a></h2>
            <div class="extra"> 
            <?php if($c['child']) { ?>
              <?php $sub = get_maincat($c['catid'],$mid,1);?>
              <?php if(is_array($sub)) { foreach($sub as $j => $s) { ?><?php if($j < 3) { ?> <a href="<?php echo $MODULE[$mid]['linkurl'];?><?php echo $s['linkurl'];?>"><?php echo set_style($s['catname'], $s['style']);?></a> <?php } ?>
<?php } } ?>
              <?php } ?>
 
              </div>
            <span class="angle"></span> </div>
          <div class="cate-content-list cate-mc fore<?php echo $i+1;?>" style="display: none;">
            <div class="title_cat"> <span class="text"><?php echo $c['catname'];?></span> <span class="extra">专业的B2B交易电商平台</span> <a target="_blank" href="<?php echo $MODULE[$mid]['linkurl'];?><?php echo $c['linkurl'];?>" class="more">更多<i></i></a> </div>
            <div class="goods-list"> 
              <?php if($c['child']) { ?>
              <?php $sub = get_maincat($c['catid'],$mid,1);?>
              <?php if(is_array($sub)) { foreach($sub as $j => $s) { ?><?php if($j<25) { ?> <a href="<?php echo $MODULE[$mid]['linkurl'];?><?php echo $s['linkurl'];?>"><?php echo set_style($s['catname'], $s['style']);?></a> <?php } ?>
<?php } } ?>
              <?php } ?>
 
              </div>
            <div class="goods-promotion j_categorysPromotion1"><!--展开中的大图-->
             <?php if($i==0) { ?> 
             <a href="<?php echo $MODULE[$mid]['linkurl'];?><?php echo $c['linkurl'];?>" target="_blank" ><img src="<?php echo DT_SKIN;?>images/fenlei/1.jpg" width="500" height="200" alt=""/></a> 
             <?php } else if($i==1) { ?> 
             <a href="<?php echo $MODULE[$mid]['linkurl'];?><?php echo $c['linkurl'];?>" target="_blank" ><img src="<?php echo DT_SKIN;?>images/fenlei/2.jpg" width="500" height="200" alt=""/></a> 
             <?php } else if($i==2) { ?> 
             <a href="<?php echo $MODULE[$mid]['linkurl'];?><?php echo $c['linkurl'];?>" target="_blank" ><img src="<?php echo DT_SKIN;?>images/fenlei/3.jpg" width="500" height="200" alt=""/></a> 
             <?php } else if($i==3) { ?> 
             <a href="<?php echo $MODULE[$mid]['linkurl'];?><?php echo $c['linkurl'];?>" target="_blank" ><img src="<?php echo DT_SKIN;?>images/fenlei/4.jpg" width="500" height="200" alt=""/></a> 
             <?php } else if($i==4) { ?> 
             <a href="<?php echo $MODULE[$mid]['linkurl'];?><?php echo $c['linkurl'];?>" target="_blank" ><img src="<?php echo DT_SKIN;?>images/fenlei/5.jpg" width="500" height="200" alt=""/></a> 
             <?php } ?>
 
             </div>
            <div class="goods-extra">
              <div class="content_gg rel"><!--展开中的小图--> 
              <?php if($i==0) { ?>
<a href="/." target="_blank" rel="nofollow"><img src="<?php echo DT_SKIN;?>images/fenlei/1-1.jpg"/></a>
<a href="/." target="_blank" rel="nofollow"><img src="<?php echo DT_SKIN;?>images/fenlei/1-2.jpg"/></a>
<a href="/." target="_blank" rel="nofollow"><img src="<?php echo DT_SKIN;?>images/fenlei/1-3.jpg"/></a>
<?php } else if($i==1) { ?>
<a href="/." target="_blank" rel="nofollow"><img src="<?php echo DT_SKIN;?>images/fenlei/2-1.jpg"/></a>
<a href="/." target="_blank" rel="nofollow"><img src="<?php echo DT_SKIN;?>images/fenlei/2-2.jpg"/></a>
<a href="/." target="_blank" rel="nofollow"><img src="<?php echo DT_SKIN;?>images/fenlei/2-3.jpg"/></a>
<?php } else if($i==2) { ?>
<a href="/." target="_blank" rel="nofollow"><img src="<?php echo DT_SKIN;?>images/fenlei/3-1.jpg"/></a>
<a href="/." target="_blank" rel="nofollow"><img src="<?php echo DT_SKIN;?>images/fenlei/3-2.jpg"/></a>
<a href="/." target="_blank" rel="nofollow"><img src="<?php echo DT_SKIN;?>images/fenlei/3-3.jpg"/></a>
<?php } else if($i==3) { ?>
<a href="/." target="_blank" rel="nofollow"><img src="<?php echo DT_SKIN;?>images/fenlei/4-1.jpg"/></a>
<a href="/." target="_blank" rel="nofollow"><img src="<?php echo DT_SKIN;?>images/fenlei/4-2.jpg"/></a>
<a href="/." target="_blank" rel="nofollow"><img src="<?php echo DT_SKIN;?>images/fenlei/4-3.jpg"/></a>
<?php } else if($i==4) { ?>
<a href="/." target="_blank" rel="nofollow"><img src="<?php echo DT_SKIN;?>images/fenlei/5-1.jpg"/></a>
<a href="/." target="_blank" rel="nofollow"><img src="<?php echo DT_SKIN;?>images/fenlei/5-2.jpg"/></a>
<a href="/." target="_blank" rel="nofollow"><img src="<?php echo DT_SKIN;?>images/fenlei/5-3.jpg"/></a>
<?php } else if($i==5) { ?>
<a href="/." target="_blank" rel="nofollow"><img src="<?php echo DT_SKIN;?>images/fenlei/3-1.jpg"/></a>
<a href="/." target="_blank" rel="nofollow"><img src="<?php echo DT_SKIN;?>images/fenlei/3-2.jpg"/></a>
<a href="/." target="_blank" rel="nofollow"><img src="<?php echo DT_SKIN;?>images/fenlei/3-3.jpg"/></a>
<?php } ?>
                 <i class="adicon"></i> </div>
            </div>
          </div>
        </div>
        <?php } ?>
        <?php } } ?>
        <div class="cate-m fore6">
          <div class="cate-mt no_bm">
            <div class="img j_categorysPromotion6"><a href="javascript:;" target="_blank" onclick="Go('<?php echo DT_PATH;?>sitemap/<?php echo rewrite('index.php?mid='.$moduleid);?>');"><img src="<?php echo DT_SKIN;?>images/huoyuan.png" width="170" height="42" alt="更多行业现货"></a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<script type="text/javascript">
jQuery("#nav").slide({ 
type:"menu", //效果类型
titCell:".cate-m", // 鼠标触发对象
targetCell:".cate-mc", // 效果对象，必须被titCell包含
delayTime:200, // 效果时间
triggerTime:0, //鼠标延迟触发时间
defaultPlay:false,//默认执行
returnDefault:true//返回默认
});
</script> 