<?php


session_start();


$con = mysqli_connect('localhost', 'root' , "");

mysqli_select_db($con, 'useraccounts');

$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["Password"];
$confirmPassword = $_POST["confirmPassword"];
$signUp = $_POST["signUp"];

$n = " select * from users where username = '$name'";
$e = " select * from users where email = '$email'";

$result = mysqli_query($con, $n);
$result1 = mysqli_query($con, $e);

$num = mysqli_num_rows($result);
$num1 = mysqli_num_rows($result1);

if ($num == 1 && $num1 == 1) {
    $_SESSION['status'];
} else {
    $reg = " insert into users(username, email, Password) values ('$name', '$email', '$password')";
    mysqli_query($con , $reg);
    echo "Registration Successful";
}



if ((!isset($_POST['name'])) && (!isset($_POST['email'])) && (!isset($_POST['Password'])) && (!isset($_POST['confirmPassword'])))
{
    echo "Please enter all information in the page :)";
    $name = "";
    $email = "";
    $password = "";
    $confirmPassword = "";
}





?>
