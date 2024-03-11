<?php
include "Connect.php";
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];
$Filiere=$_POST['cmbf'];
$Role=$_POST['cmbR'];
$image=$_FILES["img"]["name"];
$source=$_FILES["img"]["tmp_name"];
$date=$_POST['ddn'];
$subm = $_POST['submit'];
$destination="image/$image";
move_uploaded_file($source,$destination);
if(isset($subm)){
$sql="insert into users(prenom,nom,branche,email,idRole,ddN,mdp,photo) values('$nom','$prenom','$Filiere','$email','$Role','$date','".md5($pwd)."','$image')";
if(mysqli_query($con,$sql)){
    echo "<script>if(confirm(\"Succées!!!\")) document.location = 'accueil.html';</script>";
}else{
    echo "<script>if(confirm(\"Echec!!!\")) document.location = 'accueil.html';</script>";

}

}
?>
