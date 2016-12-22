<?php

class HomeController extends PageController{
	
	// Properties
	private $latestProducts;


	//Methods
	public function __construct($dbc) {

		// Make sure the PageControllers constructor still runs
		parent::__construct();

		$this->title = 'Home page';

		// Prepare meta description
		$this->metaDesc = 'Check out our New Programmes.';

		

		

		
	}



	public function buildHTML(){
		echo $this->plates->render('home',$this->data);
	}

	

	

}