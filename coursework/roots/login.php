<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Зарегистрироваться в Roots</title>
    <link rel="stylesheet" href="css/indexphp.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="images/logo.jpg" type="image/png">
</head>

<body>
<head>
<section class="auth">
    <div class="tabs">
        <input class="radio-button" id="tab-1" name="tab-btn" type="radio" checked><label for="tab-1">Регистрация</label> <label for=""></label>
       
        <div class="tab-content" id="content-1">
            <form action="reg/register.php" method="post">
                <input type="email" placeholder="Введите email" id="email" name="login" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" required>
                <input type="password" placeholder="Придумайте пароль" id="password" name="pass" minlength="8" maxlength="20" required>
                <input type="password" placeholder="Повторите пароль" name="repeatpass">
                <label for="">Я принимаю <a href="reg/terms.pdf" target="_blank">условия использования</a></label><input type="checkbox" required>
                <button type="sumbit">Зарегистрироваться</button>
                <label for="">Уже зарегистрированы? <a href="enter.php" target="_blank">Войти</a></label>
            </form>
        </div>
    </div>
</section>

</body>
</html>