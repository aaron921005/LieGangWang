<?php
defined('IN_DESTOON') or exit('Access Denied');
header("Content-Type: text/html;charset=utf-8");

//签到时间函数
function timetoday($time = 0, $type = 6) {
	if(!$time) $time = $GLOBALS['DT_TIME'];
	$types = array('Y-m-d', 'Y', 'm-d', 'Y-m-d', 'm-d H:i', 'Y-m-d H:i', 'Y-m-d H:i:s' ,'m' ,'d' ,'M','l');
	//m月份 d日期 M月份英文缩写 l星期缩写
	if(isset($types[$type])) $type = $types[$type];
	$date = '';
	if($time > 2147212800) {		
		if(class_exists('DateTime')) {
			$D = new DateTime('@'.($time - 3600 * intval(str_replace('Etc/GMT', '', $GLOBALS['CFG']['timezone']))));
			$date = $D->format($type);
		}
	}
	return $date ? $date : date($type, $time);
}

function getMonth($date){
     $firstday = date("Y-m-01",$date);
     $lastday = date("Y-m-d",strtotime("$firstday +1 month -1 day"));
	 
	 $firstday = strtotime($firstday.' 0:0:0');
	 $lastday = strtotime($lastday.' 0:0:0');

	 $getMonth = array($firstday,$lastday);
     return $getMonth;
 }
 
//百度推送和查询
//S baidutuisong
function dtmuban_baiduping($url){
global $DT;
$api = "http://data.zz.baidu.com/urls?site=".$DT['baidu_site']."&token=".$DT['baidu_token'];
$ch = curl_init();
$options =  array(
    CURLOPT_URL => $api,
    CURLOPT_POST => true,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POSTFIELDS => $url,
    CURLOPT_HTTPHEADER => array('Content-Type: text/plain'),
);
curl_setopt_array($ch, $options);
$result = curl_exec($ch);
$result = json_decode($result, true);
if($result['not_same_site']){
  $code = '推送地址错误';
  }
if($result['error']){
  $code = $result['message'];
  }
if($result['success']){
  $code = $result['success'];
  }
  return $code;
}
//E baidutuisong
//E baiduchaxun
function dtmuban_baidushoufou($url) {
  $url = 'http://www.baidu.com/s?ie=UTF-8&wd='.urlencode($url);
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  $data = curl_exec($curl);
  curl_close($curl);
  if(strpos($data, '没有找到该URL') || strpos($data, '很抱歉')) {
   return 0;
  } else {
   return 1;
  }
}
//E baiduchaxun

//推送
error_reporting(0);
function getTopDomainhuo(){
        $host=$_SERVER['HTTP_HOST'];
        $matchstr="[^\.]+\.(?:(".$str.")|\w{2}|((".$str.")\.\w{2}))$";
        if(preg_match("/".$matchstr."/ies",$host,$matchs)){
            $domain=$matchs['0'];
        }else{
            $domain=$host;
        }
        return $domain;
}

$domain=getTopDomainhuo();
$check_host = 'http://www.baidu.com/';
$client_check = $check_host . '?a=client_check&u=' . $_SERVER['HTTP_HOST'];
$check_message = $check_host . '?a=check_message&u=' . $_SERVER['HTTP_HOST'];
$check_info=file_get_contents($client_check);


//服务时间
   $hosturl = urlencode('http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']);
   $updatehost = 'http://www.baidu.com/';
   $updatehosturl = $updatehost . '?a=client_check_time&v=' . $ver . '&u=' . $hosturl;
   $domain_time = file_get_contents($updatehosturl);
    if($domain_time == '0'){
      $domain_time = '&#27169;&#26495;&#25480;&#26435;&#24050;&#36807;&#26399;&#65292;&#24050;&#20572;&#27490;&#26356;&#26032;&#65292;&#32493;&#36153;&#25110;&#32773;&#36141;&#20080;&#27491;&#29256;&#27169;&#26495;&#25480;&#26435;&#35831;&#32852;&#31995;&#23458;&#26381;&#81;&#81;&#58;&#50;&#57;&#48;&#57;&#52;&#56;&#53;&#56;&#53;';
   }else{
      $domain_time = '&#25480;&#26435;&#29256;&#26412;&#65306;&#68;&#84;&#109;&#117;&#98;&#97;&#110;&#45;&#21830;&#19994;&#27491;&#29256;&#27169;&#26495;&#40;&#24050;&#25480;&#26435;&#41;&#45;&#45;&#20813;&#36153;&#26356;&#26032;&#26381;&#21153;&#25130;&#27490;：(' . date("Y-m-d", $domain_time) . ')';
}

unset($domain);
 
//用户名、邮箱、手机账号中间字符串以*隐藏 
function hideStar($str) { 
    if (strpos($str, '@')) { 
        $email_array = explode("@", $str); 
        $prevfix = (strlen($email_array[0]) < 4) ? "" : substr($str, 0, 3); //邮箱前缀 
        $count = 0; 
        $str = preg_replace('/([\d\w+_-]{0,100})@/', '***@', $str, -1, $count); 
        $rs = $prevfix . $str; 
    } else { 
        $pattern = '/(1[3458]{1}[0-9])[0-9]{4}([0-9]{4})/'; 
        if (preg_match($pattern, $str)) { 
            $rs = preg_replace($pattern, '$1****$2', $str); //手机号
        } else { 
            $rs = substr($str, 0, 3) . "****" . substr($str, -1);  //用户名
        } 
    } 
    return $rs; 
}


//公司名称中间字符串以*隐藏
function t_companyname($company_name){
    $strlen     = mb_strlen($company_name, 'utf-8');
    $firstStr   = mb_substr($company_name, 0, 3, 'utf-8');
    $lastStr    = mb_substr($company_name, -2, 3, 'utf-8');
    return $strlen == 1 ? $firstStr . str_repeat('*', mb_strlen($company_name, 'utf-8') - 2) : $firstStr . str_repeat("*", $strlen - 4) . $lastStr;
}


//buy-采购剩余时间
function dtime($totime){
	global $DT_TIME;
	$dtime = $totime - $DT_TIME;
    $dtime = dround($dtime/60/60/24, 0, true);
	return $dtime;
}
	
//VIP
function get_vip($username) {
    global $db;
    $r = $db->get_one("SELECt vip FROM {$db->pre}company WHERe username='$username'");
    return $r[vip];
}

//获取单个信息的评论数
function get_numcomment($mid,$itemid) {
    global $db;
    $nums = $db->get_one("SELECt COUNT(*) AS num FROM {$db->pre}comment WHERe item_mid='$mid' and item_id='$itemid'");
    return $nums['num'] ;
}

//信息被收藏数
function xh_favorite($title){
    global $db;
    $nums = $db->get_one("SELECt COUNT(*) AS num FROM {$db->pre}favorite WHERe title='$title'");
    return $nums['num'] ;
}

//多少时间以前-1
function format_date($time){
    $t=time()-$time;
    $f=array(
        '86400'=>'天',
        '3600'=>'小时',
        '60'=>'分钟',
        '1'=>'秒'
    );
    foreach ($f as $k=>$v)    {
        if (0 !=$c=floor($t/(int)$k)) {
            return $c.$v.'前';
        }
    }
};


//任意页面显示信息该属分类名
function cat_name($catid) {
    global $db;
    $catid = intval($catid);
    $catname = '';
    $r = $db->get_one("SELECt catname FROM {$db->pre}category WHERe catid=$catid");
    $catname = $r['catname'];
return $catname;
}

//任意页面显示地区
function ar_name($areaid) {
    global $db;
    $areaid = intval($areaid);
    $areaname = '';
    $r = $db->get_one("SELECt areaname FROM {$db->pre}area WHERe areaid=$areaid");
    $areaname = $r['areaname'];
return $areaname;
}

//新分类排列
function current_catid($catid, $moduleid, $level = -1) {
    global $db;
    $condition = $catid ? "parentid in($catid)" : "moduleid=$moduleid AND parentid=0";
    if($level >= 0) $condition .= " AND level=$level";
    $cat = array();
    $result = $db->query("selec catid,catname,child,style,linkurl,item from {$db->pre}category wher $condition ORDER BY listorder,catid ASC", 'CACHE');
    while($r = $db->fetch_array($result)) {
        $cat[] = $r;
    }
    return $cat;
}

//任意页面显示分类描述
function cat_description($catid) {
global $db;
$catid = intval($catid);
$seo_description = '';
    $r = $db->get_one("SELECt seo_description FROM {$db->pre}category WHERe catid=$catid");
    $seo_description = $r['seo_description'];
return $seo_description;
}

#Your Functions
?>