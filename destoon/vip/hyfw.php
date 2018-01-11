<?php
define('DT_REWRITE', true);
$xh=3;
$fuwu=vip;
require '../common.inc.php';
$seo_title = $DT['vdtitle'];
$head_keywords = $DT['vdkeywords'];
$head_description = $DT['vddescription'];
$groupid = userinfo($item['username']);
include template('hyfw','vip');
?>