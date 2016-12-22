<?php
class NewPostController extends PageController {
	
	public function __construct($dbc) {
		parent::__construct();
		$this->dbc = $dbc;

		$this->mustBeLoggedIn();
		
		// Did the user submit the add post form?
		if( isset($_POST['create-post']) ) {

			$this->processNewPost();
		}
		
	}
	public function buildHTML() {
		echo $this->plates->render('create-post', $this->data);
	}
	
	private function processNewPost() {
		// Validate the comment
		$totalErrors = 0;
		// Minimum length
		if( strlen($_POST['title']) == 0  )  {
			$this->data['titleError'] = 'Required';
			$totalErrors++;
		}elseif( strlen( $_POST['title'] ) >100 ) {
			$this->data['titleMessage'] = 'Cannot be more than 100 characters';
			$totalErrors++;
		}

		if( strlen($_POST['name']) == 0  )  {
			$this->data['nameError'] = 'Required';
			$totalErrors++;

		}


		//Description
		if( strlen($_POST['desc']) == 0  )  {
			$this->data['descError'] = 'Required';
			$totalErrors++;

		}


		// Maximum length (1000)
		// If passed, add to database
		if( $totalErrors == 0 ) {
			
			// Filter the comment
			$title = $this->dbc->real_escape_string($_POST['title']);
			$desc = $this->dbc->real_escape_string($_POST['desc']);
			

			//Get the ID of logged in user
			$userID = $_SESSION['id'];
			
			// Prepare SQL
			$sql = "INSERT INTO posts (title, description, user_id)
					VALUES ('$title', '$desc', $userID)";

			// Run the SQL
			$this->dbc->query($sql);

			// Redirect to the post page
			header('Location: index.php?page=blog');

			// // If the query failed
			// if (!$result || $result->num_rows == 0 ) {
			// 	// Redirect user to 404 page
			// 	header('Location: index.php?page=404');
			// } else {
			// 	// Works!
			// 	$this->data['create-post'] = $result-> fetch_assoc();
			// }

		}
	}
	
}