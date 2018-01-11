<?php
defined('IN_DESTOON') or exit('Access Denied');

function xh_im_web($id, $style = 0) {
	global $MODULE;
	return $id ? '<a href="chat.php?touser='.$id.'" target="_blank" rel="nofollow"><img src="'.DT_PATH.'api/online.png.php?username='.$id.'&style='.$style.'" title="点击交谈/留言" alt="" align="absmiddle" onerror="this.src=DTPath+\'file/image/web-off.gif\';"/></a>' : '';
}
function dtexit($error='error',$path='') {
	exit('{"error":"'.$error.'","path":"'.$path.'"}');
}



 
function hideStars($str) { //用户名、邮箱、手机账号中间字符串以*隐藏 
    if (strpos($str, '@')) { 
        $email_array = explode("@", $str); 
        $prevfix = (strlen($email_array[0]) < 4) ? "" : substr($str, 0, 3); //邮箱前缀 
        $count = 0; 
        $str = preg_replace('/([\d\w+_-]{0,100})@/', '***@', $str, -1, $count); 
        $rs = $prevfix . $str; 
    } else { 
        $pattern = '/(1[3458]{1}[0-9])[0-9]{4}([0-9]{4})/i'; 
        if (preg_match($pattern, $str)) { 
            $rs = preg_replace($pattern, '$1****$2', $str); // substr_replace($name,'****',3,4); 
        } else { 
            $rs = substr($str, 0, 3) . "***" . substr($str, -1); 
        } 
    } 
    return $rs; 
}

function mfields_check($post_fields, $fd = array()) {
	global $FD, $session;
	include load('include.lang');
	if($fd) $FD = $fd;
	if(!is_object($session)) $session = new dsession();
	$uploads = isset($_SESSION['uploads']) ? $_SESSION['uploads'] : array();
	foreach($FD as $k=>$v) {
		$value = isset($post_fields[$v['name']]) ? $post_fields[$v['name']] : '';
		if(in_array($v['html'], array('thumb', 'file', 'editor')) && $uploads) {
			foreach($uploads as $sk=>$sv) {
				if($v['html'] == 'editor') {
					if(strpos($value, $sv) !== false) unset($_SESSION['uploads'][$sk]);
				} else {
					if($sv == $value) unset($_SESSION['uploads'][$sk]);
				}
			}
		}
		if(!$v['input_limit']) continue;
		if(!defined('DT_ADMIN') && !$v['front']) continue;
		if($v['input_limit'] == 'is_date') {
			if(!is_date($value)) dtexit(lang($L['fields_input'], array($v['title'])));
		} else if($v['input_limit'] == 'is_email') {
			if(!is_email($value)) dtexit(lang($L['fields_valid'], array($v['title'])));
		} else if(is_numeric($v['input_limit'])) {
			$length = $value ? ($v['html'] == 'checkbox' ? count($value) : word_count($value)) : 0;
			if($length < $v['input_limit']) dtexit(lang($L['fields_less'], array($v['title'], $v['input_limit'])));
		} else if(preg_match("/^([0-9]{1,})\-([0-9]{1,})$/", $v['input_limit'], $m)) {			
			$length = $value ? ($v['html'] == 'checkbox' ? count($value) : word_count($value)) : 0;
			if($m[1] && $length < $m[1]) dtexit(lang($L['fields_less'], array($v['title'], $m[1])));
			if($m[2] && $length > $m[2]) dtexit(lang($L['fields_more'], array($v['title'], $m[2])));
		} else {
			if(!preg_match("/^".$v['input_limit']."$/", $value)) dtexit(lang($L['fields_match'], array($v['title'])));
		}
	}
}

function mproperty_html($var, $oid, $type, $value, $extend = '') {
	global $L;
	$str = '';
	if($type == 0) {
		if(strpos($extend, 'size=') === false) $extend .= ' size="50"';
		$str = '<input type="text" name="post_ppt['.$oid.']" id="property-'.$oid.'" class="aui-input" value="'.($var ? $var : $value).'" '.$extend.'/>';
	} else if($type == 1) {
		if(strpos($extend, 'rows=') === false) $extend .= ' rows="5"';
		if(strpos($extend, 'cols=') === false) $extend .= ' cols="80"';
		$str = '<textarea name="post_ppt['.$oid.']" id="property-'.$oid.'" '.$extend.'>'.($var ? $var : $value).'</textarea><br/>';
	} else if($type == 2) {
		$str = '<select name="post_ppt['.$oid.']" id="property-'.$oid.'" '.$extend.' class="aui-ml-15"><option value="">'.$L['choose'].'</option>';
		$ops = explode('|', $value);
		foreach($ops as $o) {
			if($var) {
				$o = str_replace('(*)', '', $o);
				$selected = $o == $var ? ' selected' : '';
			} else {
				$selected = strpos($o, '(*)') !== false ? ' selected' : '';
				$o = str_replace('(*)', '', $o);
			}
			$str .= '<option value="'.$o.'"'.$selected.'>'.$o.'</option>';
		}
		$str .= '</select>';
	} else if($type == 3) {
		$str = '<span id="property-'.$oid.'" '.$extend.'>';
		$ops = explode('|', $value);
		foreach($ops as $o) {
			if($var) {
				$o = str_replace('(*)', '', $o);
				$tmp = explode(',', $var);
				$selected = in_array($o, $tmp) ? ' checked' : '';
			} else {
				$selected = strpos($o, '(*)') !== false ? ' checked' : '';
				$o = str_replace('(*)', '', $o);
			}
			$str .= '<input type="checkbox" name="post_ppt['.$oid.'][]" class="aui-checkbox aui-checkbox-info" value="'.$o.'"'.$selected.'><div class="aui-checkbox-name fz12">'.$o.'</div>';
		}
		$str .= '</span>';
	}
	$str .= ' <span id="dproperty-'.$oid.'" class="f_red"></span>';
	if(DT_CHARSET != 'UTF-8') $str = convert($str, DT_CHARSET, 'UTF-8');
	return $str;
}

function mproperty_check($post_ppt) {
	global $post;
	include load('include.lang');
	$OP = $post['catid'] ? property_option($post['catid']) : array();
	if(!$OP) return;
	foreach($OP as $v) {
		if($v['required'] && !$post_ppt[$v['oid']]) {
			$msg = lang($v['type'] > 1 ? $L['fields_choose'] : $L['fields_input'], array($v['name']));
			defined('DT_ADMIN') ? dtexit($msg) : dtexit($msg);
		}
	}
}

?>