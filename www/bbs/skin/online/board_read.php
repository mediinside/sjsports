<div class="board-view">
	<div class="header">
		<h3 class="subject"><?=$jb_title?></h3>
		<dl class="info">
			<dt>작성자</dt><dd><?=$jb_name?></dd>
			<dt>성별</dt><dd><?=$GP -> GENDER_TYPE[$jb_etc1]?></dd>
			<dt>나이</dt><dd><?=$jb_etc3?></dd>
			<dt>작성일</dt><dd><?=$jb_reg_date?></dd>
			<? if($jb_file_code !='') { ?>
			<dt>첨부파일</dt><dd>
		<?php
		if($file_cnt > 0)
		{
			for($i=0; $i<$file_cnt; $i++)
			{
				if($ex_jb_file_name[$i])
				{		
					$code_file = $GP->UP_IMG_SMARTEDITOR. "jb_${jb_code}/${ex_jb_file_code[$i]}";							
					echo "<a href=\"/bbs/download.php?downview=1&file=" . $code_file . "&name=" . $ex_jb_file_name[$i] . " \">$ex_jb_file_name[$i]</a>";							
					if($i < ($file_cnt-1))
						echo ", ";
				}	 
			}
		} 
		?></dd>
     <? } ?>
		</dl>
	</div>
	<div class="contents"> <?=$content?></div>
</div>
<? if($check_level >= $db_config_data['jba_comment_level'] && $jb_comment_count < 1){ ?>
<div class="board-reply" id="comment">
    <h4 class="title">안녕하세요. <br class="mb-show" />고객님 문의에 대해 답변드립니다.</h4>
    <div class="contain">
       <a href="javascript:void(0)" class="btn-reply" ><span>답변 등록하기</span></a>
        <script type="text/javascript">
			$(document).ready(function(){	
				$('#comment2').hide();
				$('#comment3').hide();
			  $('#comment').click(function(){
				$('#comment').hide();
				$('#comment2').show();
				$('#comment3').hide();
				 });
				$('#comment2').hide();
			});
		</script>
    </div>
</div>
<? }?>
 <? 	include $GP -> INC_PATH . "/action/comment.inc.php"; ?>
<div class="btn-group">
	<div class="btn-lt">
		<?php
		//글목록버튼
		echo "<a href=\"#\" onclick=\"javascript:location.href='${index_page}?jb_code=${jb_code}&${search_key}&search_keyword=${search_keyword}&page=${page}'\" class=\"btn btn-normal\" title='목록'><span>목록으로</span></a>";
		?>
	</div>
	<!-- START 권한 있을 경우 -->
	<div class="btn-rt">
	   <?
		//답변권한
		//if($check_level >= $db_config_data['jba_reply_level'])
				//echo "<a href=\"#\" onclick=\"javascript:location.href='${get_par}&jb_mode=treply'\" class=\"btnM btnAnswer \" title=\"답글\">답글</a> ";			
		//수정(쓰기권한이 있어야 수정 가능)
		if($jb_comment_count < 1){
			if($check_level >= 9 || $check_id == $jb_mb_id)
				echo "<a href=\"#\" onclick=\"javascript:location.href='${get_par}&jb_mode=tmodify'\" class=\"btn btn-normal\" title=\"수정\"><span>수정</span></a> ";
		}else if($jb_comment_count >= 1){
				echo "<a href=\"#\" onclick=\"alert('답변이 완료된 글을 수정하실 수 없습니다. 새로운 글을 작성해 주세요.');\" class=\"btn btn-normal\" title=\"수정\"><span>수정</span></a> ";
		}	
		//삭제권한(쓰기권한이 있어야 삭제 가능)
		if($check_level >= 9 || $check_id == $jb_mb_id)
			echo "<a href=\"#\" onclick=\"javascript:location.href='${get_par}&jb_mode=tdelete'\" class=\"btn btn-cancel \" title=\"삭제\"><span>삭제</span></a> ";
		//쓰기권한
		if($check_level >= $db_config_data['jba_write_level'])
			//echo "<a href=\"#\" onclick=\"javascript:location.href='${index_page}?jb_code=${jb_code}&jb_mode=twrite'\" class=\"btn  btn-blue\" title=\"쓰기\">쓰기</a>";
	?>	
	</div>
	<!-- END 권한 있을 경우 -->
</div>
<!-- //댓글 -->
