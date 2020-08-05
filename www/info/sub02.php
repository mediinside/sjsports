<?php
	include_once $_SERVER['DOCUMENT_ROOT'] . '/_init.php';
	include_once $GP -> INC_WWW . '/count_inc.php';
	$top_dep_title = "진료안내";
	$page_title = "외래진료안내";
	include_once $GP -> INC_WWW . '/head.php';
	$locArr = array(4,3);
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
	include_once $GP -> INC_WWW . '/header_ver2.php';
	include_once $GP -> INC_WWW . '/header_after.php';
?>
	<!-- <div id="pagetop">
		<div class="background" style="background-image:url(/public/images/bg-pagetop-0<?php echo $locArr[0];?>.jpg);"></div>
		<div class="contain">
			<h2 class="title">외래진료안내</h2>
		</div>
	</div> -->
	<div id="container" class="bg-scratch">
		<?php include_once $GP -> INC_WWW . '/location_new.php';?>
		<div id="article" class="guide side-strip">
			<div class="box_style_1 text-center py60">
				<h3 class="mt30"><?=$page_title;?></h3>
			</div>
			<div class="guide-process">
				<div class="display">
					<h3 class="display-title">외래진료절차</h3>
					<div class="contain">
						<ol class="process-list">
							<li>
								<i class="step pct-0"></i>
								<div class="panel">
									<p>진료신청서 <br class="mb-hide" />작성</p>
								</div>
							</li>
							<li>
								<i class="step pct-25"></i>
								<div class="panel">
									<p>진료대기</p>
								</div>
							</li>
							<li>
								<i class="step pct-50"></i>
								<div class="panel">
									<p>진료<br class="mb-hide" />(검사, 촬영 등)</p>
								</div>
							</li>
							<li>
								<i class="step pct-75"></i>
								<div class="panel">
									<p>수납</p>
								</div>
							</li>
							<li>
								<i class="step pct-100"></i>
								<div class="panel">
									<p class="highlight">추후검사 및 <br class="mb-hide" />진료예약</p>
								</div>
							</li>
						</ol>
					</div>
				</div>
			</div>
			<div class="guide-schedule">
				<div class="display">
					<h3 class="display-title">외래진료시간</h3>
					<div class="contain">
						<div class="default-schedule">
							<ul>
								<li><dl>
									<dt>평&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;일</dt>
									<dd>09:00 - 17:30</dd>
								</dl></li>
								<li><dl>
									<dt>토&nbsp;&nbsp;요&nbsp;&nbsp;일</dt>
									<dd>09:00 - 13:00</dd>
								</dl></li>
								<li><dl>
									<dt>점심시간</dt>
									<dd>13:00 - 14:00</dd>
								</dl></li>
							</ul>
						</div>
						<p class="description">* 진료 마감시간 30분 전까지 방문하여 주세요.</p>
					</div>
				</div>
			</div>
			<div class="guide-contents">
				<div class="display">
					<h3 class="display-title">외래진료안내</h3>
					<div class="contain">
						<ol class="guide-label">
							<li>
								<div class="panel">
									<div class="header">
										<i class="counter"></i>
										<h4 class="title">
											<strong>병원에 처음 방문 <br class="pc-show" />하셨을 경우</strong>
											<small>(초진환자)</small>
										</h4>
									</div>
									<div class="description">
										<ul class="list">
											<li>병원에 처음 내원하시는 분은 건강보험증, 신분증, 요양급여의뢰서(또는 건강진단서)을 지참하셔야 합니다.</li>
											<li>예약 없이 내원하시는 경우 대기시간이 다소 길어질 수 있습니다. 이점 양해 부탁 드립니다.</li>
											<li>접수하신 분은 해당 진료과 직원에게 접수 확인을 받으시기 바랍니다.</li>
										</ul>
									</div>
								</div>
							</li>
							<li>
								<div class="panel">
									<div class="header">
										<i class="counter"></i>
										<h4 class="title">
											<strong>진료 받으신 적이 <br class="pc-show" />있으신 경우</strong>
											<small>(재진환자)</small>
										</h4>
									</div>
									<div class="description">
										<ul class="list">
											<li>재진 환자의 경우 건강보험증, 진료카드 등을 제출하여 환자 확인 후 접수하시면 됩니다.</li>
										</ul>
									</div>
								</div>
							</li>
							<li>
								<div class="panel">
									<div class="header">
										<i class="counter"></i>
										<h4 class="title">
											<strong>진료예약을 <br class="pc-show" />하신 경우</strong>
										</h4>
									</div>
									<div class="description">
										<ul class="list">
											<li>예약하신 경우 진료예약증, 건강보험증, 진료카드를 지참하시면 됩니다.</li>
											<li><strong>예약자 :</strong> 모든 예약자는 원무팀에서 접수 후 진료하는 방식입니다.</li>
											<li>원무과에서 접수 확인 절차를 마친 후 해당 진료과로 안내해드리고 있습니다.</li>
										</ul>
									</div>
								</div>
							</li>
							<li>
								<div class="panel">
									<div class="header">
										<i class="counter"></i>
										<h4 class="title">
											<strong>진료의뢰서 또는 <br class="pc-show" />소견서 가지고 <br class="pc-show" />오신 경우</strong>
										</h4>
									</div>
									<div class="description">
										<ul class="list">
											<li>접수시 미리 말씀해 주시기 바랍니다.</li>
											<li>진료의뢰환자 우선접수창구를 이용하시면 빠르고 편리하게 접수 할 수 있습니다.</li>
										</ul>
									</div>
								</div>
							</li>
							<li>
								<div class="panel">
									<div class="header">
										<i class="counter"></i>
										<h4 class="title">
											<strong>다친 동영상을 <br class="pc-show" />가지고 있을 경우 </strong>
										</h4>
									</div>
									<div class="description">
										<ul class="list">
											<li>다친 동영상이 있으시면, 가지고 오셔서 보여주세요. 파일로도 받고 있습니다.</li>
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
<?php include_once $GP -> INC_WWW . '/footer_ver2.php';?>
