<?php
include 'connect.php';

session_start();

if(isset($_POST['regbtn']))
{
    $email = $_POST['email'];
    $uname = $_POST['username'];
    $fullname = $_POST['fullname'];
    $pass = $_POST['password'];

    mysqli_query($connect, "INSERT INTO `users` (`id`, `email`, `username`, `fullname`, `password`) VALUES (null,
'$email', '$uname', '$fullname', '$pass') " );

    header("location:welcome.php");
} else {

    echo 'mistake';
}





//$sql = "INSERT INTO users (email, username, password, usertype) VALUE ('".$_POST["email"]."','".$_POST["username"]."',
//'".$_POST["password"]."','".$_POST["usertype"]."')";
//
//$conn->close();

?>
