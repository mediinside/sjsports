<?php
	include_once("../../_init.php");
	
	include_once($GP->CLS."class.list.php");
	include_once($GP -> CLS."/class.member.php");	
	include_once($GP->CLS."class.button.php");
	$C_ListClass 	= new ListClass;
	$C_Member 	= new Member;
	$C_Button 		= new Button;
	
	ini_set("memory_limit" , -1);
	
	$excelHanArr = array(
		"아이디" => "mb_id",
		"이름" => "mb_name",
		"이메일" => "mb_email",
		"성별" => "mb_sex",
		"생년월일" => "mb_birthday",
		"연락처" => "mb_mobile",
		"주소" => "m_addr",
		"상세주소" => "m_addr_sub",
		"도로명주소" => "mb_load_address1",
		"도로명상세주소" => "mb_load_address2",
		"가입일자" => "mb_register_date"
	);
	
	$args = array();
	$args['show_row'] = 20;
	$args['pagetype'] = "admin";
	$args['excel_file']		= $_GET['excel_file'];
	$args['excel']			= $excelHanArr;
	$data = "";
	$data = $C_Member->Mem_List(array_merge($_GET,$_POST,$args));
	
	$data_list 		= $data['data'];
	$page_link 		= $data['page_info']['link'];
	$page_search 	= $data['page_info']['search'];
	$totalcount 	= $data['page_info']['total'];
	
	$totalpages 	= $data['page_info']['totalpages'];
	$nowPage 		= $data['page_info']['page'];
	$totalcount_l 	= number_format($totalcount,0);
	
	$data_list_cnt 	= count($data_list);
	
	include_once($GP -> INC_ADM_PATH."/head.php");
?>
<body>
<div class="Wrap"><!--// 전체를 감싸는 Wrap -->
		<? include_once($GP -> INC_ADM_PATH."/header.php"); ?>
		<div class="boxContentBody">
			<div class="boxSearch">
			<? include_once($GP -> INC_ADM_PATH."/inc.mem_search.php"); ?>										
			<form name="base_form" id="base_form" method="GET">
			<ul>				
				<li>
					<strong class="tit">등록일</strong>
					<span><input type="text" name="s_date" id="s_date" value="<?=$_GET['s_date']?>" class="input_text" size="13"></span>
					<span>~</span>
					<span><input type="text" name="e_date" id="e_date" value="<?=$_GET['e_date']?>" class="input_text" size="13" /></span>
				</li>			
				<li>
					<strong class="tit">검색조건</strong>
					<span>
					<select name="search_key" id="search_key">
						<option value="">:: 선택 ::</option>
						<option value="mb_name" <? if($_GET['search_key'] == "mb_name"){ echo "selected";}?> >성명</option>
						<option value="mb_email" <? if($_GET['search_key'] == "mb_email"){ echo "selected";}?>>이메일</option>
						<option value="mb_mobile" <? if($_GET['search_key'] == "mb_mobile"){ echo "selected";}?>>핸드폰</option>
					</select>
					</span>
					<span><input type="text" name="search_content" id="search_content" value="<?=$_GET['search_content']?>" class="input_text" size="30" /></span>
					<span><button id="search_submit" class="btnSearch ">검색</button></span>
					<span><input type="button" id="excel_btn" value="EXCEL" /></span>	
				</li>
			</ul>
			</form>
			</div>
		</div>		
		<div id="BoardHead" class="boxBoardHead">				
				<div class="boxMemberBoard">
					<table>
						<colgroup>
							<col />
							<col />
							<col />
							<col />	
							<col />
							<col />
							<col style="width:101px;" />
						</colgroup>
						<thead>
							<tr>
								<th><input type="checkbox" name="ck_all" id="ck_all" /></th>
								<th>No</th>								
								<th>이메일</th>								
								<th>성명</th>								
								<th>수신여부</th>															
								<th>타입</th>								
								<th>등록일</th>								
								<th>수정/삭제</th>
							</tr>
						</thead>
						<tbody>
							<?
								$dummy = 1;
								for ($i = 0 ; $i < $data_list_cnt ; $i++) {
									$mb_code 		= $data_list[$i]['mb_code'];
									$mb_name		= $data_list[$i]['mb_name'];
									$mb_email 		= $data_list[$i]['mb_email'];
									$mb_email_flag 		= $data_list[$i]['mb_email_flag'];
									$mb_level 		= $data_list[$i]['mb_level'];
									$mb_mobile 		= $data_list[$i]['mb_mobile'];	
									$mb_status 		= $data_list[$i]['mb_status'];	
									$mb_register_date 		= $data_list[$i]['mb_register_date'];								
									
									$ck_btn = $C_Button -> getButtonDesign('type2','암호변경',0,"layerPop('ifm_reg','./mem_pwd.php?mb_code=" . $mb_code. "', '100%', 250)", 80,'');	
									$edit_btn = $C_Button -> getButtonDesign('type2','수정',0,"layerPop('ifm_reg','./mem_edit.php?mb_code=" . $mb_code. "', '100%', 670)", 50,'');	
									$edit_btn .= $C_Button -> getButtonDesign('type2','삭제',0,"mem_delete('" . $mb_code. "')", 50,'');
									
								?>
										<tr>
											<td><input type="checkbox" name="ck_num" value="<?=$mb_code?>" /></td>
											<td><?=$data['page_info']['start_num']--?></td>											
											<td><?=$mb_email?></td>											
											<td><?=$mb_name?></td>											
											<td><?=($mb_email_flag == "Y") ? "수신":"비수신";?></td>																				
											<td><?=$GP -> MEMBER_CONFIG_LEVEL[$mb_level]?></td>											
											<td><?=$mb_register_date?></td>											
											<td><?=$ck_btn ?> <?=$edit_btn?></td>
										</tr>
										<?
									$dummy++;
								}
								?>						
						</tbody>
					</table>
				</div>			
			</div>
			<ul class="boxBoardPaging">
				<?=$page_link?>
			</ul>
		</div>
		<? include_once($GP -> INC_ADM_PATH."/footer.php"); ?>
	</div>
</div><!-- 전체를 감싸는 Wrap //-->
</body>
</html>
<script type="text/javascript">



	$(document).ready(function(){	
														 
		//엑셀 출력
		$('#excel_btn').click(function(){
				var string = $("#base_form").serialize();
				location.href = "?excel_file=mem_list" + "&" + string;
				return false;
		});

		callDatePick('s_date');
		callDatePick('e_date');

		//전체선택 체크박스 클릭
		$("#ck_all").click(function(){
			//만약 전체 선택 체크박스가 체크된상태일경우
			if($("#ck_all").prop("checked")) {
				//해당화면에 전체 checkbox들을 체크해준다
				$("input:checkbox[name='ck_num']").prop("checked",true);
			// 전체선택 체크박스가 해제된 경우
			} else {
				//해당화면에 모든 checkbox들의 체크를해제시킨다.
				$("input:checkbox[name='ck_num']").prop("checked",false);
			}
		});

		$('#sel_email_btn').click(function(){			
			//alert('도메인을 설정한 후 발송가능 합니다');
			//return false;

			var num = "";
			$("input:checkbox[name=ck_num]").each(function(){
				if($(this).prop('checked') == true) {
					num += $(this).val()  + ",";
				}
			});
			num = num.slice(0,-1);

			if(num == "") {
				alert("메일을 보낼 사람을 체크해주세요");
				return false;
			}

			layerPop('ifm_addr','mem_email.php?type=S&arr_idx=' + num, '100%', 700);
			return false;
		});

		$('#gr_email_btn').click(function(){
			//alert('도메인을 설정한 후 발송가능 합니다');
			//return false;

			layerPop('ifm_addr','mem_email.php?type=G', '100%', 700);
			return false;
		});

		$('#pn_email_btn').click(function(){
			//alert('도메인을 설정한 후 발송가능 합니다');
			//return false;

			layerPop('ifm_addr','mem_email.php?type=P', '100%', 700);
			return false;
		});
	
		

		$('#search_submit').click(function(){																			 

			if($.trim($('#search_content').val()) != '')
			{
				if($('#search_key option:selected').val() == '')
				{
					alert('검색조건을 선택하세요');
					return false;
				}
			}

			if($('#search_key option:selected').val() != '')
			{
				if($.trim($('#search_content').val()) == '')
				{
					alert('검색내용을 입력하세요');
					$('#search_content').focus();
					return false;
				}
			}


			$('#base_form').submit();
			return false;
		});

	});

	function mem_delete(mb_code)
	{
		if(!confirm("삭제하시겠습니까?")) return;

		$.ajax({
			type: "POST",
			url: "./proc/mem_proc.php",
			data: "mode=MEM_DEL&mb_code=" + mb_code,
			dataType: "text",
			success: function(msg) {

				if($.trim(msg) == "true") {
					alert("삭제되었습니다");
					window.location.reload();
					return false;
				}else{
					alert('삭제에 실패하였습니다.');
					return;
				}
			},
			error: function(xhr, status, error) { alert(error); }
		});

	}
</script>