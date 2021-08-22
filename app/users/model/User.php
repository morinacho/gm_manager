<?php  
	class User{
		private $db;
		
		public function __construct(){
			$this->db = new DataBase;
		}

		public function addUser($param){
			$this->db->query('INSERT INTO user (user_name, user_lastname, user_address, user_password, user_email, user_status, user_phone, user_type_id) VALUES ()');
		}

		public function getByEmail($email){
			$email =  $this->db->deleteSpecialChars($email,'email'); 
			$this->db->query('SELECT user_id, user_name, user_lastname, user_password, user_email, user_status
				              FROM  user WHERE user_email = :email');
			$this->db->bind(':email', $email); 

			return $this->db->getRecord();
		}

		public function userRecord($param){
			$this->db->query('INSERT INTO user (user_nick, user_email, user_password)
									 VALUES (:user_nick, :user_email, :user_password)');

			# Link values
			$this->db->bind(':user_nick', $param['user-nick']);
			$this->db->bind(':user_email', $param['user-email']);
			$this->db->bind(':user_password', $param['user-password']);

			# Run
			if($this->db->execute()){
				return true;
			}
			else{
				return false;
			}
		}
	}
