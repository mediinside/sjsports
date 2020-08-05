	<? if($mpYN !="Y"){ ?>	
        <div class="board-guide">
            <ul class="dotted">
                <li>세종스포츠정형외과의 각 분야 전문의료진들에게 직접 상담하세요.</li>
                <li>본 게시판 운영 의도와 상관 없는 글은 사전 동의 없이 삭제 또는 이동될 수 있습니다.</li>
                <li>개인을 식별할 수 있는 개인정보는 포함하지 않도록 부탁드리며, 개인정보 누출 예방을 위해 해당 글은 사전 동의 없이 수정될 수 있습니다.</li>
            </ul>
        </div>
   <? } ?>
        <form id="search_form" class="board-search" name="search_form" method="get" action="?" >
				 <input type="hidden" name="jb_code" id="jb_code" value="<?=$jb_code?>" />
                 <input type="hidden" name="search_key" value="jb_title">
                 <input type="hidden" name="jb_type" id="jb_type" value="<?=$_GET['jb_type']?>">
				<fieldset>
					<legend>게시물 검색</legend>
					<div class="ui-select">
                        <select name="jb_type_select" id="jb_type_select" class="search-scope">
                            <option value="">전체보기</option>
                            <option <?php if($_GET['jb_type']=="A") echo " selected";?> value="A">목</option>
                            <option <?php if($_GET['jb_type']=="B") echo " selected";?> value="B">허리</option>
                            <option <?php if($_GET['jb_type']=="C") echo " selected";?> value="C">어깨</option>
                            <option <?php if($_GET['jb_type']=="D") echo " selected";?> value="D">무릎</option>
                            <option <?php if($_GET['jb_type']=="E") echo " selected";?> value="E">족부</option>
                            <option <?php if($_GET['jb_type']=="F") echo " selected";?> value="F">기타</option>
                    </select>
                        <!-- <a href="javascript:void(0)" class="trigger"><span>전체보기</span><i class="bicon-arrow-down"></i></a>
                        <ul class="option">
                            <li><a href="/club/page02.php">전체보기</a></li>
                            <li <?php if($_GET['jb_type']=="A") echo " class='on'";?>><a href="/club/page02.php?jb_type=A">목</a></li>
                            <li <?php if($_GET['jb_type']=="B") echo " class='on'";?>><a href="/club/page02.php?jb_type=B">허리</a></li>
                            <li <?php if($_GET['jb_type']=="C") echo " class='on'";?>><a href="/club/page02.php?jb_type=C">어깨</a></li>
                            <li <?php if($_GET['jb_type']=="D") echo " class='on'";?>><a href="/club/page02.php?jb_type=D">무릎</a></li>
                            <li <?php if($_GET['jb_type']=="E") echo " class='on'";?>><a href="/club/page02.php?jb_type=E">족부</a></li>
                            <li <?php if($_GET['jb_type']=="F") echo " class='on'";?>><a href="/club/page02.php?jb_type=F">기타</a></li>
                        </ul> -->
                    </div>
                      <input type="text" class="txt search-input" title="검색어 입력" name="search_keyword" id="search_keyword" value="<?=$_GET['search_keyword']?>" />
							<a href="#;" class="search-btn" id="search_submit"><span>검색</span></a>

				</fieldset>
			</form>	
         <div class="board-list">
			<table>
                <caption>게시 목록</caption>
                <thead>
                    <tr>
                        <th scope="col" class="num">NO</th>
                        <th scope="col" class="category">구분</th>
                        <th scope="col" class="subject">제목</th>
                        <th scope="col" class="writer">작성자</th>
                        <th scope="col" class="date">작성일</th>
                        <th scope="col" class="state">상태</th>
                    </tr>
                </thead>
				<tbody>
					<?php include $GP -> INC_PATH . "/action/online_list.inc.php"; ?>
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

    $("#jb_type_select").change(function(){
        var val = $("#jb_type_select").val();
        switch(val){
            case 'A' :
            location.href = '/club/page02.php?jb_type=A';
            break;
            case 'B' :
            location.href = '/club/page02.php?jb_type=B';
            break;
            case 'C' :
            location.href = '/club/page02.php?jb_type=C';
            break;
            case 'D' :
            location.href = '/club/page02.php?jb_type=D';
            break;
            case 'E' :
            location.href = '/club/page02.php?jb_type=E';
            break;
            case 'F' :
            location.href = '/club/page02.php?jb_type=F';
            break;

            default:
            location.href = '/club/page02.php?jb_type=';
            break;
        }
        
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
