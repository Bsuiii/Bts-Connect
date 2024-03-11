<?php session_start();
include('connect.php');
$me=$_SESSION['myId'];
$him=$_GET['id'];
$date= date("Y-m-d");
$etat="En cours de traitement...";
$sql = "delete from amis where idUser1=$me and idUser2=$him;";
if (mysqli_query($con,$sql)){
    echo "<script>if(confirm(\"Retirer avec succées!!!\")) document.location = 'friends.php';</script>";
}else{
    echo "<script>if(confirm(\"Echec!!!\")) document.location = 'friends.php';</script>";


}