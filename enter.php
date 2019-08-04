<?php
session_start();

if($_SESSION['admin']) {
    header("Location: admin_main.php");
    exit;
}

$admin = 'admin';
$pass = '141';

//проверка пароля и логина
if($_POST['submit']) {
    if($admin == $_POST['login'] AND $pass == $_POST['pass'] ) {
        $_SESSION['admin'] = $admin;
        header("Location: admin_main.php");
    }else echo '<p>Не верный пароль или логин!</p>';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
      <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="style.css" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Login</title> 
</head>
    <body>
   
   <div class="container"> 
   <div class="row">
      <div class="col-md">
      <form class="form-signin" method="post" action="">
      <h1>Login</h1>
        <div class="form-group">
        <input type="text" name="login" class="form-control"  placeholder="Login">
       </div>
      <!--Username: <input type="text" name="login">
      <br> <br>-->
      <div class="form-group">
      <input type="text" name="pass" class="form-control"  placeholder="Password">
     </div>
      <!--Password: <input type="text" name="pass">
      <br> <br>-->
      <input type="submit" name="submit" class="btn btn-primary btn-block" value="Отправить" >
      <!--бутстраповская кнопка не работала и все портила собака! поменял button на input и заработало-->
      <!--<input type="submit" name="submit" value="Войти">-->
    </form>
       </div>
       </div>
        </div>
</body>
</html>
