            <form class="board-search" action="?" id="search_form" name="search_form" method="get">
                <input type="hidden" name="jb_code" id="jb_code" value="<?=$jb_code?>" />
                <input type="hidden" name="search_key" id="search_key" value="jb_all" /> 
                <fieldset>
                    <legend>게시물 검색</legend>
                    <input type="search" class="search-input" placeholder="키워드를 입력하세요." name="search_keyword" id="search_keyword" value="<?=$_GET['search_keyword']?>"/>
                    <button type="submit" id="search_submit" class="search-btn"><span>검색</span></button>
                </fieldset>
            </form>
			<div class="board-post">
				<ul class="list">
					<?php include $GP -> INC_PATH . "/action/photo_list.inc.php"; ?>
				</ul>
            </div>
		 <div class="btn-group">
            <div class="btn-rt">

			<?php
			if($_GET['search_key'] && $_GET['search_keyword']) {
				echo "<a href=\"javascript:;\" class=\"btn btn-normal\" onclick=\"javascript:location.href='${index_page}?jb_code=${jb_code}'\" title='목록'><span>목록</span></a>";
			}
			?>

			<?php
			//쓰기권한
			if($check_level >= $db_config_data['jba_write_level']) {
				echo "<a class='btn btn-normal' href=\"#\" onclick=\"javascript:location.href='${index_page}?jb_code=${jb_code}&jb_mode=twrite'\" title='글쓰기'><span>글쓰기</span></a>";
			} else {
			//	echo "<a class='btn btn_middle' id='twrite_btn' title='글쓰기'><strong>글쓰기</strong></a>";
			}
			?>
            </div>
        </div>
		<div class="pagination">
			<?=$page_link?>
        </div>

<script type="text/javascript">
$(document).ready(function(){
	
	$('#search_submit').click(function(){      
     if( $('#search_keyword').val() == ""){
		return;
		} else {
		$('#search_form').submit();
			  return false;
		}
		   });

	$('#page_row').change(function(){
		var val = $(this).val();
		location.href="?dep1=<?=$_GET['dep1']?>&dep2=<?=$_GET['dep2']?>&search_key=<?=$_GET['search_key']?>&search_keyword=<?=$_GET['search_keyword']?>&page=<?=$_GET['page']?>&page_row=" + val;
	});
	

	$('#twrite_btn').click(function(){	
		alert("로그인 후 이용가능 합니다.");
		location.href ='/member/login.html?reurl=/community/page03.html';
	});
});
</script>
