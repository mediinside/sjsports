<?php
	include_once $GP -> INC_WWW . '/header_mobile.php';
	include_once $GP -> INC_WWW . '/header_mobile_after.php';
?>

<?PHP
	include_once $_SERVER['DOCUMENT_ROOT'] . '/_init.php';
	include_once $GP -> INC_WWW . '/count_inc.php';
	$top_dep_title = "목/허리";
	$page_title = "목디스크";
	include_once $GP -> INC_WWW . '/head_mobile.php';
	include_once $GP -> HOME."main_lib/main_proc.php";

	$Main_Notice = Main_Notice('10');
	/*$Main_Review = Main_Review();*/

	/*$Main_Slide_Visual  = Main_Slide_New('2','pc');
	$Main_Slide_Banner  = Main_Slide_New('3','pc');*/
	// echo $_SESSION['susermobile'];
?>
	<script>
		$(document).ready(function(){
			$('.sub_head').css(
				{
					"background-image":"url('/public/images/common/sub_top_img03.jpg')",
				}
			);
		});

		//main_1 script
		function dr_list_prev(){
			var list = $('.dr_list li').eq(0).html();
			$('.dr_list').append("<li>"+list+"</li>");
			 $('.dr_list li').eq(0).remove();
		}
		function dr_list_next(){
			var main_1_dr_list = $('.main_1 .dr_list li').length;
			var list = $('.dr_list li').eq(main_1_dr_list-1).html();
			$('.dr_list').prepend("<li>"+list+"</li>");
			$('.dr_list li').eq(main_1_dr_list).remove();
		}

		//main_2 script
		function ctrl_play(){
			swiper_main_2.autoplay.start();
			$('.swiper_main_2_ctrl .ctrl_pause').show();
			$('.swiper_main_2_ctrl .ctrl_play').hide();
		}

		function ctrl_pause(){
			swiper_main_2.autoplay.stop();
			$('.swiper_main_2_ctrl .ctrl_pause').hide();
			$('.swiper_main_2_ctrl .ctrl_play').show();

		}
	</script>
<?php
	include_once $GP -> INC_WWW . '/header_mobile.php';
	include_once $GP -> INC_WWW . '/header_mobile_after.php';
?>

	<div class="contents">
		<?php include_once $GP -> INC_WWW . '/location_new.php';?>
		<div class="contents_body">
			<div class="box_style_1 text-center py60 px30">
				<h3 class="mt30">목디스크</h3>
				<p class="mt40">우리 목은 7개의 뼈로 이루어져 있으며 뼈 사이에는 추간판(디스크)이 있습니다.</p>
				<p class="mt20">추간판은 목의 움직임을 부드럽게하고 무게와 충격을 견뎌낼 수 있도록 수분을 함유하고 있는데 디스크는 이러한 추간판이 노화되면서 수분이 손실되고 추간판을 싸고 있던 막이 손상되어 섬유가 찢어져 안에 들어있던 내용물인 수핵이 빠져나와 신경을 누르면서 발생합니다.</p>
				<div class="mt30"><img src="/public/images/common/con_disease_neck_sub01_img01.jpg" alt="" style="width: 90%"></div>
			</div>
			<div class="box_style_2 py60 px30">
				<div class="box_style_2_div box_style_2_div_left" style="background-image: url('/public/images/common/con_cause_neck_sub01_img01.jpg');">
					<h4 class="pl30"><i><span></span></i><strong class="px30">목디스크 원인</strong></h4>
					<div>
						<ul class="box_style_2_ul">
							<li class="">장시간 머리와 목을 앞으로 내미는 습관</li>
							<li class="">컴퓨터 및 스마트폰 사용 시 자세가 올바르지 않은 경우</li>
							<li class="">직접적인 외상인 경우 (교통사고 및 넘어지거는 등)</li>
						</ul>
					</div>
				</div>
				<div class="box_style_2_div box_style_2_div_right" style="background-image: url('/public/images/common/con_symptom_neck_sub01_img01.jpg');">
					<h4 class="pl30"><i><span></span></i><strong class="px30">목디스크 증상</strong></h4>
					<div>
						<ul class="box_style_2_ul">
							<li>목이 뻐근하거나 호전되는 것이 반복되며, 원인 모를 두통이 동반됩니다.</li>
							<li>어깨가 쑤시듯이 아프고, 팔이 당기는 드한 증상이 나타납니다.</li>
							<li>신경압박이 심할 경우, 보행장애와 대소면 장애가 나타납니다.</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="box_style_4 px30 pb50">
				<script>
					function box_style_4_mov_file(){
						var box_style_4_mov_fle = $('.box_style_4_mov_file').width();
						$('.box_style_4_mov_file').height(box_style_4_mov_fle*0.580357);
						console.log(box_style_4_mov_fle);
					}
					$(document).ready(function(){
						box_style_4_mov_file();
						$(window).resize(function(){
							box_style_4_mov_file();
						});
					});
				</script>
				<div class="box_style_4_head">
					<h3 class="text-center pt80"><img src="/public/images/main/h3_sjstv.png" alt="SJS TV"></h3>
				</div>
				<div class="box_style_4_body pt30">
					<iframe class="box_style_4_mov_file"  src="https://www.youtube.com/embed/E_fz1M50Vr4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>


			<div class="box_style_5 py40 px30" style="background-image: url('/public/images/common/img_06.jpg');">
				<h3>목디스크 예방법</h3>
				<ul class="box_style_5_ul mt50">
					<li class="p30">
						<h4><strong class="mt10"><span class="text-hide">1. </span>어깨 운동하기</strong></h4>
						<p>바르게 않은 자세에서 숨을 고르며 양쪽 어깨를 위로 올렸다가 아래로 툭 떨어트리는 동작을 반복합니다.</p>
					</li>
					<li class="p30">
						<h4><strong class="mt10"><span class="text-hide">2. </span>손바닥으로 머리 밀기</strong></h4>
						<p>깍지 낀 손을 뒷머리에 대고 손을 앞으로 살짝 밀어주세요. 이때 머리가 밀리지 않게 힘을 줘서 버티면서 동작을 반복합니다.</p>
					</li>
					<li class="p30">
						<h4><strong class="mt10"><span class="text-hide">3. </span>턱 당기기</strong></h4>
						<p>벽에 등을 바로 붙이고 바르게 선 자세에서 턱을 당긴 후 튀통수를 벽에 밀어주는 동작을 반복합니다.</p>
					</li class="p30">
				</ul>
			</div>
		</div>
	</div>
<?php include_once $GP -> INC_WWW . '/footer_mobile.php';?>