<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header-mini', 'memberwap');?>
<div class="menu">
<table cellpadding="0" cellspacing="0">
<tr>
<td class="tab_on" id="action"><a href="?action=index"><span>管理头像</span></a></td>
<td class="tab"><a href="wapedit.php"><span>修改资料</span></a></td>
</tr>
</table>
</div>
<link rel="stylesheet" href="avatar/style.css">
<?php if($action=='edit') { ?>
<div class="aui-content">
<div class="pic_edit">
<h4 class="aui-padded-10 aui-text-red">双指旋转和双指缩放</h4>
<div id="clipArea"></div>
    <div class="aui-padded-10">
<button id="upload2">选择图片</button>&nbsp;&nbsp;
    <button id="clipBtn">马上上传</button>
<input type="file" id="file" style="opacity: 0;position: fixed;">
</div>
</div>
<div id="view" style=" display:none;z-index:9"></div>
<input type="button"  value="返回"  style="display:none" id="close_img" onclick="close_img()"/>
<div id="cover"></div>
<script type="text/javascript" src="<?php echo DT_PATH;?>file/script/config.js"></script>
<script type="text/javascript" src="layer/layer.js"></script>
<script type="text/javascript" src="avatar/webapp.js" charset="utf-8"></script>
<script src="avatar/iscroll-zoom.js"></script>
<script src="avatar/hammer.js"></script>
<script src="avatar/lrz.all.bundle.js"></script>
<script src="avatar/jquery.photoClip.js"></script>
<script>
function close_img()
{
$(".pic_edit").css({'display':"block"});
$('#hit').css({'display':"none"});
$('#close_img').css({'display':"none"});
}
var hammer = '';
var currentIndex = 0;
var body_width = $('body').width();
var body_height = $('body').height();
var clipArea = new bjj.PhotoClip("#clipArea", {
size: [260, 260],
outputSize: [640, 640],
file: "#file",
view: "#view",
ok: "#clipBtn",
loadStart: function () {
laymsg('照片读取中');
},
loadComplete: function () {
laymsg('照片读取完成');
},
clipFinish: function (dataURL) {
saveImageInfo(dataURL);
}
});
//图片上传
function saveImageInfo(dataURL) {
$("#clipBtn").text("头像上传中...");
var filename = $('#hit').attr('fileName');
var img_data = dataURL;
if(img_data==""){alert('null');}
ImgFileSize=Math.round(img_data.fileSize/1024*100)/100;//取得图片文件的大小
laymsg('头像上传中，请稍等...');
//render(img_data);
$.post("wapavatar.php?action=upload", {image: dataURL}, function (data) {
if(data.error == 'ok') {
laymsg('头像上传成功');
$("#clipBtn").text("马上上传");
setTimeout(function() {
window.location.href='wapavatar.php?itemid=<?php echo $DT_TIME;?>';
}, 1000);
} else {
laymsg(data.error);
$("#clipBtn").text("重新上传");
}
},'json');
}
// 获取blob对象的兼容性写法
function getBlob(buffer, format){
        var Builder = window.WebKitBlobBuilder || window.MozBlobBuilder;
        if(Builder){
            var builder = new Builder;
            builder.append(buffer);
            return builder.getBlob(format);
        } else {
            return new window.Blob([ buffer ], {type: format});
        }
    }
/*获取文件拓展名*/
function getFileExt(str) {
var d = /\.[^\.]+$/.exec(str);
return d;
}
$(function () {
$('#upload2').click(function(){
$('#file').click();
});


})
// 渲染 Image 缩放尺寸  
function render(src,image){  
 var MAX_HEIGHT = 256;  //Image 缩放尺寸 
    // 创建一个 Image 对象  
    var image = new Image();  

    // 绑定 load 事件处理器，加载完成后执行  
    image.onload = function(){  
// 获取 canvas DOM 对象  
  var canvas = document.createElement("canvas"); 
        // 如果高度超标  
        if(image.height > MAX_HEIGHT) {  
            // 宽度等比例缩放 *=  
            image.width *= MAX_HEIGHT / image.height;  
            image.height = MAX_HEIGHT;  
        }  
        // 获取 canvas的 2d 环境对象,  
        // 可以理解Context是管理员，canvas是房子  
        var ctx = canvas.getContext("2d");  
        // canvas清屏  
        ctx.clearRect(0, 0, canvas.width, canvas.height); 
        canvas.width = image.width;        // 重置canvas宽高  
        canvas.height = image.height;  
        // 将图像绘制到canvas上  
        ctx.drawImage(image, 0, 0, image.width, image.height);  
        // !!! 注意，image 没有加入到 dom之中  

 var dataurl = canvas.toDataURL("image/jpeg");  

    };  
    // 设置src属性，浏览器会自动加载。  
    // 记住必须先绑定render()事件，才能设置src属性，否则会出同步问题。  
    image.src = src;
};  
</script>
</div>
<?php } else { ?>
<div class="avatar">
<img class="" src="<?php echo useravatar($_username, 'large');?>&time=<?php echo $DT_TIME;?>" width="150" height="150" title="大头像">
</div>
<div class="avatar">
        <div class="avatar-img avatar-text">
<ul>
                    <?php if($avatar) { ?><a href="?action=delete" onclick="return confirm('确定要删除您的个人头像吗？');"><li class="avatar-btn-danger">删除头像</li></a><?php } ?>
<a href="?action=edit"><li class="avatar-btn-info">上传头像</li></a>
</ul>
                </div>
</div>
<?php } ?>
<?php include template('footer', 'memberwap');?>