<?php session_start();
include('connect.php');
$des=$_SESSION['myId'];
$me=$_GET['id'];
$date= date("Y-m-d");
$etat="En cours de traitement...";
$sql = "delete from invitations where des=$des and exp=$me;";
if (mysqli_query($con,$sql)){
    echo "<script>if(confirm(\"Suppresion avec succées!!!\")) document.location = 'invitation.php';</script>";
}else{
    echo "<script>if(confirm(\"Echec d'envoi!!!\")) document.location = 'invitation.php';</script>";


}