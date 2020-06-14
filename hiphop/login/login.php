<?php
include "connect.php";

session_start();

if(isset($_POST['loginbtn'])) //&& $_POST['action'] == 'login')
{
    $email = $_POST['username'];
    $pass = $_POST['password'];

    $query = mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$pass'");

    $row = mysqli_num_rows($query);

    if($row > 0)
    {
        $result = mysqli_fetch_array($query);
        $_SESSION['user'] = [
            "id" => $result['id'],
            "email" => $result['email']
        ];
        header("location:welcome.php");

    } else {

        //$_SESSION['id'] = $result['id'];
        echo "mistake";
    }
}