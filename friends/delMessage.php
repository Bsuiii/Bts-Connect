<?php session_start();
include('connect.php');
$me=$_SESSION['myId'];
$him=$_GET['id'];
$date= date("Y-m-d");
$sql = "delete from messages where des=$me and exp=$him;";
if (mysqli_query($con,$sql)){
    echo "<script>if(confirm(\"Retirer avec succées!!!\")) document.location = 'MessageRecu.php';</script>";
}else{
    echo "<script>if(confirm(\"Echec!!!\")) document.location =  'MessageRecu.php';</script>";


}