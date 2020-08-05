<?php
	include_once $_SERVER['DOCUMENT_ROOT'] . '/_init.php';
	include_once $GP -> INC_WWW . '/count_inc.php';
	$top_dep_title = "SJS소개";
	$page_title = "병원이념";
	include_once $GP -> INC_WWW . '/head.php';
	$locArr = array(1,2);
?>
<script>
	$(document).ready(function(){
		$('.sub_head').css(
			{
				"background-image":"url('/public/images/common/img_01.jpg')",
			}
		);
	});
</script>
<?php
	include_once $GP -> INC_WWW . '/header_ver2.php';
	include_once $GP -> INC_WWW . '/header_after.php';
?>


	<!-- <div id="pagetop">
		<div class="background" style="background-image:url(/public/images/common/img_01.jpg);"></div>
		<div class="contain">
		</div>
	</div> -->
	<div id="container" class="bg-scratch">
		<?php include_once $GP -> INC_WWW . '/location_new.php';?>
		<div id="article" class="intro side-strip">
			<div class="box_style_1 text-center py60">
				<h3 class="mt30"><?=$page_title;?></h3>
			</div>
			<div class="deco-quote">
				<i class="ip-icon-quote"></i>
				<p class="highlight">대한민국을 대표하는<br/><strong>스포츠 의학 병원</strong>이 되자</p>
				<p class="small">저희 병원은 급성기 운동손상을 전문적으로 진단하고 치료를 시행하는 곳 입니다.<br />
					운동을 하다 부상을 당하면 바로 생각나고, 언제든 찾아올 수 있는 병원이 되도록 하겠습니다.<br />
					RTP(return to play, 원래 이전의 상태로 돌아감)을 병원 코드로 설정하였습니다.<br />정확한 진단을 한 후, 신속하게 원래의 활동으로 복귀 할 수 있도록 치료하겠다는 의지입니다.<br />
					또한, 치료는 개인에게 가장 적절한 증거 중심의 치료를 고집합니다.<br />모든 사람들에게 사용되고, 알려져 있는 안전한 방법으로 치료를 합니다.<br />
					치료이후 최대한 빠른 복귀를 위하여 sports performance center(SPC)를 구성하여,<br />진단, 치료, 수술, 재활, 기능적회복, 만성손상의 예방까지 포괄적인 의료를 담당할 것입니다. <br />
					외래진료, 검사, 입원, 수술, 퇴원, 재활 등의 흐름을 직관화 하여 환자들이 방문했을 때<br />정말 편리한 병원, 멋지고, 정직하고, 내선수, 내자식, 내부모를 믿고 맡길 수 있는 안전한 병원이 되도록 하겠습니다.<br />
					감사합니다. 
					
				</p>
			</div>
			<div class="contain hospital-mission">
				<div class="section">
					<ul class="list">
						<li class="mission-01">
							<div class="background"></div>
							<div class="contain">
								<p><strong>정확한 진단</strong>을<br/>추구하는 병원</strong></p>
								<!--<i class="ip-icon-mission-symbol"></i>-->
							</div>
						</li>
						<li class="mission-02">
							<div class="background"></div>
							<div class="contain">
								<p><strong>신속하게 복귀</strong>를<br/>돕는 병원</p>
								<!--<i class="ip-icon-mission-symbol"></i>-->
							</div>
						</li>
						<li class="mission-03">
							<div class="background"></div>
							<div class="contain">
								<p><strong>증거 중심의 치료</strong>를<br/>고집하는 병원</p>
								<!--<i class="ip-icon-mission-symbol"></i>-->
							</div>
						</li>
						<li class="mission-04">
							<div class="background"></div>
							<div class="contain">
								<p><strong>안정한 방법으로</strong><br/>치료하는 병원</p>
								<!--<i class="ip-icon-mission-symbol"></i>-->
							</div>
						</li>
					</ul>
				</div>
				<div class="tail">
					<p class="highlight">끊임없이 노력하고 연구하는 병원이 되겠습니다.</p>
					<p class="decoration tup">SEJONG SPORTS HOSPITAL</p>
				</div>
			</div>
		</div>
	</div>
<?php include_once $GP -> INC_WWW . '/footer_ver2.php';?>