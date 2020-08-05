<?php
	include_once $_SERVER['DOCUMENT_ROOT'] . '/_init.php';
	include_once $GP -> INC_WWW . '/count_inc.php';
	$top_dep_title = "SJS소개";
	$page_title = "의료진 소개";
	include_once $GP -> INC_WWW . '/head_mobile.php';
	$locArr = array(1,1);

    include_once($GP->CLS."class.list.php");
	include_once($GP -> CLS."/class.doctor.php");
	include_once($GP->CLS."class.button.php");

	$C_ListClass 	= new ListClass;
	$C_Doctor 		= new Doctor;
	$C_Button 		= new Button;

	if(!$_GET['dr_center']) {
		$dr_center = $_GET['dr_center'];
	}


    if(!$_GET['dr_clinic']) {
		$dr_clinic = $_GET['dr_clinic'];
	}
	$args = array();
//	$args['show_row'] = 9;
	$args['dr_center'] = $dr_center;
    $args['dr_clinic'] = "A";
	$args['dr_main_view'] = "Y";
	$data = "";
	$data = $C_Doctor->Doctor_List2(array_merge($_GET,$_POST,$args));

	$data_list 		= $data['data'];
	$page_link 		= $data['page_info']['link'];
	$page_search 	= $data['page_info']['search'];
	$totalcount 	= $data['page_info']['total'];

	$totalpages 	= $data['page_info']['totalpages'];
	$nowPage 		= $data['page_info']['page'];
	$totalcount_l 	= number_format($totalcount,0);

	$data_list_cnt 	= count($data_list);

	switch ($dr_clinic) {
		case 'A':
			$page_title = '의료진 소개';
			break;
		case 'B':
			$page_title = '스태프 소개';
			break;

		default:
			$page_title = '의료진 소개';
			break;
	}
?>
<script>
	$(document).ready(function(){
		$('.sub_head').css(
			{
				"background-image":"url('/public/images/common/sub_top_img01.jpg')",
			}
		);
	});
</script>
<?php
	include_once $GP -> INC_WWW . '/header_mobile.php';
	include_once $GP -> INC_WWW . '/header_mobile_after.php';
?>
	<!-- <div id="pagetop">
		<div class="background" style="background-image:url(/public/images/bg-pagetop-0<?php echo $locArr[0];?>.jpg);"></div>
		<div class="contain">
			<h2 class="title">의료진 소개</h2>
		</div>
	</div> -->
	<div id="container" class="bg-scratch">
		<?php include_once $GP -> INC_WWW . '/location_new.php';?>
		<div id="article" class="intro side-strip">
			<div class="box_style_1 text-center py60">
				<h3 class="mt30"><?=$page_title;?></h3>
			</div>
			<div class="intro-doctor-list">
				<div class="display">
					<!-- <div class="header"> -->
					    <!-- <div class="utils">
					        <ul class="list">
					            <li><a href="/about/sub02.php?dr_clinic=A" class="btn btn-reserve"><span>의료진</span></a></li>
					            <li><a href="/about/sub02.php?dr_clinic=B" class="btn btn-consult"><span>스태프</span></a></li>
					        </ul>
					    </div> -->
					    <!-- <div class="ui-select">
					        <a href="javascript:void(0);" class="trigger">
					            <span>전체보기</span>
					            <i class="ip-icon-uiselect-arrow"></i>
					        </a>
					        <ul class="option">
					            <li <? if($_GET["dr_center"]=="" && $_GET["dr_clinic"]=="" ) echo 'class="on"' ;?>><a href="?">전체보기</a></li>
					            <li <? if($_GET["dr_center"]=="A" ) echo 'class="on"' ;?>><a href="?dr_center=A">관절센터</a></li>
					            <li <? if($_GET["dr_center"]=="B" ) echo 'class="on"' ;?>><a href="?dr_center=B">척추센터</a></li>
					            <li <? if($_GET["dr_clinic"]=="A" ) echo 'class="on"' ;?>><a href="?dr_clinic=A">외과</a></li>
					            <li <? if($_GET["dr_clinic"]=="C" ) echo 'class="on"' ;?>><a href="?dr_clinic=C">내과</a></li>
					            <li <? if($_GET["dr_clinic"]=="D" ) echo 'class="on"' ;?>><a href="?dr_clinic=D">소아청소년과</a></li>
					            <li <? if($_GET["dr_clinic"]=="G" ) echo 'class="on"' ;?>><a href="?dr_clinic=G">영상의학과</a></li>
					            <li <? if($_GET["dr_clinic"]=="F" ) echo 'class="on"' ;?>><a href="?dr_clinic=F">마취과</a></li>
					        </ul>
					    </div> -->
					<!-- </div> -->
					<div class="contain">
						<ul class="doctor-profiles">
                        	<?    $dummy = 1;
                                for ($i = 0 ; $i < $data_list_cnt ; $i++) {
                                    $dr_idx 		= $data_list[$i]['dr_idx'];
                                    $dt_code 		= $data_list[$i]['dt_code'];
                                    $dr_name		= $data_list[$i]['dr_name'];
                                    $dr_clinic		= $data_list[$i]['dr_clinic'];
                                    $dr_center		= $data_list[$i]['dr_center'];
                                    $dr_special		= $data_list[$i]['dr_special'];
                                    $dr_choice		= $data_list[$i]['dr_choice'];
                                    $dr_face_img	= $data_list[$i]['dr_face_img'];
                                    $dr_treat		= $data_list[$i]['dr_treat'];
                                    $dr_history		= nl2Br($data_list[$i]['dr_history']);
                                    $dr_history2	= nl2Br($data_list[$i]['dr_history2']);
                                    $dr_history4	= nl2Br($data_list[$i]['dr_history4']);
                                    $dr_history3	= nl2Br($data_list[$i]['dr_history3']);
                                    $dr_thesis 		= $data_list[$i]['dr_thesis'];
                                    $dr_position 	= $data_list[$i]['dr_position'];
                                    $moning_arr		= explode('|', $data_list[$i]['dr_m_sd']);
                                    $after_arr		= explode('|', $data_list[$i]['dr_a_sd']);
                                    $cn_arr			= explode(",", $dr_position);
                                    $dr_img = '';
                                    if($dr_face_img !=  '') {
                                      $dr_img = "<img src='" . $GP -> UP_DOCTOR_URL . $dr_face_img . "' class='block' alt='" .  $dr_name ."' />";
                                    }else{
                                      $dr_img = "<img src='/public/images/no-doctor.jpg' alt='' class='block'/>";
                                    }


                            ?>
							<li><div class="panel">
								<div class="picture"><?=$dr_img?></div>
								<p class="name">
                                <? if($dr_center !=''){ ?>
									<small><?=$dr_center?></small>
                                <? }else{ ?>
                                	<small><?=$GP -> CENTER_TYPE[$dr_clinic]?></small>
                                <? } ?>
									<span><?=$dr_name?> <?=$GP -> DOCTOR_POSITION[$dr_position]?></span>
								</p>
								<? if($dr_clinic == 'A'){ ?>
								<a href="sub02_detail.php?Drno=<?=$dr_idx?>" class="btn-detail">
									<span>상세보기</span>
									<i class="ip-icon-doctor-detail"></i>
								</a>
								<? } ?>
							</div></li>
                           <?php } ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php include_once $GP -> INC_WWW . '/footer_mobile.php';?>
</body>
</html>