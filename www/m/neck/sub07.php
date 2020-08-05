<?PHP
	include_once $_SERVER['DOCUMENT_ROOT'] . '/_init.php';
	include_once $GP -> INC_WWW . '/count_inc.php';
	$top_dep_title = "목/허리";
	$page_title = "근막동통증후군";
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
				<h3 class="mt30">근막동통증후군</h3>
				<p class="mt40">근막동통증후군은 근육을 감싸고 있는 막을 ‘근막’ 이라고 하며 이 근막이 뭉쳐서 통증을 일으키는 질환입니다.</p>
				<p class="mt20">근육은 우리 몸 전체에 분포하고 있으므로 근막동통증후군은 우리 몸 전체에 발생할 수 있습니다.</p>
				<div class="mt30"><img src="/public/images/common/con_disease_neck_sub07_img01.jpg" alt="" style="width: 50%"></div>
			</div>
			<div class="box_style_2 py60 px30">
				<div class="box_style_2_div box_style_2_div_left" style="background-image: url('/public/images/common/con_cause_neck_sub07_img01.jpg');">
					<h4 class="pl30"><i><span></span></i><strong class="px30">근막동통증후군 원인</strong></h4>
					<div>
						<ul class="box_style_2_ul">
							<li class="">과도한 스트레스와 수면부족으로 인한 경우</li>
							<li class="">잘못된 자세로 인한 비정상적 근육을 사용하는 경우</li>
							<li class="">척추협착증 같은 퇴행성 질환과 같이 발생하는 경우</li>
						</ul>
					</div>
				</div>
				<div class="box_style_2_div box_style_2_div_right" style="background-image: url('/public/images/common/con_symptom_neck_sub07_img01.jpg');">
					<h4 class="pl30"><i><span></span></i><strong class="px30">근막동통증후군 증상</strong></h4>
					<div>
						<ul class="box_style_2_ul">
							<li>뇌 정밀 검사를 해보았지만 만성적인 두통의 원인을 찾지 못했을 때.</li>
							<li>충분한 수면에도 불구하고 매일 피로감이 느껴집니다.</li>
							<li>특정부위를 눌렀을 때 나타나는 통증이 있으며 이 부위가 바뀌기도 합니다.</li>
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
				<h3>근막동통증후군 예방법</h3>
				<ul class="box_style_5_ul mt50">
					<li class="p30">
						<h4><strong class="mt10"><span class="text-hide">1. </span>규칙적인 휴식</strong></h4>
						<p>장시간 같은 자세를 유지해야 하는 일을 해야한다면, 규칙적인 휴식시간을 갖고<br/>어깨나 허리근육을 풀어 줍니다.</p>
					</li>
					<li class="p30">
						<h4><strong class="mt10"><span class="text-hide">2. </span>올바른 자세</strong></h4>
						<p>통증을 유발시키는 자세는 피하는 것이 좋습니다.</p>
					</li>
					<li class="p30">
						<h4><strong class="mt10"><span class="text-hide">3. </span>꾸준한 운동</strong></h4>
						<p>평소 스트레칭이나 가벼운 산책과 같은 유산소 운동을 합니다.</p>
					</li>
				</ul>
			</div>

		</div>
	</div>
<?php include_once $GP -> INC_WWW . '/footer_mobile.php';?>