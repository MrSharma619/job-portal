<?php
class Database{
	private $host = DB_HOST;
	private $user = DB_USER;
	private $pass = DB_PASS;
	private $dbname = DB_NAME;

	private$dbh;
	private$error;
	private$stmt;

	public function __construct(){
		//set DSN(connection)
		$dsn = 'mysql:host='.$this->host.';dbname='.$this->dbname;

		//set options
		$options = array(
			PDO::ATTR_PERSISTENT => true,
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
		);

		//	PDO instance
		try{
			$this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
		}
		catch(PDOException $e){
			$this->error = $e->getMessage();
		}
	}


	public function query($query)
	{
		$this->stmt = $this->dbh->prepare($query);
		# code...
	}

	public function bind($param, $value, $type = null)
	{
		if(is_null($type)){
			switch (true) {
				case is_int($value):
					$type = PDO::PARAM_INT;
					# code...
					break;
				case is_bool($value):
					$type = PDO::PARAM_BOOL;
					# code...
					break;
					case is_null($value):
					$type = PDO::PARAM_NULL;
					# code...
					break;
				default:
				$type = PDO::PARAM_STR;
					# code...
					break;
			}
		}
		$this->stmt->bindValue($param, $value, $type);
		# code...
	}

	public function execute()
	{
		return $this->stmt->execute();
		# code...
	}
	public function resultSet()
	{
		$this->execute();
		return $this->stmt->fetchAll(PDO::FETCH_OBJ);
		# code...
	}

	public function single()
	{
		$this->execute();
		return $this->stmt->fetch(PDO::FETCH_OBJ);
		# code...
	}

}

?>