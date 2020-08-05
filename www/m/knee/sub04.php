<?PHP
	include_once $_SERVER['DOCUMENT_ROOT'] . '/_init.php';
	include_once $GP -> INC_WWW . '/count_inc.php';
	$top_dep_title = "무릎";
	$page_title = "베이커낭종";
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
				<h3 class="mt30">베이커낭종</h3>
				<!--
				<p class="mt40">무릎 뒤쪽에 나타나는 가장 대표적인 질환으로,<br/>‘슬와낭종’이라고도 불리기도 합니다.</p>
			-->
				<p class="mt20">무릎 뒤쪽에 나타나는 가장 대표적인 질환으로, 무릎 관절을 부드럽게 유지시켜주는 활액 양이 과도하게 분비되면서 점액낭에 가득 차 압력이 증가하여 혹처럼 부어올라 통증을 유발시키는 질환입니다.</p>
				<div class="mt30"><img src="/public/images/common/con_disease_knee_sub04_img01.jpg" alt="" style="width: 70%"></div>
			</div>
			<div class="box_style_2 py60 px30">
				<div class="box_style_2_div box_style_2_div_left" style="background-image: url('/public/images/common/con_cause_knee_sub04_img01.jpg');">
					<h4 class="pl30"><i><span></span></i><strong class="px30">베이커낭종 원인</strong></h4>
					<div>
						<ul class="box_style_2_ul">
							<li class="">무릎 관절의 손상이나 염증에 의해서 발생하는 경우</li>
							<li class="">다른 만성적인 질환들에 유발되는 경우</li>
							<li class="">특정 증상이 없이 불명으로 발생하는 경우</li>
						</ul>
					</div>
				</div>
				<div class="box_style_2_div box_style_2_div_right" style="background-image: url('/public/images/common/con_symptom_knee_sub04_img01.jpg');">
					<h4 class="pl30"><i><span></span></i><strong class="px30">베이커낭종 증상</strong></h4>
					<div>
						<ul class="box_style_2_ul">
							<li>무릎 뒤쪽이 부어 오르거나 뻣뻣해진 느낌이 납니다.</li>
							<li>무릎 뒤쪽에 지속적인 통증이 있으며, 뭔가 꽉 들어 차 있는 듯한 느낌이 듭니다.</li>
							<li>무릎을 구부리거나 폈을 때 무릎 뒤쪽에서 통증이 느껴집니다.</li>
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
					<iframe class="box_style_4_mov_file" src="https://www.youtube.com/embed/-_lgYdqQFYI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>


			<div class="box_style_5 py40 px30" style="background-image: url('/public/images/common/img_06.jpg');">
				<h3>베이커낭종 예방법</h3>
				<ul class="box_style_5_ul mt50">
					<li class="p30">
						<h4><strong class="mt10"><span class="text-hide">1. </span>관절 강화 운동</strong></h4>
						<p>무릎부위에 무리가 가는 운동은 줄이고, 관절강화운동을 꾸준히 하는 것이 좋습니다.</p>
					</li>
					<li class="p30">
						<h4><strong class="mt10"><span class="text-hide">2. </span>잘못된 습관</strong></h4>
						<p>쪼그려 앉거나 양반다리로 오랜시간 앉아 있을 경우 부담이 생기기 때문에 이런 자세는 피하셔야 합니다.</p>
					</li>
					<li class="p30">
						<h4><strong class="mt10"><span class="text-hide">3. </span>충분한 휴식</strong></h4>
						<p>무릎을 사용하지 않을 때는 충분히 쉬면서 다리를 높여주는 습관을 가지는 것이 좋습니다.</p>
					</li>
				</ul>
			</div>

		</div>
	</div>
<?php include_once $GP -> INC_WWW . '/footer_mobile.php';?>