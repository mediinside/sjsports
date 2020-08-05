<?PHP
	include_once $_SERVER['DOCUMENT_ROOT'] . '/_init.php';
	include_once $GP -> INC_WWW . '/count_inc.php';
	$top_dep_title = "무릎";
	$page_title = "줄기세포연골재생치료";
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
			<div class="box_style_1 text-center pt60">
				<h3 class="mt30">줄기세포 연골 재생 치료는?</h3>
<p class="mt20">관절 연골은 자연 치유 능력이 낮은 것으로 알려져 있으며,<br>
	외상 혹은 퇴행성 변화에 의하여 작은 병변으로 시작되어 점차 골 관절염으로 진행될 수 있습니다. <br>
	세종스포츠정형외과에서는 오랫동안 사용되고 효과가 증명된 미세천공술(microfracture)부터 자가골수 줄기세포를 이용한 이식술,<br>
	인체 제대혈 줄기세포(카티스템치료)를 이용한 수술까지 풍부한 경험과 정확한 치료를 시행하고 있습니다. </p>

				<div class="mt30"><img src="/public/images/common/con_disease_knee_sub06_img01.jpg" alt=""></div>
			</div>
			<div class="box_style_2 pb60">
				<div class="box_style_2_div box_style_2_div_whole" style="background-image: url('/public/images/common/con_cause_knee_sub06_img01.jpg');">
					<h4 class="pl30"><i><span></span></i><strong class="px30">줄기세포가 필요한 경우는?</strong></h4>
					<div class="pl30">
						<ul class="box_style_2_ul">
							<li>무릎 관절 연골 손상으로 통증이 심한 분 </li>
<li>무릎 인공관절 수술을 할 수 없는 분</li>
<li>초.중기 퇴행성관절염 환자</li>
<li>퇴행성관절염으로 연골이 거의 닳아 없는 분 </li>

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
									<h3 class="box_style_3-page-title mb20">1. 미세천공술: (Microfracture) </h3>
									<p>오랫동안 사용된 방법으로 관절내시경을 이용하여 손상된 연골에 일정한 간격으로 미세한 구멍을 내서 치료합니다. 손상된 연골에서 출혈이 일어나고 연골과 골수가 자극되어 연골이 재생될 수 있도록 하는 치료법입니다. 비교적 나이가 젊고 크기가 작은 경우에 효과가 있습니다.</p>
									<h4 class="mt20">관절경적 미세천공술! </h4>
									<ul>
										<li>- 이전부터 사용되고 있는 재생치료로, “섬유성연골”로 재생 </li>
										<li>- 관절내시경을 통해 시행하므로 미세한 절개 </li>
										<li>- 출혈이나 부작용이 거의 없고 조직 손상 적음</li>
										<li>- 시행 후 적은 통증과 빠른 회복 </li>
									</ul>

								</div>
							</div>
							<div class="swiper-slide">
								<div class="box_style_3-left">
									<h3 class="box_style_3-page-title mt30 mb20">2. 자가 골수 줄기세포 치료 </h3>
									<p>신의료기술로 보건복지부에 안정성 및 연골재생 효과를 인정받은 치료법으로 15-50세 이하의 환자에게 주로 시행됩니다. 보통 본인 골반뼈의 골수를 채취한 뒤 줄기세포를 추출하기 때문에 신체 거부반응이 없고 한 번에 시술이 가능하다는 장점이 있습니다. </p>
									<p class="mt20">관절내시경 혹은 절개 후 손상된 연골을 제거한 뒤 추출한 세포를 섬유접착제(Greenplast , 녹십자)와 줄기세포를 위한 지지대와 함께 이식하며 수술 후 6주간 체중 부하를 피하고 이후 재활치료를 시행합니다. </p>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="box_style_3-left">
									<h3 class="box_style_3-page-title mt30 mb20">3.	인체 제대혈 중간엽 줄기세포 치료 </h3>
<p>국내 식약청에서 승인받은 제품으로 연골 손상 부위가 커도 효과가 확인된 치료 방법입니다. </p>
<p class="mt20">나이와 상관없이 심한 관절염 치료에 사용됩니다. 몇몇 연구에 따르면 골수에서 추출한 중간엽 세포보다 연골 생성 능력이 더 뛰어나고 줄기세포 수가 더 많습니다.</p>
<p class="mt20">관절내시경 혹은 절개 후 손상된 연골을 제거한 뒤 줄기세포를 이식하며, 수술 후 6주간 체중부하를 피하고 이후 재활치료를 시행합니다. </p>

								</div>
							</div>

						</div>
					</div>
					<div class="swiper-container gallery-top gallery-top_ctn06">
						<div class="swiper-wrapper">
							<div class="swiper-slide" style="background-image:url(/public/images/common/subcon_care_img_200319_08.jpg)">
								<div class="blackcover"></div>
							</div>
							<div class="swiper-slide" style="background-image:url(/public/images/common/subcon_care_img_200319_08.jpg)">
								<div class="blackcover"></div>
							</div>
							<div class="swiper-slide" style="background-image:url(/public/images/common/subcon_care_img_200319_10.jpg)">
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
					<iframe src="https://www.youtube.com/embed/2vJM7TwzQgc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			<?php include_once $GP -> INC_WWW . '/footer_before.php'; ?>
		</div>
	</div>
	<?php
		include_once $GP -> INC_WWW . '/footer_ver2.php';
	?>