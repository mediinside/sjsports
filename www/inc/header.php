
<!--[if lt IE 9]>
<div id="ie-version"><p>고객님께서는 현재 Explorer 구형버전으로 접속 중이십니다. 이 사이트는 Explorer 최신버전에 최적화 되어 있습니다. <a href="http://windows.microsoft.com/ko-kr/internet-explorer/download-ie" target="_blank">Explorer 업그레이드 하기</a></p> <button type="button" class="version-close">X</button></div>
<![endif]-->
<ul class="skip-nav">
	<li><a href="#container">본문 바로가기</a></li>
	<li><a href="#nav">메뉴 바로가기</a></li>
</ul>
<div id="wrap"<?php if($locArr[0] == 0) { echo " class=\"main\"";} ?>>
	<div id="header">
		<div class="hgroup">
			<h1 class="logo"><a href="/">
				<i class="ip-icon-header-logo"></i>
				<span class="text-ir">세종스포츠정형외과</span>
			</a></h1>
			<a href="tel:15227525" class="tel">
				<i class="ip-icon-head-call"></i>
				<strong class="anim-text-flow"><span>1</span><span>5</span><span>2</span><span>2</span><span>-</span><span>7</span><span>5</span><span>2</span><span>5</span></strong>
			</a>
		</div>
		<div id="nav">
			<h2 class="trigger"><a href="javascript:void(0)">
				<i class="icon-menu"></i>
				<span class="text-ir">메뉴</span>
			</a></h2>
			<div class="overlay"></div>
			<div class="group">
				<ul class="sign-util">
					<?php
					//쓰기권한
					if($_SESSION['suserid']) {
					?>
					<li><a href="/member/logout.html"><span>로그아웃</span></a></li>
					<li><a href="/member/mypage.html"><span>마이페이지</span></a></li>
					<?php } else { ?>
					<li><a href="/member/login.html">
						<i class="ip-icon-sign-in"></i>
						<span>로그인</span>
					</a></li>
					<li><a href="/member/join.html"><span>회원가입</span></a></li>
					<?php } ?>
				</ul>
				<div class="panel">
					<ul class="list">
						<li class="dp1<?php if($locArr[0] == "1") echo " current"?>">
							<a href="/intro/page01.html"><span>병원소개</span><i class="ip-icon-dp1-arrow"></i></a>
							<div class="dp-section">
								<ul>
									<li class="dp2<?php if($locArr[0] == "1" && $locArr[1] == "1") echo " current"?>"><a href="/intro/page01.html"><span>의료진소개</span></a></li>
									<li class="dp2<?php if($locArr[0] == "1" && $locArr[1] == "2") echo " current"?>"><a href="/intro/page02.html"><span>미션</span></a></li>
									<li class="dp2<?php if($locArr[0] == "1" && $locArr[1] == "3") echo " current"?>"><a href="/intro/page03.html"><span>둘러보기</span></a></li>
									<li class="dp2<?php if($locArr[0] == "1" && $locArr[1] == "4") echo " current"?>"><a href="/intro/page04.html"><span>의료장비</span></a></li>
                                    <li class="dp2<?php if($locArr[0] == "1" && $locArr[1] == "5") echo " current"?>"><a href="/intro/page05.html"><span>오시는길</span></a></li>
								</ul>
							</div>
						</li>
						<li class="dp1<?php if($locArr[0] == "2") echo " current"?>">
							<a href="/center/joint/page01.html"><span>전문센터</span><i class="ip-icon-dp1-arrow"></i></a>
							<div class="dp-section">
								<ul>
									<li class="dp2<?php if($locArr[0] == "2" && $locArr[1] == "1") echo " current"?>">
										<a href="/center/joint/page01.html"><span>관절센터</span><i class="ip-icon-dp2-arrow"></i></a>
										<ul class="dp-section">
											<li class="dp3<?php if($locArr[0] == "2" && $locArr[1] == "1" && $locArr[2] == "1") echo " current"?>"><a href="/center/joint/page01.html"><span>무릎</span></a></li>
											<li class="dp3<?php if($locArr[0] == "2" && $locArr[1] == "1" && $locArr[2] == "2") echo " current"?>"><a href="/center/joint/page02.html"><span>어깨</span></a></li>
											<li class="dp3<?php if($locArr[0] == "2" && $locArr[1] == "1" && $locArr[2] == "3") echo " current"?>"><a href="/center/joint/page03.html"><span>수부</span></a></li>
											<li class="dp3<?php if($locArr[0] == "2" && $locArr[1] == "1" && $locArr[2] == "4") echo " current"?>"><a href="/center/joint/page04.html"><span>고관절</span></a></li>
											<li class="dp3<?php if($locArr[0] == "2" && $locArr[1] == "1" && $locArr[2] == "5") echo " current"?>"><a href="/center/joint/page05.html"><span>족부</span></a></li>
										</ul>
									</li>
									<li class="dp2<?php if($locArr[0] == "2" && $locArr[1] == "2") echo " current"?>">
										<a href="/center/spine/page01.html"><span>척추센터</span><i class="ip-icon-dp2-arrow"></i></a>
										<ul class="dp-section">
											<li class="dp3<?php if($locArr[0] == "2" && $locArr[1] == "2" && $locArr[2] == "1") echo " current"?>"><a href="/center/spine/page01.html"><span>허리</span></a></li>
											<li class="dp3<?php if($locArr[0] == "2" && $locArr[1] == "2" && $locArr[2] == "2") echo " current"?>"><a href="/center/spine/page02.html"><span>목</span></a></li>
										</ul>
									</li>
									<li class="dp2<?php if($locArr[0] == "2" && $locArr[1] == "3") echo " current"?>">
										<a href="/center/pediatric/page01.html"><span>소아정형클리닉</span></a>
									</li>
									<li class="dp2<?php if($locArr[0] == "2" && $locArr[1] == "4") echo " current"?>">
										<a href="/center/women/page01.html"><span>외과클리닉</span></a>
									</li>
									<li class="dp2<?php if($locArr[0] == "2" && $locArr[1] == "5") echo " current"?>">
										<a href="/center/medicine/page01.html"><span>내과/건강검진센터</span></a>
									</li>
									<li class="dp2<?php if($locArr[0] == "2" && $locArr[1] == "6") echo " current"?>">
										<a href="/center/youth/page01.html"><span>소아청소년센터</span></a>
									</li>
									<li class="dp2<?php if($locArr[0] == "2" && $locArr[1] == "7") echo " current"?>">
										<a href="/center/rehab/page01.html"><span>재활운동치료센터</span></a>
									</li>
								</ul>
							</div>
						</li>
						<li class="dp1<?php if($locArr[0] == "3") echo " current"?>">
							<a href="/depart/page01.html"><span>진료과</span><i class="ip-icon-dp1-arrow"></i></a>
							<div class="dp-section">
								<ul>
									<li class="dp2<?php if($locArr[0] == "3" && $locArr[1] == "1") echo " current"?>"><a href="/depart/page01.html"><span>정형외과</span></a></li>
									<li class="dp2<?php if($locArr[0] == "3" && $locArr[1] == "2") echo " current"?>"><a href="/depart/page02.html"><span>외과클리닉</span></a></li>
									<li class="dp2<?php if($locArr[0] == "3" && $locArr[1] == "3") echo " current"?>"><a href="/depart/page03.html"><span>내과/건강검진</span></a></li>
									<li class="dp2<?php if($locArr[0] == "3" && $locArr[1] == "4") echo " current"?>"><a href="/depart/page04.html"><span>소아청소년과</span></a></li>
									<li class="dp2<?php if($locArr[0] == "3" && $locArr[1] == "5") echo " current"?>"><a href="/depart/page05.html"><span>영상의학과</span></a></li>
									<li class="dp2<?php if($locArr[0] == "3" && $locArr[1] == "6") echo " current"?>"><a href="/depart/page06.html"><span>진단검사의학과</span></a></li>
									<li class="dp2<?php if($locArr[0] == "3" && $locArr[1] == "7") echo " current"?>"><a href="/depart/page07.html"><span>마취통증의학과</span></a></li>
								</ul>
							</div>
						</li>
						<li class="dp1<?php if($locArr[0] == "4") echo " current"?>">
							<a href="/guide/page01.html"><span>병원이용안내</span><i class="ip-icon-dp1-arrow"></i></a>
							<div class="dp-section">
								<ul>
									<li class="dp2<?php if($locArr[0] == "4" && $locArr[1] == "1") echo " current"?>"><a href="/guide/page04.html"><span>온라인예약</span></a></li>
									<li class="dp2<?php if($locArr[0] == "4" && $locArr[1] == "2") echo " current"?>"><a href="/guide/page02.html"><span>진료시간</span></a></li>
									<li class="dp2<?php if($locArr[0] == "4" && $locArr[1] == "3") echo " current"?>"><a href="/guide/page03.html"><span>외래진료안내</span></a></li>
									<li class="dp2<?php if($locArr[0] == "4" && $locArr[1] == "4") echo " current"?>"><a href="/guide/page07.html"><span>응급실안내</span></a></li>
									<li class="dp2<?php if($locArr[0] == "4" && $locArr[1] == "5") echo " current"?>"><a href="/guide/page08.html"><span>입&middot;퇴원안내</span></a></li>
									<li class="dp2<?php if($locArr[0] == "4" && $locArr[1] == "6") echo " current"?>"><a href="/guide/page09.html"><span>제증명발급</span></a></li>
									<li class="dp2<?php if($locArr[0] == "4" && $locArr[1] == "7") echo " current"?>"><a href="/guide/page10.html"><span>비급여진료비안내</span></a></li>
									
								</ul>
							</div>
						</li>
						<li class="dp1<?php if($locArr[0] == "5") echo " current"?>">
							<a href="/guide/page06.html"><span>커뮤니티</span><i class="ip-icon-dp1-arrow"></i></a>
							<div class="dp-section">
								<ul>
									<li class="dp2<?php if($locArr[0] == "5" && $locArr[1] == "2") echo " current"?>"><a href="/guide/page01.html"><span>공지사항</span></a></li>
									<li class="dp2<?php if($locArr[0] == "5" && $locArr[1] == "3") echo " current"?>"><a href="/media/page02.html"><span>미디어속 삼성본</span></a></li>
									<li class="dp2<?php if($locArr[0] == "5" && $locArr[1] == "4") echo " current"?>"><a href="/media/page01.html"><span>전문의칼럼</span></a></li>
									<li class="dp2<?php if($locArr[0] == "5" && $locArr[1] == "5") echo " current"?>"><a href="/guide/page05.html"><span>전문의상담</span></a></li>
									<li class="dp2<?php if($locArr[0] == "5" && $locArr[1] == "7") echo " current"?>"><a href="/media/page04.html"><span>알고보는 건강정보</span></a></li>
									<li class="dp2<?php if($locArr[0] == "5" && $locArr[1] == "6") echo " current"?>"><a href="/media/page03.html"><span>삼성본 기자단</span></a></li>
									<li class="dp2<?php if($locArr[0] == "5" && $locArr[1] == "1") echo " current"?>"><a href="/guide/page06.html"><span>고객의소리</span></a></li>
								</ul>
							</div>
						</li>
					</ul>
					<div class="snsLink">
						<a href="https://blog.naver.com/mdsup78/" target="_blank" class="btnBlog">블로그</a>
						<a href="https://www.facebook.com/samsungbonhospital/" target="_blank" class="btnFacebook">페이스북</a>
						<a href="https://www.youtube.com/channel/UC3F9KFIngkHSH9FXR660zxQ" target="_blank" class="btnYoutube">유튜브</a>
						<a href="https://www.instagram.com/samsungbon/" target="_blank" class="btnInsta">인스타그램</a>
					</div>
				</div>
				<a href="javascript:void(0)" class="btn-close">
					<i class="icon-menu-close"></i>
					<span class="text-ir">메뉴 닫기</span>
				</a>
			</div>
		</div>
	</div>
