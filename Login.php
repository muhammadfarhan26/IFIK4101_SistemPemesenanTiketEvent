<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['email']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT username FROM registrasi WHERE email = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
	   
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         $_SESSION['myusername']="something";
         $_SESSION['login_user'] = $myusername;
         
         header("location: Home.html");
      }else {
		 echo "Email Atau Password anda salah";
		 header('refresh:3; url=http://localhost/www/Login.html');
         $error = "Your Login Name or Password is invalid";
      }
   }
?>