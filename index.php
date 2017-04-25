<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="format-detection" content="telephone=no"/>
    <meta name="viewport" content="width=750, user-scalable=no"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black"/>
    <title>斯凯奇全球旗舰店开业</title>
    <link rel="stylesheet" href="css/swiper-3.4.1.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide-one">
                <img class="p1-bg" src="img/p1bg1.jpg" alt="">
                <img class="ani p1-logo" src="img/p1logo.png" alt="" swiper-animate-effect="bounceInLeft" swiper-animate-duration="1.2s" swiper-animate-delay="0.3s">
                <img class="ani p1-text" src="img/p1text.png" alt="" swiper-animate-effect="bounceIn" swiper-animate-duration="1.2s" swiper-animate-delay="0.8s">
                <div class="p1-btn">
                    <img class="p1-go" src="img/p1btn.png" alt="">
                    <img class="p1-line1" src="img/p1btnline1.png" alt="">
                    <img class="p1-line2" src="img/p1btnline2.png" alt="">
                </div>
                <img class="ani p1-local" src="img/p1local.png" alt="" swiper-animate-effect="bounceInRight" swiper-animate-duration="1.2s" swiper-animate-delay="0.3s">
            </div>


            <div class="swiper-slide slide-two">
                <img class="p2-bg" src="img/p1bg.jpg" alt="">
                <svg width="100%" height="100%" id="line-house">
                    <g id="box-g">
                        <path stroke-width="2" stroke="#31ddc8" fill="none" style="opacity:0.5" id="XMLID_194_" class="st0" d="M228.3-373V709.2l106.1,20.5v-54.3l-182,14.7v-43L307,589.4v-179L153.4,577.6v-46l181-220.1
	V210.8L168.1,465.7l-26.1-5.5l-12.1,23.5l6.8,12.7v211.3l211.3,38.2v-540l10.8,5.9l12.7-17.6l248.5,156.5v317h-9.9v61.6l-248.4,16.6
	v-70.4c2,0,234.8-6.8,234.8-6.8v-92.9v-88.5l-227-76.8v96.8l213.1,48.3v17.4l-213.1-44.2v125.2l113.4-3.4V1513"/>
                    </g>
                </svg>

                <img class="left-btn" src="img/left.jpg" alt="">
                <div class="p2-btn">
                    <img class="p2-go" src="img/p2btn.jpg" alt="">
                    <img class="p2-line1" src="img/p2btnline1.jpg" alt="">
                    <img class="p2-line2" src="img/p2btnline2.jpg" alt="">
                </div>
                <img class="right-btn" src="img/right.jpg" alt="">

                <img class="p2-house1" src="img/p2house1.png" alt="">
                <img class="p2-light1" src="img/p2light1.png" alt="">
                <img class="p2-light2" src="img/p2light2.png" alt="">
                <img class="p2-light3" src="img/p2light3.png" alt="">

                <img class="p2-house2" src="img/p2house2.png" alt="">
                <img class="p2-shadow" src="img/p2shadow.png" alt="">
                <img class="p2-title" src="img/p2title.png" alt="">
                <img class="p2-btn2" src="img/p2btn2.png" alt="">

                <img class="p2-sky" src="img/p2sky.png" alt="">

            </div>
            <div class="swiper-slide slide-three">
                <img class="p3-bg" src="img/p3.jpg" alt="">
                <img class="p3-local" src="img/p3local.png" alt="">
                <img class="p3-map" src="img/p3map.png" alt="">
                <img class="p3-code" src="img/p3code.png" alt="">
            </div>
        </div>
    </div>

    <!-- audio -->
    <div class="audio-icon">
        <audio id="audio-player" src="music/bgm.mp3" loop="loop" preload></audio>
    </div>

</body>
<script src="js/jquery-1.10.1.min.js"></script>
<script src="js/swiper-3.4.1.jquery.min.js"></script>
<script src="js/swiper.animate1.0.2.min.js"></script>
<script src="js/walkway.js"></script>
<script>
    //P2 线条描绘
    var svg = new Walkway({
        selector: '#line-house',
        duration: 4000,
        easing: 'linear'
    });

    //背景灯光闪烁
    var lightBright = function light(){
        $(".p2-light1").fadeIn(500).fadeOut(500);
        $(".p2-light2").delay(800).fadeIn(500).fadeOut(500);
        $(".p2-light3").delay(1600).fadeIn(500).fadeOut(500);
    };

    var mySwiper = new Swiper ('.swiper-container', {
        direction: 'vertical',
        loop: false,
        resistance : true,
        resistanceRatio : 0,
        lazyLoading : true,
        lazyLoadingInPrevNext : true,
        onInit: function(swiper){
            swiperAnimateCache(swiper); //隐藏动画元素
            swiperAnimate(swiper); //初始化完成开始动画
        },
        // onSlideChangeStart: function(swiper){
        //     if(swiper.activeIndex==1){
        //         $("#line-house").fadeIn();
        //         svg.redraw();
        //     }
        // },
        onSlideChangeEnd: function(swiper){
            swiperAnimate(swiper);//每个slide切换结束时开始动画
            if(swiper.activeIndex==1){
                svg.draw(function(){
                    $("#line-house").fadeOut();
                    $(".p2-house1,.p2-shadow").fadeIn(2000);
                    if($(".p2-btn2").css("display")=="block"){
                        $(".p2-btn").css("display","none");
                    }else {
                        $(".p2-btn,.right-btn,.left-btn").fadeIn(1500);
                    }
                    setInterval(lightBright,2600);
                });
            }
        }
    });
    mySwiper.lockSwipes();

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
    audioAutoPlay("audio-player");

    //audio
    $('.audio-icon').addClass('audio-icon-animation');
    var audio = document.getElementById('audio-player');
    $('.audio-icon').on('touchend',function(){
        $('.audio-icon').toggleClass('audio-icon-animation');
        if(audio!==null){
            if(!audio.paused)
            {
                audio.pause();
            }else {
                audio.play();
            }
        }
    });

    //p1
    $(".p1-btn").on("touchend",function(){
        mySwiper.unlockSwipes();
        mySwiper.slideNext();
    });


    //p2
    $(".p2-btn").on("touchend",function(){
        $(this).fadeOut();
        $(".left-btn,.right-btn").fadeOut(200);
        $(".p2-house2,.p2-btn2,.p2-title").fadeIn(1500);
        $(".p2-sky").delay(1500).fadeIn(1500);
    });
    $(".p2-btn2").on("touchend",function(){
        mySwiper.slideNext();
    })

</script>
<script>
    var _hmt = _hmt || [];
    (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?d4552539a222e0f43e6caffef8d7cacc";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>
<!--WeChat====================================================== -->
<?php include_once 'weChat/weChatShareJS.php'; ?>
</html>