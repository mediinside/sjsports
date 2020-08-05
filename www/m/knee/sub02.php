<?PHP
	include_once $_SERVER['DOCUMENT_ROOT'] . '/_init.php';
	include_once $GP -> INC_WWW . '/count_inc.php';
	$top_dep_title = "무릎";
	$page_title = "반월상연골파열";
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
				<h3 class="mt30">반월상연골파열</h3>
				<p class="mt40">반월상 연골판이란 자동차 타이어와 같은 역할을 합니다.</p>
				<p class="mt20">반월상연골은 경골과 대퇴골의 관절면 사이에 위치해 관절면에 작용하는 하중의 전달 및 지지, 충격흡수, 관절 안정성 유지, 관절의 일치성에 기여를 하며 윤활작용을 통해 관절의 마모방지 역할을 하는 무릎에 매우 중요한 기능을 하는 구조물입니다.<br/>반달 모양의 무릎 구조물로, 외측과 내측에 각각 존재합니다.</p>
				<div class="mt30"><img src="/public/images/common/con_disease_knee_sub02_img01.jpg" alt="" style="width: 50%"></div>
			</div>
			<div class="box_style_2 py60 px30">
				<div class="box_style_2_div box_style_2_div_left" style="background-image: url('/public/images/common/con_cause_knee_sub02_img01.jpg');">
					<h4 class="pl30"><i><span></span></i><strong class="px30">반월상연골파열 원인</strong></h4>
					<div>
						<ul class="box_style_2_ul">
							<li class="">축구와 농구 같은 운동을 하다가 무릎이 비틀리는 손상에 의한 경우</li>
							<li class="">앉아서 일하거나 비슷한 자세의 스포츠를 즐기는 경우나 미끄러지는 경우</li>
							<li class="">퇴행성 변화로 인하여 자연적으로 발생하는 경우</li>
						</ul>
					</div>
				</div>
				<div class="box_style_2_div box_style_2_div_right" style="background-image: url('/public/images/common/con_symptom_knee_sub02_img01.jpg');">
					<h4 class="pl30"><i><span></span></i><strong class="px30">반월상연골파열 증상</strong></h4>
					<div>
						<ul class="box_style_2_ul">
							<li>특별한 외상력 없이도 만성적인 관절의 붓기와 무릎 통증이 나타납니다.</li>
							<li>걸을 때 무릎에 힘이 들어가지 않고 무릎 하단부에 통증이 발생합니다.</li>
							<li>무릎을 제대로 펴거나 굽히기가 힘듭니다.</li>
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
					<iframe class="box_style_4_mov_file" src="https://www.youtube.com/embed/JfkvXHD7Qlc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>


			<div class="box_style_5 py40 px30" style="background-image: url('/public/images/common/con_pr_knee_sub01_img01.jpg');">
				<h3>반월상연골파열 예방법</h3>
				<ul class="box_style_5_ul mt50">
					<li class="p30">
						<h4><strong class="mt10"><span class="text-hide">1. </span>스트레칭</strong></h4>
						<p>관절을 꺾고 비트는 동작보다는<br/>유연성과 가동성을 올려줄 수 있는 동작으로 산행 전, 후로 약 10분 이상 시행해주는 것이 좋습니다.</p>
					</li>
					<li class="p30">
						<h4><strong class="mt10"><span class="text-hide">2. </span>체중감량</strong></h4>
						<p>상체 등 체중이 많이 나갈수록 무릎이나 발목 관절에 가해지는 부담이 크기때문에 비만을 예방하는 것이 좋습니다.</p>
					</li>
					<li class="p30">
						<h4><strong class="mt10"><span class="text-hide">3. </span>적절한 운동</strong></h4>
						<p>고정식 자전거 타기, 수영 등과 같은 관절에 무리가 없는 운동을 하는 것이 좋습니다.</p>
					</li>
				</ul>
			</div>

		</div>
	</div>
<?php include_once $GP -> INC_WWW . '/footer_mobile.php';?>