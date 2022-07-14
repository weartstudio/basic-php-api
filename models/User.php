<?php 
include_once('Model.php');

class User extends Model
{
	// DB Related
	private $table = "users";

	// user properties
	public $id;
	public $user;
	public $pass;
	public $mail;

	public function get_all_user()
	{
		$query = "SELECT * FROM {$this->table}";

		$stmt = $this->conn->prepare($query);
		$stmt->execute();

		return $stmt;
	}

	public function get_user_login_token()
	{
		$query = "SELECT token FROM {$this->table} WHERE name = ? AND pass = ?";

		$stmt = $this->conn->prepare($query);
		$stmt->execute();

		return $stmt;
	}

}
