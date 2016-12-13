<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
//db connect----------------------------------------------------------
$server = "localhost";
$user = "user";
$pass = "1234";

$conn = mysqli_connect($server, $user, $pass, "session");

$sql = "select roll from users where username = '". $_SESSION["uname"]."'";
$result = mysqli_query($conn, $sql);


$row = mysqli_fetch_assoc($result);
$roll = $row["roll"];

if($roll == "technician"){
header("Location: http://localhost/maintech.php");
}else{
header("Location: http://localhost/mainuser.php");
}
exit;


?>



</body>
</html>
