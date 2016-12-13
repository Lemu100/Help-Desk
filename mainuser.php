<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
echo $_SESSION['uname'];
?>
<br><br><br>
<a href="help.php"><button>Make a request</button></a><br><br>
<a href="urs.php"><button>See requests</button></a>
<a href="all.php"><button>See all requests</button></a>
<br><br><br>


<a href="logout.php"><button>Log out</button></a>


</body>
</html>
