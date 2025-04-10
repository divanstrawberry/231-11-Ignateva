<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/indexphp.css">
</head>
<body>

<form action="register.php" method="post">
    <input type="text" placeholder="логин" name="login">
    <input type="text" placeholder="пароль" name="pass">
    <input type="text" placeholder="повторите пароль" name="repeatpass">
    <input type="text" placeholder="email" name="email">
    <label for=""><a href="terms.pdf" target="_blank">"Я принимаю условия пользования"</a></label><input type="checkbox">
    <button type="submit">Зарегистрироваться</button>
</form>

<form action="login.php" method="post">
    <input type="text" placeholder="логин" name="login">
    <input type="text" placeholder="пароль" name="pass">
    <button type="submit">Войти</button>
</form>

</body>
</html>