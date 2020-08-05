<?php
	include_once("../../_init.php");
	include_once($GP -> INC_ADM_PATH."/head.php");
	
	include_once($GP->CLS."class.list.php");
	include_once($GP->CLS."class.blog.php");
	include_once($GP->CLS."class.button.php");
	$C_ListClass 	= new ListClass;
	$C_Blog 	= new Blog;
	$C_Button 		= new Button;

	$args = array();
	$args['show_row'] = 10;
	$args['pagetype'] = "admin";
	$data = "";
	$data = $C_Blog->Blog_List(array_merge($_GET,$_POST,$args));
	
	$data_list 		= $data['data'];
	$page_link 		= $data['page_info']['link'];
	$page_search 	= $data['page_info']['search'];
	$totalcount 	= $data['page_info']['total'];
	
	$totalpages 	= $data['page_info']['totalpages'];
	$nowPage 		= $data['page_info']['page'];
	$totalcount_l 	= number_format($totalcount,0);
	
	$data_list_cnt 	= count($data_list);

?>
<body>
<div class="Wrap"><!--// 전체를 감싸는 Wrap -->
		<? include_once($GP -> INC_ADM_PATH."/header.php"); ?>
		<div class="boxContentBody">
			
		</div>
		<div style="margin-top:5px; text-align:right;">
		<button onClick="layerPop('ifm_reg','./blog_reg.php', '100%', 650)"; class="btnSearch ">블로그 등록</button>
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
							<col />
							<col style="width:101px;" />
						</colgroup>
						<thead>
							<tr>
								<th>No</th>
								<th>타이틀</th>
								<th>링크</th>
								<th>노출</th>
								<th>등록일</th>
								<th>수정/삭제</th>
							</tr>
						</thead>
						<tbody>
							<?
								$dummy = 1;
								if($data_list_cnt > 0 ) {
									for ($i = 0 ; $i < $data_list_cnt ; $i++) {
										$tb_idx 		 	= $data_list[$i]['tb_idx'];
										$tb_title 			= $data_list[$i]['tb_title'];
										$tb_link 			= $data_list[$i]['tb_link'];
										$tb_show 			= $data_list[$i]['tb_show'];
										$tb_reg_date			= $data_list[$i]['tb_reg_date'];																			
										
									
										$edit_btn = $C_Button -> getButtonDesign('type2','수정',0,"layerPop('ifm_reg','./blog_edit.php?tb_idx=" . $tb_idx. "', '100%', 650)", 50,'');	
										$edit_btn .= $C_Button -> getButtonDesign('type2','삭제',0,"blog_delete('" . $tb_idx. "')", 50,'');
										
								?>
									<tr id="<?=$tb_idx?>">
										<td><?=$data['page_info']['start_num']--?></td>										
										<td><?=$tb_title ?></td>
										<td><a herf="<?=$tb_link?>" target="_blank"><?=$tb_link?></a></td>								
										<td><?=($tb_show == "Y") ? "노출" : "비노출"; ?></td>										
										<td><?=$tb_reg_date?></td>										
										<td><?=$edit_btn?></td>
									</tr>
									<?
										$dummy++;
									}
								}else{
									echo "<tr><td colspan='9' align='center'>데이터가 없습니다.</td></tr>";
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
		
	
			
		}).disableSelection();													 
	
		callDatePick('s_date');
		callDatePick('e_date');

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

	
	
	

	function blog_delete(tb_idx)
	{
		if(!confirm("삭제하시겠습니까?")) return;

		$.ajax({
			type: "POST",
			url: "./proc/blog_proc.php",
			data: "mode=BLOG_DEL&tb_idx=" + tb_idx,
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