<?php 
require 'mywapuser.php';
$user = userinfo($_username);
extract($user);
$expired = $totime && $totime < $DT_TIME ? true : false;
$havedays = $expired ? 0 : ceil(($totime-$DT_TIME)/86400);
$head_title = $L['profile_title'];
include template('profile', 'memberwap');
?>