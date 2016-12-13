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
<a href="techregister.php"><button>Add Technician</button></a><br><br>
<a href="requests.php"><button>Search Request</button></a><br><br>
<a href="started.php"><button>Search Started Requests</button></a><br><br>

<br><br><br>


<a href="logout.php"><button>Log out</button></a>


</body>
</html>
