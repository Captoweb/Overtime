<h3>Вот код простейшей авторизации, как просили</h3>

<?php
$mylogin = 'admin';
$mypass = 'root';
if(isset($_POST['btn_auth']))
{
if (($_POST['login'] == $mylogin) && ($_POST['password'] == $mypass))
{
echo 'Авторизация прошла успешно';
}
else
{
echo 'Неверные данные';
}
}
else
{
echo('
<form method="post" >
Логин: <input type="text" name="login">
<br>
Пароль: <input type="password" name="password">
<br>
<input type="submit" value="Войти" name="btn_auth">
</form>
');
}
?>
<br>
<hr>
<p>Еще одна форма авторизации, посложнее</p>
<p>http://basecourse.ru/mysql/reg.php</p>

<p>Тоже простая но не работает, надо отдельно проверить</p>
<p>https://линуксблог.рф/prostaya-avtorizaciya-na-php/</p>

<p>Создание простой системы авторизации Андрей Кудлай</p>
<p>https://webformyself.com/sozdanie-sistemy-avtorizacii/</p>


