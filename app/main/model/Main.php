<?php
    class Main extends Controller{
        private $db;
		
		public function __construct(){
			$this->db = new DataBase;
        }

        public function getUserOptions($userId){
            $this->db->query('SELECT op.option_desc, op.option_icon 
                              FROM option op 
                              INNER JOIN option_has_user ou
                              ON op.option_id = ou.option_id
                              INNER JOIN user u
                              ON ou.user_id = u.user_id
                              WHERE u.user_id = :user_id 
            ');
            $this->db->bind(':user_id', $userId);
            return $this->db->getRecords();
        }

        public function getOptionActions(){

        }

    }
?>