<?php

class Admin extends CI_Model {
	function login($admin_details) {
		$query = "SELECT * FROM admins WHERE admins.email = ?"; 
		$values = array($admin_details['email']); 
		$record = $this->db->query($query,$values)->row_array();
		// var_dump($admin_details);
		if (!empty($record)) {
			// var_dump($record);
			$encrypted_password = md5($admin_details['password'].''.$record['salt']);
			// echo md5('squash'.''.$record['salt']).'<br>';
			// echo $encrypted_password;
			if ($record['password'] == $encrypted_password) {
				return true; 
			} else {
				echo 'Invalid password.'; 
				return false; 
			}
		} else {
			echo 'Admin email not found.';
			return false; 
		}
	}
}

?>