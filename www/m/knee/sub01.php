<?PHP
	include_once $_SERVER['DOCUMENT_ROOT'] . '/_init.php';
	include_once $GP -> INC_WWW . '/count_inc.php';
	$top_dep_title = "무릎";
	$page_title = "십자인대파열";
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
				<h3 class="mt30">십자인대파열(전/후방)</h3>
				<p class="mt40">무릎은 전/후방 십자인대와 내/외측 측부 인대가 앞뒤좌우의 안정성을 책임지는 구조로 이루어져 있습니다.</p>
				<p class="mt20">십자인대는 무릎 관절에 앞뒤 그리고 회전 안정성을 부여하고 올바르게 움직일 수 있도록 도와주는 역할을 하는데, 이것이 손상되는 경우 십자인대 파열이라고 합니다.<br/>전방십자인대의 경우 스포츠 활동이나 혹은 일상생활 중에도 착지를 잘못하거나 무릎이 내측으로 회전하면서 넘어지는 경우 '뚝'하는 소리와 함께 손상될 수 있습니다. 후방십자인대의 경우 자전거 타고 넘어지거나 계단에서 넘어지면서 무릎이 직접 닿았을 경우 손상되는 경우가 있습니다.</p>
				<div class="mt30"><img src="/public/images/common/con_disease_knee_sub01_img01.jpg" alt="" style="width: 80%"></div>
			</div>
			<div class="box_style_2 py60 px30">
				<div class="box_style_2_div box_style_2_div_left" style="background-image: url('/public/images/common/con_cause_knee_sub01_img01.jpg');">
					<h4 class="pl30"><i><span></span></i><strong class="px30">십자인대파열(전/후방) 원인</strong></h4>
					<div>
						<ul class="box_style_2_ul">
							<li class="">방향을 바꾸거나 멈춰서는 동작에서 무릎이 크게 꺾이면서 충격을 받는 경우</li>
							<li class="">축구나 야구 등의 스포츠 활동을 하면서 갑작스럽게 방향을 전환해야 할 경우</li>
							<li class="">무릎을 꿇은 자세에서 넘어지거나 사고를 당할 경우</li>
						</ul>
					</div>
				</div>
				<div class="box_style_2_div box_style_2_div_right" style="background-image: url('/public/images/common/con_symptom_knee_sub01_img01.jpg');">
					<h4 class="pl30"><i><span></span></i><strong class="px30">십자인대파열(전/후방) 증상</strong></h4>
					<div>
						<ul class="box_style_2_ul">
							<li>부상 이후 무릎에 통증이 있고 부어 오릅니다.</li>
							<li>무릎에서 '뚝'하는 파열음이 나거나 찢어지는 느낌이 납니다.</li>
							<li>심한 경우는 무릎관절이 앞뒤로 흔들거림을 느낄 수 있습니다.</li>
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
					<iframe class="box_style_4_mov_file" src="https://www.youtube.com/embed/XD_BppMMKww" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>


			<div class="box_style_5 py40 px30" style="background-image: url('/public/images/common/con_pr_knee_sub01_img01.jpg');">
				<h3>십자인대파열(전/후방) 예방법</h3>
				<ul class="box_style_5_ul mt50">
					<li class="p30">
						<h4><strong class="mt10"><span class="text-hide">1. </span>운동 전 스트레칭</strong></h4>
						<p>운동을 하기 전에 경직을 풀어주는 스트레칭을 통해서 인대에 가해지는 압력을 근육이 분담할 수 있도록 도와주세요.</p>
					</li>
					<li class="p30">
						<h4><strong class="mt10"><span class="text-hide">2. </span>근육단련</strong></h4>
						<p>스쿼트 운동이나 런지 운동, 엘리베이터 대신 계단 오르기 등으로 무릎 및 허벅지 주위 근력을 강화시킵니다.</p>
					</li>
					<li class="p30">
						<h4><strong class="mt10"><span class="text-hide">3. </span>적절한 강도의 운동</strong></h4>
						<p>체력과 능력을 감안하여서 스포츠 활동 시 과도한 욕심으로 무리한 동작을 피하는 것이 부상을 예방할 수 있습니다.</p>
					</li>
				</ul>
			</div>

		</div>
	</div>
<?php include_once $GP -> INC_WWW . '/footer_mobile.php';?>