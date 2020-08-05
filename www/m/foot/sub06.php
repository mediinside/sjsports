<?PHP
	include_once $_SERVER['DOCUMENT_ROOT'] . '/_init.php';
	include_once $GP -> INC_WWW . '/count_inc.php';
	$top_dep_title = "발/발목";
	$page_title = "발목연골손상";
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
					"background-image":"url('/public/images/common/sub_top_img06.jpg')",
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
				<h3 class="mt30">발목연골손상</h3>
				<p class="mt40">발목염좌가 잘 낫지 않는 만성 발목염좌라면 발목 연골손상 (박리성골연골염)을 의심해봐야 합니다.</p>
				<p class="mt20">젊은 나이인데도 불구하고 발목이 시큰거리며 관절 주변에 통증으로 병원을 찾는 경우가 많은데, 이런 증상을 가진 사람들 중에는 발목 관절안의 연골 손상 이른 바 박리성골연골염이라고 하는 질환이 있는 경우가 많습니다.<br/>발목 관절 안에 있는 거골이라는 부위의 안쪽과 바깥쪽에서 발생하고, 발목을 삐거나 많이 사용하는 경우와 관련이 많습니다.</p>
				<div class="mt30"><img src="/public/images/common/con_disease_foot_sub06_img01.jpg" alt="" style="width: 70%"></div>
			</div>
			<div class="box_style_2 py60 px30">
				<div class="box_style_2_div box_style_2_div_left" style="background-image: url('/public/images/common/con_cause_foot_sub06_img01.jpg');">
					<h4 class="pl30"><i><span></span></i><strong class="px30">발목연골손상 원인</strong></h4>
					<div>
						<ul class="box_style_2_ul">
							<li class="">연골 밑부분의 뼈가 부분적으로 혈액을 공급받지 못하고 괴사하는 경우</li>
							<li class="">퇴행성 변화를 일으켜 분리되는 자연적인 손상인 경우</li>
							<li class="">외상에 의해서 연골의 충돌이 일어나는 경우</li>
						</ul>
					</div>
				</div>
				<div class="box_style_2_div box_style_2_div_right" style="background-image: url('/public/images/common/con_symptom_foot_sub06_img01.jpg');">
					<h4 class="pl30"><i><span></span></i><strong class="px30">발목연골손상 증상</strong></h4>
					<div>
						<ul class="box_style_2_ul">
							<li>부상 후 붓기 및 통증이 발생하고 뼈에서 소리가 납니다.</li>
							<li>외상 후 걸음이 불안정하거나 통증과 부종이 지속적으로 나타납니다.</li>
							<li>발목 내부에 무언가 걸리거나 끼이는 듯한 증상이 발생합니다.</li>
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
					<iframe class="box_style_4_mov_file" src="https://www.youtube.com/embed/AHTBbVGbfss" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>


			<div class="box_style_5 py40 px30" style="background-image: url('/public/images/common/img_06.jpg');">
				<h3>발목연골손상 예방법</h3>
				<ul class="box_style_5_ul mt50">
					<li class="p30">
						<h4><strong class="mt10"><span class="text-hide">1. </span>편안한 신발</strong></h4>
						<p>자신의 발에 맞지 않는 신발을 신었을 때 체중이 앞쪽으로 쏠리면서 발목이 불안정해져 발목 건강에 좋지 않습니다.</p>
					</li>
					<li class="p30">
						<h4><strong class="mt10"><span class="text-hide">2. </span>근력 운동</strong></h4>
						<p>평소에 근력을 키워주는 운동을 발목 주변을 안정성있에 유지해줍니다.</p>
					</li>
					<li class="p30">
						<h4><strong class="mt10"><span class="text-hide">3. </span>스트레칭</strong></h4>
						<p>활동량이 많을 경우 충분히 스트레칭으로 긴장된 근육을 풀어주는 것 또한 필요합니다. </p>
					</li>
				</ul>
			</div>

		</div>
	</div>
<?php include_once $GP -> INC_WWW . '/footer_mobile.php';?>