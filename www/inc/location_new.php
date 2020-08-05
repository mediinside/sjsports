<?
	$http_host = $_SERVER['HTTP_HOST'];
	$request_uri = $_SERVER['REQUEST_URI'];
	$url = 'http://' . $http_host . $request_uri;

	$relative_path = eregi_replace("\/[^/]*\.php$", "/", $_SERVER['PHP_SELF']);
	$relative_path = preg_replace("`\/[^/]*\.php$`i", "/", $_SERVER['PHP_SELF']);
	// 웹 문서의 뿌리 경로를 뺀 상대 경로
	// echo $relative_path;
	switch ($relative_path) {
		case '/about/':
		case '/m/about/':
			$list = '<li class="dropdown-item"><a href="sub01.php">병원이념</a></li>
	                <li class="dropdown-item"><a href="sub02.php">의료진소개</a></li>
					<li class="dropdown-item"><a href="sub02_staff.php">운동재활스탭소개</a></li>
	                <li class="dropdown-item"><a href="sub03.php">병원둘러보기</a></li>
	                <li class="dropdown-item"><a href="sub04.php">SPC소개</a></li>
	                <li class="dropdown-item"><a href="sub05.php">첨단장비소개</a></li>
	                <li class="dropdown-item"><a href="sub06.php">찾아오시는길</a></li>';
			break;


		case '/info/':
		case '/m/info/':
			$list = '<li class="dropdown-item"><a href="sub01.php">진료시간</a></li>
	                <li class="dropdown-item"><a href="sub02.php">외래진료안내</a></li>
	                <li class="dropdown-item"><a href="sub03.php">입/퇴원안내</a></li>
	                <li class="dropdown-item"><a href="sub04.php">증명서발급안내</a></li>
	                <li class="dropdown-item"><a href="sub05.php">비급여진료비안내</a></li>';
			break;


		case '/neck/':
		case '/m/neck/':
			$list = '<li class="dropdown-item"><a href="sub01.php">목디스크</a></li>
	                <li class="dropdown-item"><a href="sub02.php">허리디스크</a></li>
	                <li class="dropdown-item"><a href="sub03.php">척추관협착증</a></li>
	                <li class="dropdown-item"><a href="sub04.php">척추분리증</a></li>
	                <li class="dropdown-item"><a href="sub05.php">척추전방전위증</a></li>
	                <li class="dropdown-item"><a href="sub06.php">요추염좌</a></li>
	                <li class="dropdown-item"><a href="sub07.php">근막동통증후군</a></li>';
			break;

		case '/shoulder/':
		case '/m/shoulder/':
			$list = '<li class="dropdown-item"><a href="sub01.php">테니스엘보</a></li>
	                <li class="dropdown-item"><a href="sub02.php">오십견</a></li>
	                <li class="dropdown-item"><a href="sub03.php">회전근개파열</a></li>
	                <li class="dropdown-item"><a href="sub04.php">재발성어깨탈구</a></li>
	                <li class="dropdown-item"><a href="sub05.php">어깨충돌증후군</a></li>
	                <li class="dropdown-item"><a href="sub06.php">석회성건염</a></li>
	                <li class="dropdown-item"><a href="sub07.php">관절와순파열</a></li>
	                <li class="dropdown-item"><a href="sub08.php">견갑골운동장애</a></li>';
			break;

		case '/knee/':
		case '/m/knee/':
			$list = '<li class="dropdown-item"><a href="sub01.php">십자인대파열</a></li>
	                <li class="dropdown-item"><a href="sub02.php">반월상연골파열</a></li>
	                <li class="dropdown-item"><a href="sub03.php">무릎연골연화증</a></li>
	                <li class="dropdown-item"><a href="sub04.php">베이커낭종</a></li>
	                <li class="dropdown-item"><a href="sub05.php">퇴행성관절염</a></li>
	                <li class="dropdown-item"><a href="sub06.php">줄기세포연골재생치료</a></li>';
			break;

		case '/foot/':
		case '/m/foot/':
			$list = '<li class="dropdown-item"><a href="sub01.php">발목염좌</a></li>
	                <li class="dropdown-item"><a href="sub02.php">족저근막염</a></li>
	                <li class="dropdown-item"><a href="sub03.php">무지외반증</a></li>
	                <li class="dropdown-item"><a href="sub04.php">아킬레스건염질환</a></li>
	                <li class="dropdown-item"><a href="sub05.php">발목관절염</a></li>
	                <li class="dropdown-item"><a href="sub06.php">발목연골손상</a></li>';
			break;

		case '/club/':
		case '/m/club/':
			$list = '<li class="dropdown-item"><a href="page01.php">병원소식</a></li>
	                <li class="dropdown-item"><a href="page02.php">전문의상담</a></li>
	                <li class="dropdown-item"><a href="page03.php">SJS TV</a></li>
	                <li class="dropdown-item"><a href="page04.php">치료후기</a></li>
	                <li class="dropdown-item"><a href="page05.php">사회공헌활동</a></li>';
			break;
	}


?>
	<hr id="side-trigger">
	<div id="location">
		<ul class="section contents_head_ul">
			<li class="home contents_head_li">
				<a href="/m"><span class="text-hide">home</span><span class="mb-show"><img src="/public/images/common/location_home_img.png" alt="HOME"></span></a>
			</li>
			<li class="depth dp1 contents_head_li">
				<div class="dropdown">
					<button class="btn_reset" type="button"><span class="mr10"><?=$top_dep_title;?></span></button>
				</div>
			</li>
			<li class="depth dp2 contents_head_li">
				<div class="dropdown">
					<button class="btn_reset dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="mr10"><?=$page_title?></span></button>
					<ul class="dp-section dropdown-menu" aria-labelledby="dropdownMenuButton2">
						<!-- 리스트 -->
						<?=$list?>
					</ul>
				</div>
			</li>
			<?php if($locArr[2]) { ?>
			<li class="depth dp3 contents_head_li">
				<div class="dropdown">
					<button class="btn_reset dropdown-toggle" type="button" id="dropdownMenuButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="mr10"></span></button>
					<!-- <a href="javascript:void(0);"><span></span></a> -->
					<ul class="dp-section dropdown-menu" aria-labelledby="dropdownMenuButton3"></ul>
				</div>
			</li>
			<?php } ?>
		</ul>
	</div>
