<?php 
// session_start();
// require('db_class.php');
// $obj = new Db_Class();

// // exit;
// $users = $obj->getUsers();
// $sn=1;

$message = array(
  "error_code" => 404,
  "error_message" => null
); 


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
     // The request is using the POST method
    // print_r($_POST);
    // $user = $obj->getUserById();
    // $_SESSION['user'] = pg_fetch_object($user);
    // header('location:edit.php');
  $message["error_message"] = "POST request";
  echo json_encode($message);

} else if($_SERVER['REQUEST_METHOD'] === 'GET') {

  //  $ret_val = $obj->deleteuser();
  //  if($ret_val==1){
       
  //     echo "<script language='javascript'>";
  //     echo "alert('Record Deleted Successfully'){
  //         window.location.reload();
  //     }";
  //     echo "</script>";
  // }
  $message["error_message"] = "GET request";
  echo json_encode($message);

} else {
  $message["error_message"] = "Please specify which endpoint you want to use";
  echo json_encode($message);
}

// <?php
// require "../bootstrap.php";
// use Src\Controller\PersonController;

// header("Access-Control-Allow-Origin: *");
// header("Content-Type: application/json; charset=UTF-8");
// header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
// header("Access-Control-Max-Age: 3600");
// header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
// $uri = explode( '/', $uri );

// // all of our endpoints start with /person
// // everything else results in a 404 Not Found
// if ($uri[1] !== 'person') {
//     header("HTTP/1.1 404 Not Found");
//     exit();
// }

// // the user id is, of course, optional and must be a number:
// $userId = null;
// if (isset($uri[2])) {
//     $userId = (int) $uri[2];
// }

// $requestMethod = $_SERVER["REQUEST_METHOD"];

// // pass the request method and user ID to the PersonController and process the HTTP request:
// $controller = new PersonController($dbConnection, $requestMethod, $userId);
// $controller->processRequest();
// ?>