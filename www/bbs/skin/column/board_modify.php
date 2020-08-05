<script type="text/javascript" src="<?=$GP -> JS_SMART_PATH?>/HuskyEZCreator.js" charset="utf-8"></script>
<script type="text/javascript" src="<?=$GP -> JS_PATH?>/admin/jquery.base64.js"></script>
<form name="frm_Board" id="frm_Board" action="<?=$get_par?>" method="post" enctype="multipart/form-data">
  <input type="hidden" name="jb_password" value="<?=$input_passd;?>">
    <input type="hidden" id="jb_name" name="jb_name" value="<?=$check_name?>" />
  	<input type="hidden" id="jb_email" name="jb_email" value="<?=$_SESSION['suseremail']?>" />
     <input type="hidden" id="before_front_file" name="before_front_file" value="<?=$jb_front_image?>" />
     <input type="hidden" id="test_idx" name="test_idx" value="<?=$test_idx?>" />
 <div class="board-write">
   <table>
      <caption>게시물 작성</caption>
        <colgroup>
            <col width="155px" />
            <col />
        </colgroup>
      <tbody>
      <tr>
          <th scope="row">작성일자</th>
          <td><input type="text" class="i-text datepicker" title="작성일자 입력" placeholder="작성일자를 입력해 주세요."id="jb_etc2" name="jb_etc2" value="<?=$jb_etc2?>" /></td>
        </tr>
       	<tr>
          <th scope="row">의료진</th>
           <td><select id="jb_type" name="jb_type" class="i-select">
                    <option value="">선택</option>
                </select>
           </td>
        </tr>      
        <tr>
          <th scope="row">제목</th>
          <td><input type="text" class="i-text" title="제목 입력" placeholder="제목을 입력해 주세요." id="jb_title" name="jb_title" value="<?=$jb_title;?>" /></td>
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
        <!--tr>
          <th scope="row">발표일자</th>
          <td>
          	<input type="text" class="i_text full" title="발표일자 입력" placeholder="발표일자을 입력해 주세요." id="jb_etc2" name="jb_etc2" />
          </td>
        </tr-->        
        <!--tr>
          <th scope="row">작성자</th>
          <td><input type="text" class="i_text full" title="작성자 입력" placeholder="작성자를 입력해 주세요."id="jb_name" name="jb_name" value="<?=$jb_name?>" /></td>
        </tr>
        <tr>
          <th scope="row">이메일</th>
          <td><input type="text" class="i_text full" title="이메일 입력" placeholder="이메일을 입력해 주세요." id="jb_email" name="jb_email" value="<?=$jb_email?>" /></td>
        </tr-->  
        <tr>
          <th scope="row">공개여부</th>
          <td>
            <label><input type="checkbox" class="chk" value="Y" id="jb_secret_check" name="jb_secret_check" <?php if($jb_secret_check == "Y") echo "checked";?> /> 비밀글</label>   
						<?
            //공지는 관리자만 할 수 있다.
            if(isset($check_id) && $check_level >= 9) {
              if($jb_order=="50")
                $notice_checked=" checked";
              else
                $notice_checked="";											
              echo "<label class='noti'><input type=\"checkbox\" name=\"jb_notice_check\" value=\"Y\" class='chk' ${notice_checked}>공지</label>";
            }
            ?>	
          </td>
        </tr>
        <tr>
          <th scope="row">대표이미지</th>
          <td class="files">
                <div class="inputFile">
				 <input type="text" class="i-text" placeholder="첨부파일 (351 X 212)" readonly />
                    <label class="fileBtn">
                        <input type="file" title="파일선택" name="jb_front_image" id="jb_front_image" />
                       <span class="btn">파일선택</span>
                     </label>
                </div>            
        <?
            if($jb_front_image != "") {
                echo  $jb_front_image;
                echo "<label> <input type=\"checkbox\" name=\"del_file_front\" value=\"Y\"> X </label>";			
            } 
        ?>
        	<p class="guide">(351 X 212)</p>
          </td>
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
            <textarea name="jb_content" id="jb_content" style="display:none"></textarea>
            <textarea name="ir1" id="ir1" style="width:100%; height:300px; min-width:280px; display:none;"><?=$jb_content;?></textarea>
          </td>
        </tr>      
        <? if($check_level < 9) {?>
        <tr>
          <th scope="row">자동입력방지</th>
          <td>
            <strong class="mobTh">자동입력방지</strong>
            <img src="<?=$GP -> IMG_PATH?>/zmSpamFree/zmSpamFree.php?zsfimg=<?php echo time();?>" id="zsfImg" alt="아래 새로고침을 클릭해 주세요." style="vertical-align:middle;" />
            <input type="text" class="i-text" title="자동입력방지 숫자 입력" style="width:60px;" name="zsfCode" id="zsfCode" />
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
<script type="text/javascript">
	$(document).ready(function(){	
		var jb_type = $('#jb_type option:selected').val();
		
		$.ajax({
			type: "POST",
			url: "/bbs/action/doctor_ajax.php",
			data: "jb_type=<?=$jb_type?>",
			dataType: "text",
			success: function(data) {
			//	alert(data);
				$('#jb_type').empty();
				$('#jb_type').append('<option value="">선택</option>');
				$('#jb_type').append(data);					
			},
			error: function(xhr, status, error) { alert(error); }
		});
		
		$('#jb_type').click(function(){
		 var jb_type = $('#jb_type').val();
		$.ajax({
			type: "POST",
			url: "/bbs/action/doctor_ajax.php",
			data: "jb_type=" + jb_type,
			dataType: "text",
			success: function(data) {
			//	alert("val set="+data);
				$('#jb_type'). empty();
				$('#jb_type'). append('<option value=""> 선택</option>');
				$('#jb_type'). append(data);
			},
			error: function(xhr, status, error) { alert(error); }
		});
	});
});
	
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
	
	var oEditors = [];
	nhn.husky.EZCreator.createInIFrame({
		oAppRef: oEditors,
		elPlaceHolder: "ir1",
		sSkinURI: "/bbs/se2/SmartEditor2Skin.html",
		htParams : {
			bUseToolbar : true,				// 툴바 사용 여부 (true:사용/ false:사용하지 않음)
			bUseVerticalResizer : true,		// 입력창 크기 조절바 사용 여부 (true:사용/ false:사용하지 않음)
			bUseModeChanger : true,			// 모드 탭(Editor | HTML | TEXT) 사용 여부 (true:사용/ false:사용하지 않음)
			bSkipXssFilter : true, // iframe, embed 보안 무시
			fOnBeforeUnload : function(){
				//alert("완료!");
			}
		}, //boolean
		fOnAppLoad : function(){
			//예제 코드
			//oEditors.getById["ir1"].exec("PASTE_HTML", ["로딩이 완료된 후에 본문에 삽입되는 text입니다."]);
		},
		fCreator: "createSEditor2"
	});
	
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
		
		oEditors.getById["ir1"].exec("UPDATE_CONTENTS_FIELD", []);
	
		var con	= $('#ir1').val();
		$('#jb_content').val(con);		

		if($('#jb_content').val() == '')
		{
			alert('내용을 입력하세요');
			return false;
		}	
		var t = $.base64Encode($('#ir1').val());		
		$('#jb_content').val(t);

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
