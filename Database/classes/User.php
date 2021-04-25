<?php
namespace App\classes;
/**
 * User Class
 */
class User
{
	public $db = null;

	public function __construct(\App\DBController $db)
	{
		if (!isset($db->con)) return null;
		$this->db=$db;
	}

	public function totalUser($table= "user")
	{
		// $query ;
		if ($query= $this->db->con->query(sprintf("SELECT * FROM %s", $table))) {
			$users = $query->fetch_array(MYSQLI_ASSOC);
			while ($users = $query->fetch_array(MYSQLI_ASSOC)) {
				foreach ($users as $user) {
					print_r($user);
				}
			}
			
		}
	}
	
}