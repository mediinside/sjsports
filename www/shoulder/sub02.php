<?PHP
	include_once $_SERVER['DOCUMENT_ROOT'] . '/_init.php';
	include_once $GP -> INC_WWW . '/count_inc.php';
	$top_dep_title = "어깨";
	$page_title = "오십견";
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
				<h3 class="mt30">오십견</h3>
				<p class="mt40">오십견은 전 인구의 약 2%에서 유발되는 흔한 질환입니다.</p>
				<p class="mt20">오십견이라는 용어는 50세 전후로 어깨의 움직임이 제한되고 통증이 심한 증상이 많이 나타난다고 하여 붙여진 이름으로<br/>정확한 진단명은 아닙니다. 특히 <span style="font-weight:bold; color: #000; font-size: 20px;">회전근개 파열</span>등의 동반손상이 있는 경우가 많기 때문에 정확한 진단이 우선되어야 합니다.<br/><span style="font-weight:bold; color: #000; font-size: 20px;">오십견은 동결견</span> 또는 <span style="font-weight:bold; color: #000; font-size: 20px;">유착성관절낭염</span>이 더 정확한 진단명 입니다.</p>
				<div class="mt30"><img src="/public/images/common/con_disease_shoulder_sub02_img01.jpg" alt=""></div>
			</div>
			<div class="box_style_2 py60">
				<div class="box_style_2_div box_style_2_div_left" style="background-image: url('/public/images/common/con_cause_shoulder_sub02_img01.jpg');">
					<h4 class="pl30"><i><span></span></i><strong class="px30">오십견 원인</strong></h4>
					<div class="pl30">
						<ul class="box_style_2_ul">
							<li class="">특별한 원인 없이 나타나는 경우(특발성)</li>
							<li class="">강직을 유발하는 1차적인 원인(회전근개파열, 석회화 건염등)이 있는 경우</li>
							<li class="">잘못된 자세와 습관, 유전적 문제, 외상, 당뇨 및 갑상선질환 등의 경우</li>
						</ul>
					</div>
				</div>
				<div class="box_style_2_div box_style_2_div_right" style="background-image: url('/public/images/common/con_symptom_shoulder_sub02_img01.jpg');">
					<h4 class="pl30"><i><span></span></i><strong class="px30">오십견 증상</strong></h4>
					<div class="pl30">
						<ul class="box_style_2_ul">
							<li>팔을 조금만 움직여도 어깨에 통증이 나타납니다.</li>
							<li>어깨가 굳는 느낌이 들고 타인이 어깨를 들어올려도 움직이기 어렵습니다.</li>
							<li>야간에 통증이 심해 수면장애가 발생하기도 합니다.</li>
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
									<h3 class="box_style_3-page-title my50 ">수술적 치료법</h3>
									<h4>관절내시경수술</h4>
									<p>직경 4mm정도의 관절경을 관절 안으로 삽입하여 손상된 부위를<br/>제거하거나 봉합하는 수술법입니다.</p>
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
							<div class="swiper-slide" style="background-image:url(/public/images/common/subcon_care_img14.jpg)">
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
					<iframe src="https://www.youtube.com/embed/M3FucC2FzLg?" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>


			<div class="box_style_5 py60" style="background-image: url('/public/images/common/img_06.jpg');">
				<h3>오십견 예방법</h3>
				<ul class="box_style_5_ul mt50">
					<li>
						<h4 class="mt40 py10"><strong class="mt10"><span class="text-hide">1. </span>스트레칭</strong></h4>
						<p>관절을 풀어주는 스트레칭 동작으로<br/>어깨와 팔의 근육과 관절을<br/>부드럽게 해 주는 것이 필요합니다.</p>
					</li>
					<li>
						<h4 class="mt40 py10"><strong class="mt10"><span class="text-hide">2. </span>온열 요법</strong></h4>
						<p>어깨 주변 근육의 긴장을 풀어주기<br/>위한 방법으로 온탕이나 따뜻한 팩 등을<br/>사용하여 혈액순환과 긴장완화를 유도합니다.</p>
					</li>
					<li>
						<h4 class="mt40 py10"><strong class="mt10"><span class="text-hide">3. </span>적당한 운동</strong></h4>
						<p>전신 운동 및 근력 운동, 스트레칭을<br/>적당히 분배하여 하는 것이 좋습니다.<br/>규칙적으로 운동은 하되 장시간 관절을<br/>혹사시키며 무리하는 것은 바람직하지 않습니다.</p>
					</li>
				</ul>
			</div>
			<?php include_once $GP -> INC_WWW . '/footer_before.php'; ?>
		</div>
	</div>
	<?php
		include_once $GP -> INC_WWW . '/footer_ver2.php';
	?>