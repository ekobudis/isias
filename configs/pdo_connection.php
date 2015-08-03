<?php

abstract class DBConnection{
	protected $pdo_conn ;
	private $dsn ;

	function __construct(){
		include_once 'pdo_config.php';

        $this->dsn = 'mysql:host=' . DB_HOST . ';port=' . DB_PORT . ';dbname=' . DB_NAME ;

		$this->Start();
	}

    /*
	* Create PDO Connection
	*/
	protected function Start(){
		try{
			$this->pdo_conn = new PDO($this->dsn , DB_USER, DB_PASSWORD );
			$this->pdo_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		} catch(PDOException $ex){
			echo "Error : " . $ex->getMessage();
		}
	}

	/*
	* Insert, Create and Delete Query
	* @PARAM string $sql SQL Statement
	* @PARAM array $input Array values
	* @RETURN object $stmt returns a statement pdo object
	*/
	protected function RunQuery($sql , $input = null){
		$pdo = $this->pdo_conn;
        
		if(is_null($input)){
			$stmt = $pdo->prepare($sql);
			$stmt->execute();
		}else{
			try{
				$stmt = $pdo->prepare($sql);

				if ($stmt){
					$stmt->execute($input);
				} else {
					echo "Unable to prepare the query";
				}
			} catch(PDOException $ex){
				echo "Error : " . $ex->getMessage();
			}
		}

		return $stmt;
	}

	protected function UpdateQuery($table , $pkfield, $fields, $data){
		$pdo = $this->pdo_conn;

		$data_param = array();

		$update = '';

		foreach ($fields as $f ){
			if(!isset($data[$f]) || is_null($data[$f])){
				$v = 'NULL';
			} else {
				$v = ":$f";
				$data_param[$f] =$data[$f];
			}

			$update .= ", " . $f . "=" . $v;
		}

		$update = substr($up, 2);

		if(empty($data[$pkfield])){
			$sql = "INSERT INTO " . $table . " SET " . $update;
		}else {
			$data_param[$pkfield] = $data[$pkfield];
			$sql = "UPDATE " . $table . " SET " . $update . " WHERE " . $pkfield . "=" . $pkfield;
		}

		$stmt = $this->RunQuery($sql,$data_param);

		return $stmt->rowCount();

		/*if ($stmt->rowCount()==0){
			return false;
		}else{
			return $stmt->rowCount();
		}*/	
	}

}
