<?php 
session_start();
include '../connection.php'
echo "good";
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
}


?>