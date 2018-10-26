<?php
	class controller
	{
		//tao bien $model
		public $model;
		public function __construct()
		{
			//khoi tao bien model lamot object cua class model()
			$this->model = new model(); 
		}

	} 
 ?>