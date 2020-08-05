<?php
	include_once $_SERVER['DOCUMENT_ROOT'] . '/_init.php';
	include_once $GP -> INC_WWW . '/count_inc.php';
	$top_dep_title = "SJS소개";
	$page_title = "찾아오시는 길";
	include_once $GP -> INC_WWW . '/head_mobile.php';
	$locArr = array(1,5);
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
		<div id="article" class="address side-strip">
			<div class="box_style_1 text-center py60">
				<h3 class="mt30"><?=$page_title;?></h3>
			</div>
			<div class="address-map">
				<div class="display">
					<div id="daumRoughmapContainer1576230603759" class="root_daum_roughmap root_daum_roughmap_landing"></div>
					<div class="cpation">서울특별시 광진구 능동로 209 (군자동, 세종대학교 내) 대양 AI센터 1-2층<br/>어린이 대공원 정문 맞은편에 위치해 있습니다.</div>
				</div>
			</div>
			<div class="intro-traffic">
				<div class="display">
					<h3 class="display-title">교통수단 이용안내</h3>
					<div class="contain">
						<ul class="traffic">
							<li><div class="panel">
								<h4 class="title">
									<i class="ip-icon-traffic-subway"></i>
									<span>지하철 이용 시</span>
								</h4>
								<div class="section">
									<h5 class="station my20"><i style="display:inline-block;font-size: .916666em;font-style: normal;font-weight: 400;line-height: 1.5em;letter-spacing: -0.025em;color: #fff;text-align: center;vertical-align: top;border-radius: 18px;background-color: #7e0fe8;">5호선</i><i class="line-1">7호선</i><strong class="station_nm">군자역</strong></h5>
									<p class="px20">군자역 7번출구 진출 후세종대 방향으로 이동, 세종대학교 내 대양 AI센터 1-2층</p>
									<h5 class="station my20"><i class="line-1">7호선</i><strong class="station_nm">어린이대공원역</strong></h5>
									<p class="px20">어린이대공원역 6번출구 진출 후세종대 방향으로 이동, 세종대학교 내 대양 AI센터 1-2층</p>
								</div>
							</div></li>
							<li><div class="panel">
								<h4 class="title">
									<i class="ip-icon-traffic-bus"></i>
									<span>버스 이용 시</span>
								</h4>
								<div class="section">
									<h5 class="station my20"><strong class="station_nm">어린이대공원앞.세종대학교</strong></h5>
									<p class="px20"><span class="busNo bluebus">721</span>, <span class="busNo greenbus">3216</span>, <span class="busNo greenbus">4212</span>, <span class="busNo redbus">3500</span></p>
								</div>
							</div></li>
							<li><div class="panel">
								<h4 class="title">
									<i class="ip-icon-traffic-car"></i>
									<span>자가용 이용 시</span>
								</h4>
								<div class="section">
									<p>건국대학교 방향에서 오시는 경우에는 세종대학교 정문을 지난 후 U턴을 하여, 세종대학교 대양 AI 센터 지하 3층~5층 주차장을 이용하시면 됩니다.<br/><b style="color:Red;">431대의 충분한 주차시설을 이용하실 수 있습니다.</b></p>
									<p><strong>네이버네비, T맵, 카카오네비에<br/><span class="point">‘세종스포츠정형외과’</span>을 검색해 주세요.</strong></p>
									<p>신주소 : 서울특별시 광진구 능동로 209 대양 AI센터 1-2층 <br />구주소 : 서울특별시 광진구 군자동 98 대양 AI센터 1-2층</p>
								</div>
							</div></li>
						</ul>
						<div class="panel walker">
							<!-- <h4 class="title"><span>도보 이용 시</span></h4>
							<p></p> -->
						</div>
					</div>
				</div>
			</div>
			<div class="intro-parking">
				<div class="display">
					<div class="panel">
						<h3 class="display-title">주차안내</h3>
						<p>- 방문객을 위하여 주차장을 2시간 무료로 운영하고 있습니다. <br/>- 본 주차장은 무인주차 시스템으로 운영되고 있습니다. <br/>- 입차 시   주차장 입구가 좁으니 주의 운전해주세요. <br/>- 출차 시 금액이 발생하는 경우 카드로만 결제가 가능합니다.</p>
					</div>
					<div class="panel">
						<div class="notes">
							<dl class="header">
								<dt>주차비용</dt>
								<dd>2시간 무료</dd>
							</dl>
							<dl class="caution">
								<dt>주의사항</dt>
								<dd>차내 귀중품 도난 및 개인의 부주의로 인한 안전사고 예방을 위하여 주차장 관리자의 지시에 협조해주시기 바랍니다.</dd>
							</dl>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


<script charset="UTF-8" class="daum_roughmap_loader_script" src="http://dmaps.daum.net/map_js_init/roughmapLoader.js"></script>
<script type="text/javascript">
	fn.rtime;
	fn.timeout = false;
	fn.delta = 200;
	fn.locationMap = new daum.roughmap.Lander({
		"timestamp" : "1576230603759",
		"key" : "w8yn"
	});
	fn.locationMapReload = function(){
		if (new Date() - fn.rtime < fn.delta) {
			setTimeout(fn.locationMapReload, fn.delta);
		} else {
			$('.root_daum_roughmap').find('.map').empty();
			fn.timeout = false;
			fn.locationMap.renderMap();
			fn.locationMap.setMarker();
		}
		co.sideFixed();
	};
	fn.locationMap.render();
	fn.resize = function(){
		fn.rtime = new Date();
		if (fn.timeout === false) {
			fn.timeout = true;
			setTimeout(fn.locationMapReload, fn.delta);
		}
	};
	fn.init = function(){
		$('.address-map').on({
			'click' : function(){
				$(this).addClass('on');
			},
			'mouseleave' : function(){
				$(this).removeClass('on');
			}
		});
	};
</script>
<?php include_once $GP -> INC_WWW . '/footer_mobile.php';?>
