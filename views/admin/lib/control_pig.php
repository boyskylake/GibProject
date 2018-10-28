<?php
	class Control{
		public function content($v=''){
			if(empty($v) || $v == "Index"){
				return require_once ('managepig/index.php');
			}else if($v == "stall"){
				return require_once ('managepig/stall.php');
			}else if($v == "addstall"){
				return require_once ('managepig/addstall.php');
			}else if($v == "editstall"){
				return require_once ('managepig/editstall.php');
			}else if($v == "delstall"){
				return require_once ('managepig/delstall.php');
			}else if($v == "process_addstall"){
				return require_once ('managepig/process_addstall.php');
			}else if($v == "process_editstall"){
				return require_once ('managepig/process_editstall.php');
			}else if($v == "editservice"){
				return require_once ('managepig/editservice.php');
			}else if($v == "process_editservice"){
				return require_once ('managepig/process_editservice.php');
			}else if($v == "delstall"){
				return require_once ('managepig/delstall.php');
			}else if($v == "pig"){
				return require_once ('managepig/pig.php');
			}else if($v == "addpig"){
				return require_once ('managepig/addpig.php');
			}else if($v == "process_addpig"){
				return require_once ('managepig/process_addpig.php');
			}else if($v == "editpig"){
				return require_once ('managepig/editpig.php');
			}else if($v == "process_editpig"){
				return require_once ('managepig/process_editpig.php');
			}else if($v == "delpig"){
				return require_once ('managepig/delpig.php');
			}else if($v == "vaccine"){
				return require_once ('managepig/vaccine.php');
			}else if($v == "addvac"){
				return require_once ('managepig/addvac.php');
			}else if($v == "editvac"){
				return require_once ('managepig/editvac.php');
			}else if($v == "process_editvac"){
				return require_once ('managepig/process_editvac.php');
			}else if($v == "delvac"){
				return require_once ('managepig/delvac.php');
			}else if($v == "process_addvac"){
				return require_once ('managepig/process_addvac.php');
			}else if($v == "vacView"){
				return require_once ('managepig/vacView.php');
			}else if($v == "stlView"){
				return require_once ('managepig/stlView.php');
			}else if($v == "pigallbuy"){
				return require_once ('managepig/pigallbuy.php');
			}else if($v == "buypig"){
				return require_once ('managepig/buypig.php');
			}else if($v == "process_buypig"){
				return require_once ('managepig/process_buypig.php');
			}
			else if($v == "typepig"){
				return require_once ('managepig/typepig.php');
			}else if($v == "vacspping"){
				return require_once ('managepig/vacspping.php');
			}else if($v == "process_vacsppig"){
				return require_once ('managepig/process_vacsppig.php');
			}else if($v == "typeView"){
				return require_once ('managepig/typeView.php');
			}else if($v == "edittype"){
				return require_once ('managepig/edittype.php');
			}else if($v == "deltype"){
				return require_once ('managepig/deltype.php');
			}else if($v == "addtpye"){
				return require_once ('managepig/addtpye.php');
			}else if($v == "process_addtype"){
				return require_once ('managepig/process_addtype.php');
			}else if($v == "process_edittype"){
				return require_once ('managepig/process_edittype.php');
			}
		}

		
		public function viewMenu(){
			return require_once ('menupig.php');
		}
		

	}
?>