<?php
/*
	[ System] Copyright (c) 2018-2022 b2b.bjlsjp.cn
	This is NOT a freeware, use is subject to license.txt
*/
defined('IN_DESTOON') or exit('Access Denied');
class dsession {

    function __construct() {
		if(DT_DOMAIN) @ini_set('session.cookie_domain', '.'.DT_DOMAIN);
    	session_set_save_handler(array(&$this,'open'), array(&$this,'close'), array(&$this,'read'), array(&$this,'write'), array(&$this,'destroy'), array(&$this,'gc'));
		session_cache_limiter('private, must-revalidate');
		session_start();
		header("cache-control: private");
    }

    function dsession() {
		$this->__construct();
    }

	function open($path, $name) {
		return true;
	}

	function close() {
		return true;
	}

	function read($sid) {
         return apc_fetch($sid);
	}

	function write($sid, $data) {
		return apc_store($sid, $data, 1800);
	}

	function destroy($sid) {
	    return apc_delete($sid);
	}

	function gc() {
	    return true;
	}
}
?>