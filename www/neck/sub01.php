<?PHP
	include_once $_SERVER['DOCUMENT_ROOT'] . '/_init.php';
	include_once $GP -> INC_WWW . '/count_inc.php';
	$top_dep_title = "목/허리";
	$page_title = "목디스크";
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
				<h3 class="mt30">목디스크</h3>
				<p class="mt40">우리 목은 7개의 뼈로 이루어져 있으며 뼈 사이에는 추간판(디스크)이 있습니다.</p>
				<p class="mt20">추간판은 목의 움직임을 부드럽게하고 무게와 충격을 견뎌낼 수 있도록 수분을 함유하고 있는데<br/>디스크는 이러한 추간판이 노화되면서 수분이 손실되고 추간판을 싸고 있던 막이 손상되어 섬유가 찢어져<br/>안에 들어있던 내용물인 수핵이 빠져나와 신경을 누르면서 발생합니다.</p>
				<div class="mt30"><img src="/public/images/common/con_disease_neck_sub01_img01.jpg" alt=""></div>
			</div>
			<div class="box_style_2 py60">
				<div class="box_style_2_div box_style_2_div_left" style="background-image: url('/public/images/common/con_cause_neck_sub01_img01.jpg');">
					<h4 class="pl30"><i><span></span></i><strong class="px30">목디스크 원인</strong></h4>
					<div class="pl30">
						<ul class="box_style_2_ul">
							<li class="">장시간 머리와 목을 앞으로 내미는 습관</li>
							<li class="">컴퓨터 및 스마트폰 사용 시 자세가 올바르지 않은 경우</li>
							<li class="">직접적인 외상인 경우 (교통사고 및 넘어지거나 부딪히는 등)</li>
						</ul>
					</div>
				</div>
				<div class="box_style_2_div box_style_2_div_right" style="background-image: url('/public/images/common/con_symptom_neck_sub01_img01.jpg');">
					<h4 class="pl30"><i><span></span></i><strong class="px30">목디스크 증상</strong></h4>
					<div class="pl30">
						<ul class="box_style_2_ul">
							<li>목이 뻐근하거나 호전되는 것이 반복되며, 원인 모를 두통이 동반됩니다.</li>
							<li>어깨가 쑤시듯이 아프고, 팔이 당기는 증상이 나타납니다.</li>
							<li>신경압박이 심할 경우, 보행장애와 대소면 장애가 나타납니다.</li>
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
									<h4>경막외신경성형술</h4>
									<p>주사바늘이 달린 특수 카테터를 꼬리뼈를 통해 삽입시켜 신경을 압박하고<br/>있는 부위를 치료하는 방법입니다.</p>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="box_style_3-left">
									<h3 class="box_style_3-page-title my50 ">비수술적 치료법</h3>
									<h4>고주파수핵감압술</h4>
									<p>고주파 열에너지를 방출하는 특수 바늘을 삽입하여 디스크 내에 열을 가해<br/>탈출된 디스크를 줄어들게 하는 치료법입니다.</p>
								</div>
							</div>
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
									<h4>Macro FIMS</h4>
									<p>특수바늘을 신경공으로 삽입하여 유착을 풀어주어 신경의 기능을<br/>회복시키고 염증, 부종을 가라앉혀주는 시술법입니다.</p>
								</div>
							</div>																													
						</div>
					</div>
					<div class="swiper-container gallery-top gallery-top_ctn06">
						<div class="swiper-wrapper">
							<div class="swiper-slide" style="background-image:url(/public/images/common/subcon_care_img01.jpg)">
								<div class="blackcover"></div>
							</div>
							<div class="swiper-slide" style="background-image:url(/public/images/common/subcon_care_img02.jpg)">
								<div class="blackcover"></div>
							</div>
							<div class="swiper-slide" style="background-image:url(/public/images/common/subcon_care_img03.jpg)">
								<div class="blackcover"></div>
							</div>
							<div class="swiper-slide" style="background-image:url(/public/images/common/subcon_care_img04.jpg)">
								<div class="blackcover"></div>
							</div>	>																											
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
				<h3>목디스크 예방법</h3>
				<ul class="box_style_5_ul mt50">
					<li>
						<h4 class="mt40 py10"><strong class="mt10"><span class="text-hide">1. </span>어깨 운동하기</strong></h4>
						<p>바르게 않은 자세에서 숨을 고르며<br/>양쪽 어깨를 위로 올렸다가<br/>아래로 툭 떨어트리는 동작을 반복합니다.</p>
					</li>
					<li>
						<h4 class="mt40 py10"><strong class="mt10"><span class="text-hide">2. </span>손바닥으로 머리 밀기</strong></h4>
						<p>깍지 낀 손을 뒷머리에 대고 손을 앞으로<br/>살짝 밀어주세요. 이때 머리가 밀리지 않게<br/>힘을 줘서 버티면서 동작을 반복합니다.</p>
					</li>
					<li>
						<h4 class="mt40 py10"><strong class="mt10"><span class="text-hide">3. </span>턱 당기기</strong></h4>
						<p>벽에 등을 바로 붙이고 바르게 선<br/>자세에서 턱을 당긴 후 튀통수를<br/>벽에 밀어주는 동작을 반복합니다.</p>
					</li>
				</ul>
			</div>
			<?php include_once $GP -> INC_WWW . '/footer_before.php'; ?>
		</div>
	</div>
	<?php
		include_once $GP -> INC_WWW . '/footer_ver2.php';
	?>