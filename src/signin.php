<?php 
    session_start();
    if(isset($_SESSION["id_user"])){
        header("Location:home.php"); 
    }else{
        header("Location:signin.php")
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pest | Home </title>
    <link rel="icon" type="image/png " href="../src/icons/icons-pets.avif">

</head>
<body>
    <form action="backend/signin.php" method="post">
        <input type="email" name="email" required placeholder="@"><br><br>

        <input type="password" name="passwd" required placeholder="*********">
        <button>Login</button>
        &nbsp;<a href="singup.html">Create account</a>
    </form>
</body>
</html>