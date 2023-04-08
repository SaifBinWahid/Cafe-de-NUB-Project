<?php
//Connect_database
$con = new mysqli('localhost','root','','monir');
if(isset($_POST['register_btn'])) {
	
	$user_name = $_POST['user_name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	$sql = "INSERT INTO `registration_information` (user_name,email,password)
	VALUES ('$user_name', '$email','$password')";
	$result = mysqli_query($con, $sql);
	
	if($result){
		header("location:index.html");
}
}


if(isset($_POST['login_btn'])){
	//receive data from login form 
      $email = $_POST['email'];
	  $password = $_POST['password'];
	  
	  //check data from database
      $sql = "SELECT id FROM registration_information WHERE (email = '$email'= '$email') and password = '$password'";
      $result = mysqli_query($con,$sql);
      $count = mysqli_num_rows($result);
	  
	  
	  // If result matched $myusername and $mypassword, table row must be 1 row
      if($count == 1) {
         header("location: user_page.html");
      }else {
		  header("location: index.html");
      }
   }
?>