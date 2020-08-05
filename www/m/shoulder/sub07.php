<?PHP
	include_once $_SERVER['DOCUMENT_ROOT'] . '/_init.php';
	include_once $GP -> INC_WWW . '/count_inc.php';
	$top_dep_title = "어깨";
	$page_title = "관절와순파열";
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
				<h3 class="mt30">관절와순파열</h3>
				<p class="mt40">어깨 관절와순이란 회전근 아래쪽 받침뼈를 둘러싸고 있는 섬유질 연골입니다. 이 섬유질 연골의 윗부분이 이두박근과 함께 뼈에서 떨어지는 것이 관절와순파열입니다.</p>
				<p class="mt20">어깨 위쪽 관절 연골은 아래쪽 연골에 비해 뼈에 느슨하게 부착되어 있어 손상이 쉽게 생기며, 이러한 관절와순이 손상되었을 경우 극심한 통증과 함께 어깨가 탈구되거나 팔을 움직이기 힘들어집니다.<br/>이 때 제대로 된 치료를 하지 않고 방치할 경우 습관성 어깨탈구로 발전될 가능성이 높습니다.</p>
				<div class="mt30"><img src="/public/images/common/con_disease_shoulder_sub07_img01.jpg" alt="" style="width: 80%"></div>
			</div>
			<div class="box_style_2 py60 px30">
				<div class="box_style_2_div box_style_2_div_left" style="background-image: url('/public/images/common/con_cause_shoulder_sub07_img01.jpg');">
					<h4 class="pl30"><i><span></span></i><strong class="px30">관절와순파열 원인</strong></h4>
					<div>
						<ul class="box_style_2_ul">
							<li class="">일상이나 운동 중에 어깨가 부딪혔을 경우</li>
							<li class="">야구나 테니스 같은 스포츠 활동 중에 공을 무리하게 던질 경우</li>
							<li class="">팔을 머리 위로 휘두르는 동작을 반복할 경우</li>
						</ul>
					</div>
				</div>
				<div class="box_style_2_div box_style_2_div_right" style="background-image: url('/public/images/common/con_symptom_shoulder_sub07_img01.jpg');">
					<h4 class="pl30"><i><span></span></i><strong class="px30">관절와순파열 증상</strong></h4>
					<div>
						<ul class="box_style_2_ul">
							<li>어깨가 빠진 것 같은 느낌이 들며, 팔을 회전할 때 소리가 들립니다.</li>
							<li>관절 뒤쪽 통증이 있으며, 팔을 올려 돌리면 뚝 소리와 함께 통증이 동반됩니다.</li>
							<li>어깨 통증과 함께 불안정감을 느끼게 됩니다.</li>
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
					<iframe class="box_style_4_mov_file" src="https://www.youtube.com/embed/JKyoCDKoP7Q" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>


			<div class="box_style_5 py40 px30" style="background-image: url('/public/images/common/img_06.jpg');">
				<h3>관절와순파열 예방법</h3>
				<ul class="box_style_5_ul mt50">
					<li class="p30">
						<h4><strong class="mt10"><span class="text-hide">1. </span>스트레칭</strong></h4>
						<p>관절을 풀어주는 스트레칭 동작으로 어깨와 팔의 근육과 관절을 부드럽게해 해주는 것이 필요합니다.</p>
					</li>
					<li class="p30">
						<h4><strong class="mt10"><span class="text-hide">2. </span>온열 요법 </strong></h4>
						<p>어깨 주변 근육의 긴장을 풀어주기 위한 방법으로 온탕이나 따뜻한 팩 등을 사용하여 혈액순환과 긴장완화를 유도합니다.</p>
					</li>
					<li class="p30">
						<h4><strong class="mt10"><span class="text-hide">3. </span>생활 습관</strong></h4>
						<p>어깨에 무리가 힘이 가지지 않도록 지나치게 무거운 물건을 들거나 과격한 운동을 하지 않는 게 좋습니다.</p>
					</li>
				</ul>
			</div>

		</div>
	</div>
<?php include_once $GP -> INC_WWW . '/footer_mobile.php';?>