<?php
namespace App;
/**
 * Database Controller
 */
class DBController
{
	protected $host = 'localhost';  
	protected $username = 'shopeeuser';  
	protected $password = 'shopeepass';  
	protected $database = 'shopee';

	public $con = null;

	public function __construct()
	{
		$this->con =  new \mysqli($this->host, $this->username, $this->password, $this->database);

		if ($this->con->connect_error) {
			echo "Failed" . $this->con->connect_error;
		}
	}//construct end

	public function __destruct()
  {
      $this->closeConnection();
  }
 //for mysqli closing connection
  protected function closeConnection()
  {
      if ($this->con != null) {
        $this->con->close();
        $this->con = null;
      }
  }
}