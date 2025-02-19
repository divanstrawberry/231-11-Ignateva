<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Войти в Roots</title>
    <link rel="stylesheet" href="css/indexphp.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="images/logo.jpg" type="image/png">
</head>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>

<section class="auth">
    <div class="tabs">
    
        <input class="radio-button" id="tab-2" name="tab-btn" type="radio" checked><label for="tab-1">Вход</label> <label for=""></label>


        <div class="tab-content" id="content-2">
            <form action="reg/login.php" method="post">
                <input type="email" placeholder="Введите email" id="email" name="login" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" required>
                <input type="password" placeholder="Введите пароль" id="password" name="pass" minlength="8" maxlength="20" required>
                <label for=""><a href="http://t.me/divanstrawberry" target="_blank">Забыли пароль?</a></label>
                <button type="sumbit">Войти</button>
                <label for="">Ещё нет аккаунта? <a href="login.php" target="_blank">Зарегистрируйся сейчас!</a></label>
                
            </form>
        </div>
    </div>
</section>