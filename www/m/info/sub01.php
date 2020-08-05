<?php
	include_once $_SERVER['DOCUMENT_ROOT'] . '/_init.php';
	include_once $GP -> INC_WWW . '/count_inc.php';
	$top_dep_title = "진료안내";
	$page_title = "진료시간";
	include_once $GP -> INC_WWW . '/head_mobile.php';
	$locArr = array(4,2);

    include_once($GP->CLS."class.list.php");
	include_once($GP -> CLS."/class.doctor.php");
	include_once($GP->CLS."class.button.php");

	$C_ListClass 	= new ListClass;
	$C_Doctor 		= new Doctor;
	$C_Button 		= new Button;

	if(!$_GET['dr_center']) {
		$dr_center = $_GET['dr_center'];
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

?>
<script>
	$(document).ready(function(){
		$('.sub_head').css(
			{
				"background-image":"url('/public/images/common/sub_top_img02.jpg')",
			}
		);
	});
</script>
<?php
	include_once $GP -> INC_WWW . '/header_mobile.php';
	include_once $GP -> INC_WWW . '/header_mobile_after.php';
?>
	<div id="container" class="bg-scratch">
		<?php include_once $GP -> INC_WWW . '/location_new.php';?>
		<div id="article" class="guide side-strip">
			<div class="box_style_1 text-center py60">
				<h3 class="mt30"><?=$page_title;?></h3>
			</div>
			<div class="guide-schedule">
				<div class="display">
					<h3 class="display-title">진료시간</h3>
					<div class="contain">
						<div class="default-schedule">
							<ul>
								<li><dl>
									<dt>평&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;일</dt>
									<dd>09:00 - 17:30</dd>
								</dl></li>
								<li><dl>
									<dt>토&nbsp;&nbsp;요&nbsp;&nbsp;일</dt>
									<dd>09:00 - 13:00</dd>
								</dl></li>
								<li><dl>
									<dt>점심시간</dt>
									<dd>13:00 - 14:00</dd>
								</dl></li>
							</ul>
						</div>
						<p class="description">* 진료 마감시간 30분 전까지 방문하여 주세요.</p>
					</div>
				</div>
			</div>
			<div class="guide-doctor-schedule">
				<div class="display">
					<h3 class="display-title">의료진 진료시간</h3>
					<div class="contain">
						<ul class="doctor-list">
                        	<?php
                                $dummy = 1;
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
                                    $dr_history6	= $data_list[$i]['dr_history6'];
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
							<li><div class="panel" id="<?=$dr_idx?>">
								<div class="picture"><?=$dr_img?></div>
								<div class="info">
									<div class="section">
										<h4 class="header">
											<strong class="name"><?=$dr_name?></strong>
											<span class="position"><?=$GP -> DOCTOR_POSITION[$dr_position]?></span> /
                                            <? if($dr_center !=''){ ?>
											<em class="specialty"><?=$dr_center?></em>
                                            <? }else{?>
                                            <em class="specialty"><?=$GP -> CENTER_TYPE[$dr_clinic]?></em>
                                            <? } ?>
										</h4>
										<dl class="class">
											<dt>전문분야</dt><dd><?=$dr_treat?></dd>
										</dl>
										<div class="schedule">
											<table>
												<thead>
													<tr>
														<th scope="col">요일</th>
														<th scope="col">월</th>
														<th scope="col">화</th>
														<th scope="col">수</th>
														<th scope="col">목</th>
														<th scope="col">금</th>
														<th scope="col">토</th>
													</tr>
												</thead>
												<tbody>
													<tr>
                                                        <th scope="row">오전</th>
                                                        <td><?=$GP -> DOCTOR_SCH_SHOW[$moning_arr[0]]?></td>
                                                        <td><?=$GP -> DOCTOR_SCH_SHOW[$moning_arr[1]]?></td>
                                                        <td><?=$GP -> DOCTOR_SCH_SHOW[$moning_arr[2]]?></td>
                                                        <td><?=$GP -> DOCTOR_SCH_SHOW[$moning_arr[3]]?></td>
                                                        <td><?=$GP -> DOCTOR_SCH_SHOW[$moning_arr[4]]?></td>
                                                        <td rowspan="2"><strong>
                                                        <?php
                                                            $dr_hs6 = $dr_history6;
                                                            $dr_hs6 = str_replace("\n","<br>",$dr_hs6);
                                                            echo  $dr_hs6;

                                                        ?></strong></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">오후</th>
                                                        <td><?=$GP -> DOCTOR_SCH_SHOW[$after_arr[0]]?></td>
                                                        <td><?=$GP -> DOCTOR_SCH_SHOW[$after_arr[1]]?></td>
                                                        <td><?=$GP -> DOCTOR_SCH_SHOW[$after_arr[2]]?></td>
                                                        <td><?=$GP -> DOCTOR_SCH_SHOW[$after_arr[3]]?></td>
                                                        <td><?=$GP -> DOCTOR_SCH_SHOW[$after_arr[4]]?></td>
                                                    </tr>
												</tbody>
											</table>
										</div>
                                        <? if($dr_history3 !=''){ ?><p class="remarks"><?=$dr_history3?></p> <? } ?>
										<div class="btn-group">
											<div class="btn-rt">
												<a href="/m/about/sub02.php" class="btn-small btn-detail"><span>의료진 소개</span></a>
												<!-- <a href="#" class="btn-small btn-reserve"><span>온라인 예약</span></a> -->
											</div>
										</div>
									</div>
								</div>
							</div></li>
                           <? } ?>
						</ul>
					</div>
				</div>
			</div>
			<?php include_once "connect.html"; ?>
		</div>
	</div>
<?php include_once $GP -> INC_WWW . '/footer_mobile.php';?>
