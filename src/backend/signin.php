<?php 
include('../../config/databases.php');

session_start();

if(isset($_SESSION"id_user")){
    header("<Location:./home.php");
}

if(!empty($_POST)){
    $email = $_POST['email'];
    $pass = $_POST['passwd'];
    $enc_pass = md5($pass);
    
    $sql = "
        SELECT 
        FROM
            users2
        WHERE
            email = '$email' AND
            password = '$enc_pass'
        LIMIT 1
    ";
    $result = pg_query($conn, $sql);
    $total = pg_num_rows($result);
    if($total >0){
        //echo"login OK"
        $row = pg_fetch_assoc($result);
        $_SESSION['id_user'] = $row['id'];
        $_SESSION['user_name'] = $row['fullname'];
        header("refresh:0;url=../home.php");
    }else{
        echo"<scrip>alert('invalid email or password')</script>";
        header("refresh:0;url=../signin.html");
    }
}


?>
    