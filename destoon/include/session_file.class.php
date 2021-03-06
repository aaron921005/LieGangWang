<?php
/*
	[ System] Copyright (c) 2018-2022 b2b.bjlsjp.cn
	This is NOT a freeware, use is subject to license.txt
*/
defined('IN_DESTOON') or exit('Access Denied');
class dsession {
    function dsession() {
		if(DT_DOMAIN) @ini_set('session.cookie_domain', '.'.DT_DOMAIN);
		@ini_set('session.gc_maxlifetime', 1800);
    	if(is_dir(DT_ROOT.'/file/session/')) {
			$dir = DT_ROOT.'/file/session/'.strtolower(substr(md5(DT_KEY), 2, 6)).'/';
			if(is_dir($dir)) {
				session_save_path($dir);
			} else {
				dir_create($dir);
			}
		}
		session_cache_limiter('private, must-revalidate');
		@session_start();
		header("cache-control: private");
    }
}
?>