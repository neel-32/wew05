<?php

class EditPostController extends PageController {

	public function __construct ($dbc) {

	parent::__construct();

		$this->dbc = $dbc;

		//Did the user submit the edit form?
		if( isset($_POST['edit-post']) ){
			$this->processPostEdit();
		}

		// Get info about the post
		$this->getPostInfo();
	}
	
	public function buildHTML(){

		echo $this->plates->render('edit-post', $this->data);
	}



	private function getPostInfo() {

		// Get the POST ID from the GET array
		$postID = $this->dbc->real_escape_string($_GET['id']);

		// Get the user ID
		$userID = $_SESSION['id'];

		// Prepare the query
		$sql = "SELECT title, description
				FROM posts
				WHERE id = $postID
				AND user_id = $userID ";

		// Run the query
		$result = $this->dbc->query($sql);

		// If the query failed
		if( !$result || $result->num_rows == 0  ) {
			header("Location: index.php?page=post&postid=$postID");
		} else {

			// What if the user has submited the form?
			// We don't want to close the changes
			if( isset($_POST['edit-post']) ){
				// Use the form data
				$this->data['post'] = $_POST;

				// Use the original title
				$result = $result->fetch_assoc();
				$this->data['title'] = $result['title'];


			} else {
				// Use the database data
				$result = $result->fetch_assoc();

				$this->data['post'] = $result;

				$this->data['title'] = $result['title'];
			}

		}
	}

	private function processPostEdit() {
		
		// Validation
		$totalErrors = 0;

		// Make life easy
		$title = $_POST['title'];
		$desc = $_POST['description'];

		// Title
		if ( strlen($title) > 100 ){
			$totalErrors++;
			$this->data['titleError'] = 'At most 100 characters please';
		}

		// Description
		if ( strlen($desc) > 100 ){
			$totalErrors++;
			$this->data['descError'] = 'At most 1000 characters please';
		}

		// If there are no errors
		if( $totalErrors == 0 ) {

			// Filter the query
			$title = $this->dbc->real_escape_string($title);
			$desc = $this->dbc->real_escape_string($desc);
			$postID = $this->dbc->real_escape_string($_GET['id']);
			$userID = $_SESSION['id'];

			// Prepare the SQL
			$sql = "UPDATE posts
					SET title = '$title',
						description = '$desc'
					WHERE id = $postID";

			if ($_SESSION['privilege'] != 'admin' ) {
			$sql .= " AND user_id = $userID";
		}

			$this->dbc->query($sql);

			// Redirect the user to the post page
			header("Location: index.php?page=blog");

		}

	}
}






















