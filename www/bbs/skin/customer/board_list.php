        <form class="board-search" action="?" id="search_form" name="search_form" method="get">
            <input type="hidden" name="jb_code" id="jb_code" value="<?=$jb_code?>" />
            <input type="hidden" name="search_key" id="search_key" value="jb_all" /> 
            <fieldset>
                <legend>게시물 검색</legend>
                <input type="search" class="search-input" placeholder="키워드를 입력하세요." name="search_keyword" id="search_keyword" value="<?=$_GET['search_keyword']?>"/>
                <button type="submit" id="search_submit" class="search-btn"><span>검색</span></button>
            </fieldset>
        </form>
         <div class="board-list">
			<table>
                <caption>게시 목록</caption>
                <colgroup>
                    <col width="5%">
                    <col width="*">
                    <col width="10%">
                    <col width="10%">
                    <col width="10%">
                    <col width="15%">
                    <col width="10%">
                </colgroup>
                </colgroup>
                <thead>
                    <tr>
                        <th scope="col" class="num">NO</th>
                        <th scope="col" class="subject">제목</th>
                        <th scope="col" class="subject">이름</th>
                        <th scope="col" class="subject">연락처</th>
                        <th scope="col" class="subject">회신 유/무</th>
                        <th scope="col" class="date">작성일</th>
                        <th scope="col" class="state">상태</th>
                    </tr>
                </thead>
				<tbody>
					<?php include $GP -> INC_PATH . "/action/customer_list.inc.php"; ?>
				</tbody>
			</table>
		</div>
		<div class="btn-group">
            <div class="btn-rt">
            <?php
            if($_GET['search_key'] && $_GET['search_keyword']) {
                echo "<a href=\"javascript:;\" class=\"btn btn-cancel\" onclick=\"javascript:location.href='${index_page}?jb_code=${jb_code}'\" title='목록'><span>전체목록보기</span></a>";
            }
            ?>
            <?php
            //쓰기권한
            if($check_level >= $db_config_data['jba_write_level']) {
                echo "<a class='btn btn-normal' href=\"#\" onclick=\"javascript:location.href='${index_page}?jb_code=${jb_code}&jb_mode=twrite'\" title='글쓰기'><span>글쓰기</span></a>";
            } else {
                echo "<a class='btn btn-normal' id='twrite_btn' title='글쓰기'><span>글쓰기</span></a>";
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
	
	$("#jb_type").change(function(){
		$('#search_form').submit();
		return false;
	});

	$('#page_row').change(function(){
		var val = $(this).val();
		location.href="?dep1=<?=$_GET['dep1']?>&dep2=<?=$_GET['dep2']?>&search_key=<?=$_GET['search_key']?>&search_keyword=<?=$_GET['search_keyword']?>&page=<?=$_GET['page']?>&page_row=" + val;
	});
	

	$('#twrite_btn').click(function(){	
		alert("로그인이 필요한 서비스입니다.");
		location.href ='/member/login.html?reurl=/reserve/page03.html';
	});
});
</script>
