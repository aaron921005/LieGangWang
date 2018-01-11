// JavaScript Document
$(document).ready(function() {
  $(".f_shop>.tit>ul>li").mouseover(function(){
	$(".f_shop>.tit>ul>li").removeClass('cur').eq($(this).index()).addClass('cur');
	$(".f_shop>.con").hide().eq($(this).index()).show();
  });

});

/*搜索框效果*/
$(".head_search .search_i").focus(function(){
		$("#destoon_search").addClass("search_form_focus");
	}).blur(function(){
		if($(this).val().length==0){
			$("#destoon_search").removeClass("search_form_focus");
}

/*单品鼠标经过效果*/
$(".l_item-m").mouseenter(function(){
		$(this).addClass("l_item-active");
	}).mouseleave(function(){
		$(this).removeClass("l_item-active");
   });
});

//城市分站链接
function gocity(s) {
  Go(''+DTPath+'api/city.php?action=go&'+s);
}

/*鼠标经过展开*/
$(".nav-list-fl").mouseenter(function(){
    $(this).addClass("hnl-hover");
  }).mouseleave(function(){
    $(this).removeClass("hnl-hover");
});
//全站幻灯 - S
$(function() {
  var sWidth = $("#focus").width(); //获取焦点图的宽度（显示面积）
  var len = $("#focus ul li").length; //获取焦点图个数
  var index = 0;
  var picTimer;
  
  //以下代码添加数字按钮和按钮后的半透明条，还有上一页、下一页两个按钮
  var btn = "<div class='btnBg'></div><div class='btnd'>";
  for(var i=0; i < len; i++) {
    btn += "<span></span>";
  }
  btn += "</div><div class='preNext pre'></div><div class='preNext next'></div>";
  $("#focus").append(btn);
  $("#focus .btnBg").css("opacity",0.5);

  //为小按钮添加鼠标滑入事件，以显示相应的内容
  $("#focus .btnd span").css("opacity",0.4).mouseover(function() {
    index = $("#focus .btnd span").index(this);
    showPics(index);
  }).eq(0).trigger("mouseover");

  //上一个、下一个按钮透明度处理
  $("#focus .preNext").css("opacity",0.2).hover(function() {
    $(this).stop(true,false).animate({"opacity":"0.5"},300);
  },function() {
    $(this).stop(true,false).animate({"opacity":"0.2"},300);
  });

  //上一个按钮
  $("#focus .pre").click(function() {
    index -= 1;
    if(index == -1) {index = len - 1;}
    showPics(index);
  });

  //下一个按钮
  $("#focus .next").click(function() {
    index += 1;
    if(index == len) {index = 0;}
    showPics(index);
  });

  //本例为左右滚动，即所有li元素都是在同一排向左浮动，所以这里需要计算出外围ul元素的宽度
  $("#focus ul").css("width",sWidth * (len));
  
  //鼠标滑上焦点图时停止自动播放，滑出时开始自动播放
  $("#focus").hover(function() {
    $('.preNext').show();
    clearInterval(picTimer);
  },function() {
    $('.preNext').hide();
    picTimer = setInterval(function() {
      showPics(index);
      index++;
      if(index == len) {index = 0;}
    },4000); //此4000代表自动播放的间隔，单位：毫秒
  }).trigger("mouseleave");
  
  //显示图片函数，根据接收的index值显示相应的内容
  function showPics(index) { //普通切换
    var nowLeft = -index*sWidth; //根据index值计算ul元素的left值
    $("#focus ul").stop(true,false).animate({"left":nowLeft},300); //通过animate()调整ul元素滚动到计算出的position
    $("#focus .btnd span").removeClass("on").eq(index).addClass("on"); //为当前的按钮切换到选中的效果
    $("#focus .btnd span").stop(true,false).animate({"opacity":"0.4"},300).eq(index).stop(true,false).animate({"opacity":"1"},300); //为当前的按钮切换到选中的效果
  }
});
//幻灯-E

//IE低版本的提示
$(function(){
  function IETester(userAgent){var UA =  userAgent || navigator.userAgent;if(/msie/i.test(UA)){return UA.match(/msie (\d+\.\d+)/i)[1];}else if(~UA.toLowerCase().indexOf('trident') && ~UA.indexOf('rv')){return UA.match(/rv:(\d+\.\d+)/)[1];}else{return 0}}
      var version = Math.floor(IETester());
      var $xhtml = "<div class='ieTester'>亲！您的浏览器版本较低，为了您更好的体验请升级您的浏览器。<a href='//rj.baidu.com/soft/detail/14917.html?ald' target='_blank'>立即更新</a></div>";
   if (version > 1 && version < 9) {$("body").prepend($xhtml);}
})

//开关灯
 function Switch()
    {
    var button = document.getElementById("bt");  //通过id获得button
    var div = document.getElementById("close_v");      //需要隐藏和显示层的id
    var type = document.body.className;           //获得html里body的CSS样式表
   if (type == "daytime")    //判断类的名称，如果类是"daytime"则点击button后，将类换为"night",背景的颜色就改变了
       {
    document.body.className= "night";           //获得CSS样式表里的"night"类
    button.value = "关灯";                         //button显示为close night
    div.style.display = "block";           //显示该层
    }
    else 
    {
    document.body.className = "daytime";     //获得CSS样式表里的"daytime"类
    button.value = "开灯";                         //button显示为open ligth
    div.style.display = "none";           //隐藏该层
    }
}

//列表特效
function buy_check(){
if(Dd('buy_kw').value == '输入关键词'){Dd('buy_kw').value='';}
}
function reset_status(t0,t1,t2){
if(t2 != ''){
Dd(t0).value = Dd(t2).value;
}
else{
Dd(t0).value = t1;
}
buy_check();
Dd('fsearch').submit();
}
function set_toggle(t1,t2){
var sidec = t2+"2";
if(Dd("a_"+t1).className==t2 || Dd("a_"+t1).className!=sidec){
Dd("a_"+t1).className = sidec;
Dd("b_"+t1).className = "cur";
Dd("b_"+t1).innerHTML = "收起";
}else{
Dd("a_"+t1).className = t2;
Dd("b_"+t1).className = "";
Dd("b_"+t1).innerHTML = "更多";
}
}

//点击收藏
function SendFav_cart(t1,t2,t3) {
	var htm = '<form method="post" action="'+MEPath+'favorite.php" id="dfavorite_'+t3+'" target="_blank">';
	htm += '<input type="hidden" name="action" value="add"/>';
	htm += '<input type="hidden" name="title" value="'+t1+'"/>';
	htm += '<input type="hidden" name="url" value="'+t2+'"/>';
	htm += '</form>';
	$('#destoon_space_'+t3).html(htm);
	Dd('dfavorite_'+t3).submit();
}

//列表浮层置顶
$.fn.fixedDiv = function(actCls){
	var pos = 0,
		that = $(this),
		upval = $(actCls),
		topVal,
		bottonval;
	  topVal = that.offset().top;
	function fix(){
		bottonval = upval.offset().top - that.outerHeight(true);
		pos = $(document).scrollTop();
		if ((pos > topVal)&&(pos < bottonval)) {
            that.css({
						position: 'fixed',
						top     : '0',
						display : 'block'
					});
			
			if (!window.XMLHttpRequest) {
			 that.css({
					position: 'absolute',
					top     : pos,
				});
			}
		}else if(pos > bottonval) {
			that.css({
						position: 'absolute',
						top     : bottonval,
						display : 'none'
					})
		} else{
			that.removeAttr("style");
			that.css({
					position: 'static',
					top     : 'auto'

				});
			if (!window.XMLHttpRequest) {
				that.css({
					position: 'static',
					top     : 'auto'
				});
			}
		}
	}
	fix();
	$(window).scroll(fix);
}
