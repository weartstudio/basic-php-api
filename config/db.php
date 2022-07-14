<?php 
class db
{
	private $host = "79.139.62.188:3306";
	private $username = "wearthuc_boomi";
	private $password = "z7ATq7ukaFWxQP";
	private $dbname = "wearthuc_boomiapp";
	private $conn;

	// Connect to the Database
	public function connect()
	{
			$this->conn = null;

			try {
					$this->conn = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->username, $this->password);

					// get any error information while trying to connect
					$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			} catch (PDOException $e) {
					echo "Connection Error: " . $e->getMessage();
			}

			return $this->conn;
	}

}
