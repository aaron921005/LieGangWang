<?php
require '../common.inc.php';
check_referer() or exit;
if($DT_BOT) dhttp(403);
isset($auth) or $auth = '';
if($auth) {
	$string = decrypt($auth, DT_KEY.'SPAM');
	if(preg_match("/^[a-z0-9_@\-\s\/\.\,\(\)\+]{5,}$/i", $string)) {
		header("content-type:image/png");
		$imageX = strlen($string)*10;
		$imageY = 22;
		$im = @imagecreate($imageX, $imageY) or exit();
		//
		imageSaveAlpha($im, true);
		ImageAlphaBlending($im, false);
		$transparentColor = imagecolorallocatealpha($im, 255, 255, 255, 127);
		imagefill($im, 0, 0, $transparentColor);
		//EOD	
		$color = imagecolorallocate($im, 0, 0, 0);
		imagestring($im, 5, 0, 2, $string, $color);
		imagepng($im);
		imagedestroy($im);
	}
}
?>