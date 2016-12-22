<?php

class SignupController extends PageController{

	private $firstNameMessage;
	private $lastnameMessage;
	private $emailMessage;
	private $confirmEmailMessage;
	private $passwordMessage;
	private $confirmPasswordMessage;

	//Methods
	public function __construct($dbc) {
		parent::__construct();
		// Save the database connection for later
		$this->dbc = $dbc;


		// If the user has submitted the registration form
		if( isset($_POST['sign-up']) ) {
			$this->validateRegistrationForm();
		}
		
	}



	public function buildHTML(){
		// Instantiate (create instance of) Plates library
		$plates = new League\Plates\Engine('app/templates');

		$data = [];

		if($this->firstNameMessage != ''){
			$data['firstNameMessage'] = $this->firstNameMessage;
		}

		if($this->firstNameMessage != ''){
			$data['lastnameMessage'] = $this->lastnameMessage;
		}

		if($this->emailMessage != ''){
			$data['emailMessage'] = $this->emailMessage;
		}

		if($this->confirmEmailMessage != ''){
			$data['confirmEmailMessage'] = $this->confirmEmailMessage;
		}

		if($this->passwordMessage != ''){
			$data['passwordMessage'] = $this->passwordMessage;
		}

		if($this->confirmPasswordMessage != ''){
			$data['confirmPasswordMessage'] = $this->confirmPasswordMessage;
		}


		echo $this->plates->render('sign-up', $data);

	}

	public function validateRegistrationForm(){

		$totalError = 0;

		//Validate FirstName
		//First Name is required
		if($_POST['firstname'] == ''){
			//Firstname field is empty
			$this->firstNameMessage = 'First Name is required';
			$totalError++;
		}

		//Validate LastName
		//Last Name is required
		if($_POST['lastname'] == ''){
			//Firstname field is empty
			$this->lastnameMessage = 'Last Name is required';
			$totalError++;
		}

		//Validate Email
		//Email is required
		if($_POST['email'] == ''){
			//Email field is empty
			$this->emailMessage = 'Email is required';
			$totalError++;
		}

		// Make sure the E-Mail is not in use
		$filteredEmail = $this->dbc->real_escape_string( $_POST['email'] );
		$sql = "SELECT email
				FROM users
				WHERE email = '$filteredEmail'  ";
		// Run the query
		$result = $this->dbc->query($sql);
		// If the query failed OR there is a result
		if( !$result || $result->num_rows > 0 ) {
			$this->emailMessage = 'E-Mail in use';
			$totalError++;
		}

		//Validate Password
		//Password is required
		if($_POST['password'] == ''){
			//Password field is empty
			$this->passwordMessage = 'Password is required';
			$totalError++;
		}

		if ( $_POST['confirm-password'] == '' || $_POST['confirm-password'] !== $_POST['password'] ) {

			$this->confirmMessage = 'Must be same as above password';
			$totalError++;
		}
		//if there is no errors
		if ( $totalError == 0 ) {


			// Validation Passed

			// filter user data for query
			$filteredfName = $this->dbc->real_escape_string( $_POST['firstname'] );
			$filteredlName = $this->dbc->real_escape_string( $_POST['lastname'] );


			// Hash the password

			$hash = password_hash( $_POST['password'] , PASSWORD_BCRYPT );

			$confirmHash = password_hash( $_POST['confirm-password'] , PASSWORD_BCRYPT );

			// Prepare the Sql
			$sql = "INSERT INTO users (first_name,last_name,email,password)
					VALUES ('$filteredfName','$filteredlName','$filteredEmail','$hash')";
			//Run the query
			$this->dbc->query($sql);

			$result = $this->dbc->query($sql);
			// Check to make sure if query worked


			// Log the user in
			$_SESSION['id'] = $this->dbc->insert_id;
			$_SESSION['privilege'] = 'user' ;
			$_SESSION['name'] = $filteredfName;
			// Redirect the user to homepage

			header('Location: index.php?page=home');
		}





	}

	

}