<?php
	include_once $_SERVER['DOCUMENT_ROOT'] . '/_init.php';
	include_once $GP -> INC_WWW . '/count_inc.php';
	$top_dep_title = "진료안내";
	$page_title = "비급여진료비안내";
	include_once $GP -> INC_WWW . '/head.php';
	$locArr = array(4,7);

    include_once($GP->CLS."class.list.php");
	include_once($GP->CLS."class.nonpay.php");
	$C_ListClass 	= new ListClass;
	$C_Nonpay 	= new Nonpay;

	if($_GET['cate1'] != '') {
		$cate1 = $_GET['cate1'];
	}else{
    	$_GET['cate1'] = "1";
    }

	$args = array();
	$args['show_row'] = 15;
	$args['cate1'] = $cate1;
	$data = "";
	$data = $C_Nonpay->NonPay_List(array_merge($_GET,$_POST,$args));

	$data_list 		= $data['data'];
	$page_link 		= $data['page_info']['link'];
	$page_search 	= $data['page_info']['search'];
	$totalcount 	= $data['page_info']['total'];

	$totalpages 	= $data['page_info']['totalpages'];
	$nowPage 		= $data['page_info']['page'];
	$totalcount_l 	= number_format($totalcount,0);

	$data_list_cnt 	= count($data_list);

	$last_date = $C_Nonpay->Last_Update_date($args);

/*if($cate1 == 1){
	$cate2_select = $C_Func -> makeSelect_Normal('cate2', $GP -> NONPAY_CATE_TYPE1_1, $_GET['cate2'], ' title="카테고리2" class="search-detail-scope select_nopay"  ', '');
}else if($cate1 == 2){
	$cate2_select = $C_Func -> makeSelect_Normal('cate2', $GP -> NONPAY_CATE_TYPE1_2, $_GET['cate2'], ' title="카테고리2" class="search-detail-scope select_nopay"  ', '');
}else if($cate1 == 3){
	$cate2_select = $C_Func -> makeSelect_Normal('cate2', $GP -> NONPAY_CATE_TYPE1_3, $_GET['cate2'], ' title="카테고리2" class="search-detail-scope select_nopay"  ', '');
}*/
?>
<script>
	$(document).ready(function(){
		$('.sub_head').css(
			{
				"background-image":"url('/public/images/common/sub_top_img02.jpg')",
			}
		);
	});
</script>
<?php
	include_once $GP -> INC_WWW . '/header_ver2.php';
	include_once $GP -> INC_WWW . '/header_after.php';
?>
	<!-- <div id="pagetop">
		<div class="background" style="background-image:url(/public/images/bg-pagetop-0<?php echo $locArr[0];?>.jpg);"></div>
		<div class="contain">
			<h2 class="title">비급여진료비안내</h2>
		</div>
	</div> -->
	<div id="container">
		<?php include_once $GP -> INC_WWW . '/location_new.php';?>
		<div id="article" class="board side-strip">
			<div class="box_style_1 text-center py60">
				<h3 class="mt30"><?=$page_title;?></h3>
			</div>
			<div class="contain">
				<form class="board-search nonpay" id="frm_search" name="frm_search" method="get" action="?">
					<fieldset>
						<legend>게시물 검색</legend>
						<select name="cate1" id="cate1" class="search-scope select_nopay">
                        	<option value="">전체</option>
							<?
                            	foreach($GP -> NONPAY_CATE_TYPE1 as $key => $val) {
                            ?>
                            	<option value="<?=$key?>" <? if($cate1 == $key ){ echo "selected"; }?>><?=$val?></option>
                            <? } ?>
						</select>
						<?
                            if($_GET['cate1'] != 4) {
                                echo $cate2_select;
                            }
                        ?>
						<input type="search" class="search-input" name="np_item" id="np_item" value="<?=$_GET['np_item']?>" placeholder="키워드를 입력하세요.">
						<button type="submit" id="search_submit" class="search-btn"><span>검색</span></button>
					</fieldset>
				</form>
				<div class="board-sheet nonpay">
					<p class="last-update">· 최종수정일 : <?=$last_date['np_regdate'];?></p>
					<table>
						<caption>비급여 진료비 정보 테이블</caption>
						<thead>
							<tr>
								<th scope="col" rowspan="2">분류</th>
								<th scope="col" colspan="2">항목</th>
								<th scope="col" colspan="6">가격정보(단위:원)</th>
								<th scope="col" rowspan="2">특이사항</th>
							</tr>
							<tr>
								<th scope="col">명칭</th>
								<th scope="col">코드</th>
								<th scope="col">구분</th>
								<th scope="col">비용</th>
								<th scope="col">최소비용</th>
								<th scope="col">최대비용</th>
								<th scope="col">치료재료대<br>포함여부</th>
								<th scope="col">약제비<br>포함여부</th>
							</tr>
						</thead>
						<tbody>
                        	<?
                                $dummy = 1;
                                for ($i = 0 ; $i < $data_list_cnt ; $i++) {
                                    $np_idx 		= $data_list[$i]['np_idx'];
                                    $np_item 		= $data_list[$i]['np_item'];
                                    $cate1 			= $data_list[$i]['cate1'];
                                    $cate2 			= $data_list[$i]['cate2'];
                                    $np_bunru		= $data_list[$i]['np_bunru'];
                                    $np_code 		= $data_list[$i]['np_code'];
                                    $np_gubun 		= $data_list[$i]['np_gubun'];
                                    $np_price 		= $data_list[$i]['np_price'];
                                    $np_row_price 	= $data_list[$i]['np_row_price'];
                                    $np_high_price 	= $data_list[$i]['np_high_price'];
                                    $np_percent 	= $data_list[$i]['np_percent'];
                                    $np_ck1 		= $data_list[$i]['np_ck1'];
                                    $np_ck2 		= $data_list[$i]['np_ck2'];
                                    $np_gita 		= $data_list[$i]['np_gita'];
                                    $np_regdate 	= $data_list[$i]['np_regdate'];

                                    if($np_price != '') {
                                        $np_price = str_replace(",","",$np_price);
                                        $np_price = number_format($np_price);
                                    }

                                    if($np_row_price != '') {
                                        $np_row_price = str_replace(",","",$np_row_price);
                                        $np_row_price = number_format($np_row_price);
                                    }

                                    if($np_high_price != '') {
                                        $np_high_price = str_replace(",","",$np_high_price);
                                        $np_high_price = number_format($np_high_price);
                                    }
                                ?>
							<tr>
								<td class="center"><?=$np_bunru?></td>
								<td><?=$np_item?></td>
								<td class="center"><?=$np_code?></td>
								<td class="center"><?=$np_gubun?></td>
								<td class="right"><?=$np_price?></td>
								<td class="right"><?=$np_row_price?></td>
								<td class="right"><?=$np_high_price?></td>
								<td class="center"><?=$np_ck1?></td>
								<td class="center"><?=$np_ck2?></td>
								<td><?=$np_gita?></td>
							</tr>
							<? } ?>
						</tbody>
					</table>
				</div>
				<div class="pagination">
					<?=$page_link?>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function(){
			<? if($_GET['cate1'] != 4){ ?>
				$('#cate2').show();
			<? }else{ ?>
			$('#cate2').hide();
			<? } ?>

			$('#search_submit').click(function(){
					$('#frm_search').submit();
					return false;
			});

			$('#cate1').change(function(){
				var val = $(this).val();

				location.href = "?cate1=" + val + '#article';
				return false;
			});
		});
	</script>
<?php include_once $GP -> INC_WWW . '/footer_ver2.php';?>

