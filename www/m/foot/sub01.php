<?PHP
	include_once $_SERVER['DOCUMENT_ROOT'] . '/_init.php';
	include_once $GP -> INC_WWW . '/count_inc.php';
	$top_dep_title = "발/발목";
	$page_title = "발목염좌";
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
				<h3 class="mt30">발목염좌</h3>
				<p class="mt40">발목이 심하게 비틀리거나 접질렸을 때 발목 관절을 지탱하는 인대들의 손상으로 발생하는 질환 중 하나로 ‘발목염좌’라고도 합니다.</p>
				<p class="mt20">이러한 발목의 손상이 발생하는 경우에 발목의 뼈가 순간적으로 제자리를 이탈하면서 근육과 인대가 늘어나 염증이 발생하게 되고 이를 제대로 치료하지 못하는 경우에는 만성적인 발목질환으로 고착화될 수도 있습니다.</p>
				<div class="mt30"><img src="/public/images/common/con_disease_foot_sub01_img01.jpg" alt="" style="width: 60%"></div>
			</div>
			<div class="box_style_2 py60 px30">
				<div class="box_style_2_div box_style_2_div_left" style="background-image: url('/public/images/common/con_cause_foot_sub01_img01.jpg');">
					<h4 class="pl30"><i><span></span></i><strong class="px30">발목염좌 원인</strong></h4>
					<div>
						<ul class="box_style_2_ul">
							<li class="">축구나 농구 같은 과도한 운동으로 인한 경우</li>
							<li class="">길을 걷거나 발을 헛디뎌 발목을 접질렸을 경우</li>
							<li class="">높은 신발 사용으로 인한 발목 과부하인 경우</li>
						</ul>
					</div>
				</div>
				<div class="box_style_2_div box_style_2_div_right" style="background-image: url('/public/images/common/con_symptom_foot_sub01_img01.jpg');">
					<h4 class="pl30"><i><span></span></i><strong class="px30">발목염좌 증상</strong></h4>
					<div>
						<ul class="box_style_2_ul">
							<li>손상된 복사뼈 주위의 국소적인 압통이 있습니다.</li>
							<li>급성 외상과 함께 인대 부위 위로 반상출혈이 있습니다.</li>
							<li>족관절을 수동적으로 운동시킬 때 뚜렷해지는 통증 양상이 있습니다.</li>
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
					<iframe class="box_style_4_mov_file" src="https://www.youtube.com/embed/0SOaXleKMOc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>


			<div class="box_style_5 py40 px30" style="background-image: url('/public/images/common/img_06.jpg');">
				<h3>발목염좌 예방법</h3>
				<ul class="box_style_5_ul mt50">
					<li class="p30">
						<h4><strong class="mt10"><span class="text-hide">1. </span>종아리 근육 늘리기</strong></h4>
						<p>10도 정도 상향으로 기울어진 발판을 준비하고, 양발을 자연스럽게 벌리고 발판 위에 올라 30초간 자세를 유지하며 반복을 합니다.</p>
					</li>
					<li class="p30">
						<h4><strong class="mt10"><span class="text-hide">2. </span>발바닥 마사지</strong></h4>
						<p>의자에 앉아 아픈 발의 발바닥 밑에 탁구공을 끼운 후 발을 올리고 2분간 탁구공을 굴리며 마사지를 합니다.</p>
					</li>
					<li class="p30">
						<h4><strong class="mt10"><span class="text-hide">3. </span>발가락 스트레칭</strong></h4>
						<p>작은 수건을 바닥에 펴 두고 의자에 걸터앉아 발가락으로 수건 끝을 잡고 돌돌 말아 올리는 운동을 반복합니다.</p>
					</li>
				</ul>
			</div>

		</div>
	</div>
<?php include_once $GP -> INC_WWW . '/footer_mobile.php';?>