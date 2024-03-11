<?php session_start();
include('connect.php');
$src=$_SESSION['myId'];
$des=$_GET['id'];
$date= date("Y-m-d");
$etat="En cours de traitement...";
$sql = "insert into invitations(exp,des,dateEnvoie,etat) VALUES($src,$des,'$date','$etat');";
if (mysqli_query($con,$sql)){
    echo "<script>if(confirm(\"Envoi avec Succées!!!\")) document.location = 'Rechercher.php';</script>";
}else{
    echo "<script>if(confirm(\"Echec d'envoi!!!\")) document.location = 'Rechercher.php';</script>";


}