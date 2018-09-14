<?php
	class Control{
		public function content($v=''){
			if(empty($v) || $v == "Index"){
				return require_once ('general/index.php');
			}else if($v == "service"){
				return require_once ('general/service.php');
			}else if($v == "about"){
				return require_once ('general/about.php');
			}else if($v == "Contact"){
				return require_once ('general/contact.php');
			}else if($v == "team"){
				return require_once ('general/team.php');
			}else if($v == "addservice"){
				return require_once ('general/addservice.php');
			}else if($v == "process_addservice"){
				return require_once ('general/process_addservice.php');
			}else if($v == "editservice"){
				return require_once ('general/editservice.php');
			}else if($v == "process_editservice"){
				return require_once ('general/process_editservice.php');
			}else if($v == "delservice"){
				return require_once ('general/delservice.php');
			}else if($v == "addabout"){
				return require_once ('general/addabout.php');
			}else if($v == "process_addabout"){
				return require_once ('general/process_addabout.php');
			}else if($v == "editabout"){
				return require_once ('general/editabout.php');
			}else if($v == "process_editabout"){
				return require_once ('general/process_editabout.php');
			}else if($v == "delabout"){
				return require_once ('general/delabout.php');
			}else if($v == "addteam"){
				return require_once ('general/addteam.php');
			}else if($v == "process_addteam"){
				return require_once ('general/process_addteam.php');
			}else if($v == "editteam"){
				return require_once ('general/editteam.php');
			}else if($v == "process_editteam"){
				return require_once ('general/process_editteam.php');
			}else if($v == "delteam"){
				return require_once ('general/delteam.php');
			}else if($v == "delcontect"){
				return require_once ('general/delcontect.php');
			}
		}

		
		public function viewMenu(){
			return require_once ('menu.php');
		}
		

	}
?>