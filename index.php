<?php

$dataEmail = "m@app.com";
$dataPassword = "password";

$error = "";

$email = $_POST['email'] ?? "";
$password = $_POST['password'] ?? "";

if( $email != "") {
    if($email == $dataEmail && $password == $dataPassword) {
        echo "User $dataEmail is Loging ...";
    } else {
        $error = "Email Or Password is not valid !";
    }

}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form method="post" class="form-body">
        <div class="logo"> <span class="firstSelable">Mi</span>aad </div>
        
        <div class="error"> <?php echo $error ?> </div>

         <input type="Email" name="email" class="input-form" placeholder="Enter Email"> <br>
         <input type="password" name="password" class="input-form" placeholder="Enter Password"> <br>
         <!-- <input type="text" class="input-form" placeholder="Enter Phone"> -->
        <input type="submit" class="input-buttom" value="Save">
    </form>
</body>
</html>

<!-- 
    1 - Form 
    2 - action
    3 - Method
 -->