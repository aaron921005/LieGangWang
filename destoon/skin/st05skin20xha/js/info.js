     $(function(){
        //1.楼梯什么时候显示，450px scroll--->scrollTop
        $(window).on('scroll',function(){
            var $scroll=$(this).scrollTop();
            if($scroll>=450){
                $('#loutinav').eq($(this).index()).addClass('on');
            }
          if($scroll>6800 || $scroll<450){
                // $('#box').css('display','none');  // @ 这一句和下一句效果一样。
                $('#loutinav').removeClass('on');
            }

        //2.拖动滚轮，对应的楼梯样式进行匹配
            $('.louxhinfo').each(function(){
                var $louxhinfotop=$('.louxhinfo').eq($(this).index()).offset().top+950;
                console.log($louxhinfotop);
                if($louxhinfotop>$scroll){//楼层的top大于滚动条的距离
                    $('#loutinav li').removeClass('active');
                    $('#loutinav li').eq($(this).index()).addClass('active');
                    return false;//中断循环
                }
            });
        });
        
        //3.获取每个楼梯的offset().top,点击楼梯让对应的内容模块移动到对应的位置  offset().left
        var $louxhinfoli=$('#loutinav li').not('.last');
        $louxhinfoli.on('click',function(){
            $(this).addClass('active').siblings('li').removeClass('active');
            var $louxhinfotop=$('.louxhinfo').eq($(this).index()).offset().top;
            //获取每个楼梯的offsetTop值
            $('html,body').animate({//$('html,body')兼容问题body属于chrome
                scrollTop:$louxhinfotop
            })
        });
 
        //4.回到顶部
        $('.last').on('click',function(){
            $('html,body').animate({//$('html,body')兼容问题body属于chrome
                scrollTop:0
            })
        });
    })

//添加收藏
function SendFav2017(url,title) {
    //alert(MEPath);
    var htm = '<form method="post" action="'+MEPath+'favorite.php" id="dfavorite" target="_blank">';
    htm += '<input type="hidden" name="action" value="add"/>';
    htm += '<input type="hidden" name="title" value="'+title+'"/>';
    htm += '<input type="hidden" name="url" value="'+url+'"/>';
    htm += '</form>';
    $('#destoon_space').html(htm);
    Dd('dfavorite').submit();
}

//百度分享多页面连接
$(function(){

    //全局变量，动态的文章ID
    var ShareId = "";ShareText = "";
    //绑定所有分享按钮所在A标签的鼠标移入事件，从而获取动态ID
    $(function () {
        $(".bdsharebuttonbox a").mouseover(function () {
            ShareId = $(this).attr("href");
            ShareText = $(this).attr("title");
        });
    });

    /*
    * 动态设置百度分享URL的函数,具体参数
    * cmd为分享目标id,此id指的是插件中分析按钮的ID
    *，我们自己的文章ID要通过全局变量获取
    * config为当前设置，返回值为更新后的设置。
    */
    function SetShareUrl(cmd, config) {            
        if (ShareId) {
            config.bdUrl = ShareId;   
            config.bdText = ShareText;              
        }
        return config;
    }

    //插件的配置部分，注意要记得设置onBeforeClick事件，主要用于获取动态的文章ID
    window._bd_share_config = {
        "common": {
            onBeforeClick: SetShareUrl, "bdSnsKey": {}, "bdText": ""
            , "bdMini": "2", "bdMiniList": false, "bdPic": "", "bdStyle": "0", "bdSize": "16"
        }, "share": {}
    };
    //插件的JS加载部分
    with (document) 0[(getElementsByTagName('head')[0] || body)
        .appendChild(createElement('script'))
        .src = '//bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='
        + ~(-new Date() / 36e5)];
    window._bd_share_config.share.bdPopupOffsetLeft=-210;

});
