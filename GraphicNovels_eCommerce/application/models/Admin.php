<?php

class Admin extends CI_Model {
	function login($admin_details) {
		$query = "SELECT * FROM admins WHERE admins.email = ?"; 
		$values = array($admin_details['email']); 
		$record = $this->db->query($query,$values)->row_array();
		if (!empty($record)) {
			$encrypted_password = md5($admin_details['password'], $record['salt']);
			if ($record['password'] == $encrypted_password) {
				return true; 
			} else {
				echo 'Invalid email.'; 
				return false; 
			}
		} else {
			echo 'Admin email not found.';
			return false; 
		}
	}
}

?>