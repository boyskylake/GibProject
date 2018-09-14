<?php
	class Control{
		public function content($v=''){
			if(empty($v) || $v == "Index"){
				return require_once ('activity/data_act.php');
			}else if($v == "photo_act"){
				return require_once ('activity/photo_act.php');
			}else if($v == "data_act_add"){
				return require_once ('activity/data_act_add.php');
			}else if($v == "data_act_save"){
				return require_once ('activity/data_act_save.php');
			}else if($v == "photo_add"){
				return require_once ('activity/photo_add.php');
			}else if($v == "photo_save"){
				return require_once ('activity/photo_save.php');
			}else if($v == "data_status"){
				return require_once ('activity/data_status.php');
			}else if($v == "data_act_edit"){
				return require_once ('activity/data_act_edit.php');
			}else if($v == "data_act_del"){
				return require_once ('activity/data_act_del.php');
			}else if($v == "data_act_edit_save"){
				return require_once ('activity/data_act_edit_save.php');
			}else if($v == "photo_title_page"){
				return require_once ('activity/photo_title_page.php');
			}else if($v == "photo_del"){
				return require_once ('activity/photo_del.php');
			}
		}

		
		public function viewMenu(){
			return require_once ('menu.php');
		}
		

	}
?>