<?PHP
	include_once $_SERVER['DOCUMENT_ROOT'] . '/_init.php';
	include_once $GP -> INC_WWW . '/count_inc.php';
	$top_dep_title = "어깨";
	$page_title = "오십견";
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
				<h3 class="mt30">오십견</h3>
				<p class="mt40">오십견은 전 인구의 약 2%에서 유발되는 흔한 질환입니다.</p>
				<p class="mt20">오십견이라는 용어는 50세 전후로 어깨의 움직임이 제한되고 통증이 심한 증상이 많이 나타난다고 하여 붙여진 이름으로 정확한 진단명은 아닙니다. 특히 <span style="font-weight:bold">회전근개 파열</span>등의 동반손상이 있는 경우가 많기 때문에 정확한 진단이 우선되어야 합니다.<br/><span style="font-weight:bold">오십견은 동결견</span> 또는 <span style="font-weight:bold">유착성관절낭염</span>이 더 정확한 진단명 입니다.</p>
				<div class="mt30"><img src="/public/images/common/con_disease_shoulder_sub02_img01.jpg" alt="" style="width: 80%"></div>
			</div>
			<div class="box_style_2 py60 px30">
				<div class="box_style_2_div box_style_2_div_left" style="background-image: url('/public/images/common/con_cause_shoulder_sub02_img01.jpg');">
					<h4 class="pl30"><i><span></span></i><strong class="px30">오십견 원인</strong></h4>
					<div>
						<ul class="box_style_2_ul">
							<li class="">특별한 원인 없이 나타나는 경우(특발성)</li>
							<li class="">어깨견증을 유발하는 1차적인 원인이 있는 경우</li>
							<li class="">잘못된 자세와 습관, 유전적 문제, 외상, 당뇨 등의 질병을 갖은 경우</li>
						</ul>
					</div>
				</div>
				<div class="box_style_2_div box_style_2_div_right" style="background-image: url('/public/images/common/con_symptom_shoulder_sub02_img01.jpg');">
					<h4 class="pl30"><i><span></span></i><strong class="px30">오십견 증상</strong></h4>
					<div>
						<ul class="box_style_2_ul">
							<li>팔을 조금만 움직여도 어깨에 통증이 나타납니다.</li>
							<li>어깨가 굳는 느낌이 들고 타인이 어깨를 들어올려도 움직이기 어렵습니다.</li>
							<li>야간에 통증이 심해 수면장애가 발생하기도 합니다.</li>
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
					<iframe class="box_style_4_mov_file" src="https://www.youtube.com/embed/M3FucC2FzLg?" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>


			<div class="box_style_5 py40 px30" style="background-image: url('/public/images/common/img_06.jpg');">
				<h3>오십견 예방법</h3>
				<ul class="box_style_5_ul mt50">
					<li class="p30">
						<h4><strong class="mt10"><span class="text-hide">1. </span>스트레칭</strong></h4>
						<p>관절을 풀어주는 스트레칭 동작으로 어깨와 팔의 근육과 관절을 부드럽게 해 주는 것이 필요합니다.</p>
					</li>
					<li class="p30">
						<h4><strong class="mt10"><span class="text-hide">2. </span>온열 요법</strong></h4>
						<p>어깨 주변 근육의 긴장을 풀어주기 위한 방법으로 온탕이나 따뜻한 팩 등을 사용하여 혈액순환과 긴장완화를 유도합니다.</p>
					</li>
					<li class="p30">
						<h4><strong class="mt10"><span class="text-hide">3. </span>적당한 운동</strong></h4>
						<p>전신 운동 및 근력 운동, 스트레칭을 적당히 분배하여 하는 것이 좋습니다. 규칙적으로 운동은 하되 장시간 관절을 혹사시키며 무리하는 것은 바람직하지 않습니다.</p>
					</li>
				</ul>
			</div>

		</div>
	</div>
<?php include_once $GP -> INC_WWW . '/footer_mobile.php';?>