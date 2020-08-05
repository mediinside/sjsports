<?php
	include_once $_SERVER['DOCUMENT_ROOT'] . '/_init.php';
	include_once $GP -> INC_WWW . '/count_inc.php';
	$top_dep_title = "SJS소개";
	$page_title = "운동재활스탭소개";
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
    $args['dr_clinic'] = "B";
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
			$page_title = '운동재활스탭소개';
			break;

		default:
			$page_title = '운동재활스탭소개';
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
								<!--? if($dr_clinic == 'A'){ ?-->
								<div class="detail">
									<div class="detail-txt">
										<b>[직책]</b><br>
										<!--· 세종스포츠정형외과 도수물리치료센터 실장--> <?=$dr_history?><br>
										<br>
										<b>[최종학력]</b><br>
										<!--· 고려대학교 보건과학대학 물리치료학과--> <?=$dr_history2?><br>
										<br>
										<b>[CERTIFICATION]</b><br>
										<!--· 물리치료사 면허증<br>
										· 대한 선수트레이너 ATC--><?=$dr_history3?><br>
										<br>
										<b>[경력]</b><br>
										<!--· 광동한방병원 물리치료사<br>
										· 전북 현대 모터스 축구단 수석재활트레이너<br>
										· 부산 아이파크 축구단 수석재활트레이너<br>
										· JJ선수 트레이닝 센터 센터장<br>
										· 성남 시민 프로 축구단 수석재활트레이너<br>
										· 예스병원 죽전점 운동치료실장<br>
										· 서울 석병원 스포츠재활센터 소장<br>
										· 서울 동인병원 도수물리치료 실장--><?=$dr_history4?><br>
										<br>
										<b>[학회활동]</b><br>
										<!--· 대한물리치료사협회 정회원<br>
										· 대한선수트레이너협회 정회원<br>
										· 대한스포츠의학회 정회원--><?=$dr_history5?><br>
										<br>
										<b>[소속학회]</b><br>
										<!--· 대한물리치료사협회 정회원--><?=$dr_history6?> <br>
										<br>
										<b>[이수이력]</b><br>
										<!--· 대한선수트레이너협회 AT course <br>
										· 대한선수트레이너협회 bridge course--><?=$dr_history7?>

											<!-- <dl>
												<dt></dt>
												<dd></dd>
											</dl>
											<dl>
												<dt></dt>
												<dd></dd>
											</dl>
											<dl>
												<dt></dt>
												<dd></dd>
											</dl>
											<dl>
												<dt></dt>
												<dd></dd>
											</dl>
											<dl>
												<dt></dt>
												<dd></dd>
											</dl> -->
									</div>
									<a href="#none" class="btn-detail-close" onclick="$(this).parent('.detail').animate({top:'110%'});">
										<span>약력닫기</span>
										<img src="/public/images/common/staff_plus.png" alt="" style="transform:rotateZ(45deg);">
									</a>
								</div>
								<a href="#none" class="btn-detail" onclick="$(this).siblings('.detail').animate({top:0});">
									<span>약력보기</span>
									<img src="/public/images/common/staff_plus.png" alt="">
								</a>
								<!--? } ?-->
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