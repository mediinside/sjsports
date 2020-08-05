<?PHP
	include_once $_SERVER['DOCUMENT_ROOT'] . '/_init.php';
	include_once $GP -> INC_WWW . '/count_inc.php';
	$top_dep_title = "무릎";
	$page_title = "퇴행성관절염";
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
					"background-image":"url('/public/images/common/sub_top_img05.jpg')",
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
				<h3 class="mt30">퇴행성관절염</h3>
				<p class="mt40">무릎 관절을 보호하고 있는 연골의 손상이나 노화로 인한 퇴행성 변화로 인해 연골이 닳아 없어지는 질환입니다.</p>
				<p class="mt20">무릎의 경우 몸의 하중이 많은 부분을 부담하고 있는 부위이기 때문에 관절염이 흔하게 발생되며 대부분 나이가 많은 고령의 환자가 많습니다.</p>
				<div class="mt30"><img src="/public/images/common/con_disease_knee_sub05_img01.jpg" alt="" style="width: 70%"></div>
			</div>
			<div class="box_style_2 py60 px30">
				<div class="box_style_2_div box_style_2_div_left" style="background-image: url('/public/images/common/con_cause_knee_sub05_img01.jpg');">
					<h4 class="pl30"><i><span></span></i><strong class="px30">퇴행성관절염 원인</strong></h4>
					<div>
						<ul class="box_style_2_ul">
							<li class="">스트레스가 강하고 제대로 된 준비 운동없이 바로 시작하는 경우</li>
							<li class="">바닥에 무릎을 꿇고 앉거나 양반다리를 오랫동안 생활화하는 경우</li>
							<li class="">증가하는 체중을 방치하고 일상생활을 지속하는 경우</li>
						</ul>
					</div>
				</div>
				<div class="box_style_2_div box_style_2_div_right" style="background-image: url('/public/images/common/con_symptom_knee_sub05_img01.jpg');">
					<h4 class="pl30"><i><span></span></i><strong class="px30">퇴행성관절염 증상</strong></h4>
					<div>
						<ul class="box_style_2_ul">
							<li>반복적인 무릎 사용(심한 운동 등)에 의한 압통이 있을 수 있습니다.</li>
							<li>무릎 관절끼리 부딪혀 마찰음이 발생할 수 있습니다.</li>
							<li>상체의 하중 때문에 계단이나 경사진 곳을 걸을 때 통증이 발생할 수 있습니다.</li>
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
					<iframe class="box_style_4_mov_file" src="https://www.youtube.com/embed/2vJM7TwzQgc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>


			<div class="box_style_5 py40 px30" style="background-image: url('/public/images/common/img_06.jpg');">
				<h3>퇴행성관절염 예방법</h3>
				<ul class="box_style_5_ul mt50">
					<li class="p30">
						<h4><strong class="mt10"><span class="text-hide">1. </span>체중감량</strong></h4>
						<p>상체 등 체중이 많이 나갈수록 무릎 관절에 가해지는 부담이 크기때문에 이를 최소화하기 위해서는 체중관리를 해야 합니다.</p>
					</li>
					<li class="p30">
						<h4><strong class="mt10"><span class="text-hide">2. </span>운동 전 스트레칭</strong></h4>
						<p>운동 전 무릎 보호대를 꼭 착용하거나 무릎 돌리기 등의 간단한 스트레칭 후 경기를 시작하는 것이 좋습니다.</p>
					</li>
					<li class="p30">
						<h4><strong class="mt10"><span class="text-hide">3. </span>생활습관</strong></h4>
						<p>바닥에 쪼그려 앉거나 무릎을 구부리고 걸레질을 하는 행동들은 무릎으로 부담감이 증폭되기 때문에 무릎 연골을 손상시킬 수 있습니다.</p>
					</li>
				</ul>
			</div>

		</div>
	</div>
<?php include_once $GP -> INC_WWW . '/footer_mobile.php';?>