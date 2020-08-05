<script type="text/javascript" src="<?=$GP -> JS_PATH?>/admin/jquery.base64.js"></script>
<div class="board-reply" id="comment2">
   <h4 class="title">안녕하세요. <br class="mb-show" />고객님 문의에 대해 답변드립니다.</h4>
       <div class="contain">
        <form name="frm_comment" id="frm_comment" action="<?=$get_c_par;?>" method="post">
        <?php
          //회원일 경우 비밀번호를 입력할 필요가 없다.
          if(empty($_SESSION['suserid']))
          {
          ?>
          <p class="guestInput">
                <label>이름 : <input type="text" name="jbc_name" id="jbc_name" size="18" maxlength="30" value="<?=$check_name;?>" class="txt"></label>  		
                <label>비밀번호 : <input type="password" name="jbc_password" id="jbc_password" size="18" maxlength="50" class="txt"></label>
          </p>
          <?php
          }
          else
          {
              
                echo ("<input type=\"hidden\" name=\"jbc_name\" id=\"jbc_name\"  value=\"" . $_SESSION['susername'] . "\">");		
            $password_key=md5($_SESSION['suserid']);
            $tm=explode(" ",microtime());
            $jbc_password=$password_key . $tm[1];
            echo ("<input type=\"hidden\" name=\"jbc_password\" id=\"jbc_password\" value=\"${jbc_password}\">");
          }
          ?>
        <textarea rows="10" cols="20" class="i-text" name="jbc_content" id="jbc_content"></textarea>
        <button class="btn-save" id="comment_submit">저장</button>
        <script type="text/javascript">
            $(document).ready(function() {		
                $('#comment_submit').click(function() {
                    
                    var t = $.base64Encode($('#jbc_content').val()); 
                    $('#jbc_content').val(t);	
                    
                    
                    if ( $('#jbc_content').val() == "") {
                        alert('내용을 입력하세요.');
                        $('#jbc_content').focus();
                        return false;
                    }
                    
                    $('#frm_comment').submit();
                    return false;
                });		
            });
        </script>
        </form>
     </div>
</div>