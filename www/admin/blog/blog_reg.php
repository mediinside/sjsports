<?php
	include_once("../../_init.php");
	include_once($GP -> INC_ADM_PATH."/head.php");	
?>
<body>
<div class="Wrap_layer"><!--// 전체를 감싸는 Wrap -->
	<div class="boxContent_layer">
		<div class="boxContentHeader">
			<span class="boxTopNav"><strong>블로그 등록</strong></span>
		</div>
		<form name="base_form" id="base_form" method="POST" action="?" enctype="multipart/form-data">
		<input type="hidden" name="mode" id="mode" value="BLOG_REG" /> 
		<div class="boxContentBody">			
			<div class="boxMemberInfoTable_layer">				
				<div class="layerTable">
					<table class="table table-bordered">
						<tbody>	
                        	<tr>
								<th><span>*</span>작성일</th>
								<td>
									<input type="text" class="input_text datepicker" size="70" name="tb_date" id="tb_date" />
								</td>
							</tr>
                        	<tr>
								<th><span>*</span>제목</th>
								<td>
									<input type="text" class="input_text" size="70" name="tb_title" id="tb_title" />
								</td>
							</tr>
							<tr>
								<th><span>*</span>링크</th>
								<td>
									<input type="text" class="input_text" size="70" name="tb_link" id="tb_link" />
								</td>
							</tr>
                            <tr>
								<th><span>*</span>이미지</th>
								<td>
									<input type="file" name="tb_img" id="tb_img" size="30" class="input_text">(293*187)
								</td>
							</tr>
							<tr>
								<th><span>*</span>내용</th>
								<td>
									<textarea name="tb_content" id="tb_content" style="width:98%; height:100px;  overflow:auto;" ></textarea>
								</td>
							</tr>
                            <tr>
								<th><span>*</span>노출여부</th>
								<td>
									<label>
										<input type="radio" name="tb_show" id="tb_show" value="Y" checked /> 노출
									</label>
									<label>
										<input type="radio" name="tb_show" id="tb_show" value="N"  /> 비노출
									</label>
								</td>
							</tr>	
						</tbody>
					</table>
				</div>				
				<div class="btnWrap">
					<span class="btnRight">
						<button id="img_submit" class="btnSearch ">등록</button>
						<button id="img_cancel" class="btnSearch ">취소</button>
					</span>
				</div>
			</div>
		</div>
		</form>
	</div>
</div>
</body>
</html>
<script type="text/javascript">

	$(document).ready(function(){	
														 
		$('#img_cancel').click(function(){
				parent.modalclose();				
		});	
		
		

		
		$('#img_submit').click(function(){			
						
			
			$('#base_form').attr('action','./proc/blog_proc.php');
			$('#base_form').submit();
			return false;
		});					
	
	});
</script>
<script type="text/javascript">
	$(function() {
		callDatePick('tb_date');
	});

	function callDatePick (id) {	
			
		var dates = $( "#" + id ).datepicker({
			prevText: '이전 달',
			nextText: '다음 달',
			monthNames: ['1월','2월','3월','4월','5월','6월','7월','8월','9월','10월','11월','12월'],
			monthNamesShort: ['1월','2월','3월','4월','5월','6월','7월','8월','9월','10월','11월','12월'],
			dayNames: ['일','월','화','수','목','금','토'],
			dayNamesShort: ['일','월','화','수','목','금','토'],
			dayNamesMin: ['일','월','화','수','목','금','토'],
			dateFormat: 'yy-mm-dd',
			showMonthAfterYear: true,
			yearSuffix: '년'	  
		});

			var today = new Date();
			var dd = today.getDate();
			var mm = today.getMonth()+1;
			var yyyy = today.getFullYear();

			if(dd<10) {
				dd='0'+dd
			} 

			if(mm<10) {
				mm='0'+mm
			} 

			today = yyyy+'-'+mm+'-'+dd

		if($('#'+id).val() == ''){
			$('#'+id).val(today);
		}

	}
</script>