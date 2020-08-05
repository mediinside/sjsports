<?PHP
	include_once $_SERVER['DOCUMENT_ROOT'] . '/_init.php';
	include_once $GP -> INC_WWW . '/count_inc.php';
	$page_title = "세종스포츠정형외과";
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
					"background-image":"url('/public/images/common/img_01.jpg')",
				}
			);
		});
	</script>
	<?php
		include_once $GP -> INC_WWW . '/header_ver2.php';
		include_once $GP -> INC_WWW . '/header_after.php';
	?>

	<div class="contents">
		<div class="contents_head">
			<ul class="contents_head_ul">
			    <li class="contents_head_li">
			        <a href="#"><span class="text-hide">home</span></a>
			    </li>
			    <li class="contents_head_li"><a href="#">족부</a></li>
			    <li class="contents_head_li">
			        <div class="dropdown">
			           <button class="btn_reset dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="mr10">발목염좌</span></button>
			            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
			                <li class="dropdown-item"><a href="#">발목염좌</a></li>
			                <li class="dropdown-item"><a href="#">족저근막염</a></li>
			                <li class="dropdown-item"><a href="#">무지외반증</a></li>
			            </ul>
			        </div>
			    </li>
			</ul>
		</div>
		<div class="contents_body">
			<div class="box_style_1 text-center py60">
				<h3 class="mt30">발목염좌</h3>
				<p class="mt40">발목이 심하게 비틀리거나 접질렸을 때 발목 관절을 지탱하는<br/>인대들의 손상으로 발생하는 질환 중 하나로 ‘발목염좌’라고도 합니다.</p>
				<p class="mt20">이러한 발목의 손상이 발생하는 경우에 발목의 뼈가 순간적으로 제자리를 이탈하면서 근육과 인대가 늘어나<br/>염증이 발생하게 되고 이를 제대로 치료하지 못하는 경우에는 만성적인 발목질환으로 고착화될 수도 있습니다.</p>
				<div class="mt30"><img src="/public/images/common/img_02.jpg" alt=""></div>
			</div>
			<div class="box_style_2 py60">
				<div class="box_style_2_div box_style_2_div_left" style="background-image: url('/public/images/common/img_03.jpg');">
					<h4 class="pl30"><i><span></span></i><strong class="px30">발목염좌 원인</strong></h4>
					<div class="pl30">
						<ul class="box_style_2_ul">
							<li class="">축구나 농구 같은 과도한 운동으로 인한 경우</li>
							<li class="">길을 걷거나 발을 헛디뎌 발목을 접질렸을 경우</li>
							<li class="">하이휠 같은 높은 신발 사용으로 인한 발목 과부하인 경우</li>
						</ul>
					</div>
				</div>
				<div class="box_style_2_div box_style_2_div_right" style="background-image: url('/public/images/common/img_04.jpg');">
					<h4 class="pl30"><i><span></span></i><strong class="px30">발목염좌 증상</strong></h4>
					<div class="pl30">
						<ul class="box_style_2_ul">
							<li>손상된 복사뼈 주위의 국소적인 압통이 있습니다.</li>
							<li>급성 외상과 함께 인대 부위 위로 반상출혈이 있습니다.</li>
							<li>족관절을 수동적으로 운동시킬 때 뚜렷해지는 통증 양상이 있습니다.</li>
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
									<h3 class="box_style_3-page-title my50 ">발목염좌 치료방법1</h3>
									<h4>1인대강화주사1</h4>
									<p>1인체에 무해하고 인대보다 삼투압이 높은 물질을 직접 주입시켜 인대를<br/>새롭게 재생시키는 치료법입니다.<br/>약해진 인대를 튼튼하게 만들어 운동기능을 회복시키고 만성통증의 원인을<br/>치료하므로 일시적인 통증 억제 주사와는 다릅니다.</p>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="box_style_3-left">
									<h3 class="box_style_3-page-title my50 ">발목염좌 치료방법2</h3>
									<h4>2인대강화주사2</h4>
									<p>2인체에 무해하고 인대보다 삼투압이 높은 물질을 직접 주입시켜 인대를<br/>새롭게 재생시키는 치료법입니다.<br/>약해진 인대를 튼튼하게 만들어 운동기능을 회복시키고 만성통증의 원인을<br/>치료하므로 일시적인 통증 억제 주사와는 다릅니다.</p>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="box_style_3-left">
									<h3 class="box_style_3-page-title my50 ">발목염좌 치료방법3</h3>
									<h4>3인대강화주사3</h4>
									<p>3인체에 무해하고 인대보다 삼투압이 높은 물질을 직접 주입시켜 인대를<br/>새롭게 재생시키는 치료법입니다.<br/>약해진 인대를 튼튼하게 만들어 운동기능을 회복시키고 만성통증의 원인을<br/>치료하므로 일시적인 통증 억제 주사와는 다릅니다.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-container gallery-top gallery-top_ctn06">
						<div class="swiper-wrapper">
							<div class="swiper-slide" style="background-image:url(/public/images/common/img_05.jpg)">
								<div class="blackcover"></div>
							</div>
							<div class="swiper-slide" style="background-image:url(/public/images/common/img_05.jpg)">
								<div class="blackcover"></div>
							</div>
							<div class="swiper-slide" style="background-image:url(/public/images/common/img_05.jpg)">
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
						loopedSlides: 2, //looped slides should be the sameS
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


			<div class="box_style_5 py60" style="background-image: url('/public/images/common/img_06.jpg');">
				<h3>발목염좌 예방법</h3>
				<ul class="box_style_5_ul mt50">
					<li>
						<h4 class="mt40 py10"><strong class="mt10"><span class="text-hide">1. </span>종아리 근육 늘리기</strong></h4>
						<p>10도 정도 상향으로 기울어진 발판을 준비하고, <br/>양발을 자연스럽게 벌리고 발판 위에 올라 <br/>30초간 자세를 유지하며 반복을 합니다.</p>
					</li>
					<li>
						<h4 class="mt40 py10"><strong class="mt10"><span class="text-hide">2. </span>발바닥으로 탁구공 굴리기</strong></h4>
						<p>의자에 앉아 아픈 발의 발바닥 밑에 <br/>탁구공을 끼운 후 발을 올리고 2분간 <br/>탁구공을 굴리며 마사지를 합니다.</p>
					</li>
					<li>
						<h4 class="mt40 py10"><strong class="mt10"><span class="text-hide">3. </span>발가락으로 수건 말기</strong></h4>
						<p>작은 수건을 바닥에 펴 두고 의자에 걸터앉아 <br/>발가락으로 수건 끝을 잡고 돌돌 말아 올리는 <br/>운동을 반복합니다.</p>
					</li>
				</ul>
			</div>
			<div class="box_style_6" style="background-image: url('/public/images/common/img_07.jpg');">
				<h4><strong class="light_fw">환자분들 마음의 상처까지도</strong><strong class="medium_fw">들여본다는 정성으로 치료에 임할 것입니다.</strong></h4>
				<p class="mt40">저희 세종스포츠정형외과는 환자를 내 가족처럼 생각하고 <br>가장 적합한 최선의 치료를 선택한다는 신념으로 더욱 힘차게 전진하겠습니다.</p>
				<ul class="mt90">
					<li><a href="#"><span>스포츠의학 클리닉</span></a></li>
					<li><a href="#"><span>정형외과/내과</span></a></li>
					<li><a href="#"><span>재활/운동 치료센터</span></a></li>
				</ul>
			</div>
			<?php include_once $GP -> INC_WWW . '/footer_before.php'; ?>
		</div>
	</div>
	<?php
		include_once $GP -> INC_WWW . '/footer_ver2.php';
	?>