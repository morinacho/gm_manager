<?php 
	class Users extends Controller{
		 
		public function __construct(){
			parent::__construct();
		}

		public function index(){
			$this->view('index');
		}

		public function create_resource(){ 
			$this->view('create-resource');
		}

		public function store(){}

		public function show(){}

		public function edit(){}

		public function update(){}

		public function delete(){}
	}

?>