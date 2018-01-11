<?php
// 包含 qrlib.php 或 phpqrcode.php
include('phpqrcode/phpqrcode.php');
// 构建 vcard 数据
$vcard = 
    "BEGIN:VCARD".
    "\nVERSION:3.0".
    "\nFN:$_GET[name]".              //姓名
    "\nTITLE:$_GET[title]".          //职位
    "\nTEL;CELL;VOICE:$_GET[tel]".   //手机
    "\nTEL;WORK;VOICE:$_GET[work]".  //固定电话
    "\nORG:$_GET[org]".              //公司名
    "\nEMAIL:$_GET[email]".          //邮箱
    "\nURL:$_GET[url]".              //网址
    //"\nADR:$_GET[adr]".            //地址
    "\nEND:VCARD";

// 纠错级别：L、M、Q、H
$errorCorrectionLevel = 'L';

// 点的大小：1到10
$matrixPointSize = 3;

// 保存文件名
$filename = 'test.png';

//生成二维码
QRcode::png($vcard, $filename, $errorCorrectionLevel, $matrixPointSize, 2);

 
//获取二维码
$qrcode = file_get_contents($filename);
$qrcode = imagecreatefromstring($qrcode);
$qrcode_width = imagesx($qrcode);
$qrcode_height = imagesy($qrcode);

//圆角图片
$corner = file_get_contents('phpqrcode/corner.png');
$corner = imagecreatefromstring($corner);
$corner_width = imagesx($corner);
$corner_height = imagesy($corner);

//计算圆角图片的宽高及相对于二维码的摆放位置,将圆角图片拷贝到二维码中央
$corner_qr_height = $corner_qr_width = $qrcode_width/5;
$from_width = ($qrcode_width-$corner_qr_width)/2;
imagecopyresampled($qrcode, $corner, $from_width, $from_width, 0, 0, $corner_qr_width, $corner_qr_height, $corner_width, $corner_height);


//logo图片
$logo = file_get_contents('phpqrcode/dtico.png');
$logo = imagecreatefromstring($logo);
$logo_width = imagesx($logo);
$logo_height = imagesy($logo);


//计算logo图片的宽高及相对于二维码的摆放位置,将logo拷贝到二维码中央
$logo_qr_height = $logo_qr_width = $qrcode_width/5 - 6;
$from_width = ($qrcode_width-$logo_qr_width)/2;
imagecopyresampled($qrcode, $logo, $from_width, $from_width, 0, 0, $logo_qr_width, $logo_qr_height, $logo_width, $logo_height);


header('Content-type: image/png');
imagepng($qrcode);
imagedestroy($qrcode);
imagedestroy($corner);
imagedestroy($logo);
