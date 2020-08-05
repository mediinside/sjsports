$(function(){
	$(document).ready(function(){
		$('#mobile-gnb .nav > li > button').on('click', function(){
			if ($(this).parent().hasClass('active')) {
				$('#mobile-gnb .nav > li').removeClass('active');				
			} else {
				$('#mobile-gnb .nav > li').removeClass('active');
				$(this).parent().addClass('active');
			}
		});
		//go-top
		$('.btn-top button, .go_top').on('click',function(e){
			e.preventDefault();
			$('html, body').animate({scrollTop:0}, '700');	
		});
		//PC 전체메뉴
		$('.pc-all-open').on('click', function(){
			$('.pc-menu-all').show();
			$('body').css('overflow','hidden');
		});
		$('.menu-all-close').on('click', function(){
			$('.pc-menu-all').hide();
			$('body').css('overflow','');
		});
		//모바일 메뉴
		$('.mo-gnb-open').on('click', function(){
			//$('header').css('transform','none');
			$('.m-dim').addClass('active');
			$('#mobile-gnb').addClass('active');
			$('body').css('overflow','hidden');
		});
		$('.mo-gnb-close').on('click', function(){
			$('.m-dim').removeClass('active');
			$('#mobile-gnb').removeClass('active');
			$('body').css('overflow','');
		});

		//재무정보
		$('.data-wrap').eq(0).show();
		$('.select-year .ui-select ul li').on('click',function(){
			var index = $(this).index();
			$('.data-wrap').hide()
			$('.data-wrap').eq(index).show();
		});

		//하단 추가 BG 랜덤 노출
		$('.big-img').hide();
		var rand = Math.floor(Math.random()*3);		
	    var visibleDiv = $('.big-img')[rand];
	    $(visibleDiv).show();

		//layer pinch zoom
		$('.pinchzoom1').on('click', function() {
				var el = document.querySelector('div.pinch-zoom');
				new PinchZoom.default(el, {});
		});
		$('.pinchzoom2').on('click', function() {
				var el = document.querySelector('div.pinch-zoom1');
				new PinchZoom.default(el, {});
		});
		$('.pinchzoom3').on('click', function() {
				var el = document.querySelector('div.pinch-zoom2');
				new PinchZoom.default(el, {});
		});

		$('#breadcrumb a').on('click', function() {
			if (!$(this).hasClass('home')) {
				return false;
			}
		});


		// var tmpTheme = getCookie("THEMECOLOR");
		// if(tmpTheme == "") tmpTheme = "theme_blue";
		// $('body').addClass( tmpTheme );
		// $('.select_theme button').on('click', function() {
		// 	$('body').removeClass();
		// 	var changeTheme = $(this).attr('class').substr(4);
		// 	$('body').addClass(changeTheme);
		// 	setCookie("THEMECOLOR", changeTheme, 365);
		// });
		// $('.tab_wrap li').on('click', function(){
		// 	$('.tab_wrap li').removeClass('active');
		// 	var liIdx = $(this).index();
		// 	$('.tab_wrap li').eq(liIdx).addClass('active');
		// });
		// $( '.datepicker' ).datepicker({
		// 	dateFormat: 'yy-mm-dd',
		// 	prevText: '이전 달',
		// 	nextText: '다음 달',
		// 	monthNames: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'],
		// 	monthNamesShort: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'],
		// 	dayNames: ['일', '월', '화', '수', '목', '금', '토'],
		// 	dayNamesShort: ['일', '월', '화', '수', '목', '금', '토'],
		// 	dayNamesMin: ['일', '월', '화', '수', '목', '금', '토'],
		// 	showAnim: "fadeIn",
		// 	showOn: "button",
		// 	buttonImage: "/images/calendar.png",
		// 	buttonImageOnly: false,
		// 	buttonText: "a",
		// 	changeMonth : true,
		// 	changeYear : true,
		// 	showMonthAfterYear : true
		// });
	});
});
