<?php
	include_once("../../_init.php");
	include_once($GP -> INC_ADM_PATH."/head.php");	
	
	include_once($GP->CLS."class.blog.php");
	$C_Blog 	= new Blog;
	
	$args = "";
	$args['tb_idx'] 	= $_GET['tb_idx'];
	$rst = $C_Blog ->Blog_Info($args);
	
	if($rst) {
		extract($rst);
		$tb_content  = $C_Func->dec_contents_edit($tb_content);				

	}
?>
<body>
<div class="Wrap_layer"><!--// 전체를 감싸는 Wrap -->
	<div class="boxContent_layer">
		<div class="boxContentHeader">
			<span class="boxTopNav"><strong>블로그 수정</strong></span>
		</div>
		<form name="base_form" id="base_form" method="POST" action="?" enctype="multipart/form-data">
		<input type="hidden" name="mode" id="mode" value="BLOG_MODI" />
		<input type="hidden" name="tb_idx" id="tb_idx" value="<?=$_GET['tb_idx']?>" />
        <input type="hidden" name="before_image_main" id="before_image_main" value="<?=$tb_img?>" />
		<div class="boxContentBody">			
			<div class="boxMemberInfoTable_layer">				
				<div class="layerTable">
					<table class="table table-bordered">
						<tbody>
                        	<tr>
								<th><span>*</span>작성일</th>
								<td>
									<input type="text" class="input_text" size="70" name="tb_date" id="tb_date" value="<?=$tb_date?>" />
								</td>
							</tr>
							<tr>
								<th><span>*</span>제목</th>
								<td>
									<input type="text" class="input_text" size="70" name="tb_title" id="tb_title" value="<?=$tb_title?>" />
								</td>
							</tr>
							<tr>
								<th><span>*</span>링크</th>
								<td>
									<input type="text" class="input_text" size="70" name="tb_link" id="tb_link" value="<?=$tb_link?>" />
								</td>
							</tr>
                            <tr id="TR1">
							<th><span>*</span>이미지</th>
							<td>
								<input type="file" name="tb_img" id="tb_img" size="30">
								<?
									if($tb_img != "") {
										echo  "<br>" . $tb_img;
								?>
									<a href="#" onClick="img_del('<?=$tb_img;?>','<?=$_GET['tb_idx']?>','W')">(X)</a>(293*187)
								<? } ?>
							</td>
						</tr>
							<tr>
								<th><span>*</span>내용</th>
								<td>
									<textarea name="tb_content" id="tb_content" style="width:98%; height:100px;  overflow:auto;" ><?=$tb_content?></textarea>
								</td>
							</tr>
							<tr>
								<th><span>*</span>노출여부</th>
								<td>
									<input type="radio" name="tb_show" id="tb_show" value="Y" <? if($tb_show == "Y"){ echo "checked";}?> />노출
									<input type="radio" name="tb_show" id="tb_show" value="N" <? if($tb_show == "N"){ echo "checked";}?> />비노출
								</td>
							</tr>	
						</tbody>
					</table>
				</div>				
				<div class="btnWrap">
					<span class="btnRight">
						<button id="img_submit" class="btnSearch ">수정</button>
						<button id="img_cancel" class="btnSearch ">취소</button>
					</span>
				</div>
			</div>
		</div>
		</form>
	</div>
</div>
</body>
</html>
<script type="text/javascript">

function img_del(image, idx, type)
	{
		if(!confirm("삭제하시겠습니까?")) return;

		$.ajax({
			type: "POST",
			url: "./proc/blog_proc.php",
			data: "mode=BLOG_IMGDEL&tb_idx=" + idx + "&file=" + image + "&type=" + type,
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

	$(document).ready(function(){	
														 
		$('#img_cancel').click(function(){
				parent.modalclose();				
		});	

		$('#img_submit').click(function(){
			
			$('#base_form').attr('action','./proc/blog_proc.php');
			$('#base_form').submit();
			return false;
		});					
	
	});
</script>
<script type="text/javascript">
	$(function() {
		callDatePick('tb_date');
	});
	
	function callDatePick (id) {	
		var dates = $( "#" + id ).datepicker({
			prevText: '이전 달',
			nextText: '다음 달',
			monthNames: ['1월','2월','3월','4월','5월','6월','7월','8월','9월','10월','11월','12월'],
			monthNamesShort: ['1월','2월','3월','4월','5월','6월','7월','8월','9월','10월','11월','12월'],
			dayNames: ['일','월','화','수','목','금','토'],
			dayNamesShort: ['일','월','화','수','목','금','토'],
			dayNamesMin: ['일','월','화','수','목','금','토'],
			dateFormat: 'yy-mm-dd',
			showMonthAfterYear: true,
			yearSuffix: '년'	  
		});
	}

</script>