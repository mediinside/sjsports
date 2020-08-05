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
				<div class="text-wrap"> <em>22그라운드와 일상생활로의 빠른 복귀를 위하여 SJS만의 차별화된 프로그램을 진행하고 있습니다.</em>
					<span>11SPORTS MEDICAL CLINIC <br> return to play!</span>
				</div>
			</li>
			<li>
				<div class="text-wrap"> <em>그라운드와 일상생활로의 빠른 복귀를 위하여 SJS만의 차별화된 프로그램을 진행하고 있습니다.</em>
					<span>SPORTS MEDICAL CLINIC <br>return to play!</span>
				</div>
			</li>
			<li>
				<div class="text-wrap"> <em>그라운드와 일상생활로의 빠른 복귀를 위하여 SJS만의 차별화된 프로그램을 진행하고 있습니다.</em>
					<span>SPORTS MEDICAL CLINIC <br>return to play!</span>
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
					<li class="on">SPORTS MEDICAL CLINIC11 </li>
					<li>SPORTS MEDICAL CLINIC22 </li>
					<li>SPORTS MEDICAL CLINIC33 </li>
				</ul>
				<div class="count"> <span class="current">1</span> <span class="total">3</span>
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
						<div class="dr_nm">DR. JEONGSEOP, KUM</div>
						<div class="dr_comments">대한민국 1%의 손길, 주인공은 바로 당신입니다.</div>
						<div class="dr_image"><img src="/public/images/main/doctor_po01.png" alt="사진"></div>
						<div class="dr_info">
							<p>
								족부/족관절 정HSDG형외과<br/>
								스프초외상: 하지 골절, 근육, 인대, 연골손상<br/>
								발목관절경, 인공관절 무지외반증, 당뇨병성 족부 질환 등
							</p>
						</div>
						<div class="dr_mov">
							<a href="https://youtu.be/O_wYWzJhdeI" target="_blank"><img src="/public/images/main/main_utube_thum_kum.jpg" alt="금정섭 원장"></a>
						</div>
					</li>
					<li>
						<div class="dr_nm">DR. MINSEOK, CHA</div>
						<div class="dr_comments">대한민국 1%의 손길, 주인공은 바로ASDF 당신입니다.</div>
						<div class="dr_image"><img src="/public/images/main/doctor_po02.png" alt="사진"></div>
						<div class="dr_info">
							<p>
								족부/족관절 정형외과<br/>
								스프초외상: 하지 골절, 근육, 인대, 연골손상<br/>
								발목관절경, 인공관HDG무외반증, 당뇨병성 족부 질환 등
							</p>
						</div>
						<div class="dr_mov">
							<a href="https://youtu.be/2vJM7TwzQgc" target="_blank"><img src="/public/images/main/main_utube_thum_cha.jpg" alt="차민석 원장"></a>
						</div>
					</li>
					<li>
						<div class="dr_nm">DR. JINSU, KIM</div>
						<div class="dr_comments">대한민국 1%의 손길, 주인공은 바SFHDG로 당신입니다.</div>
						<div class="dr_image"><img src="/public/images/main/doctor_po03.png" alt="사진"></div>
						<div class="dr_info">
							<p>
								족부/족관절 정형외과<br/>
								스프초외상: 하지 골절, 근육, 인대, 연골손상<br/>
								발목관절경, 인GFASD공관절 무지외반증, 당뇨병성 족부 질환 등
							</p>
						</div>
						<div class="dr_mov">
							<a href="https://youtu.be/0SOaXleKMOc" target="_blank"><img src="/public/images/main/main_utube_thum_kim.jpg" alt="김진수 원장"></a>
						</div>
					</li>
				</ul>
			</div>		</div>
		<div class="search_box_1 bg_color_darkblack py30">
			<input id="search_text"  class="searcher_input input_reset input_text_777777 py10 d-inline-block mr50" type="text" placeholder="검색어를 입력해주세요" style="width: 43%;">
			<button type="button" class="search_hashtag mr10" onclick="location.href='/club/search.php?stext=회전근개파열'">#회전근개파열</button>
			<button type="button" class="search_hashtag mr10" onclick="location.href='/club/search.php?stext=아킬레스건염질환'">#아킬레스건염질환</button>
			<button type="button" class="search_hashtag mr10" onclick="location.href='/club/search.php?stext=견갑골운동장애'">#견갑골운동장애</button>
			<button type="button" class="search_hashtag mr10" onclick="location.href='/club/search.php?stext=반월상연골파열'">#반월상연골파열</button>
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
			<h3 class="pt100 pb50"><strong>NEWS & COUNSELING</strong></h3>
			<ul class="news_list list-unstyled">
				<?=$Main_Notice?>
				<!-- <li>
					 <a href="#"><strong class="news_list_tit">이곳은 세종스포츠 정형외과 병원소식 제목만 보여집니다.</strong><span class="upload_date">2019.11.20</span><span class="news_category">NEWS</span></a>
				</li>
				<li>
					 <a href="#"><strong class="news_list_tit">이곳은 세종스포츠 정형외과 병원소식 제목만 보여집니다.</strong><span class="upload_date">2019.11.20</span><span class="news_category">COUNSELING</span></a>
				</li>
				<li>
					 <a href="#"><strong class="news_list_tit">이곳은 세종스포츠 정형외과 병원소식 제목만 보여집니다.</strong><span class="upload_date">2019.11.20</span><span class="news_category">COUNSELING</span></a>
				</li> -->
			</ul>
		</div>
		<div class="main_4">
			<div class="pre_footer py30">
				<div class="pre_footer_1 pr40 pt10 pb20">
					<h3>빠른상담</h3>
					<form class="contain" action="?" name="frm_ps" id="frm_ps" method="post">
						<input type="hidden" name="mode" value="PS_REG">
						<div class="info_agree pr40 pt20">
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
				<div class="pre_footer_2 pl30 pb20">
					<div class="tel_number">
						<a href="tel:0222445161">02.2244.5161</a>
					</div>
					<ul class="main_time_is mt30">
						<li class="main_time_is_1"><strong class="main_time_tit">평일</strong><span class="main_time_cmt">AM 09:00 ~ PM 17:30</span></li>
						<li class="main_time_is_2"><strong class="main_time_tit">토요일</strong><span class="main_time_cmt">AM 09:00 ~ PM 13:00</span></li>
						<li class="main_time_is_3"><strong class="main_time_tit">점심시간</strong><span class="main_time_cmt">PM 13:00 ~ PM 14:30</span></li>
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
					<p></p>
				</div>
			</div>
		</div>
	</div>

	<?php include_once $GP -> INC_WWW . '/footer_ver2.php';?>