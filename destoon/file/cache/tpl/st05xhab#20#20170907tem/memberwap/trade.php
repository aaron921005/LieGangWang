<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header', 'memberwap');?>
<script type="text/javascript">c(2);var errimg = '<?php echo DT_SKIN;?>image/nopic60.gif';</script>
<div class="menu">
<ul>
<li>
<table cellpadding="0" cellspacing="0">
<tr>
<td class="tab" id="action"><a href="?action=index"><span>收到的订单(我是卖家)</span></a></td>
<td class="tab" id="action_order"><a href="?action=order"><span>买到的商品(我是买家)</span></a></td>
<td class="tab" id="action_express"><a href="?action=express"><span>我的快递</span></a></td>
<?php if($DT['trade']) { ?>
<td class="tab" id="action_bind"><a href="?action=bind"><span>绑定<?php echo $DT['trade_nm'];?>帐号</span></a></td>
<?php } ?>
</tr>
</table>
</li>
</ul>
</div>
<?php if($action == 'bind') { ?>
<?php if($member['vtrade']) { ?>
<table cellpadding="10" cellspacing="1" class="tb">
<tr>
<td class="tl1"><?php echo $DT['trade_nm'];?>帐号</td>
<td class="tr"><strong><?php echo $member['trade'];?></strong></td>
</tr>
<tr>
<td class="tl1">绑定状态</td>
<td class="tr f_green">已验证</td>
</tr>
<tr>
<td class="tl1"><?php echo $DT['trade_nm'];?></td>
<td class="tr"><a href="<?php echo $DT['trade_hm'];?>" target="_blank" class="l">交易管理</a></td>
</tr>
</table>
<?php } else { ?>
<form method="post" action="?">
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<table cellpadding="10" cellspacing="1" class="tb">
<tr>
<td class="tl1"><?php echo $DT['trade_nm'];?>网站</td>
<td class="tr">
还没有 <img src="<?php echo DT_PATH;?>api/trade/<?php echo $DT['trade'];?>/logo.gif" alt="<?php echo $DT['trade_nm'];?>" align="absmiddle"/> 会员帐号？ <a href="<?php echo $DT['trade_hm'];?>" target="_blank" class="l">点击了解和注册</a>
</td>
</tr>
<tr>
<td class="tl1"><?php echo $DT['trade_nm'];?>帐号</td>
<td class="tr"><input type="text" size="30" name="trade" id="trade" value="<?php echo $member['trade'];?>"/> <input type="submit" name="submit" value="<?php if($member['trade']) { ?>更 新<?php } else { ?>绑 定<?php } ?>
" class="btn_g"/></td>
</tr>
<tr>
<td class="tl1">绑定状态</td>
<td class="tr f_red">未验证</td>
</tr>
<tr>
<td class="tl1">验证方法</td>
<td class="tr f_gray">通过<?php echo $DT['trade_nm'];?>成功交易后系统自动验证</td>
</tr>
<tr>
<td class="tl1">绑定说明</td>
<td class="tr f_gray">卖家必须绑定<?php echo $DT['trade_nm'];?>帐号用于收款，买家无须绑定</td>
</tr>
</table>
</form>
<?php } ?>
<script type="text/javascript">s('trade');m('action_bind');</script>
<?php } else if($action == 'update') { ?>
<?php if($step == 'edit_price') { ?>
<form method="post" action="?" onsubmit="return check();" id="dform">
<input type="hidden" name="forward" value="<?php echo $forward;?>"/>
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<input type="hidden" name="step" value="<?php echo $step;?>"/>
<input type="hidden" name="itemid" value="<?php echo $itemid;?>"/>
<table cellspacing="1" cellpadding="8" class="tb">
<tr>
<td class="tl1">当前操作</td>
<td class="tr f_red f_b">修改订单</td>
</tr>
<tr>
<td class="tl1">订单单号</td>
<td class="tr"><?php echo $td['itemid'];?></td>
</tr>
<tr>
<td class="tl1">商品名称</td>
<td class="tr"><a href="<?php echo $td['linkurl'];?>" target="_blank" class="t"><?php echo $td['title'];?></a></td>
</tr>
<tr>
<td class="tl1">商品图片</td>
<td class="tr"><a href="<?php echo $td['linkurl'];?>" target="_blank"><img src="<?php if($td['thumb']) { ?><?php echo $td['thumb'];?><?php } else { ?><?php echo DT_SKIN;?>image/nopic60.gif<?php } ?>
" width="60" height="60"/></a></td>
</tr>
<?php if($td['par']) { ?>
<tr>
<td class="tl1">规格参数</td>
<td class="tr"><?php echo $td['par'];?></td>
</tr>
<?php } ?>
<tr>
<td class="tl1">买家 </td>
<td class="tr"><?php if($DT['im_web']) { ?><?php echo xh_im_web($td['buyer']);?>&nbsp;<?php } ?>
<a href="<?php echo userurl($td['buyer'], 'file=contact');?>" target="_blank" class="t"><?php echo $td['buyer'];?></a></td>
</tr>
<tr>
<td class="tl1">买家留言</td>
<td class="tr"><?php echo $td['note'];?></td>
</tr>
<tr>
<td class="tl1">下单时间</td>
<td class="tr"><?php echo $td['adddate'];?></td>
</tr>
<tr>
<td class="tl1">商品单价</td>
<td class="tr"><?php echo $DT['money_sign'];?><?php echo $td['price'];?></td>
</tr>
<tr>
<td class="tl1">购买数量</td>
<td class="tr"><?php echo $td['number'];?></td>
</tr>
<tr>
<td class="tl1">订单金额</td>
<td class="tr f_red"><?php echo $DT['money_sign'];?><?php echo $td['amount'];?></td>
</tr>
<tr>
<td class="tl1">附加名称</td>
<td class="tr f_gray"><input type="text" size="10" name="fee_name" id="fee_name" value="<?php echo $td['fee_name'];?>"/> 例如运费、退款、优惠等&nbsp;<span id="dfee_name" class="f_red"></span></td>
</tr>
<tr>
<td class="tl1">附加金额</td>
<td class="tr f_gray"><input type="text" size="5" name="fee" id="fee" value="<?php echo $td['fee'];?>"/>  <?php echo $DT['money_unit'];?> 可以为负值&nbsp;<span id="dfee" class="f_red"></span></td>
</tr>
<?php if($td['status'] < 1) { ?>
<tr>
<td class="tl1"></td>
<td class="tr"><input type="checkbox" name="confirm_order" value="1"<?php if($confirm) { ?> checked<?php } ?>
/> 同时确认订单</td>
</tr>
<?php } ?>
<?php if($td['cod'] < 1) { ?>
<tr>
<td class="tl1"></td>
<td class="tr"><input type="checkbox" name="edit_cod" value="1"/> 改为货到付款</td>
</tr>
<?php } ?>
<?php if($_userid && $DT['sms']) { ?>
<tr>
<td class="tl1"></td>
<td class="tr"><input type="checkbox" name="sendsms" value="1"/> 短信通知买家 (<a href="sms.php" target="_blank" class="t">我的可用短信 <strong class="f_blue"><?php echo $_sms;?></strong> 条</a>)</td>
</tr>
<?php } ?>
<tr>
<td class="tl1"> </td>
<td class="tr">
<input type="submit" name="submit" value=" 确 定 " class="btn_g"/>&nbsp;&nbsp;<input type="button" value=" 返 回 " class="btn_3" onclick="history.back(-1);"/>
</td>
</tr>
</table>
</form>
<script type="text/javascript">
function check() {
if(Dd('fee').value < 0 && Dd('fee').value < -<?php echo $td['amount'];?>) {
Dmsg('附加金额不能小于-<?php echo $td['amount'];?>', 'fee');
return false;
}
return true;
}
</script>
<script type="text/javascript">s('trade');m('action');</script>
<?php } else if($step == 'detail') { ?>
<?php if(!in_array($td['status'], array(8, 9))) { ?>
<div class="buzhou">
    <ul>
    <li>
<table cellpadding="0" cellspacing="0" align="center">
<tr align="center" class="f_gray">
<td>买家下单</td>
<td id="pay_n">买家付款</td>
<td>卖家发货</td>
<?php if($td['status'] == 5 || $td['status'] == 6) { ?>
<td>申请退款</td>
<td>退款成功</td>
<?php } else { ?>
<td>交易成功</td>
<td>双方互评</td>
<?php } ?>
</tr>
<tr height="60">
<td><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/state_2.gif" id="state_1"/></td>
<td id="pay_s"><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/state_1.gif" id="state_2"/></td>
<td><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/state_1.gif" id="state_3"/></td>
<td><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/state_1.gif" id="state_4"/></td>
<td><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/state_1.gif" id="state_5"/></td>
</tr>
</table>
</li>
</ul>
</div>
</div>
<script type="text/javascript">
var s1 = Dd('state_2').src;
var s2 = Dd('state_1').src;
function Dstate(n) {
for(var i = 2; i <= n; i++) {
Dd('state_'+i).src = s2;
}
}
<?php if($td['status'] == 2) { ?>
Dstate(2);
<?php } else if($td['status'] == 3) { ?>
Dstate(3);
<?php } else if($td['status'] == 4) { ?>
<?php if($td['buyer_star'] && $td['seller_star']) { ?>
Dstate(5);
<?php } else { ?>
Dstate(4);
<?php } ?>
<?php } else if($td['status'] == 5) { ?>
Dstate(4);
<?php } else if($td['status'] == 6) { ?>
Dstate(5);
<?php } ?>
<?php if($td['status'] == 5 || $td['status'] == 6) { ?>
<?php if(!$td['send_time']) { ?>Dd('state_3').src = s1;<?php } ?>
<?php } ?>
<?php if($td['cod']) { ?>Dh('pay_n');Dh('pay_s');<?php } ?>
</script>
<?php } ?>
<div class="t2">商品信息</div>
<table cellspacing="1" cellpadding="8" class="tb">
<tr>
<td class="tl1">订单单号</td>
<td class="tr">
<?php echo $td['itemid'];?>
<?php if($DT['trade']) { ?>(<?php echo $DT['trade_nm'];?>&nbsp;&nbsp;&nbsp;&nbsp;订单单号:<a href="https://lab.alipay.com/consume/queryTradeDetail.htm?tradeNo=<?php echo $td['trade_no'];?>" target="_blank" class="t"><?php echo $td['trade_no'];?></a>)<?php } ?>
<?php if($td['seller'] == $_username) { ?>&nbsp;&nbsp;&nbsp;&nbsp;<a href="?action=update&step=print&itemid=<?php echo $itemid;?>" target="_blank" class="t">[打印订单]</a><?php } ?>
</td>
</tr>
<tr>
<td class="tl1">商品名称</td>
<td class="tr"><a href="<?php echo $td['linkurl'];?>" target="_blank" class="t"><?php echo $td['title'];?></a></td>
</tr>
<tr>
<td class="tl1">商品图片</td>
<td class="tr"><a href="<?php echo $td['linkurl'];?>" target="_blank"><img src="<?php if($td['thumb']) { ?><?php echo $td['thumb'];?><?php } else { ?><?php echo DT_SKIN;?>image/nopic60.gif<?php } ?>
" width="60" height="60"/></a></td>
</tr>
<?php if($td['par']) { ?>
<tr>
<td class="tl1">规格参数</td>
<td class="tr"><?php echo $td['par'];?></td>
</tr>
<?php } ?>
<?php if($td['seller'] == $_username) { ?>
<tr>
<td class="tl1">买家 </td>
<td class="tr"><?php if($DT['im_web']) { ?><?php echo xh_im_web($td['seller']);?>&nbsp;<?php } ?>
<a href="message.php?action=send&touser=<?php echo $td['buyer'];?>"><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/ico_message.gif" title="发送站内信" align="absmiddle"/></a> <a href="<?php echo userurl($td['buyer'], 'file=contact');?>" target="_blank" class="t"><?php echo $td['buyer'];?></a></td>
</tr>
<?php } else if($td['buyer'] == $_username) { ?>
<tr>
<td class="tl1">卖家</td>
<td class="tr"><?php if($DT['im_web']) { ?><?php echo xh_im_web($td['buyer']);?>&nbsp;<?php } ?>
<a href="message.php?action=send&touser=<?php echo $td['seller'];?>"><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/ico_message.gif" title="发送站内信" align="absmiddle"/></a> <a href="<?php echo userurl($td['seller'], 'file=contact');?>" target="_blank" class="t"><?php echo $td['seller'];?></a></td>
</tr>
<?php } ?>
</table>
<div class="t2">快递信息</div>
<table cellspacing="1" cellpadding="8" class="tb">
<tr>
<td class="tl1">邮编</td>
<td class="tr"><?php echo $td['buyer_postcode'];?></td>
</tr>
<tr>
<td class="tl1">地址</td>
<td class="tr"><?php echo $td['buyer_address'];?></td>
</tr>
<tr>
<td class="tl1">姓名</td>
<td class="tr"><?php echo $td['buyer_name'];?></td>
</tr>
<tr>
<td class="tl1">手机</td>
<td class="tr"><?php echo $td['buyer_mobile'];?> <?php if($DT['sms']) { ?>&nbsp;&nbsp;<a href="sms.php?action=add&auth=<?php echo encrypt($td['buyer_mobile'], DT_KEY.'SMS');?>" target="_blank"><img src="<?php echo DT_SKIN;?>image/sendsms.gif" align="absmiddle" title="发送短信" alt=""/></a><?php } ?>
</td>
</tr>
<tr>
<td class="tl1">电话</td>
<td class="tr"><?php echo $td['buyer_phone'];?></td>
</tr>
<tr>
<td class="tl1">买家留言</td>
<td class="tr"><?php if($td['note']) { ?><?php echo $td['note'];?><?php } else { ?>无<?php } ?>
</td>
</tr>
<?php if($td['send_time']) { ?>
<tr>
<td class="tl1">发货日期</td>
<td class="tr"><?php echo $td['send_time'];?></td>
</tr>
<tr>
<td class="tl1">快递类型</td>
<td class="tr"><?php echo $td['send_type'];?></td>
</tr>
<tr>
<td class="tl1">快递单号</td>
<td class="tr"><?php echo $td['send_no'];?><?php if($td['send_type'] && $td['send_no']) { ?> &nbsp;<a href="###" class="t" onclick="Ds('express_t');$('#express').load(AJPath+'?action=express&moduleid=2&auth=<?php echo $auth;?>');">[快递追踪]</a><?php } ?>
</td>
</tr>
<tr id="express_t" style="display:none;">
<td class="tl1">追踪结果</td>
<td class="tr" style="line-height:200%;"><div id="express">正在查询...</div></td>
</tr>
<tr>
<td class="tl1">快递状态</td>
<td class="tr"><?php echo $_send_status[$td['send_status']];?></td>
</tr>
<?php } ?>
</table>
<div class="t2">价格信息</div>
<table cellspacing="1" cellpadding="8" class="tb">
<tr>
<td class="tl1">商品单价</td>
<td class="tr"><?php echo $DT['money_sign'];?><?php echo $td['price'];?></td>
</tr>
<tr>
<td class="tl1">购买数量</td>
<td class="tr"><?php echo $td['number'];?></td>
</tr>
<?php if($td['fee_name'] && $td['fee']) { ?>
<tr>
<td class="tl1"><?php echo $td['fee_name'];?></td>
<td class="tr"><?php echo $DT['money_sign'];?><?php echo $td['fee'];?></td>
</tr>
<?php } ?>
<tr>
<td class="tl1">订单总额</td>
<td class="tr f_red"><?php echo $DT['money_sign'];?><?php echo $td['total'];?></td>
</tr>
</table>
<div class="t2">订单状态</div>
<table cellspacing="1" cellpadding="8" class="tb">
<tr>
<td class="tl1">下单时间</td>
<td class="tr"><?php echo $td['adddate'];?></td>
</tr>
<tr>
<td class="tl1">最后更新</td>
<td class="tr"><?php echo $td['updatedate'];?></td>
</tr>
<?php if($td['send_time']) { ?>
<tr>
<td class="tl1">发货时间</td>
<td class="tr"><?php echo $td['send_time'];?></td>
</tr>
<?php } ?>
<tr>
<td class="tl1">订单状态</td>
<td class="tr"><?php echo $_status[$td['status']];?></td>
</tr>
<?php if($td['buyer_reason']) { ?>
<tr>
<td class="tl1">退款理由</td>
<td class="tr"><?php echo $td['buyer_reason'];?></td>
</tr>
<?php } ?>
<?php if($td['refund_reason']) { ?>
<tr>
<td class="tl1">操作原因</td>
<td class="tr"><?php echo $td['refund_reason'];?></td>
</tr>
<?php } ?>
<tr>
<td class="tl1"> </td>
<td class="tr">
<?php if($td['seller'] == $_username) { ?>
<?php if($td['status'] == 0) { ?>
<input type="button" value=" 确 认 " class="btn_g" onclick="Go('?itemid=<?php echo $td['itemid'];?>&action=update&step=edit_price&confirm=1');"/> &nbsp; 
<?php } else if($td['status'] == 2) { ?>
<input type="button" value=" 发 货 " class="btn_g" onclick="Go('?itemid=<?php echo $td['itemid'];?>&action=update&step=send_goods');"/> &nbsp; 
<?php } ?>
<?php } else { ?>
<?php if($td['status'] == 1) { ?>
<input type="button" value=" 付 款 " class="btn_g" onclick="Go('?itemid=<?php echo $td['itemid'];?>&action=update&step=pay');"/> &nbsp; 
<?php } ?>
<?php } ?>
<input type="button" value=" 返 回 " class="btn_3" onclick="history.back(-1);"/>
</td>
</tr>
</table>
<script type="text/javascript">s('trade');m('<?php echo $nav;?>');</script>
<?php } else if($step == 'express') { ?>
<div class="t2">快递信息</div>
<table cellspacing="1" cellpadding="8" class="tb">
<tr>
<td class="tl1">商品名称</td>
<td class="tr"><a href="<?php echo $td['linkurl'];?>" target="_blank" class="t"><?php echo $td['title'];?></a></td>
</tr>
<tr>
<td class="tl1">发货日期</td>
<td class="tr"><?php echo $td['send_time'];?></td>
</tr>
<tr>
<td class="tl1">快递类型</td>
<td class="tr"><?php echo $td['send_type'];?></td>
</tr>
<tr>
<td class="tl1">快递单号</td>
<td class="tr"><?php echo $td['send_no'];?></td>
</tr>
<tr>
<td class="tl1">追踪结果</td>
<td class="tr" style="line-height:200%;"><div id="express">正在查询...</div></td>
</tr>
<tr>
<td class="tl1">快递状态</td>
<td class="tr"><?php echo $_send_status[$td['send_status']];?></td>
</tr>
<tr>
<td class="tl1"> </td>
<td class="tr"><input type="button" value=" 返 回 " class="btn_3" onclick="history.back(-1);"/>
</td>
</tr>
</table>
<script type="text/javascript">
$(document).ready(function(){
$('#express').load(AJPath+'?action=express&moduleid=2&auth=<?php echo $auth;?>');
});
</script>
<script type="text/javascript">s('trade');m('<?php echo $nav;?>');</script>
<?php } else if($step == 'pay') { ?>
<form method="post" action="?" onsubmit="return check();" id="dform">
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<input type="hidden" name="step" value="<?php echo $step;?>"/>
<input type="hidden" name="itemid" value="<?php echo $itemid;?>"/>
<table cellspacing="1" cellpadding="8" class="tb">
<tr>
<td class="tl1">当前操作</td>
<td class="tr f_red f_b">订单支付</td>
</tr>
<tr>
<td class="tl1">订单单号</td>
<td class="tr"><?php echo $td['itemid'];?><?php if($DT['trade']) { ?>&nbsp;&nbsp;&nbsp;&nbsp;(<?php echo $DT['trade_nm'];?>订单单号:<?php echo $td['trade_no'];?>)<?php } ?>
</td>
</tr>
<tr>
<td class="tl1">商品名称</td>
<td class="tr"><a href="<?php echo $td['linkurl'];?>" target="_blank" class="t"><?php echo $td['title'];?></a></td>
</tr>
<tr>
<td class="tl1">商品图片</td>
<td class="tr"><a href="<?php echo $td['linkurl'];?>" target="_blank"><img src="<?php if($td['thumb']) { ?><?php echo $td['thumb'];?><?php } else { ?><?php echo DT_SKIN;?>image/nopic60.gif<?php } ?>
" width="60" height="60"/></a></td>
</tr>
<?php if($td['par']) { ?>
<tr>
<td class="tl1">规格参数</td>
<td class="tr"><?php echo $td['par'];?></td>
</tr>
<?php } ?>
<tr>
<td class="tl1">卖家</td>
<td class="tr"><?php if($DT['im_web']) { ?><?php echo im_web($td['seller']);?>&nbsp;<?php } ?>
<a href="<?php echo userurl($td['seller'], 'file=contact');?>" target="_blank" class="t"><?php echo $td['seller'];?></a></td>
</tr>
<tr>
<td class="tl1">下单时间</td>
<td class="tr"><?php echo $td['adddate'];?></td>
</tr>
<tr>
<td class="tl1">我的备注</td>
<td class="tr"><?php echo $td['note'];?></td>
</tr>
<tr>
<td class="tl1">商品单价</td>
<td class="tr"><?php echo $DT['money_sign'];?><?php echo $td['price'];?></td>
</tr>
<tr>
<td class="tl1">购买数量</td>
<td class="tr"><?php echo $td['number'];?></td>
</tr>
<?php if($td['fee']>0.1) { ?>
<tr>
<td class="tl1"><?php echo $td['fee_name'];?></td>
<td class="tr"><?php echo $DT['money_sign'];?><?php echo $td['fee'];?></td>
</tr>
<?php } ?>
<tr>
<td class="tl1">实付金额</td>
<td class="tr f_red"><?php echo $DT['money_sign'];?><?php echo number_format($money, 2, '.', '');?></td>
</tr>
<tr>
<td class="tl1">帐户余额</td>
<td class="tr f_blue"><?php echo $DT['money_sign'];?><?php echo $_money;?></td>
</tr>
<tr id="payword" style="display:none;">
<td class="tl1"><span class="f_red">*</span> 支付密码</td>
<td class="tr"><?php include template('password', 'chip');?>&nbsp;<span id="dpassword" class="f_red"></span></td>
</tr>
<?php if($DT['sms']) { ?>
<tr>
<td class="tl1"></td>
<td class="tr"><input type="checkbox" name="sendsms" value="1"/> 短信通知卖家发货 (<a href="sms.php" target="_blank" class="t">我的可用短信 <strong class="f_blue"><?php echo $_sms;?></strong> 条</a>)</td>
</tr>
<?php } ?>
<tr>
<td class="tl1"> </td>
<td class="tr">
<input type="submit" name="submit" value=" 立即支付 " class="btn_g"/>&nbsp;&nbsp;<input type="button" value=" 返 回 " class="btn_3" onclick="history.back(-1);"/>
</td>
</tr>
</table>
</form>
<script type="text/javascript">
var total = <?php echo $money;?>;
function check() {
if(total > <?php echo $_money;?>) {
Go('charge.php?action=pay&reason=trade|<?php echo $itemid;?>&amount='+(total-<?php echo $_money;?>));
return false;
}
if(Dd('password').value.length < 6) {
Dmsg('请填写支付密码', 'password');
return false;
}
return confirm('您确认此订单，并立即支付吗？');
}
window.setInterval(
function() {
total > <?php echo $_money;?> ? Dh('payword') : Ds('payword');
}, 
500);
</script>
<script type="text/javascript">s('trade');m('action_order');</script>
<?php } else if($step == 'send_goods') { ?>
<form method="post" action="?" onsubmit="return check();" id="dform">
<input type="hidden" name="forward" value="<?php echo $forward;?>"/>
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<input type="hidden" name="step" value="<?php echo $step;?>"/>
<input type="hidden" name="itemid" value="<?php echo $itemid;?>"/>
<table cellspacing="1" cellpadding="6" class="tb">
<tr>
<td class="tl1">当前操作</td>
<td class="tr f_red f_b">确认发货</td>
</tr>
<tr>
<td class="tl1">快递类型</td>
<td class="tr f_gray">
<select name="send_type" id="send_type">
<option value="">请选择</option>
<?php if(is_array($send_types)) { foreach($send_types as $v) { ?>
<option value="<?php echo $v;?>"><?php echo $v;?></option>
<?php } } ?>
</select>
</td>
</tr>
<tr>
<td class="tl1">快递单号</td>
<td class="tr f_gray"><input type="text" size="30" name="send_no" id="send_no"/></td>
</tr>
<tr>
<td class="tl1">发货时间</td>
<td class="tr f_gray"><?php echo dcalendar('send_time', $send_time);?></td>
</tr>
<?php if($_userid && $DT['sms']) { ?>
<tr>
<td class="tl1"></td>
<td class="tr"><input type="checkbox" name="sendsms" value="1"/> 短信通知买家已发货 (<a href="sms.php" target="_blank" class="t">我的可用短信 <strong class="f_blue"><?php echo $_sms;?></strong> 条</a>)</td>
</tr>
<?php } ?>
<tr>
<td class="tl1"> </td>
<td class="tr">
<input type="submit" name="submit" value=" 确 定 " class="btn_g"/>&nbsp;&nbsp;<input type="button" value=" 返 回 " class="btn_3" onclick="history.back(-1);"/>
</td>
</tr>
</table>
</form>
<script type="text/javascript">
function check() {
return confirm('您确认货物已经发出，并且以上信息填写无误吗？\n\n此操作将不可撤销');
}
</script>
<script type="text/javascript">s('trade');m('action');</script>
<?php } else if($step == 'add_time') { ?>
<form method="post" action="?" onsubmit="return check();" id="dform">
<input type="hidden" name="forward" value="<?php echo $forward;?>"/>
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<input type="hidden" name="step" value="<?php echo $step;?>"/>
<input type="hidden" name="itemid" value="<?php echo $itemid;?>"/>
<table cellspacing="1" cellpadding="6" class="tb">
<tr>
<td class="tl1">当前操作</td>
<td class="tr f_red f_b">延长买家确认时间</td>
</tr>
<tr>
<td class="tl1"><span class="f_red">*</span>延长时间</td>
<td class="tr f_gray"><input type="text" size="10" name="add_time" id="add_time" value="72"/> 小时 （1天=24小时 只能为整数）&nbsp;<span id="dadd_time" class="f_red"></span></td>
</tr>
<tr>
<td class="tl1"> </td>
<td class="tr">
<input type="submit" name="submit" value=" 确 定 " class="btn_g"/>&nbsp;&nbsp;<input type="button" value=" 返 回 " class="btn_3" onclick="history.back(-1);"/>
</td>
</tr>
</table>
</form>
<script type="text/javascript">
function check() {
return confirm('您确认延长'+Dd('add_time').value+'小时吗？');
}
</script>
<script type="text/javascript">s('trade');m('action');</script>
<?php } else if($step == 'remind') { ?>
<form action="message.php" method="post" id="remind">
<input type="hidden" name="action" value="send" />
<input type="hidden" name="forward" value="<?php echo $MOD['linkurl'];?>trade.php?action=order&itemid=<?php echo $itemid;?>" />
<input type="hidden" name="touser" value="<?php echo $td['seller'];?>" />
<input type="hidden" name="title" value="[发货提醒]订单(ID:<?php echo $itemid;?>)已经付款，请尽快发货" />
<textarea name="content" style="display:none;">
<?php echo $td['seller'];?>，您好：<br/>
订单 <a href="<?php echo $MOD['linkurl'];?>trade.php?action=update&step=detail&itemid=<?php echo $itemid;?>" target="_blank"><?php echo $td['title'];?> (ID:<?php echo $itemid;?>)</a> 已经付款。请尽快发货！
</textarea>
</form>
<script type="text/javascript">s('trade');m('action_order');Dd('remind').submit();</script>
<?php } else if($step == 'refund') { ?>
<form method="post" action="?" onsubmit="return check();" id="dform">
<input type="hidden" name="forward" value="<?php echo $forward;?>"/>
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<input type="hidden" name="step" value="<?php echo $step;?>"/>
<input type="hidden" name="itemid" value="<?php echo $itemid;?>"/>
<table cellspacing="1" cellpadding="8" class="tb">
<tr>
<td class="tl1">当前操作</td>
<td class="tr f_red f_b">申请退款</td>
</tr>
<tr>
<td class="tl1">商品名称</td>
<td class="tr"><a href="<?php echo $td['linkurl'];?>" target="_blank" class="t"><?php echo $td['title'];?></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:;" onclick="$('#trade_detail').toggle('fast');" class="t">订单详情&raquo;</a></td>
</tr>
<tbody id="trade_detail" style="display:none;">
<tr>
<td class="tl1">订单单号</td>
<td class="tr"><?php echo $td['itemid'];?><?php if($DT['trade']) { ?>&nbsp;&nbsp;&nbsp;&nbsp;(<?php echo $DT['trade_nm'];?>订单单号:<?php echo $td['trade_no'];?>)<?php } ?>
</td>
</tr>
<tr>
<td class="tl1">商品图片</td>
<td class="tr"><a href="<?php echo $td['linkurl'];?>" target="_blank"><img src="<?php if($td['thumb']) { ?><?php echo $td['thumb'];?><?php } else { ?><?php echo DT_SKIN;?>image/nopic60.gif<?php } ?>
" width="60" height="60"/></a></td>
</tr>
<?php if($td['par']) { ?>
<tr>
<td class="tl1">规格参数</td>
<td class="tr"><?php echo $td['par'];?></td>
</tr>
<?php } ?>
<tr>
<td class="tl1">卖家</td>
<td class="tr"><?php if($DT['im_web']) { ?><?php echo xh_im_web($td['seller']);?>&nbsp;<?php } ?>
<a href="<?php echo userurl($td['seller'], 'file=contact');?>" target="_blank" class="t"><?php echo $td['seller'];?></a></td>
</tr>
<tr>
<td class="tl1">下单时间</td>
<td class="tr"><?php echo $td['adddate'];?></td>
</tr>
<tr>
<td class="tl1">备注说明</td>
<td class="tr"><?php echo $td['note'];?></td>
</tr>
<tr>
<td class="tl1">商品单价</td>
<td class="tr"><?php echo $DT['money_sign'];?><?php echo $td['price'];?></td>
</tr>
<tr>
<td class="tl1">购买数量</td>
<td class="tr"><?php echo $td['number'];?></td>
</tr>
<?php if($td['fee_name'] && $td['fee']) { ?>
<tr>
<td class="tl1"><?php echo $td['fee_name'];?></td>
<td class="tr"><?php echo $DT['money_sign'];?><?php echo $td['fee'];?></td>
</tr>
<?php } ?>
<tr>
<td class="tl1">订单总额</td>
<td class="tr f_red"><?php echo $DT['money_sign'];?><?php echo $money;?></td>
</tr>
</tbody>
<tr>
<td class="tl1"><span class="f_red">*</span> 退款原因</td>
<td class="tr"><textarea name="content" id="content" class="dsn"></textarea>
<?php echo deditor($moduleid, 'content', 'Simple', '95%', 200);?><br/><span class="f_gray">请客观、如实填写，此申请一经提交，将不可再撤销</span><span id="dcontent" class="f_red"></span></td>
</tr>
<tr>
<td class="tl1"><span class="f_red">*</span> 支付密码</td>
<td class="tr"><?php include template('password', 'chip');?>&nbsp;<span id="dpassword" class="f_red"></span></td>
</tr>
<tr>
<td class="tl1"> </td>
<td class="tr">
<input type="submit" name="submit" value=" 确 定 " class="btn_g"/>&nbsp;&nbsp;<input type="button" value=" 返 回 " class="btn_3" onclick="history.back(-1);"/>
</td>
</tr>
</table>
</form>
<script type="text/javascript">
function check() {
var len = FCKLen();
if(len < 5) {
Dmsg('退款原因不能少于5个字，当前已输入'+len+'个字', 'content');
return false;
}
if(Dd('password').value.length < 6) {
Dmsg('请填写支付密码', 'password');
return false;
}
return confirm('您确认您提供的退款原因无误，并申请退款吗？');
}
</script>
<script type="text/javascript">s('trade');m('action_order');</script>
<?php } else if($step == 'refund_agree') { ?>
<form method="post" action="?" onsubmit="return check();" id="dform">
<input type="hidden" name="forward" value="<?php echo $forward;?>"/>
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<input type="hidden" name="step" value="<?php echo $step;?>"/>
<input type="hidden" name="itemid" value="<?php echo $itemid;?>"/>
<table cellspacing="1" cellpadding="8" class="tb">
<tr>
<td class="tl1">当前操作</td>
<td class="tr f_red f_b">同意退款</td>
</tr>
<tr>
<td class="tl1">商品名称</td>
<td class="tr"><a href="<?php echo $td['linkurl'];?>" target="_blank" class="t"><?php echo $td['title'];?></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:;" onclick="$('#trade_detail').toggle('fast');" class="t">详情&raquo;</a></td>
</tr>
<tbody id="trade_detail" style="display:none;">
<tr>
<td class="tl1">订单单号</td>
<td class="tr"><?php echo $td['itemid'];?><?php if($DT['trade']) { ?>&nbsp;&nbsp;&nbsp;&nbsp;(<?php echo $DT['trade_nm'];?>订单单号:<?php echo $td['trade_no'];?>)<?php } ?>
</td>
</tr>
<tr>
<td class="tl1">商品图片</td>
<td class="tr"><a href="<?php echo $td['linkurl'];?>" target="_blank"><img src="<?php if($td['thumb']) { ?><?php echo $td['thumb'];?><?php } else { ?><?php echo DT_SKIN;?>image/nopic60.gif<?php } ?>
" width="60" height="60"/></a></td>
</tr>
<?php if($td['par']) { ?>
<tr>
<td class="tl1">规格参数</td>
<td class="tr"><?php echo $td['par'];?></td>
</tr>
<?php } ?>
<tr>
<td class="tl1">卖家</td>
<td class="tr"><?php if($DT['im_web']) { ?><?php echo im_web($td['seller']);?>&nbsp;<?php } ?>
<a href="<?php echo userurl($td['seller'], 'file=contact');?>" target="_blank" class="t"><?php echo $td['seller'];?></a></td>
</tr>
<tr>
<td class="tl1">下单时间</td>
<td class="tr"><?php echo $td['adddate'];?></td>
</tr>
<tr>
<td class="tl1">备注说明</td>
<td class="tr"><?php echo $td['note'];?></td>
</tr>
<tr>
<td class="tl1">商品单价</td>
<td class="tr"><?php echo $DT['money_sign'];?><?php echo $td['price'];?></td>
</tr>
<tr>
<td class="tl1">购买数量</td>
<td class="tr"><?php echo $td['number'];?></td>
</tr>
<?php if($td['fee_name'] && $td['fee']) { ?>
<tr>
<td class="tl1"><?php echo $td['fee_name'];?></td>
<td class="tr"><?php echo $DT['money_sign'];?><?php echo $td['fee'];?></td>
</tr>
<?php } ?>
<tr>
<td class="tl1">订单总额</td>
<td class="tr f_red"><?php echo $DT['money_sign'];?><?php echo $money;?></td>
</tr>
</tbody>
<tr>
<td class="tl1">退款原因</td>
<td class="tr"><?php echo $td['buyer_reason'];?></td>
</tr>
<tr>
<td class="tl1">同意原因</td>
<td class="tr"><textarea name="content" id="content" class="dsn"></textarea>
<?php echo deditor($moduleid, 'content', 'Simple', '100%', 200);?><br/></td>
</tr>
<tr>
<td class="tl1"><span class="f_red">*</span> 支付密码</td>
<td class="tr"><?php include template('password', 'chip');?>&nbsp;<span id="dpassword" class="f_red"></span></td>
</tr>
<tr>
<td class="tl1"> </td>
<td class="tr">
<input type="submit" name="submit" value=" 确 定 " class="btn_g"/>&nbsp;&nbsp;<input type="button" value=" 返 回 " class="btn_3" onclick="history.back(-1);"/>
</td>
</tr>
</table>
</form>
<script type="text/javascript">
function check() {
if(Dd('password').value.length < 6) {
Dmsg('请填写支付密码', 'password');
return false;
}
return confirm('您确认同意退款此订单吗？此操作将不可撤销');
}
</script>
<script type="text/javascript">s('trade');m('action_order');</script>
<?php } else if($step == 'comment') { ?>
<form method="post" action="?" onsubmit="return check();" id="dform">
<input type="hidden" name="forward" value="<?php echo $forward;?>"/>
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<input type="hidden" name="step" value="<?php echo $step;?>"/>
<input type="hidden" name="itemid" value="<?php echo $itemid;?>"/>
<table cellspacing="1" cellpadding="6" class="tb">
<tr>
<td class="tl2">当前操作</td>
<td class="tr f_red f_b">交易评价</td>
</tr>
<tr>
<td class="tl2">交易打分</td>
<td class="tr">
<input type="radio" name="star" value="3" id="star_3" checked/><label for="star_3"> 好评 <img src="<?php echo DT_STATIC;?>file/image/star3.gif" width="36" height="12" alt="" align="absmiddle"/></label>
<input type="radio" name="star" value="2" id="star_2"/><label for="star_2"> 中评 <img src="<?php echo DT_STATIC;?>file/image/star2.gif" width="36" height="12" alt="" align="absmiddle"/></label>
<input type="radio" name="star" value="1" id="star_1"/><label for="star_1"> 差评 <img src="<?php echo DT_STATIC;?>file/image/star1.gif" width="36" height="12" alt="" align="absmiddle"/></label>
</td>
</tr>
<tr>
<td class="tl2">详细评论</td>
<td class="tr f_gray">
<textarea onkeyup="S();" name="content" id="content" style="width:230px;height:60px;margin:0 0 6px 0;"></textarea><br/>
请您对此次交易做出客观、公正的评论<br/>
(内容限0至500字) 当前已经输入 <span style="color:red;" id="chars">0</span> 字
</td>
</tr>
<tr>
<td class="tl1"> </td>
<td class="tr">
<input type="submit" name="submit" value=" 确 定 " class="btn_g"/>&nbsp;&nbsp;<input type="button" value=" 返 回 " class="btn_3" onclick="history.back(-1);"/>
</td>
</tr>
</table>
</form>
<script type="text/javascript">
function check() {
if(Dd('content').value.length > 500) {
alert('评论内容不能超过500字');
return false;
}
return confirm('您确认提交此评论吗？提交后评论分数和内容将不可更改');
}
function S() {
Inner('chars', Dd('content').value.length);
}
</script>
<script type="text/javascript">s('trade');m('<?php echo $nav;?>');</script>
<?php } else if($step == 'comment_detail') { ?>
<table cellspacing="1" cellpadding="8" class="tb">
<tr>
<td class="tl1">当前操作</td>
<td class="tr f_red f_b">评价详情</td>
</tr>
</table>
<div class="t2">买家评价<?php if($_username==$td['buyer']) { ?>(我的)<?php } ?>
</div>
<table cellspacing="1" cellpadding="8" class="tb">
<?php if($cm['seller_star']) { ?>
<tr>
<td class="tl1">买家评分</td>
<td class="tr"><img src="<?php echo DT_STATIC;?>file/image/star<?php echo $cm['seller_star'];?>.gif" width="36" height="12" alt="" align="absmiddle"/> <?php echo $STARS[$cm['seller_star']];?>
<?php if($_username == $td['seller'] && !$cm['buyer_reply']) { ?>
&nbsp;&nbsp;<a href="#exp" onclick="Ds('explain');" class="t">[解释]</a>
<?php } ?>
</td>
</tr>
<tr>
<td class="tl1">买家评论</td>
<td class="tr"><?php echo nl2br($cm['seller_comment']);?></td>
</tr>
<tr>
<td class="tl1">评论时间</td>
<td class="tr px11"><?php echo timetodate($cm['seller_ctime'], 6);?></td>
</tr>
<?php if($cm['buyer_reply']) { ?>
<tr>
<td class="tl1">卖家解释</td>
<td class="tr" style="color:#D9251D;"><?php echo nl2br($cm['buyer_reply']);?></td>
</tr>
<tr>
<td class="tl1">解释时间</td>
<td class="tr px11"><?php echo timetodate($cm['buyer_rtime'], 6);?></td>
</tr>
<?php } ?>
<?php } else { ?>
<tr>
<td class="tl1">买家评论</td>
<td class="tr">暂未评论</td>
</tr>
<?php } ?>
</table>
<div class="t2">卖家评价<?php if($_username==$td['seller']) { ?>(我的)<?php } ?>
</div>
<table cellspacing="1" cellpadding="8" class="tb">
<?php if($cm['buyer_star']) { ?>
<tr>
<td class="tl1">卖家评分</td>
<td class="tr"><img src="<?php echo DT_STATIC;?>file/image/star<?php echo $cm['buyer_star'];?>.gif" width="36" height="12" alt="" align="absmiddle"/> <?php echo $STARS[$cm['buyer_star']];?>
<?php if($_username == $td['buyer'] && !$cm['seller_reply']) { ?>
&nbsp;&nbsp;<a href="#exp" onclick="Ds('explain');" class="t">[解释]</a>
<?php } ?>
</td>
</tr>
<tr>
<td class="tl1">卖家评论</td>
<td class="tr"><?php echo nl2br($cm['buyer_comment']);?></td>
</tr>
<tr>
<td class="tl1">评论时间</td>
<td class="tr px11"><?php echo timetodate($cm['buyer_ctime'], 6);?></td>
</tr>
<?php if($cm['seller_reply']) { ?>
<tr>
<td class="tl1">买家解释</td>
<td class="tr" style="color:#D9251D;"><?php echo nl2br($cm['seller_reply']);?></td>
</tr>
<tr>
<td class="tl1">解释时间</td>
<td class="tr px11"><?php echo timetodate($cm['seller_rtime'], 6);?></td>
</tr>
<?php } ?>
<?php } else { ?>
<tr>
<td class="tl1">卖家评论</td>
<td class="tr">暂未评论</td>
</tr>
<?php } ?>
</table>
<div style="display:none;" id="explain">
<div class="tl2">我的解释</div>
<form method="post" action="?" onsubmit="return check();" id="dform">
<input type="hidden" name="forward" value="<?php echo $forward;?>"/>
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<input type="hidden" name="step" value="<?php echo $step;?>"/>
<input type="hidden" name="itemid" value="<?php echo $itemid;?>"/>
<table cellspacing="1" cellpadding="8" class="tb">
<tr>
<td class="tl2"><span class="f_red">*</span>我的解释</td>
<td class="tr f_gray">
<textarea onkeyup="S();" name="content" id="content" style="width:230px;height:60px;margin:0 0 6px 0;"></textarea><br/>
请您对此次评价做出客观、合理的解释<br/>
(内容限2至500字) 当前已经输入 <span style="color:red;" id="chars">0</span> 字
</td>
</tr>
<tr>
<td class="tl2"> </td>
<td class="tr">
<input type="submit" name="submit" value=" 确 定 " class="btn_g"/>&nbsp;&nbsp;<input type="button" value=" 返 回 " class="btn_3" onclick="history.back(-1);"/>
</td>
</tr>
</table>
</form>
</div>
<a name="exp"></a>
<script type="text/javascript">
function check() {
if(Dd('content').value.length < 2) {
alert('解释内容不能少于2字');
return false;
}
if(Dd('content').value.length > 500) {
alert('解释内容不能超过500字');
return false;
}
return confirm('您确认提交此解释吗？提交后解释内容将不可更改');
}
function S() {
Inner('chars', Dd('content').value.length);
}
</script>
<script type="text/javascript">s('trade');m('<?php echo $nav;?>');</script>
<?php } ?>
<?php } else if($action == 'muti') { ?>
<form method="post" action="?" onsubmit="return check();" id="dform">
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<div class="ls">
<table cellpadding="0" cellspacing="0" class="tb">
<tr>
<th width="20"><input type="checkbox" onclick="checkall(this.form);calculate();"/></th>
<th>批量付款</th>
</tr>
</table>
<?php if(is_array($lists)) { foreach($lists as $k => $v) { ?>
<div class="dingdan">
<div class="dingdan_1">
<span class="f_r"><input type="hidden" id="money_<?php echo $v['itemid'];?>" value="<?php echo $v['money'];?>"/>&nbsp;<a href="?itemid=<?php echo $v['itemid'];?>&action=update&step=detail">订单详情</a></span>
&nbsp;<input type="checkbox" name="itemid[]" value="<?php echo $v['itemid'];?>" checked id="check_<?php echo $v['itemid'];?>" onclick="calculate(<?php echo $v['itemid'];?>)"/>
&nbsp;卖家：<a href="<?php echo userurl($v['seller'], 'file=contact');?>" target="_blank"><?php echo $v['seller'];?></a>
</div>
<div class="dingdan_2">
<div class="dingdan_2_1">
<a href="javascript:_preview('<?php echo $v['thumb'];?>');"><img src="<?php if($v['thumb']) { ?><?php echo $v['thumb'];?><?php } else { ?><?php echo DT_SKIN;?>image/nopic60.gif<?php } ?>
" width="60" height="60" onerror="this.src=errimg;"/></a>
</div>
<div class="dingdan_2_l">
<ul>
<li class="dingdan_2_l_1"><a href="?itemid=<?php echo $v['itemid'];?>&action=update&step=detail" class="t"><?php echo $v['title'];?></a></li>
<li class="dingdan_2_l_2"><?php echo $v['par'];?></li>
<li class="dingdan_2_l_2"><?php echo $v['addtime'];?></li>
</ul>
</div>
<div class="dingdan_2_r">
<ul>
<li><?php echo $DT['money_sign'];?><?php echo $v['money'];?></li>
<li>x <?php echo $v['number'];?></li>
</ul>
</div>
</div>
<?php } } ?>
</div>
<br/>
<table cellspacing="1" cellpadding="6" class="tb">
<tr>
<td class="tl1">商品数量</td>
<td class="tr"><span id="total_good"></span></td>
</tr>
<tr>
<td class="tl1">应付金额</td>
<td class="tr"><span class="f_red" id="total_amount"></span> <?php echo $DT['money_unit'];?></td>
</tr>
<tr>
<td class="tl1">账户余额</td>
<td class="tr"><span class="f_blue"><?php echo $_money;?></span> <?php echo $DT['money_unit'];?></td>
</tr>
<tr id="payword" style="display:none;">
<td class="tl1"><span class="f_red">*</span> 支付密码</td>
<td class="tr"><?php include template('password', 'chip');?>&nbsp;<span id="dpassword" class="f_red"></span></td>
</tr>
<?php if($DT['sms']) { ?>
<tr>
<td class="tl1"></td>
<td class="tr"><input type="checkbox" name="sendsms" value="1"/> 短信通知卖家发货 (<a href="sms.php" target="_blank" class="t">我的可用短信 <strong class="f_blue"><?php echo $_sms;?></strong> 条</a>)</td>
</tr>
<?php } ?>
<tr>
<td class="tl1">&nbsp;</td>
<td class="tr" height="50"><input type="submit" name="submit" value=" 立即支付 " class="btn_g"/></td>
</tr>
</table>
</form>
<script type="text/javascript">
var total = 0;
var itemids = [<?php if(is_array($lists)) { foreach($lists as $i => $t) { ?><?php if($i) { ?>,<?php } ?>
'<?php echo $t['itemid'];?>'<?php } } ?>];
function calculate(id) {
var _good = _amount = 0;
for(var i = 0; i < itemids.length; i++) {
var itemid = itemids[i];
if(Dd('check_'+itemid).checked) {
_good++;
_amount += parseFloat(Dd('money_'+itemid).value);
}
}
if(_good < 1) {
alert('至少需要选择一个订单');
Dd('check_'+(id ? id : itemid)).checked = true;
setTimeout('calculate()', 1000);
}
total = _amount;
Dd('total_good').innerHTML = _good;
Dd('total_amount').innerHTML = _amount.toFixed(2);
}
calculate();
function check() {
if(total > <?php echo $_money;?>) {
var k = '';
for(var i = 0; i < itemids.length; i++) {
var itemid = itemids[i];
if(Dd('check_'+itemid).checked) {
k += k ? ','+itemid : itemid;
}
}
Go('charge.php?action=pay&reason=trades|'+k+'&amount='+(total - <?php echo $_money;?>));
return false;
}
var f,l;
f = 'password';
l = Dd(f).value.length;
if(l < 6) {
Dmsg('请填写支付密码', f);
return false;
}
return true;
}
window.setInterval(
function() {
total > <?php echo $_money;?> ? Dh('payword') : Ds('payword');
}, 
500);
</script>
<script type="text/javascript">s('trade');m('action_order');</script>
<?php } else if($action == 'express') { ?>
<div class="tt">
<form action="?">
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<input type="text" size="32" name="kw" value="<?php echo $kw;?>" title="关键词"/>&nbsp;
<input type="submit" value=" 搜 索 " class="btn"/>
</form>
</div>
<div class="bd">
<table cellpadding="10" cellspacing="0" class="tb">
<tr bgcolor="#F2F2F2" align="center">
<th>快递信息</th>
</tr>
</table>
<?php if(is_array($lists)) { foreach($lists as $k => $v) { ?>
<div class="list-bian-140">
<table cellpadding="0" cellspacing="0" class="tb">
<tr>
<td align="left">
<ul class="bianji">
<li class="bianji-1" style="text-align:left;"><div class="bianji-1-1 f_blue">类型：<?php if($v['seller'] == $_username) { ?>发货（我是卖家）<?php } else { ?>收货（我是买家）<?php } ?>
</div><div class="bianji-1-2 f_red">快递公司：<?php echo $v['send_type'];?></div></li>
<li class="bianji-1">快递单号：<a href="?itemid=<?php echo $v['itemid'];?>&action=update&step=express"><?php echo $v['send_no'];?></a></li>
<li class="bianji-1"><div class="bianji-1-1">下单时间：<?php echo $v['addtime'];?></div><div class="bianji-1-2">更新时间：<?php echo $v['updatetime'];?></div></li>
<li class="bianji-1"><div class="bianji-1-1 f_red">快递状态：<?php echo $v['dstatus'];?></div><div class="bianji-1-2"><a href="?itemid=<?php echo $v['itemid'];?>&action=update&step=detail" class="t">订单详情</a></div></li>
</ul>
<td>
</tr>
</table>
</div>
<?php } } ?>
</div>
<div class="pages"><?php echo $pages;?></div>
<script type="text/javascript">s('trade');m('action_express');</script>
<?php } else if($action == 'order') { ?>
<div class="tt">
<form action="?">
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<input type="text" size="22" name="kw" value="<?php echo $kw;?>" title="关键词"/>&nbsp;
<?php echo $status_select;?>&nbsp;
<input type="submit" value=" 搜 索 " class="btn"/>
</div>
</form>
<div class="menu900">
<ul>
<li>
<table cellpadding="0" cellspacing="0">
<tr>
<td class="<?php if(!in_array($nav, array(0,1,2,3,4,5,6))) { ?>nav_2<?php } else { ?>nav_1<?php } ?>
"><a href="?action=<?php echo $action;?>">全部订单</a></td>
<td class="<?php if($nav==0) { ?>nav_2<?php } else { ?>nav_1<?php } ?>
"><a href="?action=<?php echo $action;?>&nav=0">待确认 <span>(<?php echo $db->count($table, "buyer='$_username' AND status=0");?>)</span></a></td>
<td class="<?php if($nav==1) { ?>nav_2<?php } else { ?>nav_1<?php } ?>
"><a href="?action=<?php echo $action;?>&nav=1">待付款 <span>(<?php echo $db->count($table, "buyer='$_username' AND status=1");?>)</span></a></td>
<td class="<?php if($nav==2) { ?>nav_2<?php } else { ?>nav_1<?php } ?>
"><a href="?action=<?php echo $action;?>&nav=2">待发货 <span>(<?php echo $db->count($table, "buyer='$_username' AND status=2");?>)</span></a></td>
<td class="<?php if($nav==3) { ?>nav_2<?php } else { ?>nav_1<?php } ?>
"><a href="?action=<?php echo $action;?>&nav=3">待收货 <span>(<?php echo $db->count($table, "buyer='$_username' AND status=3");?>)</span></a></td>
<td class="<?php if($nav==5) { ?>nav_2<?php } else { ?>nav_1<?php } ?>
"><a href="?action=<?php echo $action;?>&nav=5">待退款 <span>(<?php echo $db->count($table, "buyer='$_username' AND status=5");?>)</span></a></td>
<td class="<?php if($nav==6) { ?>nav_2<?php } else { ?>nav_1<?php } ?>
"><a href="?action=<?php echo $action;?>&nav=6">已退款 <span>(<?php echo $db->count($table, "buyer='$_username' AND status=6");?>)</span></a></td>
<td class="<?php if($nav==4) { ?>nav_2<?php } else { ?>nav_1<?php } ?>
"><a href="?action=<?php echo $action;?>&nav=4">待评价 <span>(<?php echo $db->count($table, "buyer='$_username' AND status=4 AND seller_star=0");?>)</span></a></td>
<td>&nbsp;</td>
</tr>
</table>
</li>
</ul>
</div>
<div class="bd">
<table cellpadding="6" cellspacing="0" class="tb">
<tr bgcolor="#F2F2F2" align="center">
<td>订单信息</td>
<?php if(!$DT['trade']) { ?>
<td width="120"><span onclick="Go('?action=muti');" style="border: solid 1px #999;padding: 5px;border-radius: 3px;">批量付款</span>
<?php } ?>
</tr>
</table>
<?php if(is_array($lists)) { foreach($lists as $k => $v) { ?>
<div class="dingdan">
<div class="dingdan_1">
<span class="f_r"><?php echo $v['dstatus'];?></span>
&nbsp;订单号：<?php echo $v['itemid'];?>
</div>
<div class="dingdan_2">
<div class="dingdan_2_1">
<a href="javascript:_preview('<?php echo $v['thumb'];?>');"><img src="<?php if($v['thumb']) { ?><?php echo $v['thumb'];?><?php } else { ?><?php echo DT_SKIN;?>image/nopic60.gif<?php } ?>
" width="60" height="60" onerror="this.src=errimg;"/></a>
</div>
<div class="dingdan_2_l">
<ul>
<li class="dingdan_2_l_1"><a href="<?php echo $v['linkurl'];?>" target="_blank" class="t"><?php echo $v['title'];?></a></li>
<li class="dingdan_2_l_2"><?php echo $v['par'];?></li>
<li class="dingdan_2_l_2"><?php echo $v['addtime'];?></li>
</ul>
</div>
<div class="dingdan_2_r">
<ul>
<li><?php echo $DT['money_sign'];?><?php echo $v['money'];?></li>
<li>x <?php echo $v['number'];?></li>
</ul>
</div>
</div>
<?php if($v['lefttime']) { ?>
<div class="dingdan_4">
<ul class="dingdan_4_1"><li><span class="f_blue" title="如果逾期未处理，系统将自动付款给卖家"><img src="<?php echo DT_STATIC;?>file/image/clock.gif" width="12" height="12"/> 离自动确认收货还剩<?php echo $v['lefttime'];?></span></li>
<li class="dingdan_4_1_01"><a href="?itemid=<?php echo $v['itemid'];?>&action=update&step=refund">申请退款</a></li>
</ul>
</div>
<?php } ?>
<div class="dingdan_3">
<div class="dingdan_3_l">
<ul>
<li>&nbsp;&nbsp;<a href="<?php echo userurl($v['seller'], 'file=contact');?>" target="_blank">店铺</a>&nbsp;&nbsp;<?php if($DT['im_web']) { ?>&nbsp;&nbsp;<?php echo xh_im_web($v['seller']);?>&nbsp;&nbsp;<?php } ?>
<a href="message.php?action=send&touser=<?php echo $v['seller'];?>">&nbsp;&nbsp;<img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/ico_message.gif" title="发送站内信" align="absmiddle"/></a></li>
</ul>
</div>
<div class="dingdan_3_r">
<ul>
  <li><a href="?itemid=<?php echo $v['itemid'];?>&action=update&step=detail">订单详情</a></li>
<?php if($v['status'] == 0) { ?>
  <li><a href="?itemid=<?php echo $v['itemid'];?>&action=update&step=close" onclick="return confirm('确实要关闭此交易吗？此操作将不可撤销');">关闭交易</a></li>
<?php } else if($v['status'] == 1) { ?>
  <li><a href="?itemid=<?php echo $v['itemid'];?>&action=update&step=close" onclick="return confirm('确实要关闭此交易吗？此操作将不可撤销');">关闭交易</a></li>
  <li class="dingdan_3_r_1"><a href="?itemid=<?php echo $v['itemid'];?>&action=update&step=pay">立即付款</a></li>
<?php } else if($v['status'] == 2) { ?>
  <li><a href="?itemid=<?php echo $v['itemid'];?>&action=update&step=remind">提醒发货</a></li>
  <li><a href="?itemid=<?php echo $v['itemid'];?>&action=update&step=refund">申请退款</a></li>
<?php } else if($v['status'] == 3) { ?>
  <?php if($v['lefttime']) { ?>
<?php if($v['send_type'] && $v['send_no']) { ?>
  <li><a href="?itemid=<?php echo $v['itemid'];?>&action=update&step=express">查看物流</a></li>
<?php } ?>
<?php } else { ?>
  <li><span class="f_red">订单已超时</span></li>
<?php } ?>
  <li class="dingdan_3_r_1"><a href="?itemid=<?php echo $v['itemid'];?>&action=update&step=receive_goods" onclick="return confirm('确认已收到货且质量与数量无误吗？\n\n请注意:确认后您的钱将直接支付给卖家');">确认收货</a></li>
<?php } else if($v['status'] == 4) { ?>
<?php if($v['mid'] == 16) { ?>
<?php if($v['seller_star']) { ?>
   <li><a href="?itemid=<?php echo $v['itemid'];?>&action=update&step=comment_detail">评价详情</a></li>
<?php } else { ?>
   <li><a href="?itemid=<?php echo $v['itemid'];?>&action=update&step=comment">评价</a></li>
<?php } ?>
<?php } ?>
<?php } else if($v['status'] == 9) { ?>
<li><a href="?itemid=<?php echo $v['itemid'];?>&action=update&step=close" onclick="return confirm('确实要删除此交易吗？此操作将不可撤销');">删除订单</a> 
</li>
<?php } ?>
</ul>
</div>
</div>
</div>
</div>
<?php } } ?>
</div>
<div class="pages"><?php echo $pages;?></div>
<script type="text/javascript">s('trade');m('action_order');</script>
<?php } else { ?>
<?php if($MG['trade_sell']) { ?>
<form action="?">
<input type="hidden" name="action" value="<?php echo $action;?>"/>
&nbsp;<input type="text" size="23" name="kw" value="<?php echo $kw;?>" title="关键词"/>&nbsp;
<?php echo $status_select;?>&nbsp;
<input type="submit" value=" 搜 索 " class="btn"/>
</form>
<div class="menu900">
<ul>
<table cellpadding="0" cellspacing="0">
<tr>
<td class="<?php if(!in_array($nav, array(0,1,2,3,4,5,6))) { ?>nav_2<?php } else { ?>nav_1<?php } ?>
"><a href="?action=<?php echo $action;?>">全部</a></td>
<td class="<?php if($nav==0) { ?>nav_2<?php } else { ?>nav_1<?php } ?>
"><a href="?action=<?php echo $action;?>&nav=0">待确认 <span>(<?php echo $db->count($table, "seller='$_username' AND status=0");?>)</span></a></td>
<td class="<?php if($nav==1) { ?>nav_2<?php } else { ?>nav_1<?php } ?>
"><a href="?action=<?php echo $action;?>&nav=1">待付款 <span>(<?php echo $db->count($table, "seller='$_username' AND status=1");?>)</span></a></td>
<td class="<?php if($nav==2) { ?>nav_2<?php } else { ?>nav_1<?php } ?>
"><a href="?action=<?php echo $action;?>&nav=2">待发货 <span>(<?php echo $db->count($table, "seller='$_username' AND status=2");?>)</span></a></td>
<td class="<?php if($nav==3) { ?>nav_2<?php } else { ?>nav_1<?php } ?>
"><a href="?action=<?php echo $action;?>&nav=3">待收货 <span>(<?php echo $db->count($table, "seller='$_username' AND status=3");?>)</span></a></td>
<td class="<?php if($nav==5) { ?>nav_2<?php } else { ?>nav_1<?php } ?>
"><a href="?action=<?php echo $action;?>&nav=5">待退款 <span>(<?php echo $db->count($table, "seller='$_username' AND status=5");?>)</span></a></td>
<td class="<?php if($nav==6) { ?>nav_2<?php } else { ?>nav_1<?php } ?>
"><a href="?action=<?php echo $action;?>&nav=6">已退款 <span>(<?php echo $db->count($table, "seller='$_username' AND status=6");?>)</span></a></td>
<td class="<?php if($nav==4) { ?>nav_2<?php } else { ?>nav_1<?php } ?>
"><a href="?action=<?php echo $action;?>&nav=4">待评价 <span>(<?php echo $db->count($table, "seller='$_username' AND status=4 AND buyer_star=0");?>)</span></a></td>
</tr>
</table>
</ul>
</div>
<div class="bd">
<?php if(is_array($lists)) { foreach($lists as $k => $v) { ?>
<div class="dingdan">
<div class="dingdan_1">
<span class="f_r">&nbsp;&nbsp;<a href="<?php echo userurl($v['buyer'], 'file=contact');?>" target="_blank">买家：<?php echo $v['buyer'];?></a>&nbsp;&nbsp;<?php if($DT['im_web']) { ?>&nbsp;&nbsp;<?php echo xh_im_web($v['buyer']);?>&nbsp;&nbsp;<?php } ?>
<a href="message.php?action=send&touser=<?php echo $v['buyer'];?>">&nbsp;&nbsp;<img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/ico_message.gif" title="发送站内信" align="absmiddle"/></a></span>
&nbsp;订单号：<?php echo $v['itemid'];?>
</div>
<div class="dingdan_2">
<div class="dingdan_2_1">
<a href="javascript:_preview('<?php echo $v['thumb'];?>');"><img src="<?php if($v['thumb']) { ?><?php echo $v['thumb'];?><?php } else { ?><?php echo DT_SKIN;?>image/nopic60.gif<?php } ?>
" width="60" height="60" onerror="this.src=errimg;"/></a>
</div>
<div class="dingdan_2_l">
<ul>
<li class="dingdan_2_l_1"><a href="<?php echo $v['linkurl'];?>" target="_blank" class="t"><?php echo $v['title'];?></a></li>
<li class="dingdan_2_l_2"><?php echo $v['par'];?></li>
<li class="dingdan_2_l_2"><?php echo $v['addtime'];?></li>
</ul>
</div>
<div class="dingdan_2_r">
<ul>
<li><?php echo $DT['money_sign'];?><?php echo $v['money'];?></li>
<li>x <?php echo $v['number'];?></li>
</ul>
</div>
</div>
<?php if($v['status'] == 3) { ?>
<?php if($v['lefttime']) { ?>
<div class="dingdan_4">
<ul class="dingdan_4_1">
<li><span class="f_blue"><img src="<?php echo DT_STATIC;?>file/image/clock.gif" width="12" height="12"/> 离自动确认收货订单还剩<?php echo $v['lefttime'];?></span></li>
</ul>
</div>
<?php } else { ?>
<div class="dingdan_4">
<ul class="dingdan_4_1">
<li><span class="f_blue"><span class="f_blue">买家处理订单超时</span></li>
<li class="dingdan_4_1_01"><a href="?itemid=<?php echo $v['itemid'];?>&action=update&step=get_pay">直接收款</a></li>
</ul>
</div>
<?php } ?>
<?php } ?>
<div class="dingdan_3">
<div class="dingdan_3_l">
<ul>
<li>&nbsp;</li>
</ul>
</div>
<div class="dingdan_3_r">
<ul>
  <li><a href="?itemid=<?php echo $v['itemid'];?>&action=update&step=detail">订单详情</a></li>
<?php if($v['status'] == 0) { ?>
  <li><a href="?itemid=<?php echo $v['itemid'];?>&action=update&step=edit_price">修改订单</a></li>
  <li><a href="?itemid=<?php echo $v['itemid'];?>&action=update&step=close" onclick="return confirm('确实要关闭此交易吗？此操作将不可撤销');">关闭交易</a></li>
  <li class="dingdan_3_r_1"><a href="?itemid=<?php echo $v['itemid'];?>&action=update&step=edit_price&confirm=1">确认订单</a></li>
<?php } else if($v['status'] == 1) { ?>
<li><a href="?itemid=<?php echo $v['itemid'];?>&action=update&step=close" onclick="return confirm('确实要关闭此交易吗？此操作将不可撤销');">关闭交易</a></li>
<li><a href="?itemid=<?php echo $v['itemid'];?>&action=update&step=edit_price">修改订单</a></li>
<?php } else if($v['status'] == 2) { ?>
 <li><a href="?itemid=<?php echo $v['itemid'];?>&action=update&step=print" target="_blank">打印订单</a></li>
 <li class="dingdan_3_r_1"><a href="?itemid=<?php echo $v['itemid'];?>&action=update&step=send_goods">确认发货</a></li>
<?php } else if($v['status'] == 3) { ?>
  <?php if($v['send_type'] && $v['send_no']) { ?>
  <li><a href="?itemid=<?php echo $v['itemid'];?>&action=update&step=express">查看物流</a></li>
<?php } ?>
<li class="dingdan_3_r_1"><a href="?itemid=<?php echo $v['itemid'];?>&action=update&step=add_time">延长时间</a></li>
<?php } else if($v['status'] == 4) { ?>
<?php if($v['mid'] == 16) { ?>
<?php if($v['buyer_star']) { ?>
   <li><a href="?itemid=<?php echo $v['itemid'];?>&action=update&step=comment_detail">评价详情</a></li>
<?php } else { ?>
   <li><a href="?itemid=<?php echo $v['itemid'];?>&action=update&step=comment">评价</a></li>
<?php } ?>
<?php } ?>
<?php } else if($v['status'] == 5) { ?>
<li><a href="?itemid=<?php echo $v['itemid'];?>&action=update&step=refund_agree">同意退款</a></li>
<?php } else if($v['status'] == 7) { ?>
<?php if($v['send_time']) { ?>
<li><a href="?itemid=<?php echo $v['itemid'];?>&action=update&step=cod_success" onclick="return confirm('您确定已经收到货款，交易完成吗？此操作将不可撤销');">确认完成</a></li>
<?php } else { ?>
<li><a href="?itemid=<?php echo $v['itemid'];?>&action=update&step=send_goods">确认发货</a></li>
<?php } ?>
<?php } else if($v['status'] == 8) { ?>
<li><a href="?itemid=<?php echo $v['itemid'];?>&action=update&step=close" onclick="return confirm('确实要删除此订单吗？此操作将不可撤销');">删除订单</a></li>
<?php } else if($v['status'] == 10) { ?>
<?php if($v['send_time']) { ?>
<li class="dingdan_3_r_2"><a href="?itemid=<?php echo $v['itemid'];?>&action=update&step=cod_success" onclick="return confirm('您确定已经收到货款，交易完成吗？此操作将不可撤销');"><span class="trade_step">完成</span></a></li>
<?php } else { ?>
<li><a href="?itemid=<?php echo $v['itemid'];?>&action=update&step=send_goods"><span class="trade_step">发货</span></a></li>
<?php } ?>
<?php } ?>
</ul>
</div>
</div>
</div>
</div>
<?php } } ?>
</div>
<div class="pages"><?php echo $pages;?></div>
<?php } else { ?>
<br/><br/><br/><br/><br/>
<center class="px14">当前共收到 <span class="f_red"><?php echo $orders;?></span> 个订单，请<a href="grade.php" class="t">升级您的会员级别</a>获取查看权限</center>
<?php } ?>
<script type="text/javascript">s('trade');m('action');</script>
<?php } ?>
<?php include template('footer', 'memberwap');?>