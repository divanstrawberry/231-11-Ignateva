<?php
require_once('db.php');
$login = $_POST['login'];
$pass =  $_POST['pass'];
$repeatpass = $_POST['repeatpass'];
$email = $_POST['email'];


if (empty($login) || empty ($pass) || empty($repeatpass)){
    echo "Все поля заполни ";
} else
{
    if($pass !=$repeatpass){
        echo "Пароли не совпадают";
    }else{
        $sql="INSERT INTO `ignateva_231` (login,pass,email) VALUES ('$login','$pass','$email')";
        if($conn -> query($sql) === TRUE){
            header ('Location: ../index1.php');
        }
        else {
            echo "Ошибка" . $conn->error;
        }
    }
}
