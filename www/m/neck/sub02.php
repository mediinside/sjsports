
<?PHP
	include_once $_SERVER['DOCUMENT_ROOT'] . '/_init.php';
	include_once $GP -> INC_WWW . '/count_inc.php';
	$top_dep_title = "목/허리";
	$page_title = "허리디스크";
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
				<h3 class="mt30">허리디스크</h3>
				<p class="mt40">모든 사람에게는 척추뼈 사이에는 충격을 흡수하는 쿠션 역활을 하는 말랑말랑한 조직이 있는데, 이를 추간판 또는 디스크라고 합니다.</p>
				<p class="mt20">디스크 중심의 수핵과 이를 둘러싸는 섬유륜으로 나뉩니다.<br/>외부 자극이나 퇴행성 변화로 디스크의 문제가 발생하여 수핵이 돌출되고 셤유륜이 뚫리는 등의 변화로 신경이 눌려 요통과 다리 통증을 유발하게 되는데 이를 의학용어로 정확하게는 '추간판 탈출증'이라고 하고, 쉽게 이야기 해서 '디스크에 걸렸다' 라는 표현으로 많이 쓰이고 있습니다.<br/>추간판 탈출증은 허리(요추부)와 목(경추부) 레벨에서 많이 발생합니다.</p>
				<div class="mt30"><img src="/public/images/common/con_disease_neck_sub02_img01.jpg" alt=""></div>
			</div>
			<div class="box_style_2 py60 px30">
				<div class="box_style_2_div box_style_2_div_left" style="background-image: url('/public/images/common/con_cause_neck_sub02_img01.jpg');">
					<h4 class="pl30"><i><span></span></i><strong class="px30">허리디스크 원인</strong></h4>
					<div>
						<ul class="box_style_2_ul">
							<li class="">허리에 부담을 주는 바르지 못한 자세와 생활습관을<br/>가지는 경우</li>
							<li class="">무거운 물건을 갑작스럽게 들어 올리는 경우</li>
							<li class="">갑작스런 자세 변동이나 급격한 체중 증가로 인한 경우</li>
						</ul>
					</div>
				</div>
				<div class="box_style_2_div box_style_2_div_right" style="background-image: url('/public/images/common/con_symptom_neck_sub02_img01.jpg');">
					<h4 class="pl30"><i><span></span></i><strong class="px30">허리디스크 증상</strong></h4>
					<div>
						<ul class="box_style_2_ul">
							<li>찌릿하거나 당기는 듯 통증이 엉치에서 다리까지 증상이 나타납니다.</li>
							<li>허리나 엉덩이 부위에 묵직한 통증이 있습니다.</li>
							<li>다리의 근력이 감소되어 다리에 힘이 없고 무겁게 느껴집니다.</li>
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
				<h3>허리디스크 예방법</h3>
				<ul class="box_style_5_ul mt50">
					<li class="p30">
						<h4><strong class="mt10"><span class="text-hide">1. </span>체중 유지</strong></h4>
						<p>20~30분 정도 평지나 언덕 걷기, 자전거 타기, 수영 등 유산소 운동을 하는 것이 좋습니다.</p>
					</li>
					<li class="p30">
						<h4><strong class="mt10"><span class="text-hide">2. </span>가벼운 운동</strong></h4>
						<p>베게의 높이는 어깨와 맞게하며 허벅지 아래에 베게를 하나 더 끼우고 자는 자세가 좋습니다.</p>
					</li>
					<li class="p30">
						<h4><strong class="mt10"><span class="text-hide">3. </span>스트레칭</strong></h4>
						<p>등이 운전석 등받이에 닿게 운전석을 조절해 주어야 하고, 장거리 운전을 할 경우 자주 스트레칭을 해줘야 합니다.</p>
					</li>
				</ul>
			</div>
		</div>
	</div>
<?php include_once $GP -> INC_WWW . '/footer_mobile.php';?>