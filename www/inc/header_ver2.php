	<header>
		<!-- GNB 인클루드 -->
		<div class="pc">
			<h1><a href="/"><img src="/public/images/common/logo.png" alt="로고"></a></h1>
			<div id="gnb">
				<ul>
					<li> <a href="/about/sub01.php">SJS소개</a>
						<ul>
							<li><a href="/about/sub01.php">병원이념</a></li>
							<li><a href="/about/sub02.php">의료진소개</a></li>
							<li><a href="/about/sub02_staff.php">운동재활스탭소개</a></li>
							<li><a href="/about/sub03.php">병원둘러보기</a></li>
							<li><a href="/about/sub04.php">SPC소개</a></li>
							<li><a href="/about/sub05.php">첨단장비소개</a></li>
							<li><a href="/about/sub06.php">찾아오시는길</a></li>
						</ul>
					</li>
					<li> <a href="/info/sub01.php">진료안내</a>
						<ul>
							<li><a href="/info/sub01.php">진료시간</a></li>
							<li><a href="/info/sub02.php">외래진료안내</a></li>
							<li><a href="/info/sub03.php">입/퇴원안내</a></li>
							<li><a href="/info/sub04.php">증명서발급안내</a></li>
							<li><a href="/info/sub05.php">비급여진료비안내</a></li>
						</ul>
					</li>
					<li> <a href="/neck/sub01.php">목/허리</a>
						<ul>
							<li><a href="/neck/sub01.php">목디스크</a></li>
							<li><a href="/neck/sub02.php">허리디스크</a></li>
							<li><a href="/neck/sub03.php">척추관협착증</a></li>
							<li><a href="/neck/sub04.php">척추분리증</a></li>
							<li><a href="/neck/sub05.php">척추전방전위증</a></li>
							<li><a href="/neck/sub06.php">요추염좌</a></li>
							<li><a href="/neck/sub07.php">근막동통증증후군</a></li>
						</ul>
					</li>
					<li> <a href="/shoulder/sub01.php">어깨/팔꿈치</a>
						<ul>
							<li><a href="/shoulder/sub01.php">테니스엘보</a></li>
							<li><a href="/shoulder/sub02.php">오십견</a></li>
							<li><a href="/shoulder/sub03.php">회전근개파열</a></li>
							<li><a href="/shoulder/sub04.php">재발성어깨탈구</a></li>
							<li><a href="/shoulder/sub05.php">어깨충돌증후군</a></li>
							<li><a href="/shoulder/sub06.php">석회성건염</a></li>
							<li><a href="/shoulder/sub07.php">관절와순파열</a></li>
							<li><a href="/shoulder/sub08.php">견갑골운동장애</a></li>
						</ul>
					</li>
					<li> <a href="/knee/sub01.php">무릎</a>
						<ul>
							<li><a href="/knee/sub01.php">십자인대파열</a></li>
							<li><a href="/knee/sub02.php">반월상연골파열</a></li>
							<li><a href="/knee/sub03.php">무릎연골연화증</a></li>
							<li><a href="/knee/sub04.php">베이커낭종</a></li>
							<li><a href="/knee/sub05.php">퇴행성관절염</a></li>
							<li><a href="/knee/sub06.php">줄기세포연골재생치료</a></li>
						</ul>
					</li>
					<li> <a href="/foot/sub01.php">발/발목</a>
						<ul>
							<li><a href="/foot/sub01.php">발목염좌</a></li>
							<li><a href="/foot/sub02.php">족저근막염</a></li>
							<li><a href="/foot/sub03.php">무지외반증</a></li>
							<li><a href="/foot/sub04.php">아킬레스건염질환</a></li>
							<li><a href="/foot/sub05.php">발목관절염</a></li>
							<li><a href="/foot/sub06.php">발목연골손상</a></li>
							<li><a href="/foot/sub07.php">단지증</a></li>
						</ul>
					</li>
					<li> <a href="/club/page01.php">SJS클럽</a>
						<ul>
							<li><a href="/club/page01.php">병원소식</a></li>
							<li><a href="/club/page02.php">전문의상담</a></li>
							<li><a href="/club/page03.php">SJS TV</a></li>
							<li><a href="/club/page04.php">치료후기</a></li>
							<li><a href="/club/page05.php">사회공헌활동</a></li>
							<!-- <li><a href="/club/page06.php">FAQ</a></li> -->
						</ul>
					</li>
				</ul>
			</div>
			<div class="util">
				<?php
				if($_SESSION['suserid']) {
				?>
				<a href="/member/logout.php" class="btn_login">로그아웃</a>
				<? }else{ ?>
				<a href="/member/login.php" class="btn_login">로그인</a>
				<? } ?>
				<!--  <a href="#" class="btn_join">회원가입</a>  --></div>
		</div>
		<!-- //GNB 인클루드 -->
		<div class="quick_menu">
			<ul>
				<li class="online_reserve"><a href="javascript:;"><strong class="quick_menu_icon"></strong><span>온라인예약</span></a></li>
				<li><a href="/club/page02.php"><strong class="quick_menu_icon"></strong><span>전문의상담</span></a></li>
				<li><a href="https://pf.kakao.com/_tMzxlxb/" target="_blank"><strong class="quick_menu_icon"></strong><span>카카오톡상담</span></a></li>
				<li><a href="/club/page03.php"><strong class="quick_menu_icon"></strong><span>SJS TV</span></a></li>
				<li><a href="/about/sub06.php"><strong class="quick_menu_icon"></strong><span>찾아오시는길</span></a></li>
			</ul>
		</div>
		<div class="quick_form">
				<a href="#" class="popClose"><img src="/public/images/common/quick_close.png" alt="close"/></a>
				<div class="reservationTit">
					<img src='/public/images/common/reservationPop_tit.png'/>
					<h3>온라인 예약 </h3>

				</div>
				<!-- <span class="line-bar"></div> -->
				<p class="quick_desc">간단한 정보를 입력해주시면<br/>빠른 예약이 가능합니다</p>
				<form class="contain" action="?" name="frm_ps_quick" id="frm_ps_quick" method="post">
						<input type="hidden" name="mode" value="PS_REG">
						<input type="hidden" name="device" value="pc">
						<div class="form_box">
							<ul class="list-unstyled">
								<li>
									<select id="tfc_type_quick" name="tfc_type">
										<option value="">상담받을 진료를 선택해주세요</option>
										<option value="A">목</option>
										<option value="B">허리</option>
										<option value="C">어깨</option>
										<option value="D">무릎</option>
										<option value="E">족부</option>
										<option value="F">기타</option>
									</select>
								</li>
								<li><input type="text" name="mb_name" id="name_quick" placeholder="이름을 입력해주세요."></li>
								<li><input type="text" name="mb_mobile" id="phone_quick" placeholder="핸드폰&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - "></li>
							</ul>
						</div>
						<div class="info_agree">
							<div class="custom-control custom-checkbox d-inline-block mr10">
								<input name="agree_quick" type="checkbox" class="custom-control-input" id="custom-control-input-agree_quick">
								<label class="custom-control-label text_demilight" for="custom-control-input-agree_quick">개인정보 취급방침에 동의</label>
							</div>
							<button type="button" class="view_terms" data-toggle="modal" data-target="#detail_doc1">[자세히보기]</button>
						</div>

						<button class="btn_main_councel" id="quick_img_submit" type="button">온라인 예약신청하기</button>
				</form>

				<script>

					$(".quick_menu li.online_reserve").click(function(){
							$(".quick_form").css("display","block")
						});
					$(".quick_form .popClose").click(function(){
							$(".quick_form").css("display","none")
						});



				</script>
				<script type="text/javascript">
					$(document).ready(function(){
						$('#quick_img_submit').click(function(){
							if($('input:checkbox[name="agree_quick"]:checked').val() == undefined ) {
								alert("개인정보 취급 방침에 동의해 주세요.");
								return false;
							}
							if($('#tfc_type_quick option:selected').val() == '')	{
								alert('상담받을 진료를 선택해주세요.');
								$('#tfc_type_quick').focus();
								return false;
							}
							if($('#name_quick').val() == '')	{
								alert('이름을 입력해주세요');
								$('#name_quick').focus();
								return false;
							}
							if($('#phone_quick').val() == '')	{
								alert('연락처를 입력해주세요');
								$('#phone_quick').focus();
								return false;
							}
							$('#frm_ps_quick').attr('action','/admin/phone/proc/phone_proc.php');
							$('#frm_ps_quick').submit();
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
		</div>
	</header>