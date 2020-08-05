<?php
	include_once("../../_init.php");
	include_once($GP -> INC_ADM_PATH."/head.php");	
	
	include_once($GP->CLS."class.nonpay.php");
	$C_Nonpay 	= new Nonpay;
	
	
	$cate1_select = $C_Func -> makeSelect_Normal('cate1', $GP -> NONPAY_CATE_TYPE1, $cate1, '', '::선택::');
	
	$cate2_select = $C_Func -> makeSelect_Normal('cate2', $GP -> NONPAY_CATE_TYPE1_1, $cate2, '', '::선택::');
	
	$cate3_select = $C_Func -> makeSelect_Normal('cate2', $GP -> NONPAY_CATE_TYPE1_2, $cate2, '', '::선택::');
	$cate4_select = $C_Func -> makeSelect_Normal('cate2', $GP -> NONPAY_CATE_TYPE1_3, $cate2, '', '::선택::');
	
?>
<body>
<div class="Wrap_layer"><!--// 전체를 감싸는 Wrap -->
	<div class="boxContent_layer">
		<div class="boxContentHeader">
			<span class="boxTopNav"><strong>비급여 항목 등록</strong></span>
		</div>
		<form name="base_form" id="base_form" method="POST" action="?" enctype="multipart/form-data">
		<input type="hidden" name="mode" id="mode" value="NONPAY_REG" />
		<div class="boxContentBody">			
			<div class="boxMemberInfoTable_layer">
				<div class="layerTable">
					<table class="table table-bordered">
						<tbody>
							<tr>
								<th width="20%"><span>*</span>카테고리</th>
								<td colspan="3">
									<?=$cate1_select?>
									<select name="cate2" id="cate2" style="width:190px;">
                                       <option value=''>선택하세요</option>
                                     </select>
								</td>
							</tr>
							<tr>	
								<th><span>*</span>분류</th>
								<td colspan="3"><input type="text" class="input_text" size="40" name="np_bunru" id="np_bunru" value="<?=$np_bunru?>" /></td>
							</tr>
							<tr>	
								<th><span>*</span>명칭</th>
								<td><input type="text" class="input_text" size="40" name="np_item" id="np_item" value="<?=$np_item?>" /></td>							
								<th><span>*</span>코드</th>
								<td><input type="text" class="input_text" size="15" name="np_code" id="np_code" value="<?=$np_code?>" /></td>
							</tr>
							<tr>	
								<th><span>*</span>구분</th>
								<td><input type="text" class="input_text" size="15" name="np_gubun" id="np_gubun" value="<?=$np_gubun?>" /></td>
								<th><span>*</span>비용(부과비율)</th>
								<td><input type="text" class="input_text" size="25" name="np_price" id="np_price" value="<?=$np_price?>" /></td>
							</tr>
							<tr>	
								<th><span>*</span>최저비용(최저부과비율)</th>
								<td><input type="text" class="input_text" size="25" name="np_row_price" id="np_row_price" value="<?=$np_row_price?>" /></td>							
								<th><span>*</span>최고비용(최고부과비율)</th>
								<td><input type="text" class="input_text" size="25" name="np_high_price" id="np_high_price" value="<?=$np_high_price?>" /></td>
							</tr>
							<tr>
								<th><span>*</span>치료재료대 포함여부</th>
								<td><input type="text" class="input_text" size="25" name="np_ck1" id="np_ck1" value="<?=$np_ck1?>" /></td>
								<th><span>*</span>약제비 포함여부</th>
								<td><input type="text" class="input_text" size="25" name="np_ck2" id="np_ck2" value="<?=$np_ck2?>" /></td>							
							</tr>
							<tr>
								<th><span>*</span>특이사항(선택진료료 산정기준)</th>
								<td colspan="3"><input type="text" class="input_text" size="100" name="np_gita" id="np_gita" value="<?=$np_gita?>" /></td>
							</tr>								
						</tbody>
					</table>
				</div>
				<div class="btnWrap">
					<button id="img_submit" class="btnSearch ">등록</button>
					<button id="img_cancel" class="btnSearch ">취소</button>
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

	$(document).ready(function(){	

														 
//		$('#np_price').numeric();														 
		
		$('#img_submit').click(function(){					
			$('#base_form').submit();
			return false;
		});		
		
		$('#img_cancel').click(function(){					
			parent.modalclose();
		});
			
		$('#cate1').change(function(){
		var cate1 = $("#cate1").val();
		$.ajax({
			type: "POST",
			url: "/bbs/action/nonpay_ajax.php",
			data: "cate1="+cate1,
			dataType: "text",
			beforeSend: function() {
				$('#ajax_load').html('<img src="/images/ajax-loader.gif">');
			},  			
			success: function(data) {
				$('#ajax_load').empty();
				$('#cate2').empty();
				$('#cate2').append(data);
			},
			error: function(xhr, status, error) { alert(error); }
		});			
	});

	
	
		
		$('#base_form').validate({
			rules: {	
				cate1 : { required: true },
				np_item: { required: true }
			},
			messages: {			
				cate1: { required: "분류를 선택하세요"},
				np_item: { required: "비급여 항목을 입력하세요"}
			},
			errorPlacement: function(error, element) {
				var er = element.attr("name");
				error.insertAfter(element);
			},
			submitHandler: function(frm) {
			if (!confirm("등록하시겠습니까?")) return false;                
				frm.action = './proc/nonpay_proc.php';
				frm.submit(); //통과시 전송
				return true;
			},

			success: function(element) {
			//
			}
		
		});
		
	});
</script>