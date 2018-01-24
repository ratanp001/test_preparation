

<?php 
if(isset($_POST['submit'])){
echo $_POST['name'];
}


?>

<!doctype html>
<html>

<body>
<form action="login.php" method="post">
<input type="text" name="name" placeholder='enter your username'><br>
<input type="password" name="password" placeholder='enter your password'><br>
<input type="submit" name="submit">
</form>
</html>
