<?PHP
	include_once $_SERVER['DOCUMENT_ROOT'] . '/_init.php';
	include_once $GP -> INC_WWW . '/count_inc.php';
	$top_dep_title = "목/허리";
	$page_title = "요추염좌";
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
				<h3 class="mt30">요추염좌</h3>
				<p class="mt40">요추염좌는 허리 통증질환 가운데 가장 흔한 질환입니다.</p>
				<p class="mt20">요추염좌로 인한 요통은 운동선수나 노동자들에게 흔한 질환으로 주로 근육인대 손상으로 인해 요천추 주변이 과도하게 긴장됨에 따라 발생합니다.<br/>주로 인대,근육,건 조직이 지나치게 신전되거나 파열되는 경우, 그리고 추간관절의 활액 조직에 자극성 염증이 있을 경우 발생합니다.</p>
				<div class="mt30"><img src="/public/images/common/con_disease_neck_sub06_img01.jpg" alt="" style="width: 50%"></div>
			</div>
			<div class="box_style_2 py60 px30">
				<div class="box_style_2_div box_style_2_div_left" style="background-image: url('/public/images/common/con_cause_neck_sub06_img01.jpg');">
					<h4 class="pl30"><i><span></span></i><strong class="px30">요추염좌 원인</strong></h4>
					<div>
						<ul class="box_style_2_ul">
							<li class="">요추 관절 운동과 관련이 있는 근육이 직접적 외상을 입은 경우</li>
							<li class="">정상 범위를 초과하는 굴곡이나 신전 운동을 할 경우</li>
							<li class="">장시간 바르지 않은 자세로 있을 경우</li>
						</ul>
					</div>
				</div>
				<div class="box_style_2_div box_style_2_div_right" style="background-image: url('/public/images/common/con_symptom_neck_sub06_img01.jpg');">
					<h4 class="pl30"><i><span></span></i><strong class="px30">요추염좌 증상</strong></h4>
					<div>
						<ul class="box_style_2_ul">
							<li>굴곡의 가동성이 확연하게 떨어지고 움직일 때 극심한 통증이 동반됩니다.</li>
							<li>심호흡이나 재채기를 할 때 통증이 증가합니다.</li>
							<li>요추부에 피로감을 느끼며 자세에 따라 통증의 위치가 변합니다.</li>
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
					<iframe class="box_style_4_mov_file" src="https://www.youtube.com/embed/E_fz1M50Vr4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>


			<div class="box_style_5 py40 px30" style="background-image: url('/public/images/common/img_06.jpg');">
				<h3>요추염좌 예방법</h3>
				<ul class="box_style_5_ul mt50">
					<li class="p30">
						<h4><strong class="mt10"><span class="text-hide">1. </span>절대 안정</strong></h4>
						<p>허리 통증이 발생하는 경우에는 무리하지 말고 절대 안정 취하는 것이 좋습니다.</p>
					</li>
					<li class="p30">
						<h4><strong class="mt10"><span class="text-hide">2. </span>운동 전 전문가 상담</strong></h4>
						<p>운동량, 운동 강도는 전문가와 상의하여 무리가 안 갈 정도로 점차 늘려주는 게 바람직합니다.</p>
					</li>
					<li class="p30">
						<h4><strong class="mt10"><span class="text-hide">3. </span>스트레칭</strong></h4>
						<p>의자에 장시간 앉는 경우 허리의 긴장된 근육 이완을 위해 스트레칭 시행하는 것이 좋습니다.</p>
					</li>
				</ul>
			</div>

		</div>
	</div>
<?php include_once $GP -> INC_WWW . '/footer_mobile.php';?>