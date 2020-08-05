	<div id="landscape"><p class="text-center mt40">세종스포츠정형외과 모바일 웹은 세로 화면에 최적화되어 있습니다.<br/><img src="/public/images/common/landscape.png" alt="이미지" class="mt40"></p></div>
	<header>
	<?php 	
	$basename=basename($_SERVER["PHP_SELF"]);
	if($basename == "index.php"){
		$args = '';
		$args['ts_idx'] =$ts_idx;
		$rst = $C_Slide->Main_Slide_Show($args);

		for($i=0; $i<count($rst); $i++) {
			$ts_img2 				= $rst[$i]['ts_img2'];				
			}			
		if($ts_img2 != ""){
			include $GP -> HOME . '/header_banner_mobile.html'; 
		}
	}
		
	?>
		<!-- GNB 인클루드 -->
		<div class="mobile">
			<div class="head">
				<h1><a href="/m"><img src="/public/images/common/logo-m.png" alt="로고"></a></h1>
				<button type="button" name="button" class="mo-gnb-open"><img src="/public/images/common/btn-menu-m.png"
						alt="메뉴 오픈"></button>
				<button type="button" name="button" class="mo-search" onclick="search_box_on()"><img src="/public/images/common/btn-search-m-w.png"
						alt="검색"></button>
			</div>
			<div class="m-dim"></div>
			<div id="mobile-gnb" class="">
				<div class="top">
					<a href="/m" class="logo"><img src="/public/images/common/logo-main-m.png" alt="로고"></a>
					<!-- <a href="#" class="search"><img src="/public/images/common/m_search.png" alt="검색"></a> -->
					<button type="button" name="button" class="mo-gnb-close"></button>
				</div>
				<div class="body">
					<div class="mobile-util">
						<a href="/m/member/login.php">로그인</a>
					</div>
					<ul class="nav">
						<li>
							<button type="button">SJS소개</button>
							<ul>
								<li><a href="/m/about/sub01.php">병원이념</a></li>
								<li><a href="/m/about/sub02.php">의료진소개</a></li>
								<li><a href="/m/about/sub02_staff.php">운동재활스탭소개</a></li>
								<li><a href="/m/about/sub03.php">병원둘러보기</a></li>
								<li><a href="/m/about/sub04.php">SPC소개</a></li>
								<li><a href="/m/about/sub05.php">첨단장비소개</a></li>
								<li><a href="/m/about/sub06.php">찾아오시는길</a></li>
							</ul>
						</li>
						<li>
							<button type="button">진료안내</button>
							<ul>
								<li><a href="/m/info/sub01.php">진료시간</a></li>
								<li><a href="/m/info/sub02.php">외래진료안내</a></li>
								<li><a href="/m/info/sub03.php">입/퇴원안내</a></li>
								<li><a href="/m/info/sub04.php">증명서발급안내</a></li>
								<li><a href="/m/info/sub05.php">비급여진료비</a></li>

							</ul>
						</li>
						<li>
							<button type="button">목/허리</button>
							<ul>
								<li><a href="/m/neck/sub01.php">목디스크</a></li>
								<li><a href="/m/neck/sub02.php">허리디스크</a></li>
								<li><a href="/m/neck/sub03.php">척추관협착증</a></li>
								<li><a href="/m/neck/sub04.php">척추분리증</a></li>
								<li><a href="/m/neck/sub05.php">척추전방전위증</a></li>
								<li><a href="/m/neck/sub06.php">요추염좌</a></li>
								<li><a href="/m/neck/sub07.php">근막동통증증후군</a></li>
							</ul>
						</li>
						<li>
							<button type="button">어깨/팔꿈치</button>
							<ul>
								<li><a href="/m/shoulder/sub01.php">테니스엘보</a></li>
								<li><a href="/m/shoulder/sub02.php">오십견</a></li>
								<li><a href="/m/shoulder/sub03.php">회전근개파열</a></li>
								<li><a href="/m/shoulder/sub04.php">재발성어깨탈구</a></li>
								<li><a href="/m/shoulder/sub05.php">어깨충돌증후군</a></li>
								<li><a href="/m/shoulder/sub06.php">석회성건염</a></li>
								<li><a href="/m/shoulder/sub07.php">관절와순파열</a></li>
								<li><a href="/m/shoulder/sub08.php">견갑골운동장애</a></li>
							</ul>
						</li>
						<li>
							<button type="button">무릎</button>
							<ul>
								<li><a href="/m/knee/sub01.php">십자인대파열</a></li>
								<li><a href="/m/knee/sub02.php">반월상연골파열</a></li>
								<li><a href="/m/knee/sub03.php">무릎연골연화증</a></li>
								<li><a href="/m/knee/sub04.php">베이커낭종</a></li>
								<li><a href="/m/knee/sub05.php">퇴행성관절염</a></li>
							</ul>
						</li>
						<li>
							<button type="button">발/발목</button>
							<ul>
								<li><a href="/m/foot/sub01.php">발목염좌</a></li>
								<li><a href="/m/foot/sub02.php">족저근막염</a></li>
								<li><a href="/m/foot/sub03.php">무지외반증</a></li>
								<li><a href="/m/foot/sub04.php">아킬레스건염질환</a></li>
								<li><a href="/m/foot/sub05.php">발목관절염</a></li>
								<li><a href="/m/foot/sub06.php">발목연골손상</a></li>
								<li><a href="/m/foot/sub07.php">단지증</a></li>
							</ul>
						</li>
						<li>
							<button type="button">SJS클럽</button>
							<ul>
								<li><a href="/m/club/page01.php">병원소식</a></li>
								<li><a href="/m/club/page01.php">전문의상담</a></li>
								<li><a href="/m/club/page03.php">SJS TV</a></li>
								<li><a href="/m/club/page04.php">치료후기</a></li>
								<li><a href="/m/club/page05.php">사회공헌활동</a></li>
							</ul>
						</li>
					</ul>
					 <div class="link-wrap">
						<!-- <a href="/m/club/page01.php">병원소식</a>
						<a href="/m/club/page01.php">전문의상담</a>  -->
						<a href="/m/about/sub02.php">의료진소개</a>
						<a href="/m/info/sub01.php">진료시간</a>
						<a href="/m/club/page03.php">SJS TV</a>
						<a href="/m/club/page04.php">치료후기</a>
					</div> 
				</div>
			</div>
		</div>
		<!-- //GNB 인클루드 -->
		<div class="search_box_1 bg_color_darkblack p30" style="display: none;">
			<button type="button" class="search_box_1_close" onclick="search_box_off()"><span class="text-hide">닫기</span></button>
			<input id="search_text" class="searcher_input input_reset input_text_777777 py10 d-inline-block mr70" type="text" placeholder="검색어를 입력해주세요"value="<?=$_GET['stext']?>">
			<button type="button" class="search_hashtag mr10" onclick="location.href='/m/club/search.php?stext=회전근개파열'">#회전근개파열</button>
			<button type="button" class="search_hashtag mr10" onclick="location.href='/m/club/search.php?stext=아킬레스건염질환'">#아킬레스건염질환</button>
			<button type="button" class="search_hashtag mr10" onclick="location.href='/m/club/search.php?stext=견갑골운동장애'">#견갑골운동장애</button>
			<button type="button" class="search_hashtag mr10" onclick="location.href='/m/club/search.php?stext=반월상연골파열'">#반월상연골파열</button>
		</div>
	</header>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#search_text").keydown(function(key) {
				var val = $("#search_text").val();
	            if (key.keyCode == 13) {
	                // alert("엔터키를 눌렀습니다.");
	                location.href = '/m/club/search.php?stext=' + val;
	            }
	    	});
		});
	</script>