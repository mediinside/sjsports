<?php
	include_once $_SERVER['DOCUMENT_ROOT'] . '/_init.php';
	include_once $GP -> INC_WWW . '/count_inc.php';
	$page_title = "간편예약  &gt; 세종스포츠정형외과";
	include_once $GP -> INC_WWW . '/head.php';
	$locArr = array(4,4);
    
    include_once($GP->CLS."class.list.php");
	include_once($GP -> CLS."/class.online.php");
	include_once($GP -> CLS."/class.doctor.php");	
	include_once($GP->CLS."class.button.php");
	$C_ListClass 	= new ListClass;
	$C_Online 	= new Online;
	$C_Doctor 	= new Doctor;
	$C_Button 		= new Button;
	
	$args = array();
	$args['show_row'] = 1;
    $args['tfc_idx'] =$_SESSION['suseridx'];
	$data = "";
	$data = $C_Online->Phone_Counsel_List(array_merge($_GET,$_POST,$args));
	
	$data_list 		= $data['data'];
	$page_link 		= $data['page_info']['link'];
	$page_search 	= $data['page_info']['search'];
	$totalcount 	= $data['page_info']['total'];
	
	$totalpages 	= $data['page_info']['totalpages'];
	$nowPage 		= $data['page_info']['page'];
	$totalcount_l 	= number_format($totalcount,0);
	
	$data_list_cnt 	= count($data_list);
?>
<!-- Mirae Log Analysis Conversion Script Ver 1.0   -->
<script type='text/javascript'>
var mi_type = 'CV_1';
var mi_val = 'Y';
</script>
<!-- Mirae Log Analysis Conversion Script END  -->
</head>
<body>
<?php include_once $GP -> INC_WWW . '/header_ver2.php';?>
	<div id="pagetop">
		<div class="background" style="background-image:url(/public/images/bg-pagetop-04.jpg);"></div>
		<div class="contain">
			<h2 class="title">간편예약</h2>
		</div>
	</div>
	<div id="container">
		<?php include_once $GP -> INC_WWW . '/location.php';?>
		<div id="article" class="reserve side-strip">
			<div class="deco-header">
				<p class="highlight"><strong class="middle">예약 정보 확인</strong></p>
			</div>
			<div class="contain">
				<div class="result">
                	<?
                        $dummy = 1;
                        for ($i = 0 ; $i < $data_list_cnt ; $i++) {
                            $tfc_idx 		= $data_list[$i]['tfc_idx'];
                            $tfc_name	= $data_list[$i]['tfc_name'];
                            $tfc_type	= $data_list[$i]['tfc_type'];
                            $tfc_gubun	= $data_list[$i]['tfc_gubun'];
                            $dr_idx		= $data_list[$i]['dr_idx'];
                            $tfc_mobile 	= $data_list[$i]['tfc_mobile'];
                            $tfc_result 	= $data_list[$i]['tfc_result'];
                            $tfc_date 	= $data_list[$i]['tfc_date'];
                            $tfc_regdate 	= date("Y.m.d", strtotime($data_list[$i]['tfc_regdate']));
                            
                             $rd_day= $C_Func->DayWeekChange($tfc_date);
                            
                            if($tfc_date ==''){
                                $date = "선택안함";
                                $day ="";
                            }else{
                                $date = $tfc_date;
                                $day ="(".$rd_day.")";
                            }
                            
                      ?>      	
					<p class="highlight"><span class="name"><?=$tfc_name?></span>님의 간편예약이 <br class="mb-show" />접수되었습니다.</p>
					<ul class="list">
						<li><dl>
							<dt>연락처</dt>
							<dd><?=$tfc_mobile?></dd>
						</dl></li>
						<!-- <li><dl>
							<dt>진료구분</dt>
							<dd><?=($tfc_gubun == "Y") ? "초진":"재진";?></dd>
						</dl></li> -->
						<li><dl>
							<dt>진료과목</dt>
							<dd><?=$GP -> Phone_GUBUN[$tfc_type]?></dd>
						</dl></li>
						<!-- <li><dl>
							<dt>희망일</dt>
							<dd><?=$date?> <?=$day?></dd>
						</dl></li> -->
					</ul>
					<p class="text">간편예약의 경우 입력하신 연락처로 <br class="mb-show" />내용확인 후 최종 예약이 확정됩니다. <br />기타 문의사항은 고객센터<span class="point">(02-2244-5161)</span> 를 <br class="mb-show" />이용해 주시기 바랍니다.</p>
                     <? } ?>
				</div>
				<a href="/index_new.php" class="btn-submit">신청 완료</a>
			</div>
		</div>
	</div>
<?php include_once $GP -> INC_WWW . '/footer_ver2.php';?>
</body>
</html>