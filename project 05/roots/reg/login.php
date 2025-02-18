<?php
require_once('db.php');

$login = $_POST['login'];
$pass =  $_POST['pass'];

if (empty($login) || empty ($pass))
{
    echo "Всё заполни пж";
} else {
    $sql= "SELECT * FROM `ignateva_231` WHERE login = '$login' AND pass = '$pass'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc()){
            header ('Location: ../index1.php');
        }
    } else {
        echo "не знаем такого";
    }
}