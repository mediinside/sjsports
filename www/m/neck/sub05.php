<?PHP
	include_once $_SERVER['DOCUMENT_ROOT'] . '/_init.php';
	include_once $GP -> INC_WWW . '/count_inc.php';
	$top_dep_title = "목/허리";
	$page_title = "척추전방전위증";
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
				<h3 class="mt30">척추전방전위증</h3>
				<p class="mt40">위 척추뼈가 아래 척추뼈보다 앞으로 밀려나가면서 배 쪽으로 튀어나와 신경을 손상시켜 허리통증과 다리 저림을 일으키는 질환입니다.</p>
				<p class="mt20">크게 척추분리증에 의한 전방전위증, 퇴행성 변화에 의한 방전위증, 외상에 의한 전방전위증으로 나눌 수 있으며, 주로 한 군데에서만 나타나는 경우가 많지만 환자에 따라 여러 군데에서 동시에 발생할 수도 있습니다.<br/>척추전반전위증과 다르게 위 척추 뼈가 뒤로 밀린 것은 척추후방전위증이라고 합니다. </p>
				<div class="mt30"><img src="/public/images/common/con_disease_neck_sub05_img01.jpg" alt="" style="width: 80%"></div>
			</div>
			<div class="box_style_2 py60 px30">
				<div class="box_style_2_div box_style_2_div_left" style="background-image: url('/public/images/common/con_cause_neck_sub05_img01.jpg');">
					<h4 class="pl30"><i><span></span></i><strong class="px30">척추전방전위증 원인</strong></h4>
					<div>
						<ul class="box_style_2_ul">
							<li class="">노화로 인해 디스크와 관절의 퇴행성 변화를 겪으며 발생하는 경우</li>
							<li class="">악성 종양에 의해 척추 뼈가 약화된 경우</li>
							<li class="">교통사고나 낙상사고 등 외상에 의해 척추 관절 돌기가 골절된 경우</li>
						</ul>
					</div>
				</div>
				<div class="box_style_2_div box_style_2_div_right" style="background-image: url('/public/images/common/con_symptom_neck_sub05_img01.jpg');">
					<h4 class="pl30"><i><span></span></i><strong class="px30">척추전방전위증 증상</strong></h4>
					<div>
						<ul class="box_style_2_ul">
							<li>앉았다가 일어설 때나 허리를 뒤로 젖힐 때 허리통증이 있습니다.</li>
							<li>오래 서 있거나 많이 걷고 나면 허리나 엉치뼈 부근, 무릎 밑이 아픕니다.</li>
							<li>엉치 또는 허벅지, 종아리, 발끝이 저리거나 아프거나 당깁니다.</li>
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
				<h3>척추전방전위증 예방법</h3>
				<ul class="box_style_5_ul mt50">
					<li class="p30">
						<h4><strong class="mt10"><span class="text-hide">1. </span>다양한 자세</strong></h4>
						<p>장시간 한 자세로 앉아있는 것은 척추 전방 전위증을 유발시키는 데 큰 역할을 하기 때문에 피하는 것이 좋습니다.</p>
					</li>
					<li class="p30">
						<h4><strong class="mt10"><span class="text-hide">2. </span>가벼운 운동</strong></h4>
						<p>척추에 무리가 가는 운동보다는 가벼운 유산소 운동과 하체 순환 운동을 하는 것이 좋습니다.</p>
					</li>
					<li class="p30">
						<h4><strong class="mt10"><span class="text-hide">3. </span>스트레칭</strong></h4>
						<p>가벼운 운동과 꾸준한 스트레칭으로 척추 주변 근육을 강화하는 것이 좋습니다.</p>
					</li>
				</ul>
			</div>

		</div>
	</div>
<?php include_once $GP -> INC_WWW . '/footer_mobile.php';?>