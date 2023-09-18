<!DOCTYPE html>
<html>
<head>
     <title> Моя первая форма</title>
</head>
<body>

<form action="index.php" method="post">
    <div>
     <label for= "Login"> Login </label>
     <input type = "text" name = "Login" id="Login" value="<?php echo $_POST['Login'] ?? '' ?>">
    </div>

    <div>

         <label for="pass">Password</label>
         <input type="text" name="pass" id="pass" value="<?php echo $_POST['pass'] ?? '' ?>">
    </div>
    <div>
         <input type="submit" value="Войти">
    </div>

</form>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 echo '<b>Login</b> = ' . ($_POST['Login'] ?? '') . '<br>';
 echo 'Password = ' . ($_POST['pass'] ?? '');
}
?>

</body>
</html>
