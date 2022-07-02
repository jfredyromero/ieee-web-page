<?php
class DBConnection
{
	private $host = 'localhost';
	private $dbname = 'ieee';
	private $user = 'ieee';
	private $password = '*dbi333*';
	private $charset = 'utf8';
	private $db;

	public function __construct()
	{
		try {
			$this->db = new PDO("mysql:host=$this->host;dbname=$this->dbname;charset=$this->charset", $this->user, $this->password);
		} catch (Exception $e) {
			throw new Exception($e->getMessage());
		}
	}

	public function getConnection()
	{
		try {
			return $this->db;
		} catch (Exception $e) {
			throw new Exception($e->getMessage());
		}
	}

	public function closeConnection()
	{
		$this->db = null;
	}

	public function getData($query)
	{
		$conn = mysqli_connect($this->host, $this->user, $this->password, $this->dbname);
		mysqli_set_charset($conn, "utf8");
		$result = mysqli_query($conn, $query);
		if (!$result) {
			die("Database access failed");
		}
		$data = $result->fetch_assoc();
		return $data;
	}
}
