<?PHP
	include_once $_SERVER['DOCUMENT_ROOT'] . '/_init.php';
	include_once $GP -> INC_WWW . '/count_inc.php';
	$top_dep_title = "무릎";
	$page_title = "반월상연골파열";
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
				<h3 class="mt30">반월상연골파열</h3>
				<p class="mt40">반월상 연골판이란 자동차 타이어와 같은 역할을 합니다. </p>
				<p class="mt20">반월상연골은 경골과 대퇴골의 관절면 사이에 위치해 관절면에 작용하는 하중의 전달 및 지지,<br/>충격흡수, 관절 안정성 유지, 관절의 일치성에 기여를 하며 윤활작용을 통해 관절의 마모방지 역할을 하는<br/>무릎에 매우 중요한 기능을 하는 구조물입니다. 반달 모양의 무릎 구조물로, 외측과 내측에 각각 존재합니다. </p>
				<div class="mt30"><img src="/public/images/common/con_disease_knee_sub02_img01.jpg" alt=""></div>
			</div>
			<div class="box_style_2 py60">
				<div class="box_style_2_div box_style_2_div_left" style="background-image: url('/public/images/common/con_cause_knee_sub02_img01.jpg');">
					<h4 class="pl30"><i><span></span></i><strong class="px30">반월상연골파열 원인</strong></h4>
					<div class="pl30">
						<ul class="box_style_2_ul">
							<li class="">축구와 농구 같은 운동을 하다가 무릎이 비틀리는 손상에 의한 경우</li>
							<li class="">앉아서 일하거나 비슷한 자세의 스포츠를 즐기는 경우나 미끄러지는 경우</li>
							<li class="">퇴행성 변화로 인하여 자연적으로 발생하는 경우</li>
						</ul>
					</div>
				</div>
				<div class="box_style_2_div box_style_2_div_right" style="background-image: url('/public/images/common/con_symptom_knee_sub02_img01.jpg');">
					<h4 class="pl30"><i><span></span></i><strong class="px30">반월상연골파열 증상</strong></h4>
					<div class="pl30">
						<ul class="box_style_2_ul">
							<li>특별한 외상력 없이도 만성적인 관절의 붓기와 무릎 통증이 나타납니다.</li>
							<li>걸을 때 무릎에 힘이 들어가지 않고 무릎 하단부에 통증이 발생합니다.</li>
							<li>무릎을 제대로 펴거나 굽히기가 힘듭니다.</li>
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
									<h3 class="box_style_3-page-title mt50 mb20">비수술적 치료법</h3>
									<p>연골의 손상 상태가 심하지 않고, 찢어진 부분이 작다면 염증을 완화하는 약물/물리치료 등을 통해 증상이 호전될 수 있습니다.</p>
									<h4 class="mt20">프롤로 주사치료</h4>
									<p>인체에 무해하고 삼투압이 높은 약물이나 DNA 주사 등을 직접 주입시켜 인대를 재생을 도와줄 수 있습니다.</p>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="box_style_3-left">
									<h3 class="box_style_3-page-title mt50 mb20">비수술적 치료법</h3>
									<p>연골의 손상 상태가 심하지 않고, 찢어진 부분이 작다면 염증을 완화하는 약물/물리치료 등을 통해 증상이 호전될 수 있습니다.</p>
									<h4 class="mt20">물리치료 </h4>
									<p>통증을 완화시키거나 조직의 치유를 촉진시키고, 신체의 움직임을 향상시키기 위해 열이나 얼음, 광선, 전기, 전자기파, 초음파, 레이저, 기계적인 힘 등을 이용하는 치료법입니다.</p>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="box_style_3-left">
									<h3 class="box_style_3-page-title mt50 mb20">비수술적 치료법</h3>
									<p>연골의 손상 상태가 심하지 않고, 찢어진 부분이 작다면 염증을 완화하는 약물/물리치료 등을 통해 증상이 호전될 수 있습니다.</p>
									<h4 class="mt20">도수, 근력 재활치료 </h4>
									<p>통증 및 붓기가 반복되지 않거나 수술을 원하지 않는 경우 무릎 주위 근력과 평형감각 등을 특별히 훈련시켜 재손상 및 추가 손상을 막을 수 있도록 합니다.</p>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="box_style_3-left">
									<h3 class="box_style_3-page-title mt50 mb20">수술적 치료법</h3>
									<p>보존적 치료만으로 호전이 어렵거나, 일상생활 자체가 어렵다면 관절 내시경을 통해 봉합술 또는 부분 절제술, 반월상 연골판 이식술을 시행할 수 있습니다. </p>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-container gallery-top gallery-top_ctn06">
						<div class="swiper-wrapper">
							<div class="swiper-slide" style="background-image:url(/public/images/common/subcon_care_img_200319_07.jpg)">
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
					<iframe src="https://www.youtube.com/embed/JfkvXHD7Qlc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>


			<div class="box_style_5 py60" style="background-image: url('/public/images/common/con_pr_knee_sub01_img01.jpg');">
				<h3>반월상연골파열 예방법</h3>
				<ul class="box_style_5_ul mt50">
					<li>
						<h4 class="mt40 py10"><strong class="mt10"><span class="text-hide">1. </span>스트레칭</strong></h4>
						<p>관절을 꺾고 비트는 동작보다는<br/>유연성과 가동성을 올려줄 수 있는<br/>동작으로 산행 전, 후로 약 10분 이상<br/>시행해주는 것이 좋습니다.</p>
					</li>
					<li>
						<h4 class="mt40 py10"><strong class="mt10"><span class="text-hide">2. </span>체중감량</strong></h4>
						<p>상체 등 체중이 많이 나갈수록 무릎이나<br/>발목 관절에 가해지는 부담이 크기때문에<br/>비만을 예방하는 것이 좋습니다.</p>
					</li>
					<li>
						<h4 class="mt40 py10"><strong class="mt10"><span class="text-hide">3. </span>적절한 운동</strong></h4>
						<p>고정식 자전거 타기, 수영 등과 같은<br/> 관절에 무리가 없는 운동을<br/>하는 것이 좋습니다.</p>
					</li>
				</ul>
			</div>
			<?php include_once $GP -> INC_WWW . '/footer_before.php'; ?>
		</div>
	</div>
	<?php
		include_once $GP -> INC_WWW . '/footer_ver2.php';
	?>