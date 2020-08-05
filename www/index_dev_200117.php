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

$ver = "2019-11-20";

?>

	<script>
		var getCookie = function(name) 	{
			var nameOfCookie = name + "=";
			var x = 0;
			while ( x <= document.cookie.length ) {
				var y = (x+nameOfCookie.length);
				if ( document.cookie.substring( x, y ) == nameOfCookie ) {
					if ( (endOfCookie=document.cookie.indexOf( ";", y )) == -1 )
						endOfCookie = document.cookie.length;
					return unescape( document.cookie.substring( y, endOfCookie ) );
				}
				x = document.cookie.indexOf( " ", x ) + 1;
				if ( x == 0 )
				break;
			}
			return;
		}
		
		// 인트로쿠키값 가져오기 없으면 인트로 페이지 이동
		if ( getCookie('intro') != 'done') {		
			 // location.href="/intro.php";
		}



		$(document).ready(function(){
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
	<?php include_once $GP -> INC_WWW . '/header_ver2.php';?>
	<div class="visual-wrap">
		<ul class="view">
			<li class="on">
				<div class="text-wrap">
                    <span class="text-top">SPORTS PERFORMANCE CENTER</span>
					<em>'다시 뛸 수 있을까?'</em>
					<span>RETURN TO PLAY!</span>
				</div>
			</li>
			<li>
				<div class="text-wrap">
					<span class="text-top">SPORTS PERFORMANCE CENTER</span>
					<em>'다시 던질 수 있을까?'</em>
					<span>RETURN TO PLAY!</span>
				</div>
			</li>
			<li>
				<div class="text-wrap">
					<span class="text-top">SPORTS PERFORMANCE CENTER</span>
					<em>'다시 오를 수 있을까?'</em>
					<span>RETURN TO PLAY!</span>
				</div>
			</li>
			<li>
				<div class="text-wrap">
					<span class="text-top"></span>
					<em>'일상의 걸음도 스포츠다!'</em>
					<span>RETURN TO PLAY!</span>
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
					<li class="on">SPORTS PERFORMANCE CENTER - 다시 뛸 수 있을까?</li>
					<li>SPORTS PERFORMANCE CENTER - 다시 던질 수 있을까?</li>
					<li>SPORTS PERFORMANCE CENTER - 다시 오를 수 있을까?</li>
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
	</div>
	<div class="contents">
		<div class="main_1 business-wrap">
			<h3><small class="d-block">차별화된 스프츠의학 클리닉</small><strong>MEET OUR DOCTOR</strong></h3>
			<div class="main_1_ctr">
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
								스프츠외상 : 하지 골절, 근육, 인대, 연골손상<br/>
								발목관절경, 인공관절 무지외반증, 당뇨병성 족부 질환 등
							</p>
						</div>
						<div class="dr_mov">
							<a href="https://youtu.be/0SOaXleKMOc" target="_blank"><img src="/public/images/main/main_utube_thum_kim.jpg" alt="김진수 원장"></a>
						</div>
					</li>
					<li>
						<div class="dr_nm">DR. MINSEOK, CHA</div>
						<div class="dr_comments">“내 가족, 내 선수의 주치의” 빠른 회복을 약속하다.</div>
						<div class="dr_image"><img src="/public/images/main/doctor_po02.png" alt="사진"></div>
						<div class="dr_info">
							<p>
								무릎, 족부/족관절, 고관절 정형외과<br/>
								십자인대파열, 반달연골, 연골손상, 스포츠손상<br/>
								단지증, 무지외반증, 발목인대손상, 인공관절, 줄기세포
							</p>
						</div>
						<div class="dr_mov">
							<a href="https://youtu.be/2vJM7TwzQgc" target="_blank"><img src="/public/images/main/main_utube_thum_cha.jpg" alt="차민석 원장"></a>
						</div>
					</li>
					<li>
						<div class="dr_nm">DR. JUNGSUP, KEUM</div>
						<div class="dr_comments">“어깨 명의” 환자맞춤형 치료를 실현하다.</div>
						<div class="dr_image"><img src="/public/images/main/doctor_po01.png" alt="사진"></div>
						<div class="dr_info">
							<p>
								어깨, 팔꿈치 관절 정형외과<br/>
								회전근개파열, 어깨탈구, 테니스엘보  <br/>
								어깨 및 팔꿈치 관절경, 스포츠손상 치료 (수술사례 5,000례 이상)
							</p>
						</div>
						<div class="dr_mov">
							<a href="https://youtu.be/O_wYWzJhdeI" target="_blank"><img src="/public/images/main/main_utube_thum_kum.jpg" alt="금정섭 원장"></a>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<div class="search_box_1 bg_color_darkblack py30">
			<div class="search_ctrl">
				<input id="search_text" class="searcher_input input_reset input_text_777777 py10 d-inline-block mr50" type="text" placeholder="검색어를 입력해주세요" style="width: 38%;" value="<?=$_GET['stext']?>">
				<button type="button" class="search_hashtag my10 mr10" onclick="location.href='/club/search.php?stext=회전근개파열'">#회전근개파열</button>
				<button type="button" class="search_hashtag mr10" onclick="location.href='/club/search.php?stext=아킬레스건염질환'">#아킬레스건염질환</button>
				<button type="button" class="search_hashtag mr10" onclick="location.href='/club/search.php?stext=견갑골운동장애'">#견갑골운동장애</button>
				<button type="button" class="search_hashtag mr10" onclick="location.href='/club/search.php?stext=반월상연골파열'">#반월상연골파열</button>
			</div>
		</div>
		<div class="main_2">
			<div class="main_2_head">
				<h3 class="text-center pt80"><strong class="d-inline-block text-hide">SJS TV</strong></h3>
			</div>
			<div class="main_2_body mt20">
			    <!-- Swiper -->
			    <div class="swiper-container swiper-container_main_2">
			        <div class="swiper-wrapper">
			            <div class="swiper-slide">
							<div class="left_side">
								<h4 class=""><strong class="index_no">01</strong><strong class="txt pt60 d-block">어깨 탈구</strong></h4>
								<p class="sjstv_q pt40">빠진 어깨를 스스로 끼운다고?<br/>어깨 탈구 치료방법은?</p>
								<p class="sjstv_a pt10">습관적으로 어깨가 탈구되는 분들 중 스스로 어깨를 끼우는<br/>분들도 계실 텐데요.</p>
								<a href="/club/page03.php" class="d-inline-block mt60"><img src="/public/images/common/readmore_img_01.png" alt="READ MORE"></a>
							</div>
							<div class="right_side">
								<a href="https://youtu.be/6lYqy8IYR0A" target="_blank" class="w-100"><img src="/public/images/main/sjstv_01.jpg" alt="이미지" class="w-100"></a>
							</div>
			            </div>
			            <div class="swiper-slide">
							<div class="left_side">
								<h4 class=""><strong class="index_no">02</strong><strong class="txt pt60 d-block">상부관절와순파열</strong></h4>
								<p class="sjstv_q pt40">야구선수라면 의심해볼 질환!<br/>상부관절와순파열(SLAP병변)</p>
								<p class="sjstv_a pt10">가만히 있을 때는 괜찮은데 어깨를 드는 특정 동작에서만<br/>어깨 통증을 느끼시는 분들이 있으시죠.</p>
								<a href="/club/page03.php" class="d-inline-block mt60"><img src="/public/images/common/readmore_img_01.png" alt="READ MORE"></a>
							</div>
							<div class="right_side">
								<a href="https://youtu.be/JKyoCDKoP7Q" target="_blank" class="w-100"><img src="/public/images/main/sjstv_02.jpg" alt="이미지" class="w-100"></a>
							</div>
			            </div>
			            <div class="swiper-slide">
							<div class="left_side">
								<h4 class=""><strong class="index_no">03</strong><strong class="txt pt60 d-block">회전근개파열</strong></h4>
								<p class="sjstv_q pt40">어깨가 아파 누울 수 없는<br/> 회전근개파열!</p>
								<p class="sjstv_a pt10">팔을 뒤로 돌릴 때, 팔이 올라가지 않으면서 통증이 심해진<br/>경우가 있으신가요?</p>
								<a href="/club/page03.php" class="d-inline-block mt60"><img src="/public/images/common/readmore_img_01.png" alt="READ MORE"></a>
							</div>
							<div class="right_side">
								<a href="https://youtu.be/OiPhbbzKh0U" target="_blank" class="w-100"><img src="/public/images/main/sjstv_03.jpg" alt="이미지" class="w-100"></a>
							</div>
			            </div>
			            <div class="swiper-slide">
							<div class="left_side">
								<h4 class=""><strong class="index_no">04</strong><strong class="txt pt60 d-block">반월상연골파열</strong></h4>
								<p class="sjstv_q pt40">운동 중 생긴 무릎 통증,<br/> 혹시 반월상연골파열?!</p>
								<p class="sjstv_a pt10">반월상연골파열은 급격한 방향 전환을 많이 하는 농구,<br/>축구, 야구 등의 운동을 할 때 많이 발생하게 되는데요.</p>
								<a href="/club/page03.php" class="d-inline-block mt60"><img src="/public/images/common/readmore_img_01.png" alt="READ MORE"></a>
							</div>
							<div class="right_side">
								<a href="https://youtu.be/JfkvXHD7Qlc" target="_blank" class="w-100"><img src="/public/images/main/sjstv_04.jpg" alt="이미지" class="w-100"></a>
							</div>
			            </div>
			            <div class="swiper-slide">
							<div class="left_side">
								<h4 class=""><strong class="index_no">05</strong><strong class="txt pt60 d-block">베이커낭종</strong></h4>
								<p class="sjstv_q pt40">무릎 뒤에 혹이 생겼다?!<br/> 차민석 원장이 알려드립니다! </p>
								<p class="sjstv_a pt10">연골판 손상을 입은 경우 나타날 수 있는 베이커낭종!<br/>무릎 뒤 오금에 물혹이 생겼다면 베이커낭종일 수도 있습니다.</p>
								<a href="/club/page03.php" class="d-inline-block mt60"><img src="/public/images/common/readmore_img_01.png" alt="READ MORE"></a>
							</div>
							<div class="right_side">
								<a href="https://youtu.be/-_lgYdqQFYI" target="_blank" class="w-100"><img src="/public/images/main/sjstv_05.jpg" alt="이미지" class="w-100"></a>
							</div>
			            </div>
			            <div class="swiper-slide">
							<div class="left_side">
								<h4 class=""><strong class="index_no">06</strong><strong class="txt pt60 d-block">십자인대파열</strong></h4>
								<p class="sjstv_q pt40">무릎에서 '퍽!'소리가!!<br/> 복귀 가능할까? </p>
								<p class="sjstv_a pt10">축구와 배드민턴에서 많이  발생하는 십자인대파열!<br/>십자인대파열은 관절염으로 진행할 수도 있는 질환인데요.</p>
								<a href="/club/page03.php" class="d-inline-block mt60"><img src="/public/images/common/readmore_img_01.png" alt="READ MORE"></a>
							</div>
							<div class="right_side">
								<a href="https://youtu.be/XD_BppMMKww" target="_blank" class="w-100"><img src="/public/images/main/sjstv_06.jpg" alt="이미지" class="w-100"></a>
							</div>
			            </div>
			            <div class="swiper-slide">
							<div class="left_side">
								<h4 class=""><strong class="index_no">07</strong><strong class="txt pt60 d-block">퇴행성관절염</strong></h4>
								<p class="sjstv_q pt40">나이 불문 퇴행성관절염!<br/> 통증이 있다면 혹시 나도?!</p>
								<p class="sjstv_a pt10">최근 스포츠 활동을 하는 사람들이 많아지면서<br/>젊은 층에서도 퇴행성 관절염이 빈번하게 발생하는데요.</p>
								<a href="/club/page03.php" class="d-inline-block mt60"><img src="/public/images/common/readmore_img_01.png" alt="READ MORE"></a>
							</div>
							<div class="right_side">
								<a href="https://youtu.be/Kt-TD0OesXI" target="_blank" class="w-100"><img src="/public/images/main/sjstv_07.jpg" alt="이미지" class="w-100"></a>
							</div>
			            </div>
			            <div class="swiper-slide">
							<div class="left_side">
								<h4 class=""><strong class="index_no">08</strong><strong class="txt pt60 d-block">후방충돌증후군</strong></h4>
								<p class="sjstv_q pt40">발목 뒤쪽이 붓고<br/> 힘이 빠지시나요?!</p>
								<p class="sjstv_a pt10">발목 관절 뒷부분에 통증이 있지만,<br/>아킬레스건이 아프다고 착각하시는 분들이 계시는데요</p>
								<a href="/club/page03.php" class="d-inline-block mt60"><img src="/public/images/common/readmore_img_01.png" alt="READ MORE"></a>
							</div>
							<div class="right_side">
								<a href="https://youtu.be/kEz-1uq0ZP8" target="_blank" class="w-100"><img src="/public/images/main/sjstv_08.jpg" alt="이미지" class="w-100"></a>
							</div>
			            </div>
			            <div class="swiper-slide">
							<div class="left_side">
								<h4 class=""><strong class="index_no">09</strong><strong class="txt pt60 d-block">족저근막염</strong></h4>
								<p class="sjstv_q pt40">이제 그만~!<br/> 치료, 예방 방법 알려드립니다!</p>
								<p class="sjstv_a pt10"> 무조건 수술을 해야 할까요? 그렇지 않다는 사실!<br/>비수술 치료로도 통증과 이별할 수 있습니다.</p>
								<a href="/club/page03.php" class="d-inline-block mt60"><img src="/public/images/common/readmore_img_01.png" alt="READ MORE"></a>
							</div>
							<div class="right_side">
								<a href="https://youtu.be/bdUydG3wOnA" target="_blank" class="w-100"><img src="/public/images/main/sjstv_09.jpg" alt="이미지" class="w-100"></a>
							</div>
			            </div>
			        </div>
			        <!-- Add Pagination -->
			        <div class="swiper-pagination_main_2_cover">
						<div class="swiper_main_2_ctrl">
							<button type="button" class="ctrl_btn ctrl_pause" onclick="ctrl_pause()"><span class="text-hide">일시정지</span></button>
							<button type="button" class="ctrl_btn ctrl_play" onclick="ctrl_play()" style="display: none;"><span class="text-hide">재생</span></button>
						</div>
			        	<div class="swiper-pagination swiper-pagination_main_2"></div>
			        </div>
			        <!-- Add Arrows -->
			        <div class="swiper-button-next swiper-button-next_main_2"></div>
			        <div class="swiper-button-prev swiper-button-prev_main_2"></div>
			    </div>
			</div>

			<!-- Initialize Swiper -->
			<script>
				var swiper_main_2 = new Swiper('.swiper-container_main_2', {
					pagination: {
						el: '.swiper-pagination_main_2',
						type: 'fraction',
					},
					navigation: {
						nextEl: '.swiper-button-next_main_2',
						prevEl: '.swiper-button-prev_main_2',
					},
					loop: true,
					loopedSlides: 5,
					autoplay: {
						delay: 3000,
					},
				});

			</script>
		</div>
		<div class="main_3">
			<h3 class="pt100 pb50"><strong>NEWS & REVIEW</strong></h3>
			<ul class="news_list list-unstyled">
				<?=$Main_Notice?>
			</ul>
		</div>
		<div class="main_4">
			<div class="pre_footer py30">
				<div class="pre_footer_1 pt10 pb20">
					<h3>빠른상담</h3>
					<form class="contain" action="?" name="frm_ps" id="frm_ps" method="post">
						<input type="hidden" name="mode" value="PS_REG">
						<div class="info_agree pt20">
							<div class="custom-control custom-checkbox d-inline-block mr10">
								<input name="agree" type="checkbox" class="custom-control-input" id="custom-control-input-agree1">
								<label class="custom-control-label text_demilight" for="custom-control-input-agree1">개인정보 취급방침에 동의</label>
							</div>
							<button type="button" class="view_terms" data-toggle="modal" data-target="#detail_doc1">자세히보기</button>
						</div>
						<div class="form_box mt10">
							<ul class="list-unstyled">
								<li>
									<select id="tfc_type" name="tfc_type">
										<option value="">상담받을 진료를 선택해주세요</option>
										<option value="A">목</option>
										<option value="B">허리</option>
										<option value="C">어깨</option>
										<option value="D">무릎</option>
										<option value="E">족부</option>
										<option value="F">기타</option>
									</select>
								</li>
								<li><input type="text" name="mb_name" id="name" placeholder="이름을 입력해주세요."></li>
								<li><input type="text" name="mb_mobile" id="phone" placeholder="연락처를 입력해주세요."></li>
							</ul>
							<div class="main_councel">
								<button type="button" id="img_submit"  class="btn_main_councel" style="background-image: url('/public/images/common/councel_btn_img.jpg');"><span class="text-hide">상담신청</span></button>
							</div>
						</div>
					</form>
				</div>
				<div class="pre_footer_2 pb20">
					<div class="tel_number">
						<a href="tel:0222445161">02.2244.5161</a>
					</div>
					<ul class="main_time_is mt30">
						<li class="main_time_is_1"><strong class="main_time_tit">평일</strong><span class="main_time_cmt">AM 09:00 ~ PM 17:30</span></li>
						<li class="main_time_is_2"><strong class="main_time_tit">토요일</strong><span class="main_time_cmt">AM 09:00 ~ PM 13:00</span></li>
						<li class="main_time_is_3"><strong class="main_time_tit">점심시간</strong><span class="main_time_cmt">PM 13:00 ~ PM 14:00</span></li>
					</ul>
				</div>
				<div class="pre_footer_3">
					<ul class="ancher_list mt20 list-unstyled">
						<li><a href="/club/page02.php"><i class="ancher_image"></i><span class="ancher_txt">전문의상담</span></a></li>
						<li><a href="/info/sub01.php"><i class="ancher_image"></i><span class="ancher_txt">진료시간표</span></a></li>
						<li><a href="/about/sub03.php"><i class="ancher_image"></i><span class="ancher_txt">병원둘러보기</span></a></li>
						<li><a href="/about/sub06.php"><i class="ancher_image"></i><span class="ancher_txt">찾아오시는 길</span></a></li>
					</ul>
				</div>
			</div>
		</div>


		<!-- <div class="business-wrap">
			<div class="business_left">LEFT_BACKGROUND
			</div>
			<div class="business_right">RIGHT_BACKGROUND
			</div>
		</div> -->
	</div>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#img_submit').click(function(){
				if($('input:checkbox[name="agree"]:checked').val() == undefined ) {
					alert("개인정보 취급 방침에 동의해 주세요.");
					return false;
				}
				if($('select[name=tfc_type]').val() == '')	{
					alert('상담받을 진료를 선택해주세요.');
					$('select[name=tfc_type]').focus();
					return false;
				}
				if($('#name').val() == '')	{
					alert('이름을 입력해주세요');
					$('#name').focus();
					return false;
				}
				if($('#phone').val() == '')	{
					alert('연락처를 입력해주세요');
					$('#phone').focus();
					return false;
				}
				$('#frm_ps').attr('action','/admin/phone/proc/phone_proc.php');
				$('#frm_ps').submit();
				return false;
			});

			$("#search_text").keydown(function(key) {
				var val = $("#search_text").val();
	            if (key.keyCode == 13) {
	                // alert("엔터키를 눌렀습니다.");
	                location.href = '/club/search.php?stext=' + val;
	            }
	    	});
		});
	</script>
	<!-- Modal -->
	<div class="modal fade" id="detail_doc1" tabindex="-1" role="dialog" aria-labelledby="detail_doc1Title" aria-hidden="true">
		<div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
			<div class="modal-content" style="padding: 30px;">
				<div class="modal-header">
					<div class="deco-header p-0">
						<h5 class="modal-title highlight" id="detail_doc1Title"><strong>개인정보 취급방침에 동의</strong></h5>
					</div>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="contain">
						<div class="public-panel">
							<p>&lt;세종스포츠정형외과&gt;이 취급하는 모든 개인정보는 관련 법령에 근거하여 수집·보유 및 처리되고 있습니다.</p>
							<p>「개인정보보호법」은 이러한 개인정보의 취급에 대한 일반적 규범을 제시하고 있으며 , &lt;세종스포츠정형외과&gt;은 이러한 법령의 규정에 따라 수집·보유 및 처리하는 개인정보를 공공업무의 적절한 수행과 정보주체의 권익을 보호하기 위해 적법하고 적정하게 취급할 것입니다.</p>
							<p>또한, &lt;세종스포츠정형외과&gt;은 관련 법령에서 규정한 바에 따라 보유하고 있는 개인정보에 대한 열람, 정정·삭제, 처리정지 요구 등 정보주체의 권익을 존중하며, 정보주체는 이러한 법령상 권익의 침해 등에 대하여 행정심판법에서 정하는 바에 따라 행정심판을 청구할 수 있습니다.</p>
							<p>&lt;세종스포츠정형외과&gt;은 「개인정보보호법」에 따라 정보주체의 개인정보 보호 및 권익을 보호하고 개인정보와 관련한 정보주체의 고충을 원활하게 처리할 수 있도록 다음과 같은 개인정보 처리방침을 두고 있으며, 개인정보처리방침을 개정하는 경우 웹사이트 공지사항(또는 개별공지)을 통하여 공지할 것입니다.</p>
							<br>
							<p>ο 본 방침은 : 2017년 11월 1일 부터 시행됩니다.</p>
						</div>
						<hr class="break-line">
						<div class="public-panel">
							<p>세종스포츠정형외과(이하 ‘본원’ 이라 함)은 귀하의 개인정보보호를 매우 중요시하며, 『개인정보보호법』을 준수하고 있습니다. 본원은 개인정보처리방침을 통하여 귀하께서 제공하시는 개인정보가 어떠한 용도와 방식으로 이용되고 있으며 개인정보보호를 위해 어떠한 조치가 취해지고 있는지 알려드립니다.</p>
							<div class="sub-public">
								<p>이 개인정보처리방침의 순서는 다음과 같습니다.</p>
								<ol data-list-type="bracket">
									<li>수집하는 개인정보의 항목 및 수집방법</li>
									<li>개인정보의 수집 및 이용목적</li>
									<li>개인정보의 보유 및 이용기간</li>
									<li>개인정보의 파기절차 및 그 방법</li>
									<li>이용자 및 법정대리인의 권리와 그 행사방법</li>
									<li>동의철회 / 회원탈퇴 방법</li>
									<li>개인정보 자동 수집 장치의 설치/운영 및 그 거부에 관한 사항</li>
									<li>개인정보관리책임자</li>
									<li>개인정보의 안전성 확보조치</li>
									<li>정책 변경에 따른 공지의무</li>
								</ol>
							</div>
						</div>
						<div class="public-panel">
							<h5 class="sub-public-title">1. 수집하는 개인정보의 항목 및 수집방법</h5>
							<p>본원은 회원가입 시 서비스 이용을 위해 필요한 최소한의 개인정보만을 수집합니다. 귀하가 본원의 서비스를 이용하기 위해서는 회원가입 시 필수항목과 선택항목이 있는데, 메일수신여부 등과 같은 선택항목은 입력하지 않더라도 서비스 이용에는 제한이 없습니다.</p>
							<dl class="sub-public">
								<dt><strong class="text-dark">[진료정보]</strong></dt>
								<dd>
									<ul data-list-type="dash">
										<li>
											<p>수집항목 : 성명, 주민등록번호, 주소, 연락처, 진료기록</p>
											<small>※ 의료법에 의해 고유식별정보 및 진료정보를 의무적으로 보유하여야 하여야 함(별도 동의 불필요)</small>
										</li>
									</ul>
								</dd>
							</dl>
							<dl class="sub-public">
								<dt><strong class="text-dark">[홈페이지 회원가입 시 수집항목]</strong></dt>
								<dd>
									<ul data-list-type="dash">
										<li>필수항목 : 메일, 성명, 아이디, 비밀번호, 주소, 연락처(전화번호, 휴대폰번호)</li>
										<li>선택항목 : 메일수신여부</li>
										<li>서비스 이용 과정이나 서비스 제공 업무 처리 과정에서 다음과 같은 정보들이 자동으로 생성 되어 수집될 수 있습니다. <br>: 서비스 이용기록, 접속 로그, 쿠키, 접속 IP 정보</li>
									</ul>
								</dd>
							</dl>
							<dl class="sub-public">
								<dt><strong class="text-dark">[상담 신청 이용자]</strong></dt>
								<dd>
									<ul data-list-type="dash">
										<li>상담 신청시 : 이름, 나이, 연락처, 문의내용</li>
									</ul>
								</dd>
							</dl>
							<dl class="sub-public">
								<dt><strong class="text-dark">[개인정보 수집방법]</strong></dt>
								<dd>
									<p>다음과 같은 방법으로 개인정보를 수집합니다.</p>
									<ul data-list-type="dash">
										<li>홈페이지, 서면양식, 팩스, 전화, 상담 게시판, 이메일, 이벤트 참여</li>
									</ul>
								</dd>
							</dl>
						</div>
						<div class="public-panel">
							<h5 class="sub-public-title">2. 개인정보의 수집 및 이용목적</h5>
							<p>개인정보 수집자 : 본원, 메디인사이드㈜</p>
							<br>
							<p>본원은 수집한 개인정보를 다음의 목적을 위해 활용합니다. <br>이용자가 제공한 모든 정보는 하기 목적에 필요한 용도 이외로는 사용되지 않으며 이용 목적이 변경될 시에는 사전 동의를 구할 것입니다.</p>
							<dl class="sub-public">
								<dt><strong class="text-dark">[진료정보]</strong></dt>
								<dd>
									<ul data-list-type="dash">
										<li>진단 및 치료를 위한 진료서비스와 청구, 수납 및 환급 등의 원무서비스 제공</li>
									</ul>
								</dd>
							</dl>
							<dl class="sub-public">
								<dt><strong class="text-dark">[홈페이지 회원정보]</strong></dt>
								<dd>
									<ul data-list-type="dash">
										<li>필수정보 : 홈페이지를 통한 진료 예약, 예약조회 및 회원제 서비스 제공</li>
										<li>선택정보 : 이메일을 통한 병원소식, 질병정보 등의 안내, 설문조사</li>
									</ul>
								</dd>
							</dl>
						</div>
						<div class="public-panel">
							<h5 class="sub-public-title">3. 개인정보의 보유 및 이용기간</h5>
							<p>본원은 개인정보의 수집목적 또는 제공받은 목적이 달성된 때에는 귀하의 개인정보를 지체 없이 파기합니다.</p>
							<dl class="sub-public">
								<dt><strong class="text-dark">[진료정보]</strong></dt>
								<dd>
									<ul data-list-type="dash">
										<li>의료법에 명시된 진료기록 보관 기준에 준하여 보관</li>
									</ul>
								</dd>
							</dl>
							<dl class="sub-public">
								<dt><strong class="text-dark">[홈페이지 회원정보]</strong></dt>
								<dd>
									<ul data-list-type="dash">
										<li>
											<p>회원가입을 탈퇴하거나 회원에서 제명된 때</p>
											<small>다만, 수집목적 또는 제공받은 목적이 달성된 경우에도 상법 등 법령의 규정에 의하여 보존할 필요성이 있는 경우에는 귀하의 개인정보를 보유할 수 있습니다.</small>
										</li>
										<li>소비자의 불만 또는 분쟁처리에 관한 기록 : 3년 (전자상거래 등에서의 소비자보호에 관한 법률)</li>
										<li>신용정보의 수집/처리 및 이용 등에 관한 기록 : 3년 (신용정보의 이용 및 보호에 관한 법률)</li>
										<li>본인 확인에 관한 기록 : 6개월 (정보통신망 이용촉진 및 정보보호 등에 관한 법률)</li>
										<li>방문에 관한 기록 : 3개월 (통신비밀보호법)</li>
									</ul>
								</dd>
							</dl>
							<dl class="sub-public">
								<dt><strong class="text-dark">[상담 신청 이용자]</strong></dt>
								<dd>
									<ul data-list-type="dash">
										<li>상담 참여시 : 이벤트 페이지에 별도 명시한 수집 동의받은 날로부터 동의받은 기간 동안 보관 (전화, 문자, 카카오톡)</li>
									</ul>
								</dd>
							</dl>
						</div>
						<div class="public-panel">
							<h5 class="sub-public-title">4. 개인정보의 파기절차 및 그 방법</h5>
							<p>본원은 『개인정보의 수집 및 이용목적』이 달성된 후에는 즉시 파기합니다. 파기절차 및 방법은 다음과 같습니다.</p>
							<dl class="sub-public">
								<dt><strong class="text-dark">[파기절차]</strong></dt>
								<dd>이용자가 회원가입 등을 위해 입력한 정보는 목적이 달성된 후 파기방법에 의하여 즉시 파기합니다.</dd>
							</dl>
							<dl class="sub-public">
								<dt><strong class="text-dark">[파기방법]</strong></dt>
								<dd>전자적 파일형태로 저장된 개인정보는 기록을 재생할 수 없는 기술적 방법을 사용하여 삭제합니다.</dd>
								<dd>종이에 출력된 개인정보는 분쇄기로 분쇄하거나 소각하여 파기합니다.</dd>
							</dl>
						</div>
						<div class="public-panel">
							<h5 class="sub-public-title">5. 이용자 및 법정대리인의 권리와 그 행사방법</h5>
							<p>만14세 미만 아동(이하 "아동"이라 함)의 회원가입은 아동이 이해하기 쉬운 평이한 표현으로 작성된 별도의 양식을 통해 이루어지고 있으며 개인정보 수집시 반드시 법정대리인의 동의를 구하고 있습니다.</p>
							<p>본원은 법정대리인의 동의를 받기 위하여 아동으로부터 법정대리인의 성명과 연락처 등 최소한의 정보를 수집하고 있으며, 개인정보취급방침에서 규정하고 있는 방법에 따라 법정대리인의 동의를 받고 있습니다.</p>
							<p>아동의 법정대리인은 아동의 개인정보에 대한 열람, 정정 및 삭제를 요청할 수 있습니다. 아동의 개인정보를 열람?정정, 삭제하고자 할 경우에는 회원정보수정을 클릭하여 법정대리인 확인 절차를 거치신 후 아동의 개인정보를 법정대리인이 직접 열람?정정, 삭제하거나, 개인정보보호책임자로 서면, 전화, 또는 Fax등으로 연락하시면 필요한 조치를 취합니다.</p>
							<p>본원은 아동에 관한 정보를 제3자에게 제공하거나 공유하지 않으며, 아동으로부터 수집한 개인정보에 대하여 법정대리인이 오류의 정정을 요구하는 경우 그 오류를 정정할 때까지 해당 개인정보의 이용 및 제공을 금지합니다.</p>
							<p>※ 법에 의해 보관이 의무화된 개인정보는 요청이 있더라도 보관기간내에 수정·삭제할 수 없습니다.</p>
						</div>
						<div class="public-panel">
							<h5 class="sub-public-title">6. 동의철회 / 회원탈퇴 방법</h5>
							<p>귀하는 회원가입 시 개인정보의 수집ㆍ이용 및 제공에 대해 동의하신 내용을 언제든지 철회하실 수 있습니다. 회원탈퇴는 본원 홈페이지 마이페이지의 『회원탈퇴』를 클릭하여 본인 확인 절차를 거치신 후 직접 회원탈퇴를 하시거나, 개인정보관리책임자로 서면, 전화 또는 Fax 등으로 연락하시면 지체 없이 귀하의 개인정보를 파기하는 등 필요한 조치를 하겠습니다.</p>
						</div>
						<div class="public-panel">
							<h5 class="sub-public-title">7. 개인정보 자동 수집 장치의 설치/운영 및 그 거부에 관한 사항</h5>
							<p>본원은 귀하의 정보를 수시로 저장하고 찾아내는 '쿠키(cookie)'를 운용합니다. 쿠키란 본원의 웹사이트를 운영하는데 이용되는 서버가 귀하의 브라우저에 보내는 아주 작은 텍스트 파일로서 귀하의 컴퓨터 하드디스크에 저장됩니다. 본원은 다음과 같은 목적을 위해 쿠키를 사용합니다.</p>
							<p>귀하는 쿠키 설치에 대한 선택권을 가지고 있습니다. 따라서, 귀하는 웹 브라우저에서 옵션을 설정함으로써 모든 쿠키를 허용하거나, 쿠키가 저장될 때마다 확인을 거치거나, 아니면 모든 쿠키의 저장을 거부할 수도 있습니다. 회원님께서 쿠키 설치를 거부하셨을 경우 일부 서비스 제공에 어려움이 있습니다.</p>
						</div>
						<div class="public-panel">
							<h5 class="sub-public-title">8. 개인정보관리책임자</h5>
							<p>귀하의 개인정보를 보호하고 개인정보와 관련한 불만을 처리하기 위하여 본원은 아래와 같이 개인정보관리책임자를 두고 있습니다.</p>
							<div class="sub-public">
								<dl>
									<dt><strong class="text-dark">[개인정보보호 책임자]</strong></dt>
									<dd>
										<ul data-list-type="dash">
											<li>이름 : 강준희, 임경섭</li>
											<li>직위 : 세종스포츠정형외과 원장</li>
											<li>소속 : 세종스포츠정형외과</li>
											<li>전화번호 : 070-4259-5256</li>
											<li>메일 : cyangale@naver.com</li>
										</ul>
									</dd>
								</dl>
							</div>
							<div class="sub-public">
								<p>귀하께서는 본원의 서비스를 이용하시며 발생하는 모든 개인정보보호 관련 민원을 개인정보관리책임자로 신고하실 수 있습니다. 본원은 이용자들의 신고사항에 대해 신속하게 충분한 답변을 드릴 것입니다. 기타 개인정보침해에 대한 신고나 상담이 필요하신 경우에는 아래 기관에 문의하시기 바랍니다.</p>
								<ul data-list-type="dash">
									<li>개인분쟁조정위원회 (http://www.1336.or.kr / 1336)</li>
									<li>정보보호마크인증위원회 (http://www.eprivacy.or.kr / (02) 580-0533~4)</li>
									<li>대검찰청 사이버범죄수사단 (http://www.spo.go.kr / (02) 3480-3573)</li>
									<li>경찰청 사이버테러대응센터 (http://www.ctrc.go.kr / (02) 392-0330)</li>
								</ul>
							</div>
						</div>
						<div class="public-panel">
							<h5 class="sub-public-title">9. 개인정보의 안전성 확보조치</h5>
							<p>본원은 이용자의 개인정보보호를 위한 기술적 대책으로서 여러 보안장치를 마련하고 있습니다. 이용자께서 보내시는 모든 정보는 방화벽장치에 의해 보호되는 보안시스템에 안전하게 보관/관리되고 있습니다.</p>
							<p>또한 본원은 이용자의 개인정보보호를 위한 관리적 대책으로서 이용자의 개인정보에 대한 접근 및 관리에 필요한 절차를 마련하고, 이용자의 개인정보를 취급하는 인원을 최소한으로 제한하여 지속적인 보안교육을 실시하고 있습니다. 또한 개인정보를 처리하는 시스템의 사용자를 지정하여 사용자 비밀번호를 부여하고 이를 정기적으로 갱신하겠습니다.</p>
						</div>
						<div class="public-panel">
							<h5 class="sub-public-title">10. 정책 변경에 따른 공지의무</h5>
							<p>현 개인정보취급방침 내용의 추가ㆍ삭제 및 수정이 있을 시에는 변경되는 개인정보취급방침을 시행하기 최소 7일전에 본원 홈페이지를 통해 변경이유 및 내용 등을 공지하도록 하겠습니다.</p>
							<div class="sub-public">
								<ul data-list-type="dash">
									<li>공고일자 : 2017년 11월 1일</li>
									<li>시행일자 : 2017년 11월 1일</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<div class="modal fade intro" id="intro_mov" tabindex="-1">
<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
	<div class="modal-content">
		<div class="modal-header">
			<h3 class="modal-title" id="intro_movTitle" ><strong class="text-hide">세종스포츠정형외과</strong></h3>

			<button type="button" class="close" onclick="closeBtn(); return false;">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="modal-body text-center">
			<video id="video" controls autoplay>
				<source id="movie_src" src="/public/images/intro.mp4" type="video/mp4">
			</video>
		</div>
		<div class="modal-footer">
			<div class="">
				<form name="intro">
					<label class="inputChk m-0"><input name="chkbox" type="checkbox"> <span style="">이 창을 하루동안 열지 않습니다.</span></label>
				</form>
			</div>
		</div>
	</div>
</div>
<div style="width: 100%; height: 100%; background-color: #000; position: absolute; top: 0; left: 0; z-index: 1900;"></div>
</div>	
<?php
	$mobile_agent = '/(iPod|iPhone|Android|BlackBerry|SymbianOS|SCH-M\d+|Opera Mini|Windows CE|Nokia|SonyEricsson|webOS|PalmOS)/';

	// preg_match() 함수를 이용해 모바일 기기로 접속하였는지 확인
	if(preg_match($mobile_agent, $_SERVER['HTTP_USER_AGENT'])) {
		 include $_SERVER[DOCUMENT_ROOT]."/popup/popup_layer.php";
	}else{
		 include $_SERVER[DOCUMENT_ROOT]."/popup/popup_script.php";
	}
?>
<?php include_once $GP -> INC_WWW . '/footer_ver2.php';?>