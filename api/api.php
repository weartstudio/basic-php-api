<?php 

class Api
{
	private $database;
	protected $debug = true;
	protected $db;
	protected $result;
	protected $rows;
	
	public function __construct()
	{

		if($this->debug){
			ini_set('display_errors',1);
			error_reporting(E_ALL);
		}
		
		$this->database = new db();
		$this->db = $this->database->connect();
	}

	public function show_json()
	{
		$this->rows = $this->result->rowCount();
		if($this->rows > 0)
		{
			$show_json = $this->result->fetchAll(PDO::FETCH_ASSOC);
			echo json_encode($show_json, JSON_PRETTY_PRINT);
		}
		else
		{
			echo json_encode(["error" => "Not Found"]);
		}
	}

}