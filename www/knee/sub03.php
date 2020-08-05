<?PHP
	include_once $_SERVER['DOCUMENT_ROOT'] . '/_init.php';
	include_once $GP -> INC_WWW . '/count_inc.php';
	$top_dep_title = "무릎";
	$page_title = "무릎연골연화증";
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
					"background-image":"url('/public/images/common/sub_top_img05.jpg')",
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
				<h3 class="mt30">무릎연골연화증</h3>
				<p class="mt40">슬개골은 무릎을 펴주는 전방 허벅지 근육과 무릎 전방 힘줄 사이에 위치하는 접시 모양의 뼈로<br/>무릎 연골연화증은 이 슬개골을 덮고 있는 연골이 단단함을 잃고 말랑말랑하게 약해지는 증상입니다.</p>
				<p class="mt20">병이 진행되면 연골 표면이 갈라지고 닳게 되며 말기에는 연골이 소실돼 연골 아래의 뼈가 노출되기도 합니다.</p>
				<div class="mt30"><img src="/public/images/common/con_disease_knee_sub03_img01.jpg" alt=""></div>
			</div>
			<div class="box_style_2 py60">
				<div class="box_style_2_div box_style_2_div_left" style="background-image: url('/public/images/common/con_cause_knee_sub03_img01.jpg');">
					<h4 class="pl30"><i><span></span></i><strong class="px30">무릎연골연화증 원인</strong></h4>
					<div class="pl30">
						<ul class="box_style_2_ul">
							<li class="">교통사고 등의 외상으로 무릎 앞쪽에 심한 충격이 가해지는 경우</li>
							<li class="">무리한 운동으로 인해 심한 무릎 연골이 손상되는 경우</li>
							<li class="">일상 생활 중 무릎을 꿇거나 쪼그리는 자세로 오래 일을 하는 경우</li>
						</ul>
					</div>
				</div>
				<div class="box_style_2_div box_style_2_div_right" style="background-image: url('/public/images/common/con_symptom_knee_sub03_img01.jpg');">
					<h4 class="pl30"><i><span></span></i><strong class="px30">무릎연골연화증 증상</strong></h4>
					<div class="pl30">
						<ul class="box_style_2_ul">
							<li>무리하게 움직이면 증상의 악화 및 호전이 반복되는 경우가 많습니다.</li>
							<li>무릎 앞쪽이 저리고 뻑뻑하게 느껴질 수 있습니다.</li>
							<li>무릎 앞쪽에서 통증이 느껴지고 두 무릎을 굽힐 때마다 이상한 소리가 납니다.</li>
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
									<h3 class="box_style_3-page-title mt50 mb20">보존적 치료법</h3>
									<p>진통소염제, 강화운동, 스트레칭 등의 보존적인 요법으로 우선 치료합니다. 보존적인 방법에도 효과가 없다면 수술을 고려해보아야 합니다. </p>
									<h4 class="mt20">약물치료</h4>
									<p>인체에 무해하고 인대보다 삼투압이 높은 물질을 직접 주입시켜 약해진 연골을 재생시키는 치료법입니다. </p>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="box_style_3-left">
									<h3 class="box_style_3-page-title mt50 mb20">보존적 치료법</h3>
									<p>진통소염제, 강화운동, 스트레칭 등의 보존적인 요법으로 우선 치료합니다. 보존적인 방법에도 효과가 없다면 수술을 고려해보아야 합니다. </p>
									<h4 class="mt20">물리치료 </h4>
									<p>통증을 완화시키거나 조직의 치유를 촉진시키고, 신체의 움직임을 향상시키기 위해 열이나 얼음, 광선, 전기, 전자기파, 초음파, 레이저, 기계적인 힘 등을 이용하는 치료법입니다.</p>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="box_style_3-left">
									<h3 class="box_style_3-page-title mt50 mb20">보존적 치료법</h3>
									<p>진통소염제, 강화운동, 스트레칭 등의 보존적인 요법으로 우선 치료합니다. 보존적인 방법에도 효과가 없다면 수술을 고려해보아야 합니다. </p>
									<h4 class="mt20">도수, 근력 재활치료 </h4>
									<p>통증 및 붓기가 반복되지 않거나 수술을 원하지 않는 경우 무릎 주위 근력과 평형감각 등을 특별히 훈련시켜 재손상 및 추가 손상을 막을 수 있도록 합니다.</p>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="box_style_3-left">
									<h3 class="box_style_3-page-title mt50 mb20">수술적 치료법</h3>
									<p>손상 부위에 초소형 카메라와 레이저 수술기구가 부착된 관절경을 관절 내부로 삽입하여 손상 부위를 모니터로 직접 확인하면서 치료하는 방법과 환자 본인에게서 추출한 줄기세포를 손상된 연골 부위에 주입하여 치료하는 방법을 시행할 수 있습니다.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-container gallery-top gallery-top_ctn06">
						<div class="swiper-wrapper">
							<div class="swiper-slide" style="background-image:url(/public/images/common/subcon_care_img_200319_09.jpg)">
								<div class="blackcover"></div>
							</div>
							<div class="swiper-slide" style="background-image:url(/public/images/common/subcon_care_img_200319_02.jpg)">
								<div class="blackcover"></div>
							</div>
							<div class="swiper-slide" style="background-image:url(/public/images/common/subcon_care_img_200319_03.jpg)">
								<div class="blackcover"></div>
							</div>
							<div class="swiper-slide" style="background-image:url(/public/images/common/subcon_care_img_200319_08.jpg)">
								<div class="blackcover"></div>
							</div>
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
					<iframe src="https://www.youtube.com/embed/Fg_ptstlsLc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>


			<div class="box_style_5 py60" style="background-image: url('/public/images/common/img_06.jpg');">
				<h3>무릎연골연화증 예방법</h3>
				<ul class="box_style_5_ul mt50">
					<li>
						<h4 class="mt40 py10"><strong class="mt10"><span class="text-hide">1. </span>체중감량</strong></h4>
						<p>상체 등 체중이 많이 나갈수록 무릎이나<br/>발목 관절에 가해지는 부담이 크기때문에<br/>비만을 예방하는 것이 좋습니다.</p>
					</li>
					<li>
						<h4 class="mt40 py10"><strong class="mt10"><span class="text-hide">2. </span>적절한 운동</strong></h4>
						<p>고정식 자전거 타기, 수영 등과 같은<br/> 관절에 무리가 없는 운동을<br/>하는 것이 좋습니다.</p>
					</li>
					<li>
						<h4 class="mt40 py10"><strong class="mt10"><span class="text-hide">3. </span>올바른 자세</strong></h4>
						<p>쪼그려 앉거나, 양반다리를 하는 자세를<br/>반복하게 되면 관절의 부담을 주기 때문에<br/>바닥에 앉지 않고 의자에 앉는 습관을<br/>들이는 것이 좋습니다.</p>
					</li>
				</ul>
			</div>
			<?php include_once $GP -> INC_WWW . '/footer_before.php'; ?>
		</div>
	</div>
	<?php
		include_once $GP -> INC_WWW . '/footer_ver2.php';
	?>