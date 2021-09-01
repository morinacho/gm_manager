<?php  
	class Customer{
		private $db;
		
		public function __construct(){
			$this->db = new DataBase;
		}

		public function getCustomers(){
			$this->db->query('SELECT client_document, client_name, client_lastname, client_email, client_phone FROM client');
			return $this->db->getRecords();
		}

		public function getCustomerByDocument($customerDocument){
			$this->db->query('SELECT c.client_document, c.client_name, c.user_lastname, c.client_email, c.client_phone,
							  FROM client c
							  WHERE user_document = :document');
			$this->db->bind(':document', $customerDocument);
			return $this->db->getRecord();
		}
		
		public function getCustomerId($document){
			$this->db->query('SELECT client_id FROM client WHERE client_document = :document');
			$this->db->bind(':document', $document);
			return ($this->db->getRecord())->client_id;
		}

		public function getCustomerByEmail($email){
			$email =  $this->db->deleteSpecialChars($email,'email'); 
			$this->db->query('SELECT client_id, client_name, client_lastname, client_password, client_email, client_status FROM  client WHERE client_email = :email');
			$this->db->bind(':email', $email);  
			return $this->db->getRecord();
		}

        public function addCustomer($param){
			$document = $param['document'];
			$this->db->query("INSERT INTO client (client_name,client_lastname,client_document,client_phone,client_email)
							  VALUES(:name,:lastname,:document,:phone,:email);");
			$this->db->bind(':name', $param['name']);
			$this->db->bind(':lastname', $param['lastname']);
			$this->db->bind(':document', $param['document']);
			$this->db->bind(':phone', $param['phone']);
			$this->db->bind(':email', $param['email']);

			return $this->db->execute() ? $this->getCustomerId($document) : NULL;
        }
	}
?>
