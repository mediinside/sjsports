
	<form name="frm_pass" id="frm_pass" action="<?=$get_par;?>" method="post">
		<div class="board-write">
			<table>
				<caption>게시물 작성</caption>
                <colgroup>
                    <col width="155px">
                    <col>
                </colgroup>
				<tbody>
                	<tr>
                        <th scope="row">비밀번호</th>
                        <td class="password">
                            <input type="password" name="input_passd" id="input_passd" class="i-text">
                            <p>※ 상담글 등록 시 입력하신 비밀번호를 입력해 주세요.</p>
                        </td>
                    </tr>
				</tbody>
			</table>
		</div>
		<div class="btn-group">
        	<div class="btn-rt">
				<a href="javascript:history.go(-1);" class="btn btn-cancel"><span>취소</span></a>
            	<button id="pass_submit" class="btn btn-normal"><span>확인</span></button>
            </div>
		</div>
	</form>



<script type="text/javascript">
	
	$(document).ready(function(){
		
		$('#pass_submit').click(function(){
			
			if($('#input_passd').val() == '') {
				alert("비밀번호를 입력하세요");
				$('#input_passd').focus();
				return false;
			}
			
			$('#frm_pass').submit();
			return false;
		});		
	});
	
</script>