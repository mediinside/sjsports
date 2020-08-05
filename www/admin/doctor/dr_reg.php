<?php
	include_once("../../_init.php");
	include_once($GP -> INC_ADM_PATH."/head.php");	
	
	

	$cn_select = $C_Func -> makeSelect_Normal('dr_clinic', $GP -> CENTER_TYPE, $dr_clinic, '', '::선택::');		
	$cn_select1 = $C_Func -> makeSelect_Normal('dr_thesis', $GP -> CLINIC_TYPE2, $dr_thesis, '', '::선택::');		
	$cn_select2 = $C_Func -> makeSelect_Normal('dr_center', $GP -> CLINIC_TYPE, $dr_center, '', '::선택::');	
	$cn_select3 = $C_Func -> makeSelect_Normal('dr_position', $GP -> DOCTOR_POSITION, $dr_position, '', '::선택::');		

?>
<body>
<div class="Wrap_layer"><!--// 전체를 감싸는 Wrap -->
	<div class="boxContent_layer">
		<div class="boxContentHeader">
			<span class="boxTopNav"><strong>의료진 등록</strong></span>
		</div>
		<form name="base_form" id="base_form" method="POST" action="?" enctype="multipart/form-data">
		<input type="hidden" name="mode" id="mode" value="DOCTOR_REG" />
		<input type="hidden" name="dr_clinic" id="dr_clinic" value="A" />
		<div class="boxContentBody">			
			<div class="boxMemberInfoTable_layer">				
				<div class="layerTable">
					<table class="table table-bordered">
						<tbody>
                        	<tr>
								<th width="15%"><span>*</span>성명</th>
								<td width="85%">
									<input type="text" class="input_text" size="25" name="dr_name" id="dr_name" value="<?=$dr_name?>" />
								</td>
							</tr>	
                        	<!--tr>
								<th><span>*</span>소속과</th>
								<td>
                                	<?=$cn_select?>
								</td>
							</tr-->
                            <tr>
								<th><span>*</span>소속센터</th>
								<td>
									<input type="text" class="input_text" size="200" name="dr_center" id="dr_center" value="<?=$dr_center?>" />
								</td>
							</tr>						
							<tr>
								<th><span>*</span>직책</th>
								<td>
									<?=$cn_select3?>
								</td>
							</tr>
                            <tr>
								<th width="15%"><span>*</span>전문분야</th>
								<td width="85%">
									<input type="text" class="input_text" size="100" name="dr_treat" id="dr_treat"/>
								</td>
							</tr>	
                            <tr>
								<th><span>*</span>전문의여부</th>
								<td>
									<input type="radio" name="dr_thesis" value="Y"  />전문의 적용
									<input type="radio" name="dr_thesis" value="N" checked />표시안함
								</td>
							</tr>	
							<tr>
								<th><span>*</span>진료일정</th>
								<td>
									<table>
										<tr>
											<td></td>
											<td>월</td>
											<td>화</td>
											<td>수</td>
											<td>목</td>
											<td>금</td>
											<td>토</td>
										</tr>
										<tr>
											<td>오전</td>
											<td><?=$C_Func -> makeSelect_Normal('dr_m_sd1', $GP -> DOCTOR_SCH, $dr_m_arr[0], '', '::선택::');?></td>
											<td><?=$C_Func -> makeSelect_Normal('dr_m_sd2', $GP -> DOCTOR_SCH, $dr_m_arr[1], '', '::선택::');?></td>
											<td><?=$C_Func -> makeSelect_Normal('dr_m_sd3', $GP -> DOCTOR_SCH, $dr_m_arr[2], '', '::선택::');?></td>
											<td><?=$C_Func -> makeSelect_Normal('dr_m_sd4', $GP -> DOCTOR_SCH, $dr_m_arr[3], '', '::선택::');?></td>
											<td><?=$C_Func -> makeSelect_Normal('dr_m_sd5', $GP -> DOCTOR_SCH, $dr_m_arr[4], '', '::선택::');?></td>
											<td rowspan="2"><textarea type="text" class="input_text" size="30" name="dr_history6" id="dr_history6"  style="height:70px;"/></textarea></td>
										</tr>
										<tr>
											<td>오후</td>
											<td><?=$C_Func -> makeSelect_Normal('dr_a_sd1', $GP -> DOCTOR_SCH, $dr_a_arr[0], '', '::선택::');?></td>
											<td><?=$C_Func -> makeSelect_Normal('dr_a_sd2', $GP -> DOCTOR_SCH, $dr_a_arr[1], '', '::선택::');?></td>
											<td><?=$C_Func -> makeSelect_Normal('dr_a_sd3', $GP -> DOCTOR_SCH, $dr_a_arr[2], '', '::선택::');?></td>
											<td><?=$C_Func -> makeSelect_Normal('dr_a_sd4', $GP -> DOCTOR_SCH, $dr_a_arr[3], '', '::선택::');?></td>
											<td><?=$C_Func -> makeSelect_Normal('dr_a_sd5', $GP -> DOCTOR_SCH, $dr_a_arr[4], '', '::선택::');?></td>
										</tr>
									</table>
								</td>
							</tr>
                            <tr>
								<th><span>*</span>비고</th>
								<td>
									<input type="text" class="input_text" maxlength="20" name="dr_history3" id="dr_history3" size="100">
								</td>
							</tr>																						
							<tr>
								<th><span>*</span>대표이미지</th>
								<td>
									<input type="file" name="dr_face_img" id="dr_face_img" size="30">(500 X 750)
								</td>
							</tr>	
							<!--tr>
								<th><span>*</span>진료시간표 이미지</th>
								<td>
									<input type="file" name="dr_list_img" id="dr_list_img" size="30">
								</td>
							</tr -->

							<tr>
								<th><span>*</span>학력 및 경력</th>
								<td>
									<textarea name="dr_history" id="dr_history" style="width:98%; height:100px;  overflow:auto;" ></textarea>
								</td>
							</tr>
                            <tr>
								<th><span>*</span>학회 및 연수</th>
								<td>
									<textarea name="dr_history4" id="dr_history4" style="width:98%; height:100px; overflow:auto;" ></textarea>
								</td>
							</tr>
                   <!--         <tr>
								<th><span>*</span>논문여부</th>
								<td>
									<input type="radio" name="dr_choice" value="Y"  />논문
									<input type="radio" name="dr_choice" value="N"  />방송
								</td>
							</tr>	-->
                            <tr>
								<th><span>*</span>수상</th>
								<td>
									<textarea name="dr_history2" id="dr_history2" style="width:98%; height:100px; overflow:auto;" ></textarea>
								</td>
							</tr>
                            <tr>
								<th><span>*</span>스포츠활동</th>
								<td>
									<textarea name="dr_history5" id="dr_history5" style="width:98%; height:100px; overflow:auto;" ></textarea>
								</td>
							</tr>		
							<tr>
								<th><span>*</span>공개여부</th>
								<td>
									<input type="radio" name="dr_main_view" value="Y"  checked/>공개
									<input type="radio" name="dr_main_view" value="N"  />비공개
								</td>
							</tr>	
						</tbody>
					</table>
				</div>				
				<div class="btnWrap">
				<button id="img_submit" class="btnSearch ">등록</button>
				<button id="img_cancel" class="btnSearch " onClick="javascript:parent.modalclose();">취소</button>
				</div>
			</div>
		</div>
		</form>
	</div>
</div>
</body>
</html>
<script type="text/javascript" src="<?=$GP -> JS_PATH?>/jquery.alphanumeric.js"></script>
<script type="text/javascript" src="<?=$GP -> JS_PATH?>/jquery.validate.js"></script>
<script type="text/javascript" src="<?=$GP -> JS_PATH?>/jquery.base64.js"></script>
<script type="text/javascript">

	var cnt = 0;
	function historyplus(){
		var html = '<div style="margin-top:5px;" id="history'+cnt+'">'
			html += '<textarea name="dr_history2[]" value="" size="40"></textarea><input type="button" value="삭제" style="margin-left:5px" class="button-delete-file"></div>';
		cnt++;
		$("#attachFileDiv").append(html);
	}

	$(document).ready(function(){	
		
		$('#img_submit').click(function(){
				
				if($('#dr_name').val() == '') {
					alert('성명을 입력하세요');
					$('#dr_name').focus();
					return false;
				}
				
				
				
				if($('#dr_history').val() == '') {
					alert('대표약력을 입력하세요');
					$('#dr_history').focus();
					return false;
				}
				
				$('#base_form').attr('action','./proc/dt_proc.php');
				$('#base_form').submit();
				return false;							
		});
		
/*		
		$('#dr_clinic').change(function(){
		var clinic = $("#dr_clinic").val();
		$.ajax({
			type: "POST",
			url: "/admin/doctor/doctor_ajax.php",
			data: "clinic="+clinic,
			dataType: "text",
			beforeSend: function() {
				$('#ajax_load').html('<img src="/images/ajax-loader.gif">');
			},  			
			success: function(data) {
				$('#ajax_load').empty();
				$('#dr_thesis').empty();
				$('#dr_thesis').append(data);
			},
			error: function(xhr, status, error) { alert(error); }
		});			
	});
*/
	
		
		
	});
</script>
