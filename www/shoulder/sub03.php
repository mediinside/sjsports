<?PHP
	include_once $_SERVER['DOCUMENT_ROOT'] . '/_init.php';
	include_once $GP -> INC_WWW . '/count_inc.php';
	$top_dep_title = "어깨";
	$page_title = "회전근개파열";
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
				<h3 class="mt30">회전근개파열</h3>
				<p class="mt40">회전근개는 어깨관절을 감싸고 있는 힘줄들을 함께 부르는 명칭으로,<br/>어깨를 모든 방향으로 움직이게 하고 어깨뼈와 관절을 안정시키는 역할을 합니다.</p>
				<p class="mt20">회전근개는 총 4개의 힘줄로서 앞 쪽부터 견갑하건, 극상건, 극하건, 소원형건이 하나의 판처럼 어깨관절을 둘러싸고 있습니다.<br/>어깨를 다치거나 장기간 무리하게 사용하는 경우에서 회전근개의 변성이나 염증이 발생한 것을 ‘충돌증후군,<br/> 회전근개증후군’ 이라고 하며 이를 넘어 힘줄 파열로 진행된 것이 '회전근개파열'입니다.</p>
				<div class="mt30"><img src="/public/images/common/con_disease_shoulder_sub03_img01.jpg" alt=""></div>
			</div>
			<div class="box_style_2 py60">
				<div class="box_style_2_div box_style_2_div_left" style="background-image: url('/public/images/common/con_cause_shoulder_sub03_img01.jpg');">
					<h4 class="pl30"><i><span></span></i><strong class="px30">회전근개파열 원인</strong></h4>
					<div class="pl30">
						<ul class="box_style_2_ul">
							<li class="">어깨를 지속적으로 움직이는 직업에 종사하는 경우</li>
							<li class="">사고나 부상으로 어깨에 외상을 입은 사람인 경우</li>
							<li class="">테니스, 야구, 골프 등 어깨를 많이 사용하는 운동을 즐기는 사람인 경우</li>
						</ul>
					</div>
				</div>
				<div class="box_style_2_div box_style_2_div_right" style="background-image: url('/public/images/common/con_symptom_shoulder_sub03_img01.jpg');">
					<h4 class="pl30"><i><span></span></i><strong class="px30">회전근개파열 증상</strong></h4>
					<div class="pl30">
						<ul class="box_style_2_ul">
							<li>양치하거나 안전벨트 매는 동작에서 어깨 및 팔에 통증이 발생합니다. </li>
							<li>밤에 통증이 심해져 밤잠을 설칠 수 있습니다.</li>
							<li>능동적으로 팔 올리기가 어렵고 힘이 빠집니다.</li>
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
					<iframe src="https://www.youtube.com/embed/OiPhbbzKh0U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>


			<div class="box_style_5 py60" style="background-image: url('/public/images/common/img_06.jpg');">
				<h3>회전근개파열 예방법</h3>
				<ul class="box_style_5_ul mt50">
					<li>
						<h4 class="mt40 py10"><strong class="mt10"><span class="text-hide">1. </span>과도한 어깨 사용 금지</strong></h4>
						<p>팔을 반복적으로 움직이는<br/>운동 및 일은 줄이시는게 좋습니다. </p>
					</li>
					<li>
						<h4 class="mt40 py10"><strong class="mt10"><span class="text-hide">2. </span>충분한 휴식</strong></h4>
						<p>어깨관절을 무리하게 사용하였다면<br/>중간중간 휴식을 통해<br/>피로를 풀어주는 것이 좋습니다.</p>
					</li>
					<li>
						<h4 class="mt40 py10"><strong class="mt10"><span class="text-hide">3. </span>어깨 스트레칭</strong></h4>
						<p>평소 어깨를 이용한 가벼운 스트레칭이나<br/>회전근개 근력운동을 자주 해주는 것이 좋습니다.</p>
					</li>
				</ul>
			</div>
			<?php include_once $GP -> INC_WWW . '/footer_before.php'; ?>
		</div>
	</div>
	<?php
		include_once $GP -> INC_WWW . '/footer_ver2.php';
	?>