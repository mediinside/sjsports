<?php
	include_once $_SERVER['DOCUMENT_ROOT'] . '/_init.php';
	include_once $GP -> INC_WWW . '/count_inc.php';
	$top_dep_title = "진료안내";
	$page_title = "제증명발급";
	include_once $GP -> INC_WWW . '/head_mobile.php';
	$locArr = array(4,6);
?>
<script>
	$(document).ready(function(){
		$('.sub_head').css(
			{
				"background-image":"url('/public/images/common/sub_top_img02.jpg')",
			}
		);
	});
</script>
<?php
	include_once $GP -> INC_WWW . '/header_mobile.php';
	include_once $GP -> INC_WWW . '/header_mobile_after.php';
?>

	<div id="container" class="bg-scratch">
		<?php include_once $GP -> INC_WWW . '/location_new.php';?>
		<div id="article" class="guide side-strip">
			<div class="box_style_1 text-center py60">
				<h3 class="mt30"><?=$page_title;?></h3>
			</div>
			<div class="guide-process">
				<div class="display">
					<h3 class="display-title">사본발급 신청 절차</h3>
					<div class="contain">
						<ol class="process-list">
							<li>
								<i class="step pct-0"></i>
								<div class="panel">
									<p>사본발급 <br class="mb-hide" />창구방문</p>
								</div>
							</li>
							<li>
								<i class="step pct-50"></i>
								<div class="panel">
									<p>신분증 확인 및 <br class="mb-hide" />구비서류 제출</p>
								</div>
							</li>
							<li>
								<i class="step pct-100"></i>
								<div class="panel">
									<p>수납 및 <br class="mb-hide" />사본 수령</p>
								</div>
							</li>
						</ol>
					</div>
				</div>
			</div>
			<div class="guide-contents">
				<div class="display">
					<h3 class="display-title">신청자별 구비서류</h3>
					<div class="contain">
						<ol class="guide-label">
							<li>
								<div class="panel">
									<div class="header">
										<i class="counter"></i>
										<h4 class="title">
											<strong>환자동의가 <br class="mb-hide" />가능한 경우</strong>
											<small>(만 14세 이상) </small>
										</h4>
									</div>
									<div class="description">
										<ul class="list">
											<li><strong>환자 :</strong> 본인</li>
										</ul>
										<div class="well">
											<h5 class="sub-description-title">제출서류</h5>
											<ul class="dash-list">
												<li>만 10세 ~ 17세 미만자의 경우(학생증, 가족관계증명서, 주민등록등초본 등)</li>
												<li>의사능력이 없는 미성년자의 경우(법정대리인 신분증, 법정대리인임 확인서류)</li>
											</ul>
										</div>
										<ul class="list">
											<li><strong>친족 :</strong> 배우자, 직계존속(부모, 조부모), 직계비속(자,손자), 배우자의 직계존속(시부모, 장인, 장모), 형제, 자매</li>
										</ul>
										<div class="well">
											<h5 class="sub-description-title">제출서류</h5>
											<ul class="dash-list">
												<li>환자신분증 (사본가능)</li>
												<li>신청인 신분증 사본</li>
												<li>환자 자필서명한 동의서 (도장,지장 인정 안됨)</li>
												<li>가족관계증명서 또는 친족확인가능서류</li>
											</ul>
										</div>
										<ul class="list">
											<li><strong>대리인 :</strong> 친족 이외의 지정대리인, 형제, 자매, 사위, 며느리, 삼촌, 이모, 고모, 친구, 지인, 보험회사</li>
										</ul>
										<div class="well">
											<h5 class="sub-description-title">제출서류</h5>
											<ul class="dash-list">
												<li>신청자신분증(사본가능)</li>
												<li>환자신분증사본</li>
												<li>환자가 자필서명한 동의서(도장,지장 인정 안됨)</li>
												<li>환자가 자필서명한 위임장(도장,지장 인정 안됨)</li>
											</ul>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="panel">
									<div class="header">
										<i class="counter"></i>
										<h4 class="title">
											<strong>환자의 동의를 <br class="mb-hide" />받을 수 없는 경우</strong>
											<small>(친족 또는 친족 등의 <br class="mb-hide" />법정대리인 또는 임의 대리인)</small>
										</h4>
									</div>
									<div class="description">
										<ul class="list">
											<li>환자가 사망한 경우</li>
											<li>환자가 자필서명을 할 수 없는 경우(의식불명,중증질환,부상)</li>
											<li>환자가 행방불명인 경우</li>
											<li><strong>환자가 의사무능력자인 경우 :</strong> 배우자, 직계존속(부모, 조부모), 직계비속(자,손자), 배우자의 직계존속(시부모, 장인, 장모),형제,자매</li>
										</ul>
										<div class="well">
											<h5 class="sub-description-title">병실배정</h5>
											<ul class="dash-list">
												<li>신청자(친족) 신분증(사본가능)</li>
												<li>가족관계증명서 또는 친족확인가능서류</li>
												<li><strong>환자의 동의를 받을 수 받을수 없다는 증빙서류</strong>
													<ul>
														<li><strong class="point">사망환자 :</strong> 사망진단서,가족관계증명서 (사망표기),제적등본</li>
														<li><strong class="point">자필서명불가 :</strong> 환자가 자필서명을 할 수 없음을 확인하는 의사진단서</li>
														<li><strong class="point">행방불명 :</strong> 주민등록등본,법원의 실종선고 결정문등의 서류</li>
														<li><strong class="point">의사무능력자 :</strong> 법원의 금치산선고결정문 사본 또는 의사무능력자임을 증명하는 정신과 전문의 진단서</li>
													</ul>
												</li>
												<li>환자의 친족 또는 형제, 자매(친족부재시)가 대리인 선임 가능</li>
												<li><strong>대리인 선임시 추가 구비서류 :</strong> 진료기록 열람 및 사본발급 위임장 또는 대리인 신분증</li>
											</ul>
										</div>
									</div>
								</div>
							</li>
						</ol>
					</div>
				</div>
			</div>
			<div class="guide-download">
				<div class="display">
					<h3 class="display-title">사본발급 신청 절차</h3>
					<div class="contain">
						<ul class="guide-docs">
							<li><div class="panel">
								<h4 class="title">동의서 양식</h4>
								<ul class="download-group">
									<li><a href="/common/file/진료기록_열람_및_사본발급_동의서.hwp" file>
										<i class="ip-icon-file-hwp"></i>
										<span>한글파일 다운받기</span>
									</a></li>
									<li><a href="/common/file/진료기록_열람_및_사본발급_동의서.pdf" file>
										<i class="ip-icon-file-pdf"></i>
										<span>PDF파일 다운받기</span>
									</a></li>
								</ul>
							</div></li>
							<li><div class="panel">
								<h4 class="title">위임장 양식</h4>
								<ul class="download-group">
									<li><a href="/common/file/진료기록_열람_및_사본발급_위임장.hwp">
										<i class="ip-icon-file-hwp"></i>
										<span>한글파일 다운받기</span>
									</a></li>
									<li><a href="/common/file/진료기록_열람_및_사본발급_위임장.pdf">
										<i class="ip-icon-file-pdf"></i>
										<span>PDF파일 다운받기</span>
									</a></li>
								</ul>
							</div></li>
							<li><div class="panel">
								<h4 class="title">확인서 양식</h4>
								<ul class="download-group">
									<li><a href="/common/file/확인서.hwp">
										<i class="ip-icon-file-hwp"></i>
										<span>한글파일 다운받기</span>
									</a></li>
									<li><a href="/common/file/확인서.pdf">
										<i class="ip-icon-file-pdf"></i>
										<span>PDF파일 다운받기</span>
									</a></li>
								</ul>
							</div></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="guide-contents warning">
				<div class="display">
					<ul class="list">
						<li>각종 증명서에는 수수료가 발생합니다.</li>
						<li>모든 서류 발급시 의료법 제 21조에 의거 환자, 그 배우자, 직계존비속 또는 배우자의 직계존속인 경우 구비서류 지참 후 발급 가능합니다.</li>
						<li>각종 증명서 발급 소요기간은 3 - 4일정도 소요됩니다. (병원 사정에 의해 기간이 연장될 수 있습니다.)</li>
						<li>가족관계증명서, 주민등록표 등본 등 관공서에서 발행하는 서류는 최근 3개월만 유효합니다.</li>
					</ul>
				</div>
			</div>
			<?php include_once "connect.html"; ?>
		</div>
	</div>
<?php include_once $GP -> INC_WWW . '/footer_mobile.php';?>
