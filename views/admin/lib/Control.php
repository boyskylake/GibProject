<?php
	class Control{
		
		public function content($v=''){
			if(empty($v) || $v == "Index" || $v == "account"){
				return require_once ('account/summary.php');
			}else if($v == "CreateBuy"){
				return require_once ('account/buy.php');
			}else if($v == "CreateRecieve"){
				return require_once ('account/recieve.php');
			}else if($v == "ReportRecieve"){
				return require_once ('account/report_recieve.php');
			}else if($v == "ReportBuy"){
				return require_once ('account/report_buy.php');
			}else if($v == "ManageRecieve"){
				return require_once ('account/manage_recieve.php');
			}else if($v == "ManageBuy"){
				return require_once ('account/manage_buy.php');
			}else if($v == "DayDetail"){
				return require_once ('account/daydetail.php');
			}else if($v == "EditRecieve"){
				return require_once ('account/edit_recieve.php');
			}else if($v == "EditBuy"){
				return require_once ('account/edit_buy.php');
			}else if($v == "DelRecieve"){
				return require_once ('account/del_recieve.php');
			}else if($v == "DelBuy"){
				return require_once ('account/del_buy.php');
			}else if($v == "RDetail"){
				return require_once ('account/Rdetail.php');
			}
		}
		
		public function checkLevel($level){
			if($level == "ADMIN"){
				return true;
			}else{
				return false;
			}
		}
		
		public function viewMenu(){
			return require_once ('account/menu.php');
		}
		
		public function viewLogin(){
			return require_once ('account/login.php');
		}
	}
?>