//主首页左侧浮动导航
$(function(){
        //1.楼梯什么时候显示，1170px scroll--->scrollTop
        $(window).on('scroll',function(){
            var $scroll=$(this).scrollTop();
            if($scroll>=1170){
                $('#loutinav').eq($(this).index()).addClass('on');
            }
          if($scroll>4724 || $scroll<1170){
                // $('#box').css('display','none');  // @ 这一句和下一句效果一样。
                $('#loutinav').removeClass('on');
            }

        //2.拖动滚轮，对应的楼梯样式进行匹配
            $('.louxh').each(function(){
                var $louxhtop=$('.louxh').eq($(this).index()).offset().top+600;
                //console.log($louxhtop);
                if($louxhtop>$scroll){//楼层的top大于滚动条的距离
                    $('#loutinav li').removeClass('active');
                    $('#loutinav li').eq($(this).index()).addClass('active');
                    return false;//中断循环
                }
            });
        });
        
        //3.获取每个楼梯的offset().top,点击楼梯让对应的内容模块移动到对应的位置  offset().left
        var $louxhli=$('#loutinav li').not('.last');
        $louxhli.on('click',function(){
            $(this).addClass('active').siblings('li').removeClass('active');
            var $louxhtop=$('.louxh').eq($(this).index()).offset().top;
            //获取每个楼梯的offsetTop值
            $('html,body').animate({//$('html,body')兼容问题body属于chrome
                scrollTop:$louxhtop
            })
        });
 
        //4.回到顶部
        $('.last').on('click',function(){
            $('html,body').animate({//$('html,body')兼容问题body属于chrome
                scrollTop:0
            })
        });
});

