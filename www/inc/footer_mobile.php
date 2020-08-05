	
	
	<div class="quickWrap">
		<div class="quick_form">
			<a href="javascript:;" class="popClose"><img src="/public/images/mobile/common/quick_close.png" alt="close"/></a>
			<div class="reservationTit">
				<img src='/public/images/mobile/common/reservationPop_tit.png'/>
			</div>
			<form class="contain" action="?" name="frm_ps_quick" id="frm_ps_quick" method="post">
					<input type="hidden" name="mode" value="PS_REG">
					<input type="hidden" name="device" value="mobile">
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
							<input name="agree_quick" type="checkbox" class="custom-control-input" id="custom-control-input-agree1">
							<label class="custom-control-label text_demilight" for="custom-control-input-agree1">개인정보 취급방침에 동의</label>
						</div>
						<button type="button" class="view_terms" data-toggle="modal" data-target="#detail_doc1">[자세히보기]</button>
					</div>

					<button class="btn_main_councel" id="quick_img_submit" type="button">온라인 예약신청하기</button>
			</form>


		</div><!--//quick_form-->
		<ul class="quick_menu">
			<li><a href="tel:0222445161" onclick="_LA.EVT('4219')"><strong class="quick_menu_icon"></strong><span>전화걸기</span></a></li>
			<li class="online_reserve"><a href="javascript:;"><strong class="quick_menu_icon"></strong><span>온라인예약</span></a></li>
			<li><a href="/m/club/page02.php"><strong class="quick_menu_icon"></strong><span>전문의상담</span></a></li>
			<li><a href="https://pf.kakao.com/_tMzxlxb/" target="_blank" onclick="_LA.EVT('4217')"><strong class="quick_menu_icon"></strong><span>카카오톡상담</span></a></li>
			
			<li><a href="/m/about/sub06.php"><strong class="quick_menu_icon"></strong><span>찾아오시는길</span></a></li>
		</ul>
	
		
	</div><!--//quickWRap-->
		<script>
				
				$(".quick_menu li.online_reserve").click(function(){
						$(".quick_form").css("display","block");
					});
				$(".quick_form .popClose").click(function(){
						$(".quick_form").css("display","none")
					});
				


			</script>


	<!-- CONTACT -->
	<div class="contact px30 py40">
		<div>
			<h3>CONTECT US</h3>
			<ul>
				<li class="mb20">
					<h4><i class="tel mr20"></i><strong class="text-hide">전화번호: </strong></h4>
					<p>
						<a href="tel:0222445161" class="d-block">02.2244.5161</a>
					</p>
				</li>
				<li class="mb20">
					<h4><i class="address mr20"></i><strong class="text-hide">주소: </strong></h4>
					<address>서울특별시 광진구 능동로 209 (군자동, 세종대학교 내)<br/>대양 AI센터 1-2층</address></li>
				<li class="mb20">
					<h4>
						<i class="time mr20"></i><strong class="text-hide">진료시간: </strong>
					</h4>
					<ul>
						<li>
							<strong class="time_tit mr20">평일</strong> <span>AM 09:00 ~ PM 17:30</span>
						</li><li>
							<strong class="time_tit mr20">토요일</strong> <span>AM 09:00 ~ PM 13:00</span>
						</li><li>
							<strong class="time_tit mr20">점심시간</strong> <span>AM 13:00 ~ PM 14:00</span>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<!-- //CONTACT -->

	<!-- FOOTER 인클루드 -->
	<div id="footer">
		<div class="policy">
			<div class="inner">
				<ul>
					<li>
						<div>
							<a href="/m/member/privacy.php">개인정보처리방침</a>
						</div>
					</li>
					<li>
						<div>
							<a href="/m/member/terms.php">서비스 이용약관</a>
						</div>
					</li>
					<li>
						<div>
							<a href="/m/member/rights.php">환자권리장전</a>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<div class="information">
			<div class="inner">
				<div class="logo">
					<a href="#"><img src="/public/images/common/logo-footer.png" alt=""></a>
					<div class="link">
						<ul>
							<li>
								<div>
									<a href="https://www.youtube.com/channel/UCfjRfMSsoEyEHgwvDCNYysw" target="_blank"><img src="/public/images/common/ico_youtube.png" alt="Youtube"></a>
								</div>
							</li>
							<li>
								<div>
									<a href="https://blog.naver.com/jinni33b" target="_blank"><img src="/public/images/common/ico_blog.png" alt="네이버블로그"></a>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="info">
					<div class="tit"></div>
					<div class="info_list">
						<ul>
							<li>세종스포츠정형외과</li>
							<li>대표자 김진수외 2명</li>
							<li class="none_m">사업자등록번호 194-94-00911</li>
							<li class="none none_m">주소 서울특별시 광진구 능동로 209, 대양 AI센터 1층, 2층</li>
							<li>전화번호 02-2244-5161</li>
							<li class="none_m">팩스 02-2244-6171</li>
						</ul>
					</div>
					<p class="copyright">ⓒ 2019 SEJONG SPORTS HOSPITAL.</p>

				</div>
			</div>
		</div>
	</div>
	<!-- //FOOTER 인클루드 -->
</body>
</html>
<script type="text/javascript">
	// $( document ).ready(function() {
	// 	$(window).on("orientationchange", function(event){
	// 	    if(window.matchMedia("(orientation: portrait)").matches){
	// 	        alert('세종스포츠정형외과는 세로모드만 지원됩니다.');
	// 	        // 세로 모드 (평소 사용하는 각도)
	// 	    }else if(window.matchMedia("(orientation: landscape)").matches){
	// 	        // 가로 모드 (동영상 볼때 사용하는 각도)
	// 	    }
	// 	});
	// });
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
<!-- 공통 호출 하단 스크립트 : 모든페이지 하단 설치 -->
<!-- PlayD TERA Log Script v1.2 -->
<script>
var _nSA=(function(_g,_s,_p,_d,_i,_h){ 
 if(_i.wgc!=_g){_i.wgc=_g;_i.wrd=(new Date().getTime());
 var _sc=_d.createElement('script');_sc.src=_p+'//sas.nsm-corp.com/'+_s+'gc='+_g+'&rd='+_i.wrd;
 var _sm=_d.getElementsByTagName('script')[0];_sm.parentNode.insertBefore(_sc, _sm);} return _i;
})('TR10148305494','sa-w.js?',location.protocol,document,window._nSA||{},location.hostname);
</script>
<!-- LogAnalytics Script Install -->