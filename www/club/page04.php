<?php
	include_once $_SERVER['DOCUMENT_ROOT'] . '/_init.php';
	include_once $GP -> INC_WWW . '/count_inc.php';
	$top_dep_title = "SJS클럽";
	$page_title = "치료후기";
	include_once $GP -> INC_WWW . '/head.php';
	$locArr = array(5,2);

    $index_page = "page04.php";
	$query_page = "query.php";

	if(!$jb_code) {
  		$jb_code="40";
	}

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
	include_once $GP -> INC_WWW . '/header_ver2.php';
	include_once $GP -> INC_WWW . '/header_after.php';
?>

	<!-- <div id="pagetop">
		<div class="background" style="background-image:url(/public/images/bg-pagetop-04.jpg);"></div>
		<div class="contain">
			<h2 class="title">공지사항</h2>
			<p class="text"><br class="mb-show" /></p>
		</div>
	</div> -->
	<div id="container">
		<?php include_once $GP -> INC_WWW . '/location_new.php';?>
		<div id="article" class="board side-strip">
			<div class="box_style_1 text-center py60">
				<h3 class="mt30"><?=$page_title;?></h3>
			</div>
			<div class="contain">
				<?php include $GP -> INC_PATH ."/board_inc.php"; ?>
			</div>
		</div>
	</div>
<?php include_once $GP -> INC_WWW . '/footer_ver2.php';?>
</body>
</html>