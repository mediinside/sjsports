<script type="text/javascript" src="<?=$GP -> JS_SMART_PATH?>/HuskyEZCreator.js" charset="utf-8"></script>
<script type="text/javascript" src="<?=$GP -> JS_PATH?>/admin/jquery.base64.js"></script>
<form name="frm_Board" id="frm_Board" action="<?=$get_par;?>" method="post" enctype="multipart/form-data">
  <input type="hidden" id="jb_email" name="jb_email" value="<?=$_SESSION['suseremail']?>" />
  <input type="hidden" id="jb_name" name="jb_name" value="<?=$check_name?>" />
  <input type="hidden" class="chk" value="Y" id="jb_secret_check" name="jb_secret_check" />
	<div class="entry">
		<div class="panel">
			<h3 class="title">상담자 정보(선택사항)</h3>
			<p class="tit_des">개인정보를 작성해주시면 글에 대한 회신을 빠르게 받아 보실 수 있습니다.</p>
			<table>
				<tbody>
					<tr>
						<th scope="row">이름</th><td><input type="text" class="i-text" placeholder="공백없이 입력해주세요." id="jb_sms_name" name="jb_sms_name" value="" style="width:384px;"></td>
					</tr>
					<tr>
						<th scope="row">연락처</th>
						<td>

							<select name="jb_mobile1" id="jb_mobile1" title="휴대폰 앞자리 선택" class="i-select"><option value="">선택</option><option value="010">010</option><option value="011">011</option><option value="016">016</option><option value="017">017</option><option value="018">018</option><option value="019">019</option></select>											<span class="empty">-</span>
							<input type="text" class="i-text" maxlength="4" id="jb_mobile2" name="jb_mobile2" value="">
							<span class="empty">-</span>
							<input type="text" class="i-text" maxlength="4" id="jb_mobile3" name="jb_mobile3" value="">
						</td>
					</tr>
					
					<tr>
						<th scope="row">회신원함</th>
						<td>
							<label class="i-checkbox left" for="yes_agree">
								<input type="radio" name="chk_agree" id="yes_agree"/>
								<i class="bicon-check type"></i>
								<span class="visible">예</span>
							</label>
							<label class="i-checkbox left" for="no_agree">
								<input type="radio" name="chk_agree" id="no_agree"/>
								<i class="bicon-check type"></i>
								<span class="visible">아니요</span>
							</label>
						</td>
					</tr>
					
				</tbody>
			</table>
			<h3 class="title">문의글 작성</h3>
		</div>
	</div>
  <div class="board-write">
	<table>
      <caption>게시물 작성</caption>
        <colgroup>
            <col width="155px" />
            <col />
        </colgroup>
      <tbody>     	
        <tr>
          <th scope="row">제목</th>
           <td><input type="text" class="i-text" title="제목 입력" placeholder="제목을 입력해 주세요." autocomplete="off" id="jb_title" name="jb_title" /></td>
        </tr>
		 <? if($check_level >= 9){?>
        <tr>
          <th scope="row">노출여부</th>
          <td>
          	<select name="jb_show" id="jb_show" class="i-select">
              <option value="B" <? if($jb_show == "B") { echo "selected"; }?>>게시</option>
              <option value="A" <? if($jb_show == "A") { echo "selected"; }?>>비게시</option>              
            </select>
          </td>
        </tr>
        <? } ?>
       <tr>
          <th scope="row">첨부파일</th>
          <td class="files">
           <?php
						//첨부파일의 숫자는 $i의 범위로 조정하면 된다.
						for($i=0; $i<1; $i++) {
						?>
						<div  class="inputFile">
              <input type="text" class="i-text" placeholder="첨부파일" readonly />
              <label class="fileBtn">
                <input type="file" title="파일선택" name="jb_file[]" />
                <span class="btn">파일선택</span>
              </label>
            </div>
						<? } ?>
          </td>
        </tr>
        <tr>
          <th scope="row">본문</th>
          <td>
            <textarea name="jb_content" id="jb_content" cols="30" rows="10" class="i-textarea" placeholder="ex)
지난번 수술로 3층 병동에 입원했던 환자입니다.
꼼꼼한 설명으로 질환에 대한 이해가 됐고,
친절한 간호사분들과 직원분들 덕분에 빨리 회복했습니다.
특히 3병동 간호사님 너무 감사합니다."></textarea>
          </td>
        </tr>
         <?php
        //회원일 경우 비밀번호를 입력할 필요가 없다.
        if(empty($check_id)) {
        ?>
        <tr>
          <th scope="row">비밀번호</th>
          <td class="password"><input type="text" class="i-text" title="비밀번호 입력" placeholder="비밀번호를 입력해 주세요." id="jb_password" name="jb_password" />
          	<p>※ 분실시 글 조회가 불가능 합니다.</p>

          </td>
        </tr>
        <?php
        } else {
          $password_key=md5($check_id);	
          $tm=explode(" ",microtime());
          $jb_password=$password_key . $tm[1];
          echo ("<input type=\"hidden\" name=\"jb_password\" value=\"${jb_password}\">");
        }
        ?>     
        <? if($check_level < 9) {?>
            <tr>
              <th scope="row">자동입력방지</th>
              <td>
                <img src="<?=$GP -> IMG_PATH?>/zmSpamFree/zmSpamFree.php?zsfimg=<?php echo time();?>" id="zsfImg" alt="아래 새로고침을 클릭해 주세요." style="vertical-align:middle;" />
                <input type="text" class="i-text" title="자동입력방지 숫자 입력"  name="zsfCode" id="zsfCode" />
                <a href="#;" class="btn btn-small btnReplace" onclick="document.getElementById('zsfImg').src='<?=$GP -> IMG_PATH?>/zmSpamFree/zmSpamFree.php?re&zsfimg=' + new Date().getTime(); return false;"><span>새로고침</span></a>
              </td>
            </tr>
            <? } ?>
      </tbody>
    </table>
 </div>
  <div class="btn-group">
  	<div class="btn-rt">
        <a href="#;" id="img_submit" class="btn btn-normal"><span>등록</span></a>
        <a href="javascript:history.go(-1);" class="btn btn-cancel"><span>취소</span></a>
    </div>
  </div>
  <input type="hidden" name="jb_bruse_check" value="Y" checked>
  <input type="hidden" name="img_full_name" id="img_full_name" />
  <input type="hidden" name="upfolder" id="upfolder" value="jb_<?=$jb_code?>" />
</form>
<script type="text/javascript">
	fn.init = function(){
		fn.datePicker = $(".datepicker");
		if (fn.datePicker.val() == '') fn.datePicker.val(new Date().format('yyyy-MM-dd'));
		fn.datePicker.datepicker({
			monthNames: ['1','2','3','4','5','6','7','8','9','10','11','12'],
			monthNamesShort: ['1','2','3','4','5','6','7','8','9','10','11','12'],
			dayNamesMin: [ "sun", "mon", "tue", "wed", "thu", "fri", "sat" ],
			closeText: '닫기',
			prevText: '이전달',
			nextText: '다음달',
			currentText: '오늘',
			dateFormat: 'yy-mm-dd',
			showMonthAfterYear: true,
			changeMonth: true,
			changeYear: true,
			yearRange: "-120:+0",
			onDraw:function(){
				$('.ui-datepicker-year').after('<span>년</span>');
				$('.ui-datepicker-month').after('<span>월</span>');
			}
		});
	};
	
	$('.fileBtn input').bind('change',function(){
		var val = $(this).val();
		$(this).parent().prev('.i-text').val(val);
	});
	

	$('#img_submit').click(function(){
		


		if($('#jb_title').val() == '')	{
			alert('제목을 입력하세요');
			$('#jb_title').focus();
			return false;
		}	
			
		
/*		if($('#jb_name').val() == '')	{
			alert('이름을 입력하세요');
			$('#jb_name').focus();
			return false;
		}
*/		
		if($('#jb_password').val() == '')	{
			alert('비밀번호를 입력하세요');
			$('#jb_password').focus();
			return false;
		}
		
/*		if($('#jb_email').val() == '' || !CheckEmail($('#jb_email').val()))	{
			alert('이메일을 정확히 입력하세요');
			$('#jb_email').focus();
			return false;
		}
*/	
		
			
		<? if($check_level < 9) {?>	
			if($('#zsfCode').val() == '')	{
				alert('자동방지 입력키를 입력하세요');
				$('#zsfCode').focus();
				return false;
			}		
		<? } ?>
		

		$('#frm_Board').submit();
		return false;
		
	});
	

	function CheckEmail(str)
	{
		 var filter=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i
		 if (filter.test(str)) { return true; }
		 else { return false; }
	}

	function insertIMG(filename){
		var tname = document.getElementById('img_full_name').value;

		if(tname != "")
		{
			document.getElementById('img_full_name').value = tname + "," + filename;
		}
		else
		{
			document.getElementById('img_full_name').value = filename;
		}
	}
</script>
