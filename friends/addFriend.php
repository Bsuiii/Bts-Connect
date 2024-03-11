<?php session_start();
include('connect.php');
$src=$_SESSION['myId'];
$des=$_GET['id'];
$date= date("Y-m-d");
$etat="En cours de traitement...";
$sql2="update invitations set etat='Accepter' where exp=$des and des=$src ";
$sql = "insert into amis(idUser1,idUser2) VALUES($src,$des);";
if (mysqli_query($con,$sql) && mysqli_query($con,$sql2)){
    echo "<script>if(confirm(\"Envoi avec Succées!!!\")) document.location = 'invitation.php';</script>";
}else{
    echo "<script>if(confirm(\"Echec d'envoi!!!\")) document.location = 'invitaion.php';</script>";


}