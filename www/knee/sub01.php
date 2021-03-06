<?PHP
	include_once $_SERVER['DOCUMENT_ROOT'] . '/_init.php';
	include_once $GP -> INC_WWW . '/count_inc.php';
	$top_dep_title = "무릎";
	$page_title = "십자인대파열";
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
				<h3 class="mt30">십자인대파열(전/후방)</h3>
				<p class="mt40">무릎은 전/후방 십자인대와 내/외측 측부 인대가 앞뒤좌우의 안정성을 책임지는 구조로 이루어져 있습니다.</p>
				<p class="mt20">십자인대는 무릎 관절에 앞뒤 그리고 회전 안정성을 부여하고 올바르게 움직일 수 있도록 도와주는 역할을 하는데,<br/>이것이 손상되는 경우 십자인대 파열이라고 합니다. 전방십자인대의 경우 스포츠 활동이나 혹은 일상생활 중에도<br/>착지를 잘못하거나 무릎이 내측으로 회전하면서 넘어지는 경우 '뚝'하는 소리와 함께 손상될 수 있습니다.<br/>후방십자인대의 경우 자전거 타고 넘어지거나 계단에서 넘어지면서 무릎이 직접 닿았을 경우 손상되는 경우가 있습니다.</p>
				<div class="mt30"><img src="/public/images/common/con_disease_knee_sub01_img01.jpg" alt=""></div>
			</div>
			<div class="box_style_2 py60">
				<div class="box_style_2_div box_style_2_div_left" style="background-image: url('/public/images/common/con_cause_knee_sub01_img01.jpg');">
					<h4 class="pl30"><i><span></span></i><strong class="px30">십자인대파열(전/후방) 원인</strong></h4>
					<div class="pl30">
						<ul class="box_style_2_ul">
							<li class="">방향을 바꾸거나 멈춰서는 동작에서 무릎이 크게 꺾이면서 충격을 받는 경우</li>
							<li class="">축구나 야구 등의 스포츠 활동을 하면서 갑작스럽게 방향을 전환해야 할 경우</li>
							<li class="">무릎을 꿇은 자세에서 넘어지거나 사고를 당할 경우</li>
						</ul>
					</div>
				</div>
				<div class="box_style_2_div box_style_2_div_right" style="background-image: url('/public/images/common/con_symptom_knee_sub01_img01.jpg');">
					<h4 class="pl30"><i><span></span></i><strong class="px30">십자인대파열(전/후방) 증상</strong></h4>
					<div class="pl30">
						<ul class="box_style_2_ul">
							<li>부상 이후 무릎에 통증이 있고 부어 오릅니다.</li>
							<li>무릎에서 '뚝'하는 파열음이 나거나 찢어지는 느낌이 납니다.</li>
							<li>심한 경우는 무릎관절이 앞뒤로 흔들거림을 느낄 수 있습니다.</li>
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
									<h3 class="box_style_3-page-title my50 ">비수술적 치료법</h3>
									<h4>인대강화주사</h4>
									<p>인체에 무해하고 삼투압이 높은 물질이나 DNA 주사 등을 직접 주입시켜 인대를 재생을 도와줄 수 있습니다.</p>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="box_style_3-left">
									<h3 class="box_style_3-page-title my50 ">비수술적 치료법</h3>
									<h4>물리치료</h4>
									<p>통증을 완화시키거나 조직의 치유를 촉진시키고, 신체의 움직임을 향상시키기 위해 열이나 얼음, 광선, 전기, 전자기파, 초음파, 레이저, 기계적인 힘 등을 이용하는 치료법입니다.</p>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="box_style_3-left">
									<h3 class="box_style_3-page-title my50 ">비수술적 치료법</h3>
									<h4>도수, 근력 재활치료</h4>
									<p>불안정성이 심하지 않거나 수술을 원하지 않는 경우 무릎 주위 근력과 평형감각 등을 특별히 훈련시켜 재손상 및 추가 손상을 막을 수 있도록 합니다.</p>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="box_style_3-left">
									<h3 class="box_style_3-page-title my50 ">수술적 치료법</h3>
									<h4>단일다발재건 및 자가십자인대 보존수술</h4>
									<p>손상 후 남아있는 자가십자인대를 최대한 보존하여 전내측인대와 함께 전십자인대를 재건합니다. 성공할 경우 자가인대의 평형감각세포들이 보존되는 장점이 있습니다.</p>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="box_style_3-left">
									<h3 class="box_style_3-page-title my50 ">수술적 치료법</h3>
									<h4>이중다발재건술</h4>
									<p>원래의 전십자인대의 해부학적 모습 그대로 재건하는 방법으로 수술시간이 길고 술기가 복잡하다는 단점이 있습니다.</p>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="box_style_3-left">
									<h3 class="box_style_3-page-title my50 ">수술적 치료법</h3>
									<h4>전외측인대 재건술</h4>
									<p>수술전 진찰에서 회전불안정이 심한 경우 (Pivot shift test Gr 3) 전외측인대 재건도 함께 시행하여 재파열의 빈도를 낮추려고 합니다.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-container gallery-top gallery-top_ctn06">
						<div class="swiper-wrapper">
							<div class="swiper-slide" style="background-image:url(/public/images/common/subcon_care_img_200319_01.jpg)">
								<div class="blackcover"></div>
							</div>
							<div class="swiper-slide" style="background-image:url(/public/images/common/subcon_care_img_200319_02.jpg)">
								<div class="blackcover"></div>
							</div>
							<div class="swiper-slide" style="background-image:url(/public/images/common/subcon_care_img_200319_03.jpg)">
								<div class="blackcover"></div>
							</div>
							<div class="swiper-slide" style="background-image:url(/public/images/common/subcon_care_img_200319_04.jpg)">
								<div class="blackcover"></div>
							</div>
							<div class="swiper-slide" style="background-image:url(/public/images/common/subcon_care_img_200319_05.jpg)">
								<div class="blackcover"></div>
							</div>
							<div class="swiper-slide" style="background-image:url(/public/images/common/subcon_care_img_200319_06.jpg)">
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
					<iframe src="https://www.youtube.com/embed/XD_BppMMKww" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>


			<div class="box_style_5 py60" style="background-image: url('/public/images/common/con_pr_knee_sub01_img01.jpg');">
				<h3>십자인대파열(전/후방) 예방법</h3>
				<ul class="box_style_5_ul mt50">
					<li>
						<h4 class="mt40 py10"><strong class="mt10"><span class="text-hide">1. </span>운동 전 스트레칭</strong></h4>
						<p>운동을 하기 전에 경직을 풀어주는<br/>스트레칭을 통해서 인대에 가해지는<br/>압력을 근육이 분담할 수 있도록 도와주세요.</p>
					</li>
					<li>
						<h4 class="mt40 py10"><strong class="mt10"><span class="text-hide">2. </span>근육단련</strong></h4>
						<p>스쿼트 운동이나 런지 운동,<br/>엘리베이터 대신 계단 오르기 등으로<br/>무릎 및 허벅지 주위 근력을 강화시킵니다.</p>
					</li>
					<li>
						<h4 class="mt40 py10"><strong class="mt10"><span class="text-hide">3. </span>적절한 강도의 운동</strong></h4>
						<p>체력과 능력을 감안하여서 스포츠 활동 시<br/>과도한 욕심으로 무리한 동작을<br/>피하는 것이 부상을 예방할 수 있습니다.</p>
					</li>
				</ul>
			</div>
			<?php include_once $GP -> INC_WWW . '/footer_before.php'; ?>
		</div>
	</div>
	<?php
		include_once $GP -> INC_WWW . '/footer_ver2.php';
	?>