<?PHP
	include_once $_SERVER['DOCUMENT_ROOT'] . '/_init.php';
	include_once $GP -> INC_WWW . '/count_inc.php';
	$top_dep_title = "어깨";
	$page_title = "회전근개파열";
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
				<h3 class="mt30">회전근개파열</h3>
				<p class="mt40">회전근개는 어깨관절을 감싸고 있는 힘줄들을 함께 부르는 명칭으로, 어깨를 모든 방향으로 움직이게 하고 어깨뼈와 관절을<br/>안정시키는 역할을 합니다.</p>
				<p class="mt20">회전근개는 총 4개의 힘줄로서 앞 쪽부터 견갑하건, 극상건, 극하건, 소원형건이 하나의 판처럼 어깨관절을 둘러싸고 있습니다.<br/>어깨를 다치거나 장기간 무리하게 사용하는 경우에서 회전근개의 변성이나 염증이 발생한 것을 ‘충돌증후군, 회전근개증후군’ 이라고 하며 이를 넘어 힘줄 파열로 진행된 것이 '회전근개파열'입니다.</p>
				<div class="mt30"><img src="/public/images/common/con_disease_shoulder_sub03_img01.jpg" alt="" style="width: 80%"></div>
			</div>
			<div class="box_style_2 py60 px30">
				<div class="box_style_2_div box_style_2_div_left" style="background-image: url('/public/images/common/con_cause_shoulder_sub03_img01.jpg');">
					<h4 class="pl30"><i><span></span></i><strong class="px30">회전근개파열 원인</strong></h4>
					<div>
						<ul class="box_style_2_ul">
							<li class="">어깨를 지속적으로 움직이는 직업에 종사하는 경우</li>
							<li class="">사고나 부상으로 어깨에 외상을 입은 사람인 경우</li>
							<li class="">테니스, 야구, 골프 등 어깨를 많이 사용하는 운동을 즐기는 사람인 경우</li>
						</ul>
					</div>
				</div>
				<div class="box_style_2_div box_style_2_div_right" style="background-image: url('/public/images/common/con_symptom_shoulder_sub03_img01.jpg');">
					<h4 class="pl30"><i><span></span></i><strong class="px30">회전근개파열 증상</strong></h4>
					<div>
						<ul class="box_style_2_ul">
							<li>양치하거나 안전벨트 매는 동작에서 어깨 및 팔에 통증이 발생합니다. </li>
							<li>밤에 통증이 심해져 밤잠을 설칠 수 있습니다.</li>
							<li>능동적으로 팔 올리기가 어렵고 힘이 빠집니다.</li>
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
					<iframe class="box_style_4_mov_file" src="https://www.youtube.com/embed/OiPhbbzKh0U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>


			<div class="box_style_5 py40 px30" style="background-image: url('/public/images/common/img_06.jpg');">
				<h3>회전근개파열 예방법</h3>
				<ul class="box_style_5_ul mt50">
					<li class="p30">
						<h4><strong class="mt10"><span class="text-hide">1. </span>과도한 어깨 사용 금지</strong></h4>
						<p>팔을 반복적으로 움직이는 운동 및 일은 줄이시는게 좋습니다.</p>
					</li>
					<li class="p30">
						<h4><strong class="mt10"><span class="text-hide">2. </span>충분한 휴식 </strong></h4>
						<p>어깨관절을 무리하게 사용하였다면 중간중간 휴식을 통해 피로를 풀어주는 것이 좋습니다.</p>
					</li>
					<li class="p30">
						<h4><strong class="mt10"><span class="text-hide">3. </span>어깨 스트레칭</strong></h4>
						<p>평소 어깨를 이용한 가벼운 스트레칭이나 회전근개 근력운동을 자주 해주는 것이 좋습니다.</p>
					</li>
				</ul>
			</div>

		</div>
	</div>
<?php include_once $GP -> INC_WWW . '/footer_mobile.php';?>