<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1_DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="icon" href="/favicon.ico" mce_href="/favicon.ico" type="image/x-icon">
    <title>欧范儿——您找工作我帮忙</title>
    <meta name=”keywords” content=””>
    <meta name=”description” content=””>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet"  href="{{WWW_PUBLIC_PATH}}/css/index.css" type="text/css" />
    <link rel="stylesheet"  href="{{WWW_PUBLIC_PATH}}/css/animate.css" type="text/css" />
    <link rel="stylesheet" href="{{WWW_PUBLIC_PATH}}/css/jquery.minicolors.css">
    <script type="text/javascript" src="{{WWW_PUBLIC_PATH}}/js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="{{WWW_PUBLIC_PATH}}/js/jquery.minicolors.js"></script>
    <script type="text/javascript">
        var browser={
            versions:function(){
                var u = navigator.userAgent, app = navigator.appVersion;
                return {
                    trident: u.indexOf('Trident') > -1, //IE内核
                    presto: u.indexOf('Presto') > -1, //opera内核
                    webKit: u.indexOf('AppleWebKit') > -1, //苹果、谷歌内核
                    gecko: u.indexOf('Gecko') > -1 && u.indexOf('KHTML') == -1,//火狐内核
                    mobile: !!u.match(/AppleWebKit.*Mobile.*/), //是否为移动终端
                    ios: !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/), //ios终端
                    android: u.indexOf('Android') > -1 || u.indexOf('Linux') > -1, //android终端或者uc浏览器
                    iPhone: u.indexOf('iPhone') > -1 , //是否为iPhone或者QQHD浏览器
                    iPad: u.indexOf('iPad') > -1, //是否iPad
                    webApp: u.indexOf('Safari') == -1 //是否web应该程序，没有头部与底部
                };
            }(),
            language:(navigator.browserLanguage || navigator.language).toLowerCase()
        }

        if(browser.versions.mobile || browser.versions.iPhone || browser.versions.android){
            window.location.href="http://www.chuangkit.com/indexPhone";
        }
        else{
            document.write("<script src=\"{{WWW_PUBLIC_PATH}}/js/index.js\">"+"</scr"+"ipt>");
        }
    </script>

</head>

<body>
<div id="jiazai">
    <div class="jiazai_logo">
        <div class="logoBg"></div>
        <img src="{{WWW_PUBLIC_PATH}}/images/1/jiazai.png" width="100%" style="z-index: 2;position: relative;" />
    </div>
</div>
<div id="index_pageChose">
    <div id="1pageChose" class="page1 pageChose adjustAuto active"></div>
    <div id="2pageChose" class="page2 pageChose adjustAuto"></div>
    <div id="3pageChose" class="page3 pageChose adjustAuto"></div>
    <div id="4pageChose" class="page4 pageChose adjustAuto"></div>
    <div id="5pageChose" class="page5 pageChose adjustAuto"></div>
    <div id="6pageChose" class="page6 pageChose adjustAuto"></div>
</div>
<div id="indexDiv">
    <div id="page1" class="indexPage row">
        <img id="img" src="{{WWW_PUBLIC_PATH}}/images/1/1.jpg" />
        <div class="page1top adjustAuto"></div>
        <div class="page1img1 page1img adjustAuto"><img src="{{WWW_PUBLIC_PATH}}/images/1/1.png" /></div>
        <div class="page1img2 page1img adjustAuto"><img src="{{WWW_PUBLIC_PATH}}/images/1/2.png" /></div>
        <div class="page1img3 page1img adjustAuto"><img src="{{WWW_PUBLIC_PATH}}/images/1/3.png" /></div>
        <div class="page1img4 page1img adjustAuto"><img src="{{WWW_PUBLIC_PATH}}/images/1/4.png" /></div>
        <div class="page1Right adjustAuto">
            <div class="logo adjustAuto"><img src="{{WWW_PUBLIC_PATH}}/images/1/logo.png" /></div>
            <div class="page1text1 adjustAutoText">找工作/找员工</div>
            <div class="page1text2 adjustAutoText">从未想象的简单与有趣，一次信息更新，好工作、好员工送上门，让您随意选择。总有一款是您想要的。</div>
            <a href="{{URL::action('WIndexController@getLogin')}}" target="_blank">
                <div class="sign adjustAutoText">注&nbsp;&nbsp;&nbsp;册</div>
            </a>
            <a href="{{URL::action('WIndexController@getLogin')}}" target="_blank">
                <div class="login adjustAutoText">登&nbsp;&nbsp;&nbsp;录</div>
            </a>
        </div>
        <div class="page1bottom adjustAuto"></div>
    </div>
    <div id="page2" class="indexPage row">
        <div class="page2bg adjustAuto">
            <div class="page2text1 adjustAutoText">创造丰富的作品</div>
            <div class="page2text2 adjustAutoText">不让复杂的设计软件拘束你的创意，用最简单有趣的方式制作海报、ppt、信息图、贺卡、名片等所有你想要的一切。</div>
            <div class="page2img1 pageImg adjustAuto"><img src="{{WWW_PUBLIC_PATH}}/images/2/22.png" /></div>
            <div class="page2img8 pageImg adjustAuto"><img src="{{WWW_PUBLIC_PATH}}/images/2/1.png" /></div>
            <!---
            <div class="page2img1 pageImg adjustAuto"><img src="http://eyuanku.qiniudn.com/2_2.png" /></div>
            <div class="page2img2 pageImg adjustAuto"><img src="http://eyuanku.qiniudn.com/2_3.png" /></div>
            <div class="page2img3 pageImg adjustAuto"><img src="http://eyuanku.qiniudn.com/2_4.png" /></div>
            <div class="page2img4 pageImg adjustAuto"><img src="http://eyuanku.qiniudn.com/2_5.png" /></div>
            <div class="page2img5 pageImg adjustAuto"><img src="http://eyuanku.qiniudn.com/2_6.png" /></div>
            <div class="page2img6 pageImg adjustAuto"><img src="http://eyuanku.qiniudn.com/2_7.png" /></div>
            <div class="page2img7 pageImg adjustAuto"><img src="http://eyuanku.qiniudn.com/2_8.png" /></div>

            <div class="page2imgDiv1 pageImgDiv adjustAuto"></div>
            <div class="page2imgDiv2 pageImgDiv adjustAuto"></div>
            <div class="page2imgDiv3 pageImgDiv adjustAuto"></div>
            <div class="page2imgDiv4 pageImgDiv adjustAuto"></div>
            <div class="page2imgDiv5 pageImgDiv adjustAuto"></div>
            <div class="page2imgDiv6 pageImgDiv adjustAuto"></div>
            <div class="page2imgDiv7 pageImgDiv adjustAuto"></div>---->
        </div>
    </div>

    <!--第3页-->
    <div id="page3" class="indexPage row">
        <div class="page3bg adjustAuto">
            <div class="page3text1 adjustAutoText">简单的拖拉拽</div>
            <div class="page3text2 adjustAutoText">搜索你需要的素材，通过拖拉拽即可完成素材的挑选与使用，这一切不需要下载任何插件或文件，让你更专注于自己的创意。</div>
            <div class="page3img1 pageImg adjustAuto"><img src="{{WWW_PUBLIC_PATH}}/images/3/1.png" /></div>
            <div class="page3img2 pageImg adjustAuto"><img src="{{WWW_PUBLIC_PATH}}/images/3/2.png" /></div>
            <div class="page3img3 pageImg adjustAuto"><img src="{{WWW_PUBLIC_PATH}}/images/3/3.png" /></div>
            <div class="page3img4 pageImg adjustAuto"><img src="{{WWW_PUBLIC_PATH}}/images/3/4.png" /></div>
            <div class="page3img5 pageImg adjustAuto"><img src="{{WWW_PUBLIC_PATH}}/images/3/5.png" /></div>
            <div class="page3img6 pageImg adjustAuto"><img src="{{WWW_PUBLIC_PATH}}/images/3/6.png" /></div>
        </div>
    </div>

    <!--第4页-->
    <div id="page4" class="indexPage row">
        <div class="page4bg adjustAuto">
            <div class="page4text1 adjustAutoText">免费与尽情</div>
            <div class="page4text2 adjustAutoText">创客贴为你提供大量免费的无背景图片、高质量的摄影图片、网络字体、背景、模板等素材，方便你自由创意。上传自己的素材到云端，无论何时何地都能使用，再也不用担心找不到素材。</div>
            <div class="page4img1 pageImg adjustAuto"><img src="{{WWW_PUBLIC_PATH}}/images/4/1.png" /></div>
            <div class="page4img2 pageImg adjustAuto"><img src="{{WWW_PUBLIC_PATH}}/images/4/2.png" /></div>
            <div class="page4img5 pageImg adjustAuto"><img src="{{WWW_PUBLIC_PATH}}/images/4/5.png" /></div>
            <div class="page4img6 pageImg adjustAuto"><img src="{{WWW_PUBLIC_PATH}}/images/4/6.png" /></div>
            <div class="page4img7 pageImg adjustAuto"><img src="{{WWW_PUBLIC_PATH}}/images/4/7.png" /></div>
            <div class="page4img8 pageImg adjustAuto"><img src="{{WWW_PUBLIC_PATH}}/images/4/8.png" /></div>
            <div class="page4img9 pageImg adjustAuto"><img src="{{WWW_PUBLIC_PATH}}/images/4/9.png" /></div>
            <div class="page4img10 pageImg adjustAuto"><img src="{{WWW_PUBLIC_PATH}}/images/4/10.png" /></div>
        </div>
    </div>


    <div id="page5" class="indexPage row">
        <div class="page6bottom adjustAuto"></div>
        <div class="page6text1 adjustAutoText">PRINT & SHARE<br />输出分享
        </div>
        <div class="page6text2 adjustAutoText">你可以分享设计到社交网络，富媒体的设计分享，让创意的展现不再是二维的世界；也可以输出成格式文件，平台为你提供高清的png、pdf格式输出，无论是传输还是打印印刷都将轻松实现。
        </div>
        <div class="page6img1 pageImg adjustAuto"><img src="{{WWW_PUBLIC_PATH}}/images/6/1.png" /></div>
        <div class="page6img3 pageImg adjustAuto"><img src="{{WWW_PUBLIC_PATH}}/images/6/3.png" /></div>
        <div class="page6img2 pageImg adjustAuto"><img src="{{WWW_PUBLIC_PATH}}/images/6/2.png" /></div>
        <div class="page6img4 pageImg adjustAuto"><img src="{{WWW_PUBLIC_PATH}}/images/6/4.png" /></div>
        <div class="page6img5 pageImg adjustAuto"><img src="{{WWW_PUBLIC_PATH}}/images/6/5.png" /></div>
    </div>
    <div id="page6" class="indexPage row">
        <div class="page9top adjustAuto"></div>
        <div class="page9bottom adjustAuto"></div>
        <div class="page9img5 page9img page9img11 adjustAuto"><img src="{{WWW_PUBLIC_PATH}}/images/9/5.png" /></div>
        <div class="page9img6 page9img adjustAuto"><img src="{{WWW_PUBLIC_PATH}}/images/9/6.png" /></div>
        <div class="page9img1 page9img adjustAuto"><img src="{{WWW_PUBLIC_PATH}}/images/9/1.png" /></div>
        <div class="page9img2 page9img adjustAuto"><img src="{{WWW_PUBLIC_PATH}}/images/9/2.png" /></div>
        <div class="page9img3 page9img adjustAuto"><img src="{{WWW_PUBLIC_PATH}}/images/9/3.png" /></div>
        <div class="page9img4 page9img adjustAuto"><img src="{{WWW_PUBLIC_PATH}}/images/9/4.png" /></div>
        <a href="{{URL::action('WIndexController@getLogin')}}" target="_blank"><div class="page9img5 page9img adjustAuto"><img src="{{WWW_PUBLIC_PATH}}/images/9/5.png" /></div></a>
        <a href="{{URL::action('WIndexController@getLogin')}}" target="_blank"><div class="page9img6 page9img adjustAuto"><img src="{{WWW_PUBLIC_PATH}}/images/9/6.png" /></div></a>
        <a href="{{URL::action('WIndexController@getLogin')}}" target="_blank"><div class="page9img7 page9img adjustAuto"><img src="{{WWW_PUBLIC_PATH}}/images/9/7.png" /></div></a>
        <a href="{{URL::action('WIndexController@getLogin')}}" target="_blank"><div class="page9img7 page9img adjustAuto"><img src="{{WWW_PUBLIC_PATH}}/images/9/7.png" /></div></a>

    </div>
</div>
</body>
</html>
