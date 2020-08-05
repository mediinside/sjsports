<?
	include_once($GP -> CLS."class.jhboard.php");
	include_once($GP -> CLS."class.slide.php");
	$C_Slide = new Slide();
	$C_JHBoard = new JHBoard();	

	//메인 공지사항
	function Main_Notice() {
		global $GP, $C_JHBoard, $C_Func;

		$args = '';
		$args['jb_code'] = "10";
		$args['limit']  = " limit 0,3 ";
		$args['main_show2'] = "B";  //게시/비게시
		$rst = $C_JHBoard->Board_Main_Data($args);
		$GP -> MEMBER_CONFIG_LEVEL[$mb_level];
		$args['mb_level'] = "5"; 
		
		$str = "";
		for($i=0; $i<count($rst); $i++) {
			$jb_idx					= $rst[$i]['jb_idx'];
			$jb_code				= $rst[$i]['jb_code'];
			$jb_title 			= $C_Func->strcut_utf8($rst[$i]['jb_title'], 45, true);
			$jb_reg_date 		= date("Y.m.d", strtotime($rst[$i]['jb_reg_date']));	
			
			$new_image = '<span class="new"></span>';
			//$new_icon = $C_Func->new_icon(1, $data_list[$i]['jb_reg_date'], $new_image);
			
			$jb_title = $depth_icon . $jb_title . $comment_count . $new_icon;
				
			
			$url = "";
			if($jb_code == "10") { 
				$url = "/intro/page05-1.html?jb_code=" . $jb_code . "&jb_idx=" . $jb_idx; 
			}	
			
			$str .= '
					<li><a href="'.$url.'">
							<dl>
								<dt class="subject">'.$jb_title.'<span class="new"></span></dt>
								<dd class="date">'.$jb_reg_date.'</dd>
							</dl>
						</a></li>
			';
		}
		return $str;
	}



	
	//메인 공지사항
	function Main_Photo($jb_code) {
		global $GP, $C_JHBoard, $C_Func;

		$args = '';
		$args['jb_code'] = $jb_code;
		$args['limit']  = " limit 0,4 ";
		$args['main_show2'] = "B";  //게시/비게시
		$rtn = $C_JHBoard->Board_Main_Data_Cnt($args);
		$num_idx = $rtn["cnt"];
		$rst = $C_JHBoard->Board_Main_Data($args);

		$str = "";
		for($i=0; $i<count($rst); $i++) {
			$jb_idx					= $rst[$i]['jb_idx'];
			$jb_code				= $rst[$i]['jb_code'];
			$jb_front_image			= $rst[$i]['jb_front_image'];
			$jb_etc1				= $rst[$i]['jb_etc1'];
			$jb_title 				= $C_Func->strcut_utf8($rst[$i]['jb_title'], 40, true, "");
			$jb_reg_date 			= date("Y.m.d", strtotime($rst[$i]['jb_reg_date']));	
			$jb_content				= $C_Func->dec_contents_edit($rst[$i]['jb_content']);
			$jb_content				= trim(strip_tags($jb_content));
			$jb_content 			= $C_Func->strcut_utf8($jb_content, 100, true, "...");		
			$jb_etc2 				= date("Y.m.d", strtotime($rst[$i]['jb_etc2']));	
			$jb_order				= $rst[$i]['jb_order'];
			
			$url = "";
			if($jb_code == "40") { 
				$url = "/intro/page05-2.html?jb_code=" . $jb_code . "&jb_idx=" . $jb_idx; 
			}else {
				$url = "/intro/page05.html?jb_code=" . $jb_code . "&jb_idx=" . $jb_idx; 
			}
			
			
			
			$img_src = '';
			if($jb_front_image != '') {
				$code_file = $GP->UP_IMG_SMARTEDITOR_URL. "/jb_${jb_code}/${jb_front_image}";
				$img_src = "<img src='" . $code_file. "' alt='" . $jb_title_ori . "'  class='block' >";
			}else{			
				$img_src = "<img src='/public/images/no_img.jpg' alt='' class='block' /";
			}
			
			
		
			
		
			if($jb_code =="20") {	
				$str .= '
							<li><a href="'.$url.'">
								<div class="picture">' . $img_src .'</div>
								<dl>
									<dt class="subject">'.$jb_title.'</dt>
									<dd class="contents">'.$jb_content.'</dd>
									<dd class="writer">NO.' . $num_idx--.'</dd>
									<dd class="date">
										<i class="clock"></i>
										<span>'.$jb_etc2.'</span>
									</dd>
								</dl>
							</a></li>
					';
			}else {
				$str .= '
							<li><a href="'.$url.'">
								<div class="picture">' . $img_src .'</div>
								<dl>
									<dt class="subject">'.$jb_title.'</dt>
									<dd class="contents">'.$jb_content.'</dd>
									<dd class="writer">'.$jb_etc1.'</dd>
									<dd class="date">
										<i class="clock"></i>
										<span>'.$jb_etc2.'</span>
									</dd>
								</dl>
							</a></li>
					';
				
			}
			
		}
		return $str;
	}
	

	
	
	function Main_Slide() {
		global $GP, $C_Slide, $C_Func;
		
		$args = '';
		$args['ts_idx'] =$ts_idx;
		$args['ts_type'] = "H";
		$args['limit']  = " limit 0,5 ";
		$rst = $C_Slide->Main_Slide_Show($args);
		
		$str = "<ul class='swiper' data-pager='true' data-auto-controls='true'>";
		$str1 = "";
		
		for($i=0; $i<count($rst); $i++) {
			$ts_title				= $rst[$i]['ts_title'];
			$ts_img 				= $rst[$i]['ts_img'];
			$ts_idx					= $rst[$i]['ts_idx'];
			$ts_t_img 				= $rst[$i]['ts_t_img'];
			$ts_m_img 				= $rst[$i]['ts_m_img'];
			$ts_link 				= $rst[$i]['ts_link'];
			$b_img = '';
			if($ts_img !=  '') {
				$b_img = $GP -> UP_SLIDE_URL . $ts_img;
			}else {
				$b_img = "";
			}
			
			
			$m_img = '';
			if($ts_m_img !=  '') {
				$m_img = $GP -> UP_SLIDE_URL . $ts_m_img;
			}else {
				$m_img = "";
			}
			
			$t_img = '';
			if($ts_t_img !=  '') {
				$t_img = $GP -> UP_SLIDE_URL . $ts_t_img;
			}else {
				$t_img = "";
			}
			
				if($ts_link == '') {
	
					$str .="
							<li>
									<div class='pc-show'><img src='" . $b_img . "' class='block' alt='' ></div>
									<div class='tb-show'><img src='" . $t_img . "'  alt='' class='block' /></div>
									<div class='mb-show'><img src='" . $m_img . "'  alt='' class='block' /></div>
							</li>
							
					";	
				}else {
					$str .="
							<li>
								<a href='" . $ts_link . "'>
									<div class='pc-show'><img src='" . $b_img . "' class='block' alt='' ></div>
									<div class='tb-show'><img src='" . $t_img . "'  alt='' class='block' /></div>
									<div class='mb-show'><img src='" . $m_img . "'  alt='' class='block' /></div>
								</a>
							</li>
								
					";	
				
				}
			}
						
		$str .= "</ul>";
		
		

		return $str;
	}


	
	function Header_Slide() {
		global $GP, $C_Slide, $C_Func;
		
		$args = '';
		$args['ts_idx'] =$ts_idx;
		$args['ts_type'] = "S";
		$args['limit']  = " limit 0,1 ";
		$rst = $C_Slide->Main_Slide_Show($args);
		
		$str = "	<div id='top-banner'>
						";
		$str1 = "";
		
		for($i=0; $i<count($rst); $i++) {
			$ts_title				= $rst[$i]['ts_title'];
			$ts_img 				= $rst[$i]['ts_img'];
			$ts_t_img 				= $rst[$i]['ts_t_img'];
			$ts_m_img 				= $rst[$i]['ts_m_img'];
			$ts_link 				= $rst[$i]['ts_link'];
			$ts_idx					= $rst[$i]['ts_idx'];
			$b_img = '';
			if($ts_img !=  '') {
				$b_img = $GP -> UP_SLIDE_URL . $ts_img;
			}else {
				$b_img = "";
			}
			
			
			$m_img = '';
			if($ts_m_img !=  '') {
				$m_img = $GP -> UP_SLIDE_URL . $ts_m_img;
			}else {
				$m_img = "";
			}
			
			$t_img = '';
			if($ts_t_img !=  '') {
				$t_img = $GP -> UP_SLIDE_URL . $ts_t_img;
			}else {
				$t_img = "";
			}
			
				if($ts_link != '') {
	
					$str .="	
							<p class='header toggle'>" . $ts_title . "</p>
								<div class='contain'>
									<a href='" . $ts_link . "'>
										<div class='pc-show'><img src='" . $b_img . "' class='block' alt='' ></div>
										<div class='tb-show'><img src='" . $t_img . "'  alt='' class='block' /></div>
										<div class='mb-show'><img src='" . $m_img . "'  alt='' class='block' /></div>
									</a>
								</div>
								<a href='javascript:void(0)' class='btn-toggle toggle'></a>
							
					";	
				}else {
					$str .="
							<p class='header toggle'>" . $ts_title . "</p>
								<div class='contain'>
									<div class='pc-show'><img src='" . $b_img . "' class='block' alt='' ></div>
									<div class='tb-show'><img src='" . $t_img . "'  alt='' class='block' /></div>
									<div class='mb-show'><img src='" . $m_img . "'  alt='' class='block' /></div>
								</div>
							<a href='javascript:void(0)' class='btn-toggle toggle'></a>
								
					";	
				
				}
			}
						
		$str .= "</div>";
		
		

		return $str;
	}

	
	

	

?>
