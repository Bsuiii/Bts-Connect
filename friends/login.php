<?php 
session_start();
include "connect.php";
$email=$_POST['email'];
$pwd=$_POST['pwd'];
$sql="select nom,prenom,nomRole,email,mdp,idUser,photo from users u,roles r where u.idRole=r.idRole and email='$email' and mdp='".md5($pwd)."'";
$req=mysqli_query($con,$sql);
if(mysqli_num_rows($req)>0){
while($cell=mysqli_fetch_assoc($req))
{
$_SESSION['myId']=$cell['idUser'];
$_SESSION['nom']=$cell['nom'];
$_SESSION['prenom']=$cell['prenom'];
$_SESSION['Role']=$cell['nomRole'];
$_SESSION['image']=$cell['photo'];
}
header('location:home.php');}
else{
   echo "<script>if(confirm(\"Mot de passe ou email invalide!!!\")) document.location = 'accueil.html';</script>";
}


?>