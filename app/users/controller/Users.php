<?php 
	class Users extends Controller{
		private $userModel;

		public function __construct(){
			parent::__construct();
			$this->userModel = $this->model('User');
		}

		public function index(){
			$this->view('index');
		}

		public function create_resource(){ 
			$this->view('create-resource');
		}

		public function store(){
			if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register-customer'])){
				if(!empty($_POST['resource-name']) && !empty($_POST['resource-lastname']) && !empty($_POST['resource-document']) && !empty($_POST['resource-email'])){
					$param = [
						"name" 	   => trim($_POST['resource-name']),
						"lastname" => trim($_POST['resource-lastname']),
						"document" => trim($_POST['resource-document']),
						"email"	   => trim($_POST['resource-email']),
						"phone"	   => trim($_POST['resource-phone']),
						"address"  => trim($_POST['resource-address'])
					];
					if($this->model->addUser($param)){
						echo "Extio";
					}
				} 
			}
		}

		public function show(){}

		public function edit(){}

		public function update(){}

		public function delete(){}
	}

?>