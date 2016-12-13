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
$x = 0;
if(!$conn){
}
$sql = "select * from request where tecnician = ''";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)) {
$x = $row['id'];
echo "<form action='update.php' method='post'>";
echo "<input type='hidden' name='id' value='$x'>";
echo "<br><br>".$row['username']."<br>ID: ".$row['id']."<br>Status: ".$row['status']."<br>Technician: ".$row['tecnician']."<br><textarea rows=4 cols=50>".$row['description']."</textarea><br><textarea rows=4 cols=50>".$row['fulldescription']."</textarea><br>"."Solution description: <br><textarea name='solution' rows=4 cols=50>".$row['solution']."</textarea><br><br><br>";
echo "<input type='submit'>";
echo "</form>";
}
?>
<datalist id=stat>
<option value="On Service">
<option value="Solved">
</datalist>
<br><br><br>

<a href="maintech.php"><button>Back</button></a>

</body>
</html>
