<?

CLASS Blog extends Dbconn
{
	private $DB;
	private $GP;
	function __construct($DB = array()) {
		global $C_DB, $GP;
		$this -> DB = (!empty($DB))? $DB : $C_DB;
		$this -> GP = $GP;
	}
	
	//desc	 : 블로그 수정
	// auth  : JH 2012-12-05 2012-11-06
	// param
	function Blog_Modi($args = '') {
		if (is_array($args)) foreach ($args as $k => $v) ${$k} = $v;
		
		$qry = "
			update
				tblBlog
			set
				tb_title = '$tb_title',
				tb_link = '$tb_link',
				tb_img = '$tb_img',
				tb_content = '$tb_content',	
				tb_date = '$tb_date',			
				tb_show = '$tb_show'
										
			where
				tb_idx = '$tb_idx'			
		";
		$rst =  $this -> DB -> execSqlUpdate($qry);
		return $rst;
	}
	
	// desc	 : 블로그 삭제
	// auth  : JH 2012-12-05 2012-11-06
	// param
	function Blog_Del($args = '') {
		if (is_array($args)) foreach ($args as $k => $v) ${$k} = $v;
		
		$qry = "
			delete from tblBlog where tb_idx = '$tb_idx'	
		";
		$rst =  $this -> DB -> execSqlUpdate($qry);
		return $rst;
	}
	
	function Blog_ImgUpdate($args = '') {
		if (is_array($args)) foreach ($args as $k => $v) ${$k} = $v;
		
		$addQry = "";
		if($type == "W") {
			$addQry = " tb_img = '' ";
		}
		
		$qry = "
			update
				tblBlog
			set				
				$addQry
			where
				tb_idx = '$tb_idx'			
		";
		$rst =  $this -> DB -> execSqlUpdate($qry);
		return $rst;
	}
	
	
	
	
	
	// desc	 : 블로그 정보
	// auth  : JH 2012-12-05 2012-11-06
	// param
	function Blog_Info($args = '') {
		if (is_array($args)) foreach ($args as $k => $v) ${$k} = $v;
		
		$qry = "
			select * from tblBlog where tb_idx = '$tb_idx'
		";
		$rst =  $this -> DB -> execSqlOneRow($qry);
		return $rst;
	}
	
	// desc	 : 블로그 등록
	// auth  : JH 2012-12-05 2012-11-06
	// param
	function Blog_Reg($args = '') {
		if (is_array($args)) foreach ($args as $k => $v) ${$k} = $v;
		

		$qry = "
			INSERT INTO
				tblBlog
				(
					tb_idx,
					tb_title,
					tb_link,
					tb_img,
					tb_content,	
					tb_date,				
					tb_show,
					tb_del_flag,
					tb_reg_date
				)
				VALUES
				(
					''		
					, '$tb_title'
					, '$tb_link'
					, '$tb_img'
					, '$tb_content'	
					, '$tb_date'				
					, '$tb_show'
					, 'N'
					,  NOW()
				)
			";
		
		$rst =  $this -> DB -> execSqlInsert($qry);
		return $rst;
	}
	
	
	// desc	 : 블로그 리스트
	// auth  : JH 2012-12-05 2012-11-06
	// param
	function Blog_List ($args = '') {
		global $C_Func;
		if (is_array($args)) foreach ($args as $k => $v) ${$k} = $v;

		global $C_ListClass;

		$tail = "";
		$addQry = " 1=1 ";
		
		if(!empty($tb_show)) {
			$addQry .= " AND ";
			$addQry .= " tb_show = '$tb_show' ";
		}
		
		
		if($tb_title != '') {
			$addQry .= "
				AND tb_title like '%$tb_title%' 
			";
		}

		if ($search_key && $search_content) {
			if (!empty($addQry)) {
				$addQry .= " AND ";
				$addQry .= " $search_key LIKE ('%$search_content%')";
			}
		}
		
		
	//	if($addQry) $addQry = implode(" AND ",$addQry);
			
		$args['show_row'] = $show_row;
		$args['show_page'] = 10;
		$args['q_idx'] = "tb_idx";
		$args['q_col'] = "*";
		$args['q_table'] = "tblBlog";
		$args['q_where'] = $addQry;
		$args['q_order'] = "tb_reg_date desc";
		$args['q_group'] = "";
		$args['tail'] = "s_date=" . $s_date . "&e_date=" . $e_date ."&serach_key=" . $search_key . "&search_content=" . $search_cotent ;
		$args['q_see'] = "";
		return $C_ListClass -> listInfo($args);
	}
	
	
	
	
	
	
}
?>