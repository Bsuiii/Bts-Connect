<?php session_start();

include('connect.php');
$src=$_SESSION['myId'];
$des=$_POST['to'];
$msg=$_POST['msg'];
$date= date("Y-m-d");
$sql = "insert into messages(exp,des,message,dateEnvoi) VALUES($src,$des,'$msg','$date');";
if (mysqli_query($con,$sql)){
    echo "<script>if(confirm(\"Envoi avec Succées!!!\")) document.location = 'sendMes.php';</script>";
}else{
    echo "<script>if(confirm(\"Echec d'envoi!!!\")) document.location = 'sendMes.php';</script>";


}