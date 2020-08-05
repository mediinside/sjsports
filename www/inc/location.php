	<hr id="side-trigger">
	<div id="location">
		<ul class="section contents_head_ul">
			<li class="home contents_head_li">
				<a href="/"><span class="text-hide">home</span></a>
			</li>
			<li class="depth dp1 contents_head_li">
				<div class="dropdown">
					<button class="btn_reset" type="button"><span class="mr10"><?=$top_dep_title;?></span></button>
					<!-- <a href="javascript:void(0);"><span></span><i class="ip-icon-location-dropdown"></i></a> -->
					<!-- <ul class="dp-section dropdown-menu" aria-labelledby="dropdownMenuButton1">
						<li class="dropdown-item"><a href="/intro/page01.html"><span>병원소개</span></a></li>
						<li class="dropdown-item"><a href="/center/joint/page01.html"><span>전문센터</span></a></li>
						<li class="dropdown-item"><a href="/depart/page01.html"><span>진료과</span></a></li>
						<li class="dropdown-item"><a href="/guide/page01.html"><span>병원이용안내</span></a></li>
						<li class="dropdown-item"><a href="/media/page01.html"><span>미디어센터</span></a></li>
					</ul> -->
				</div>
			</li>
			<li class="depth dp2 contents_head_li">
				<div class="dropdown">
					<button class="btn_reset dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="mr10"></span></button>
					<!-- <a href="javascript:void(0);"><span></span><i class="ip-icon-location-dropdown"></i></a> -->
					<ul class="dp-section dropdown-menu" aria-labelledby="dropdownMenuButton2">
						<li class="dropdown-item"><a href="/"><span></span></a></li>
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
	<!-- <div id="aside" class="side-visible">
		<h2 class="title tup">Quick Menu</h2>
		<div class="contain">
			<ul class="list">
				<li><a href="https://pf.kakao.com/_Ynxlxaxl" target="_blank">
					<i class="ip-icon-aside-kakao"></i>
					<span>카카오톡</span>
				</a></li>
				<li><a href="/guide/page04.html">
					<i class="ip-icon-aside-reserve"></i>
					<span>온라인예약</span>
				</a></li>
				<li><a href="/guide/page02.html">
					<i class="ip-icon-aside-guide"></i>
					<span>진료안내</span>
				</a></li>
				<li><a href="/guide/page09.html">
					<i class="ip-icon-aside-docs"></i>
					<span>증명서발급</span>
				</a></li>
				<li><a href="/intro/page05.html">
					<i class="ip-icon-aside-address"></i>
					<span>오시는 길</span>
				</a></li>
			</ul>
		</div>
	</div> -->
