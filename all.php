<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
echo $_SESSION['uname'];

$server = "localhost";
$user = "user";
$pass = "1234";
$conn = mysqli_connect($server, $user, $pass,"session");

if(!$conn){
}
$sql = "select * from request";
$result = mysqli_query($conn, $sql);

while($row = $result->fetch_assoc()) {

echo "<br><br>".$row['username']."<br>Technician: ".$row['tecnician']."<br>Status: ".$row['status']."<br><textarea rows=4 cols=50>".$row['description']."</textarea><br><textarea rows=4 cols=50>".$row['fulldescription']."</textarea><br>Solution: <br><textarea rows=4 cols=50>".$row['solution']."</textarea><br><br><br>";

}

?>
<a href="mainuser.php"><button>Back</button></a>
</body>
</html>
