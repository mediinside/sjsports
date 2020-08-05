<?PHP
	include_once $_SERVER['DOCUMENT_ROOT'] . '/_init.php';
	include_once $GP -> INC_WWW . '/count_inc.php';
	$page_title = "세종스포츠정형외과";
	include_once $GP -> INC_WWW . '/head_mobile.php';
	include_once $GP -> HOME."main_lib/main_proc.php";

	$Main_Notice = Main_Notice('10');
	/*$Main_Review = Main_Review();*/

	/*$Main_Slide_Visual  = Main_Slide_New('2','pc');
	$Main_Slide_Banner  = Main_Slide_New('3','pc');*/
	// echo $_SESSION['susermobile'];
?>
	<?php include_once $GP -> INC_WWW . '/header_mobile.php'; ?>

	<!-- 컨텐츠영역 -->

	<script>
		$(document).ready(function(){
			$('.sub_head').css(
				{
					"background-image":"url('/public/images/common/img_01.jpg')",
				}
			);
		});
	</script>
	<div class="sub_head">
		<div class="gradation_bg"></div>
	</div>
	<div class="contents">
		<div class="contents_head">
			<ul class="contents_head_ul d-flex">
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
			<div class="box_style_1 text-center px40">
				<h3 class="pt40">발목염좌</h3>
				<p class="mt40">발목이 심하게 비틀리거나 접질렸을 때 발목 관절을 지탱하는<br/>인대들의 손상으로 발생하는 질환 중 하나로 ‘발목염좌’라고도 합니다.</p>
				<p class="mt20">이러한 발목의 손상이 발생하는 경우에 발목의 뼈가 순간적으로 제자리를 이탈하면서 근육과 인대가 늘어나<br/>염증이 발생하게 되고 이를 제대로 치료하지 못하는 경우에는 만성적인 발목질환으로 고착화될 수도 있습니다.</p>
				<div class="mt30"><img src="/public/images/common/img_02.jpg" alt=""></div>
			</div>
			<div class="box_style_2 p30">
				<div class="box_style_2_div box_style_2_div_left" style="background-image: url('/public/images/common/img_03.jpg');">
					<h4 class=""><i><span></span></i><strong class="">발목염좌 원인</strong></h4>
					<div class="">
						<ul class="box_style_2_ul">
							<li class="">축구나 농구 같은 과도한 운동으로 인한 경우</li>
							<li class="">길을 걷거나 발을 헛디뎌 발목을 접질렸을 경우</li>
							<li class="">하이휠 같은 높은 신발 사용으로 인한 발목 과부하인 경우</li>
						</ul>
					</div>
				</div>
				<div class="box_style_2_div box_style_2_div_right" style="background-image: url('/public/images/common/img_04.jpg');">
					<h4 class=""><i><span></span></i><strong class="">발목염좌 증상</strong></h4>
					<div class="">
						<ul class="box_style_2_ul">
							<li>손상된 복사뼈 주위의 국소적인 압통이 있습니다.</li>
							<li>급성 외상과 함께 인대 부위 위로 반상출혈이 있습니다.</li>
							<li>족관절을 수동적으로 운동시킬 때 뚜렷해지는 통증 양상이 있습니다.</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="box_style_3 p30" style="display: none;">
				<div class="" style="width: 100%; height: 100%;">
					<h3 class="box_style_3-page-title pt40">족저근막염 치료방법</h3>
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
			<div class="box_style_4 px30 pb50">
				<script>
					function box_style_4_mov_file(){
						var box_style_4_mov_fle = $('.box_style_4_mov_file').width();
						$('.box_style_4_mov_file').height(box_style_4_mov_fle*0.580357);
						console.log(box_style_4_mov_fle);
					}
					$(document).ready(function(){
						box_style_4_mov_file();
						$(window).resize(function(){
							box_style_4_mov_file();
						});
					});
				</script>
				<div class="box_style_4_head">
					<h3 class="text-center pt80"><img src="/public/images/main/h3_sjstv.png" alt=""></h3>
				</div>
				<div class="box_style_4_body pt30">
					<iframe class="box_style_4_mov_file" src="https://www.youtube.com/embed/2vJM7TwzQgc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			<div class="box_style_5 py40 px30" style="background-image: url('/public/images/common/img_06.jpg');">
				<h3 class="mt10">발목염좌 예방법</h3>
				<ul class="box_style_5_ul mt30">
					<li class="p30">
						<h4 class=""><strong class=""><span class="text-hide">1. </span>종아리 근육 늘리기</strong></h4>
						<p>10도 정도 상향으로 기울어진 발판을 준비하고, <br/>양발을 자연스럽게 벌리고 발판 위에 올라 <br/>30초간 자세를 유지하며 반복을 합니다.</p>
					</li>
					<li class="p30">
						<h4 class=""><strong class=""><span class="text-hide">2. </span>발바닥으로 탁구공 굴리기</strong></h4>
						<p>의자에 앉아 아픈 발의 발바닥 밑에 <br/>탁구공을 끼운 후 발을 올리고 2분간 <br/>탁구공을 굴리며 마사지를 합니다.</p>
					</li>
					<li class="p30">
						<h4 class=""><strong class=""><span class="text-hide">3. </span>발가락으로 수건 말기</strong></h4>
						<p>작은 수건을 바닥에 펴 두고 의자에 걸터앉아 <br/>발가락으로 수건 끝을 잡고 돌돌 말아 올리는 <br/>운동을 반복합니다.</p>
					</li>
				</ul>
			</div>
			<?php include_once $GP -> INC_WWW . '/footer_mobile_befire.php'; ?>
		</div>
	</div>
	<!-- //컨텐츠영역 -->
	<!-- 하단 QUICK -->
	<div class="quick">
		<h3 class="text-hide">퀵메뉴</h3>
		<ul class="quick_lit list-unstyled">
			<li class='p30 border_custom_left'><a href="#">병원소식</a></li>
			<li class='p30 border_custom_left'><a href="#">전문의상담</a></li>
			<li class='p30 border_custom_left'><a href="#">SJS TV</a></li>
			<li class='p30 border_custom_left'><a href="#">치료후기</a></li>
		</ul>
	</div>
	<!-- //하단 QUICK -->
	<!-- CONTACT -->
	<div class="contact px30 py40">
		<div>
			<h3>CONTECT US</h3>
			<ul>
				<li class="mb20">
					<h4><i class="tel mr20"></i><strong class="text-hide">전화번호: </strong></h4>
					<p>
						<a href="tel:0222445161" class="d-block">02.2244.5161</a>
					</p>
				</li>
				<li class="mb20">
					<h4><i class="address mr20"></i><strong class="text-hide">주소: </strong></h4>
					<address>서울특별시 광진구 능동로 209 (군자동, 세종대학교 내)<br/>대양 AI센터 1-2층</address></li>
				<li class="mb20">
					<h4>
						<i class="time mr20"></i><strong class="text-hide">진료시간: </strong>
					</h4>
					<ul>
						<li>
							<strong class="time_tit mr20">평일</strong> <span>AM 09:00 ~ PM 17:30</span>
						</li><li>
							<strong class="time_tit mr20">토요일</strong> <span>AM 09:00 ~ PM 13:00</span>
						</li><li>
							<strong class="time_tit mr20">점심시간</strong> <span>AM 13:00 ~ PM 14:30</span>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<!-- //CONTACT -->
	<?php include_once $GP -> INC_WWW . '/footer_mobile.php'; ?>
