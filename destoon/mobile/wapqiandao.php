<?php
/*
b2b.bjlsjp.cn
*/
$moduleid = 2;
require 'common.inc.php';
require DT_ROOT.'/module/'.$module.'/common.inc.php';
$_userid or dheader('login.php?forward='.urlencode('qiandao.php'));
require DT_ROOT.'/include/post.func.php';
require 'memberwap/extend.func.php';
require 'memberwap/lang.inc.php';
require MD_ROOT.'/qiandao.class.php';
$do = new qiandao();

$head_name = $M['qiandao_header'];
$head_title = $head_name.$DT['seo_delimiter'].$head_title;
switch($action) {
	case 'add':
	     if($_groupid  == '1') {
	     exit('{"status":1,"content":"该会员组不允许签到"}');
	     }
		$today = str_replace('-','',timetodate($DT_TIME, 0));
		$condition = "username='$_username'";
        $r = $db->get_one("SELECT itemid,signdays,addtime FROM {$DT_PRE}qiandao WHERE username='$_username' ORDER BY itemid DESC LIMIT 1");
		if($r){
		    $qdday = str_replace('-','',timetodate($r['addtime'], 0));
			if($qdday==$today){
				exit('{"status":1,"content":"已经签到了亲"}');
				}
			if(($today-$qdday)=='1'){
				$signdays = $r['signdays'] + 1;
				$fee_add = $MG['qd_dqys'];
				}
				else{
				$signdays = '1';
				$fee_add = $MG['qd_dqy'];
				}
			
			$fee_add = $fee_add;
		    $signdays = $signdays;
			
			$post['userid'] =  $_userid;
		    $post['username'] = $_username;
			$post['signdays'] =  $signdays;
			$post['feeadd'] =  $fee_add;
			$post['ostype'] =  $UAType;
			$post['areaid'] =  '';
			$post['note'] =  '';
			$do->add($post);
			credit_add($_username, $fee_add);
			credit_record($_username, $fee_add, 'system', $M['qiandao_reward'],$UAType);
			exit('{"status":0,"signday":"'.$signdays.'","signget":"'.$fee_add.'"}');
			}
			else{
			$fee_add = $MG['qd_dqy'];
			$db->query("INSERT INTO {$DT_PRE}qiandao (userid,username,signdays,feeadd,areaid,ostype,note,addtime) VALUES ('$_userid','$_username','1','$fee_add','','$UAType','','$DT_TIME')");
			credit_add($_username, $fee_add);
			credit_record($_username, $fee_add, 'system', $M['qiandao_reward'],$UAType);
			exit('{"status":0,"signday":"1","signget":"'.$fee_add.'"}');
				}
	break;
	case 'list':
		$back_link = $MYURL;
		if($uid){
		$condition = " WHERE userid='$_userid' ";
		}
		$r = $db->get_one("SELECT COUNT(*) AS num FROM {$DT_PRE}qiandao");
		$items = $r['num'];
		$pages = mobile_pages($items, $page, $pagesize);
		$lists = array();
		if($items) {
			$result = $db->query("SELECT * FROM {$DT_PRE}qiandao {$condition} ORDER BY itemid DESC LIMIT $offset,$pagesize");
			while($r = $db->fetch_array($result)) {
				$r['adddate'] = timetodate($r['addtime'], 5);
				$r['username'] = hideStars($r['username']);
				$lists[] = $r;
			}
		}
		//var_dump($result);
		$signelist = '';
		foreach($lists as $v) {
			$signelist .= '<li>'.$v['username'].' 连续签到<span class="color_luse">'.$v['signdays'].'</span>天获得<span class="color_red">'.$v['feeadd'].'</span>积分 <div class="qiandao_time">'.$v['adddate'].'</div></li>';
		}
		//$signelist = utftext($signelist);
		exit($signelist);
	break;
	case 'delete':
		$itemid or exit('ko');
		$do->itemid = $itemid;
		$r = $do->get_one();
		if(!$r || $r['username'] != $_username) exit('ko');
		$do->delete($itemid);
		exit('ok');
	break;
	default:
		$back_link = $MYURL;
		$r = $db->get_one("SELECT COUNT(*) AS num FROM {$DT_PRE}qiandao WHERE addtime>$DT_TIME-86400");
		$items = $r['num'];
		$condition = "username='$_username'";
		$r = $db->get_one("SELECT * FROM {$DT_PRE}qiandao WHERE $condition ORDER BY itemid DESC LIMIT 1");
		$today = str_replace('-','',timetodate($DT_TIME, 0));
		$qdday = str_replace('-','',timetodate($r['addtime'], 0));
		if($r && $qdday==$today){
		$signed = 1;
		}
	break;
}
$foot = 'my';
include template('mqiandao', 'mobile');
if(DT_CHARSET != 'UTF-8') toutf8();
?>