<?php
/*
	[ System] Copyright (c) 2018-2022 b2b.bjlsjp.cn
	This is NOT a freeware, use is subject to license.txt
*/
require '../../../common.inc.php';
$itemid = intval(get_cookie('trade_id'));
if($itemid) {
	$r = $db->get_one("SELECT mid,mallid FROM {$DT_PRE}mall_order WHERE itemid=$itemid");
	if($r) dheader(DT_PATH.'api/redirect.php?mid='.$r['mid'].'&itemid='.$r['mallid']);
} 
dheader(isset($MODULE[16]) ? $MODULE[16]['linkurl'] : DT_PATH);
?>