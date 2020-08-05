<?PHP
	include_once $_SERVER['DOCUMENT_ROOT'] . '/_init.php';
	include_once $GP -> INC_WWW . '/count_inc.php';
	$top_dep_title = "발/발목";
	$page_title = "무지외반증";
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
				<h3 class="mt30">무지외반증</h3>
				<p class="mt40">무지외반증은 엄지발가락의 첫 번째 마디를 기준으로 엄지 발가락 뼈가 활처럼 휘는 것을 질환을 말합니다</p>
				<p class="mt20">발에서 보이는 가장 흔한 질환 중 하나이고, 전 인구의 약 2~4%에서 발견된다고 보고되고 있으며, 남성보다 여성에게서 월등하게 많고 (2:8) 40대부터 급증하기 시작하여 50대에 가장 많이 발생합니다.<br/>최근에는 젊은 여성 중 하이힐을 즐겨 착용하는 경우 발생하는 경우가 많고, 남성들의 경우에도 구두를 오랜 기간 착용할 경우 발생할 수 있으며,심할 경우 발가락이 다른 발가락 위로 침범하고 돌출 부위에 심한 통증이 생길 수 있습니다.</p>
				<div class="mt30"><img src="/public/images/common/con_disease_foot_sub03_img01.jpg" alt="" style="width: 60%"></div>
			</div>
			<div class="box_style_2 py60 px30">
				<div class="box_style_2_div box_style_2_div_left" style="background-image: url('/public/images/common/con_cause_foot_sub03_img01.jpg');">
					<h4 class="pl30"><i><span></span></i><strong class="px30">무지외반증 원인</strong></h4>
					<div>
						<ul class="box_style_2_ul">
							<li class="">앞 코가 좁고 굽이 높은 신발을 주로 착용하는 경우</li>
							<li class="">체중 증가, 류머티즘 관절염, 타 족부질환이 있는 경우</li>
							<li class="">유전적으로 관절이 유연한 경우</li>
						</ul>
					</div>
				</div>
				<div class="box_style_2_div box_style_2_div_right" style="background-image: url('/public/images/common/con_symptom_foot_sub03_img01.jpg');">
					<h4 class="pl30"><i><span></span></i><strong class="px30">무지외반증 증상</strong></h4>
					<div>
						<ul class="box_style_2_ul">
							<li>엄지발가락의 관절 부위가 안쪽으로 돌출됩니다.</li>
							<li>외관상 변화가 확연해질수록 2,3번째 발가락에도 변형이 생깁니다.</li>
							<li>초기에는 좁은 신발을 신을 경우에만 가끔 통증을 느낍니다.</li>
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
					<iframe class="box_style_4_mov_file" src="https://www.youtube.com/embed/smuhrGUmvzU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>


			<div class="box_style_5 py40 px30" style="background-image: url('/public/images/common/img_06.jpg');">
				<h3>무지외반증 예방법</h3>
				<ul class="box_style_5_ul mt50">
					<li class="p30">
						<h4><strong class="mt10"><span class="text-hide">1. </span>무리가 가는 신발은 피하기</strong></h4>
						<p>굽이 낮고 발볼이 넉넉한 신발을 신으며 앞이 뽀족하고 굽 높은 신발은 자제하는 것이 좋습니다.</p>
					</li>
					<li class="p30">
						<h4><strong class="mt10"><span class="text-hide">2. </span>발가락 스트레칭</strong></h4>
						<p>아주 간단한 운동 방법으로 시간이 날 때마다 엄지발가락을 위, 아래로 크게 올렸다가 내려줍니다.</p>
					</li>
					<li class="p30">
						<h4><strong class="mt10"><span class="text-hide">3. </span>발의 피로 풀기</strong></h4>
						<p>너무 뜨겁지 않은 물을 이용하여 족욕이나 마사지 등으로 발의 피로를 수시로 풀어 주는 것이 좋습니다.</p>
					</li>
				</ul>
			</div>

		</div>
	</div>
<?php include_once $GP -> INC_WWW . '/footer_mobile.php';?>