<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header', 'memberwap');?>
<div class="menu">
<ul>
<li>
<table cellpadding="0" cellspacing="0">
<tr>
<td class="tab" id="add"><a href="?mid=<?php echo $mid;?>&action=add"><span>添加<?php echo $MOD['name'];?></span></a></td>
<?php if($_userid) { ?>
<td class="tab" id="s3"><a href="?mid=<?php echo $mid;?>"><span>已发布<span class="px10">(<?php echo $nums['3'];?>)</span></span></a></td>
<td class="tab" id="s2"><a href="?mid=<?php echo $mid;?>&status=2"><span>待审核<span class="px10">(<?php echo $nums['2'];?>)</span></span></a></td>
<td class="tab" id="s1"><a href="?mid=<?php echo $mid;?>&status=1"><span>未通过<span class="px10">(<?php echo $nums['1'];?>)</span></span></a></td>
<td class="tab" id="s4"><a href="?mid=<?php echo $mid;?>&status=4"><span>已过期<span class="px10">(<?php echo $nums['4'];?>)</span></span></a></td>
<td class="tab" id="type"><a href="javascript:Dwidget('type.php?item=product', '[<?php echo $MODULE['5']['name'];?>分类]', 600, 300);"><span>我的分类<span class="px10">(<?php echo $nums['0'];?>)</span></span></a></td>
<?php } ?>
</tr>
</table>
</li>
</ul>
</div>
<?php if($action=='add' || $action=='edit') { ?>
<iframe src="" name="send" id="send" style="display:none;"></iframe>
<form method="post" id="dform" action="?" target="send" onsubmit="return check();">
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<input type="hidden" name="mid" value="<?php echo $mid;?>"/>
<input type="hidden" name="itemid" value="<?php echo $itemid;?>"/>
<input type="hidden" name="forward" value="<?php echo $forward;?>"/>
  <input type="hidden" name="num_title" id="num_title" value="0"/>
  <input type="hidden" name="num_brand" id="num_brand" value="0"/>
  <input type="hidden" name="num_zycs" id="num_zycs" value="0"/>
  <input type="hidden" name="num_jydj" id="num_jydj" value="0"/>
  <input type="hidden" name="num_group" id="num_group" value="0"/>
<table cellpadding="6" cellspacing="1" class="tb">
<?php if($status==1 && $action=='edit' && $note) { ?>
<tr>
<td class="tl">未通过原因</td>
<td class="tr f_blue"><?php echo $note;?></td>
</tr>
<?php } ?>
<tr>
<td class="tl"><span class="f_red">*</span>类型</td>
<td class="tr">
<?php if(is_array($TYPE)) { foreach($TYPE as $k => $v) { ?>
<input type="radio" name="post[typeid]" value="<?php echo $k;?>" <?php if($k==$typeid) { ?>checked<?php } ?>
 id="typeid_<?php echo $k;?>"/> <label for="typeid_<?php echo $k;?>" id="t_<?php echo $k;?>"><?php echo $v;?></label>&nbsp;
<?php } } ?>
</td>
</tr>
<tr>
<td class="tl"><span class="f_red">*</span>标题</td>
<td class="tr f_gray">
<input name="post[title]" type="text" id="title" size="35" value="<?php echo $title;?>" placeholder="信息标题10-30个字"/> 
<span id="dtitle" class="f_red"></span></td>
</tr>
<?php if($action=='add' && $could_color) { ?>
<tr>
<td class="tl">颜色</td>
<td class="tr">
<?php echo dstyle('color');?>&nbsp;
设置信息标题颜色需消费 <strong class="f_red"><?php echo $MOD['credit_color'];?></strong> <?php echo $DT['credit_name'];?>
</td>
</tr>
<?php } ?>
<tr>
<td class="tl"><span class="f_red">*</span>行业</td>
<td class="tr"><div id="catesch"></div><?php echo ajax_category_select('post[catid]', '选择行业', $catid, $moduleid, $DT_TOUCH ? '' : 'size="2" style="height:220px;width:150px;padding: 2px 10px;"');?><?php if(!$DT_TOUCH) { ?><br/><?php } ?>
<?php if($DT['schcate_limit']) { ?><input type="button" value="搜索分类" onclick="schcate(<?php echo $moduleid;?>);" class="btn"/> <?php } ?>
<span id="dcatid" class="f_red"></span></td>
</tr>
<?php if($CP) { ?>
<script type="text/javascript">
var property_catid = <?php echo $catid;?>;
var property_itemid = <?php echo $itemid;?>;
var property_admin = 0;
</script>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/property.js"></script>
<tbody id="load_property" style="display:none;">
<tr><td></td><td></td></tr>
</tbody>
<?php } ?>
<tr>
<td class="tl">品牌</td>
<td class="tr f_gray"><input name="post[brand]" id="brand" type="text" size="35" value="<?php echo $brand;?>" placeholder="填写自己产品的品牌"/> </td>
</tr>
<?php if($FD) { ?><?php echo fields_html('<td class="tl">', '<td class="tr f_gray">', $item);?><?php } ?>
<tr>
<td class="tl"><span class="f_red">*</span>详细</td>
<td class="tr f_gray">
<textarea name="post[content]" id="content" class="dsn"><?php echo $content;?></textarea>
<?php echo deditor($moduleid, 'content', $group_editor, '98%', 200);?>
<div class="basisinfo4"><p>详情：内容尽量是原创，建议50字以上。</p></div>
<br/><span id="dcontent" class="f_red"></span>
</td>
</tr>
<?php if($MOD['swfu'] == 1 && DT_EDITOR == 'fckeditor' && !$DT_TOUCH) { ?>
<?php include DT_ROOT.'/api/swfupload/editor.inc.php';?>
<?php } ?>
<tr>
<td class="tl">图片</td>
<td class="tr">
<div class="basisinfo4">
<p class="f_gray">图片规格：<strong class="f_red"><?php echo $MOD['thumb_width'];?> x <?php echo $MOD['thumb_height'];?></strong>，尽量使用高清图片。</p>
</div>
<input type="hidden" name="post[thumb]" id="thumb" value="<?php echo $thumb;?>"/>
<?php if($IMVIP || !$MG['uploadpt']) { ?>
<input type="hidden" name="post[thumb1]" id="thumb1" value="<?php echo $thumb1;?>"/>
<input type="hidden" name="post[thumb2]" id="thumb2" value="<?php echo $thumb2;?>"/>
<?php } ?>
<table width="280">
<tr align="center" height="120" class="c_p">
<td width="100"><img src="<?php if($thumb) { ?><?php echo $thumb;?><?php } else { ?><?php echo $EXT['mobile_url'];?>image/waitpic.gif<?php } ?>
" width="80" height="80" id="showthumb" title="预览图片" alt="" onclick="if(this.src.indexOf('waitpic.gif') == -1){_preview(Dd('showthumb').src, 1);}else{Dalbum('',<?php echo $moduleid;?>,<?php echo $MOD['thumb_width'];?>,<?php echo $MOD['thumb_height'];?>, Dd('thumb').value, true);}"/></td>
<?php if($IMVIP || !$MG['uploadpt']) { ?>
<td width="100"><img src="<?php if($thumb1) { ?><?php echo $thumb1;?><?php } else { ?><?php echo $EXT['mobile_url'];?>image/waitpic.gif<?php } ?>
" width="80" height="80" id="showthumb1" title="预览图片" alt="" onclick="if(this.src.indexOf('waitpic.gif') == -1){_preview(Dd('showthumb1').src, 1);}else{Dalbum(1,<?php echo $moduleid;?>,<?php echo $MOD['thumb_width'];?>,<?php echo $MOD['thumb_height'];?>, Dd('thumb1').value, true);}"/></td>
<td width="100"><img src="<?php if($thumb2) { ?><?php echo $thumb2;?><?php } else { ?><?php echo $EXT['mobile_url'];?>image/waitpic.gif<?php } ?>
" width="80" height="80" id="showthumb2" title="预览图片" alt="" onclick="if(this.src.indexOf('waitpic.gif') == -1){_preview(Dd('showthumb2').src, 1);}else{Dalbum(2,<?php echo $moduleid;?>,<?php echo $MOD['thumb_width'];?>,<?php echo $MOD['thumb_height'];?>, Dd('thumb2').value, true);}"/></td>
<?php } else { ?>
<td width="100"><a href="grade.php" target="_blank"><img src="<?php echo DT_SKIN;?>image/vippic.gif" width="80" height="80"/></a></td>
<td width="100"><a href="grade.php" target="_blank"><img src="<?php echo DT_SKIN;?>image/vippic.gif" width="80" height="80"/></a></td>
<?php } ?>
</tr>
<tr align="center" class="c_p">
<td>
<ul class="tu">
<li class="tu-1"onclick="selAlbum('');"/>历史图库</li>
<li class="tu-2"onclick="delAlbum('','wait');"/>删 除</li>
</ul>
</td>
<?php if($IMVIP || !$MG['uploadpt']) { ?>
<td>
<ul class="tu">
<li class="tu-1" onclick="selAlbum(1);"/>历史图库</li>
<li class="tu-2" onclick="delAlbum(1,'wait');"/>删 除</li>
</ul>
</td>
<td>
<ul class="tu">
<li class="tu-1" onclick="selAlbum(2);"/>历史图库</li>
<li class="tu-2" onclick="delAlbum(2,'wait');"/>删 除</li>
</ul>
</td>
<?php } else { ?>
<td onclick="if(confirm('此操作仅限<?php echo VIP;?>会员，是否现在申请？')) Go('grade.php');">
<ul class="tu">
<li class="tu-1">历史图库</li>
<li class="tu-2">删 除</li>
</ul></td>
<td onclick="if(confirm('此操作仅限<?php echo VIP;?>会员，是否现在申请？')) Go('grade.php');">
<ul class="tu">
<li class="tu-1">历史图库</li>
<li class="tu-2">删 除</li>
</ul></td>
<?php } ?>
</tr>
</table>
<span id="dthumb" class="f_red"></span>
</td>
</tr>
<tr>
<td class="tl">过期</td>
<td class="tr f_gray"><?php echo dcalendar('post[totime]', $totime);?>&nbsp;
<select onchange="Dd('posttotime').value=this.value;">
<option value="">快捷选择</option>
<option value="">长期有效</option>
<option value="<?php echo timetodate($DT_TIME+86400*3, 3);?>">3天</option>
<option value="<?php echo timetodate($DT_TIME+86400*7, 3);?>">一周</option>
<option value="<?php echo timetodate($DT_TIME+86400*15, 3);?>">半月</option>
<option value="<?php echo timetodate($DT_TIME+86400*30, 3);?>">一月</option>
<option value="<?php echo timetodate($DT_TIME+86400*182, 3);?>">半年</option>
<option value="<?php echo timetodate($DT_TIME+86400*365, 3);?>">一年</option>
</select>
不选为长期有效
<span id="dposttotime" class="f_red"></span></td>
</tr>
<tr>
<td class="tl">参数</td>
<td class="tr nv">
<table cellpadding="4" cellspacing="1" bgcolor="#D7D7D7">
<tr bgcolor="#F7F7F7" align="center">
<td>参数名称</td>
<td>参数值</td>
</tr>
<tr bgcolor="#FFFFFF" align="center">
<td><input name="post[n1]" type="text" size="10" value="<?php echo $n1;?>" id="n1"/></td>
<td><input name="post[v1]" type="text" size="15" value="<?php echo $v1;?>" id="v1"/></td>
</tr>
<tr bgcolor="#FFFFFF" align="center">
<td><input name="post[n2]" type="text" size="10" value="<?php echo $n2;?>" id="n2"/></td>
<td><input name="post[v2]" type="text" size="15" value="<?php echo $v2;?>" id="v2"/></td>
</tr>
<tr bgcolor="#FFFFFF" align="center">
<td><input name="post[n3]" type="text" size="10" value="<?php echo $n3;?>" id="n3"/></td>
<td><input name="post[v3]" type="text" size="15" value="<?php echo $v3;?>" id="v3"/></td>
</tr>
<tr bgcolor="#FFFFFF" align="center">
<td class="f_gray">例如：规格</td>
<td class="f_gray">例如：10cm*20cm</td>
</tr>
</table>
</td>
</tr>
<tr>
<td class="tl">条件</td>
<td class="tr">
<div class="basisinfo4"><p>交易条件：详细填写交易条件，否则无法在线下单。</p></div>
<table width="100%">
<tr>
<td width="70">计量单位</td>
<td><input name="post[unit]" type="text" size="10" value="<?php echo $unit;?>" onblur="if(this.value){Dd('u1').innerHTML=Dd('u2').innerHTML=Dd('u3').innerHTML=this.value;}" id="u0"/><input type="hidden" id="uu" value="单位"/></td>
</tr>
<tr>
<td>单价</td>
<td><input name="post[price]" type="text" size="10" value="<?php echo $price;?>"/> <?php echo $DT['money_unit'];?>/<span id="u1"><?php if($unit) { ?><?php echo $unit;?><?php } else { ?>单位<?php } ?>
</span></td>
</tr>
<tr>
<td>起订</td>
<td><input name="post[minamount]" type="text" size="10" value="<?php echo $minamount;?>"/> <span id="u2"><?php if($unit) { ?><?php echo $unit;?><?php } else { ?>单位<?php } ?>
</span></td>
</tr>
<tr>
<td>总货</td>
<td><input name="post[amount]" type="text" size="10" value="<?php echo $amount;?>"/> <span id="u3"><?php if($unit) { ?><?php echo $unit;?><?php } else { ?>单位<?php } ?>
</span></td>
</tr>
<tr>
<td>发货期限</td>
<td>自买家付款之日起 <input name="post[days]" type="text" size="2" value="<?php echo $days;?>"/> 天内发货</td>
</tr>
</table>
</td>
</tr>
<tr<?php if(!$_userid) { ?> style="display:none;"<?php } ?>
>
<td class="tl">分类</td>
<td class="tr" id="mycatid"><span id="type_box"><?php echo $mycatid_select;?></span>&nbsp; <a href="javascript:var type_item='product-<?php echo $_userid;?>',type_name='post[mycatid]',type_default='<?php echo $L['type_default'];?>',type_id=<?php echo $mycatid;?>,type_interval=setInterval('type_reload()',500);Dwidget('type.php?item=product', '[<?php echo $MODULE['5']['name'];?>分类]', 600, 300);" class="t">[管理分类]</a></td>
</tr>
<tr<?php if(!$_userid) { ?> style="display:none;"<?php } ?>
>
<td class="tl">推荐</td>
<td class="tr">
<input type="radio" name="post[elite]" value="1"<?php if($elite) { ?> checked<?php } ?>
/> 是
&nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio" name="post[elite]" value="0"<?php if(!$elite) { ?> checked<?php } ?>
/> 否
</td>
</tr>
<?php if(!$_userid) { ?>
<?php include template('guest_contact', 'chip');?>
<?php } ?>
<?php if($action=='add' && $could_elite) { ?>
<tr>
<td class="tl">上榜</td>
<td class="tr">
<input type="checkbox" name="elite" value="1" onclick="if(<?php echo $_credit;?> < <?php echo $MOD['credit_elite'];?>) {confirm('<?php echo $DT['credit_name'];?>不足，当前余额:<?php echo $_credit;?>');this.checked=false;}"/>
需要上传至少1张产品图片，且需消费 <strong class="f_red"><?php echo $MOD['credit_elite'];?></strong> <?php echo $DT['credit_name'];?>
</td>
</tr>
<?php } ?>
<?php if($fee_add) { ?>
<tr>
<td class="tl">交费</td>
<td class="tr"><span class="f_b f_red"><?php echo $fee_add;?></span> <?php echo $fee_unit;?></td>
</tr>
<?php if($fee_currency == 'money') { ?>
<tr>
<td class="tl">余额</td>
<td class="tr"><span class="f_blue f_b"><?php echo $_money;?><?php echo $fee_unit;?></span> <a href="charge.php?action=pay" target="_blank" class="t">[充值]</a></td>
</tr>
<?php } else { ?>
<tr>
<td class="tl">余额</td>
<td class="tr"><span class="f_blue f_b"><?php echo $_credit;?><?php echo $fee_unit;?></span> <a href="credit.php?action=buy" target="_blank" class="t">[购买]</a></td>
</tr>
<?php } ?>
<?php } ?>
<?php if($need_password) { ?>
<tr>
<td class="tl"><span class="f_red">*</span>支付密码</td>
<td class="tr"><?php include template('password', 'chip');?> <span id="dpassword" class="f_red"></span></td>
</tr>
<?php } ?>
<?php if($need_question) { ?>
<tr>
<td class="tl"><span class="f_red">*</span> 验证问题</td>
<td class="tr"><?php include template('question', 'chip');?> <span id="danswer" class="f_red"></span></td>
</tr>
<?php } ?>
<?php if($need_captcha) { ?>
<tr>
<td class="tl"><span class="f_red">*</span> 验证码</td>
<td class="tr"><?php include template('captcha', 'chip');?> <span id="dcaptcha" class="f_red"></span></td>
</tr>
<?php } ?>
<?php if($action=='add') { ?>
<tr style="display:none;" id="weibo_sync">
<td class="tl">同步</td>
<td class="tr" id="weibo_show"></td>
</tr>
<?php } ?>
<tr>
<td class="tl">&nbsp;</td>
<td class="tr" height="50"><input type="submit" name="submit" value=" 提 交 " class="btn_g"/>&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" value=" 返 回 " class="btn_2" onclick="history.back(-1);"/></td>
</tr>
</table>
<!--信息评级-->
<div class="sell_pf">
        <div class="sell_pf_top"><font class="f_l" style="color: #dd2726;">信息质量：</font><span id="xj" class="f_l"></span>
<div class="f_r"><b>本站优先展示5星级产品</b></div></div>
            <div class="sell_pf_content">
            <div id="wxcp" style="display:none; color:#F00; font-weight:600;">恭喜：您发布的产品达到五星级标准！</div>
            <h3 id="jy">建议：</h3>
                <ul>
<li id="pfx1"><p>1、标题长度大于10个字（建议10-30字）</p><a href="#title">补充</a></li>
<li id="pfx2"><p>2、填写产品品牌（建议大于2个字）</p><a href="#brand">补充</a></li>
<li id="pfx4"><p>3、填写更详细的主要参数</p><a href="#n1">补充</a></li>
<li id="pfx5"><p>4、完善交易条件信息</p><a href="#u0">补充</a></li>
<li id="pfx6"><p>5、公司自己的产品分类</p><a href="#mycatid">补充</a></li>
                </ul>
            </div>
            <div style="clear:both"></div>
        </div>
</form>
<?php echo load('clear.js');?>
<?php if($action=='add') { ?>
<script type="text/javascript">s('mid_<?php echo $mid;?>');m('<?php echo $action;?>');</script>
<?php } else { ?>
<script type="text/javascript">s('mid_<?php echo $mid;?>');m('s<?php echo $status;?>');</script>
<?php } ?>
<?php } else { ?>
<div class="tt">
<form action="?">
<input type="hidden" name="mid" value="<?php echo $mid;?>"/>
<input type="hidden" name="status" value="<?php echo $status;?>"/>
<input type="text" size="30" name="kw" value="<?php echo $kw;?>" placeholder="请输入搜索关键字"/>&nbsp;
<input type="submit" value=" 搜 索 " class="btn"/>
</form>
</div>
<div class="ls">
<form method="post">
<table cellpadding="0" cellspacing="0" class="tb">
<tr>
<th width="20"><input type="checkbox" onclick="checkall(this.form);"/></th>
<th>图片</th>
<th>产品信息</th>
<th width="90">管理(左划)</th>
</tr>
</table>
<?php if(is_array($lists)) { foreach($lists as $k => $v) { ?>
<div class="list-bian">
<table cellpadding="0" cellspacing="0" class="tb">
<tr onmouseover="this.className='on';" onmouseout="this.className='';" align="center" class="my_list">
<td><input type="checkbox" name="itemid[]" value="<?php echo $v['itemid'];?>"/></td>
<td><a href="javascript:_preview('<?php echo $v['thumb'];?>');"><img src="<?php if($v['thumb']) { ?><?php echo $v['thumb'];?><?php } else { ?><?php echo DT_SKIN;?>image/nopic50.gif<?php } ?>
" width="50" class="thumb" style="margin-left: 5px;"/></a></td>
<td align="left">
<ul class="bianji" style="margin-left: 10px;">
<li class="bianji-0" style="text-align:left;width: 290px"><?php if($v['level']==1) { ?><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/ico_home.gif" title="网站首页推广"/> <?php } ?>
<?php if($v['elite']) { ?><span class="f_red" title="公司主页推荐">[荐]</span> <?php } ?>
<?php if($v['status']==3) { ?><a href="<?php echo $EXT['mobile_url'];?><?php echo mobileurl($moduleid, 0, $v['itemid']);?>" class="t"><?php } else { ?><a href="?mid=<?php echo $mid;?>&action=edit&itemid=<?php echo $v['itemid'];?>" class="t"><?php } ?>
<?php echo $v['title'];?></a><?php if($v['status']==1 && $v['note']) { ?> <a href="javascript:" onclick="alert('<?php echo $v['note'];?>');"><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/why.gif" title="未通过原因"/></a><?php } ?>
</li>
<?php if($status>2) { ?><li class="bianji-1">星 级：<span style="color:#ff7300;font-size: 16px;">
       <?php if(mb_strlen($v['title'],'UTF-8')>10) { ?>★<?php } ?>
       <?php if(mb_strlen($v['brand'],'UTF-8')>2) { ?>★<?php } ?>
       <?php if($v['n1']!="" && $v['v1']!="") { ?>★<?php } ?>
       <?php if($v['unit']!="") { ?>★<?php } ?>
       <?php if($v['mycatid']>0) { ?>★<?php } ?>
       </span></li><?php } ?>
<?php if($timetype=='add') { ?>
<li class="bianji-1">添加时间: <?php echo timetodate($v['addtime'], 5);?></li>
   <?php } else { ?>
<li class="bianji-1">更新时间: <?php echo timetodate($v['edittime'], 5);?></li>
<?php } ?>
<li class="bianji-1">【<a href="<?php echo $EXT['mobile_url'];?><?php echo mobileurl($moduleid, $v['catid']);?>" target="_blank"><?php echo $v['catname'];?></a>】 浏览：<?php echo $v['hits'];?></li>
</ul>
</td>
<td>
<ul class="guanli">
<?php if($MG['delete']) { ?><li class="guanli-3"><a href="<?php echo $EXT['mobile_url'];?>memberwap.php?mid=<?php echo $mid;?>&action=delete&itemid=<?php echo $v['itemid'];?>" onclick="return confirm('确定要删除吗？此操作将不可撤销');">删除</a></li><?php } ?>
<?php if($MG['copy']) { ?><li class="guanli-2"><a href="<?php echo $EXT['mobile_url'];?>memberwap.php?mid=<?php echo $mid;?>&action=add&itemid=<?php echo $v['itemid'];?>&catid=<?php echo $v['catid'];?>">复制</a></li><?php } ?>
<li class="guanli-1"><a href="<?php echo $EXT['mobile_url'];?>memberwap.php?mid=<?php echo $mid;?>&action=edit&itemid=<?php echo $v['itemid'];?>">修改</a></li>
</ul>
</td>
</tr>
</table>
</div>
<?php } } ?>
</div>
<?php if($MG['delete'] || $timetype!='add') { ?>
<div class="btns">
<?php if($MG['delete']) { ?>
<span class="f_r"><input type="submit" value=" 删除选中 " class="btn" onclick="if(confirm('确定要删除选中<?php echo $MOD['name'];?>吗？')){this.form.action='?mid=<?php echo $mid;?>&status=<?php echo $status;?>&action=delete'}else{return false;}"/></span>
<?php } ?>
<?php if($timetype!='add') { ?>
<input type="submit" value=" 刷新选中 " class="btn" onclick="this.form.action='?mid=<?php echo $mid;?>&status=<?php echo $status;?>&action=refresh';"/>
<?php } ?>
</div>
<?php if($timetype!='add') { ?>
<?php if($MOD['credit_refresh']) { ?>
<div class="limit"> 刷新一条信息一次需消费 <strong class="f_red"><?php echo $MOD['credit_refresh'];?></strong> <?php echo $DT['credit_name'];?>，当<?php echo $DT['credit_name'];?>不足时将不可刷新</div><?php } ?>
<?php } ?>
<?php } ?>
</form>
<br>
<?php if($status==1) { ?>
<p class="gtsi" style="width: 94%;padding:10px;background-color:#F5F5F5;line-height:20px;border:1px solid #e1e1e1;">
<strong>产品审核拒绝可能原因：</strong><br>
1、您发布的产品或者行业属于平台系统不被允许的行业<br>
2、产品信息中包含非法、反动、违禁的信息。<br>
3、发布的标题不符合平台规定。<br>
4、相同产品大量重复发布。<br>
5、您发布的产品或者行业属于系统保护性行业，专家建议:请自助式在线充值后升级会员<br>
</p>
<p class="gtsi" style="width: 94%;padding:10px;background-color:#F5F5F5;line-height:20px;margin-top:10px;border:1px solid #e1e1e1;">
<strong>攻略一、提高产品通过率和展现量</strong><br>
1、丰富的产品标题。<br>
2、正确分类产品。<br>
3、完善各项产品参数。<br>
4、产品详情图片与文字完善。<br>
</p>
<p class="gtsi" style="width: 94%;padding:10px;background-color:#F5F5F5;line-height:20px;margin-top:10px;border:1px solid #e1e1e1;">
<strong>攻略二、提升产品浏览次数</strong><br>
1、定义清晰的产品标题。<br>
2、优质美观的产品图片。<br>
3、完善您的各项企业资料。<br>
4、及时更新您的产品内容。<br>
</p>
<br>
<?php } ?>
<?php if($status==3) { ?>
<p class="gtsi" style="padding:10px;background-color:#F5F5F5;line-height:20px;border:1px solid #e1e1e1;">
<strong>高星级（4星以上）产品的优势：</strong><br>
1、站内排序优先展示高星级（4星以上）产品.<br>
2、更易受买家的青睐，吸引买家眼球，提高买家询盘交易机率。<br>
3、将有更多机会被网站抽取做专题页面的推广或推荐。<br>
4、体现卖家的专业、用心的形象，更容易赢得买家信任。<br>

</p>
<?php } ?>
<?php if($status==2) { ?>
<p class="gtsi" style="padding:10px;background-color:#F5F5F5;line-height:20px;border:1px solid #e1e1e1;">
<strong>发布的产品百度效果不好？</strong><br>
1、质量低下，不是高星级质量产品;<br>
2、您发布的产品关键词和产品详细说明在您发布的产品系列组中重复度很高，从而导致百度效果不好；<br>
3、您发布产品关键词之后，对应的产品详细说明中没有详细的包含产品关键词的相关属性信息，从而导致效果不好；<br>
4、站内展示和曝光量低下，造成产品无法被搜索引擎和用户注意，建议升级-<a href="/" target="_blank"><?php echo VIP;?>会员</a><br>

</p>
<?php } ?>
        
<?php if($MG['sell_limit'] || (!$MG['fee_mode'] && $MOD['fee_add'])) { ?>
<div class="limit">
<?php if($MG['sell_limit']) { ?>
总共可发 <span class="f_b f_red"><?php echo $MG['sell_limit'];?></span> 条&nbsp;&nbsp;&nbsp;
当前已发 <span class="f_b"><?php echo $limit_used;?></span> 条&nbsp;&nbsp;&nbsp;
还可以发 <span class="f_b f_blue"><?php echo $limit_free;?></span> 条&nbsp;&nbsp;&nbsp;
<?php } ?>
<?php if(!$MG['fee_mode'] && $MOD['fee_add']) { ?>
发布信息收费 <span class="f_b f_red"><?php echo $MOD['fee_add'];?></span> <?php if($MOD['fee_currency'] == 'money') { ?><?php echo $DT['money_unit'];?><?php } else { ?><?php echo $DT['credit_unit'];?><?php } ?>
/条&nbsp;&nbsp;&nbsp;
可免费发布 <span class="f_b"><?php if($MG['sell_free_limit']<0) { ?>无限<?php } else { ?><?php echo $MG['sell_free_limit'];?><?php } ?>
</span> 条&nbsp;&nbsp;&nbsp;
<?php } ?>
</div>
<?php } ?>
<div class="pages"><?php echo $pages;?></div>
<script type="text/javascript">s('mid_<?php echo $mid;?>');m('s<?php echo $status;?>');</script>
<?php } ?>
<?php if($action == 'add' || $action == 'edit') { ?>
<script type="text/javascript">
function _p() {
if(Dd('tag').value) {
Ds('reccate');
}
}
function check() {
var l;
var f;
f = 'catid_1';
if(Dd(f).value == 0) {
Dmsg('请选择所属分类', 'catid', 1);
return false;
}
f = 'title';
l = Dd(f).value.length;
if(l < 2 || l > 30) {
Dmsg('信息标题应为2-30字，当前已输入'+l+'字', f);
return false;
}
f = 'content';
l = FCKLen();
if(l < 20 || l > 50000) {
Dmsg('详细说明应为20-50000字，当前已输入'+l+'字', f);
return false;
}
<?php if($MOD['upload_thumb'] && $MG['upload']) { ?>
f = 'thumb';
l = Dd(f).value.length;
if(l < 5) {
Dmsg('请上传第一张产品图片', f);
return false;
}
<?php } ?>
<?php if(!$_userid) { ?>
f = 'company';
l = Dd(f).value.length;
if(l < 2) {
Dmsg('请填写公司名称', f);
return false;
}
if(Dd('areaid_1').value == 0) {
Dmsg('请选择所在地区', 'areaid');
return false;
}
f = 'truename';
l = Dd(f).value.length;
if(l < 2) {
Dmsg('请填写联系人', f);
return false;
}
f = 'mobile';
l = Dd(f).value.length;
if(l < 7) {
Dmsg('请填写手机', f);
return false;
}
<?php } ?>
<?php if($FD) { ?><?php echo fields_js();?><?php } ?>
<?php if($CP) { ?><?php echo property_js();?><?php } ?>
<?php if($need_password) { ?>
f = 'password';
l = Dd(f).value.length;
if(l < 6) {
Dmsg('请填写支付密码', f);
return false;
}
<?php } ?>
<?php if($need_question) { ?>
f = 'answer';
l = Dd(f).value.length;
if(l < 1) {
Dmsg('请填写验证问题', f);
return false;
}
if(Dd('c'+f).innerHTML.indexOf('error') != -1) {
Dd(f).focus();
return false;
}
<?php } ?>
<?php if($need_captcha) { ?>
f = 'captcha';
l = Dd(f).value;
if(!is_captcha(l)) {
Dmsg('请填写正确的验证码', f);
return false;
}
if(Dd('c'+f).innerHTML.indexOf('error') != -1) {
Dd(f).focus();
return false;
}
<?php } ?>
return true;
}
var destoon_oauth = '<?php echo $EXT['oauth'];?>';
</script>
<?php } ?>
<?php if($action=='add' && strlen($EXT['oauth']) > 1) { ?><?php echo load('weibo.js');?><?php } ?>
<script type="text/javascript" src="<?php echo $EXT['mobile_url'];?>images/js/ermcheckscore.js"></script>
<?php include template('footer', 'memberwap');?>