<?php session_start();
include('connect.php');
$me=$_SESSION['myId'];
$him=$_GET['id'];
$sql = "delete from messages where des=$him and exp=$me;";
if (mysqli_query($con,$sql)){
    echo "<script>if(confirm(\"Retirer avec succées!!!\")) document.location = 'MessageEnvoye.php';</script>";
}else{
    echo "<script>if(confirm(\"Echec!!!\")) document.location =  'MessageEnvoye.php';</script>";


}