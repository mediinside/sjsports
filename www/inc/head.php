<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
<?php
	$ver = "2020-02-17";

   $uri= $_SERVER['REQUEST_URI']; //uri를 구합니다.
?>
<meta charset="UTF-8">
<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densitydpi=medium-dpi"> -->
<META http-equiv="Pragma" content="no-cache">
<META http-equiv="Expires" content="-1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="format-detection" content="telephone=no">
<title><?=$page_title;?></title>
<meta name="keywords" content="군자동정형외과, 세종스포츠정형외과">
<meta name="description" content="군자동 정형외과, 스포츠손상클리닉, 목, 허리, 어깨, 무릎, 족부  정형외과, 내과/건강검진, 마취통증의학과, 영상의학과">
<meta property="og:type" content="website">
<meta property="og:title" content='군자동정형외과, 세종스포츠정형외과'>
<meta property="og:url" content='http://sjsportshospital.com'>
<meta property="og:description" content='군자동 정형외과, 스포츠손상클리닉, 목, 허리, 어깨, 무릎, 족부  정형외과, 내과/건강검진, 마취통증의학과, 영상의학과'>
<meta property="og:image" content="http://sjsportshospital.com/public/images/common/og_image.jpg">
<!-- <meta property="og:image:type" content="image/jpg"> -->
<link rel="canonical" href="">
<!-- Favicons -->
<link rel="apple-touch-icon" sizes="57x57" href="/public/images/favicons/apple-icon-57x57.png?<? print $ver ?>">
<link rel="apple-touch-icon" sizes="60x61" href="/public/images/favicons/apple-icon-60x60.png?<? print $ver ?>">
<link rel="apple-touch-icon" sizes="72x72" href="/public/images/favicons/apple-icon-72x72.png?<? print $ver ?>">
<link rel="apple-touch-icon" sizes="76x76" href="/public/images/favicons/apple-icon-76x76.png?<? print $ver ?>">
<link rel="apple-touch-icon" sizes="114x114" href="/public/images/favicons/apple-icon-114x114.png?<? print $ver ?>">
<link rel="apple-touch-icon" sizes="120x120" href="/public/images/favicons/apple-icon-120x120.png?<? print $ver ?>">
<link rel="apple-touch-icon" sizes="144x144" href="/public/images/favicons/apple-icon-144x144.png?<? print $ver ?>">
<link rel="apple-touch-icon" sizes="152x152" href="/public/images/favicons/apple-icon-152x152.png?<? print $ver ?>">
<link rel="apple-touch-icon" sizes="180x180" href="/public/images/favicons/apple-icon-180x180.png?<? print $ver ?>">
<link rel="icon" type="image/png" sizes="192x192" href="/public/images/favicons/android-icon-192x192.png?<? print $ver ?>">
<link rel="icon" type="image/png" sizes="32x32" href="/public/images/favicons/favicon-32x32.png?<? print $ver ?>">
<link rel="icon" type="image/png" sizes="96x96" href="/public/images/favicons/favicon-96x96.png?<? print $ver ?>">
<link rel="icon" type="image/png" sizes="16x16" href="/public/images/favicons/favicon-16x16.png?<? print $ver ?>">
<link rel="manifest" href="/public/images/favicons/manifest.json?<? print $ver ?>">
<meta name="msapplication-TileColor" content="#000000">
<meta name="msapplication-TileImage" content="/public/images/favicons/ms-icon-144x144.png?<? print $ver ?>">
<meta name="theme-color" content="#000000">
<!-- //Favicons -->
<!-- link css -->
<link rel="stylesheet" href="/public/plugin/bootstrap-4.3.1-dist/css/bootstrap.css">
<link rel="stylesheet" href="/public/plugin/jquery/jquery-ui-1.12.1.custom/jquery-ui.css">
<link rel="stylesheet" href="/public/plugin/swiper-5.2.0/package/css/swiper.css">
<!-- <link rel="stylesheet" href="public/css/reset.css?<? print $ver ?>"> -->
<!-- <link rel="stylesheet" href="public/css/common.css?<? print $ver ?>"> -->
<!-- <link rel="stylesheet" href="public/css/style.css?<? print $ver ?>"> -->


<link rel="stylesheet" href="/public/css/font/board-icon/style.css">
<link rel="stylesheet" href="/public/css/common.css">
<link rel="stylesheet" href="/public/css/default.css">
<link rel="stylesheet" href="/public/css/style.css?<? print $ver ?>">
<!-- script -->

<script src="/public/plugin/jquery/jquery-1.12.4.js"></script>
<script src="/public/plugin/jquery/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
<script src="/public/plugin/swiper-5.2.0/package/js/swiper.min.js"></script>
<script src="/public/plugin/popper/popper.min.js"></script>
<script src="/public/plugin/bootstrap-4.3.1-dist/js/bootstrap.js"></script>
<script src="/public/plugin/for_IE8/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="/public/plugin/for_IE8/jquery-placeholder-master/jquery.placeholder.js"></script>
<script src="/public/plugin/for_IE8/respond/1.4.2/respond.min.js"></script>
<!-- <script src="/public/js/script.js?<? print $ver ?>"></script>
-->

<script language="javascript"> //Go to Mobile Page
    // Mobile여부를 구분하기 위함
    var uAgent = navigator.userAgent.toLowerCase();

    // 아래는 모바일 장치들의 모바일 페이지 접속을위한 스크립트
    var mobilePhones = new Array('iphone', 'ipod', 'ipad', 'android', 'blackberry', 'windows ce','nokia', 'webos', 'opera mini', 'sonyericsson', 'opera mobi', 'iemobile');
    for (var i = 0; i < mobilePhones.length; i++)
        if (uAgent.indexOf(mobilePhones[i]) != -1)		
           document.location = "http://www.sjsportshospital.com/m<?php echo $uri ;?>";
</script>

<!-- 상단 선언 스크립트 : 모든페이지 공통 상단 필수 -->
<!-- PlayD TERA Log Definition Script Start -->
<script>
(function(win,name){
	win['LogAnalyticsObject']=name;
	win[name]=win[name]||function(){(win[name].q=win[name].q||[]).push(arguments)}
})(window,'_LA');
</script>

<!-- JAVASCRIPT -->

<script src="/public/js/common_front.js" charset="utf-8"></script>
<script src="/public/js/ui.js" charset="utf-8"></script>
<script src="/public/js/libs/jquery.scrollbar.min.js"></script>
<script src="/public/js/libs/swiper.min.js" charset="utf-8"></script>
<script src="/public/js/libs/TweenMax.min.js" charset="utf-8"></script>
<!-- //JAVASCRIPT -->

<script type="text/javascript" src="/public/js/set/jquery.events.js"></script>
<script type="text/javascript" src="/public/js/set/jquery.datepicker.js"></script>
<script type="text/javascript" src="/public/js/set/jquery.browser.min.js"></script>
<script type="text/javascript" src="/public/js/set/jquery.easing.min.js"></script>
<script type="text/javascript" src="/public/js/set/jquery.bxslider.js"></script>
<script type="text/javascript" src="/public/js/set/modernizr.min.js"></script>
<script type="text/javascript" src="/public/js/set/ScrollMagic.min.js"></script>
<script type="text/javascript" src="/public/js/set/debug.addIndicators.min.js"></script>
<script type="text/javascript" src="/public/js/set/calc.js"></script>
<script type="text/javascript" src="/public/js/set/ui.js?v=0.01"></script>

<span itemscope="" itemtype="http://schema.org/Organization">
<link itemprop="url" href="http://www.sjsportshospital.com">
<a itemprop="sameAs" href="https://blog.naver.com/jinni33b"></a>
<a itemprop="sameAs" href="https://www.youtube.com/channel/UCfjRfMSsoEyEHgwvDCNYysw"></a>
</span>
<meta name="naver-site-verification" content="28913faa158a62bce71178693cf2f9853354c0f8" />
<span itemscope="" itemtype="http://schema.org/Organization">
	<link itemprop="url" href="http://www.sjsportshospital.com">
	<a itemprop="sameAs" href="https://blog.naver.com/jinni33b"></a>
	<a itemprop="sameAs" href="https://www.youtube.com/channel/UCfjRfMSsoEyEHgwvDCNYysw"></a>
</span>
<!--[if lt IE 9]>
<script type="text/javascript" src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
<script type="text/javascript" src="/js/respond.min.js"></script>
<script type="text/javascript" src="/js/selectivizr-min.js"></script>
<![endif]-->
	<style>
		.view>li:nth-child(1) .bg span {
			cursor: pointer;
			background-image: url('/public/images/main/main_1.jpg');
		}
		.view>li:nth-child(2) .bg span {
			cursor: pointer;
			background-image: url('/public/images/main/main_2.jpg');
		}
		.view>li:nth-child(3) .bg span {
			cursor: pointer;
			background-image: url('/public/images/main/main_3.jpg');
		}
		
		/* .view>li:nth-child(1) .bg span {
			background-image: url('/public/images/main/sjs_vi_img001.jpg');
		}
		.view>li:nth-child(2) .bg span {
			background-image: url('/public/images/main/sjs_vi_img002.jpg');
		}
		.view>li:nth-child(3) .bg span {
			background-image: url('/public/images/main/sjs_vi_img003.jpg');
		}
		.view>li:nth-child(4) .bg span {
			background-image: url('/public/images/main/sjs_vi_img004.jpg');
		} */
	</style>

</head>
<body>

