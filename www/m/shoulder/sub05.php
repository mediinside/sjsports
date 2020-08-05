<?PHP
	include_once $_SERVER['DOCUMENT_ROOT'] . '/_init.php';
	include_once $GP -> INC_WWW . '/count_inc.php';
	$top_dep_title = "어깨";
	$page_title = "어깨충돌증후군";
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
				<h3 class="mt30">어깨충돌증후군</h3>
				<p class="mt40"><span style="font-weight:bold; color: #000;">어깨 충돌증후군</span>이란 어깨의 <span style="font-weight:bold; color: #000;">견봉</span>(어깨를 천장처럼 덮고 있는 견갑골의 일부)과 위팔뼈의 <span style="font-weight:bold; color: #000;">대결절부</span>(회전근개 힘줄이 부착되는 부위) 사이의 공간이 좁아지면서 뼈와 힘줄사이에 마찰이 발생하는 질환을 말합니다.</p>
				<p class="mt20">정상 어깨 관절에서는 이 공간이 충분하지만 어깨를 많이 사용하는 일을 하거나 운동을 하게 되는 경우 또는 퇴행성 변화 및 뼈의 변이(돌출된 뼈)에 의해서 견봉과 어깨 힘줄 사이에 간격이 줄어들어 마찰이 발생하여 힘줄의 변성 및 통증이 발생되고 방치되면 <span style="font-weight:bold; color: #000;">회전근개 파열</span>로 진행될 수 있습니다.<br/>어깨 위로 팔을 들어 일을 하는 사람이나 야구, 배구, 배드민턴 같이 팔을 어깨 위에서 쓰는 운동을 할 경우 발생 가능성이 큽니다.</p>
				<div class="mt30"><img src="/public/images/common/con_disease_shoulder_sub05_img01.jpg" alt="" style="width: 80%"></div>
			</div>
			<div class="box_style_2 py60 px30">
				<div class="box_style_2_div box_style_2_div_left" style="background-image: url('/public/images/common/con_cause_shoulder_sub05_img01.jpg');">
					<h4 class="pl30"><i><span></span></i><strong class="px30">어깨충돌증후군 원인</strong></h4>
					<div>
						<ul class="box_style_2_ul">
							<li class="">반복적으로 어깨를 높이 올리거나 무거운 물건을 나르는 경우</li>
							<li class="">과도한 스포츠 활동이나 무리한 동작으로 인한 경우</li>
							<li class="">나이가 들어 근력이 약해지거나 무리하게 어꺠를 사용한 경우</li>
						</ul>
					</div>
				</div>
				<div class="box_style_2_div box_style_2_div_right" style="background-image: url('/public/images/common/con_symptom_shoulder_sub05_img01.jpg');">
					<h4 class="pl30"><i><span></span></i><strong class="px30">어깨충돌증후군 증상</strong></h4>
					<div>
						<ul class="box_style_2_ul">
							<li>머리나 어꺠 높이까지 팔을 올리거나 움직일 때 통증이 생깁니다.</li>
							<li>팔을 올릴 때 어깨 안쪽에 무언가 걸리는 듯한 느낌을 받게 됩니다.</li>
							<li>밤에 통증이 더 심하며, 아픈 어깨 쪽으로 누워서 잠을 자기가 불편합니다.</li>
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
				<h3>어깨충돌증후군 예방법</h3>
				<ul class="box_style_5_ul mt50">
					<li class="p30">
						<h4><strong class="mt10"><span class="text-hide">1. </span>스트레칭</strong></h4>
						<p>업무 도중 틈틈이 스트레칭을 하여 어깨 관절을 풀어주는 습관을 가지는 것이 좋습니다.</p>
					</li>
					<li class="p30">
						<h4><strong class="mt10"><span class="text-hide">2. </span>올바른 자세</strong></h4>
						<p>자세 불량으로 인한 어깨 통증은 한두 번의 치료로 해결이 어려우므로 항상 올바른 자세를 유지하고자 노력해야 합니다.</p>
					</li>
					<li class="p30">
						<h4><strong class="mt10"><span class="text-hide">3. </span>생활 습관</strong></h4>
						<p>평소 스마트폰 사용 시간이 길어지면서 자세가 변형되는 경우가 많으므로 사용 시간을 줄이는 것이 좋습니다.</p>
					</li>
				</ul>
			</div>

		</div>
	</div>
<?php include_once $GP -> INC_WWW . '/footer_mobile.php';?>