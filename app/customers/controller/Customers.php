<?php
    class Customers extends Controller{

        public function __construct(){
			parent::__construct();
		}		
        
        public function index(){
			$this->view('index');
		}

		public function create(){
			$this->view('create');
		}

		public function store(){}

		# Muestra la información completa de un cliente
		public function show(){
			$this->view('profile');
		}

		public function edit(){
			$this->view('edit');
		}

		public function update(){}

		public function delete(){}
    }

?>