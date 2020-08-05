<script type="text/javascript" src="<?=$GP -> JS_SMART_PATH?>/HuskyEZCreator.js" charset="utf-8"></script>
<script type="text/javascript" src="<?=$GP -> JS_PATH?>/admin/jquery.base64.js"></script>
<form name="frm_Board" id="frm_Board" action="<?=$get_par;?>" method="post" enctype="multipart/form-data">
  <input type="hidden" id="jb_email" name="jb_email" value="<?=$_SESSION['suseremail']?>" />
  <input type="hidden" class="chk" value="Y" id="jb_secret_check" name="jb_secret_check" />
 <? 
 	$gubun_select = $C_Func -> makeSelect_Normal('jb_type', $GP -> ONLINE_TYPE, $jb_type, 'title="분야" class="i-select"' , '선택','');
  $gubun_select2 = $C_Func -> makeSelect_Normal('jb_etc1', $GP -> GENDER_TYPE, $jb_etc1, 'title="성별" class="i-select"' , '선택','');
 ?>
 <div class="agree-privacy">
    <h3 class="title">개인정보 처리방침</h3>
    <div class="contain">
        <div class="publish">
			<div class="public-panel">
				<? include_once "../member/publish-privacy.txt";?>
            </div>
       </div>
       <div class="selection">
            <label class="ui-radio left">
                <input type="radio" class="none" value="Y" name="agree" />
                <i class="icon"></i>
                <span class="visible">동의</span>
            </label>
            <label class="ui-radio left">
                <input type="radio" class="none" value="N" name="agree" />
                <i class="icon"></i>
                <span class="visible">동의안함</span>
            </label>  
        </div>
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
        <tr>
          <th scope="row">분야</th>
           <td><?=$gubun_select?></td>
        </tr>
         <tr>
          <th scope="row">작성자</th>
           <td><input type="text" class="i-text" title="이름 입력" placeholder="이름을 입력해 주세요." autocomplete="off" id="jb_name" name="jb_name" value="<?=$check_name?>"/></td>
        </tr>
        <tr>
          <th scope="row">성별</th>
           <td><?=$gubun_select2?></td>
        </tr>
        <tr>
          <th scope="row">나이</th>
           <td><input type="text" class="i-text" title="나이 입력" placeholder="나이를 숫자만 입력해 주세요. " autocomplete="off" id="jb_etc3" name="jb_etc3" value=""/></td>
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
            <div  class="inputFile">
              <input type="text" class="i-text" placeholder="첨부파일" readonly />
              <label class="fileBtn">
                <input type="file" title="파일선택" name="jb_file[]" />
                <span class="btn">파일선택</span>
              </label>
            </div>
           <?php
						//첨부파일의 숫자는 $i의 범위로 조정하면 된다.
						for($i=0; $i<1; $i++) {
						?>
						
						<? } ?>
          </td>
        </tr>
        <tr>
          <th scope="row">본문</th>
          <td>
            <textarea name="jb_content" id="jb_content" cols="30" rows="10" class="i-textarea"></textarea>
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
        <a href="#;" id="img_submit" class="btn btn-normal" onclick="_LA.EVT('4212')"><span>등록</span></a>
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
		
		if($("input:radio[name='agree']:radio[value='Y']").is(":checked") == false) {
			alert('개인정보 처리방침에 동의하셔야 합니다.');
			$("input:radio[name='agree']").focus();
			return false;
		}

		if($('#jb_title').val() == '')	{
			alert('제목을 입력하세요');
			$('#jb_title').focus();
			return false;
		}	
		
		
		if($('#jb_type').val() == '')	{
			alert('분야를 선택하세요');
			$('#jb_type').focus();
			return false;
		}

    if($('#jb_etc1').val() == '') {
      alert('성별을 선택하세요');
      $('#jb_etc1').focus();
      return false;
    }

    if($('#jb_etc3').val() == '') {
      alert('나이를 입력하세요.');
      $('#jb_etc3').focus();
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
