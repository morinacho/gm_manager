<?php
    class Customers extends Controller{
		private $customerModel;
        
		public function __construct(){
			parent::__construct();
			$this->customerModel = $this->model('Customer');
		}		
        
        public function index(){
			$param = [ 'customers' => $this->customerModel->getCustomers()];
			$this->view('index', $param);
		}

		public function create(){
			$this->view('create');
		}

		public function store(){
			if ($_SERVER['REQUEST_METHOD'] == 'POST' &&  isset($_POST['register-customer'])){
				if(!empty($_POST['customer-name']) && !empty($_POST['customer-lastname']) 
					&& !empty($_POST['customer-document']) && !empty($_POST['customer-phone']) && !empty($_POST['customer-mail'])){
					$param = [
						'name'    => trim($_POST['customer-name']),
						'lastname' => trim($_POST['customer-lastname']),
						'document' => trim($_POST['customer-document']),
						'phone'	   => trim($_POST['customer-phone']),
						'email'	   => trim($_POST['customer-email'])
					];

					//$this->customerModel->addCustomer($param); 

					if($this->customerModel->addCustomer($param)){
						echo "Exito";
					}else{
						echo "No anda";
					}
					
				} 
			}
		}
		# Muestra la información completa de un cliente
		public function show($customerDocument){
			$param = [ 'customer' => $this->customerModel->getCustomerByDocument($customerDocument)];
			$this->view('profile', $param);
		}

		public function edit($customerDocument){
			$param = [ 'customer' => $this->customerModel->getCustomerByDocument($customerDocument)];
			$this->view('edit', $param);
		}

		public function update(){}

		public function delete(){}
    }

?>