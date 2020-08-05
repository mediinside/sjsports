<?php
	include_once("../../_init.php");	
	
	include_once($GP->CLS."class.list.php");
	include_once($GP -> CLS."/class.online.php");
	include_once($GP -> CLS."/class.doctor.php");	
	include_once($GP->CLS."class.button.php");
	$C_ListClass 	= new ListClass;
	$C_Online 	= new Online;
	$C_Doctor 	= new Doctor;
	$C_Button 		= new Button;
	
	$args = array();
	$args['show_row'] = 10;
	$args['pagetype'] = "admin";
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
	
	include_once($GP -> INC_ADM_PATH."/head.php");

	$sel_type = $C_Func->makeSelect_Normal('tfc_type', $GP -> COUNSEL_TPYE , $_GET['tfc_type'], " title='구분' style='width:150px;' ",':::선택:::'); 
?>
<body>
<div class="Wrap"><!--// 전체를 감싸는 Wrap -->
		<? include_once($GP -> INC_ADM_PATH."/header.php"); ?>
		<div class="boxContentBody">
			<div class="boxSearch">									
			<form name="base_form" id="base_form" method="GET">
			<ul>				
					<strong class="tit">등록일</strong>
					<span><input type="text" name="s_date" id="s_date" value="<?=$_GET['s_date']?>" class="input_text" size="20"></span>
					<span>~</span>
					<span><input type="text" name="e_date" id="e_date" value="<?=$_GET['e_date']?>" class="input_text" size="20" /></span>
				<li>
					<strong class="tit">검색조건</strong>
					<span>
					<select name="search_key" id="search_key">
						<option value="TKR.tfc_name" <? if($_GET['search_key'] == "TKR.tfc_name"){ echo "selected";}?>>성명</option>
						<option value="TKR.tfc_mobile" <? if($_GET['search_key'] == "TKR.tfc_mobile"){ echo "selected";}?>>핸드폰</option>
					</select>
					</span>
					<span><input type="text" name="search_content" id="search_content" value="<?=$_GET['search_content']?>" class="input_text" size="30" /></span>
					<span><button id="search_submit" class="btnSearch ">검색</button></span>
				</li>
			</ul>
			</form>
			</div>
		</div>

		<div id="BoardHead" class="boxBoardHead">				
				<div class="boxMemberBoard">
					<table>
						<thead>
							<tr>
								<th scope="col">No</th>
                                <th scope="col">이름</th>
                                <!-- <th scope="col">진료구분</th> -->
                                <th scope="col">진료과목</th>
								<th scope="col">연락처</th>
								<!-- <th scope="col">예약일</th> -->
                                <th scope="col">의료진</th>
								<th scope="col">상태</th>
								<th scope="col">등록일</th>
								<th scope="col">처리/삭제</th>	
							</tr>
						</thead>
						<tbody>
							<?
							$dummy = 1;
							for ($i = 0 ; $i < $data_list_cnt ; $i++) {
								$tfc_idx 		= $data_list[$i]['tfc_idx'];
								$tfc_name	= $data_list[$i]['tfc_name'];
								$tfc_gubun	= $data_list[$i]['tfc_gubun'];
								$tfc_type	= $data_list[$i]['tfc_type'];
								$tfc_mobile 	= $data_list[$i]['tfc_mobile'];
								$tfc_result 	= $data_list[$i]['tfc_result'];
								$dr_idx 		= $data_list[$i]['dr_idx'];
								$tfc_hour 		= $data_list[$i]['tfc_hour'];
								$tfc_time 		= $data_list[$i]['tfc_time'];
								$tfc_date 		= $data_list[$i]['tfc_date'];
								$tfc_regdate 	= date("Y.m.d", strtotime($data_list[$i]['tfc_regdate']));
								
								$dr_name='';
    							$dr_name = $C_Doctor->Dr_Name($dr_idx);
								
								if($tfc_time =='' && $tfc_hour !=''){
									$time = "(".$tfc_hour."시)";
								}else if($tfc_time !='' && $tfc_hour !=''){
									$time = "(".$tfc_hour ."시".$tfc_time."분)";
								}
								
								
								$edit_btn = $C_Button -> getButtonDesign('type2','처리',0,"layerPop('ifm_reg','./phone_edit.php?tfc_idx=" . $tfc_idx. "', '100%', 750)", 50,'');	
								$edit_btn .= $C_Button -> getButtonDesign('type2','삭제',0,"phone_del('" . $tfc_idx. "')", 50,'');
								
							?>
									<tr>
										<td><?=$data['page_info']['start_num']--?></td>
                                        <td><?=$tfc_name?></td>	
                                        <!-- <td><?=($tfc_gubun == "Y") ? "초진":"재진";?></td> -->
                                        <td><?=$GP -> ONLINE_TYPE[$tfc_type]?></td>
										<td><?=$tfc_mobile?></td>
										<!-- <td><?=$tfc_date?> <?=$time?></td> -->
                                        <td><?=$dr_name[dr_name]?></td>							
										<td><?=$GP -> QNA_RESULT[$tfc_result]?></td>
										<td><?=$tfc_regdate?></td>
										<td><?=$edit_btn?></td>
									</tr>
									<?
								$dummy++;
							}
							?>						
						</tbody>
					</table>
				</div>			
			</div>
			<ul class="boxBoardPaging">
				<?=$page_link?>
			</ul>
		</div>
		<? include_once($GP -> INC_ADM_PATH."/footer.php"); ?>
	</div>
</div><!-- 전체를 감싸는 Wrap //-->
</body>
</html>
<script type="text/javascript">

	$(document).ready(function(){

		$('#search_submit').click(function(){		
			$('#base_form').submit();
			return false;
		});

	});

	function phone_del(tfc_idx)
	{
		if(!confirm("삭제하시겠습니까?")) return;

		$.ajax({
			type: "POST",
			url: "./proc/phone_proc.php",
			data: "mode=Phone_DEL&tfc_idx=" + tfc_idx,
			dataType: "text",
			success: function(msg) {

				if($.trim(msg) == "true") {
					alert("삭제되었습니다");
					window.location.reload();
					return false;
				}else{
					alert('삭제에 실패하였습니다.');
					return;
				}
			},
			error: function(xhr, status, error) { alert(error); }
		});
	}
</script>
	
	