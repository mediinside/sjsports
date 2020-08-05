<?php
	include_once("../../_init.php");
	include_once($GP -> INC_ADM_PATH."/head.php");	
	include_once($GP -> INC_ADM_PATH."inc.adm_auth.php");
?>

<body>
<div class="Wrap_layer"><!--// 전체를 감싸는 Wrap -->
	<div class="boxContent_layer">
		<div class="boxContentHeader">
			<span class="boxTopNav"><strong>회원정보 등록</strong></span>
		</div>
		<form name="frmJoin" id="frmJoin" method="POST" action="?" enctype="multipart/form-data">
		<input type="hidden" name="mode" id="mode" value="MEM_REG" />
		<div class="boxContentBody">
			<div class="boxMemberInfoTable_layer">
				<div class="layerTable">
				<table class="table table-bordered">
					<tbody>
                    	<tr>
							<th width="15%"><span>*</span>회원 아이디</th>
							<td width="85%">
								<input type="text" class="input_text" size="25" name="mb_id" id="mb_id" value="<?=$mb_id?>" />
							</td>
						</tr>
                        <tr>
							<th width="15%"><span>*</span>회원 비밀번호</th>
							<td width="85%">
								<input type="text" class="input_text" size="25" name="mb_password" id="mb_password" value="<?=$mb_password?>" />
							</td>
						</tr>
						<tr>
							<th width="15%"><span>*</span>회원명</th>
							<td width="85%">
								<input type="text" class="input_text" size="25" name="mb_name" id="mb_name" value="<?=$mb_name?>" />
							</td>
						</tr>
						<tr>
							<th><span>*</span>이메일</th>
							<td>
								<input type="text" class="input_text" size="25" name="mb_email" id="mb_email" value="<?=$mb_email?>" />
							</td>
						</tr>
                          <tr>
							<th><span>*</span>EMAIL 수신</th>
							<td>
								<input type="radio" name="mb_email_flag" value="Y" <? if($mb_email_flag == 'Y'){ echo "checked"; } ?> />동의
								<input type="radio" name="mb_email_flag" value="N" <? if($mb_email_flag == 'N'){ echo "checked"; } ?> />거부
							</td>
						</tr>
                        <tr>
							<th><span>*</span>핸드폰</th>
							<td>
								<input type="text" class="input_text" size="25" name="mb_mobile" id="mb_mobile" value="<?=$mb_mobile?>" />
							</td>
						</tr>
                          <tr>
							<th><span>*</span>SMS 수신</th>
							<td>
								<input type="radio" name="mb_sms" value="Y" <? if($mb_sms == 'Y'){ echo "checked"; } ?> />동의
								<input type="radio" name="mb_sms" value="N" <? if($mb_sms == 'N'){ echo "checked"; } ?> />거부
							</td>
						</tr>
					</tbody>
				</table>
				</div>
				<div class="btnWrap">
				<button id="img_submit" class="btnSearch ">수정</button>
				<button id="img_cancel" class="btnSearch ">취소</button>
				</div>
			</div>
		</div>
		</form>
	</div>
</div>
</body>
</html>
<script src="/admin/js/jquery.alphanumeric.js" type="text/javascript"></script>
<script type="text/javascript" src="/admin/js/jquery.validate.js"></script>
<script type="text/javascript" src="/js/jquery.alphanumeric.js"></script>
<script type="text/javascript" src="/js/mem/mem_join.js"></script>
<script type="text/javascript">

	$(document).ready(function(){	

		$('#img_submit').click(function(){					
			$('#frmJoin').submit();
			return false;
		});
		
		$('#img_cancel').click(function(){
				parent.modalclose();				
		});
		
		
	});
</script>
