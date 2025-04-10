<?php
require_once('db.php');
$login = $_POST['login'];
$pass = $_POST['pass'];
$repeatpass = $_POST['repeatpass'];

if (empty($login) || empty($pass) || empty($repeatpass)) {
    echo "Все поля заполни ";
} else {
    if ($pass != $repeatpass) {
        echo "Пароли не совпадают";
    } else {
        $hashedPass = password_hash($pass, PASSWORD_DEFAULT);
        $sql = "INSERT INTO `ignateva_231` (login, pass) VALUES ('$login', '$hashedPass')";
        if ($conn->query($sql) === TRUE) {
            header('Location: ../index.php');
        } else {
            echo "Ошибка" . $conn->error;
        }
    }
}
?>