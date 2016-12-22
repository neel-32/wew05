<?php

class BlogController extends PageController{

	//Methods
	public function __construct($dbc) {

		parent::__construct();

		$this->dbc = $dbc;

		// Get all posts
		$this->getAllPosts();

		

		
	}



	public function buildHTML(){
		echo $this->plates->render('blog',$this->data);
	}

	private function getAllPosts() {

		// SQL select all data from the posts table
		$sql = "SELECT * FROM posts";


		// Run the query and capture result
		$result = $this->dbc->query($sql);



		// Extra the data via $result = $result->fetch_all(MYSQLI_ASSOC)
		$result = $result->fetch_all(MYSQLI_ASSOC);

		$this->data['allPosts'] = $result;

	}

	

	

}
