<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header-job');?>
<div class="m">
  <div class="nav">当前位置: <a href="<?php echo $MODULE['1']['linkurl'];?>">首页</a> &raquo; <a href="<?php echo $MOD['linkurl'];?>"><?php echo $MOD['name'];?></a> &raquo; <a href="<?php echo $MOD['linkurl'];?>search.php">搜索</a></div>
</div>
<div class="m">
  <div class="left_box_so" style="border-top:none;">
    <div class="type"> <a href="<?php echo $MOD['linkurl'];?>search.php?action=job&kw=<?php echo urlencode($kw);?>" class="<?php if($action=='resume') { ?>type_2<?php } else { ?>type_1<?php } ?>
">职位搜索</a> <a href="<?php echo $MOD['linkurl'];?>search.php?action=resume&kw=<?php echo urlencode($kw);?>" class="<?php if($action=='resume') { ?>type_1<?php } else { ?>type_2<?php } ?>
">人才搜索</a> </div>
    <?php if($action == 'resume') { ?>
    <div class="list_top">
      <form action="<?php echo $MOD['linkurl'];?>search.php">
        <input type="hidden" name="action" id="action" value="<?php if($action=='job') { ?>job<?php } else { ?>resume<?php } ?>
"/>
        <div style="padding:10px 0 10px 10px;">
          <table cellpadding="3" cellspacing="3">
            <tr>
              <td width="80" align="right">关 键 词：</td>
              <td colspan="3"><input type="text" size="80" name="kw" value="<?php echo $kw;?>" /></td>
            </tr>
            <tr>
              <td align="right">期望薪资：</td>
              <td colspan="3"><input type="text" size="10" name="minsalary" value="<?php echo $minsalary;?>"/>
                ~
                <input type="text" size="10" name="maxsalary" value="<?php echo $maxsalary;?>"/>
                &nbsp;&nbsp;
                <select name="type">
<?php if(is_array($TYPE)) { foreach($TYPE as $k => $v) { ?>
                  <option value="<?php echo $k;?>"<?php if($type==$k) { ?> selected<?php } ?>
><?php echo $v;?></option>
<?php } } ?>
                </select>
                &nbsp;&nbsp;
                <select name="gender">
<?php if(is_array($GENDER)) { foreach($GENDER as $k => $v) { ?>
                  <option value="<?php echo $k;?>"<?php if($gender==$k) { ?> selected<?php } ?>
><?php echo $v;?></option>
<?php } } ?>
                </select>
                &nbsp;&nbsp;
                <select name="marriage">
<?php if(is_array($MARRIAGE)) { foreach($MARRIAGE as $k => $v) { ?>
                  <option value="<?php echo $k;?>"<?php if($marriage==$k) { ?> selected<?php } ?>
><?php echo $v;?></option>
<?php } } ?>
                </select>
                &nbsp;&nbsp;
                <select name="education">
<?php if(is_array($EDUCATION)) { foreach($EDUCATION as $k => $v) { ?>
                  <option value="<?php echo $k;?>"<?php if($education==$k) { ?> selected<?php } ?>
><?php echo $v;?></option>
<?php } } ?>
                </select>
                &nbsp;&nbsp;
                <select name="experience">
                  <option value="0"<?php if($experience==0) { ?> selected<?php } ?>
>工作经验</option>
                  <script type="text/javascript">
for(i=1;i<21;i++) {
document.write('<option value="'+i+'"'+(i==<?php echo $experience;?> ? ' selected' : '')+'>'+i+'年以上</option>');
}
</script>
                </select></td>
            </tr>
            <tr>
              <td align="right">更新日期：</td>
              <td><?php echo dcalendar('fromdate', $fromdate, '');?> 至 <?php echo dcalendar('todate', $todate, '');?></td>
              <td align="right">&nbsp;&nbsp;行业/职位：</td>
              <td><?php echo $category_select;?></td>
            </tr>
            <tr>
              <td align="right">信息类型：</td>
              <td><input type="checkbox" name="level" id="level" value="1"<?php if($level) { ?> checked<?php } ?>
/>
                推荐
                <input type="checkbox" name="thumb" id="thumb" value="1"<?php if($thumb) { ?> checked<?php } ?>
/>
                有照片 </td>
              <td align="right">&nbsp;&nbsp;所在地区：</td>
              <td><?php echo $area_select;?></td>
            </tr>
            <tr>
              <td align="right"></td>
              <td colspan="3"><input type="image" src="<?php echo DT_SKIN;?>images/job/resume_search.png" style="border: 0;padding: 0;">
                <a href="<?php echo $MOD['linkurl'];?>search.php?action=resume"><img src="<?php echo DT_SKIN;?>images/job/btn_reset_search.png"/></a> <a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_my'];?>?action=add&mid=<?php echo $moduleid;?>&resume=1" id="add_link"><img src="<?php echo DT_SKIN;?>image/add_resume.gif" style="margin-left:150px;" id="add_img"/></a></td>
            </tr>
          </table>
        </div>
      </form>
    </div>
    <div class="m mt20">
      <div class="job_list s_position_list fl">
      <?php if($tags) { ?>
      <ul class="item_con_list"> 
      <?php if(is_array($tags)) { foreach($tags as $k => $t) { ?>
     <li class="con_list_item first_row" id="meu">
                <div class="list_item_top">
                  <div class="position resume">
                    <div class="p_top">
                      <a target="_blank" href="<?php echo $t['linkurl'];?>" class="position_link"><h2><?php echo $t['truename'];?></h2></a>
                    <?php $uinfo = userinfo($t['username']);?>
                    <?php if($uinfo['vmobile']) { ?>
                     <img class="icon icon_phone" src="<?php echo DT_SKIN;?>images/job/icon_phone.png" title="手机已验证">
                    <?php } ?>
                      <span class="address">[<?php echo area_pos($t['areaid'], '', 1);?>]</span>
                      <span class="format-time">更新时间：<?php echo timetodate($t['edittime'], 3);?></span>
                    </div>
                    <div class="p_bot">
                      <span class="money"><?php if($t['gender']==1) { ?>男<?php } else { ?>女<?php } ?>
 | <?php echo $t['age'];?>岁 | <?php echo $EDUCATION[$t['education']];?> | <?php if($t['experience']) { ?><?php echo $t['experience'];?>年经验<?php } else { ?>无工作经验<?php } ?>
  |  <?php if($t['minsalary'] && $t['maxsalary']) { ?>
      <?php echo $t['minsalary'];?>-<?php echo $t['maxsalary'];?><?php echo $DT['money_unit'];?>/月
    <?php } else if($t['minsalary']) { ?>
      <?php echo $t['minsalary'];?><?php echo $DT['money_unit'];?>/月以上
    <?php } else if($t['maxsalary']) { ?>
      <?php echo $t['maxsalary'];?><?php echo $DT['money_unit'];?>/月以内
    <?php } else { ?>
      面议
    <?php } ?>
</span>
                    </div>
                  </div>
                  <div class="company">
                  <a target="_blank" href="<?php echo $t['linkurl'];?>">
                    <div class="industry add_favoritesr"></div>
                    </a>
                  </div>
                  <div class="com_logo download collect"><a href="javascript:window.open('<?php echo rewrite('resume.php?print=1&itemid='.$t[itemid]);?>');void(0);">下载简历</a></div>
                </div>
                <div class="list_item_bot resume">
                  <div class="li_b_l"><?php echo $CATEGORY[$t['parentid']]['catname'];?>  |  <?php echo $SITUATION[$t['situation']];?></div>
                </div>
                <div class="logo"><img src="<?php if($t['thumb']) { ?><?php echo $t['thumb'];?><?php } else { ?><?php echo DT_SKIN;?>images/job/man.png<?php } ?>
"></div>
</li>
      <?php } } ?>
      </ul>
    <?php if($pages) { ?>
    <div class="pages"><?php echo $pages;?></div>
    <?php } ?>
    <?php } else { ?>
    <div class="noresult">
        <?php include template('noresult', 'message');?>
        </div>
        <?php } ?>
        </div>
      <div class="job_tj fr">
      <div class="t_position arx_list_info">
          <div class="t_title"><div class="t_tit fl">推荐人才</div></div>
              <div class="t_position_dl">
<?php echo tag("moduleid=$moduleid&table=resume&length=12&condition=status=3 and level>0 and open=3&areaid=$cityid&pagesize=5&showcat=1&order=addtime desc&dir=xhtag&template=job-list-tjresume");?>
          </div>
          </div>
</div>
</div>
    <?php } else { ?>
    <div class="list_top">
      <form action="<?php echo $MOD['linkurl'];?>search.php">
        <input type="hidden" name="action" id="action" value="<?php if($action=='job') { ?>job<?php } else { ?>resume<?php } ?>
"/>
        <div style="padding:10px 0 10px 10px;">
          <table cellpadding="3" cellspacing="3">
            <tr>
              <td width="80" align="right">关 键 词：</td>
              <td colspan="3"><input type="text" size="80" name="kw" value="<?php echo $kw;?>" /></td>
            </tr>
            <tr>
              <td align="right">待遇水平：</td>
              <td colspan="3"><input type="text" size="10" name="minsalary" value="<?php echo $minsalary;?>"/>
                ~
                <input type="text" size="10" name="maxsalary" value="<?php echo $maxsalary;?>"/>
                &nbsp;&nbsp;
                <select name="type">  
<?php if(is_array($TYPE)) { foreach($TYPE as $k => $v) { ?>
                  <option value="<?php echo $k;?>"<?php if($type==$k) { ?> selected<?php } ?>
><?php echo $v;?></option>
<?php } } ?>
                </select>
                &nbsp;&nbsp;
                <select name="gender">
<?php if(is_array($GENDER)) { foreach($GENDER as $k => $v) { ?>
                  <option value="<?php echo $k;?>"<?php if($gender==$k) { ?> selected<?php } ?>
><?php echo $v;?></option> 
<?php } } ?>
                </select>
                &nbsp;&nbsp;
                <select name="marriage">
<?php if(is_array($MARRIAGE)) { foreach($MARRIAGE as $k => $v) { ?>
                  <option value="<?php echo $k;?>"<?php if($marriage==$k) { ?> selected<?php } ?>
><?php echo $v;?></option> 
<?php } } ?>
                </select>
                &nbsp;&nbsp;
                <select name="education"> 
<?php if(is_array($EDUCATION)) { foreach($EDUCATION as $k => $v) { ?>
                  <option value="<?php echo $k;?>"<?php if($education==$k) { ?> selected<?php } ?>
><?php echo $v;?></option>  
<?php } } ?>
                </select>
                &nbsp;&nbsp;
                <select name="experience">
                  <option value="0"<?php if($experience==0) { ?> selected<?php } ?>
>工作经验</option>
                  <script type="text/javascript">
for(i=1;i<21;i++) {
document.write('<option value="'+i+'"'+(i==<?php echo $experience;?> ? ' selected' : '')+'>'+i+'年以上</option>');
}
</script>
                </select></td>
            </tr>
            <tr>
              <td align="right">更新日期：</td>
              <td><?php echo dcalendar('fromdate', $fromdate, '');?> 至 <?php echo dcalendar('todate', $todate, '');?></td>
              <td align="right">&nbsp;&nbsp;行业/职位：</td>
              <td><?php echo $category_select;?></td>
            </tr>
            <tr>
              <td align="right">信息类型：</td>
              <td><input type="checkbox" name="level" id="level" value="1"<?php if($level) { ?> checked<?php } ?>
/>
                推荐
                <input type="checkbox" name="vip" id="vip" value="1"<?php if($vip) { ?> checked<?php } ?>
/>
                <?php echo VIP;?> </td>
              <td align="right">&nbsp;&nbsp;所在地区：</td>
              <td><?php echo $area_select;?></td>
            </tr>
            <tr>
              <td align="right"></td>
              <td colspan="3"><input type="image" src="<?php echo DT_SKIN;?>images/job/job_search.png" style="border: 0;padding: 0;">
                <a href="<?php echo $MOD['linkurl'];?>search.php?action=job" rel="nofollow"><img src="<?php echo DT_SKIN;?>images/job/btn_reset_search.png"/></a> <a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_my'];?>?action=add&mid=<?php echo $moduleid;?>" id="add_link" rel="nofollow"><img src="<?php echo DT_SKIN;?>image/add_job.gif" style="margin-left:150px;" id="add_img"/></a></td>
            </tr>
          </table>
        </div>
        <?php if($CP) { ?>
        <?php if(is_array($PPT)) { foreach($PPT as $p) { ?>
        <div class="ppt">
          <table cellpadding="0" cellspacing="0" width="100%">
            <tr>
              <td class="ppt_l" valign="top">按<?php echo $p['name'];?></td>
              <td class="ppt_r" valign="top"><input type="hidden" name="ppt_<?php echo $p['oid'];?>" id="ppt_<?php echo $p['oid'];?>" value="<?php echo $p['select'];?>"/>
                <a href="###" onclick="Dd('ppt_<?php echo $p['oid'];?>').value='';Dd('fsearch').submit();"><?php if($p['select']=='') { ?><span>全部</span><?php } else { ?>全部<?php } ?>
</a> <?php if(is_array($p['options'])) { foreach($p['options'] as $o) { ?>
                &nbsp;|&nbsp;<a href="###" onclick="Dd('ppt_<?php echo $p['oid'];?>').value='<?php echo $o;?>';Dd('fsearch').submit();"><?php if($p['select']==$o) { ?><span><?php echo $o;?></span><?php } else { ?><?php echo $o;?><?php } ?>
</a> <?php } } ?> </td>
            </tr>
          </table>
        </div>
        <?php } } ?>
        <?php } ?>
      </form>
    </div>
    <?php if($page==1 && $kw) { ?>
    <?php echo ad($moduleid,$catid,$kw,6);?>
    <?php echo load('m'.$moduleid.'_k'.urlencode($kw).'.htm');?>
    <?php } ?>
    <div class="m mt20">
      <div class="job_list s_position_list fl">
      <?php if($tags) { ?>
      <ul class="item_con_list"> 
        <?php if(is_array($tags)) { foreach($tags as $k => $t) { ?>
        <li class="con_list_item first_row">
          <div class="list_item_top">
            <div class="position">
              <div class="p_top"> <a target="_blank" href="<?php echo $t['linkurl'];?>" class="position_link">
                <h2><?php echo $t['title'];?></h2>
                </a> <span class="format-time"> <?php if($t['vip'] && $k < 3) { ?> <img src="<?php echo DT_SKIN;?>images/job/placedtop.png" alt="" title="置顶职位" style="display: inline-bock;"><?php } ?>
 </span> </div>
              <div class="p_bot"> <span class="money"> <a href="<?php echo userurl($t['username']);?>" target="_blank" class="underline job-company"><?php echo $t['company'];?></a><?php if($t['vip']) { ?><img src="<?php echo DT_SKIN;?>image/vip_<?php echo $t['vip'];?>.gif" alt="<?php echo VIP;?>" title="<?php echo VIP;?>:<?php echo $t['vip'];?>级"/><?php } ?>
</span>
                <div class="li_b_l">[<?php echo area_pos($t['areaid'], '');?>]</div>
              </div>
            </div>
            <div class="company">
            <a target="_blank" href="<?php echo $t['linkurl'];?>"><div class="industry add_favoritesr"></div></a>
            </div>
            <div class="com_logo app_jobs"><a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('apply.php?itemid='.$t[itemid]);?>" target="_blank">申请职位</a></div>
          </div>
          <div class="list_item_bot">
            <div class="li_b_l"><span>行业：<?php echo $CATEGORY[$t['parentid']]['catname'];?></span><span class="wage">工薪：
            <?php if($t['minsalary'] && $t['maxsalary']) { ?>
                <?php echo $t['minsalary'];?>-<?php echo $t['maxsalary'];?><?php echo $DT['money_unit'];?>/月
                <?php } else if($t['minsalary']) { ?>
                <?php echo $t['minsalary'];?><?php echo $DT['money_unit'];?>/月以上
                <?php } else if($t['maxsalary']) { ?>
                <?php echo $t['maxsalary'];?><?php echo $DT['money_unit'];?>/月以内
                <?php } else { ?>
                面议
                <?php } ?>
 </span><span>年龄： <?php if($t['minage'] && $t['maxage']) { ?>
                <?php echo $t['minage'];?>-<?php echo $t['maxage'];?>岁
                <?php } else if($t['minage']) { ?>
                <?php echo $t['minage'];?>岁以上
                <?php } else if($t['maxage']) { ?>
                <?php echo $t['maxage'];?>岁以内
                <?php } else { ?>
                不限年龄
                <?php } ?>
 </span><span>人数：<?php if($t['total']) { ?><?php echo $t['total'];?>人<?php } else { ?>若干<?php } ?>
</span></div>
          </div>
        </li>
        <?php } } ?>
        </ul>
        <?php if($pages) { ?>
        <div class="pages"><?php echo $pages;?></div>
        <?php } ?>
        <?php } else { ?>
        <div class="noresult">
        <?php include template('noresult', 'message');?>
        </div>
        <?php } ?>
        </div>
      <div class="job_tj fr">
        <div class="box_head">
          <div><i></i><strong>最新职位</strong></div>
        </div>
        <div class="box_body_new"> 
          <?php echo tag("moduleid=$moduleid&length=34&condition=status=3&areaid=$cityid&pagesize=10&order=addtime desc&dir=xhtag&template=sell-search_rank");?> 
        </div>
        <div class="b10">&nbsp;</div>
        <div class="arx_list_info">
          <div class="box_head">
            <div><i></i><strong>推荐职位</strong></div>
          </div>
          <div class="box_body_new"> 
            <?php echo tag("moduleid=$moduleid&length=34&condition=status=3 and level=1&areaid=$cityid&pagesize=10&order=addtime desc&dir=xhtag&template=sell-search_rank");?> 
          </div>
        </div>
      </div>
    </div>
     <?php } ?>
  </div>
</div>
<div class="clearfix"></div>
<div id="hotproduct">&nbsp;</div>
<?php include template('footer');?>