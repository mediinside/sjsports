<?php
	include_once($GP -> CLS."class.jhboard.php");
	include_once($GP -> CLS."/class.popup.php");
	include_once($GP -> CLS."class.slide.php");
	$C_Slide = new Slide();
	$C_JHBoard = new JHBoard();	
	$C_Popup 	= new Popup();

	//푸터 공지사항
	function Main_Notice($jb_code) {
		global $GP, $C_JHBoard, $C_Func;

		$args = '';
		$args['jb_code1'] = '10';
		$args['jb_code2'] = '40';
		$args['limit']  = " limit 0,4 ";
		$args['main_show2'] = "B";  //게시/비게시
		$rst = $C_JHBoard->Board_Main_Data($args);
		$GP -> MEMBER_CONFIG_LEVEL[$mb_level];
		$args['mb_level'] = "5"; 
		
		$str = "";
		for($i=0; $i<count($rst); $i++) {
			$jb_idx					= $rst[$i]['jb_idx'];
			$jb_code				= $rst[$i]['jb_code'];
			$jb_title 			= $C_Func->strcut_utf8($rst[$i]['jb_title'], 100, true);
			$jb_reg_date 		= date("Y.m.d", strtotime($rst[$i]['jb_reg_date']));
			$jb_content				= $C_Func->dec_contents_edit($rst[$i]['jb_content']);
			$jb_content				= trim(strip_tags($jb_content));
			$jb_content 			= $C_Func->strcut_utf8($jb_content, 100, true, "...");	
			$jb_etc2 				= date("Y.m.d", strtotime($rst[$i]['jb_etc2']));			
			
	//		$new_image = '<span class="new"></span>';
	//		$new_icon = $C_Func->new_icon(1, $rst[$i]['jb_reg_date'], $new_image);
			
	//		$jb_title = $depth_icon .'<span class="subject">'. $jb_title .'</span>'. $comment_count . $new_icon;
				
			
			$url = "";
			if($jb_code == "10") { 
				$url = "/club/page01.php?jb_code=" . $jb_code . "&jb_idx=" . $jb_idx; 
				$cate = 'NEWS';
			}else if($jb_code == "40"){
				$url = "/club/page04.php?jb_code=" . $jb_code . "&jb_idx=" . $jb_idx; 
				$cate = 'REVIEW';
			}
			
			$str .= '<li>
						 <a href="'.$url.'"><strong class="news_list_tit">' . $jb_title .'</strong><span class="upload_date">' . $jb_etc2 .'</span><span class="news_category">'.$cate.'</span></a>
					</li>';
		}
		return $str;
	}

	//푸터 공지사항 모바일
	function Main_Notice_Mobile($jb_code) {
		global $GP, $C_JHBoard, $C_Func;

		$args = '';
		$args['jb_code1'] = '10';
		$args['jb_code2'] = '40';
		$args['limit']  = " limit 0,4 ";
		$args['main_show2'] = "B";  //게시/비게시
		$rst = $C_JHBoard->Board_Main_Data($args);
		$GP -> MEMBER_CONFIG_LEVEL[$mb_level];
		$args['mb_level'] = "5"; 
		
		$str = "";
		for($i=0; $i<count($rst); $i++) {
			$jb_idx					= $rst[$i]['jb_idx'];
			$jb_code				= $rst[$i]['jb_code'];
			$jb_title 			= $C_Func->strcut_utf8($rst[$i]['jb_title'], 100, true);
			$jb_reg_date 		= date("Y.m.d", strtotime($rst[$i]['jb_reg_date']));
			$jb_content				= $C_Func->dec_contents_edit($rst[$i]['jb_content']);
			$jb_content				= trim(strip_tags($jb_content));
			$jb_content 			= $C_Func->strcut_utf8($jb_content, 100, true, "...");	
			$jb_etc2 				= date("Y.m.d", strtotime($rst[$i]['jb_etc2']));			
			
	//		$new_image = '<span class="new"></span>';
	//		$new_icon = $C_Func->new_icon(1, $rst[$i]['jb_reg_date'], $new_image);
			
	//		$jb_title = $depth_icon .'<span class="subject">'. $jb_title .'</span>'. $comment_count . $new_icon;
				
			
			$url = "";
			if($jb_code == "10") { 
				$url = "/m/club/page01.php?jb_code=" . $jb_code . "&jb_idx=" . $jb_idx; 
				$cate = 'NEWS';
			}else if($jb_code == "40"){
				$url = "/m/club/page04.php?jb_code=" . $jb_code . "&jb_idx=" . $jb_idx; 
				$cate = 'REVIEW';
			}
			
			$str .= '<li>
						 <a href="'.$url.'"><strong class="news_list_tit">' . $jb_title .'</strong><span class="upload_date">' . $jb_etc2 .'</span><span class="news_category">'.$cate.'</span></a>
					</li>';
		}
		return $str;
	}
	
	//삼성본미디어
	function Main_Photo() {
		global $GP, $C_JHBoard, $C_Func;

		$args = '';
		$args['jb_code'] = "60";
		$args['limit']  = " limit 0,1 ";
		$args['main_check'] = "Y";
		$args['main_show2'] = "B";  //게시/비게시
		$rst = $C_JHBoard->Board_Main_Data($args);

		$str = "";
		for($i=0; $i<count($rst); $i++) {
			$jb_idx					= $rst[$i]['jb_idx'];
			$jb_code				= $rst[$i]['jb_code'];
			$jb_type				= $rst[$i]['jb_type'];
			$jb_name				= $rst[$i]['jb_name'];
			$jb_front_image			= $rst[$i]['jb_front_image'];
			$jb_etc1				= $rst[$i]['jb_etc1'];
			$jb_title 				= $C_Func->strcut_utf8($rst[$i]['jb_title'], 60, true, "");
			$jb_reg_date 			= date("Y.m.d", strtotime($rst[$i]['jb_reg_date']));	
			$jb_content				= $C_Func->dec_contents_edit($rst[$i]['jb_content']);
			$jb_content				= trim(strip_tags($jb_content));
			$jb_content 			= $C_Func->strcut_utf8($jb_content, 140, true, "...");		
			$jb_etc2 				= date("Y.m.d", strtotime($rst[$i]['jb_etc2']));	
			$jb_order				= $rst[$i]['jb_order'];
			
			if(strlen($jb_name) > 6) {
				$jb_name 				=  $C_Func->blindInfo($jb_name, 6);
			}else{
				$jb_name 				=  $C_Func->blindInfo($jb_name, 3);	
			}
			
			$url = "";
			if($jb_code == "60") { 
				$url = "/media/page04.html?jb_code=" . $jb_code . "&jb_idx=" . $jb_idx; 
			}
			
			$img_src = '';
			if($jb_front_image != '') {
				$code_file = $GP->UP_IMG_SMARTEDITOR_URL. "/jb_${jb_code}/${jb_front_image}";
				$img_src = "<img src='" . $code_file. "' alt='" . $jb_title_ori . "'  class='block' >";
			}else{			
				$img_src = "<img src='/public/images/default.jpg' alt='' class='block' />";
			}

				$str .= '
						<div class="display">
						<a href="'.$url.'" class="btn-detail">
							<div class="picture-panel">
								<div class="picture">
									' . $img_src .'
								</div>
							</div>
						</a>
							<div class="panel">
								<div class="header">
									<small>알고보는 건강정보</small>
									<p class="subject">' . $jb_title .'</p>
								</div>
								<div class="contents">' . $jb_content .'</div>
								<a href="'.$url.'" class="btn-detail">
									<span>자세히보기</span>
									<i class="ip-icon-media-detail"></i>
								</a>
							</div>
						</div>
					';
			
		}
		return $str;
	}
/*	
	function Main_Popup() {
		global $GP, $C_Popup, $C_Func;

		$args = '';
		$rst = $C_Popup->PopUp_Show($args);

		
		$str = "";
		for($i=0; $i<count($rst); $i++) {
			$pop_idx				= $rst[$i]['pop_idx'];
			$pop_file_name			= $rst[$i]['pop_file_name'];
			$pop_link_url			= $rst[$i]['pop_link_url'];			
			
			$url = $GP -> UP_POPUP_URL .$pop_file_name;	
			//이미지 클릭시 이동할 페이지
			if($pop_link_url != "") {				
				$pop_link_url = str_replace('http://samsungbon.com','',$pop_link_url);				
			}
			
			$str .= '<li><a href="'.$pop_link_url.'"><img src="'.$url.'" class="block" alt="10월 휴진안내" /></a></li>';
		}
		return $str;
	}
*/	
	function Main_Slide() {
		global $GP, $C_Slide, $C_Func;
		
		$args = '';
		$args['ts_idx'] =$ts_idx;
		$rst = $C_Slide->Main_Slide_Show($args);


		$ts_title_top				= $rst[0]['ts_title'];
		$ts_img_top 				= $rst[0]['ts_img'];
		$ts_idx_top					= $rst[0]['ts_idx'];
		$ts_t_img_top 				= $rst[0]['ts_t_img'];
		$ts_m_img_top 				= $rst[0]['ts_m_img'];
		$ts_link_top 				= $rst[0]['ts_link'];
	
		for($i=0; $i<count($rst); $i++) {
			$ts_title				= $rst[$i]['ts_title'];
			$ts_idx					= $rst[$i]['ts_idx'];
			$ts_img 				= $rst[$i]['ts_img'];
			$ts_t_img 				= $rst[$i]['ts_t_img'];
			$ts_m_img 				= $rst[$i]['ts_m_img'];
			$ts_img2 				= $rst[$i]['ts_img2'];
			$ts_t_img2 				= $rst[$i]['ts_t_img2'];
			$ts_m_img2 				= $rst[$i]['ts_m_img2'];
			$ts_link 				= $rst[$i]['ts_link'];
			$ts_link2 				= $rst[$i]['ts_link2'];
			$ts_link3 				= $rst[$i]['ts_link3'];
			
			$b_img = '';
			if($ts_img !=  '') {
				$b_img = $GP -> UP_SLIDE_URL . $ts_img;
			}
			
			$m_img = '';
			if($ts_img2 !=  '') {
				$m_img = $GP -> UP_SLIDE_URL . $ts_img2;
			}
			
					
					$str .="
								<li class='swiper-slide' style='background:url(".$b_img.") no-repeat 50%;'>
									<a href='". $ts_link ."' target='_blank'>
										<img src='".$m_img."' alt=''>
									</a>
								</li>
						";	

				
			}
						

		return $str;
	}

?>
