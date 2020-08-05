


<?php

if($jb_comment_count > 0) {						

	$args = array();
	$args['show_row'] = 100;
	$args['show_page'] = 5;
	$args['jb_code']  = $jb_code;	
	$args['jb_idx'] 	= $jb_idx;	
	$args['pagetype'] = "comment";
	
	$Comm_data = "";
	$Comm_data = $C_JHBoard -> Board_Comment_List(array_merge($_GET,$_POST,$args));
	
	$comm_data_list 		= $Comm_data['data'];
	$comm_page_link 		= $Comm_data['page_info']['link'];
	$comm_page_search 	= $Comm_data['page_info']['search'];
	$comm_totalcount 		= $Comm_data['page_info']['total'];
	$comm_totalpages 		= $Comm_data['page_info']['totalpages'];
	$comm_nowPage 			= $Comm_data['page_info']['page'];	
	$comm_num_idx				= $Comm_data['page_info']['start_num'];
		
	$comm_totalcount_l 	= number_format($comm_totalcount,0);
	$comm_data_list_cnt 	= count($comm_data_list);
	
	
	for($i=0; $i<$comm_data_list_cnt; $i++) {
		$jbc_idx 		= $comm_data_list[$i]['jbc_idx'];
		$jbc_mb_id	= $comm_data_list[$i]['jbc_mb_id'];
		$jbc_name_ori	= $comm_data_list[$i]['jbc_name'];
		$jbc_p_id_ori	= $comm_data_list[$i]['jbc_p_id'];
		$jbc_p_name	= $comm_data_list[$i]['jbc_p_name'];
		$jbc_step		= $comm_data_list[$i]['jbc_step'];
		$jbc_depth		= $comm_data_list[$i]['jbc_depth'];
		$jbc_group		= $comm_data_list[$i]['jbc_group'];
		$jbc_mail_ch		= $comm_data_list[$i]['jbc_mail_ch'];
		$jbc_reg_date =  date("Y.m.d", strtotime($comm_data_list[$i]['jbc_reg_date']));
		$jbc_mod_date =  date("Y.m.d", strtotime($comm_data_list[$i]['jbc_mod_date']));	
		//등록일
		$jbc_reg_date 				= date("Y.m.d", strtotime($comm_data_list[$i]['jbc_reg_date']));	
		$jbc_reg_time 				= date("H:i", strtotime($comm_data_list[$i]['jbc_reg_date']));	
		//수정일
		$jbc_mod_date 				= date("Y.m.d", strtotime($comm_data_list[$i]['jbc_mod_date']));	
		
		//이름 ** 처리
		$jbc_name =  $C_Func->blindInfo($comm_data_list[$i]['jbc_name'], 6);
		$jb_id =  $C_Func->blindInfo($comm_data_list[$i]['jbc_mb_id'], 6);
		
		
		$jbc_p_id	=  $C_Func->blindInfo($comm_data_list[$i]['jbc_p_id'],6);
		$jbc_p_name	=  $C_Func->blindInfo($comm_data_list[$i]['jbc_p_name'],6);

		
		
		//내용 (HTML TAG제한)
		$jbc_content = nl2br(strip_tags($comm_data_list[$i]['jbc_content'], '<br>'));
		
		//답글처리
		if($jbc_step > 0)
				$depth_icon = $C_Func->reply_depth($comm_data_list[$i]['[jbc_step'], "");
		else
				$depth_icon = ""; //매 글마다 초기화를 해 주어야 한다.			
		
		$get_c_par = "";
		$get_c_par = "${index_page}?jb_code=${jb_code}&jb_idx=${jb_idx}";
		$get_c_par .= "&jb_group=${jb_group}&jb_step=${jb_step}&jb_depth=${jb_depth}&jbc_idx=${jbc_idx}";
		$get_c_par .= "&${search_key}&search_keyword=${search_keyword}&page=${page}";
	?>
 <div class="board-reply" id="comment3">
  <h4 class="title">안녕하세요. <br class="mb-show" />고객님 문의에 대해 답변드립니다.</h4>

  <li <? if($jbc_step > 0) { echo " class='reReply' ";}?>>
    
        
        <div class="contain">
		<? if($jbc_p_id_ori != '' && $jbc_step > 1) {
      		echo "<strong>" . $jbc_p_name . "</strong> (". $jbc_p_id .")";
				}
				echo htmlspecialchars_decode ($jbc_content, ENT_NOQUOTES);
			?>
         </div>
		<? if($check_level == 9 || $check_id == $jbc_mb_id) { ?>
        <ul class="util">
            <li><a href="<?php echo "${get_c_par}&jbc_idx=${jbc_idx}&jb_mode=comment_modify";?>">수정</a></li>
            <li><a href="<?php echo "${get_c_par}&jb_mode=comment_delete";?>">삭제</a></li>
        </ul>
          <? } ?>
    <div id="comm_reply_<?=$jbc_idx?>" class="reReplyWrite"></div>
  </li>
  </div>
<?php
	} // end for

} //end_of_if($jb_comment_count > 0)	
?>

<script type="text/javascript">	
	var show = 0;
	function comm_reply(jbc_idx, jb_idx, jb_code, jbc_group, jbc_step, jbc_depth, jbc_name, jbc_mb_id) {		
		var url = "query.php?jb_mode=comment_reply&jb_code=" + jb_code + "&jb_idx=" + jb_idx  + "&jbc_group=" + jbc_group + "&jbc_step=" + jbc_step + "&jbc_depth=" + jbc_depth+ "&jbc_p_name=" + jbc_name+ "&jbc_p_id=" + jbc_mb_id;
		var str = "";
		str += '<form name="frm_re_comment" id="frm_re_comment" action="' + url + '" method="post">';
		str += '<div class="reCont reRegi">';		
		
		<?
			if(empty($_SESSION['suserid']))
	  	{
		?>
		str += '<div class="cmtRegister guest">';		
		str += '<p class="guestInput">';
		str += '<label>이름 : <input type="text" name="jbc_name" id="jbc_name" size="18" maxlength="30" value="<?=$check_name?>" class="txt"></label>';		
		str += '<label>비밀번호 : <input type="password" name="jbc_password" id="jbc_password" size="18" maxlength="50" class="txt"></label>';
	  str += '</p>';
		<?
			}else{
				$password_key1=md5($check_id);	
				$tm1=explode(" ",microtime());
				$jbc_password_re = $password_key1 . $tm1[1];
		?>
		str += '<div class="replyText">';
		str += '<input type="hidden" name="jbc_name" id="jbc_name" value="<?=$check_name?>">';
		str += '<input type="hidden" name="jbc_password" id="jbc_password" value="<?=$jbc_password_re?>">';			
		<?
			}
		?>
		
		str += '<textarea name="jbc_re_content" id="jbc_re_content" cols="20" rows="10"></textarea>';
		str += '<div class="btnWrap btnRight">';
		str += '<span><a href="javascript:;" class="btnT btnTs" onclick="frm_submit();">등록</a></span> ';
		str += '<span><a href="javascript:;" class="btnT btnTfl" onclick="frm_cancel(' + jbc_idx + ');">취소</a></span>';
		str += '</div>';
		str += '</div></div></form>';		
		
		if(show == 0) {
			$('#comm_reply_' + jbc_idx).append(str);
			show = 1;
		}else{
			$('#comm_reply_' + jbc_idx).html('');
			show = 0;
		}		
	}
	
	function frm_cancel(jbc_idx){
			$('#comm_reply_' + jbc_idx).html('');
			show = 0;		
	}
	
	function frm_submit() {
		var t = $.base64Encode($('#jbc_re_content').val()); 
		$('#jbc_re_content').val(t);				
		
		if ( $('#jbc_re_content').val() == "") {
			alert('내용을 입력하세요.');
			$('#jbc_re_content').focus();
			return false;
		}
		
		$('#frm_re_comment').submit();
		return false;	
	}
</script>
<script type="text/javascript">
	$(document).ready(function(){	
		$('#comment2').hide();

	  
	});
</script>