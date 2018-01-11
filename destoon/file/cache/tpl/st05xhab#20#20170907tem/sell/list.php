<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header');?>
<script type="text/javascript">var sh = '<?php echo $MOD['linkurl'];?>search.php?catid=<?php echo $catid;?>';</script>
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
 <?php $mid = $moduleid;?>
 <?php $barea=get_cat($catid,$mid,1);?> 
 <?php if($barea['parentid']) { ?>
 <?php $caid=$barea['parentid'];?>
 <?php } else { ?>
 <?php $caid=$catid;?>
 <?php } ?>
  <div class="product_search">
    <div class="product_option1L">
      <h3>已选：</h3>
    </div>
    <div class="product_searchC">
      <ul>
        <li class="on" <?php if($catid==0) { ?>style="display:none"<?php } ?>
><a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?catid=0&areaid='.$areaid);?>">行业：
          <h1 style="font-size:14px;font-weight:normal;float:right"><?php echo cat_name($caid);?></h1>
          </a></li>
         <li class="on" <?php if(!$barea['parentid']) { ?>style="display:none"<?php } ?>
><a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?catid='.$barea[parentid].'&areaid='.$areaid);?>"><span style="display:block;float:left;">子类：</span><h1 style="font-size:14px;font-weight:normal;float:left;"><?php echo cat_name($catid);?></h1></a></li>
        <li class="on" <?php if(!$areaid) { ?>style="display:none"<?php } ?>
><a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?catid='.$catid);?>">地区：<?php echo ar_name($areaid);?></a></li>
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
    <div class="product_searchR"> <a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?kw=&catid=0');?>">重选</a> </div>
  </div>
  <div class="product_option1">
    <div class="product_option1L">
      <h3>行业：</h3>
    </div>
    <div class="product_option1C">
      <ul <?php if($catid) { ?>class="side_option2"<?php } else { ?>class="side_option"<?php } ?>
 id="a_lx">
        <li class="<?php if(!$catid) { ?>product_option1C3<?php } else { ?>product_option1C2<?php } ?>
"><a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?catid=0&areaid='.$areaid);?>">全部</a></li>
     <?php $tagsx=tag("table=category&condition=moduleid=$moduleid and parentid=0&order=catid ASC&pagesize=100&template=null");?>
        <?php if(is_array($tagsx)) { foreach($tagsx as $c) { ?>
        <li class="<?php if($catid==$c['catid'] || $barea['parentid']==$c['catid']) { ?>product_option1C3<?php } else { ?>product_option1C1<?php } ?>
"><a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?catid='.$c[catid].'&areaid='.$areaid);?>"><?php echo $c['catname'];?></a></li>
         <?php } } ?>
      </ul>
    </div>
    <div class="product_option1R"> <a id="b_lx" onclick="set_toggle('lx','side_option');" <?php if($catid) { ?>class="cur"<?php } ?>
><?php if($catid) { ?>收起<?php } else { ?>展开<?php } ?>
</a> </div>
  </div>
  <?php if($catid) { ?>
    <?php $zcat = get_maincat($catid, $mid, 1);?>
    <?php if($zcat) { ?>
  <div class="product_option1">
    <div class="product_option1L">
      <h3>子类：</h3>
    </div>
    <div class="product_option1C">
      <ul <?php if($caid) { ?>class="side_option2"<?php } else { ?>class="side_option"<?php } ?>
 id="a_zl">
        <li class="<?php if(!$barea['parentid']) { ?>product_option1C3<?php } else { ?>product_option1C2<?php } ?>
"><a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?catid=0&areaid='.$areaid);?>">全部</a></li>
  <?php if(is_array($zcat)) { foreach($zcat as $v) { ?>
   <li class="<?php if($catid==$v['catid']) { ?>product_option1C3<?php } else { ?>product_option1C1<?php } ?>
"><a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?catid='.$v[catid].'&areaid='.$areaid);?>"><?php echo $v['catname'];?></a></li>
  <?php } } ?>
      </ul>
    </div>
    <div class="product_option1R"> <a id="b_zl" onclick="set_toggle('zl','side_option');" <?php if($caid) { ?>class="cur"<?php } ?>
><?php if($caid) { ?>收起<?php } else { ?>展开<?php } ?>
</a> </div>
  </div>
    <?php } ?>
  <?php } ?>
  <?php if($CP) { ?>
  <?php if(is_array($PPT)) { foreach($PPT as $p) { ?>
  <div class="product_option1">
 <div class="product_option1L"><h3><?php echo $p['name'];?>：</h3></div>
  <div class="product_option1C">
      <ul class="side_option">
      <li class="<?php if($p['select']=='') { ?>product_option1C3<?php } else { ?>product_option1C2<?php } ?>
"><a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?catid='.$catid.'&areaid='.$areaid.'&ppt_'.$p[oid]);?>">全部</a></li>
      <?php if(is_array($p['options'])) { foreach($p['options'] as $o) { ?>
      <li class="product_option1C1"><a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?catid='.$catid.'&areaid='.$areaid.'&ppt_'.$p[oid].'='.urlencode($o));?>"><?php echo $o;?></a></li>
      <?php } } ?>
      </ul>
    </div>
  </div>
  <?php } } ?>
  <?php } ?>
  <div class="product_option1">
    <div class="product_option1L">
      <h3>地区：</h3>
    </div>
    <div class="product_option1C">
      <ul class="side_option" id="a_sf">
        <li class="<?php if(!$areaid) { ?>product_option1C3<?php } else { ?>product_option1C2<?php } ?>
"><a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?catid='.$catid);?>">全部</a></li>
         <?php $mainarea = get_mainarea(0)?>
          <?php if(is_array($mainarea)) { foreach($mainarea as $k => $v) { ?>
        <li class="<?php if($v['areaid']==$areaid) { ?>product_option1C3<?php } else { ?>product_option1C1<?php } ?>
"><a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?catid='.$catid.'&areaid='.$v[areaid]);?>"><?php echo $v['areaname'];?></a></li>
         <?php } } ?>
      </ul>
    </div>
    <div class="product_option1R"> <a id="b_sf" onclick="set_toggle('sf','side_option');" <?php if($areaid) { ?>class="cur"<?php } ?>
><?php if($areaid) { ?>收起<?php } else { ?>更多<?php } ?>
</a> </div>
  </div>
 <div class="product_option1">
 <div class="product_option1L"><h3>类型：</h3></div>
  <div class="product_option1C">
      <ul class="side_option">
      <li class="product_option1C3"><a style="color:#fff; background:#ec3901;" href="<?php echo $MOD['linkurl'];?><?php echo $linkurl;?>">全部</a></li>
      <?php if(is_array($TYPE)) { foreach($TYPE as $k => $v) { ?>
      <li class="product_option1C1"><a href="javascript:Go('<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?typeid='.$k.'&catid='.$catid);?>');"><?php echo $v;?></a></li>
      <?php } } ?>
      </ul>
    </div>
</div>
<div class="product_listT">
       <div class="tool">
      <form action="<?php echo $MOD['linkurl'];?>search.php" id="fsearch2">
      <input type="hidden" name="catid" id="catid" value="<?php echo $catid;?>"/>
        <div class="sort-inner">
          <div class="styles fr"> <a class="style_0 hover" href="javascript:;">列表</a> <a class="style_1" href="javascript:;" onclick="Go(sh+'&amp;list=1');" title="大图列表">大图</a> </div>
          <div class="sort fl">
            <input type="hidden" name="day" value="" id="day">
            <input type="hidden" name="order" value="" id="order">
            <ul class="clearfix">
             <li class="first"> <a href="javascript:Go('<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?catid='.$catid.'&typeid='.$typeid.'&areaid='.$areaid.'&order=0');?>');" title="综合排序" class="link active">综合排序</a> </li>
              <li class="droplist hoverSelf"><a class="link" title="更新时间">更新时间<span class="icon"></span> </a>
                <ul onchange="Go(sh+'&day='+this.value)">
                  <li><a href="javascript:Go('<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?catid='.$catid.'&typeid='.$typeid.'&areaid='.$areaid.'&day=1');?>');">1天内</a></li>
                  <li><a href="javascript:Go('<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?catid='.$catid.'&typeid='.$typeid.'&areaid='.$areaid.'&day=3');?>');">3天内</a></li>
                  <li><a href="javascript:Go('<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?catid='.$catid.'&typeid='.$typeid.'&areaid='.$areaid.'&day=7');?>');">7天内</a></li>
                  <li><a href="javascript:Go('<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?catid='.$catid.'&typeid='.$typeid.'&areaid='.$areaid.'&day=15');?>');">15天内</a></li>
                  <li><a href="javascript:Go('<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?catid='.$catid.'&typeid='.$typeid.'&areaid='.$areaid.'&day=30');?>');">30天内</a></li>
                </ul>
              </li>
              <li class="droplist hoverSelf"><a class="link" title="显示顺序">显示顺序<span class="icon"></span> </a>
                <ul>
                  <li><a href="javascript:Go('<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?catid='.$catid.'&typeid='.$typeid.'&areaid='.$areaid.'&order=2');?>');">价格从高到底</a></li>
                  <li><a href="javascript:Go('<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?catid='.$catid.'&typeid='.$typeid.'&areaid='.$areaid.'&order=3');?>');">价格从低到高</a></li>
                  <li><a href="javascript:Go('<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?catid='.$catid.'&typeid='.$typeid.'&areaid='.$areaid.'&order=4');?>');"><?php echo VIP;?>级别从高到低</a></li>
                  <li><a href="javascript:Go('<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?catid='.$catid.'&typeid='.$typeid.'&areaid='.$areaid.'&order=5');?>');"><?php echo VIP;?>级别从低到高</a></li>
                  <li><a href="javascript:Go('<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?catid='.$catid.'&typeid='.$typeid.'&areaid='.$areaid.'&order=6');?>');">供货量由高到低</a></li>
                  <li><a href="javascript:Go('<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?catid='.$catid.'&typeid='.$typeid.'&areaid='.$areaid.'&order=7');?>');">供货量由低到高</a></li>
                  <li><a href="javascript:Go('<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?catid='.$catid.'&typeid='.$typeid.'&areaid='.$areaid.'&order=8');?>');">起订量由高到低</a></li>
                  <li><a href="javascript:Go('<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?catid='.$catid.'&typeid='.$typeid.'&areaid='.$areaid.'&order=9');?>');">起订量由低到高</a></li>
                </ul>
              </li>
              <li class="bjg">
      <input type="checkbox" <?php if($price==1) { ?>checked<?php } ?>
 onclick="Go(sh+'&price=1');"/> 标价&nbsp;
      <input type="checkbox" <?php if($thumb==1) { ?>checked<?php } ?>
 onclick="Go(sh+'&thumb=1');"/> 图片&nbsp;
      <input type="checkbox" <?php if($vip==1) { ?>checked<?php } ?>
 onclick="Go(sh+'&vip=1');"/> <?php echo VIP;?>&nbsp;&nbsp;</li>
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
      <?php if($page == 1) { ?><?php echo ad($moduleid,$catid,$kw,6);?><?php } ?>
     <?php if($tags) { ?>
    <?php include template('list-'.$module, 'tag');?>
    <?php } else { ?>
    <div class="newPurchaseList">
    <div class="nonoresult">
    <?php include template('noresult', 'message');?>
    </div>
    </div>
    <?php } ?>
    <br/>
 </form>
  </div>
  <div class="m_n f_l">&nbsp;</div>
  <div class="m_r_1 f_r">
  <div class="part">
      <h2 class="channel_pur_tit_1">我是供应商</h2>
    <a class="channel_pur_btn_1" target="_blank" href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_my'];?>?mid=5&action=add" rel="nofollow">免费注册发布产品</a>
      <p>发布优质产品信息获得更多大宗采购推荐匹配的机会</p>
    </div>
    <div class="b10">&nbsp;</div>
  <div class="part">
      <h2 class="channel_pur_tit_2">我是采购商</h2>
        <a class="channel_pur_btn_2" target="_blank" href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_my'];?>?mid=6&action=add" rel="nofollow">免费注册发布采购</a>
      <p>发布询价单信息坐等大量优质供应商主动联系</p>
    </div>
    <div class="b10">&nbsp;</div>
    <div class="sponsor"><?php echo ad($moduleid,$catid,$kw,7);?></div>
    <div class="box_head">
      <div><i></i><strong>推荐供应</strong></div>
    </div>
    <div class="box_body">
    <?php $xhbq=tag("moduleid=$moduleid&catid=$catid&length=34&condition=status=3 and level>0&areaid=$cityid&pagesize=9&order=vip desc,addtime desc&template=null");?> 
      <?php if(is_array($xhbq)) { foreach($xhbq as $i => $v) { ?>
      <li><em <?php if($i<3) { ?>class="box_y"<?php } else { ?>class="box_n"<?php } ?>
><?php echo $i+1;?></em><a href="<?php echo $v['linkurl'];?>" title="<?php echo $v['alt'];?>" target="_blank"><?php echo $v['title'];?></a></li>
      <?php } } ?>
    </div>
    <div class="b10">&nbsp;</div>
    <div class="arx_list_info">
    <div class="box_head"><div><i></i><strong>最新供应</strong></div></div>
    <div class="box_body_new">
      <?php echo tag("moduleid=$moduleid&length=34&condition=status=3&areaid=$cityid&pagesize=9&order=addtime desc&dir=xhtag&template=sell-search_rank");?> 
    </div>
        </div>
    </div>
</div>
<!--right END-->
</div>
<!--2ping END-->
<!--3ping S-->
<div class="warn_wrap mt_20" id="hotproduct">
    <div class="warn_ico fl-clr">
        <div class="warn-pic fl-left"></div>
        <div class="warn-detail-rig fl-right fl-clr">
            <dl class="fl-clr">
              <dt>免责声明：</dt>
              <dd>当前页为<?php echo cat_name($caid);?>价格信息展示，该页所展示的<?php echo cat_name($caid);?>批发价格、<?php echo cat_name($caid);?>报价等相关信息均有企业自行提供，<?php echo cat_name($caid);?>价格真实性、准确性、合法性由店铺所有企业完全负责。<?php echo $DT['sitename'];?>对此不承担任何保证责任。</dd>
            </dl>
            <dl class="fl-clr">
              <dt>友情提醒：</dt>
              <dd>建议您通过拨打<?php echo cat_name($caid);?>厂家联系方式确认最终价格，并索要<?php echo cat_name($caid);?>样品确认产品质量。如<?php echo cat_name($caid);?>报价过低，可能为虚假信息，请确认<?php echo cat_name($caid);?>报价真实性，谨防上当受骗。</dd>
            </dl>
        </div>
    </div>
    </div>
<!--3ping END-->
</div>
<?php include template('footer');?>