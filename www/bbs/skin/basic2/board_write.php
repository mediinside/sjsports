<script type="text/javascript" src="<?=$GP -> JS_SMART_PATH?>/HuskyEZCreator.js" charset="utf-8"></script>
<script type="text/javascript" src="<?=$GP -> JS_PATH?>/admin/jquery.base64.js"></script>
<form name="frm_Board" id="frm_Board" action="<?=$get_par;?>" method="post" enctype="multipart/form-data">
  <input type="hidden" id="jb_name" name="jb_name" value="<?=$check_name?>" />
  <input type="hidden" id="jb_email" name="jb_email" value="<?=$_SESSION['suseremail']?>" />
<div  class="board-write">
  <table>
        <caption>공지사항 내용 작성</caption>
        <colgroup>
            <col width="155px">
            <col>
        </colgroup>
        <tbody>
        <tr>
        <tr>
          <th scope="row">제목</th>
          <td><input type="text" class="i-text" title="제목 입력" placeholder="제목을 입력해 주세요." autocomplete="off" id="jb_title" name="jb_title" /></td>
        </tr>
        <tr>
          <th scope="row">작성일자</th>
          <td><input type="text" class="i-text middle datepicker" title="작성일자 입력" placeholder="작성일자를 입력해 주세요."id="jb_etc2" name="jb_etc2" /></td>
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
        <tr>
          <th scope="row">페이지 URL</th>
          <td>
          	<input type="text" class="i_text" title="페이지 URL" placeholder="페이지 URL을 입력해 주세요." id="jb_etc3" name="jb_etc3" />
          </td>
        </tr>
        <? } ?>
   
        <!--tr>
          <th scope="row">작성자</th>
          <td><input type="text" class="txt w100" title="작성자 입력" placeholder="작성자를 입력해 주세요."id="jb_name" name="jb_name" value="<?=$check_name?>" /></td>
        </tr>
        <tr>
          <th scope="row">이메일</th>
          <td><input type="text" class="txt w100" title="이메일 입력" placeholder="이메일을 입력해 주세요." id="jb_email" name="jb_email" value="<?=$_SESSION['suseremail']?>" /></td>
        </tr-->
        <?php
        //회원일 경우 비밀번호를 입력할 필요가 없다.
        if(empty($check_id)) {
        ?>
        <tr>
          <th scope="row">비밀번호</th>
          <td><input type="text" class="txt w100" title="비밀번호 입력" placeholder="비밀번호를 입력해 주세요." id="jb_password" name="jb_password" /></td>
        </tr>
        <?php
        } else {
          $password_key=md5($check_id);	
          $tm=explode(" ",microtime());
          $jb_password=$password_key . $tm[1];
          echo ("<input type=\"hidden\" name=\"jb_password\" value=\"${jb_password}\">");
        }
        ?>
       
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
            <textarea name="jb_content" id="jb_content" style="display:none"></textarea>
            <textarea name="ir1" id="ir1" style="width:100%; height:300px; min-width:280px; display:none;"></textarea>
          </td>
        </tr>      
         <? if($check_level < 9) {?>
            <tr>
              <th scope="row">자동입력방지</th>
              <td>
                <strong class="mobTh">자동입력방지</strong>
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

/*	var oEditors = [];
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
	*/
  var oEditors = [];

  nhn.husky.EZCreator.createInIFrame({
            oAppRef: oEditors,
            elPlaceHolder: "ir1",
            sSkinURI: "/bbs/se2/SmartEditor2Skin.html",
            htParams : {
              bUseToolbar : true,       // 툴바 사용 여부 (true:사용/ false:사용하지 않음)
              bUseVerticalResizer : true,   // 입력창 크기 조절바 사용 여부 (true:사용/ false:사용하지 않음)
              bUseModeChanger : true,     // 모드 탭(Editor | HTML | TEXT) 사용 여부 (true:사용/ false:사용하지 않음)
			  bSkipXssFilter : true, // iframe, embed 보안 무시
              fOnBeforeUnload : function(){
                //alert("완료!");
              }
            }, //boolean
            fCreator: "createSEditor2"
  }); 	
	$('.fileBtn input').bind('change',function(){
		var val = $(this).val();
		$(this).parent().prev('.i-text').val(val);
	});
	

	$('#img_submit').click(function(){
		
		if($('#jb_etc2').val() == '')	{
			alert('작성일을 선택하세요');
			$('#jb_etc2').focus();
			return false;
		}
		
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
		oEditors.getById["ir1"].exec("UPDATE_CONTENTS_FIELD", []);
	
		var con	= $('#ir1').val();
		
		
		$('#jb_content').val(con);		

		if($('#jb_content').val() == '' || $('#jb_content').val() == '<br> ')
		{
			alert('내용을 입력하세요');
			return false;
		}	
		var t = $.base64Encode($('#ir1').val());		
		$('#jb_content').val(t);
		
			
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
