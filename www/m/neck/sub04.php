<?PHP
	include_once $_SERVER['DOCUMENT_ROOT'] . '/_init.php';
	include_once $GP -> INC_WWW . '/count_inc.php';
	$top_dep_title = "목/허리";
	$page_title = "척추분리증";
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
				<h3 class="mt30">척추분리증</h3>
				<p class="mt40">척추분리증은 척추 뼈의 앞과 뒤를 연결하는 협부라는 부위가 분리된 상태를 말합니다.</p>
				<p class="mt20">디스크(추간판)에 직접적인 영향을 주지는 않지만 척추 뼈 자체에 이상이 발생하면서 척추 모양이 불안정해질 수 있습니다.<br/>허리에서 흔하게 나타나고 허리 중에선 5번 척추 뼈(요추)에서 흔하게 나타나며, 여성보다 남성에게서 더 흔하게 발생하는 것으로 알려져 있습니다.</p>
				<div class="mt30"><img src="/public/images/common/con_disease_neck_sub04_img01.jpg" alt="" style="width: 80%"></div>
			</div>
			<div class="box_style_2 py60 px30">
				<div class="box_style_2_div box_style_2_div_left" style="background-image: url('/public/images/common/con_cause_neck_sub04_img01.jpg');">
					<h4 class="pl30"><i><span></span></i><strong class="px30">척추분리증 원인</strong></h4>
					<div>
						<ul class="box_style_2_ul">
							<li class="">선천적으로 척추 관절에 결함이 있는 경우</li>
							<li class="">과격한 운동에 의해 척추 관절에 과부하가 발생하면서 피로 골절이 된 경우</li>
							<li class="">발육기(10세 이상 청소년) 과정에서 결손된 경우</li>
						</ul>
					</div>
				</div>
				<div class="box_style_2_div box_style_2_div_right" style="background-image: url('/public/images/common/con_symptom_neck_sub04_img01.jpg');">
					<h4 class="pl30"><i><span></span></i><strong class="px30">척추분리증 증상</strong></h4>
					<div>
						<ul class="box_style_2_ul">
							<li>성장기 아동, 청소년이 원인 없이 허리통증을 호소할 수 있습니다.</li>
							<li>엉덩이, 허벅지, 종아리, 발끝이 저리고 당기고 아픕니다.</li>
							<li>오래 걸으면 다리가 저리고 당기는 증상이 생깁니다.</li>
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
				<h3>척추분리증 예방법</h3>
				<ul class="box_style_5_ul mt50">
					<li class="p30">
						<h4><strong class="mt10"><span class="text-hide">1. </span>바른자세</strong></h4>
						<p>앉아있을 때 바른자세로 있을 수 일도록 노력해야 하며, 무리하게 사용하는 행동은 피하는 것이 좋습니다.</p>
					</li>
					<li class="p30">
						<h4><strong class="mt10"><span class="text-hide">2. </span>체중관리</strong></h4>
						<p>체중이 많이 나가는 경우 척추에 하중이 증가되어 무리가 갈수 있어 식습관을 개선하는 것이 좋습니다.</p>
					</li>
					<li class="p30">
						<h4><strong class="mt10"><span class="text-hide">3. </span>가벼운 운동</strong></h4>
						<p>수영, 걷기, 자전거 타기 등의 운동을 꾸준하게 하며 관리해주는 것이 좋습니다.</p>
					</li>
				</ul>
			</div>

		</div>
	</div>
<?php include_once $GP -> INC_WWW . '/footer_mobile.php';?>