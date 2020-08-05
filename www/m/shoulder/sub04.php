<?PHP
	include_once $_SERVER['DOCUMENT_ROOT'] . '/_init.php';
	include_once $GP -> INC_WWW . '/count_inc.php';
	$top_dep_title = "어깨";
	$page_title = "재발성어깨탈구";
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
				<h3 class="mt30">재발성어깨탈구</h3>
				<p class="mt40">어깨 탈구는 쉽게 말해서 어깨가 빠지는 증상을 말합니다.<br/>운동이나 사고를 통한 외상이 주요 요인이며, 스포츠를 좋아하는 인구가 늘면서 어깨 탈구 환자도 많아 지고 있습니다.</p>
				<p class="mt20">어깨는 한번 빠지면 재발성 탈구로 발전할 수 있는 가능성이 있으며 재발성 탈구는 관절순, 관절연골 손상, 신경, 혈관 손상 등 합병증을 유발할 수 있습니다.<br/>특히 탈구 시 신경이나 혈관이 함께 손상되면 어깨 아래쪽 팔 부위 감각에 이상이 오거나 색깔이 변하고 붓는 등 혈관성 변화가 있을 수 있으므로, 어깨가 탈구된 초기에 치료하는 것이 중요합니다.</p>
				<div class="mt30"><img src="/public/images/common/con_disease_shoulder_sub04_img01.jpg" alt=""></div>
			</div>
			<div class="box_style_2 py60 px30">
				<div class="box_style_2_div box_style_2_div_left" style="background-image: url('/public/images/common/con_cause_shoulder_sub04_img01.jpg');">
					<h4 class="pl30"><i><span></span></i><strong class="px30">재발성어깨탈구 원인</strong></h4>
					<div>
						<ul class="box_style_2_ul">
							<li class="">선천적으로 인대와 관절막 등 연부 조직이 유연한 경우</li>
							<li class="">어렸을 때 어깨 탈구가 있었던 경우</li>
							<li class="">탈구 발생 시 고정 등 치료를 제대로 못했던 경우</li>
						</ul>
					</div>
				</div>
				<div class="box_style_2_div box_style_2_div_right" style="background-image: url('/public/images/common/con_symptom_shoulder_sub04_img01.jpg');">
					<h4 class="pl30"><i><span></span></i><strong class="px30">재발성어깨탈구 증상</strong></h4>
					<div>
						<ul class="box_style_2_ul">
							<li>공을 던지면 어깨가 빠질 것 같은 불안정성을 겪습니다.</li>
							<li>어깨나 팔 부위에 통증을 느끼며 밤에 더 심해집니다.</li>
							<li>아픈 어깨 방향으로 몸을 뉘어 자는 것이 힘들어집니다.</li>
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
					<iframe class="box_style_4_mov_file" src="https://www.youtube.com/embed/6lYqy8IYR0A" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>


			<div class="box_style_5 py40 px30" style="background-image: url('/public/images/common/img_06.jpg');">
				<h3>재발성어깨탈구 예방법</h3>
				<ul class="box_style_5_ul mt50">
					<li class="p30">
						<h4><strong class="mt10"><span class="text-hide">1. </span>운동 전 스트레칭</strong></h4>
						<p>운동 전 준비운동을 해주시고, 아이의 경우는 어깨를 으쓱하는 스트레칭이 도움이 됩니다.</p>
					</li>
					<li class="p30">
						<h4><strong class="mt10"><span class="text-hide">2. </span>생활 습관 </strong></h4>
						<p>오랜시간 같은 자세를 취할 때는 1시간 마다 스트레칭을 해주는 것이 좋습니다.</p>
					</li>
					<li class="p30">
						<h4><strong class="mt10"><span class="text-hide">3. </span>운동 후 찜질</strong></h4>
						<p>농구나 야구, 테니스 등 어깨를 많이 사용하는 운동은 피하고, 무리하게 운동한 날에는 자기 전 어깨 찜질을 해주도록 합니다.</p>
					</li>
				</ul>
			</div>

		</div>
	</div>
<?php include_once $GP -> INC_WWW . '/footer_mobile.php';?>