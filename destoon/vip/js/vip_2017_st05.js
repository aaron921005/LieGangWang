//浮动置顶
$(".screen-one").height($(window).height());
var side_h = $(".sideBar").height(),
s_height = ($(window).height() - side_h) / 2;
$(".sideBar").css("top", s_height);
var c;
$(function() {
    $(".tab-content .tab-detail:first").show();
    $(".tabs li").hover(function() {
        $(this).addClass("current");
        $(this).siblings().removeClass("current");
        c = $(this).index();
        $($(".tab-content .tab-detail")[c]).siblings().hide();
        $($(".tab-content .tab-detail")[c]).show()
    })
});

//服务优势
$(function() {
    var a = 2;
    $(".scroll-area");
    var b = $(".scroll-box"),
    d = b.children("ul").children("li").length,
    e = Math.ceil(d / 1);
    $(".scroll-box ul").css("width", 347 * d);
    var f = b.children("ul").children("li").width() + 100;
    $(".next").click(function() {
        $(".prev").removeClass("default");
        e <= a + 3 && $(this).addClass("default");
        e > a + 2 && (b.animate({
            left: "-" + a * f + "px"
        },
        500), a++)
    });
    $(".prev").click(function() {
        $(".next").removeClass("default");
        2 >= a && $(this).addClass("default");
        1 < a && (b.animate({
            left: "+=" + f + "px"
        },
        500), a--)
    })
});
$("td.fade,th.fade").addClass("current");
$("td.fade").prev("td").addClass("current1");
$("th.fade").prev("th").addClass("current1");
$(".service-list span.top").css("display", "block");
$(".service-list span.bottom_vip").css("display", "block");

//浮动
  $(function(){
   var h = $('.nav_hd_top').offset().top;
        $(window).scroll(function(){
        if($(window).scrollTop() >h ){$('#compareDiv').addClass('header-fixed');}
        else{$('#compareDiv').removeClass('header-fixed');}
        });
  })  
//文字缩放效果
$(document).ready(function () {
        $(".font_one").animate({ "font-size": "20px" }, 1000).animate({ "font-size": "60px" }, 1000);
        $(".p-text").animate({ "font-size": "12px" }, 1000).animate({ "font-size": "26px" }, 1000);
});

//模板TAG
$(function() {
var $tab_li = $('.tab .tab_ul li');
$tab_li.click(function(){
    $(this).addClass('hover').siblings().removeClass('hover');
    var index = $tab_li.index(this);
    $('div.tab_box > .div').eq(index).show().siblings().hide();
});
})
