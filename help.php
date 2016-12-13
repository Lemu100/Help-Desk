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

<form action="makerequest.php" method="post">
Enter a brief description:<br><br><textarea name="description" rows=4 cols=50 maxlength="250"></textarea><br><br>
Write ur request:<br><br><textarea name="full" rows=4 cols=50></textarea><br><br>
<input type="submit">
</form>

</body>
</hmtl>
