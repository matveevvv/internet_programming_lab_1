<!DOCTYPE html>
<html>
<body>
<form action="index.php" method="post">
    <input type="text" placeholder="login" name="login">
    <input type="text" placeholder="password" name="pass">
    <button type="submit" >Войти</button>

</form>
<?php
$login = $_POST['login'];
$pass = $_POST['pass'];
if(empty ($login) || empty($pass))
{
    echo "Заполните все поля";
} else {
    echo "Login =  $login" ;
    echo "Password =  $pass";
}



?>
</body>

</html>



