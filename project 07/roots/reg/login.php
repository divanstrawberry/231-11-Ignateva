<?php
require_once('db.php');

$login = $_POST['login'];
$pass = $_POST['pass'];

if (empty($login) || empty($pass)) {
    echo "Всё заполни пж";
} else {
    $sql = "SELECT * FROM `ignateva_231` WHERE login = '$login'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($pass, $row['pass'])) {
            header('Location: ../index.php');
        } else {
            echo "Неверный пароль";
        }
    } else {
        echo "Не знаем такого";
    }
}
?>