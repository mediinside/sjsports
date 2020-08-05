<?PHP
	include_once $_SERVER['DOCUMENT_ROOT'] . '/_init.php';
	include_once $GP -> INC_WWW . '/count_inc.php';
	$top_dep_title = "목/허리";
	$page_title = "척추전방전위증";
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
					"background-image":"url('/public/images/common/sub_top_img03.jpg')",
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
				<h3 class="mt30">척추전방전위증</h3>
				<p class="mt40">위 척추뼈가 아래 척추뼈보다 앞으로 밀려나가면서 배 쪽으로 튀어나와 신경을 손상시켜 허리통증과 다리 저림을 일으키는 질환입니다.</p>
				<p class="mt20">크게 척추분리증에 의한 전방전위증, 퇴행성 변화에 의한 전방전위증, 외상에 의한 전방전위증으로 나눌 수 있으며,<br/>주로 한 군데에서만 나타나는 경우가 많지만 환자에 따라 여러 군데에서 동시에 발생할 수도 있습니다.<br/>척추전반전위증과 다르게 위 척추 뼈가 뒤로 밀린 것은 척추후방전위증이라고 합니다. </p>
				<div class="mt30"><img src="/public/images/common/con_disease_neck_sub05_img01.jpg" alt=""></div>
			</div>
			<div class="box_style_2 py60">
				<div class="box_style_2_div box_style_2_div_left" style="background-image: url('/public/images/common/con_cause_neck_sub05_img01.jpg');">
					<h4 class="pl30"><i><span></span></i><strong class="px30">척추전방전위증 원인</strong></h4>
					<div class="pl30">
						<ul class="box_style_2_ul">
							<li class="">노화로 인해 디스크와 관절의 퇴행성 변화를 겪으며 발생하는 경우</li>
							<li class="">악성 종양에 의해 척추 뼈가 약화된 경우에 발생하는 경우</li>
							<li class="">교통사고나 낙상사고 등 외상에 의해 척추 관절 돌기가 골절된 경우</li>
						</ul>
					</div>
				</div>
				<div class="box_style_2_div box_style_2_div_right" style="background-image: url('/public/images/common/con_symptom_neck_sub05_img01.jpg');">
					<h4 class="pl30"><i><span></span></i><strong class="px30">척추전방전위증 증상</strong></h4>
					<div class="pl30">
						<ul class="box_style_2_ul">
							<li>앉아 있다가 일어설 때나 허리를 뒤로 젖힐 때 허리통증이 있습니다.</li>
							<li>오래 서 있거나 많이 걷고 나면 허리나 엉치뼈 부근, 무릎 밑이 아픕니다.</li>
							<li>엉치 또는 허벅지, 종아리, 발끝이 저리거나 아프거나 당깁니다.</li>
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
									<p>인체에 무해하고 인대보다 삼투압이 높은 물질을 직접 주입시켜 인대를<br/>새롭게 재생시키는 치료법입니다.</p>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="box_style_3-left">
									<h3 class="box_style_3-page-title my50 ">비수술적 치료법</h3>
									<h4>경막외신경성형술</h4>
									<p>주사바늘이 달린 특수 카테터를 꼬리뼈를 통해 삽입시켜 신경을 압박하고<br/>있는 부위를 치료하는 방법입니다.</p>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="box_style_3-left">
									<h3 class="box_style_3-page-title my50 ">비수술적 치료법</h3>
									<h4>Macro FIMS</h4>
									<p>특수바늘을 신경공으로 삽입하여 유착을 풀어주어 신경의 기능을<br/>회복시키고 염증, 부종을 가라앉혀주는 시술법입니다.</p>
								</div>
							</div>	
							<div class="swiper-slide">
								<div class="box_style_3-left">
									<h3 class="box_style_3-page-title my50 ">비수술적 치료법</h3>
									<h4>풍선확장술</h4>
									<p>풍선 기능이 포함된 카테터를 이용하여 협착부위를 확장시킨 뒤<br/>신경유착효소제, 항염증제 등을 투여하는 치료법입니다.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-container gallery-top gallery-top_ctn06">
						<div class="swiper-wrapper">
							<div class="swiper-slide" style="background-image:url(/public/images/common/subcon_care_img03.jpg)">
								<div class="blackcover"></div>
							</div>
							<div class="swiper-slide" style="background-image:url(/public/images/common/subcon_care_img01.jpg)">
								<div class="blackcover"></div>
							</div>
							<div class="swiper-slide" style="background-image:url(/public/images/common/subcon_care_img04.jpg)">
								<div class="blackcover"></div>
							</div>
							<div class="swiper-slide" style="background-image:url(/public/images/common/subcon_care_img08.jpg)">
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
					<iframe src="https://www.youtube.com/embed/E_fz1M50Vr4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>


			<div class="box_style_5 py60" style="background-image: url('/public/images/common/img_06.jpg');">
				<h3>척추전방전위증 예방법</h3>
				<ul class="box_style_5_ul mt50">
					<li>
						<h4 class="mt40 py10"><strong class="mt10"><span class="text-hide">1. </span>다양한 자세</strong></h4>
						<p>장시간 한 자세로 앉아있는 것은<br/>척추 전방 전위증을 유발시키는 데<br/>큰 역할을 하기 때문에 피하는 것이 좋습니다.</p>
					</li>
					<li>
						<h4 class="mt40 py10"><strong class="mt10"><span class="text-hide">2. </span>가벼운 운동</strong></h4>
						<p>척추에 무리가 가는 운동보다는<br/>가벼운 유산소 운동과 하체 순환<br/>운동을 하는 것이 좋습니다.</p>
					</li>
					<li>
						<h4 class="mt40 py10"><strong class="mt10"><span class="text-hide">3. </span>스트레칭</strong></h4>
						<p>가벼운 운동과 꾸준한 스트레칭으로<br/>척추 주변 근육을 강화하는 것이 좋습니다.</p>
					</li>
				</ul>
			</div>
			<?php include_once $GP -> INC_WWW . '/footer_before.php'; ?>
		</div>
	</div>
	<?php
		include_once $GP -> INC_WWW . '/footer_ver2.php';
	?>