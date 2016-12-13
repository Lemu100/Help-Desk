<?php
session_start();
?>
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
$username = $_SESSION['uname'];
$description = $_POST['description'];
$full = $_POST['full'];

$sql = "insert into request(description, username, fulldescription, status, solution, tecnician) value ('$description','$username', '$full', 'On Request', '', '')";

header("Location: http://localhost/mainuser.php");

mysqli_query($conn,$sql);

exit;
?>
</body>
</html>
