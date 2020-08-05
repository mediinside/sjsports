<?PHP
	include_once $_SERVER['DOCUMENT_ROOT'] . '/_init.php';
	include_once $GP -> INC_WWW . '/count_inc.php';
	$top_dep_title = "어깨";
	$page_title = "석회성건염";
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
				<h3 class="mt30">석회성건염</h3>
				<p class="mt40">힘줄 내에 칼슘 석회가 침착되어 힘줄의 손상 및 통증을 일으키는 질환을 말합니다.</p>
				<p class="mt20">모든 힘줄에 발생 할 수 있지만 어깨의 힘줄인 회전근개에 가장 많이 발생하며, 팔꿈치에서도 비교적 흔하게 발생하고 있으며, 석회성건염의 발병 원인은 정확히 밝혀지지 않았으나 나이에 따른 퇴행성 변화와 연관 있는 것으로 보고되고 있습니다.<br/>그러나 80세 이상의 노년층에서는 잘 발생하지 않아 회전근개 내의 국소적인 혈류 장애에 의한 것으로도 설명되고 있습니다.</p>
				<div class="mt30"><img src="/public/images/common/con_disease_shoulder_sub06_img01.jpg" alt="" style="width: 80%"></div>
			</div>
			<div class="box_style_2 py60 px30">
				<div class="box_style_2_div box_style_2_div_left" style="background-image: url('/public/images/common/con_cause_shoulder_sub06_img01.jpg');">
					<h4 class="pl30"><i><span></span></i><strong class="px30">석회성건염 원인</strong></h4>
					<div>
						<ul class="box_style_2_ul">
							<li class="">노화로 인한 힘줄의 퇴행성 변화인 경우</li>
							<li class="">스포츠나 무리한 어깨 사용으로 인한 힘줄 손상인 경우</li>
							<li class="">어깨를 많이 사용하는 사무직이나 주부의 경우</li>
						</ul>
					</div>
				</div>
				<div class="box_style_2_div box_style_2_div_right" style="background-image: url('/public/images/common/con_symptom_shoulder_sub06_img01.jpg');">
					<h4 class="pl30"><i><span></span></i><strong class="px30">석회성건염 증상</strong></h4>
					<div>
						<ul class="box_style_2_ul">
							<li>잠을 이루기 힘들 정도로 통증이 극심한데 비해 낮에는 통증이 덜합니다.</li>
							<li>팔이 쿡쿡 쑤시거나 찌르는 듯한 날카로운 통증이 느껴집니다.</li>
							<li>가끔 통증이 나타났다 사라지는 것이 반복됩니다.</li>
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
					<iframe class="box_style_4_mov_file" src="https://www.youtube.com/embed/D0Vpw5lFVVM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>


			<div class="box_style_5 py40 px30" style="background-image: url('/public/images/common/img_06.jpg');">
				<h3>석회성건염 예방법</h3>
				<ul class="box_style_5_ul mt50">
					<li class="p30">
						<h4><strong class="mt10"><span class="text-hide">1. </span>바른자세</strong></h4>
						<p>컴퓨터나 스마트폰을 사용할 때 화면을 자신의 눈높이의 10도 정도 아래에 두고 보는 것이 좋습니다.</p>
					</li>
					<li class="p30">
						<h4><strong class="mt10"><span class="text-hide">2. </span>알맞은 베게 </strong></h4>
						<p>너무 낮지도, 너무 높지도 않은 자신에게 잘 맞는 높이의 베게를 사용하는 것이 좋습니다.</p>
					</li>
					<li class="p30">
						<h4><strong class="mt10"><span class="text-hide">3. </span>스트레칭</strong></h4>
						<p>평소 업무를 보는 직장인 또는 장시간 공부를 하는 학생이라면 중간중간 스트레칭을 해주는 것이 좋습니다.</p>
					</li>
				</ul>
			</div>

		</div>
	</div>
<?php include_once $GP -> INC_WWW . '/footer_mobile.php';?>