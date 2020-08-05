<? 
 	include_once($GP->CLS."class.list.php");
	include_once($GP -> CLS."/class.doctor.php");
	include_once($GP->CLS."class.button.php");

	$C_ListClass 	= new ListClass;
	$C_Doctor 		= new Doctor;
	$C_Button 		= new Button;
	
	$args = array();
//	$args['show_row'] = 9;
	$args['dr_clinic'] = $dr_clinic;
	$args['dr_main_view'] = "Y";
	$data = "";
	$data = $C_Doctor->Doctor_List(array_merge($_GET,$_POST,$args));

	$data_list 		= $data['data'];
	$page_link 		= $data['page_info']['link'];
	$page_search 	= $data['page_info']['search'];
	$totalcount 	= $data['page_info']['total'];

	$totalpages 	= $data['page_info']['totalpages'];
	$nowPage 		= $data['page_info']['page'];
	$totalcount_l 	= number_format($totalcount,0);

	$data_list_cnt 	= count($data_list);
?>

 <div class="display">
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
		<li><div class="panel">
			<div class="picture"><?=$dr_img?></div>
			<div class="info">
				<div class="section">
					<h4 class="header">
						<strong class="name"><?=$dr_name?></strong>
						<span class="position"><?=$GP -> DOCTOR_POSITION[$dr_position]?></span> /
						<? if($dr_idx =='12'){ ?> 
                        <em class="specialty">병리과/건강검진센터</em>
                    	<? }else if($dr_idx =='14'){ ?> 
                        <em class="specialty">병리과/건강검진센터</em>
                        <? }else if($dr_center !=''){ ?> 
						<em class="specialty"><?=$GP -> CLINIC_TYPE[$dr_center]?></em>
					    <? }else{ ?>
					    <em class="specialty"><?=$GP -> CENTER_TYPE[$dr_clinic]?></em>
					    <? } ?>
					</h4>
					<dl class="class">
						<dt>진료과</dt><dd><?=$GP -> CENTER_TYPE[$dr_clinic]?><?=($dr_center != "") ? ",":"";?> <?=$GP -> CLINIC_TYPE[$dr_center]?></dd>
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
							<a href="/intro/page01-detail.html?Drno=<?=$dr_idx?>" class="btn-small btn-detail"><span>의료진 소개</span></a>
							<a href="/guide/page04.html" class="btn-small btn-reserve"><span>온라인 예약</span></a>
						</div>
					</div>
				</div>
			</div>
		</div></li>
	     <? } ?>
	</ul>
</div>