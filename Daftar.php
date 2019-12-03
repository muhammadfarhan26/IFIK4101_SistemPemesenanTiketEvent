<?php
$username = filter_input(INPUT_POST, 'Username');
$password = filter_input(INPUT_POST, 'password');
$email    = filter_input(INPUT_POST, 'email');
if (!empty($username)){
if (!empty($password)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "impal";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);


if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO registrasi (email, password, username)
values ('$email','$password','$username')";
if ($conn->query($sql)){
	echo "Akun berhasil dibuat mohon tunggu Sebentar...";
header('refresh:3; url=http://localhost/www/Login.html');
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "Password should not be empty";
die();
}
}
else{
echo "Username should not be empty";
die();
}
?>