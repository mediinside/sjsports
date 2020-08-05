<?PHP
	include_once $_SERVER['DOCUMENT_ROOT'] . '/_init.php';
	include_once $GP -> INC_WWW . '/count_inc.php';
	$top_dep_title = "목/허리";
	$page_title = "척추관협착증";
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
				<h3 class="mt30">척추관협착증</h3>
				<p class="mt40">척추뼈의 뒤로는 척추 신경이 머리에서부터 내려옵니다.<br/>이 신경이 지나가는 통로를 척추관 또는 척추강이라고 하는데, 척추관이 여러가지 원인으로 좁아지는 질환을 말합니다.</p>
				<p class="mt20">척추 신경이 내려가는 통로가 좁아지면서 압박을 가하게 되고, 염증도 일으켜 엉치부분과 다리에 통증과 저린 느낌을 일으킵니다.<br/>허리 디스크는 주로 한쪽 다리가 당기는 듯한 통증이 심하고 누운 상태에서 아픈 쪽 다리를 들어올리면 통증이 더 악화되는 양상 반면에 척추관 협착증에서는 누워서 다리를 올리는 것은 괜찮더라도 허리와 다리의 통증으로 장시간 걷지 못한다는 차이가 있습니다.</p>
				<div class="mt30"><img src="/public/images/common/con_disease_neck_sub03_img01.jpg" alt="" style="width: 80%"></div>
			</div>
			<div class="box_style_2 py60 px30">
				<div class="box_style_2_div box_style_2_div_left" style="background-image: url('/public/images/common/con_cause_neck_sub03_img01.jpg');">
					<h4 class="pl30"><i><span></span></i><strong class="px30">척추관협착증 원인</strong></h4>
					<div>
						<ul class="box_style_2_ul">
							<li class="">요추의 퇴화로 인해 뼈가 가시처럼 자라나서 신경을 압박하는 경우</li>
							<li class="">척추관 주변 염증에 의해 인대나 근육이 부어 신경을 누를 경우</li>
							<li class="">척추 전방전위증에 의해 협착이 될 경우</li>
						</ul>
					</div>
				</div>
				<div class="box_style_2_div box_style_2_div_right" style="background-image: url('/public/images/common/con_symptom_neck_sub03_img01.jpg');">
					<h4 class="pl30"><i><span></span></i><strong class="px30">척추관협착증 증상</strong></h4>
					<div>
						<ul class="box_style_2_ul">
							<li>걸으면 다리가 저리고 아프다가 쪼그리고 않아서 쉬면 통증이 덜합니다.</li>
							<li>걸을 때 증상이 심해지고, 걷다 쉬었다를 반복하게 됩니다.</li>
							<li>걸을 때 자신도 모르게 몸을 앞으로 구부리게 됩니다.</li>
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
				<h3>척추관협착증 예방법</h3>
				<ul class="box_style_5_ul mt50">
					<li class="p30">
						<h4><strong class="mt10"><span class="text-hide">1. </span>체중 유지</strong></h4>
						<p>균형 잡힌 식단으로 체중관리를 철저히 해 퇴행성 변화를 늦춰줍니다.</p>
					</li>
					<li class="p30">
						<h4><strong class="mt10"><span class="text-hide">2. </span>가벼운 운동</strong></h4>
						<p>척추에 무리가 가는 운동보다는 가벼운 유산소 운동과 하체 순환 운동을 하는 것이 좋습니다.</p>
					</li>
					<li class="p30">
						<h4><strong class="mt10"><span class="text-hide">3. </span>스트레칭</strong></h4>
						<p>가벼운 운동과 꾸준한 스트레칭으로 척추 주변 근육을 강화하는 것이 좋습니다.</p>
					</li>
				</ul>
			</div>

		</div>
	</div>
<?php include_once $GP -> INC_WWW . '/footer_mobile.php';?>