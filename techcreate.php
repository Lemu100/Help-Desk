<!DOCTYPE html>
<html>
<body>
<?php


$server = "localhost";
$user = "user";
$pass = "1234";
$conn = mysqli_connect($server, $user, $pass,"session");

if(!$conn){
}
header("Location: http://localhost/maintech.php");
$name = $_POST['uname'];
$username = $_POST['username'];
$pass = $_POST['pass'];
$email = $_POST['email'];
$sql = "insert into users(name, username, password, email, roll) value ('$name', '$username', '$pass', '$email', 'technician')";

if(!mysqli_query($conn,$sql)){
echo "ERROR";
}
exit;

?>

</body>
</html>
