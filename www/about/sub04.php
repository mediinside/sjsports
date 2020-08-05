<?php
	include_once $_SERVER['DOCUMENT_ROOT'] . '/_init.php';
	include_once $GP -> INC_WWW . '/count_inc.php';
	$top_dep_title = "SJS소개";
	$page_title = "SPC소개";
	include_once $GP -> INC_WWW . '/head.php';
	$locArr = array(1,3);
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
	include_once $GP -> INC_WWW . '/header_ver2.php';
	include_once $GP -> INC_WWW . '/header_after.php';
?>
	<!-- <div id="pagetop">
		<div class="background" style="background-image:url(/public/images/bg-pagetop-0<?php echo $locArr[0];?>.jpg);"></div>
		<div class="contain">
			<h2 class="title">둘러보기</h2>
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
				<p class="highlight">Sports Performance Center <br/><strong>(SPC)</strong></p>
				<p class="small">SPC는 빠른 복귀라는 기존 운동재활 목표의 미비함을 극복하기위해<br/><strong>“Return to Sports with Maximal Performance”</strong> 라는 새로운 패러다임 위에 설립되었습니다. <br />
					따라서 부상 또는 다양한 원인으로 인해 감소한 경기력을 완전한 경기력 수준으로 복귀시키기 위한 최적의 프로그램 제공이 SPC의 목표입니다.<br />
					이를 위해 SPC는 선수가 필요로 하는 모든 의·과학적 서비스가 가능한 센터를 지향합니다.

				</p>
			</div>
			<div class="about_sub04_1 text-center pb100">
				<div class="intro-explore">
					<div id="explore-slider">
						<ul class="swiper" data-auto="true" data-controls="true" data-control-prefix="explore" data-pager="true" data-use-c-s-s="false"></ul>
					</div>
					<!-- <ul id="explore-list"></ul> -->
					<!-- <div class="display">
						<h3 class="title">층별 안내</h3>
						<ul class="floor-info"></ul>
					</div> -->
				</div>
				<div class="mb50">
					<strong class="txt_tit"><span>SPC의 장비 및 공간의 구성은?</span></strong>
				</div>
				<p class="txt_p mb10">SPC의 장비 및 공간의 구성은 완전한 의·과학 서비스 제공을 위해 장시간에 걸쳐 세심하게 준비되었습니다.</p>
				<p class="txt_p">또한, SPC는 단순한 재활 센터를 넘어서, 선수의 운동 복지 향상과 스포츠의학 발전으로 위해<br/>한국 스포츠 환경에 맞춰진 운동 상해 예방 및 재활, 경기력 강화 방법을 과학적 자료에 근거해 제시하려 합니다.<br>
				이를 위해 SPC는 스포츠의학 발전을 위해 여러 생각과 실천이 모이는 광장이 되고자합니다.</p>
			</div>
			<div class="about_sub04_2">
				<ul>
					<li style="background-image: url('/public/images/common/img_about_sub04_2_1.jpg');">
						<div class="txt_area">
							<h4><strong class="idx_num">01</strong><strong class="tit"><span class="d-block">등속성기구 (Biodex)</span></strong></h4>
							<p>
								미리 설정한 일정한 속도로 관절가동범위 전체 내에서 최대의 근수축으로<br />
								운동하도록 설계된 장비입니다. 관절 범위 내에서 동일한 부하가 주어지는<br />
								장점 때문에 근기능 손상의 회복과 재활 및 근력 측정의 지표로 이용합니다.
							</p>
						</div>
					</li>
					<li style="background-image: url('/public/images/common/img_about_sub04_2_2.jpg');">
						<div class="txt_area">
							<h4><strong class="idx_num">02</strong><strong class="tit"><span class="d-block">무중력 트레드밀 (Antigravity Treadmill)</span></strong></h4>
							<p>특수 압력 공기 시스템을 이용하여 사용자의 특성 및 체중에 맞게 %단위로 체중을<br />
								조절하여 걷거나 달리기 동작을 할 수 있는 특수한 재활운동 장비입니다.<br />
								관절에 대한 부담을 현저히 감소시켜 통증을 감소시킨 상태에서 보행훈련을 시킬 수<br />
								있으며, 하지 손상 및 수술적 치료를 받은 환자의 기능적, 신경학적 회복에 적합합니다.</p>
						</div>
					</li>
					<li style="background-image: url('/public/images/common/img_about_sub04_2_3.jpg');">
						<div class="txt_area">
							<h4><strong class="idx_num">03</strong><strong class="tit"><span class="d-block">무동력 트레드밀 (Hi-Trainer)</span></strong></h4>
							<p>
								무동력 트레드밀은 사용자가 본인의 힘으로 벨트를 밀어내도록<br />
								설계된 장비로써 야외트랙에서 달리는 것과 가장 가까운 효과가 있습니다.<br />
								따라서 Hi trainer는 최고 스피드/파워와 그 정점에 도달하는 시간을<br />
								측정할 수 있으며, 코어가 복합적으로 사용되고 체력적인면 뿐만 아니라<br />
								체형의 전체적인 밸런스까지 맞춰주는 효과가 있습니다.
							</p>
						</div>
					</li>
					<li style="background-image: url('/public/images/common/img_about_sub04_2_4.jpg');">
						<div class="txt_area">
							<h4><strong class="idx_num">04</strong><strong class="tit"><span class="d-block">고압산소치료</span></strong></h4>
							<p>
								Chamber 내에 고농도로 산소분압을 높여 산소가 체내에 흡수되도록 하는<br />
								원리입니다. 고압산소치료는 부상부위 산소공급 증가, 피로회복, 면역력 증가,<br />
								저산소증 개선, 상처부위 회복, 화상이나 동상부위 치유 등의 다양한 효과를 보입니다.
							</p>
						</div>
					</li>
					<li style="background-image: url('/public/images/common/img_about_sub04_2_5.jpg');">
						<div class="txt_area">
							<h4><strong class="idx_num">05</strong><strong class="tit"><span class="d-block">전신 Cryotherapy</span></strong></h4>
							<p>
								원통모양의 Chamber내에 액화질소를 기화시킨 질소증기를 주입해<br />
								영하 120도에 2~3분가량 신체를 노출 시키는 치료법으로 관절 통증 완화,<br />
								혈액순환, 노폐물 제거, 피로 회복 등을 목적으로 합니다.
							</p>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<script>
		var explore = [];
		explore.el = {
			'list' : $('#explore-list'),
			'swiper' : $('#explore-slider'),
			'info' : $('.floor-info')
		}
		explore.active = 0;
		explore.image = [
			{
				'title' : '1F',
				'description' : '스포츠 퍼포먼스 센터(SPC)',
				'list' : [
					{'img' : '/public/images/explore/spc_dummy_01.jpg', 'text' :'SPC 01'},
					{'img' : '/public/images/explore/spc_dummy_02.jpg', 'text' :'SPC 02'},
					{'img' : '/public/images/explore/spc_dummy_03.jpg', 'text' :'SPC 03'},
					{'img' : '/public/images/explore/spc_dummy_04.jpg', 'text' :'SPC 04'},
					{'img' : '/public/images/explore/spc_dummy_05.jpg', 'text' :'SPC 05'}

				]
			/*},{
				'title' : '4F',
				'description' : '의국',
				'list' : [
					{'img' : '/public/images/explore/4f-01.jpg', 'text' :'휴계실 01'},
					{'img' : '/public/images/explore/4f-02.jpg', 'text' :'휴계실 02'}
				]*/
			}
		];
		explore.draw = function(){
			explore.el.swiper.find('.swiper').empty();
			explore.image[explore.active].list.forEach(function(frow,feq){
				explore.el.swiper.find('.swiper').append('<li><div class="background"><img src="'+frow.img+'" class="block" /></div></li>');
			});
			slider.item['explore-slider'] && slider.item['explore-slider'].reloadSlider();

			explore.el.list.children('li').eq(explore.active).addClass('active').siblings().removeClass('active');
			explore.el.info.children('li').eq(explore.active).addClass('active').siblings().removeClass('active');
		}
		fn.init = function(){
			explore.el.list.on('click','a',function(){
				explore.active = $(this).data('index');
				explore.draw();
			});
			explore.image.forEach(function(row,eq){
				explore.el.list.append('<li><a href="javascript:void(0)" data-index="'+eq+'"><span>'+row.title+'</span></a></li>');
				explore.el.info.append('<li><dl><dt>'+row.title+'</dt><dd>'+row.description+'</dd></dl></li>');
				row.list.forEach(function(frow,feq){
					$('body').append('<img src="'+frow.img+'" class="none temp-img" />');
				});
			});
			$('img.temp-img').on('load',function(){
				$(this).remove();
				if (!$('img.temp-img').length){
					explore.draw();
					co.sideFixed();
				}
			});
		};
	</script>
<?php include_once $GP -> INC_WWW . '/footer_ver2.php';?>