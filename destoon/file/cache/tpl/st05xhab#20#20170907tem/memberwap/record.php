<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header', 'memberwap');?>
<?php if($action == 'login') { ?>
<div class="bd">
<table cellpadding="1" cellspacing="0" class="tb">
<tr>
<th width="200">时间</th>
<th>IP</th>
<th>地区</th>
<th>结果</th>
</tr>
<?php if(is_array($lists)) { foreach($lists as $k => $v) { ?>
<tr onmouseover="this.className='on';" onmouseout="this.className='';" align="center">
<td height="30"><?php echo $v['logintime'];?></td>
<td><?php echo $v['loginip'];?></td>
<td><?php echo $v['area'];?></td>
<td><?php echo $v['message'];?></td>
</tr>
<?php } } ?>
</table>
<?php } else { ?>
<script type="text/javascript">c(2);</script>
<div class="menu">
<table cellpadding="0" cellspacing="0">
<tr>
<?php if($DT_TOUCH && $MOD['pay_online']) { ?>
<td class="tab" id="action_charge"><a href="charge.php?action=pay"><span>在线充值</span></a></td>
<?php } ?>
<td class="tab" id="action"><a href="?action=order"><span><?php echo $DT['money_name'];?>流水</span></a></td>
<td class="tab" id="action_pay"><a href="?action=pay"><span>信息付费</span></a></td>
</tr>
</table>
</div>
<?php if($action == 'pay') { ?>
<form action="?">
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<div class="tt">
<?php echo $module_select;?>&nbsp;<select name="currency">
<option value="">支付</option>
<option value="money" <?php if($currency=='money') { ?>selected<?php } ?>
><?php echo $DT['money_name'];?></option>
<option value="credit" <?php if($currency=='credit') { ?>selected<?php } ?>
><?php echo $DT['credit_name'];?></option>
</select>
&nbsp;
<input type="text" size="12" name="kw" value="<?php echo $kw;?>" title="关键词"/>&nbsp;
<input type="submit" value=" 搜 索 " class="btn"/>&nbsp;
</div>
</form>
<div class="bd">
<table cellpadding="1" cellspacing="0" class="tb">
<tr>
<th>流水号</th>
<th>支出</th>
<th>单位</th>
<th>模块</th>
<th>标题</th>
<th width="130">支付时间</th>
</tr>
<?php if(is_array($lists)) { foreach($lists as $k => $v) { ?>
<tr onmouseover="this.className='on';" onmouseout="this.className='';" align="center">
<td height="30" class="px11"><?php echo $v['pid'];?></td>
<td class="px11 f_red"><?php echo $v['fee'];?></td>
<td><?php if($v['currency'] == 'money') { ?><?php echo $DT['money_unit'];?><?php } else { ?><?php echo $DT['credit_unit'];?><?php } ?>
</td>
<td><a href="<?php echo $MODULE[$v['moduleid']]['linkurl'];?>" target="_blank"><?php echo $MODULE[$v['moduleid']]['name'];?></a></td>
<td><a href="<?php echo DT_PATH;?>api/redirect.php?mid=<?php echo $v['moduleid'];?>&itemid=<?php echo $v['itemid'];?>" target="_blank" class="t"><?php echo $v['title'];?></a></td>
<td class="px11 f_gray"><?php echo $v['paytime'];?></td>
</tr>
<?php } } ?>
<tr align="center">
<td height="35"><strong>小计</strong></td>
<td class="px11 f_blue"><?php echo $fee;?></td>
<td colspan="5">&nbsp;</td>
</tr>
</table>
<div class="pages"><?php echo $pages;?></div>
<script type="text/javascript">s('record');m('action_pay');</script>
<?php } else { ?>
<form action="?">
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<div class="tt">
<?php echo $fields_select;?>&nbsp;
<select name="type">
<option value="0">类型</option>
<option value="1" <?php if($type==1) { ?>selected<?php } ?>
>收入</option>
<option value="2" <?php if($type==2) { ?>selected<?php } ?>
>支出</option>
</select>
&nbsp;
<input type="text" size="12" name="kw" value="<?php echo $kw;?>" title="关键词"/>&nbsp;
<input type="submit" value=" 搜 索 " class="btn"/>&nbsp;
</div>
</form>
<div class="bd">
<table cellpadding="1" cellspacing="0" class="tb">
<tr>
<th><?php echo $DT['money_name'];?>流水相关信息</th>
</tr>
</table>
<?php if(is_array($lists)) { foreach($lists as $k => $v) { ?>
<div class="list-bian-140">
<table cellpadding="0" cellspacing="0" class="tb">
<tr onmouseover="this.className='on';" onmouseout="this.className='';" align="center">
<td align="left">
<ul class="bianji">
<li class="bianji-1" style="text-align:left;"><div class="bianji-1-1 f_blue">收入：<?php if($v['amount'] > 0) { ?><?php echo $v['amount'];?><?php } else { ?>&nbsp;<?php } ?>
</div><div class="bianji-1-2 f_red">支出：<?php if($v['amount'] < 0) { ?><?php echo $v['amount'];?><?php } else { ?>&nbsp;<?php } ?>
</div></li>
<li class="bianji-1"><div class="bianji-1-1">余额：<?php if($v['balance']) { ?><strong><?php echo $v['balance'];?></strong><?php } else { ?>&nbsp;<?php } ?>
</div><div class="bianji-1-2">银行：<?php echo $v['bank'];?></div></li>
<li class="bianji-1"><div class="bianji-1-1">流水号：<?php echo $v['itemid'];?></div><div class="bianji-1-2">发生时间：<?php echo $v['addtime'];?></div></li>
<li class="bianji-1">事由：<input type="text" size="32" value="<?php echo $v['reason'];?>"/></li>
<li class="bianji-1">备注：<input type="text" size="32" value="<?php echo $v['note'];?>"/></li>
</ul>
<td>
</tr>
</table>
</div>
<?php } } ?>
<table cellpadding="0" cellspacing="0" class="tb">
<tr onmouseover="this.className='on';" onmouseout="this.className='';" align="center">
<td height="35"><strong>小计</strong></td>
<td class="px11 f_blue">收入：<?php echo $income;?></td>
<td class="px11 f_red">支出：<?php echo $expense;?></td>
<td colspan="5">&nbsp;</td>
</tr>
</table>
<div class="pages"><?php echo $pages;?></div>
<script type="text/javascript">s('record');m('action');</script>
<?php } ?>
<?php } ?>
<?php include template('footer', 'memberwap');?>