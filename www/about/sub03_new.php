<?php
	include_once $_SERVER['DOCUMENT_ROOT'] . '/_init.php';
	include_once $GP -> INC_WWW . '/count_inc.php';
	$top_dep_title = "SJS소개";
	$page_title = "둘러보기";
	include_once $GP -> INC_WWW . '/head.php';
	$locArr = array(1,3);
?>
<script>
	$(document).ready(function(){
		$('.sub_head').css(
			{
				"background-image":"url('/public/images/common/img_01.jpg')",
			}
		);
	});
</script>
<?php
	include_once $GP -> INC_WWW . '/header_ver2.php';
	include_once $GP -> INC_WWW . '/header_after.php';
?>
	<!-- <div id="pagetop">
		<div class="background" style="background-image:url(/public/images/bg-pagetop-0<?php echo $locArr[0];?>.jpg);"></div>
		<div class="contain">
			<h2 class="title">둘러보기</h2>
		</div>
	</div> -->
	<div id="container" class="bg-scratch">
		<?php include_once $GP -> INC_WWW . '/location_new.php';?>
		<div id="article" class="intro side-strip">
			<div class="box_style_1 text-center py60">
				<h3 class="mt30"><?=$page_title;?></h3>
			</div>
			<div class="intro-explore">
				<div id="explore-slider">
					<ul class="swiper" data-auto="true" data-controls="true" data-control-prefix="explore" data-pager="true" data-use-c-s-s="false"></ul>
				</div>
				<ul id="explore-list"></ul>
				<div class="display">
					<h3 class="title">층별 안내</h3>
					<ul class="floor-info"></ul>
				</div>
			</div>
		</div>
	</div>
<?php include_once $GP -> INC_WWW . '/footer_ver2.php';?>
<script>
	var explore = [];
	explore.el = {
		'list' : $('#explore-list'),
		'swiper' : $('#explore-slider'),
		'info' : $('.floor-info')
	}
	explore.active = 0;
	explore.image = [
		{
			'title' : '1F',
			'description' : '접수 / 수납 (원무과 / 상담실), 진료실, 건강검진, 기초검사, 진단검사의학과(채혈검사), 영상의학(MRI / CT / X-RAY / 내시경검사 / 초음파진단 / 골밀도 검사), 도수치료실, 비수술치료실(C-ARM), 스포츠 퍼포먼스 센터(SPC)',
			'list' : [
				{'img' : '/public/images/explore/1f_dummy_01.jpg', 'text' :'입구'},
				{'img' : '/public/images/explore/1f_dummy_02.jpg', 'text' :'원무데스크'},
				{'img' : '/public/images/explore/1f_dummy_03.jpg', 'text' :'로비'},
				{'img' : '/public/images/explore/1f_dummy_04.jpg', 'text' :'로비 및 복도 01'},
				{'img' : '/public/images/explore/1f_dummy_05.jpg', 'text' :'로비 및 복도 02'},
				{'img' : '/public/images/explore/1f_dummy_06.jpg', 'text' :'대기실 01'},
				{'img' : '/public/images/explore/1f_dummy_07.jpg', 'text' :'대기실 02'},
				{'img' : '/public/images/explore/1f_dummy_08.jpg', 'text' :'진료실'},
				{'img' : '/public/images/explore/1f_dummy_09.jpg', 'text' :'진단검사실'},
				{'img' : '/public/images/explore/1f_dummy_10.jpg', 'text' :'영상의학, 물리치료실'},
				{'img' : '/public/images/explore/1f_dummy_11.jpg', 'text' :'도수물리치료실 01'},
				{'img' : '/public/images/explore/1f_dummy_12.jpg', 'text' :'도수물리치료실 02'},
				{'img' : '/public/images/explore/1f_dummy_13.jpg', 'text' :'도수물리치료실 03'},
				{'img' : '/public/images/explore/1f_dummy_14.jpg', 'text' :'X-ray 01'},
				{'img' : '/public/images/explore/1f_dummy_15.jpg', 'text' :'X-ray 02'},
				{'img' : '/public/images/explore/1f_dummy_16.jpg', 'text' :'초음파검사실'},
				{'img' : '/public/images/explore/1f_dummy_17.jpg', 'text' :'CT실'},
				{'img' : '/public/images/explore/1f_dummy_18.jpg', 'text' :'골밀도검사실'},
				{'img' : '/public/images/explore/1f_dummy_19.jpg', 'text' :'비술술치료실(C-ARM)'},
				{'img' : '/public/images/explore/1f_dummy_20.jpg', 'text' :'스포츠 퍼포먼스 센터(SPC) 01'},
				{'img' : '/public/images/explore/1f_dummy_21.jpg', 'text' :'스포츠 퍼포먼스 센터(SPC) 02'},
				{'img' : '/public/images/explore/1f_dummy_22.jpg', 'text' :'스포츠 퍼포먼스 센터(SPC) 03'},
				{'img' : '/public/images/explore/1f_dummy_23.jpg', 'text' :'스포츠 퍼포먼스 센터(SPC) 04'},
				{'img' : '/public/images/explore/1f_dummy_24.jpg', 'text' :'스포츠 퍼포먼스 센터(SPC) 05'},
				{'img' : '/public/images/explore/1f_dummy_25.jpg', 'text' :'스포츠 퍼포먼스 센터(SPC) 06'}
			]
		},{
			'title' : '2F',
			'description' : '수술실, 입원실(1/2/4인실 ), PT실, 원내약국, 휴게실, 원내식당',
			'list' : [
				{'img' : '/public/images/explore/2f_dummy_01.jpg', 'text' :'입구'},
				{'img' : '/public/images/explore/2f_dummy_02.jpg', 'text' :'로비 및 복도(1)'},
				{'img' : '/public/images/explore/2f_dummy_03.jpg', 'text' :'로비 및 복도(2)'},
				{'img' : '/public/images/explore/2f_dummy_04.jpg', 'text' :'수술실(1)'},
				{'img' : '/public/images/explore/2f_dummy_05.jpg', 'text' :'수술실(2)'},
				{'img' : '/public/images/explore/2f_dummy_06.jpg', 'text' :'입원실(1인실)'},
				{'img' : '/public/images/explore/2f_dummy_07.jpg', 'text' :'입원실(2인실)'},
				{'img' : '/public/images/explore/2f_dummy_08.jpg', 'text' :'입원실(4인실)'},
				{'img' : '/public/images/explore/2f_dummy_09.jpg', 'text' :'원내약국'},
				{'img' : '/public/images/explore/2f_dummy_10.jpg', 'text' :'휴게실(1)'},
				{'img' : '/public/images/explore/2f_dummy_11.jpg', 'text' :'휴게실(2)'},
				{'img' : '/public/images/explore/2f_dummy_12.jpg', 'text' :'원내식당'}
			]
		/*},{
			'title' : '4F',
			'description' : '의국',
			'list' : [
				{'img' : '/public/images/explore/4f-01.jpg', 'text' :'휴계실 01'},
				{'img' : '/public/images/explore/4f-02.jpg', 'text' :'휴계실 02'}
			]*/
		}
	];
	explore.draw = function(){
		explore.el.swiper.find('.swiper').empty();
		explore.image[explore.active].list.forEach(function(frow,feq){
			explore.el.swiper.find('.swiper').append('<li><div class="background"><img src="'+frow.img+'" class="block" /></div><p class="caption"><span>'+frow.text+'</span></p></li>');
		});
		slider.item['explore-slider'] && slider.item['explore-slider'].reloadSlider();

		explore.el.list.children('li').eq(explore.active).addClass('active').siblings().removeClass('active');
		explore.el.info.children('li').eq(explore.active).addClass('active').siblings().removeClass('active');
	}
	fn.init = function(){
		explore.el.list.on('click','a',function(){
			explore.active = $(this).data('index');
			explore.draw();
		});
		explore.image.forEach(function(row,eq){
			explore.el.list.append('<li><a href="javascript:void(0)" data-index="'+eq+'"><span>'+row.title+'</span></a></li>');
			explore.el.info.append('<li><dl><dt>'+row.title+'</dt><dd>'+row.description+'</dd></dl></li>');
			row.list.forEach(function(frow,feq){
				$('body').append('<img src="'+frow.img+'" class="none temp-img" />');
			});
		});
		$('img.temp-img').on('load',function(){
			$(this).remove();
			if (!$('img.temp-img').length){
				explore.draw();
				co.sideFixed();
			}
		});
	};
</script>