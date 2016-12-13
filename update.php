<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
header("Location: http://localhost/maintech.php");
$server = "localhost";
$user = "user";
$pass = "1234";
$conn = mysqli_connect($server, $user, $pass,"session");

if(!$conn){
}
$id = $_POST['id'];
$tech = $_SESSION['uname'];
$solution = $_POST['solution'];
$comp = "On Request";

$sql = "select status from request where id = '$id'";

$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

if($row['status'] == $comp){
$stat = "On Service";
} else {
$stat = "Solved";
}

$sql2 = "update request set tecnician='$tech', status='$stat', solution='$solution' where id=$id";

if(!mysqli_query($conn, $sql2)){
echo "Error";
} else { 
exit;
}

?>
</body>
</html>
