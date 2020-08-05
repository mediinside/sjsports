<?php
	include_once $_SERVER['DOCUMENT_ROOT'] . '/_init.php';
	include_once $GP -> INC_WWW . '/count_inc.php';
	$top_dep_title = "진료안내";
	$page_title = "입&middot;퇴원안내";
	include_once $GP -> INC_WWW . '/head_mobile.php';
	$locArr = array(4,5);
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
					<h3 class="display-title">입원절차안내</h3>
					<div class="contain">
						<ol class="process-list">
							<li>
								<i class="step pct-0"></i>
								<div class="panel">
									<p>입원결정</p>
								</div>
							</li>
							<li>
								<i class="step pct-50"></i>
								<div class="panel">
									<p>입원수속</p>
								</div>
							</li>
							<li>
								<i class="step pct-100"></i>
								<div class="panel">
									<p>입원</p>
								</div>
							</li>
						</ol>
					</div>
				</div>
			</div>
			<div class="guide-contents">
				<div class="display">
					<h3 class="display-title">입원안내</h3>
					<div class="contain">
						<ol class="guide-label">
							<li>
								<div class="panel">
									<div class="header">
										<i class="counter"></i>
										<h4 class="title">
											<strong>입원 결정 및 <br class="mb-hide" />입원수속</strong>
										</h4>
									</div>
									<div class="description">
										<ul class="list">
											<li>입원하실 때는 상태 확인을 위해서, 현재 병증에 대한 설문조사를 진행을 합니다.</li>
											<li>외래 진료 후 담당의사가 입원치료를 결정하면 1층 원무과 접수·안내 창구에서 입원 예약을 하시면 됩니다.</li>
										</ul>
									</div>
								</div>
							</li>
							<li>
								<div class="panel">
									<div class="header">
										<i class="counter"></i>
										<h4 class="title">
											<strong>입원수속</strong>
										</h4>
									</div>
									<div class="description">
										<ul class="list">
											<li>건강보험증(의료급여증), 신분증을 제출하시고 입원약정서 작성합니다.</li>
											<li><strong>당일입원 :</strong> 입원수속 창구에서 입원약정서를 작성하여 제출하시면 병실을 배정해 드립니다.</li>
											<li><strong>입원예약 :</strong> 수술 일정이나 병실사정, 환자 본인의 사정으로 당일 입원이 불가능한 경우 입원예약을 합니다</li>
										</ul>
										<div class="well">
											<h5 class="sub-description-title">병실배정</h5>
											<ul class="dash-list">
												<li>세종스포츠정형외과는 1인실, 2인실, 4인실을 운영 중입니다.</li>
												<li>병실 배정은 입원 당시 병실 상황에 따라 결정되므로 희망하시는 병실과는 차이가 있을 수 있습니다.</li>
												<li>병실 배정은 잔여 병상에 대해 입원예약 순서에 따라 배정함을 원칙으로 합니다.</li>
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
											<strong>입원</strong>
										</h4>
									</div>
									<div class="description">
										<ul class="list">
											<li>입원 수속을 마치고 해당 병동으로 가시면 병동 간호사가 입원 생활에 필요한 사항을 안내해 드립니다.</li>
											<li><strong>입원예약 :</strong> 수술일정이나 본인의 사정 또는 병상이 부족할 경우 입원예약을 실시합니다.</li>
											<li>입원생활에 대해서는 입원시 배부하는 입원생활안내 내용을 참조하시길 바랍니다.</li>
										</ul>
									</div>
								</div>
							</li>
						</ol>
					</div>
				</div>
			</div>
			<div class="guide-process">
				<div class="display">
					<h3 class="display-title">퇴원절차안내</h3>
					<div class="contain">
						<ol class="process-list">
							<li>
								<i class="step pct-0"></i>
								<div class="panel">
									<p>퇴원결정</p>
								</div>
							</li>
							<li>
								<i class="step pct-25"></i>
								<div class="panel">
									<p>진료비 <br class="mb-hide" />심사</p>
								</div>
							</li>
							<li>
								<i class="step pct-50"></i>
								<div class="panel">
									<p>진료비 <br class="mb-hide" />수납</p>
								</div>
							</li>
							<li>
								<i class="step pct-75"></i>
								<div class="panel">
									<p>퇴원수속</p>
								</div>
							</li>
							<li>
								<i class="step pct-100"></i>
								<div class="panel">
									<p>귀가</p>
								</div>
							</li>
						</ol>
					</div>
				</div>
			</div>
			<div class="guide-contents">
				<div class="display">
					<h3 class="display-title">퇴원안내</h3>
					<div class="contain">
						<ol class="guide-label">
							<li>
								<div class="panel">
									<div class="header">
										<i class="counter"></i>
										<h4 class="title">
											<strong>퇴원결정</strong>
										</h4>
									</div>
									<div class="description">
										<ul class="list">
											<li>담당의사가 퇴원 1일전 또는 퇴원 당일 퇴원을 예고해 드립니다.</li>
										</ul>
									</div>
								</div>
							</li>
							<li>
								<div class="panel">
									<div class="header">
										<i class="counter"></i>
										<h4 class="title">
											<strong>진료비 심사</strong>
										</h4>
									</div>
									<div class="description">
										<ul class="list">
											<li>퇴원 당일 진료비 심사가 완료되는 즉시 퇴원 진료비를 안내해 드립니다.</li>
											<li>1층 입·퇴원계 전용창구에서 진료비 수납과 퇴원영수증 발급합니다.</li>
										</ul>
									</div>
								</div>
							</li>
							<li>
								<div class="panel">
									<div class="header">
										<i class="counter"></i>
										<h4 class="title">
											<strong>진료비 수납</strong>
										</h4>
									</div>
									<div class="description">
										<ul class="list">
											<li>1층 원무과 접수·안내 창구에서 진료비를 납부하시면 됩니다. 진료비는 현금, 각종 신용카드로 납부하실 수 있습니다.</li>
											<li>입퇴원 증명서가 필요하신 분은 수납 후 원무과 직원에게 신청하면 발급 받으실 수 있습니다.</li>
											<li><strong>진단서 및 진료기록 사본 발급 :</strong> 퇴원 3~4일 전, 담당 간호사에게 알려주시기 바랍니다.</li>
										</ul>
									</div>
								</div>
							</li>
							<li>
								<div class="panel">
									<div class="header">
										<i class="counter"></i>
										<h4 class="title">
											<strong>퇴원수속</strong>
										</h4>
									</div>
									<div class="description">
										<ul class="list">
											<li>진료비 수납 후 받은 퇴원증을 병동 간호사실에 제출하고, 퇴원 약을 수령하시면 퇴원 수속이 완료됩니다.</li>
											<li>퇴원 후 외래진료 예약은 병동 간호사의 안내를 받으시면 됩니다.</li>
											<li>퇴원 시간은 오전 10시 ~ 오후 6시입니다. 오후 6시 이후 퇴원 시 추가요금이 발생합니다.</li>
										</ul>
									</div>
								</div>
							</li>
							<li>
								<div class="panel">
									<div class="header">
										<i class="counter"></i>
										<h4 class="title">
											<strong>귀가</strong>
										</h4>
									</div>
									<div class="description">
										<ul class="list">
											<li>병동간호사실에서 확인 후 퇴원약 복용설명 및 퇴원후 생활에 대한 설명을 듣고 귀가하시면 됩니다.</li>
											<li>구급차 이용시 거리에 따라 요금이 산정됩니다.</li>
										</ul>
									</div>
								</div>
							</li>
						</ol>
					</div>
				</div>
			</div>
			<?php include_once "connect.html"; ?>
		</div>
	</div>
<?php include_once $GP -> INC_WWW . '/footer_mobile.php';?>
