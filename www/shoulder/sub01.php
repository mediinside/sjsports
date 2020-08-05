<?PHP
	include_once $_SERVER['DOCUMENT_ROOT'] . '/_init.php';
	include_once $GP -> INC_WWW . '/count_inc.php';
	$top_dep_title = "어깨";
	$page_title = "테니스엘보";
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
					"background-image":"url('/public/images/common/sub_top_img04.jpg')",
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
				<h3 class="mt30">테니스엘보</h3>
				<p class="mt40">아래팔에는 손목을 손등 쪽으로 들어올리는 근육이 힘줄이 되어 팔꿈치에 이어지는데<br/>이 힘줄의 과도하고 반복적인 사용 인해 조직이 변성되거나 파열되어<br/>통증을 유발하고 팔을 사용하기 어려워지는 것을 말합니다. </p>
				<p class="mt20">주로 테니스 운동을 많이 하는 사람들에게 발생된다 해서 붙은 별칭으로 정확한 병명은 <span style="font-weight:bold; color: #000; font-size: 20px;">‘외측상과염’</span> 입니다.<br/>이와 유사하게 팔꿈치 내측의 힘줄이 변성되어 통증이 생기는 경우를 골퍼스엘보 또는 <span style="font-weight:bold; color: #000; font-size: 20px;">‘내측상과염’</span> 이라 부릅니다. </p>
				<div class="mt30"><img src="/public/images/common/con_disease_shoulder_sub01_img01.jpg" alt=""></div>
			</div>
			<div class="box_style_2 py60">
				<div class="box_style_2_div box_style_2_div_left" style="background-image: url('/public/images/common/con_cause_shoulder_sub01_img01.jpg');">
					<h4 class="pl30"><i><span></span></i><strong class="px30">테니스엘보 원인</strong></h4>
					<div class="pl30">
						<ul class="box_style_2_ul">
							<li class="">손목 및 팔꿈치를 반복적으로 장시간 움직이는 직업에 종사하는 경우</li>
							<li class="">사고나 부상으로 어깨에 외상을 입은 사람인 경우</li>
							<li class="">테니스, 야구, 골프 등 어깨를 많이 사용하는 운동을 즐기는 사람인 경우</li>
						</ul>
					</div>
				</div>
				<div class="box_style_2_div box_style_2_div_right" style="background-image: url('/public/images/common/con_symptom_shoulder_sub01_img01.jpg');">
					<h4 class="pl30"><i><span></span></i><strong class="px30">테니스엘보 증상</strong></h4>
					<div class="pl30">
						<ul class="box_style_2_ul">
							<li>손목을 위로 젖힐 떄 팔꿈치 바깥쪽 통증이 발생합니다.</li>
							<li>팔꿈치 바깥쪽의 저림 및 경직 증상이 발생합니다.</li>
							<li>심하면 휴식을 취할 때도 지속적으로 통증이 발생할 수 있습니다. </li>
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
									<h3 class="box_style_3-page-title my50 ">보존적 치료법</h3>
									<h4>도수치료</h4>
									<p>관절 주위의 근육과 인대를 손으로 교정하여 관절주위의 부종을 제거하고<br/>통증을 완화시켜 기능을 회복시켜주는 치료법입니다.</p>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="box_style_3-left">
									<h3 class="box_style_3-page-title my50 ">보존적 치료법</h3>
									<h4>운동도수치료</h4>
									<p>재활 필라테스와 자가운동요법을 통해 몸의 긴장을 풀어주고 심부근육을<br/>강화시킴으로써 자세를 교정하고 통증을 완화하는 치료법입니다.</p>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="box_style_3-left">
									<h3 class="box_style_3-page-title my50 ">보존적 치료법</h3>
									<h4>체외충격파</h4>
									<p>인대나 힘줄을 구성하는 섬유소를 자극하여 상처 치료에 필요한 조직의<br/>재생을 촉진하는 치료법입니다.</p>
								</div>
							</div>							
						</div>
					</div>
					<div class="swiper-container gallery-top gallery-top_ctn06">
						<div class="swiper-wrapper">
							<div class="swiper-slide" style="background-image:url(/public/images/common/subcon_care_img03.jpg)">
								<div class="blackcover"></div>
							</div>
							<div class="swiper-slide" style="background-image:url(/public/images/common/subcon_care_img10.jpg)">
								<div class="blackcover"></div>
							</div>
							<div class="swiper-slide" style="background-image:url(/public/images/common/subcon_care_img12.jpg)">
								<div class="blackcover"></div>
							</div>
							<div class="swiper-slide" style="background-image:url(/public/images/common/subcon_care_img13.jpg)">
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
					<iframe src="https://www.youtube.com/embed/AEX_pJy8slM?" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>


			<div class="box_style_5 py60" style="background-image: url('/public/images/common/img_06.jpg');">
				<h3>테니스엘보 예방법</h3>
				<ul class="box_style_5_ul mt50">
					<li>
						<h4 class="mt40 py10"><strong class="mt10"><span class="text-hide">1. </span>과도한 근육 사용 금지</strong></h4>
						<p>무엇이든 과하면 좋지 않습니다.<br/>예방하는 가장 좋은 방법은 팔꿈치 근육에<br/>무리가 가지 않도록 하는 일입니다.</p>
					</li>
					<li>
						<h4 class="mt40 py10"><strong class="mt10"><span class="text-hide">2. </span>휴식 취하기</strong></h4>
						<p>통증이 느껴질 때 팔을 더 움직이면<br/>증상이 더 심해질 수 있습니다.<br/>이럴 때는 잠시 휴식을 취하는 것이 좋습니다.</p>
					</li>
					<li>
						<h4 class="mt40 py10"><strong class="mt10"><span class="text-hide">3. </span>꾸준한 팔 스트레칭</strong></h4>
						<p>평소 긴장한 팔 근육을 수시로<br/>풀어주는 것이 예방하는<br/>첫걸음입니다.</p>
					</li>
				</ul>
			</div>
			<?php include_once $GP -> INC_WWW . '/footer_before.php'; ?>
		</div>
	</div>
	<?php
		include_once $GP -> INC_WWW . '/footer_ver2.php';
	?>