<?php
    class Notices extends Controller{

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

		public function show(){}

		public function edit(){}

		public function update(){}

		public function delete(){}
    }

?>