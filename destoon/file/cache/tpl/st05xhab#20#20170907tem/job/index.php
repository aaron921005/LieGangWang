<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header-job');?>
<link rel="stylesheet" type="text/css" href="<?php echo DT_SKIN;?>job-index.css">
<script type="text/javascript">
function job_search(id) {
if(id == 1) {
Dd('jst_1').className = 'type_1';
Dd('jst_2').className = 'type_2';
Dd('add_link').href = '<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_my'];?>?action=add&mid=<?php echo $moduleid;?>';
Dd('add_img').src = '<?php echo DT_SKIN;?>image/add_job.gif';
Dd('sbm_img').src = '<?php echo DT_SKIN;?>images/job/job_search.png';
Dd('action').value = '';
} else if(id == 2) {
Dd('jst_1').className = 'type_2';
Dd('jst_2').className = 'type_1';
Dd('add_link').href = '<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_my'];?>?action=add&mid=<?php echo $moduleid;?>&resume=1';
Dd('add_img').src = '<?php echo DT_SKIN;?>image/add_resume.gif';
Dd('sbm_img').src = '<?php echo DT_SKIN;?>images/job/resume_search.png';
Dd('action').value = 'resume';
}
Dd('search_all').href = Dd('jst_'+id).href;
}
</script> 
<!--p1图片推荐 S-->
<div class="tradeShow clearfix">
  <div class="promotion">
    <div class="promotionBox rel" id="focus">
      <ul>
        <?php echo ad(154);?><!--850x160大幻灯id-->
      </ul>
      <i class="adicon"></i> </div>
  </div>
  <!--左边3个广告-->
  <div class="belt">
    <li class="rel"> <a href="/" title="广告招租" rel="nofollow"><img src="<?php echo DT_SKIN;?>images/aa/job/b1.png" alt="广告招租" title="广告招租" height="45" width="331"></a> <i class="adicon"></i> </li>
    <li class="rel"> <a href="/" title="广告招租" rel="nofollow"><img src="<?php echo DT_SKIN;?>images/aa/job/b2.png" alt="广告招租" title="广告招租" height="45" width="331"></a> <i class="adicon"></i> </li>
    <li class="no_bm rel"> <a href="/" title="广告招租" rel="nofollow"><img src="<?php echo DT_SKIN;?>images/aa/job/b3.png" alt="广告招租" title="广告招租" height="45" width="331"></a> <i class="adicon"></i> </li>
  </div>
</div>
<div class="clear">&nbsp;</div>
<!--p2-->
<div id="corps" class="adsBox">
  <div class="adsTitle">
    <p class="title_2">名企招聘</p>
    <em>|</em><span class="num"><a>共上万家名企招聘</a></span></div>
  <div class="adsBox"> 
    <?php echo tag("moduleid=$moduleid&condition=status=3 and level=3&areaid=$cityid&pagesize=6&length=10&order=".$MOD['order']."&dir=xhtag&template=job-comjob");?> 
  </div>
</div>
<!--p3-->
<div class="xh-section clearfix mt20">
  <div class="job-aside">
    <div class="hot-nav job-v2-boxshadow">
      <div class="search-condition-tips">
        <h2> 热招职位 </h2>
      </div>
      <ul class="hot-nav-list">
        <?php include template('catalog-job', 'chip');?> <!--招聘分类-->
      </ul>
    </div>
    <div id="latest_job_id"> </div>
  </div>
  <div class="job-aside-right js-tab">
    <div class="tipsNav hd">
      <ul>
        <li data-type="1" class="on"><a>热门职位</a></li>
        <li data-type="2"><a>最新职位</a></li>
      </ul>
      <a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_my'];?>?mid=9&action=add&resume=1" class="student-href"></a> </div>
    <div class="bd">
      <div class="jobList">
        <ul>
          <?php echo tag("moduleid=$moduleid&condition=status=3&areaid=$cityid&pagesize=10&length=22&order=hits desc&showcat=1&dir=xhtag&template=job-hotzp");?>
        </ul>
        <p class="lookMore"><a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?action=&kw=&catid=0&areaid=0&x=44&y=10');?>"><span>更多职位</span><i></i></a></p>
      </div>
      <div class="jobList">
        <ul>
          <?php echo tag("moduleid=$moduleid&condition=status=3&areaid=$cityid&pagesize=10&length=22&order=adddate desc,vip desc,addtime desc&showcat=1&dir=xhtag&template=job-hotzp");?>
        </ul>
        <p class="lookMore"><a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?action=&kw=&catid=0&areaid=0&x=44&y=10');?>"><span>更多职位</span><i></i></a></p>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    jQuery(".js-tab").slide({});
</script> 
</div>
<div class="clear">&nbsp;</div>
<!--p4-->
<div class="xh-section adBox mt20">
  <p class="title_2">热门城市</p>
  <ul>
    <li class=""> <a href="<?php echo $MODULE['9']['linkurl'];?>search.php?action=job&kw=&minsalary=0&maxsalary=0&type=0&gender=0&marriage=0&education=0&experience=0&fromdate=&todate=&catid=0&areaid=1&x=56&y=16" target="_blank"> <img src="<?php echo DT_SKIN;?>images/aa/job/ad00.png" alt=""> <span class="bgS"></span> <span>北京</span> <span class="jobNum">—<em><?php echo $db->count($DT_PRE.'job','areaid=1', 'status=3', 1800);?></em>个在招职位—</span> </a> </li>
    <li class=""> <a href="<?php echo $MODULE['9']['linkurl'];?>search.php?action=job&kw=&minsalary=0&maxsalary=0&type=0&gender=0&marriage=0&education=0&experience=0&fromdate=&todate=&catid01&areaid=11&x=56&y=16" target="_blank"> <img src="<?php echo DT_SKIN;?>images/aa/job/ad01.png" alt=""> <span class="bgS"></span> <span>江苏</span> <span class="jobNum">—<em><?php echo $db->count($DT_PRE.'job','areaid=11', 'status=3', 1800);?></em>个在招职位—</span> </a> </li>
    <li class=""> <a href="<?php echo $MODULE['9']['linkurl'];?>search.php?action=job&kw=&minsalary=0&maxsalary=0&type=0&gender=0&marriage=0&education=0&experience=0&fromdate=&todate=&catid=0&areaid=2&x=56&y=16" target="_blank"> <img src="<?php echo DT_SKIN;?>images/aa/job/ad02.png" alt=""> <span class="bgS"></span> <span>上海</span> <span class="jobNum">—<em><?php echo $db->count($DT_PRE.'job','areaid=2', 'status=3', 1800);?></em>个在招职位—</span> </a> </li>
    <li class=""> <a href="<?php echo $MODULE['9']['linkurl'];?>search.php?action=job&kw=&minsalary=0&maxsalary=0&type=0&gender=0&marriage=0&education=0&experience=0&fromdate=&todate=&catid=0&areaid=231&x=56&y=16" target="_blank"> <img src="<?php echo DT_SKIN;?>images/aa/job/ad03.png" alt=""> <span class="bgS"></span> <span>广州</span> <span class="jobNum">—<em><?php echo $db->count($DT_PRE.'job','areaid=231', 'status=3', 1800);?></em>个在招职位—</span> </a> </li>
    <li class="noPadding"> <a href="<?php echo $MODULE['9']['linkurl'];?>search.php?action=job&kw=&minsalary=0&maxsalary=0&type=0&gender=0&marriage=0&education=0&experience=0&fromdate=&todate=&catid=0&areaid=4&x=56&y=16" target="_blank"> <img src="<?php echo DT_SKIN;?>images/aa/job/ad04.png" alt=""> <span class="bgS"></span> <span>重庆</span> <span class="jobNum">—<em><?php echo $db->count($DT_PRE.'job','areaid=4', 'status=3', 1800);?></em>个在招职位—</span> </a> </li>
    <li class=""> <a href="<?php echo $MODULE['9']['linkurl'];?>search.php?action=job&kw=&minsalary=0&maxsalary=0&type=0&gender=0&marriage=0&education=0&experience=0&fromdate=&todate=&catid=0&areaid=16&x=56&y=16" target="_blank"> <img src="<?php echo DT_SKIN;?>images/aa/job/ad05.png" alt=""> <span class="bgS"></span> <span>山东</span> <span class="jobNum">—<em><?php echo $db->count($DT_PRE.'job','areaid=16', 'status=3', 1800);?></em>个在招职位—</span> </a> </li>
    <li class=""> <a href="<?php echo $MODULE['9']['linkurl'];?>search.php?action=job&kw=&minsalary=0&maxsalary=0&type=0&gender=0&marriage=0&education=0&experience=0&fromdate=&todate=&catid=0&areaid=23&x=56&y=16" target="_blank"> <img src="<?php echo DT_SKIN;?>images/aa/job/ad06.png" alt=""> <span class="bgS"></span> <span>四川</span> <span class="jobNum">—<em><?php echo $db->count($DT_PRE.'job','areaid=23', 'status=3', 1800);?></em>个在招职位—</span> </a> </li>
    <li class=""> <a href="<?php echo $MODULE['9']['linkurl'];?>search.php?action=job&kw=&minsalary=0&maxsalary=0&type=0&gender=0&marriage=0&education=0&experience=0&fromdate=&todate=&catid=0&areaid=233&x=56&y=16" target="_blank"> <img src="<?php echo DT_SKIN;?>images/aa/job/ad07.png" alt=""> <span class="bgS"></span> <span>深圳</span> <span class="jobNum">—<em><?php echo $db->count($DT_PRE.'job','areaid=233', 'status=3', 1800);?></em>个在招职位—</span> </a> </li>
    <li class=""> <a href="<?php echo $MODULE['9']['linkurl'];?>search.php?action=job&kw=&minsalary=0&maxsalary=0&type=0&gender=0&marriage=0&education=0&experience=0&fromdate=&todate=&catid=0&areaid=109&x=56&y=16" target="_blank"> <img src="<?php echo DT_SKIN;?>images/aa/job/ad08.png" alt=""> <span class="bgS"></span> <span>苏州</span> <span class="jobNum">—<em><?php echo $db->count($DT_PRE.'job','areaid=109', 'status=3', 1800);?></em>个在招职位—</span> </a> </li>
    <li class="noPadding"> <a href="<?php echo $MODULE['9']['linkurl'];?>search.php?action=job&kw=&minsalary=0&maxsalary=0&type=0&gender=0&marriage=0&education=0&experience=0&fromdate=&todate=&catid=0&areaid=118&x=56&y=16" target="_blank"> <img src="<?php echo DT_SKIN;?>images/aa/job/ad09.png" alt=""> <span class="bgS"></span> <span>杭州</span> <span class="jobNum">—<em><?php echo $db->count($DT_PRE.'job','areaid=118', 'status=3', 1800);?></em>个在招职位—</span> </a> </li>
  </ul>
</div>
<div class="clear">&nbsp;</div>
<!--p5-->
<div class="xh-section msgBox mt20">
  <p class="title_2">热门行业</p>
  <?php $mid=$moduleid?>
  <?php $joblou = get_maincat(0,$mid,1);?>
  <?php if(is_array($joblou)) { foreach($joblou as $i => $c) { ?>
  <?php $kk=$i+1?>
  <?php if($i < 5) { ?>
  <div id="container_hy_<?php echo $i;?>" class="container_hy">
    <div class="msgBoxLeft <?php if($i==1) { ?>second<?php } else if($i==2) { ?>third<?php } else if($i==3) { ?>fourth<?php } else if($i==4) { ?>fifth<?php } else { ?><?php } ?>
">
      <p class="topTitle"><i></i><a target="_blank" href="<?php echo $MODULE[$mid]['linkurl'];?><?php echo $c['linkurl'];?>"><?php echo $c['catname'];?></a></p>
      <?php if($c['child']) { ?>
      <?php $joblousub = get_maincat($c['catid'],$mid,1);?>
      <?php if(is_array($joblousub)) { foreach($joblousub as $j => $s) { ?>
      <?php if($j%6==0) { ?>
      <ul class="<?php if($j==1) { ?>company <?php } ?>
fixheight">
        <?php } ?>
        <?php if($j < 12) { ?>
        <li><a target="_blank" href="<?php echo $MODULE[$mid]['linkurl'];?><?php echo $s['linkurl'];?>" title="<?php echo $s['alt'];?>"><?php echo $s['catname'];?></a></li>
        <?php } ?>
        <?php if($j%6==5) { ?>
      </ul>
      <?php } ?>
      <?php } } ?>
      <?php } ?>
      <p class="moreJob"><a target="_blank" href="<?php echo $MODULE[$mid]['linkurl'];?><?php echo $c['linkurl'];?>">更多职位<i></i></a></p>
    </div>
    <div class="msgBoxRight">
      <div class="msgBoxRightTop">
        <ul>
          <?php echo tag("moduleid=$moduleid&catid=".$c['catid']."&length=20&condition=status=3&areaid=$cityid&pagesize=4&order=addtime desc&width=48&height=48&lazy=$lazy&dir=xhtag&template=job-thumb-table");?>
        </ul>
      </div>
      <div class="msgBoxRightBottom"> 
        <?php echo tag("moduleid=$moduleid&catid=".$c['catid']."&length=10&condition=status=3 and level=1&areaid=$cityid&pagesize=4&order=addtime desc&width=167&height=70&lazy=$lazy&dir=xhtag&template=job-thumb-company");?> 
      </div>
    </div>
  </div>
  <?php } ?>
  <?php } } ?> </div>
<!--p6-->
<div class="xh-section commen-content recommend-wall mt20">
  <div class="hd"><a target="_blank" href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?action=resume&kw=&minsalary=0&maxsalary=0&type=0&gender=0&marriage=0&education=0&experience=0&fromdate=&todate=&catid=0&areaid=0&x=44&y=18');?>" class="go-post">更多简历</a> 求职简历</div>
  <div class="bd" id="J_itemWall">
  <?php echo tag("moduleid=$moduleid&table=resume&condition=status=3 and open=3&areaid=$cityid&showcat=1&pagesize=4&length=10&order=addtime desc&lazy=$lazy&dir=xhtag&template=job-thumb-resume");?>
  </div>
  <div class="btn-box"> <a href="" hidefocus="true" class="J_loadBtn" data-page="0"></a> </div>
</div>
<!--p7--> 
<!--so-->
<div class="xh-section clearfix">
  <div class="fl so_ad">
  <a href="/" title="广告招租" rel="nofollow"><img src="<?php echo DT_SKIN;?>images/aa/job/so-ad.png" alt="广告招租" title="广告招租" height="235" width="240"></a>
  </div>
<div class="left_box_job fr">
    <div class="type_job">
    <a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?action=job');?>" class="type_1" id="jst_1" onmouseover="job_search(1);" rel="nofollow">职位搜索</a>
    <a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?action=resume');?>" class="type_2" id="jst_2" onmouseover="job_search(2);" rel="nofollow">人才搜索</a>
    </div>
    <div class="b10">&nbsp;</div>
    <form action="<?php echo $MOD['linkurl'];?>search.php" id="fsearch">
    <input type="hidden" name="action" id="action" value="job"/>
    <table cellpadding="5" cellspacing="5" width="100%">
    <tr>
    <td width="80" align="right">关 键 词：</td>
    <td><input type="text" size="60" name="kw"/>&nbsp;&nbsp;<span class="f_gray">可直接输入职位名称、城市名等</span></td>
    </tr>
    <tr>
    <td align="right">行业/职位：</td>
    <td>
    <?php echo ajax_category_select('catid', '选择行业/职位', 0, $moduleid);?>
    &nbsp;&nbsp;&nbsp;
    地区：
    <?php echo ajax_area_select('areaid', '选择地区', $cityid);?>
    </td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>
    <input type="image" src="<?php echo DT_SKIN;?>images/job/job_search.png" id="sbm_img"/>
    &nbsp;&nbsp;
    <a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?action=job');?>" id="search_all" rel="nofollow"><img src="<?php echo DT_SKIN;?>images/job/btn_advance_search.png"/></a>
    <a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_my'];?>?action=add&mid=<?php echo $moduleid;?>" id="add_link" rel="nofollow"><img src="<?php echo DT_SKIN;?>image/add_job.gif" style="margin-left:150px;" id="add_img"/></a>
    </td>
    </tr>
    </table>
    </form>
  </div>
  </div>
  <div class="clear">&nbsp;</div>
<?php include template('footer');?>