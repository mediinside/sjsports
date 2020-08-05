<?PHP
	include_once $_SERVER['DOCUMENT_ROOT'] . '/_init.php';
	include_once $GP -> INC_WWW . '/count_inc.php';
	$top_dep_title = "무릎";
	$page_title = "무릎연골연화증";
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
				<h3 class="mt30">무릎연골연화증</h3>
				<p class="mt40">슬개골은 무릎을 펴주는 전방 허벅지 근육과 무릎 전방 힘줄 사이에 위치하는 접시 모양의 뼈로 무릎 연골연화증은 이 슬개골을 덮고 있는 연골이 단단함을 잃고 말랑말랑하게 약해지는 증상입니다.</p>
				<p class="mt20">병이 진행되면 연골 표면이 갈라지고 닳게 되며 말기에는 연골이 소실돼 연골 아래의 뼈가 노출되기도 합니다.</p>
				<div class="mt30"><img src="/public/images/common/con_disease_knee_sub03_img01.jpg" alt="" style="width: 70%"></div>
			</div>
			<div class="box_style_2 py60 px30">
				<div class="box_style_2_div box_style_2_div_left" style="background-image: url('/public/images/common/con_cause_knee_sub03_img01.jpg');">
					<h4 class="pl30"><i><span></span></i><strong class="px30">무릎연골연화증 원인</strong></h4>
					<div>
						<ul class="box_style_2_ul">
							<li class="">교통사고 등의 외상으로 무릎 앞쪽에 심한 충격이 가해지는 경우</li>
							<li class="">무리한 운동으로 인해 심한 무릎 연골이 손상되는 경우</li>
							<li class="">일상 생활 중 무릎을 꿇거나 쪼그리는 자세로 오래 일을 하는 경우</li>
						</ul>
					</div>
				</div>
				<div class="box_style_2_div box_style_2_div_right" style="background-image: url('/public/images/common/con_symptom_knee_sub03_img01.jpg');">
					<h4 class="pl30"><i><span></span></i><strong class="px30">무릎연골연화증 증상</strong></h4>
					<div>
						<ul class="box_style_2_ul">
							<li>무리하게 움직이면 증상의 악화 및 호전이 반복되는 경우가 많습니다.</li>
							<li>무릎 앞쪽이 저리고 뻑뻑하게 느껴질 수 있습니다.</li>
							<li>무릎 앞쪽에서 통증이 느껴지고 두 무릎을 굽힐 때마다 이상한 소리가 납니다.</li>
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
					<iframe class="box_style_4_mov_file" src="https://www.youtube.com/embed/Fg_ptstlsLc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>


			<div class="box_style_5 py40 px30" style="background-image: url('/public/images/common/img_06.jpg');">
				<h3>무릎연골연화증 예방법</h3>
				<ul class="box_style_5_ul mt50">
					<li class="p30">
						<h4><strong class="mt10"><span class="text-hide">1. </span>체중감량</strong></h4>
						<p>상체 등 체중이 많이 나갈수록 무릎이나 발목 관절에 가해지는 부담이 크기때문에 비만을 예방하는 것이 좋습니다.</p>
					</li>
					<li class="p30">
						<h4><strong class="mt10"><span class="text-hide">2. </span>적절한 운동</strong></h4>
						<p>고정식 자전거 타기, 수영 등과 같은 관절에 무리가 없는 운동을 하는 것이 좋습니다.</p>
					</li>
					<li class="p30">
						<h4><strong class="mt10"><span class="text-hide">3. </span>올바른 자세</strong></h4>
						<p>쪼그려 앉거나, 양반다리를 하는 자세를 반복하게 되면 관절의 부담을 주기 때문에 바닥에 앉지 않고 의자에 앉는 습관을 들이는 것이 좋습니다.</p>
					</li>
				</ul>
			</div>

		</div>
	</div>
<?php include_once $GP -> INC_WWW . '/footer_mobile.php';?>