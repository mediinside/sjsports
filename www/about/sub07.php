<?php
	include_once $_SERVER['DOCUMENT_ROOT'] . '/_init.php';
	include_once $GP -> INC_WWW . '/count_inc.php';
	$top_dep_title = "SJS소개";
	$page_title = "스태프 소개";
	include_once $GP -> INC_WWW . '/head.php';
	$locArr = array(1,1);

    include_once($GP->CLS."class.list.php");
	include_once($GP->CLS."class.button.php");

	$C_ListClass 	= new ListClass;
	$C_Doctor 		= new Doctor;
	$C_Button 		= new Button;

	$data_list 		= $data['data'];
	$page_link 		= $data['page_info']['link'];
	$page_search 	= $data['page_info']['search'];
	$totalcount 	= $data['page_info']['total'];

	$totalpages 	= $data['page_info']['totalpages'];
	$nowPage 		= $data['page_info']['page'];
	$totalcount_l 	= number_format($totalcount,0);

	$data_list_cnt 	= count($data_list);

	switch ($dr_clinic) {
		case 'A':
			$page_title = '스태프 소개';
			break;
		case 'B':
			$page_title = '스태프 소개';
			break;

		default:
			$page_title = '스태프 소개';
			break;
	}
?>
<script>
	$(document).ready(function(){
		$('.sub_head').css(
			{
				"background-image":"url('/public/images/common/sub_top_img01.jpg')",
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
			<h2 class="title">의료진 소개</h2>
		</div>
	</div> -->
	<div id="container" class="bg-scratch">
		<?php include_once $GP -> INC_WWW . '/location_new.php';?>
		<div id="article" class="intro side-strip">
			<div class="box_style_1 text-center py60">
				<h3 class="mt30"><?=$page_title;?></h3>
			</div>
			<div class="intro-doctor-list">
				<div class="display">
					<!-- <div class="header"> -->
					    <!-- <div class="utils">
					        <ul class="list">
					            <li><a href="/about/sub02.php?dr_clinic=A" class="btn btn-reserve"><span>의료진</span></a></li>
					            <li><a href="/about/sub02.php?dr_clinic=B" class="btn btn-consult"><span>스태프</span></a></li>
					        </ul>
					    </div> -->
					    <!-- <div class="ui-select">
					        <a href="javascript:void(0);" class="trigger">
					            <span>전체보기</span>
					            <i class="ip-icon-uiselect-arrow"></i>
					        </a>
					        <ul class="option">
					            <li class="on"><a href="?">전체보기</a></li>
					            <li ><a href="?dr_center=A">관절센터</a></li>
					            <li ><a href="?dr_center=B">척추센터</a></li>
					            <li ><a href="?dr_clinic=A">외과</a></li>
					            <li ><a href="?dr_clinic=C">내과</a></li>
					            <li ><a href="?dr_clinic=D">소아청소년과</a></li>
					            <li ><a href="?dr_clinic=G">영상의학과</a></li>
					            <li ><a href="?dr_clinic=F">마취과</a></li>
					        </ul>
					    </div> -->
					<!-- </div> -->
					<div class="contain">
						<ul class="doctor-profiles">
                        	<li>
								<div class="panel">
									<div class="picture"><img src='http://sjsportshospital.com/common/doctor/15762168395373.jpg' class='block' alt='김진수' /></div>
									<p class="name">
										<small>정형외과</small>
										<span>김진수 병원장</span>
									</p>
									<a href="sub02_detail.php?Drno=1" class="btn-detail">
										<span>상세보기</span>
										<i class="ip-icon-doctor-detail"></i>
									</a>
								</div>
							</li>
                           	<li>
								<div class="panel">
									<div class="picture"><img src='http://sjsportshospital.com/common/doctor/15762168395373.jpg' class='block' alt='김진수' /></div>
									<p class="name">
										<small>정형외과</small>
										<span>김진수 병원장</span>
									</p>
									<a href="sub02_detail.php?Drno=1" class="btn-detail">
										<span>상세보기</span>
										<i class="ip-icon-doctor-detail"></i>
									</a>
								</div>
							</li>
                        </ul>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php include_once $GP -> INC_WWW . '/footer_ver2.php';?>