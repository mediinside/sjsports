<?PHP

	include_once $_SERVER['DOCUMENT_ROOT'] . '/_init.php';
	include_once $GP -> INC_WWW . '/count_inc.php';
	$page_title = "세종스포츠정형외과";
	include_once $GP -> INC_WWW . '/head_mobile.php';
	include_once $GP -> HOME."main_lib/main_proc.php";

	$Main_Notice_Mobile = Main_Notice_Mobile('10');
	/*$Main_Review = Main_Review();*/

	/*$Main_Slide_Visual  = Main_Slide_New('2','pc');
	$Main_Slide_Banner  = Main_Slide_New('3','pc');*/
	// echo $_SESSION['susermobile'];
?>
<?php include_once $GP -> INC_WWW . '/header_mobile.php'; ?>
	<!-- 상단 비쥬얼 -->

	<style>
		.view>li:nth-child(1) .bg span {
			background-image: url('/public/images/main/mv01.jpg');
		}
		.view>li:nth-child(2) .bg span {
			background-image: url('/public/images/main/mv02.jpg');
		}
		.view>li:nth-child(3) .bg span {
			background-image: url('/public/images/main/mv03.jpg');
		}
		.view>li:nth-child(4) .bg span {
			background-image: url('/public/images/main/mv04.jpg');
		}

.main_slide{width: 100%; position: relative;}
.main_slide .gallery-top{width: 100%; height: 100%;}
.main_slide .gallery-top .swiper-wrapper{width: 100%; height: 100%;}
.main_slide .gallery-top .swiper-wrapper .swiper-slide{width: 100%; height: 100%; background-position: center; -webkit-background-size: cover ; background-size: cover;}
.main_slide .gallery-top .swiper-wrapper .swiper-slide .text-wrap{width: 90%; left: 25px; transform: translate(0, -50%); position: absolute; z-index: 2; top: 50%; color: #fff; }
.main_slide .gallery-top .swiper-wrapper .swiper-slide .text-wrap .text-top{color: #fff; font-size: 1.25em; line-height: 1.5em; font-weight: 600; position: relative; display: block; margin-top: 1em;-ms-word-break: keep-all; word-break: keep-all; left: 0;}
.main_slide .gallery-top .swiper-wrapper .swiper-slide .text-wrap em{font-size: 2em; display: block; text-transform: uppercase; font-weight: 600;}
.main_slide .gallery-top .swiper-wrapper .swiper-slide .text-wrap strong{font-size: 1.8em; line-height: 1.5em; margin-top: 1em; word-break: keep-all !important; left: 0; font-family: "Ubuntu"; font-weight: 500; color: #beff00;}

.main_slide .main_slide_ctrl{width: 100%; height: 5em; position: absolute; bottom: 0; left: 0; background-color: rgba(18, 31, 64, 0.9); z-index: 50; color: #fff; display: flex; align-items: center; justify-content: space-between;}
.main_slide .main_slide_ctrl p{margin: 0 1em; font-size: 1em;}
.main_slide .main_slide_ctrl .control{width: 40%; height: 100%; text-align: right; display: flex; align-items: center; justify-content: flex-end; margin: 0 1em;}
.main_slide .main_slide_ctrl .control button{margin: 0 1em;}



	</style>

	<script>
		$(document).ready(function(){
			var win_height = $(window).height();
			$('.main_slide').height(win_height);
		});
	</script>

  <!-- Swiper -->
  <div class="main_slide">
  	<div class="swiper-container gallery-top">
  	    <div class="swiper-wrapper">
  	        <div class="swiper-slide" style="background-image:url('/public/images/main/mv01.jpg')">
				<div class="text-wrap">
	                    <span class="text-top">SPORTS PERFORMANCE CENTER</span>
					<em>'다시 뛸 수 있을까?'</em>
					<strong>RETURN TO PLAY!</strong>
				</div>
				<div class="main_slide_ctrl">
					<p>다시 뛸 수 있을까?</p>
					<div class="control">
						<button type="button" class="btn-direction-prev">←</button>
						<button type="button" class="btn-direction-next">→</button>
					</div>
				</div>

			</div>
  	        <div class="swiper-slide" style="background-image:url('/public/images/main/mv02.jpg')">
				<div class="text-wrap">
					<span class="text-top">SPORTS PERFORMANCE CENTER</span>
					<em>'다시 던질 수 있을까?'</em>
					<strong>RETURN TO PLAY!</strong>
				</div>
				<div class="main_slide_ctrl">
					<p>다시 던질 수 있을까?</p>
					<div class="control">
						<button type="button" class="btn-direction-prev">←</button>
						<button type="button" class="btn-direction-next">→</button>
					</div>
				</div>
			</div>
  	        <div class="swiper-slide" style="background-image:url('/public/images/main/mv03.jpg')">
				<div class="text-wrap">
					<span class="text-top">SPORTS PERFORMANCE CENTER</span>
					<em>'다시 오를 수 있을까?'</em>
					<strong>RETURN TO PLAY!</strong>
				</div>
				<div class="main_slide_ctrl">
					<p>다시 오를 수 있을까?</p>
					<div class="control">
						<button type="button" class="btn-direction-prev">←</button>
						<button type="button" class="btn-direction-next">→</button>
					</div>
				</div>
			</div>
  	        <div class="swiper-slide" style="background-image:url('/public/images/main/mv04.jpg')">
				<div class="text-wrap">
					<span class="text-top"></span>
					<em>'일상의 걸음도 스포츠다!'</em>
					<strong>RETURN TO PLAY!</strong>
				</div>
				<div class="main_slide_ctrl">
					<p>'일상의 걸음도 스포츠다!'</p>
					<div class="control">
						<button type="button" class="btn-direction-prev">←</button>
						<button type="button" class="btn-direction-next">→</button>
					</div>
				</div>
			</div>
  	    </div>
  	</div>
  </div>


  <!-- Initialize Swiper -->
  <script>

	var swiper = new Swiper('.swiper-container', {
		spaceBetween: 10,
		effect: 'fade',
		loop:true,

		noSwiping: false,
		loopedSlides: 5, //looped slides should be the same
	//	pagination: {
	//		el: '.swiper-pagination',
	//		clickable: true,
	//	},
		navigation: {
			nextEl: '.btn-direction-prev',
			prevEl: '.btn-direction-next',
		},

  autoplay: {
    delay: 3000,
  },

	});
  </script>
	<!-- <div class="visual-wrap">
		<ul class="view">
			<li class="on">
				<div class="text-wrap">
	                    <span class="text-top">SPORTS PERFORMANCE CENTER</span>
					<em>'다시 뛸 수 있을까?'</em>
					<strong>RETURN TO PLAY!</strong>
				</div>
			</li>
			<li>
				<div class="text-wrap">
					<span class="text-top">SPORTS PERFORMANCE CENTER</span>
					<em>'다시 던질 수 있을까?'</em>
					<strong>RETURN TO PLAY!</strong>
				</div>
			</li>
			<li>
				<div class="text-wrap">
					<span class="text-top">SPORTS PERFORMANCE CENTER</span>
					<em>'다시 오를 수 있을까?'</em>
					<strong>RETURN TO PLAY!</strong>
				</div>
			</li>
			<li>
				<div class="text-wrap">
					<span class="text-top"></span>
					<em>'일상의 걸음도 스포츠다!'</em>
					<strong>RETURN TO PLAY!</strong>
				</div>
			</li>
		</ul>
		<div class="info-wrap">
			<a href="#" class="btn-scroll-down">
				<div class="scroll-downs">
					<div class="mousey">
						<div class="scroller"></div>
					</div>
				</div>
			</a>
			<div class="inner">
				<ul class="text">
					<li class="on">다시 뛸 수 있을까?</li>
					<li>다시 던질 수 있을까?</li>
					<li>다시 오를 수 있을까?</li>
					<li>일상의 걸음도 스포츠다!</li>
				</ul>
				<div class="count"> <span class="current">1</span> <span class="total">4</span>
				</div>
				<div class="control">
					<button type="button" class="btn-direction prev"></button>
					<div class="circleSvg">
						<svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
							<circle class="circle" cx="50" cy="50" r="50"></circle>
						</svg>
						<button type="button" class="play"></button>
					</div>
					<button type="button" class="btn-direction next"></button>
				</div>
			</div>
		</div>
	</div> -->
	<!-- 상단 비쥬얼 -->
	<!-- 컨텐츠영역 -->
	<div class="contents">
		<div class="main_1_mo px30">
			<script>
				//main_1_mo script
				function dr_list_prev(){
					var list = $('.dr_list li').eq(0).html();
					$('.dr_list').append("<li>"+list+"</li>");
					 $('.dr_list li').eq(0).remove();
				}
				function dr_list_next(){
					var main_1_mo_dr_list = $('.main_1_mo .dr_list li').length;
					var list = $('.dr_list li').eq(main_1_mo_dr_list-1).html();
					$('.dr_list').prepend("<li>"+list+"</li>");
					$('.dr_list li').eq(main_1_mo_dr_list).remove();
				}

				function main_1_dr_mov_file(){
					var dr_mov_file = $('.dr_mov_file').width();
					$('.dr_mov_file').height(dr_mov_file*0.580357);
					console.log(main_1_dr_mov_file);
				}
				$(document).ready(function(){
					main_1_dr_mov_file();
					$(window).resize(function(){
						main_1_dr_mov_file();
					});
				});

			</script>
			<h3 class="pt70"><small class="d-block mb10">차별화된 스프츠의학 클리닉</small><strong>MEET OUR DOCTOR</strong></h3>
			<div class="main_1_mo_ctr">
				<button type="button" class="btn_reset btn_ctr btn_ctr_prev" onclick="dr_list_prev()"><span class="text-hide">Prev</span></button>
				<button type="button" class="btn_reset btn_ctr btn_ctr_next" onclick="dr_list_next()"><span class="text-hide">Next</span></button>
			</div>
			<div class="dr_list_cover">
				<ul class="dr_list">
					<li>
						<div class="dr_nm">DR. JINSU, KIM</div>
						<div class="dr_comments"> “국가대표 주치의” 스포츠 의학을 선두하다. </div>
						<div class="dr_image"><img src="/public/images/main/doctor_po03.png" alt="사진"></div>
						<div class="dr_info">
							<p> 족부/족관절 정형외과<br/>
								스프츠외상: 하지 골절, 근육, 인대, 연골손상<br/>
								발목관절경, 인공관절 무지외반증, 당뇨병성 족부 질환 등
							</p>
						</div>
						<div class="dr_mov">
							<a href="https://youtu.be/0SOaXleKMOc" target="_blank"><img src="/public/images/main/main_utube_thum_kim.jpg" alt="김진수 원장"></a>
						</div>
					</li>
					<li>
						<div class="dr_nm">DR. MINSEOK, CHA</div>
						<div class="dr_comments">“통증치료의 달인” 빠른 회복을 약속하다.</div>
						<div class="dr_image"><img src="/public/images/main/doctor_po02.png" alt="사진"></div>
						<div class="dr_info">
							<p>
								관절내시경, 인공관절치환술 (고관절, 무릎, 발목)<br/>
								고관절, 무릎, 발 및 발목질환, 발기형 (단지증, 무지외반증, 요족 등)<br/>
								스포츠손상 및 재활, 당뇨질환
							</p>
						</div>
						<div class="dr_mov">
							<a href="https://youtu.be/2vJM7TwzQgc" target="_blank"><img src="/public/images/main/main_utube_thum_cha.jpg" alt="차민석 원장"></a>
						</div>
					</li>
					<li>
						<div class="dr_nm">DR. JEONGSEOP, KUM</div>
						<div class="dr_comments">“어깨 명의” 환자맞춤형 치료를 실현하다.</div>
						<div class="dr_image"><img src="/public/images/main/doctor_po01.png" alt="사진"></div>
						<div class="dr_info">
							<p>
								관절내시경<br/>
								어깨, 팔꿈치, 상지, 무릎 등의 관절질환 수술<br/>
								통증 및 스포츠손상 치료 (수술사례 5,000례)
							</p>
						</div>
						<div class="dr_mov">
							<a href="https://youtu.be/O_wYWzJhdeI" target="_blank"><img src="/public/images/main/main_utube_thum_kum.jpg" alt="금정섭 원장"></a>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<div class="main_2_mo">
			<div class="main_2_mo_head px30">
				<h3 class="text-center pt60"><strong class="d-inline-block text-hide">SJS TV</strong></h3>
			</div>
			<div class="main_2_mo_body">
			    <!-- Swiper -->
			    <div class="swiper-container swiper-container_main_2_mo">
			        <div class="swiper-wrapper">
			            <div class="swiper-slide">
							<div class="left_side px30">
								<h4><strong class="index_no">01</strong><strong class="txt d-block">어깨 탈구</strong></h4>
								<p class="sjstv_q pt10">빠진 어깨를 스스로 끼운다고?<br/>어깨 탈구 치료방법은?</p>
								<p class="sjstv_a pt10">습관적으로 어깨가 탈구되는 분들 중 스스로 어깨를 끼우는<br/>분들도 계실 텐데요.</p>
								<a href="/m/club/page03.php" class="d-inline-block mt60"><img src="/public/images/common/readmore_img_01.png" alt="READ MORE"></a>
								<div class="swiper-pagination swiper-pagination_main_2_mo"></div>
								<div class="swiper-button-next swiper-button-next_main_2_mo"></div>
								<div class="swiper-button-prev swiper-button-prev_main_2_mo"></div>
							</div>
							<div class="right_side pt30">
								<a href="https://youtu.be/6lYqy8IYR0A" target="_blank" class="w-100"><img src="/public/images/main/sjstv_01.jpg" alt="이미지" class="w-100"></a>
							</div>
			            </div>
			            <div class="swiper-slide">
							<div class="left_side px30">
								<h4><strong class="index_no">02</strong><strong class="txt d-block">상부관절와순파열</strong></h4>
								<p class="sjstv_q pt40">야구선수라면 의심해볼 질환!<br/>상부관절와순파열(SLAP병변)</p>
								<p class="sjstv_a pt10">가만히 있을 때는 괜찮은데 어깨를 드는 특정 동작에서만<br/>어깨 통증을 느끼시는 분들이 있으시죠.</p>
								<a href="/m/club/page03.php" class="d-inline-block mt60"><img src="/public/images/common/readmore_img_01.png" alt="READ MORE"></a>
								<div class="swiper-pagination swiper-pagination_main_2_mo"></div>
								<div class="swiper-button-next swiper-button-next_main_2_mo"></div>
								<div class="swiper-button-prev swiper-button-prev_main_2_mo"></div>
							</div>
							<div class="right_side pt30">
								<a href="https://youtu.be/JKyoCDKoP7Q" target="_blank" class="w-100"><img src="/public/images/main/sjstv_02.jpg" alt="이미지" class="w-100"></a>
							</div>
			            </div>
			            <div class="swiper-slide">
							<div class="left_side px30">
								<h4><strong class="index_no">03</strong><strong class="txt d-block">회전근개파열</strong></h4>
								<p class="sjstv_q pt40">어깨가 아파 누울 수 없는<br/> 회전근개파열!</p>
								<p class="sjstv_a pt10">팔을 뒤로 돌릴 때, 팔이 올라가지 않으면서 통증이 심해진<br/>경우가 있으신가요?</p>
								<a href="/m/club/page03.php" class="d-inline-block mt60"><img src="/public/images/common/readmore_img_01.png" alt="READ MORE"></a>
								<div class="swiper-pagination swiper-pagination_main_2_mo"></div>
								<div class="swiper-button-next swiper-button-next_main_2_mo"></div>
								<div class="swiper-button-prev swiper-button-prev_main_2_mo"></div>
							</div>
							<div class="right_side pt30">
								<a href="https://youtu.be/OiPhbbzKh0U" target="_blank" class="w-100"><img src="/public/images/main/sjstv_03.jpg" alt="이미지" class="w-100"></a>
							</div>
			            </div>
			            <div class="swiper-slide">
							<div class="left_side px30">
								<h4><strong class="index_no">04</strong><strong class="txt d-block">반월상연골파열</strong></h4>
								<p class="sjstv_q pt40">운동 중 생긴 무릎 통증,<br/> 혹시 반월상연골파열?!</p>
								<p class="sjstv_a pt10">반월상연골파열은 급격한 방향 전환을 많이 하는 농구,<br/>축구, 야구 등의 운동을 할 때 많이 발생하게 되는데요.</p>
								<a href="/m/club/page03.php" class="d-inline-block mt60"><img src="/public/images/common/readmore_img_01.png" alt="READ MORE"></a>
								<div class="swiper-pagination swiper-pagination_main_2_mo"></div>
								<div class="swiper-button-next swiper-button-next_main_2_mo"></div>
								<div class="swiper-button-prev swiper-button-prev_main_2_mo"></div>
							</div>
							<div class="right_side pt30">
								<a href="https://youtu.be/JfkvXHD7Qlc" target="_blank" class="w-100"><img src="/public/images/main/sjstv_04.jpg" alt="이미지" class="w-100"></a>
							</div>
			            </div>
			            <div class="swiper-slide">
							<div class="left_side px30">
								<h4><strong class="index_no">05</strong><strong class="txt d-block">베이커낭종</strong></h4>
								<p class="sjstv_q pt40">무릎 뒤에 혹이 생겼다?!<br/> 차민석 원장이 알려드립니다! </p>
								<p class="sjstv_a pt10">연골판 손상을 입은 경우 나타날 수 있는 베이커낭종!<br/>무릎 뒤 오금에 물혹이 생겼다면 베이커낭종일 수도 있습니다.</p>
								<a href="/m/club/page03.php" class="d-inline-block mt60"><img src="/public/images/common/readmore_img_01.png" alt="READ MORE"></a>
								<div class="swiper-pagination swiper-pagination_main_2_mo"></div>
								<div class="swiper-button-next swiper-button-next_main_2_mo"></div>
								<div class="swiper-button-prev swiper-button-prev_main_2_mo"></div>
							</div>
							<div class="right_side pt30">
								<a href="https://youtu.be/-_lgYdqQFYI" target="_blank" class="w-100"><img src="/public/images/main/sjstv_05.jpg" alt="이미지" class="w-100"></a>
							</div>
			            </div>
			            <div class="swiper-slide">
							<div class="left_side px30">
								<h4><strong class="index_no">06</strong><strong class="txt d-block">십자인대파열</strong></h4>
								<p class="sjstv_q pt40">무릎에서 '퍽!'소리가!!<br/> 복귀 가능할까? </p>
								<p class="sjstv_a pt10">축구와 배드민턴에서 많이  발생하는 십자인대파열!<br/>십자인대파열은 관절염으로 진행할 수도 있는 질환인데요.</p>
								<a href="/m/club/page03.php" class="d-inline-block mt60"><img src="/public/images/common/readmore_img_01.png" alt="READ MORE"></a>
								<div class="swiper-pagination swiper-pagination_main_2_mo"></div>
								<div class="swiper-button-next swiper-button-next_main_2_mo"></div>
								<div class="swiper-button-prev swiper-button-prev_main_2_mo"></div>
							</div>
							<div class="right_side pt30">
								<a href="https://youtu.be/XD_BppMMKww" target="_blank" class="w-100"><img src="/public/images/main/sjstv_06.jpg" alt="이미지" class="w-100"></a>
							</div>
			            </div>
			            <div class="swiper-slide">
							<div class="left_side px30">
								<h4><strong class="index_no">07</strong><strong class="txt d-block">퇴행성관절염</strong></h4>
								<p class="sjstv_q pt40">나이 불문 퇴행성관절염!<br/> 통증이 있다면 혹시 나도?!</p>
								<p class="sjstv_a pt10">최근 스포츠 활동을 하는 사람들이 많아지면서<br/>젊은 층에서도 퇴행성 관절염이 빈번하게 발생하는데요.</p>
								<a href="/m/club/page03.php" class="d-inline-block mt60"><img src="/public/images/common/readmore_img_01.png" alt="READ MORE"></a>
								<div class="swiper-pagination swiper-pagination_main_2_mo"></div>
								<div class="swiper-button-next swiper-button-next_main_2_mo"></div>
								<div class="swiper-button-prev swiper-button-prev_main_2_mo"></div>
							</div>
							<div class="right_side pt30">
								<a href="https://youtu.be/Kt-TD0OesXI" target="_blank" class="w-100"><img src="/public/images/main/sjstv_07.jpg" alt="이미지" class="w-100"></a>
							</div>
			            </div>
			            <div class="swiper-slide">
							<div class="left_side px30">
								<h4><strong class="index_no">08</strong><strong class="txt d-block">후방충돌증후군</strong></h4>
								<p class="sjstv_q pt40">발목 뒤쪽이 붓고<br/> 힘이 빠지시나요?!</p>
								<p class="sjstv_a pt10">발목 관절 뒷부분에 통증이 있지만,<br/>아킬레스건이 아프다고 착각하시는 분들이 계시는데요</p>
								<a href="/m/club/page03.php" class="d-inline-block mt60"><img src="/public/images/common/readmore_img_01.png" alt="READ MORE"></a>
								<div class="swiper-pagination swiper-pagination_main_2_mo"></div>
								<div class="swiper-button-next swiper-button-next_main_2_mo"></div>
								<div class="swiper-button-prev swiper-button-prev_main_2_mo"></div>
							</div>
							<div class="right_side pt30">
								<a href="https://youtu.be/kEz-1uq0ZP8" target="_blank" class="w-100"><img src="/public/images/main/sjstv_08.jpg" alt="이미지" class="w-100"></a>
							</div>
			            </div>
			            <div class="swiper-slide">
							<div class="left_side px30">
								<h4><strong class="index_no">09</strong><strong class="txt d-block">족저근막염</strong></h4>
								<p class="sjstv_q pt40">이제 그만~!<br/> 치료, 예방 방법 알려드립니다!</p>
								<p class="sjstv_a pt10"> 무조건 수술을 해야 할까요? 그렇지 않다는 사실!<br/>비수술 치료로도 통증과 이별할 수 있습니다.</p>
								<a href="/m/club/page03.php" class="d-inline-block mt60"><img src="/public/images/common/readmore_img_01.png" alt="READ MORE"></a>
								<div class="swiper-pagination swiper-pagination_main_2_mo"></div>
								<div class="swiper-button-next swiper-button-next_main_2_mo"></div>
								<div class="swiper-button-prev swiper-button-prev_main_2_mo"></div>
							</div>
							<div class="right_side pt30">
								<a href="https://youtu.be/bdUydG3wOnA" target="_blank" class="w-100"><img src="/public/images/main/sjstv_09.jpg" alt="이미지" class="w-100"></a>
							</div>
			            </div>
			        </div>
			        <!-- Add Arrows -->

			    </div>

			</div>

			<!-- Initialize Swiper -->
			<script>
				var swiper_main_2_mo = new Swiper('.swiper-container_main_2_mo', {
					pagination: {
						el: '.swiper-pagination_main_2_mo',
						type: 'fraction',
					},
					navigation: {
						nextEl: '.swiper-button-next_main_2_mo',
						prevEl: '.swiper-button-prev_main_2_mo',
					},
					loop: true,
					loopedSlides: 5,
					//autoplay: {
				//		delay: 3000,
				//	},
				});

			</script>
		</div>
		<div class="main_3_mo px30">
			<h3 class="pt80 pb50"><strong>NEWS & COUNSELING</strong></h3>
			<ul class="news_list list-unstyled pb90">
				<?=$Main_Notice_Mobile?>
				<!-- <li class="border_custom border_2px">
					 <a href="#" class="text-left"><strong class="news_list_tit text_line_one_only mb20">이곳은 세종스포츠 정형외과 병원소식 제목만 보여집니다.</strong><span class="news_category pr20">NEWS</span><span class="upload_date px20">2019.11.20</span></a>
				</li>
				<li class="border_custom border_2px">
					 <a href="#" class="text-left"><strong class="news_list_tit text_line_one_only mb20">이곳은 세종스포츠 정형외과 병원소식 제목만 보여집니다.</strong><span class="news_category pr20">COUNSELING</span><span class="upload_date px20">2019.11.20</span></a>
				</li>
				<li class="border_custom border_2px">
					 <a href="#" class="text-left"><strong class="news_list_tit text_line_one_only mb20">이곳은 세종스포츠 정형외과 병원소식 제목만 보여집니다.</strong><span class="news_category pr20">COUNSELING</span><span class="upload_date px20">2019.11.20</span></a>
				</li> -->
			</ul>
		</div>
	</div>
	<!-- //컨텐츠영역 -->

	<?php include_once $GP -> INC_WWW . '/footer_mobile.php'; ?>
