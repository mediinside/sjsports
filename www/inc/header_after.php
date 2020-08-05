	<div class="sub_head">
		<div class="gradation_bg"></div>
		<div class="search_box_1 bg_color_darkblack py30">
			<div class="search_ctrl">
				<input id="search_text" class="searcher_input input_reset input_text_777777 py10 d-inline-block mr50" type="text" placeholder="검색어를 입력해주세요" style="width: 38%;" value="<?=$_GET['stext']?>">
				<button type="button" class="search_hashtag my10 mr10" onclick="location.href='/club/search.php?stext=회전근개파열'">#회전근개파열</button>
				<button type="button" class="search_hashtag mr10" onclick="location.href='/club/search.php?stext=아킬레스건염질환'">#아킬레스건염질환</button>
				<button type="button" class="search_hashtag mr10" onclick="location.href='/club/search.php?stext=견갑골운동장애'">#견갑골운동장애</button>
				<button type="button" class="search_hashtag mr10" onclick="location.href='/club/search.php?stext=반월상연골파열'">#반월상연골파열</button>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#search_text").keydown(function(key) {
				var val = $("#search_text").val();
	            if (key.keyCode == 13) {
	                // alert("엔터키를 눌렀습니다.");
	                location.href = '/club/search.php?stext=' + val;
	            }
	    	});
		});
	</script>