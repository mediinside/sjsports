	<header>
		<?php include $GP -> HOME . '/header_banner.html'; ?>
		<!-- GNB 인클루드 -->
		<div class="nav_cover pc">
			<h1><a href="/"><img src="/public/images/common/logo.png" alt="로고"></a></h1>
			<div id="gnb">
				<ul>
					<li> <a href="/about/sub01.php">SJS소개</a>
						<ul>
							<li><a href="/about/sub01.php">병원이념</a></li>
							<li><a href="/about/sub02.php">의료진소개</a></li>
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
				<li><a href="javascript: alert('온라인예약은 준비중입니다.')"><strong class="quick_menu_icon"></strong><span>온라인예약</span></a></li>
				<li><a href="/club/page02.php"><strong class="quick_menu_icon"></strong><span>전문의상담</span></a></li>
				<li><a href="https://pf.kakao.com/_tMzxlxb/" target="_blank"><strong class="quick_menu_icon"></strong><span>카카오톡상담</span></a></li>
				<li><a href="/club/page03.php"><strong class="quick_menu_icon"></strong><span>SJS TV</span></a></li>
				<li><a href="/about/sub06.php"><strong class="quick_menu_icon"></strong><span>찾아오시는길</span></a></li>
			</ul>
		</div>
	</header>