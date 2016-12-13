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

if($conn){
$uname = $_POST['user'];
$pass = $_POST['pass'];
//query-----------------------------------------------------------------
$sql = "select password from users where username = '". $uname."'";
$result = mysqli_query($conn, $sql);
//results of query------------------------------------------------------------------

$row = mysqli_fetch_assoc($result);
$userpass = $row["password"];

//identify password---------------------------------------------------------------------------
if($userpass == $pass){
$_SESSION["uname"] = $uname;
header("Location: http://localhost/main.php");
} else {
header("Location: http://localhost/index.php");
}
//Error managment------------------------------------------------------------
} else {
header("Location: http://localhost/indexphp");
}

exit;
?>
</body>
</html>
