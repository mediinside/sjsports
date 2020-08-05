<?PHP
	include_once $_SERVER['DOCUMENT_ROOT'] . '/_init.php';
	include_once $GP -> INC_WWW . '/count_inc.php';
	$top_dep_title = "발/발목";
	$page_title = "족저근막염";
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
				<h3 class="mt30">족저근막염</h3>
				<p class="mt40">족저근막은 종골이라 불리는 발뒤꿈치뼈에서 시작하여 발바닥 앞쪽으로 5개의 가지를 내어 발가락 기저 부위에 붙은 두껍고 강한 섬유띠를 말합니다.</p>
				<p class="mt20">발의 아치를 유지하고 발에 전해지는 충격을 흡수하며 체중이 실린 상태에서 발을 들어 올리는 데 도움을 주어 보행시 중요한 역할을 합니다.<br/>이러한 족저근막이 반복적인 미세 손상을 입어 근막을 구성하는 콜라겐의 변성이 유발되고 염증이 발생한 것을 족저근막염이라 하며, 성인의 발뒤꿈치 통증의 대표적인 원인 질환으로 알려져 있습니다.</p>
				<div class="mt30"><img src="/public/images/common/con_disease_foot_sub02_img01.jpg" alt="" style="width: 60%"></div>
			</div>
			<div class="box_style_2 py60 px30">
				<div class="box_style_2_div box_style_2_div_left" style="background-image: url('/public/images/common/con_cause_foot_sub02_img01.jpg');">
					<h4 class="pl30"><i><span></span></i><strong class="px30">족저근막염 원인</strong></h4>
					<div>
						<ul class="box_style_2_ul">
							<li class="">많이 걷거나 오래 서 있는 등 과사용 하는 경우</li>
							<li class="">체중 증가로 인해 발바닥에 부담이 커질 경우</li>
							<li class="">운동량이 없던 사람이 급작스럽게 발을 사용한 경우</li>
						</ul>
					</div>
				</div>
				<div class="box_style_2_div box_style_2_div_right" style="background-image: url('/public/images/common/con_symptom_foot_sub02_img01.jpg');">
					<h4 class="pl30"><i><span></span></i><strong class="px30">족저근막염 증상</strong></h4>
					<div>
						<ul class="box_style_2_ul">
							<li>걸을 때마다 발바닥 통증이 있으며, 특히 아침에 첫 발을 내딛을 때 심합니다.</li>
							<li>바늘로 찌르는 듯한 통증이 있습니다.</li>
							<li>평상 시 서 있을 때 발바닥이 뻣뻣한 느낌을 받습니다.</li>
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
					<iframe class="box_style_4_mov_file" src="https://www.youtube.com/embed/bdUydG3wOnA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>


			<div class="box_style_5 py40 px30" style="background-image: url('/public/images/common/img_06.jpg');">
				<h3>족저근막염 예방법</h3>
				<ul class="box_style_5_ul mt50">
					<li class="p30">
						<h4><strong class="mt10"><span class="text-hide">1. </span>캔을 발로 굴리기</strong></h4>
						<p>아픈 발바닥에 캔 이나 페트병을 대고 앞뒤로 굴려줍니다. 잠자기 전에 하시는 것이 효과적이며 20분 정도 반복합니다.</p>
					</li>
					<li class="p30">
						<h4><strong class="mt10"><span class="text-hide">2. </span>발가락 스트레칭</strong></h4>
						<p>아주 간단한 운동 방법으로 시간이 날 때마다 엄지발가락을 위/아래로 크게 돌렸다가 내려줍니다.</p>
					</li>
					<li class="p30">
						<h4><strong class="mt10"><span class="text-hide">3. </span>수건 스트레칭</strong></h4>
						<p>바닥에 앉아 많이 아픈 발을 수건으로 감싸고, 무릎을 쭉 펴고 수건을 이용하여 발을 몸쪽으로 잡아 당겨 15~30초 유지하며 반복합니다.</p>
					</li>
				</ul>
			</div>

		</div>
	</div>
<?php include_once $GP -> INC_WWW . '/footer_mobile.php';?>