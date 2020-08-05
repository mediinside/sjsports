
<ul class="skip-nav">
	<li><a href="#container">본문 바로가기</a></li>
	<li><a href="#header">메뉴 바로가기</a></li>
</ul>
<div id="wrap" <?php if ($isMobile != 'true') echo "class=\"desktop\"";?>>
	<div id="header">
		<div class="hgroup">
			<h1 class="logo"><a href="/"><span class="text-ir">예스병원</span></a></h1>
			<div class="utils">
				<div class="tel">
					<span class="phone-number"><i class="icon"></i>1577-1680</span>
				</div>
				<!-- <ul class="quick">
					<li><a href="http://blog.naver.com/yeshospitalguro" target="_blank" class="link blog">
						<i class="icon"></i>
						<span class="text-ir">블로그 바로가기</span>
					</a></li>
					<li><a href="https://www.facebook.com/yespine" target="_blank" class="link facebook">
						<i class="icon"></i>
						<span class="text-ir">페이스북 바로가기</span>
					</a></li>
				</ul> -->
				<ul class="foreign">
					<li class="chinese"><a href="/cn.html">중국어 페이지</a></li>
					<li class="english"><a href="/en.html">영어 페이지</a></li>
					<li><a href="tel:15771680" class="call"><span>1577-1680</span></a></li>
				</ul>
			</div>
		</div>
		<div id="nav">
			<h2 class="trigger"><a href="javascript:void(0)"><i class="icon"></i><span class="text-ir">메뉴</span></a></h2>
			<div class="overlay"></div>
			<div class="group">
				<div class="sign-util">
					<ul>
						<?php
						//쓰기권한
						if($_SESSION['suserid']) {
						?>
						<li><a href="/member/logout.html"><span>로그아웃</span></a></li>
						<li><a href="https://www.yespine.co.kr/member/mypage.html"><span>마이페이지</span></a></li>
						<?php } else { ?>
						<li><a href="https://www.yespine.co.kr/member/login.html"><span>로그인</span></a></li>
						<li><a href="https://www.yespine.co.kr/member/join.html"><span>회원가입</span></a></li>
						<?php } ?>
					</ul>
				</div>
				<div class="panel">
					<ul class="list">
						<li class="dp1<?php if($locArr[0] == "1") echo " current"?>">
							<a href="javascript:void(0)"><span>병원소개</span></a>
							<div class="dp-section">
								<h3 class="header"><span>병원소개</span></h3>
								<ul>
									<li class="dp2<?php if($locArr[0] == "1" && $locArr[1] == "1") echo " current"?>">
										<a href="/intro/page01.html"><span>인사말</span></a>
									</li>
									<li class="dp2<?php if($locArr[0] == "1" && $locArr[1] == "2") echo " current"?>">
										<a href="/intro/page02.html"><span>병원 이념</span></a>
									</li>
									<li class="dp2<?php if($locArr[0] == "1" && $locArr[1] == "3") echo " current"?>">
										<a href="/intro/page03.html"><span>연혁</span></a>
									</li>
									<li class="dp2<?php if($locArr[0] == "1" && $locArr[1] == "4") echo " current"?>">
										<a href="/intro/page04.html"><span>의료진 소개</span></a>
									</li>
									<li class="dp2<?php if($locArr[0] == "1" && $locArr[1] == "5") echo " current"?>">
										<a href="/intro/page05.html"><span>병원 층별 안내</span></a>
									</li>
									<li class="dp2<?php if($locArr[0] == "1" && $locArr[1] == "6") echo " current"?>">
										<a href="/intro/page06.html?tmc_type=A"><span>의료장비 안내</span></a>
									</li>
									<li class="dp2<?php if($locArr[0] == "1" && $locArr[1] == "7") echo " current"?>">
										<a href="/intro/page07.html"><span>주차 안내</span></a>
									</li>
									<li class="dp2<?php if($locArr[0] == "1" && $locArr[1] == "8") echo " current"?>">
										<a href="/intro/page08.html"><span>오시는 길</span></a>
									</li>
								</ul>
							</div>
						</li>
						<li class="dp1<?php if($locArr[0] == "2") echo " current"?>">
							<a href="javascript:void(0)"><span>이용안내</span></a>
							<div class="dp-section">
								<h3 class="header"><span>이용안내</span></h3>
								<ul>
									<li class="dp2<?php if($locArr[0] == "2" && $locArr[1] == "1") echo " current"?>">
										<a href="/guide/page01.html"><span>진료시간 안내</span></a>
									</li>
									<li class="dp2<?php if($locArr[0] == "2" && $locArr[1] == "2") echo " current"?>">
										<a href="/guide/page02.html"><span>외래진료 안내</span></a>
									</li>
									<li class="dp2<?php if($locArr[0] == "2" && $locArr[1] == "3") echo " current"?>">
										<a href="/guide/page03.html"><span>입/퇴원 안내</span></a>
									</li>
									<li class="dp2<?php if($locArr[0] == "2" && $locArr[1] == "4") echo " current"?>">
										<a href="/guide/page04.html"><span>증명서 발급 안내</span></a>
									</li>
									<li class="dp2<?php if($locArr[0] == "2" && $locArr[1] == "5") echo " current"?>">
										<a href="/guide/page05.html?cate1=1&cate2=1"><span>비급여 진료비 안내</span></a>
									</li>
									<li class="dp2<?php if($locArr[0] == "2" && $locArr[1] == "6") echo " current"?>">
										<a href="/guide/page06.html"><span>환자의 권리와 의무</span></a>
									</li>
								</ul>
							</div>
						</li>
						<li class="dp1<?php if($locArr[0] == "3") echo " current"?>">
							<a href="javascript:void(0)"><span>척추센터</span></a>
							<div class="dp-section">
								<h3 class="header"><span>척추센터</span></h3>
								<ul>
									<li class="dp2<?php if($locArr[0] == "3" && $locArr[1] == "1") echo " current"?>">
										<a href="/spine/waist/page01.html"><span>허리</span><i class="bicon-arrow-down"></i></a>
										<div class="dp-section">
											<h4 class="header">허리</h4>
											<ul>
												<li class="dp3<?php if($locArr[0] == "3" && $locArr[1] == "1" && $locArr[2] == "1") echo " current"?>"><a href="/spine/waist/page01.html"><span>허리 디스크<small>(요추 추간판탈출증)</small></span></a></li>
												<li class="dp3<?php if($locArr[0] == "3" && $locArr[1] == "1" && $locArr[2] == "2") echo " current"?>"><a href="/spine/waist/page02.html"><span>척추관 협착증</span></a></li>
												<li class="dp3<?php if($locArr[0] == "3" && $locArr[1] == "1" && $locArr[2] == "3") echo " current"?>"><a href="/spine/waist/page03.html"><span>척추전방전위증</span></a></li>
												<li class="dp3<?php if($locArr[0] == "3" && $locArr[1] == "1" && $locArr[2] == "4") echo " current"?>"><a href="/spine/waist/page04.html"><span>척추 분리증</span></a></li>
												<li class="dp3<?php if($locArr[0] == "3" && $locArr[1] == "1" && $locArr[2] == "5") echo " current"?>"><a href="/spine/waist/page05.html"><span>척추측만증</span></a></li>
												<li class="dp3<?php if($locArr[0] == "3" && $locArr[1] == "1" && $locArr[2] == "6") echo " current"?>"><a href="/spine/waist/page06.html"><span>디스크 내장증</span></a></li>
												<li class="dp3<?php if($locArr[0] == "3" && $locArr[1] == "1" && $locArr[2] == "7") echo " current"?>"><a href="/spine/waist/page07.html"><span>척추 압박 골절</span></a></li>
												<li class="dp3<?php if($locArr[0] == "3" && $locArr[1] == "1" && $locArr[2] == "8") echo " current"?>"><a href="/spine/waist/page08.html"><span>강직성 척추염</span></a></li>
											</ul>
										</div>
									</li>
									<li class="dp2<?php if($locArr[0] == "3" && $locArr[1] == "2") echo " current"?>">
										<a href="/spine/neck/page01.html"><span>목</span><i class="bicon-arrow-down"></i></a>
										<div class="dp-section">
											<h4 class="header"><span>목<span></h4>
											<ul>
												<li class="dp3<?php if($locArr[0] == "3" && $locArr[1] == "2" && $locArr[2] == "1") echo " current"?>"><a href="/spine/neck/page01.html"><span>목 디스크<small>(경추 추간판탈출증)</small></span></a></li>
												<li class="dp3<?php if($locArr[0] == "3" && $locArr[1] == "2" && $locArr[2] == "2") echo " current"?>"><a href="/spine/neck/page02.html"><span>거북목 증후군</span></a></li>
												<li class="dp3<?php if($locArr[0] == "3" && $locArr[1] == "2" && $locArr[2] == "3") echo " current"?>"><a href="/spine/neck/page03.html"><span>근막통증증후군</span></a></li>
												<li class="dp3<?php if($locArr[0] == "3" && $locArr[1] == "2" && $locArr[2] == "4") echo " current"?>"><a href="/spine/neck/page04.html"><span>후종인대 골화증</span></a></li>
											</ul>
										</div>
									</li>
								</ul>
							</div>
						</li>
						<li class="dp1<?php if($locArr[0] == "4") echo " current"?>">
							<a href="javascript:void(0)"><span>관절센터</span></a>
							<div class="dp-section">
								<h3 class="header"><span>관절센터</span></h3>
								<ul>
									<li class="dp2<?php if($locArr[0] == "4" && $locArr[1] == "1") echo " current"?>">
										<a href="/joint/shoulder/page01.html"><span>어깨</span><i class="bicon-arrow-down"></i></a>
										<div class="dp-section">
											<h4 class="header">어깨</h4>
											<ul>
												<li class="dp3<?php if($locArr[0] == "4" && $locArr[1] == "1" && $locArr[2] == "1") echo " current"?>"><a href="/joint/shoulder/page01.html"><span>회전근개파열</span></a></li>
												<li class="dp3<?php if($locArr[0] == "4" && $locArr[1] == "1" && $locArr[2] == "2") echo " current"?>"><a href="/joint/shoulder/page02.html"><span>오십견<small>(유착성관절낭염)</small></span></a></li>
												<li class="dp3<?php if($locArr[0] == "4" && $locArr[1] == "1" && $locArr[2] == "3") echo " current"?>"><a href="/joint/shoulder/page03.html"><span>석회성건염</span></a></li>
												<li class="dp3<?php if($locArr[0] == "4" && $locArr[1] == "1" && $locArr[2] == "4") echo " current"?>"><a href="/joint/shoulder/page04.html"><span>어깨충돌증후군</span></a></li>
												<li class="dp3<?php if($locArr[0] == "4" && $locArr[1] == "1" && $locArr[2] == "5") echo " current"?>"><a href="/joint/shoulder/page05.html"><span>관절와순파열</span></a></li>
												<li class="dp3<?php if($locArr[0] == "4" && $locArr[1] == "1" && $locArr[2] == "6") echo " current"?>"><a href="/joint/shoulder/page06.html"><span>어깨탈구</span></a></li>
											</ul>
										</div>
									</li>
									<li class="dp2<?php if($locArr[0] == "4" && $locArr[1] == "2") echo " current"?>">
										<a href="/joint/knee/page01.html"><span>무릎</span><i class="bicon-arrow-down"></i></a>
										<div class="dp-section">
											<h4 class="header"><span>무릎</span></h4>
											<ul>
												<li class="dp3<?php if($locArr[0] == "4" && $locArr[1] == "2" && $locArr[2] == "1") echo " current"?>"><a href="/joint/knee/page01.html"><span>전/후방 십자인대파열</span></a></li>
												<li class="dp3<?php if($locArr[0] == "4" && $locArr[1] == "2" && $locArr[2] == "2") echo " current"?>"><a href="/joint/knee/page02.html"><span>반월상연골파열</span></a></li>
												<li class="dp3<?php if($locArr[0] == "4" && $locArr[1] == "2" && $locArr[2] == "3") echo " current"?>"><a href="/joint/knee/page03.html"><span>연골연화증</span></a></li>
												<li class="dp3<?php if($locArr[0] == "4" && $locArr[1] == "2" && $locArr[2] == "4") echo " current"?>"><a href="/joint/knee/page04.html"><span>퇴행성관절염</span></a></li>
											</ul>
										</div>
									</li>
									<li class="dp2<?php if($locArr[0] == "4" && $locArr[1] == "3") echo " current"?>">
										<a href="/joint/hip/page01.html"><span>고관절</span><i class="bicon-arrow-down"></i></a>
										<div class="dp-section">
											<h4 class="header"><span>고관절</span></h4>
											<ul>
												<li class="dp3<?php if($locArr[0] == "4" && $locArr[1] == "3" && $locArr[2] == "1") echo " current"?>"><a href="/joint/hip/page01.html"><span>고관절충돌증후군</span></a></li>
												<li class="dp3<?php if($locArr[0] == "4" && $locArr[1] == "3" && $locArr[2] == "2") echo " current"?>"><a href="/joint/hip/page02.html"><span>대퇴골두무혈성괴사</span></a></li>
												<li class="dp3<?php if($locArr[0] == "4" && $locArr[1] == "3" && $locArr[2] == "3") echo " current"?>"><a href="/joint/hip/page03.html"><span>고관절염</span></a></li>
												<li class="dp3<?php if($locArr[0] == "4" && $locArr[1] == "3" && $locArr[2] == "4") echo " current"?>"><a href="/joint/hip/page04.html"><span>고관절골절</span></a></li>
											</ul>
										</div>
									</li>
									<li class="dp2<?php if($locArr[0] == "4" && $locArr[1] == "4") echo " current"?>">
										<a href="/joint/foot/page01.html"><span>족부</span><i class="bicon-arrow-down"></i></a>
										<div class="dp-section">
											<h4 class="header"><span>족부</span></h4>
											<ul>
												<li class="dp3<?php if($locArr[0] == "4" && $locArr[1] == "4" && $locArr[2] == "1") echo " current"?>"><a href="/joint/foot/page01.html"><span>무지외반증</span></a></li>
												<li class="dp3<?php if($locArr[0] == "4" && $locArr[1] == "4" && $locArr[2] == "2") echo " current"?>"><a href="/joint/foot/page02.html"><span>족저근막염</span></a></li>
												<li class="dp3<?php if($locArr[0] == "4" && $locArr[1] == "4" && $locArr[2] == "3") echo " current"?>"><a href="/joint/foot/page03.html"><span>아킬레스건염</span></a></li>
												<li class="dp3<?php if($locArr[0] == "4" && $locArr[1] == "4" && $locArr[2] == "4") echo " current"?>"><a href="/joint/foot/page04.html"><span>발목염좌</span></a></li>
												<li class="dp3<?php if($locArr[0] == "4" && $locArr[1] == "4" && $locArr[2] == "5") echo " current"?>"><a href="/joint/foot/page05.html"><span>발목관절염</span></a></li>
											</ul>
										</div>
									</li>
									<li class="dp2<?php if($locArr[0] == "4" && $locArr[1] == "5") echo " current"?>">
										<a href="/joint/arm/page01.html"><span>수부</span><i class="bicon-arrow-down"></i></a>
										<div class="dp-section">
											<h4 class="header"><span>수부</span></h4>
											<ul>
												<li class="dp3<?php if($locArr[0] == "4" && $locArr[1] == "5" && $locArr[2] == "1") echo " current"?>"><a href="/joint/arm/page01.html"><span>손목터널증후군</span></a></li>
												<li class="dp3<?php if($locArr[0] == "4" && $locArr[1] == "5" && $locArr[2] == "2") echo " current"?>"><a href="/joint/arm/page02.html""><span>방아쇠수지</span></a></li>
												<li class="dp3<?php if($locArr[0] == "4" && $locArr[1] == "5" && $locArr[2] == "3") echo " current"?>"><a href="/joint/arm/page03.html""><span>골프/테니스엘보</span></a></li>
												<li class="dp3<?php if($locArr[0] == "4" && $locArr[1] == "5" && $locArr[2] == "4") echo " current"?>"><a href="/joint/arm/page04.html""><span>류마티스관절염</span></a></li>
											</ul>
										</div>
									</li>
								</ul>
							</div>
						</li>
						<li class="dp1<?php if($locArr[0] == "5") echo " current"?>">
							<a href="javascript:void(0)"><span>치료방법</span></a>
							<div class="dp-section">
								<h3 class="header"><span>치료방법</span></h3>
								<ul>
									<li class="dp2<?php if($locArr[0] == "5" && $locArr[1] == "1") echo " current"?>">
										<a href="/cure/nontreat/page01.html?type=spine#spine"><span>비수술치료</span><i class="bicon-arrow-down"></i></a>
										<div class="dp-section">
											<h4 class="header"><span>비수술치료</span></h4>
											<ul>
												<li class="dp3<?php if($locArr[0] == "5" && $locArr[1] == "1" && $locArr[2] == "1") echo " current"?>"><a href="/cure/nontreat/page01.html?type=spine#spine"><span>주사치료</span></a></li>
												<li class="dp3<?php if($locArr[0] == "5" && $locArr[1] == "1" && $locArr[2] == "2") echo " current"?>"><a href="/cure/nontreat/page02.html"><span>신경차단술</span></a></li>
												<li class="dp3<?php if($locArr[0] == "5" && $locArr[1] == "1" && $locArr[2] == "3") echo " current"?>"><a href="/cure/nontreat/page03.html"><span>고주파열치료술</span></a></li>
												<li class="dp3<?php if($locArr[0] == "5" && $locArr[1] == "1" && $locArr[2] == "4") echo " current"?>"><a href="/cure/nontreat/page04.html"><span>신경성형술</span></a></li>
												<li class="dp3<?php if($locArr[0] == "5" && $locArr[1] == "1" && $locArr[2] == "5") echo " current"?>"><a href="/cure/nontreat/page05.html"><span>내시경레이저디스크제거술</span></a></li>
												<li class="dp3<?php if($locArr[0] == "5" && $locArr[1] == "1" && $locArr[2] == "6") echo " current"?>"><a href="/cure/nontreat/page06.html"><span>꼬리뼈내시경레이저시술<small>(미니레이저디스크시술)</small></span></a></li>
												<li class="dp3<?php if($locArr[0] == "5" && $locArr[1] == "1" && $locArr[2] == "7") echo " current"?>"><a href="/cure/nontreat/page07.html"><span>척추내시경신경감압술</span></a></li>
												<li class="dp3<?php if($locArr[0] == "5" && $locArr[1] == "1" && $locArr[2] == "8") echo " current"?>"><a href="/cure/nontreat/page08.html"><span>풍선확장술</span></a></li>
												<li class="dp3<?php if($locArr[0] == "5" && $locArr[1] == "1" && $locArr[2] == "9") echo " current"?>"><a href="/cure/nontreat/page09.html"><span>경피적 척추체성형술</span></a></li>
											</ul>
										</div>
									</li>
									<li class="dp2<?php if($locArr[0] == "5" && $locArr[1] == "2") echo " current"?>">
										<a href="/cure/spine/page01.html"><span>척추수술치료</span><i class="bicon-arrow-down"></i></a>
										<div class="dp-section">
											<h4 class="header"><span>척추수술치료</span></h4>
											<ul>
												<li class="dp3<?php if($locArr[0] == "5" && $locArr[1] == "2" && $locArr[2] == "1") echo " current"?>"><a href="/cure/spine/page01.html"><span>미세현미경레이저디스크수술</span></a></li>
												<li class="dp3<?php if($locArr[0] == "5" && $locArr[1] == "2" && $locArr[2] == "2") echo " current"?>"><a href="/cure/spine/page02.html"><span>미세현미경척추후궁절제술</span></a></li>
												<li class="dp3<?php if($locArr[0] == "5" && $locArr[1] == "2" && $locArr[2] == "3") echo " current"?>"><a href="/cure/spine/page03.html"><span>전방경유경추골유합술</span></a></li>
												<li class="dp3<?php if($locArr[0] == "5" && $locArr[1] == "2" && $locArr[2] == "4") echo " current"?>"><a href="/cure/spine/page04.html"><span>후방경유추간공확장술</span></a></li>
												<li class="dp3<?php if($locArr[0] == "5" && $locArr[1] == "2" && $locArr[2] == "5") echo " current"?>"><a href="/cure/spine/page05.html"><span>최소침습 척추고정술(유합술)</span></a></li>
												<!-- <li class="dp3<?php if($locArr[0] == "5" && $locArr[1] == "2" && $locArr[2] == "6") echo " current"?>"><a href="/cure/spine/page06.html"><span>최소침습척추유합술</span></a></li> -->
												<li class="dp3<?php if($locArr[0] == "5" && $locArr[1] == "2" && $locArr[2] == "7") echo " current"?>"><a href="/cure/spine/page07.html"><span>경추 인공디스크치환술</span></a></li>
											</ul>
										</div>
									</li>
									<li class="dp2<?php if($locArr[0] == "5" && $locArr[1] == "3") echo " current"?>">
										<a href="/cure/joint/page01.html"><span>관절수술치료</span><i class="bicon-arrow-down"></i></a>
										<div class="dp-section">
											<h4 class="header"><span>관절수술치료</span></h4>
											<ul>
												<li class="dp3<?php if($locArr[0] == "5" && $locArr[1] == "3" && $locArr[2] == "1") echo " current"?>"><a href="/cure/joint/page01.html"><span>관절내시경</span></a></li>
												<li class="dp3<?php if($locArr[0] == "5" && $locArr[1] == "3" && $locArr[2] == "2") echo " current"?>"><a href="/cure/joint/page02.html"><span>회전근개봉합술</span></a></li>
												<li class="dp3<?php if($locArr[0] == "5" && $locArr[1] == "3" && $locArr[2] == "3") echo " current"?>"><a href="/cure/joint/page03.html"><span>브리즈망<small>(수동적 도수조작술, 유착박리술)</small></span></a></li>
												<li class="dp3<?php if($locArr[0] == "5" && $locArr[1] == "3" && $locArr[2] == "4") echo " current"?>"><a href="/cure/joint/page04.html"><span>석회제거술</span></a></li>
												<li class="dp3<?php if($locArr[0] == "5" && $locArr[1] == "3" && $locArr[2] == "5") echo " current"?>"><a href="/cure/joint/page05.html"><span>견봉성형술</span></a></li>
												<li class="dp3<?php if($locArr[0] == "5" && $locArr[1] == "3" && $locArr[2] == "6") echo " current"?>"><a href="/cure/joint/page06.html"><span>관절와순봉합술<small>(방카르트봉합술)</small></span></a></li>
												<li class="dp3<?php if($locArr[0] == "5" && $locArr[1] == "3" && $locArr[2] == "7") echo " current"?>"><a href="/cure/joint/page07.html"><span>십자인대재건술</span></a></li>
												<li class="dp3<?php if($locArr[0] == "5" && $locArr[1] == "3" && $locArr[2] == "8") echo " current"?>"><a href="/cure/joint/page08.html"><span>반월상봉합술및절제술</span></a></li>
												<li class="dp3<?php if($locArr[0] == "5" && $locArr[1] == "3" && $locArr[2] == "9") echo " current"?>"><a href="/cure/joint/page09.html"><span>연골재생술</span></a></li>
												<li class="dp3<?php if($locArr[0] == "5" && $locArr[1] == "3" && $locArr[2] == "10") echo " current"?>"><a href="/cure/joint/page10.html"><span>근위경골절골술<small>(휜다리교정술)</small></span></a></li>
												<li class="dp3<?php if($locArr[0] == "5" && $locArr[1] == "3" && $locArr[2] == "11") echo " current"?>"><a href="/cure/joint/page11.html"><span>최소침습 인공관절수술</span></a></li>
												<li class="dp3<?php if($locArr[0] == "5" && $locArr[1] == "3" && $locArr[2] == "12") echo " current"?>"><a href="/cure/joint/page12.html"><span>무지외반교정절골술</span></a></li>
												<li class="dp3<?php if($locArr[0] == "5" && $locArr[1] == "3" && $locArr[2] == "13") echo " current"?>"><a href="/cure/joint/page13.html"><span>발목인대봉합술</span></a></li>
												<li class="dp3<?php if($locArr[0] == "5" && $locArr[1] == "3" && $locArr[2] == "14") echo " current"?>"><a href="/cure/joint/page14.html"><span>수근관유리술</span></a></li>
												<li class="dp3<?php if($locArr[0] == "5" && $locArr[1] == "3" && $locArr[2] == "15") echo " current"?>"><a href="/cure/joint/page15.html"><span>방아쇠수지유리술</span></a></li>
											</ul>
										</div>
									</li>
									<li class="dp2<?php if($locArr[0] == "5" && $locArr[1] == "4") echo " current"?>">
										<a href="/cure/rehab/page01.html"><span>재활운동치료</span><i class="bicon-arrow-down"></i></a>
										<div class="dp-section">
											<h4 class="header"><span>재활운동치료</span></h4>
											<ul>
												<li class="dp3<?php if($locArr[0] == "5" && $locArr[1] == "4" && $locArr[2] == "1") echo " current"?>"><a href="/cure/rehab/page01.html"><span>도수치료</span></a></li>
												<li class="dp3<?php if($locArr[0] == "5" && $locArr[1] == "4" && $locArr[2] == "2") echo " current"?>"><a href="/cure/rehab/page02.html"><span>체외충격파치료</span></a></li>
												<li class="dp3<?php if($locArr[0] == "5" && $locArr[1] == "4" && $locArr[2] == "3") echo " current"?>"><a href="/cure/rehab/page03.html"><span>물리치료</span></a></li>
												<li class="dp3<?php if($locArr[0] == "5" && $locArr[1] == "4" && $locArr[2] == "4") echo " current"?>"><a href="/cure/rehab/page04.html"><span>연부조직가동술<small>(MCT)</small></span></a></li>
												<li class="dp3<?php if($locArr[0] == "5" && $locArr[1] == "4" && $locArr[2] == "5") echo " current"?>"><a href="/cure/rehab/page05.html"><span>지속적수동운동<small>(CPM)</small></span></a></li>
												<li class="dp3<?php if($locArr[0] == "5" && $locArr[1] == "4" && $locArr[2] == "6") echo " current"?>"><a href="/cure/rehab/page06.html"><span>무중력디스크감압치료</span></a></li>
												<!-- <li class="dp3<?php if($locArr[0] == "5" && $locArr[1] == "4" && $locArr[2] == "7") echo " current"?>"><a href="/cure/rehab/page07.html"><span>신장분사치료</span></a></li> -->
											</ul>
										</div>
									</li>
								</ul>
							</div>
						</li>
						<li class="dp1<?php if($locArr[0] == "6") echo " current"?>">
							<a href="javascript:void(0)"><span>상담/예약</span></a>
							<div class="dp-section">
								<h3 class="header"><span>상담/예약</span></h3>
								<ul>
									<li class="dp2<?php if($locArr[0] == "6" && $locArr[1] == "2") echo " current"?>">
										<a href="https://www.yespine.co.kr/reserve/page02.html"><span>간편예약</span></a>
									</li>
									<li class="dp2<?php if($locArr[0] == "6" && $locArr[1] == "1") echo " current"?>">
										<a href="https://www.yespine.co.kr/reserve/page01.html"><span>온라인예약</span></a>
									</li>
									<li class="dp2<?php if($locArr[0] == "6" && $locArr[1] == "3") echo " current"?>">
										<a href="https://www.yespine.co.kr/reserve/page03.html"><span>온라인상담</span></a>
									</li>
									<li class="dp2<?php if($locArr[0] == "6" && $locArr[1] == "4") echo " current"?>">
										<a href="/reserve/page04.html"><span>자주묻는질문</span></a>
									</li>
								</ul>
							</div>
						</li>
						<li class="dp1<?php if($locArr[0] == "7") echo " current"?>">
							<a href="javascript:void(0)"><span>커뮤니티</span></a>
							<div class="dp-section">
								<h3 class="header"><span>커뮤니티</span></h3>
								<ul>
									<li class="dp2<?php if($locArr[0] == "7" && $locArr[1] == "1") echo " current"?>">
										<a href="/news/page01.html"><span>공지사항</span></a>
									</li>
									<li class="dp2<?php if($locArr[0] == "7" && $locArr[1] == "2") echo " current"?>">
										<a href="/news/page02.html"><span>병원소식</span></a>
									</li>
									<li class="dp2<?php if($locArr[0] == "7" && $locArr[1] == "3") echo " current"?>">
										<a href="/news/page03.html"><span>언론홍보</span></a>
									</li>
									<li class="dp2<?php if($locArr[0] == "7" && $locArr[1] == "4") echo " current"?>">
										<a href="/news/page04.html"><span>사회공헌</span></a>
									</li>
									<li class="dp2<?php if($locArr[0] == "7" && $locArr[1] == "8") echo " current"?>">
										<a href="/news/page08.html"><span>치료후기</span></a>
									</li>
									<li class="dp2<?php if($locArr[0] == "7" && $locArr[1] == "5") echo " current"?>">
										<a href="/news/page05.html"><span>건강정보</span></a>
									</li>
									<li class="dp2<?php if($locArr[0] == "7" && $locArr[1] == "6") echo " current"?>">
										<a href="https://www.yespine.co.kr/news/page06.html"><span>감사의편지</span></a>
									</li>
									<li class="dp2<?php if($locArr[0] == "7" && $locArr[1] == "7") echo " current"?>">
										<a href="https://www.yespine.co.kr/news/page07.html"><span>고객의소리</span></a>
									</li>
								</ul>
							</div>
						</li>
						<li class="dp1 none<?php if($locArr[0] == "100") echo " current"?>">
							<a href="javascript:void(0)"><span>MEMBER</span></a>
							<div class="dp-section">
								<h3 class="header"><span>MEMBER</span></h3>
								<ul>
									<li class="dp2<?php if($locArr[0] == "100" && $locArr[1] == "10") echo " current"?>">
										<a href="/member/privacy.html"><span>개인정보처리방침</span></a>
									</li>
									<li class="dp2<?php if($locArr[0] == "100" && $locArr[1] == "11") echo " current"?>">
										<a href="/member/terms.html"><span>이용약관</span></a>
									</li>
									<li class="dp2<?php if($locArr[0] == "100" && $locArr[1] == "12") echo " current"?>">
										<a href="/member/nonpay.html?cate1=1&cate2=1"><span>비급여진료비안내</span></a>
									</li>
									<?php if($_SESSION['suserid'] == ''){ ?>
									<li class="dp2<?php if($locArr[0] == "100" && $locArr[1] == "1") echo " current"?>"><a href="https://www.yespine.co.kr/member/login.html"><span>로그인</span></a></li>
									<li class="dp2<?php if($locArr[0] == "100" && $locArr[1] == "2") echo " current"?>"><a href="/member/join.html"><span>회원가입</span></a></li>
									<li class="dp2<?php if($locArr[0] == "100" && $locArr[1] == "3") echo " current"?>"><a href="https://www.yespine.co.kr/member/idpw.html"><span>아이디/비밀번호 찾기</span></a></li>
									<?php }else{ ?>
									<li class="dp2<?php if($locArr[0] == "100" && $locArr[1] == "1") echo " current"?>"><a href="/member/mypage.html"><span>회원정보수정</span></a></li>
									<li class="dp2<?php if($locArr[0] == "100" && $locArr[1] == "2") echo " current"?>"><a href="/member/letter.html"><span>감사의 편지 확인</span></a></li>
									<li class="dp2<?php if($locArr[0] == "100" && $locArr[1] == "3") echo " current"?>"><a href="/member/memout.html"><span>회원탈퇴</span></a></li>
									<li class="dp2<?php if($locArr[0] == "100" && $locArr[1] == "4") echo " current"?>"><a href="/member/reserve.html"><span>예약확인 및 취소</span></a></li>
									<li class="dp2<?php if($locArr[0] == "100" && $locArr[1] == "5") echo " current"?>"><a href="/member/consult.html"><span>온라인 상담 확인</span></a></li>
									<li class="dp2<?php if($locArr[0] == "100" && $locArr[1] == "6") echo " current"?>"><a href="/member/customer.html"><span>고객의 소리 확인</span></a></li>
									<?php }?>
								</ul>
							</div>
						</li>
					</ul>
				</div>
				<a href="javascript:void(0)" class="close"><span class="text-ir">닫기</span></a>
			</div>
		</div>
	</div>
	<div id="aside">
		<ul>
			<li class="guide mb-hide"><a href="/guide/page01.html"><span>진료시간</span></a></li>
			<li class="reserve"><a href="/reserve/page01.html"><span>온라인예약</span></a></li>
			<li class="talk"><a href="/reserve/page03.html"><span>온라인상담</span></a></li>
			<li class="time"><a href="http://pf.kakao.com/_rhfixl" target="_blank"><span>카톡상담</span></a></li>
			<li class="map"><a href="/intro/page08.html"><span>오시는길</span></a></li>
			<li class="top"><a href="javascript:void(0)" class="go2top"><span>TOP</span></a></li>
		</ul>
	</div>