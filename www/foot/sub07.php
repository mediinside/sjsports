<?PHP
	include_once $_SERVER['DOCUMENT_ROOT'] . '/_init.php';
	include_once $GP -> INC_WWW . '/count_inc.php';
	$top_dep_title = "발/발목";
	$page_title = "단지증";
	include_once $GP -> INC_WWW . '/head.php';
	include_once $GP -> HOME."main_lib/main_proc.php";

	$Main_Notice = Main_Notice('10');
	/*$Main_Review = Main_Review();*/

	/*$Main_Slide_Visual  = Main_Slide_New('2','pc');
	$Main_Slide_Banner  = Main_Slide_New('3','pc');*/
	// echo $_SESSION['susermobile'];
?>
	<script>
		$(document).ready(function(){
			$('.sub_head').css(
				{
					"background-image":"url('/public/images/common/sub_top_img06.jpg')",
				}
			);
		});

		//main_1 script
		function dr_list_prev(){
			var list = $('.dr_list li').eq(0).html();
			$('.dr_list').append("<li>"+list+"</li>");
			 $('.dr_list li').eq(0).remove();
		}
		function dr_list_next(){
			var main_1_dr_list = $('.main_1 .dr_list li').length;
			var list = $('.dr_list li').eq(main_1_dr_list-1).html();
			$('.dr_list').prepend("<li>"+list+"</li>");
			$('.dr_list li').eq(main_1_dr_list).remove();
		}

		//main_2 script
		function ctrl_play(){
			swiper_main_2.autoplay.start();
			$('.swiper_main_2_ctrl .ctrl_pause').show();
			$('.swiper_main_2_ctrl .ctrl_play').hide();
		}

		function ctrl_pause(){
			swiper_main_2.autoplay.stop();
			$('.swiper_main_2_ctrl .ctrl_pause').hide();
			$('.swiper_main_2_ctrl .ctrl_play').show();

		}
	</script>
	<?php
		include_once $GP -> INC_WWW . '/header_ver2.php';
		include_once $GP -> INC_WWW . '/header_after.php';
	?>

	<div class="contents">
		<?php include_once $GP -> INC_WWW . '/location_new.php';?>
		<div class="contents_body">
			<div class="box_style_1 text-center py60">
				<h3 class="mt30">단지증</h3>
				<p class="mt20">
					단지증은 손가락과 발가락 중 일부가 짧은 경우를 말합니다.<br/>
					보통 네 번째 발가락과 엄지발가락에 나타나며 양발에 동시에 나타나는 경우도 많습니다.<br/>
					성별을 살펴보면 여성의 경우 남성에 비해 약 25배 정도로 단지증 증상이 나타나며, 인구 약 만명당 1명꼴로 발생하는 것으로 알려져 있습니다.
				</p>
				<div class="mt30"><img src="/public/images/common/foot_sub07_img01.jpg" alt=""></div>
			</div>
			<div class="box_style_2 py60">
				<div class="box_style_2_div box_style_2_div_left" style="background-image: url('/public/images/common/foot_sub07_img02.jpg');">
					<h4 class="pl30"><i><span></span></i><strong class="px30">단지증 원인</strong></h4>
					<div class="pl30">
						<ul class="box_style_2_ul">
							<li class="">선천적으로 중족골의 발육에 이상이 생겨 발가락이 짧아지는 경우</li>
							<li class="">후천적인 외상에 의하여 나타나는 경우</li>
							<li class="">발생원인이 명확하지 않은 것이 특징<br/><br/></li>
						</ul>
					</div>
				</div>
				<div class="box_style_2_div box_style_2_div_right" style="background-image: url('/public/images/common/foot_sub07_img03.jpg');">
					<h4 class="pl30"><i><span></span></i><strong class="px30">단지증 증상</strong></h4>
					<div class="pl30">
						<ul class="box_style_2_ul">
							<li>발가락 길이 차로 체중의 분포가 달라 주위 발가락에 굳은살, 티눈이<br/>발생하여 걸을 때 통증이 발생</li>
							<li>외형상의 콤플렉스로 인해 우울증까지 발전이 가능</li>
							<li>걸음걸이와 신발착용의 문제로 허리, 무릎에 2차 문제를 유발하기도 함</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="box_style_3 py50">
				<div class="" style="width: 100%; height: 100%; margin: 0 auto;">
					<div class="swiper-container gallery-thumbs gallery-thumbs_ctn06">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<div class="box_style_3-left">
									<h3 class="box_style_3-page-title my50 ">수술적 치료법</h3>
									<h4>자가골 이식술</h4>
									<p>3~4cm의 최소절개를 통해 흉터가 적고 1~2시간 정도로 수술시간이<br/>
										짧습니다. 또한, 자신의 뼈를 이식하여 발가락 길이를 늘리는 방법으로<br/>
										회복이 빠르고 부작용이 적은 장점이 있는 수술입니다.
									</p>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="box_style_3-left">
									<h3 class="box_style_3-page-title my50 ">수술적 치료법</h3>
									<h4>자가골 이식술</h4>
									<p>3~4cm의 최소절개를 통해 흉터가 적고 1~2시간 정도로 수술시간이<br/>
										짧습니다. 또한, 자신의 뼈를 이식하여 발가락 길이를 늘리는 방법으로<br/>
										회복이 빠르고 부작용이 적은 장점이 있는 수술입니다.
									</p>
								</div>
							</div>
							<!-- <div class="swiper-slide">
								<div class="box_style_3-left">
									<h3 class="box_style_3-page-title my50 ">보존적 치료법</h3>
									<h4>체외충격파</h4>
									<p>인대나 힘줄을 구성하는 섬유소를 자극하여 상처 치료에 필요한<br/>조직의 재생을 촉진하는 치료법입니다.</p>
								</div>
							</div> -->
						</div>
					</div>
					<div class="swiper-container gallery-top gallery-top_ctn06">
						<div class="swiper-wrapper">
							<div class="swiper-slide" style="background-image:url(/public/images/common/foot_sub07_img04.jpg)">
								<div class="blackcover"></div>
							</div>
							<div class="swiper-slide" style="background-image:url(/public/images/common/foot_sub07_img05.jpg)">
								<div class="blackcover"></div>
							</div>
							<!-- <div class="swiper-slide" style="background-image:url(/public/images/common/subcon_care_img13.jpg)">
								<div class="blackcover"></div>
							</div> -->
						</div>
					</div>
					<div class="prev_next">
						<button type="button" class="btn_prev mr20" onclick="galleryTop_prev()"><span class="text-hide">prev</span></button>
						<button type="button" class="btn_next ml20" onclick="galleryTop_next()"><span class="text-hide">next</span></button>
					</div>

				</div>
				<!-- Initialize Swiper -->
				<script>
					var galleryThumbs_ctn06 = new Swiper('.gallery-thumbs_ctn06', {
						spaceBetween: 0,
						slidesPerView: 1,
						effect: 'fade',
						allowTouchMove: false,
						loop: true,
						freeMode: true,
						loopedSlides: 2, //looped slides should be the same
						watchSlidesVisibility: true,
						watchSlidesProgress: true,
					});

					var galleryTop_ctn06 = new Swiper('.gallery-top_ctn06', {
						slidesPerView: 1,
						spaceBetween: 50,


						loop:true,
						loopedSlides: 2, //looped slides should be the same
						navigation: {
							nextEl: '.swiper-button-next-top_ctn06',
						},
						thumbs: {
							swiper: galleryThumbs_ctn06
						},

						autoplay: {delay: 3000,}
					});

					function galleryTop_next(){
						galleryTop_ctn06.slideNext();
					}

					function galleryTop_prev(){
						galleryTop_ctn06.slidePrev();
					}
				</script>
			</div>
			<div class="box_style_4">
				<div class="box_style_4_head">
					<h3 class="text-center pt80"><strong class="d-inline-block text-hide">SJS TV</strong></h3>
				</div>
				<div class="box_style_4_body pt30">
					<iframe src="https://www.youtube.com/embed/3nSFiBE8F84" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>


			<div class="box_style_5 py60" style="background-image: url('/public/images/common/img_06.jpg');">
				<h3>단지증 예방법</h3>
				<ul class="box_style_5_ul mt50">
					<li>
						<h4 class="mt40 py10"><strong class="mt10"><span class="text-hide">1. </span></strong></h4>
						<p>선천성 기형의 경우<br/>예방방법이 없습니다.</p>
					</li>
					<li>
						<h4 class="mt40 py10"><strong class="mt10"><span class="text-hide">2. </span></strong></h4>
						<p>수술적치료만 가능한 질환이기 때문에<br/>발의 성장이 끝난 성인만 가능합니다.</p>
					</li>
					<li>
						<h4 class="mt40 py10"><strong class="mt10"><span class="text-hide">3. </span></strong></h4>
						<p>빠른 치료를 통해 2차 질환을<br/>예방하는 것이 좋습니다.</p>
					</li>
				</ul>
			</div>
			<?php include_once $GP -> INC_WWW . '/footer_before.php'; ?>
		</div>
	</div>
	<?php
		include_once $GP -> INC_WWW . '/footer_ver2.php';
	?>