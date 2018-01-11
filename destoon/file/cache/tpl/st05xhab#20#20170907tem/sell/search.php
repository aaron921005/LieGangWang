<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header');?> 
<script type="text/javascript">var sh = '<?php echo $MOD['linkurl'];?>search.php?catid=<?php echo $catid;?>&kw=<?php echo $kw;?>&areaid=<?php echo $areaid;?>';</script>
<link rel="stylesheet" type="text/css" href="<?php echo DT_SKIN;?>list_new.css">
<div class="product_content">
  <div class="product_list">
    <div class="product_option">
      <div class="product_option1">
        <div class="product_option1L">
          <h3>当前位置：</h3>
        </div>
        <div class="product_add_nav"><a href="<?php echo $MODULE['1']['linkurl'];?>">首页</a> &gt; <a href="<?php echo $MOD['linkurl'];?>"><?php echo $MOD['name'];?></a> &gt; <?php echo cat_pos($CAT, ' &gt; ');?></div>
        <div class="findGoodsNum"><em>找到</em><i><?php echo $items;?></i><em>结果</em></div>
      </div>
      <?php if($CAT['parentid']) { ?>
      <?php $zcatid = $CAT['parentid'];?>
       <?php } else { ?>
      <?php $zcatid = $catid;?>      
      <?php } ?>
      <div class="product_search">
        <div class="product_option1L">
          <h3>已选：</h3>
        </div>
        <div class="product_searchC">
          <ul>
           <?php if($catid) { ?>
           <?php if($CAT['parentid']) { ?>
            <li class="on"><a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?catid=0&kw='.$kw.'&areaid='.$areaid);?>">行业：<?php echo cat_name($CAT['parentid']);?></a></li>
            <li class="on"><a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?catid='.$CAT[parentid].'&kw='.$kw.'&areaid='.$areaid);?>">子类：<?php echo $CAT['catname'];?></a></li>
            <?php } else { ?>
             <li class="on"><a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?catid=0&kw='.$kw.'&areaid='.$areaid);?>">行业：<?php echo $CAT['catname'];?></a></li>
            <?php } ?>
             <?php } ?>
            <?php if($areaid) { ?>
            <?php if($ARE['parentid']) { ?>
            <li class="on"><a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?areaid=0&kw='.$kw.'&catid='.$catid);?>">省份：<?php echo ar_name($ARE['parentid']);?></a></li>
           <li class="on"><a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?catid='.$catid.'&kw='.$kw.'&areaid='.$ARE[parentid]);?>">城市：<?php echo $ARE['areaname'];?></a></li>
            <?php } else { ?>
            <li class="on"><a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?areaid=0&kw='.$kw.'&catid='.$catid);?>">省份：<?php echo $ARE['areaname'];?></a></li>
            <?php } ?>
 
             <?php } ?>
                                         
            <li>
              <form action="<?php echo $MOD['linkurl'];?>search.php" id="fsearch" onsubmit="buy_check()">
                <input type="hidden" name="catid" id="catid" value="<?php echo $catid;?>"/>
                <input type="hidden" name="areaid" id="areaid" value="<?php echo $areaid;?>"/>
                <input class="product_search_input1" name="kw" id="buy_kw" type="text" value="<?php if($kw) { ?><?php echo $kw;?><?php } else { ?>输入关键词<?php } ?>
" onfocus="if(this.value=='输入关键词') this.value='';">
                <div class="ie6_border">
                  <input class="product_search_input2" name="" type="submit" value="">
                </div>
              </form>
            </li>
          </ul>
        </div>
        <div class="product_searchR"> <a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?catid=0');?>">重选</a> </div>
      </div>
      <div class="product_option1">
        <div class="product_option1L">
          <h3>行业：</h3>
        </div>
        <div class="product_option1C">
          <ul <?php if($catid) { ?>class="side_option2"<?php } else { ?>class="side_option"<?php } ?>
 id="a_lx">
            <li<?php if($catid) { ?> class="product_option1C2"<?php } else { ?> class="product_option1C3"<?php } ?>
 ><a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?catid=0&kw='.$kw.'&areaid='.$areaid);?>">全部</a>
            </li>
         <?php if(is_array($maincat)) { foreach($maincat as $k => $v) { ?>
            <li <?php if($v['catid']==$catid) { ?>class="product_option1C3"<?php } else { ?>class="product_option1C1"<?php } ?>
><a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?catid='.$v[catid].'&kw='.$kw.'&areaid='.$areaid);?>"><?php echo set_style($v['catname'],$v['style']);?></a></li>
            <?php } } ?>
          </ul>
        </div>
        <div class="product_option1R"> <a id="b_lx" onclick="set_toggle('lx','side_option');" <?php if($catid) { ?>class="cur"<?php } ?>
><?php if($catid) { ?>收起<?php } else { ?>更多<?php } ?>
</a> </div>
      </div>
       <?php if($CP) { ?>
  <?php if(is_array($PPT)) { foreach($PPT as $p) { ?>
  <div class="product_option1">
 <div class="product_option1L"><h3><?php echo $p['name'];?>：</h3></div>
  <div class="product_option1C">
      <ul class="side_option">
      <input type="hidden" name="ppt_<?php echo $p['oid'];?>" id="ppt_<?php echo $p['oid'];?>" value="<?php echo $p['select'];?>"/>
      <li class="<?php if($p['select']=='') { ?>product_option1C3<?php } else { ?>product_option1C2<?php } ?>
"><a href="<?php echo $MOD['linkurl'];?>search.php?catid=<?php echo $catid;?>&kw=<?php echo $kw;?>&areaid=<?php echo $areaid;?>&ppt_<?php echo $p['oid'];?>">全部</a></li>
      <?php if(is_array($p['options'])) { foreach($p['options'] as $o) { ?>
      <li class="<?php if($p['select']==$o) { ?>product_option1C3<?php } else { ?>product_option1C1<?php } ?>
"><a href="<?php echo $MOD['linkurl'];?>search.php?catid=<?php echo $catid;?>&kw=<?php echo $kw;?>&areaid=<?php echo $areaid;?>&ppt_<?php echo $p['oid'];?>=<?php echo urlencode($o);?>"><?php echo $o;?></a></li>
      <?php } } ?>
      </ul>
    </div>
  </div>
  <?php } } ?>
  <?php } ?>
      <div class="product_option1">
        <div class="product_option1L">
          <h3>省份：</h3>
        </div>
        <div class="product_option1C">
          <ul <?php if($areaid) { ?>class="side_option2"<?php } else { ?>class="side_option"<?php } ?>
 id="a_sf">
            <li<?php if($areaid) { ?> class="product_option1C2"<?php } else { ?> class="product_option1C3"<?php } ?>
><a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?catid='.$catid.'&kw='.$kw);?>">全部</a>
            </li>
            <?php $carea = get_mainarea(0);?>
            <?php if(is_array($carea)) { foreach($carea as $i => $c) { ?>
            <?php if($areaid && $ARE['parentid']) { ?>
            <li <?php if($c['areaid']==$ARE['parentid']) { ?> class="product_option1C3"<?php } else { ?> class="product_option1C1"<?php } ?>
>
            <a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?catid='.$catid.'&kw='.$kw.'&areaid='.$c[areaid]);?>"><?php echo $c['areaname'];?></a>
            </li>
             <?php } else { ?>
           <li<?php if($areaid==$c['areaid']) { ?> class="product_option1C3"<?php } else { ?> class="product_option1C1"<?php } ?>
><a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?catid='.$catid.'&kw='.$kw.'&areaid='.$c[areaid]);?>"><?php echo $c['areaname'];?></a></li>
             <?php } ?>
            <?php } } ?>
          </ul>
        </div>
        <div class="product_option1R"> <a id="b_sf" onclick="set_toggle('sf','side_option');" <?php if($areaid) { ?>class="cur"<?php } ?>
><?php if($areaid) { ?>收起<?php } else { ?>更多<?php } ?>
</a> </div>
      </div>
    <?php if($areaid<5 || $areaid==32 || $areaid==33 || $areaid==34) { ?> 
    <?php } else { ?>
    <?php $zare=get_area($areaid);?>
    <?php if($zare['parentid']) { ?>
    <?php $arid=$zare['parentid'];?>
    <?php } else { ?>
    <?php $arid=$areaid;?>
    <?php } ?>
      <?php if($arid) { ?>
      <div class="product_option1">
        <div class="product_option1L">
          <h3>城市：</h3>
        </div>
        <div class="product_option1C">
          <ul <?php if($ARE['parentid']) { ?>class="side_option2"<?php } else { ?>class="side_option"<?php } ?>
 id="a_cs">
            <li<?php if($areaid) { ?><?php if($ARE['parentid']) { ?> class="product_option1C2"<?php } else { ?> class="product_option1C3"<?php } ?>
<?php } else { ?> class="product_option1C3"<?php } ?>
><a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?catid='.$catid.'&kw='.$kw.'&areaid='.$ARE[parentid]);?>">全部</a>
            </li>
             <?php $tagsss=tag("table=area&condition=parentid=$arid&order=areaid ASC&pagesize=80&template=null");?>
             <?php if(is_array($tagsss)) { foreach($tagsss as $i => $c) { ?>
             <li<?php if($areaid==$c['areaid']) { ?> class="product_option1C3"<?php } else { ?> class="product_option1C1"<?php } ?>
><a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?catid='.$catid.'&kw='.$kw.'&areaid='.$c[areaid]);?>"><?php echo $c['areaname'];?></a>
            </li>
            <?php } } ?>
          </ul>
        </div>
        <div class="product_option1R"> <a id="b_cs" onclick="set_toggle('cs','side_option');" <?php if($ARE['parentid']) { ?>class="cur"<?php } ?>
><?php if($ARE['parentid']) { ?>收起<?php } else { ?>更多<?php } ?>
</a> </div>
      </div>
      <?php } ?>
      <?php } ?>
<div class="product_option1">
 <div class="product_option1L"><h3>类型：</h3></div>
  <div class="product_option1C">
      <ul class="side_option">
    <li class="<?php if($typeid==99) { ?>product_option1C3<?php } else { ?>product_option1C2<?php } ?>
"><a href="<?php echo $MOD['linkurl'];?><?php echo $linkurl;?>">全部</a></li>
      <?php if(is_array($TYPE)) { foreach($TYPE as $k => $v) { ?>
      <li class="<?php if($typeid==$k) { ?>product_option1C3<?php } else { ?>product_option1C1<?php } ?>
"><a href="javascript:Go('<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?typeid='.$k.'&kw='.$kw.'&catid='.$catid.'&areaid='.$areaid);?>');"><?php echo $v;?></a></li>
      <?php } } ?>
      </ul>
    </div>
</div>
<div class="product_listT">
       <div class="tool">
      <form action="<?php echo $MOD['linkurl'];?>search.php" id="fsearch2">
      <input type="hidden" name="catid" id="catid" value="<?php echo $catid;?>"/>
      <input type="hidden" name="areaid" id="areaid" value="<?php echo $areaid;?>"/>
        <div class="sort-inner">
          <div class="styles fr">
          <?php if($list == 0) { ?>
          <a class="style_0 hover" href="javascript:;" title="图文列表">列表</a>
          <?php } else { ?>
          <a class="style_0" href="javascript:;" onclick="Go(sh+'&amp;list=0');" title="图文列表">列表</a>
          <?php } ?>
          <?php if($list == 1) { ?>
          <a class="style_1 hover" href="javascript:;" title="大图列表">大图</a>
           <?php } else { ?>
          <a class="style_1" href="javascript:;" onclick="Go(sh+'&amp;list=1<?php if($kw) { ?>&amp;kw=<?php echo $kw;?><?php } ?>
');" title="大图列表">大图</a>
          <?php } ?>
          </div>
          <div class="sort fl">
            <ul class="clearfix">
              <li class="first"> <a href="javascript:Go('<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?catid='.$catid.'&typeid='.$typeid.'&kw='.$kw.'&areaid='.$areaid.'&order=0');?>');" title="综合排序" class="link active">综合排序</a> </li>
              <li class="droplist hoverSelf"><a class="link" title="更新时间">更新时间<span class="icon"></span> </a>
                <ul onchange="Go(sh+'&day='+this.value)">
                  <li><a href="javascript:Go('<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?catid='.$catid.'&typeid='.$typeid.'&kw='.$kw.'&areaid='.$areaid.'&day=1');?>');">1天内</a></li>
                  <li><a href="javascript:Go('<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?catid='.$catid.'&typeid='.$typeid.'&kw='.$kw.'&areaid='.$areaid.'&day=3');?>');">3天内</a></li>
                  <li><a href="javascript:Go('<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?catid='.$catid.'&typeid='.$typeid.'&kw='.$kw.'&areaid='.$areaid.'&day=7');?>');">7天内</a></li>
                  <li><a href="javascript:Go('<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?catid='.$catid.'&typeid='.$typeid.'&kw='.$kw.'&areaid='.$areaid.'&day=15');?>');">15天内</a></li>
                  <li><a href="javascript:Go('<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?catid='.$catid.'&typeid='.$typeid.'&kw='.$kw.'&areaid='.$areaid.'&day=30');?>');">30天内</a></li>
                </ul>
              </li>
              <li class="droplist hoverSelf"><a class="link" title="显示顺序">显示顺序<span class="icon"></span> </a>
                <ul>
                  <li><a href="javascript:Go('<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?catid='.$catid.'&typeid='.$typeid.'&kw='.$kw.'&areaid='.$areaid.'&order=2');?>');">价格从高到底</a></li>
                  <li><a href="javascript:Go('<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?catid='.$catid.'&typeid='.$typeid.'&kw='.$kw.'&areaid='.$areaid.'&order=3');?>');">价格从低到高</a></li>
                  <li><a href="javascript:Go('<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?catid='.$catid.'&typeid='.$typeid.'&kw='.$kw.'&areaid='.$areaid.'&order=4');?>');"><?php echo VIP;?>级别从高到低</a></li>
                  <li><a href="javascript:Go('<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?catid='.$catid.'&typeid='.$typeid.'&kw='.$kw.'&areaid='.$areaid.'&order=5');?>');"><?php echo VIP;?>级别从低到高</a></li>
                  <li><a href="javascript:Go('<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?catid='.$catid.'&typeid='.$typeid.'&kw='.$kw.'&areaid='.$areaid.'&order=6');?>');">供货量由高到低</a></li>
                  <li><a href="javascript:Go('<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?catid='.$catid.'&typeid='.$typeid.'&kw='.$kw.'&areaid='.$areaid.'&order=7');?>');">供货量由低到高</a></li>
                  <li><a href="javascript:Go('<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?catid='.$catid.'&typeid='.$typeid.'&kw='.$kw.'&areaid='.$areaid.'&order=8');?>');">起订量由高到低</a></li>
                  <li><a href="javascript:Go('<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?catid='.$catid.'&typeid='.$typeid.'&kw='.$kw.'&areaid='.$areaid.'&order=9');?>');">起订量由低到高</a></li>
                </ul>
              </li>
              <li class="bjg">
      <input type="checkbox" <?php if($price==1) { ?>checked<?php } ?>
 onclick="Go(sh+'&kw=<?php echo $kw;?>&price=1');"/> 标价&nbsp;
      <input type="checkbox" <?php if($thumb==1) { ?>checked<?php } ?>
 onclick="Go(sh+'&kw=<?php echo $kw;?>&thumb=1');"/> 图片&nbsp;
      <input type="checkbox" <?php if($vip==1) { ?>checked<?php } ?>
 onclick="Go(sh+'&kw=<?php echo $kw;?>&vip=1');"/> <?php echo VIP;?>&nbsp;&nbsp;</li>
            </ul>
          </div>
          <div class="prices hoverSelf fl">
            <div class="inner">
              <ul class="clearfix">
                <li class="item">
               <input type="text" name="minprice" value="<?php echo $minprice;?>" class="input" placeholder="<?php echo $DT['money_sign'];?>最低价"/>
                </li>
                <li class="sep">-</li>
                <li class="item">
                <input type="text" name="maxprice" value="<?php echo $maxprice;?>" class="input" placeholder="<?php echo $DT['money_sign'];?>最高价"/>
                </li>
                <li class="submit"><span class="btnso" onclick="Dd('fsearch2').submit();">确定</span></li>
              </ul>
            </div>
          </div>
        </div>
      </form>
    </div>
</div>
</div>
 <div class="b10">&nbsp;</div>
<div class="m">
<!--left S-->
  <div class="m_l_1 f_l">
  <form method="post">
    <div class="sell_tip" id="sell_tip" style="display:none;" title="双击关闭" ondblclick="Dh(this.id);">
      <div>
        <p>您可以</p>
        <input type="submit" value="对比选中" onclick="this.form.action='<?php echo $MOD['linkurl'];?>compare.php';" class="btn_1" onmouseover="this.className='btn_2'" onmouseout="this.className='btn_1'"/> 或 
        <input type="submit" value="批量询价" onclick="this.form.action='<?php echo $MOD['linkurl'];?>inquiry.php';" class="btn_1" onmouseover="this.className='btn_2'" onmouseout="this.className='btn_1'"/>
      </div>
    </div>  
  <div class="img_tip" id="img_tip" style="display:none;">&nbsp;</div>
   <?php if($page==1 && $kw) { ?>
    <?php echo ad($moduleid,$catid,$kw,6);?>
    <?php echo load('m'.$moduleid.'_k'.urlencode($kw).'.htm');?>
    <?php } ?>
    <?php if($tags) { ?>
    <?php if($list==0) { ?>
    <?php include template('list-'.$module, 'tag');?>
    <?php } else if($list==1) { ?>
    <?php include template('list-'.$module.'-img', 'tag');?>
    <?php } ?>
    <?php } else { ?>
    <div class="newPurchaseList">
    <div class="nonoresult">
    <?php include template('noresult', 'message');?>
    </div>
    </div>
    <?php } ?>
   </form>
</div>
<!--left END-->
<div class="m_n f_l">&nbsp;</div>
<!--right S-->
<div class="m_r_1 f_r">
  <?php if($kw) { ?>
  <div class="box_head"><div><i></i><strong>相关搜索</strong></div></div>
  <div class="box_body">
    <div class="sch_site">
      <ul>
      <?php if(is_array($MODULE)) { foreach($MODULE as $mod) { ?><?php if($mod['moduleid']>3 && $mod['moduleid']!=$moduleid && !$mod['islink']) { ?><li><a href="<?php echo $mod['linkurl'];?>search.php?kw=<?php echo urlencode($kw);?>">在 <span class="f_red"><?php echo $mod['name'];?></span> 找 <?php echo $kw;?></a></li><?php } ?>
<?php } } ?>
      </ul>
    </div>
    <?php echo tag("moduleid=$moduleid&table=keyword&condition=moduleid=$moduleid and status=3 and word<>'$kw' and keyword like '%$keyword%'&pagesize=10&order=total_search desc&template=list-search_relate", -2);?>
  </div>
  <div class="b10">&nbsp;</div>
  <?php } ?>
  <div class="sponsor"><?php echo ad($moduleid,$catid,$kw,7);?></div>
  <div class="box_head"><div><i></i><strong>今日搜索排行</strong></div></div>
  <div class="box_body">
    <div class="rank_list">
      <?php echo tag("moduleid=$moduleid&table=keyword&condition=moduleid=$moduleid and status=3 and updatetime>$today_endtime-86400&pagesize=10&order=today_search desc&key=today_search&template=list-search_rank");?>
    </div>    
  </div>
  <div class="b10">&nbsp;</div>
  <div class="box_head"><div><i></i><strong>本周搜索排行</strong></div></div>
  <div class="box_body">
    <div class="rank_list">
      <?php echo tag("moduleid=$moduleid&table=keyword&condition=moduleid=$moduleid and status=3 and updatetime>$today_endtime-86400*7&pagesize=10&order=week_search desc&key=week_search&template=list-search_rank");?>
    </div>    
  </div>
  <div class="b10">&nbsp;</div>
  <div class="box_head"><div><i></i><strong>本月搜索排行</strong></div></div>
  <div class="box_body">
    <div class="rank_list">
      <?php echo tag("moduleid=$moduleid&table=keyword&condition=moduleid=$moduleid and status=3 and updatetime>$today_endtime-86400*30&pagesize=10&order=month_search desc&key=month_search&template=list-search_rank");?>
    </div>    
  </div>
   <?php if($kw) { ?>
    <div class="b10">&nbsp;</div>
     <div class="arx_list_info">
    <div class="box_head">
      <div><i></i><strong>相关供应热门排行</strong></div>
    </div>
    <div class="box_body_new_com">
    <?php echo tag("moduleid=$moduleid&condition=status=3 and title like '%".$kw."%'&length=34&areaid=$cityid&pagesize=10&order=hits desc,vip desc,addtime desc&dir=xhtag&template=sell-search_rank2");?> 
    </div>
    </div>
      <?php } else { ?>
    <div class="b10">&nbsp;</div>
      <div class="arx_list_info">
    <div class="box_head">
      <div><i></i><strong>最新供应</strong></div>
    </div>
    <div class="box_body_new">
    <?php echo tag("moduleid=5&length=34&condition=status=3&areaid=$cityid&pagesize=10&order=addtime desc&dir=xhtag&template=sell-search_rank");?> 
    </div>
      </div>
      <?php } ?>
<!--right END-->
</div>
</div>
</div>
<!--内容部分结束-->
<div class="clear"></div>
<!--热销产品推荐开始-->
<div class="hotproduct" id="hotproduct">
<div class="hotproductT">
<h2>热销产品推荐</h2>
<a class="hotproductT_Ar prev"></a>
<a class="hotproductT_Al next"></a>
</div>
<div class="hotproductC">
<ul>
  <?php echo tag("moduleid=$moduleid&length=36&condition=status=3 and level>0 and thumb<>''&areaid=$cityid&pagesize=15&order=hits desc,vip desc,addtime desc&width=180&height=180&target=_blank&lazy=$lazy&dir=xhtag&template=xh-thumb-table");?> 
  </ul>
</div>
</div>
<script type="text/javascript">
jQuery(".hotproduct").slide({titCell:".hotproductT ul",mainCell:".hotproductC ul",autoPage:true,effect:"left",autoPlay:true,vis:5,easing:"easeOutCirc",delayTime:700,trigger:"click"});
</script>
<!---热销产品推荐结束-->
<div class="m warn_wrap mt_20">
    <div class="warn_ico fl-clr">
        <div class="warn-pic fl-left"></div>
        <div class="warn-detail-rig fl-right fl-clr">
            <dl class="fl-clr">
              <dt>免责声明：</dt>
              <dd>当前页为<?php echo $kw;?>价格信息展示，该页所展示的<?php echo $kw;?>批发价格、<?php echo $kw;?>报价等相关信息均有企业自行提供，<?php echo $kw;?>价格真实性、准确性、合法性由店铺所有企业完全负责。<?php echo $DT['sitename'];?>对此不承担任何保证责任。</dd>
            </dl>
            <dl class="fl-clr">
              <dt>友情提醒：</dt>
              <dd>建议您通过拨打<?php echo $kw;?>厂家联系方式确认最终价格，并索要<?php echo $kw;?>样品确认产品质量。如<?php echo $kw;?>报价过低，可能为虚假信息，请确认<?php echo $kw;?>报价真实性，谨防上当受骗。</dd>
            </dl>
        </div>
    </div>
    </div>
    
<div class="clear"></div>
</div>
<?php include template('footer');?>