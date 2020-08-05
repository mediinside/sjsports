<?php
	include_once $_SERVER['DOCUMENT_ROOT'] . '/_init.php';
	include_once $GP -> INC_WWW . '/count_inc.php';
	$top_dep_title = "SJS소개";
	$page_title = "의료진 소개";
	include_once $GP -> INC_WWW . '/head.php';
	$locArr = array(1,1);

    include_once $GP -> CLS . 'class.doctor.php';
	$C_Doctor = new Doctor();

	$args['dr_idx'] = $_GET['Drno'];
	$rst = $C_Doctor->Doctor_Info($args);

  if($rst) {
		extract($rst);
		$dr_treat  			= $C_Func->dec_contents_edit($dr_treat);
		$dr_history  		= $C_Func->dec_contents_edit($dr_history);
  //      $dr_history2  		= $C_Func->dec_contents_edit($dr_history2);
         $moning_arr		= explode('|', $dr_m_sd);
         $after_arr			= explode('|', $dr_a_sd);


		$dr_img = '';
		if($dr_face_img !=  '') {
			$dr_img = "<img src='" . $GP -> UP_DOCTOR_URL . $dr_face_img . "' alt='" .  $dr_name ."' class='block' />";
		}
	}
?>
</head>
<body>
<?php include_once $GP -> INC_WWW . '/header_ver2.php';?>
<!-- <div id="pagetop">
	<div class="background" style="background-image:url(/public/images/bg-pagetop-0<?php echo $locArr[0];?>.jpg);"></div>
	<div class="contain">
		<h2 class="title">의료진 소개</h2>
	</div>
</div> -->
<?php include_once 'doctor/top-'.$args['dr_idx'].'.php';?>
			<div class="doctor-intro">
				<div class="display">
					<div class="basic-info">
						<div class="picture"><?=$dr_img?></div>
						<div class="info">
							<div class="section">
								<h4 class="header">
									<strong class="name"><?=$dr_name?></strong>
									<span class="position"><?=$GP -> DOCTOR_POSITION[$dr_position]?></span> /
                                     <? if($dr_center !=''){ ?>
									<em class="specialty"><?=$dr_center?></em>
                                    <? }else{ ?>
                                    <em class="specialty"><?=$GP -> CENTER_TYPE[$dr_clinic]?></em>
                                    <? } ?>
								</h4>
								<dl class="class">
									<!-- <dt>진료과</dt><dd><?=$GP -> CENTER_TYPE[$dr_clinic]?><?=($dr_center != "") ? ",":"";?> <?=$GP -> CLINIC_TYPE[$dr_center]?></dd> -->
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
                                                    $dr_hs_msg6 .= $dr_hs6;
                                                    echo $dr_hs_msg6;
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
								<? if($dr_history3 !=''){ ?><p class="remarks" style="color:red;"><?=$dr_history3?></p> <? } ?>
								<div class="btn-group">
									<div class="btn-rt">
										<? if ($dr_idx == '1') {
										?>
											<a href="https://blog.naver.com/jinni33a" target="_blank" style="vertical-align: top; margin-right: 5px;"><img src="/public/images/common/blogBtn.gif"></a>
										<? } ?>
										<a href="/club/page02.php" class="btn-small btn-detail"><span>전문의 상담</span></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="spec-info">
						<div class="tab">
							<a href="javascript:void(0)" class="trigger mb">
								<span></span>
								<i class="bicon-arrow-down"></i>
							</a>
							<ul class="list">
								<li class="on"><a href="javascript:void(0)">학력 및 경력</a></li>
                               <? if($dr_history4 !='') { ?>
								<li><a href="javascript:void(0)">학회 및 연수</a></li>
                               <? }
                                  if($dr_history2 != '') { ?>
								<li><a href="javascript:void(0)">수상</a></li>
                               <? }
                               	  if($dr_history5!=''){ ?>
                                <li><a href="javascript:void(0)">스포츠활동</a></li>
                               <? } ?>
							</ul>
						</div>
						<div class="tab-contents">
							<div class="panel on">
								<ul class="list">
									<?php
                                        $dr_hs_msg = "<li>";
                                        $dr_hs = $dr_history;
                                        $dr_hs = str_replace("\n","</li><li>",$dr_hs);
                                        $dr_hs_msg .= $dr_hs;
                                        echo $dr_hs_msg;
                                    ?>
								</ul>
							</div>
                        <? if($dr_history4 !='') {?>
							<div class="panel">
								<ul class="list">
									<?php
                                        $dr_hs_msg4 = "<li>";
                                        $dr_hs4 = $dr_history4;
                                        $dr_hs4 = str_replace("\n","</li><li>",$dr_hs4);
                                        $dr_hs_msg4 .= $dr_hs4;
                                        echo $dr_hs_msg4;
                                    ?>
								</ul>
							</div>
                      	<? } ?>
                        <? if($dr_history2 !='') {?>
							<div class="panel">
								<ul class="list">
									<?php

                                        $dr_hs_msg2 = "<li>";
                                        $dr_hs2 = $dr_history2;
                                        $dr_hs2 = str_replace("\n","</li><li>",$dr_hs2);
                                        $dr_hs_msg2 .= $dr_hs2;
                                        echo $dr_hs_msg2;

                                    ?>
								</ul>
							</div>
                        <? } ?>
                        <? if($dr_history5 !='') {?>
							<div class="panel">
								<ul class="list">
									<?php

                                        $dr_hs_msg5 = "<li>";
                                        $dr_hs5 = $dr_history5;
                                        $dr_hs5 = str_replace("\n","</li><li>",$dr_hs5);
                                        $dr_hs_msg5 .= $dr_hs5;
                                        echo $dr_hs_msg5;

                                    ?>
								</ul>
							</div>
                        <? } ?>
						</div>
					</div>
					<div class="btn-group center">
						<a href="/about/sub02.php" class="btn btn-list">의료진 전체보기</a>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php include_once $GP -> INC_WWW . '/footer_ver2.php';?>
</body>
</html>