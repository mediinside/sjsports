<?PHP
	include_once $_SERVER['DOCUMENT_ROOT'] . '/_init.php';
	include_once $GP -> INC_WWW . '/count_inc.php';
	$top_dep_title = "발/발목";
	$page_title = "발목관절염";
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
				<h3 class="mt30">발목관절염</h3>
				<p class="mt40">무릎에도 관절염이 있듯이 발목에도 관절염이 있습니다.<br/>하지만 무릎이 퇴행성 관절염인 것과는 달리, 발목은 외상성 관절염이 많다는 차이가 있습니다.</p>
				<p class="mt20">물론 발목에도 퇴행성 관절염이나 류머티스 관절염이 흔하게 발생하지만, 발목 염좌나 발목 부위 골절의 후유증으로 연골손상이 진행되는 경우에는 외상성 관절염이 발생합니다.<br/>최근엔 레저 활동 인구가 많아지면서 빈도가 늘어가면서 운동을 많이 했던 분들이거나, 발목을 자주 사용했던 분들이라면 다른 사람들보다 발목관절염을 조심해야합니다.</p>
				<div class="mt30"><img src="/public/images/common/con_disease_foot_sub05_img01.jpg" alt="" style="width: 70%"></div>
			</div>
			<div class="box_style_2 py60 px30">
				<div class="box_style_2_div box_style_2_div_left" style="background-image: url('/public/images/common/con_cause_foot_sub05_img01.jpg');">
					<h4 class="pl30"><i><span></span></i><strong class="px30">발목관절염 원인</strong></h4>
					<div>
						<ul class="box_style_2_ul">
							<li class="">연령대에 무관하게 무리하게 발목을 사용하는 경우</li>
							<li class="">잦은 발목 염좌나 골절 같은 사고로 인해 발생하는 경우</li>
							<li class="">대부분 제대로 처치 및 치료받지 않아 합병증과 같은 형태로 유발되는 경우</li>
						</ul>
					</div>
				</div>
				<div class="box_style_2_div box_style_2_div_right" style="background-image: url('/public/images/common/con_symptom_foot_sub05_img01.jpg');">
					<h4 class="pl30"><i><span></span></i><strong class="px30">발목관절염 증상</strong></h4>
					<div>
						<ul class="box_style_2_ul">
							<li>발목 연골이 닳게 되면서 시큰한 통증이 나타납니다.</li>
							<li>주로 아침이나 밤에 통증이 집중되는 경향이 있습니다.</li>
							<li>발목에 붓기가 나타나면서 걷거나 뛰는 것처럼 일상적인 생활이 힘들어 집니다.</li>
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
					<iframe class="box_style_4_mov_file" src="https://www.youtube.com/embed/B32wBvBpz6o" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>


			<div class="box_style_5 py40 px30" style="background-image: url('/public/images/common/img_06.jpg');">
				<h3>발목관절염 예방법</h3>
				<ul class="box_style_5_ul mt50">
					<li class="p30">
						<h4><strong class="mt10"><span class="text-hide">1. </span>적절한 운동</strong></h4>
						<p>하루에 30분 꾸준한 운동을 해서 관절 주변 부위의 근육을 강화시켜 관절부위를 보호해주는것이 좋습니다.</p>
					</li>
					<li class="p30">
						<h4><strong class="mt10"><span class="text-hide">2. </span>체중 유지</strong></h4>
						<p>상체 등 체중이 많이 나갈수록 무릎이나 발목 관절에 가해지는 부담이 크기 때문에 비만을 예방하는 것이 좋습니다.</p>
					</li>
					<li class="p30">
						<h4><strong class="mt10"><span class="text-hide">3. </span>올바른 자세</strong></h4>
						<p>쪼그려 앉거나, 양반다리를 하는 자세를 반복하게 되면 관절의 부담을 주기 때문 바닥에 앉지 않고 의자에 앉는 습관을 들이는 것이 좋습니다.</p>
					</li>
				</ul>
			</div>

		</div>
	</div>
<?php include_once $GP -> INC_WWW . '/footer_mobile.php';?>