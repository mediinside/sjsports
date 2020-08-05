<?PHP
	include_once $_SERVER['DOCUMENT_ROOT'] . '/_init.php';
	include_once $GP -> INC_WWW . '/count_inc.php';
	$top_dep_title = "발/발목";
	$page_title = "아킬레스건염질환";
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
				<h3 class="mt30">아킬레스건염질환</h3>
				<p class="mt40">아킬레스건의 기능은 서 있을 때 무릎이 앞으로 넘어지지 않도록<br/>지탱하며 걸을 때 뒤꿈치를 들어 올려 발이 땅에서 떨어져 바닥을<br/>차고 몸을 앞으로 나아가도록 하는 중요한 역할을 하는 힘줄입니다.</p>
				<p class="mt20">보행 시 앞으로 나갈 수 있는 추진력을 제공해주며, 퇴화, 외상, 피로누적 등 다양한 원인에 의해 무리가 와서 손상되고 염증이 생긴<br/>상태를 아킬레스건염이라고 말합니다.</p>
				<div class="mt30"><img src="/public/images/common/con_disease_foot_sub04_img01.jpg" alt="" style="width: 60%"></div>
			</div>
			<div class="box_style_2 py60 px30">
				<div class="box_style_2_div box_style_2_div_left" style="background-image: url('/public/images/common/con_cause_foot_sub04_img01.jpg');">
					<h4 class="pl30"><i><span></span></i><strong class="px30">아킬레스건염질환 원인</strong></h4>
					<div>
						<ul class="box_style_2_ul">
							<li class="">밑창이 단단한 구두를 오래 착용하는 경우</li>
							<li class="">장거리 달리기, 마라톤, 축구 등 스포츠를 즐기는 경우</li>
							<li class="">구두 뒤축과 아킬레스건의 잦은 마찰이 있는 경우</li>
						</ul>
					</div>
				</div>
				<div class="box_style_2_div box_style_2_div_right" style="background-image: url('/public/images/common/con_symptom_foot_sub04_img01.jpg');">
					<h4 class="pl30"><i><span></span></i><strong class="px30">아킬레스건염질환 증상</strong></h4>
					<div>
						<ul class="box_style_2_ul">
							<li>발뒤꿈치가 붉어지면서 열이 나고 붓습니다</li>
							<li>운동 전후로 종아리 뒤쪽 통증이 심합니다.</li>
							<li>아침에 일어나 바닥을 처음 디딜 때 통증이 심합니다.</li>
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
					<iframe class="box_style_4_mov_file" src="https://www.youtube.com/embed/Z1se-FuLcoU?" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>


			<div class="box_style_5 py40 px30" style="background-image: url('/public/images/common/img_06.jpg');">
				<h3>아킬레스건염질환 예방법</h3>
				<ul class="box_style_5_ul mt50">
					<li class="p30">
						<h4><strong class="mt10"><span class="text-hide">1. </span>발목 스트레칭</strong></h4>
						<p>근육과 인대를 풀어주는 스트레칭으로 발을 앞쪽으로 들어서 약 10초간 유지 후 반대쪽 발도 똑같이 해주시면 됩니다.</p>
					</li>
					<li class="p30">
						<h4><strong class="mt10"><span class="text-hide">2. </span>올바른 걸음걸이</strong></h4>
						<p>양발을 11자 상태에서 앞발이 땅을 내딛을때 발꿈치부터 딛을 수 있도록 해야합니다.</p>
					</li>
					<li class="p30">
						<h4><strong class="mt10"><span class="text-hide">3. </span>발목 찜질해주기</strong></h4>
						<p>뜨겁지 않은 물로 족욕이나 마사지 등으로 발의 피로를 수시로 풀어 주는 것이 좋습니다.</p>
					</li>
				</ul>
			</div>

		</div>
	</div>
<?php include_once $GP -> INC_WWW . '/footer_mobile.php';?>