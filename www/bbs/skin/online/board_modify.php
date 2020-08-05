<script type="text/javascript" src="<?=$GP -> JS_SMART_PATH?>/HuskyEZCreator.js" charset="utf-8"></script>
<script type="text/javascript" src="<?=$GP -> JS_PATH?>/admin/jquery.base64.js"></script>
<form name="frm_Board" id="frm_Board" action="<?=$get_par?>" method="post" enctype="multipart/form-data">
  <input type="hidden" name="jb_password" value="<?=$input_passd;?>">
  <input type="hidden" class="chk" value="Y" id="jb_secret_check" name="jb_secret_check" />
  	<input type="hidden" id="jb_email" name="jb_email" value="<?=$_SESSION['suseremail']?>" />
     <input type="hidden" id="test_idx" name="test_idx" value="<?=$test_idx?>" />
<? 
$gubun_select = $C_Func -> makeSelect_Normal('jb_type', $GP -> ONLINE_TYPE, $jb_type, 'class="i-select"', '선택');
$gubun_select2 = $C_Func -> makeSelect_Normal('jb_etc1', $GP -> GENDER_TYPE, $jb_etc1, 'class="i-select"', '선택');
?>
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
          <td><input type="text" class="i-text" title="제목 입력" placeholder="제목을 입력해 주세요." id="jb_title" name="jb_title" value="<?=$jb_title;?>" /></td>
        </tr>
        <tr>
          <th scope="row">분야</th>
           <td><?=$gubun_select?></td>
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
          <th scope="row">작성자</th>
           <td><input type="text" class="i-text" title="이름 입력" placeholder="이름을 입력해 주세요." autocomplete="off" id="jb_name" name="jb_name" value="<?=$jb_name?>"/></td>
        </tr>
        <tr>
          <th scope="row">성별</th>
           <td><?=$gubun_select2?></td>
        </tr>
        <tr>
          <th scope="row">나이</th>
           <td><input type="text" class="i-text" title="나이 입력" placeholder="나이를 숫자만 입력해 주세요." autocomplete="off" id="jb_etc3" name="jb_etc3" value="<?=$jb_etc3?>"/></td>
        </tr>                                                        
         <tr>
          <th scope="row">첨부파일</th>
          <td> 
						<?php
            //첨부파일의 숫자는 $i의 범위로 조정하면 된다.
            for($i=0; $i<1; $i++) {
            ?>						
                 <div class="inputFile">
                  <input type="text" class="i-text" placeholder="첨부파일" readonly />
                  <label class="fileBtn">
                    <input type="file" title="파일선택" name="jb_file[]" />
                    <span class="btn">파일선택</span>
                  </label>
                </div>
                <?php
                  if($ex_jb_file_name[$i]){
                      $code_file = $GP->UP_IMG_SMARTEDITOR. "/jb_${jb_code}/${ex_jb_file_code[$i]}";							
                      echo "<a href=\"/bbs/download.php?downview=1&file=" . $code_file . "&name=" . $ex_jb_file_name[$i] . " \">$ex_jb_file_name[$i]</a>";
                      echo " <input type=\"checkbox\" name=\"del_file[${i}]\" value=\"Y\"> X";				
                  }			
                ?>					
            <?
            } 
            ?>
          </td>
        </tr>     
        <tr>
          <th scope="row">본문</th>
          <td>
            <textarea name="jb_content" id="jb_content" cols="30" rows="10" class="i-textarea"><?=$jb_content?></textarea>
          </td>
        </tr>      
        <? if($check_level < 9) {?>
        <tr>
          <th scope="row">자동입력방지</th>
          <td>
            <img src="<?=$GP -> IMG_PATH?>/zmSpamFree/zmSpamFree.php?zsfimg=<?php echo time();?>" id="zsfImg" alt="아래 새로고침을 클릭해 주세요." style="vertical-align:middle;" />
            <input type="text" class="i-text" title="자동입력방지 숫자 입력" name="zsfCode" id="zsfCode" />
            <a href="#;" class="btn btn-small btnReplace" onclick="document.getElementById('zsfImg').src='<?=$GP -> IMG_PATH?>/zmSpamFree/zmSpamFree.php?re&zsfimg=' + new Date().getTime(); return false;"><span>새로고침</span></a>
          </td>
        </tr>
        <? } ?>
      </tbody>
    </table>
  </div>
  <div class="btn-group">
        <div class="btn-rt">
             <a href="#;" id="img_submit" class="btn btn-normal"><span>수정</span></a>
            <a href="javascript:history.go(-1);" class="btn btn-cancel"><span>취소</span></a>
        </div>
 	</div>
  <input type="hidden" name="img_full_name" id="img_full_name" value="<?=$jb_img_code;?>" />
  <input type="hidden" name="upfolder" id="upfolder" value="jb_<?=$jb_code?>" />
</form>
 </div>

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
