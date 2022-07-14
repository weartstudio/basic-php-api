<?php 
include_once('../api.php');
include_once('../../config/cors.php');
include_once('../../config/db.php');

include_once('../../models/User.php');

class Login extends Api
{

	public function run() 
  {
		$user = new User($this->db);
		$this->result = $user->get_all_user();
		$this->rows = $this->result->rowCount();
	} 

}


$login = new Login();
$login->run();
$login->show_json();

