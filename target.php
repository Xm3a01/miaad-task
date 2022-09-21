<?php

$dataEmail = "m@app.com";
$dataPassword = "password";

$email = $_POST['email'];
$password = $_POST['password'];

if($email == $dataEmail && $password == $dataPassword) {
    echo "User .$dataEmail. is Loging ...";
} else {
    echo "Email Or Password is not valid !";
}