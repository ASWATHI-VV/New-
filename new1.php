<html>
<head>
</head>
<body>
<?php
echo $_POST['fname'];
echo "<br />";
echo $_POST['lname'];
echo "<br />";
echo $_POST['about'];

?>

<form action="new1.php" method="POST">
FIRST NAME: <input type="text" name="fname"><br />
LAST NAME:  <input type="text" name="lname"><br />
ABOUT: <textarea name="about"></textarea><br />
<input type="reset" name="reset">
<input type="submit" name="submit" value="submit" action="new1.php">
</form>


</body>
</html>