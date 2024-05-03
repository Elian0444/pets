<?php 
include('../../config/databases.php');

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
    header("refresh:0;url=../home.php");
}else{
    echo"CREDENCIALES INCORRECTAS";
}

?>
    