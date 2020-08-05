 <?php
	include_once $_SERVER['DOCUMENT_ROOT'] . '/_init.php';
	include_once $GP -> INC_WWW . '/count_inc.php';
	$top_dep_title = "SJS클럽";
	$page_title = "사회공헌활동";
	include_once $GP -> INC_WWW . '/head_mobile.php';
	$locArr = array(5,6);

    include_once($GP->CLS."class.list.php");
	include_once($GP->CLS."class.blog.php");
	include_once($GP->CLS."class.button.php");
	$C_ListClass 	= new ListClass;
	$C_Blog 	= new Blog;
	$C_Button 		= new Button;

	$args = array();
	$args['show_row'] = 6;
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

<script>
	$(document).ready(function(){
		$('.sub_head').css(
			{
				"background-image":"url('/public/images/common/sub_top_img07.jpg')",
			}
		);
	});
</script>
<?php
	include_once $GP -> INC_WWW . '/header_mobile.php';
	include_once $GP -> INC_WWW . '/header_mobile_after.php';
?>

	<div id="container">
		<?php include_once $GP -> INC_WWW . '/location_new.php';?>
		<div id="article" class="board side-strip">
			<div class="box_style_1 text-center py60">
				<h3 class="mt30"><?=$page_title;?></h3>
			</div>
			<div class="contain">
				<form class="board-search" action="?" id="frm_search" name="frm_search" method="get">
					<fieldset>
						<legend>게시물 검색</legend>
						<input type="search" class="search-input"  placeholder="키워드를 입력하세요." name="tb_title" id="tb_title"value="<?=$_GET['tb_title']?>">
						<button type="submit" id="search_submit" class="search-btn"><span>검색</span></button>
					</fieldset>
				</form>
				<div class="board-post blog">
					<ul class="list">
                    <?
                        $dummy = 1;
                        if($data_list_cnt > 0 ) {
                            for ($i = 0 ; $i < $data_list_cnt ; $i++) {
                                $tb_idx 		 	= $data_list[$i]['tb_idx'];
                                $tb_title 			= $data_list[$i]['tb_title'];
                                $tb_link 			= $data_list[$i]['tb_link'];
                                $tb_img 			= $data_list[$i]['tb_img'];
                                $tb_content 		= $data_list[$i]['tb_content'];
                                $tb_show 			= $data_list[$i]['tb_show'];

                                $img = '';
                                if($tb_img !=  '') {
                                    $img = "<img src='" . $GP -> UP_BLOG_URL . $tb_img . "' alt='" .  $tb_title ."' class='block' />";
                                }

                     ?>
						<li><a href="<?=$tb_link?>" class="panel" target="_blank">
							<dl class="info">
								<dt class="subject"><?=$tb_title?></dt>
								<dd class="date"><?=$tb_date?></dd>
							</dl>
							<div class="picture"><?=$img?></div>
							<p class="cont"><?=$tb_content?></p>
						</a></li>
					<? }
                    }
                    ?>
					</ul>
				</div>
				<div class="btn-group">
					<div class="btn-rt"></div>
				</div>
				<div class="pagination">
					<?=$page_link?>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function(){


			$('#search_submit').click(function(){
					$('#frm_search').submit();
					return false;
			});

		});
	</script>
<?php include_once $GP -> INC_WWW . '/footer_mobile.php'; ?>

