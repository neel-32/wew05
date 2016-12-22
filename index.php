<?php 

session_start();

// require all the third party app 
require 'vendor/autoload.php';
require 'app/controllers/PageController.php';

// print_r($_SESSION);


// create instance of the plate library 
$plates = new League\Plates\Engine('app/templates');

// Connect to the database
$dbc = new mysqli('localhost', 'root', '', 'Super-blog');

//if user has requested a page 

if ( isset($_GET['page']) ) {
  
  $page = $_GET['page'];
}else{

  $page = 'home';
}



switch ($page) {
  case 'home':
     require 'app/controllers/HomeController.php';
     $controller = new HomeController($dbc); 
     
  break;

  case 'blog':
     require 'app/controllers/BlogController.php';
     $controller = new BlogController($dbc);
  break;

  case 'login':
     require 'app/controllers/LoginController.php';
     $controller = new LoginController($dbc);
  break;

  case 'sign-up':
     require 'app/controllers/SignupController.php';
     $controller = new SignupController($dbc);
  break;

  case 'new-post':
     require 'app/controllers/NewPostController.php';
     $controller = new NewPostController($dbc);
  break;

  case 'edit-post':
     require 'app/controllers/EditPostController.php';
     $controller = new EditPostController($dbc);
  break;

  case 'logout':
    unset($_SESSION['id']);
    unset($_SESSION['privilege']);
    unset($_SESSION['name']);
    header('Location: index.php');
    
  break;

  // // 404
  // default:
  //   require 'app/controllers/Error404Controller.php';
  //   $controller = new Error404Controller();
  // break;

}

$controller->buildHTML();


?>