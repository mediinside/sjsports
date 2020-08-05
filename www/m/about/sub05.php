<?php
	include_once $_SERVER['DOCUMENT_ROOT'] . '/_init.php';
	include_once $GP -> INC_WWW . '/count_inc.php';
	$top_dep_title = "SJS소개";
	$page_title = "의료장비";
	include_once $GP -> INC_WWW . '/head_mobile.php';
	$locArr = array(1,4);
?>
<script>
	$(document).ready(function(){
		$('.sub_head').css(
			{
				"background-image":"url('/public/images/common/sub_top_img01.jpg')",
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
		<div id="article" class="intro side-strip">
			<div class="box_style_1 text-center py60">
				<h3 class="mt30"><?=$page_title;?></h3>
			</div>
			<div class="intro-equipment">
				<div class="display">
					<ul class="list">
						<li><div class="panel">
							<div class="picture"><img src="/public/images/img-equipment-05.jpg" alt="" class="block" /></div>
							<dl class="info">
								<dt>MRI (Achieva 3.0T Philips)</dt>
								<dd>스포츠 손상 등 근골격계 손상을 정확하게<br/>진단하고자 3.0테슬라의 고급사양을 설치하였습니다.<br/>손상에 대한 맞춤형 축상을 촬영하여 진단율을 높이기 위한<br/>노력을 하고 있습니다.</dd>
							</dl>
						</div></li>
						<li><div class="panel">
							<div class="picture"><img src="/public/images/img-equipment-04.jpg" alt="" class="block" /></div>
							<dl class="info">
								<dt>CT (Phion2 cone beam CT)</dt>
								<dd>근골격계에 사용되는 CT로 좁은 부위만 촬영이 가능하나 선량이 기존의 CT 보다 1/5로 감소되어, 골절에서 자주 촬영시에도<br/>안정성에서 더 낫습니다.</dd>
							</dl>
						</div></li>
						<li><div class="panel">
							<div class="picture"><img src="/public/images/img-equipment-06.jpg" alt="" class="block" /></div>
							<dl class="info">
								<dt>근골격계 초음파, 마취과용 초음파</dt>
								<dd>코니카 미놀타 Sonimage HS1로 근골계만을 전문적으로<br/>볼 수 있도록 만든 초음파입니다. 타 하이엔드급의 초음파와<br/>동일한 근골격계 이미지를 보여 줍니다.</dd>
							</dl>
						</div></li>
						<li><div class="panel">
							<div class="picture"><img src="/public/images/img-equipment-07.jpg" alt="" class="block" /></div>
							<dl class="info">
								<dt>내과 및 검진용 초음파</dt>
								<dd>GE사의 상급 초음파 장비인 Logiq P9, 복부, 심혈관계,<br/>근골격계, 탄성초음파 등 모든 영역에서 준수한 성능을<br/>보여 주는 장비입니다.</dd>
							</dl>
						</div></li>
						<li><div class="panel">
							<div class="picture"><img src="/public/images/img-equipment-10.jpg" alt="" class="block" /></div>
							<dl class="info">
								<dt>관절경 장비</dt>
								<dd>Arthrex Synergy 4K UHD 2대 각 관절경수술방에 위치하여,<br/>이동없도록 하여 감염의 위험성을 최소화 하였습니다. </dd>
							</dl>
						</div></li>
						<li><div class="panel">
							<div class="picture"><img src="/public/images/img-equipment-01.jpg" alt="" class="block" /></div>
							<dl class="info">
								<dt>무중력트레드밀(ALTER-G)</dt>
								<dd>스트레스골절, 아킬레스건 파열 등 하지 부상, 골절 후에 체중을<br/>“부분 부하”하여 조깅을 시작할 수 있는 러닝머신입니다.<br/>코비브라언트가 아킬레스 파열 후 재활 초기에 사용하던 것입니다.</dd>
							</dl>
						</div></li>
						<li><div class="panel">
							<div class="picture"><img src="/public/images/img-equipment-02.jpg" alt="" class="block" /></div>
							<dl class="info">
								<dt>ESWT(체외충격파)-Wolf2</dt>
								<dd>독일 리차드-울프사의 2번째 버전으로 집중식(focus)타입의<br/>piezoelectric 형의 체외충격파 치료기입니다.<br/>국내에 들어와 있는 체외충격파 중 update가 되는 버전으로<br/>깊이, 정확하게 통증부위를 타겟팅할 수 있습니다.<br/>치료시 통증이 있더라도 효과가 좋습니다. </dd>
							</dl>
						</div></li>
						<li><div class="panel">
							<div class="picture"><img src="/public/images/img-equipment-03.jpg" alt="" class="block" /></div>
							<dl class="info">
								<dt>크라이오(CRYOFOS) therapy</dt>
								<dd>냉각 치료에 사용되는 기구로 이산화 탄소 알갱이가 발생하지<br/>않고, 동상의 위험이 없는 안전한 장비입니다.</dd>
							</dl>
						</div></li>
						<li><div class="panel">
							<div class="picture"><img src="/public/images/img-equipment-08.jpg" alt="" class="block" /></div>
							<dl class="info">
								<dt>방사선 장비</dt>
								<dd>DR 장비로 테이블이 자유자재로 움직여서, 환자의 이동을<br/>최소화 하여 촬영할 수 있는 우수한 장비입니다.</dd>
							</dl>
						</div></li>
						<li><div class="panel">
							<div class="picture"><img src="/public/images/img-equipment-09.jpg" alt="" class="block" /></div>
							<dl class="info">
								<dt>내시경 장비</dt>
								<dd>올림푸스사의 안전하고, 기본에 충실한 장비입니다.</dd>
							</dl>
						</div></li>
						<li><div class="panel">
							<div class="picture"><img src="/public/images/img-equipment-11.jpg" alt="" class="block" /></div>
							<dl class="info">
								<dt>C-arm</dt>
								<dd>제노레이 Zen 9080 Pro. 이동형 방사선 장치이며, <br/>방사선 저감 장치를 장착하여 환자의 안정을 최소화한 <br/>steady seller 모델입니다.</dd>
							</dl>
						</div></li>
						<li><div class="panel">
							<div class="picture"><img src="/public/images/img-equipment-12.jpg" alt="" class="block" /></div>
							<dl class="info">
								<dt>Airvaccine</dt>
								<dd>전 병동에 구비하였습니다. 공기중 바이러스 및 유해 물질을<br/>정화하고, 새집증후군, 아토피 등을 예방하기 위하여<br/>설치를 하였습니다.</dd>
							</dl>
						</div></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
<?php include_once $GP -> INC_WWW . '/footer_mobile.php';?>
</body>
</html>