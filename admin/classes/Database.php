<?php

/**
 * 
 */
class Database
{
	
	private $con;
	public function connect(){
		$this->con = new Mysqli("us-cdbr-east-04.cleardb.com", "ba375438d13dc7", "226380d0", "heroku_559c85e9e0aeee8");
		return $this->con;
	}
}

?>
