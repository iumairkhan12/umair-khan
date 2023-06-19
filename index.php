<?php

// Start a new session
session_start();


if (isset($_POST['submit'])) {

   
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == "Umair" &&$password == '1234'){

   
    $_SESSION['username'] = $username;

    echo "You are Logged In";
    header('Location: /travel/home.php');
    
}

else{
    echo "Incorrect Password or Username";
}

    
    
    exit;
    
}

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="index.css">


    <title>Login Page</title>
</head>
<body>

    <h1>Login Page</h1>
   <?php include("connect.php"); ?>

    <form method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required>

        <br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>

        <br><br>

        <input type="submit" name="submit" value="Login">
    </form>

</body>
</html>

