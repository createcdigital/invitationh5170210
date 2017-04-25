/**
 * Created by createc Chris on 14/2/17.
 */

$(document).ready(function(){

    //P2 线条描绘
    // var svg = new Walkway({
    //     selector: '#line-house',
    //     duration: 4000,
    //     easing: 'linear'
    // });
    //
    // //背景灯光闪烁
    // var lightBright = function light(){
    //     $(".p2-light1").fadeIn(500).fadeOut(500);
    //     $(".p2-light2").delay(800).fadeIn(500).fadeOut(500);
    //     $(".p2-light3").delay(1600).fadeIn(500).fadeOut(500);
    // }
    //
    // var mySwiper = new Swiper ('.swiper-container', {
    //     direction: 'vertical',
    //     loop: false,
    //     resistance : true,
    //     resistanceRatio : 0,
    //     lazyLoading : true,
    //     lazyLoadingInPrevNext : true,
    //     onInit: function(swiper){
    //         swiperAnimateCache(swiper); //隐藏动画元素
    //         swiperAnimate(swiper); //初始化完成开始动画
    //     },
    //     // onSlideChangeStart: function(swiper){
    //     //     if(swiper.activeIndex==1){
    //     //         $("#line-house").fadeIn();
    //     //         svg.redraw();
    //     //     }
    //     // },
    //     onSlideChangeEnd: function(swiper){
    //         swiperAnimate(swiper);//每个slide切换结束时开始动画
    //         if(swiper.activeIndex==1){
    //             svg.draw(function(){
    //                 $("#line-house").fadeOut();
    //                 $(".p2-house1,.p2-shadow").fadeIn(2000);
    //                 if($(".p2-btn2").css("display")=="block"){
    //                   $(".p2-btn").css("display","none");
    //                 }else {
    //                     $(".p2-btn").fadeIn(1500);
    //                 }
    //                 setInterval(lightBright,2600);
    //             });
    //         }
    //     }
    // });
    // mySwiper.lockSwipes();



    //p1
    $(".p1-btn").on("touchend",function(){
        mySwiper.unlockSwipes();
        mySwiper.slideNext();
    });


   //p2
    $(".p2-btn").on("touchend",function(){
        $(this).fadeOut();
        $(".p2-house2,.p2-btn2,.p2-title").fadeIn(1500);
    });
    $(".p2-btn2").on("touchend",function(){
        mySwiper.slideNext();
    })


    //背景音乐自动播放方法
    function audioAutoPlay(id){
        var audio = document.getElementById(id),
            play = function(){
                audio.play();
                 document.removeEventListener("touchstart",play, false);
            };
        audio.play();
        document.addEventListener("WeixinJSBridgeReady", function () {
            play();
        }, false);
       document.addEventListener("touchstart",play, false);
    }


});