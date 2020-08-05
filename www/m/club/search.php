<?PHP
	include_once $_SERVER['DOCUMENT_ROOT'] . '/_init.php';
	include_once $GP -> INC_WWW . '/count_inc.php';
	$page_title = "세종스포츠정형외과";
	include_once $GP -> INC_WWW . '/head_mobile.php';

	$locArr = array(5,2);

	if(!$jb_code) {
  		$jb_code="10";
	}

	$stext = ($_GET["stext"]) ? $_GET["stext"] : $_POST["stext"];

	include_once($GP->CLS."class.jhboard.php");
	include_once($GP->CLS."class.search.php");
	$C_JHBoard = new JHBoard();
	$C_Sch 		= new Search;
	// $js->load_script("/v3/controller/js/search.js");
	$args = array();
	$args["schtxt"] = $stext;
	$psize = "3";
	list($vdsch,$docsch,$brdsch) = $C_Sch->Search_List($args);

	$p=0;$i=0;
	$bmbtn = ($psize >= count($brdsch)) ? " style='display:none;'" : "";
	$bcnt = count($brdsch);



?>
	<script>
		$(document).ready(function(){
			$('.sub_head').css(
				{
					"background-image":"url('/public/images/common/img_01.jpg')",
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

<style>


</style>







	<div class="contents">
		<div class="contents_head" style="display: none;">
			<ul class="contents_head_ul">
			    <li class="contents_head_li">
			        <a href="/"><span class="text-hide">home</span></a>
			    </li>
			    <li class="contents_head_li"><a href="sub01.php">무릎</a></li>
			    <li class="contents_head_li">
			        <div class="dropdown">
			           <button class="btn_reset dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="mr10">십자인대파열(전/후방)</span></button>
			            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
			                <li class="dropdown-item"><a href="sub01.php">십자인대파열(전/후방)</a></li>
			                <li class="dropdown-item"><a href="sub02.php">반월상연골파열</a></li>
			                <li class="dropdown-item"><a href="sub03.php">무릎연골연화증</a></li>
			                <li class="dropdown-item"><a href="sub04.php">베이커낭종</a></li>
			                <li class="dropdown-item"><a href="sub05.php">퇴행성관절염</a></li>
			            </ul>
			        </div>
			    </li>
			</ul>
		</div>

		<div id="article" class="search_board">
			<!-- 컨텐츠 영역 -->
			<h3 class="pt100 pb50"><strong><?=$stext?>에 대한 총 <span class="search_pnt_color"><?=$bcnt?>건</span>이 <br/>검색 되었습니다.</strong></h3>
			<ul class="news_list list-unstyled">
		<?
		if($stext){

			foreach($brdsch as $k=>$v) {
				$regDt = date("Y.m.d", strtotime($v['jb_reg_date']));
				$jb_code = $v["jb_code"];
				$title 		= preg_replace('~<\s*\bscript\b[^>]*>(.*?)<\s*\/\s*script\s*>~is', '', $v["jb_title"]);
				$args = "";
				$args["jb_code"] = $jb_code;
				$bname = $C_JHBoard -> Board_Config_Data($args);
				//파일명 분리 및 저장된 파일 갯수
				if($v["jb_file_name"]!="") {
					$ex_jb_file_name = explode("|", $v["jb_file_name"]);
					$ex_jb_file_code = explode("|", $v["jb_file_code"]);
					$file_cnt = count($ex_jb_file_name);
				} else {
					$file_cnt = 0;
				}

				switch ($jb_code) {
					case '10':
						$board_url = "/club/page01.php?jb_idx=";
						break;
					case '20':
						$board_url = "/club/page02.php?jb_idx=";
						break;
					case '30':
						$board_url = "/club/page03.php?jb_idx=";
						break;
					case '40':
						$board_url = "/club/page04.php?jb_idx=";
						break;
					case '50':
						$board_url = "/club/page05.php?jb_idx=";
						break;
					default:
						$board_url = "/club/page01.php?jb_idx=";
						break;
				}
				$img_src = "";
				if($file_cnt > 0)
				{
					$file_ext = substr( strrchr($ex_jb_file_code[0], "."),1);
					$file_ext = strtolower($file_ext);	//확장자를 소문자로...

					if ($file_ext=="gif" || $file_ext=="jpg" || $file_ext=="png"){
						$code_file = $GP->UP_IMG_SMARTEDITOR_URL. "jb_${jb_code}/${ex_jb_file_code[0]}";
						$img_src = "<img src='" . $code_file. "' alt='" . $title. "' width='144' height='101'>";
					}else{
						$img_src = "<img src='/images/common/nk_thumbnail.jpg' width='144' height='101'>";
					}
				}else{
					$img_src = "<img src='/images/common/nk_thumbnail.jpg' width='140' height='101'>";
				}
				if($i%$psize == 0) $p++;
				$style = ($p > 1) ? 'style=display:none' : "";

				$list3[] = array(
					'style' 		 => $style,
					'p'				 => $p,
					'jb_idx'		 => $v["jb_idx"],
					'img_src'	 	 => $img_src,
					'title'			 => $title,
					'jb_code'	 	 => $jb_code,
					'bname'	 		 => $bname["jba_title"],
					'regDt'			 => $regDt
				);



				if ($jb_code == '100') {
					$board_url = '/m'.$v["jb_etc3"];
					$cateText = $bname["jba_title"].'-'.$v["jb_type"];
				}else{
					$board_url = '/m'.$board_url.$v["jb_idx"];
					$cateText = $bname["jba_title"];
				}
			$i++;
			?>
			<li>
				 <a href="<?=$board_url?>"><strong class="news_list_tit"><?=$title?></strong><span class="news_category"><?=$cateText?></span></a>
			</li>
		<?
			}
		}
		?>
			</ul>
		</div>


		</div>
	</div>

<?php include_once $GP -> INC_WWW . '/footer_mobile.php'; ?>