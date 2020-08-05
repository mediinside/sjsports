<?PHP
	include_once $_SERVER['DOCUMENT_ROOT'] . '/_init.php';
	include_once $GP -> INC_WWW . '/count_inc.php';
	$top_dep_title = "어깨";
	$page_title = "견갑골운동장애";
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
					"background-image":"url('/public/images/common/sub_top_img04.jpg')",
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
				<h3 class="mt30">견갑골운동장애</h3>
				<p class="mt40">갑골운동장애라는 것은 표현 그대로 정상적인 움직임을 벗어난 견갑골의 이상한 움직임을 말합니다.</p>
				<p class="mt20">견갑골은 흔히 날깨뼈라 불리는데 이 날개뼈에 문제가 생긴다면 날개뼈에 연결된 근육 및 관절들의 움직임들이 불편해집니다.<br/>이러한 견갑골 운동장애에 대해서는 최근 SICK 견갑골 증후군이란 용어가 정의되었으며, SICK이란 견갑골 운동장애가 있을 시 흔히 동반되는 이상 소견을하나의 증후군으로 표현한 것 입니다.</p>
				<div class="mt30"><img src="/public/images/common/con_disease_shoulder_sub08_img01.jpg" alt=""></div>
			</div>
			<div class="box_style_2 py60 px30">
				<div class="box_style_2_div box_style_2_div_left" style="background-image: url('/public/images/common/con_cause_shoulder_sub08_img01.jpg');">
					<h4 class="pl30"><i><span></span></i><strong class="px30">견갑골운동장애 원인</strong></h4>
					<div>
						<ul class="box_style_2_ul">
							<li class="">습관적으로 장시간 잘못된 정적자세로 인한 경우</li>
							<li class="">운동선수들의 경우 스트레칭 부족인 경우</li>
							<li class="">어깨 양 옆의 특정 근육 불균형으로 인한 경우</li>
						</ul>
					</div>
				</div>
				<div class="box_style_2_div box_style_2_div_right" style="background-image: url('/public/images/common/con_symptom_shoulder_sub08_img01.jpg');">
					<h4 class="pl30"><i><span></span></i><strong class="px30">견갑골운동장애 증상</strong></h4>
					<div>
						<ul class="box_style_2_ul">
							<li>하내측연 돌출</li>
							<li>내측연의 전체적인 돌출</li>
							<li>상내측연의 돌출</li>
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
					<iframe class="box_style_4_mov_file" src="https://www.youtube.com/embed/O_wYWzJhdeI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>


			<div class="box_style_5 py40 px30" style="background-image: url('/public/images/common/img_06.jpg');">
				<h3>견갑골운동장애 예방법</h3>
				<ul class="box_style_5_ul mt50">
					<li class="p30">
						<h4><strong class="mt10"><span class="text-hide">1. </span>운동 전 스트레칭</strong></h4>
						<p>운동 전 준비운동을 해주시고, 아이의 경우는 어깨를 으쓱하는 스트레칭이 도움이 됩니다.</p>
					</li>
					<li class="p30">
						<h4><strong class="mt10"><span class="text-hide">2. </span>과도한 어깨 사용</strong></h4>
						<p>어깨에 부담을 주는 행동이나 운동은 줄이거나 피하는 것이 좋습니다.</p>
					</li>
					<li class="p30">
						<h4><strong class="mt10"><span class="text-hide">3. </span>온열 요법</strong></h4>
						<p>어깨 주변 근육의 긴장을 풀어주기 위한 방법으로 온탕이나 따뜻한 팩 등을 사용하여 혈액순환과 긴장완화를 유도합니다.</p>
					</li>
				</ul>
			</div>

		</div>
	</div>
<?php include_once $GP -> INC_WWW . '/footer_mobile.php';?>