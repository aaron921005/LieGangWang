//*sell-show* xiaohei-20170817

$(document).ready(function() {
    $(window).scroll(function() {
        bw = $("body").width();
        leftw = (bw - 1200) / 2 + 1210;
        $("#floatui").css({
            left: leftw
        });
        var a = parseInt($("#content_tag").offset().top);
        $(window).scrollTop() > a ? ($(".product_nav").addClass("float_nav"), $(".column_txt").addClass("column_txt_top"),$(".column_right").addClass("pt_60"), $(".floating_box").addClass("show")) : ($(".product_nav").removeClass("float_nav"),$(".column_txt").removeClass("column_txt_top"), $(".column_right").removeClass("pt_60"), $(".floating_box").removeClass("show"));
        var c = $(document).scrollTop(),
        a = $("#menu"),
        b = "";
        $("#content_tag").find(".name_a").each(function() {
            var a = $(this),
            d = a.offset().top;
            if (c > d - 100) b = "#" + a.attr("id");
            else return ! 1
        });
        var d = a.find(".hover");
        b && d.attr("href") != b && (d.removeClass("hover"), a.find("[href=" + b + "]").addClass("hover"))
    });

});

$(".e_code").hover(function() {
    $(this).find(".txt").show(200)
},
function() {
    $(this).find(".txt").hide(200)
});

$(function(){
  var children = $('.nav_ul .second');  
        children.each(function(i){  
            //注意:this是js对象,$(this)是jquery对象.  
            $(this).mouseover(function(e) {  
                $(this).addClass('hover');  
            }).mouseout(function(e) {  
                $(this).removeClass('hover');  
            });  
        });   
}); 


$(".second_div").hover(function() {
    $(this).addClass("hover")
},
function() {
    $(this).removeClass("hover")
});

if (void 0 != $("#contact_number").val()) {
    var length = $("#contact_number").val().substr(0, 1);
    lengths = $("#contact_number").val().length;
    if (1 == length && 11 == lengths) {
        var contact_number = $("#contact_number").val().replace(/\B(?=(?:\d{4})+$)/g, "-");
        $(".contact_number span").text(contact_number)
    }
}
$(".floating_box .close").click(function() {
    $(".floating_box").hide()
});
