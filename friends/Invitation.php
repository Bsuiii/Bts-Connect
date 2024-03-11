<?php
session_start();
if(!$_SESSION['myId'])
header('location:accueil.html');
include('connect.php');
$me=$_SESSION['myId'];
$sql = "select idUser,nom,dateEnvoie,nomRole,prenom,photo,etat from users u,invitations i,roles r where i.exp=u.idUser and r.idRole=u.idRole and des=$me";
$res = mysqli_query($con,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php include "bars.php";
?>
 <center>
    <h1>
    Welcome Back <?php echo $_SESSION['nom'];?>
    </h1>
    <table >
        <tr>
            <th>#</th>
            <th>Photo</th>
            <th>Nom Complet</th>
            <th>Role</th>
            <th>Date</th>
              <th>Action</th>
        </tr>

        <?php
       

         while($row = mysqli_fetch_assoc($res)){ 
          if($row['etat']!="Accepter"){
          ?>
                <tr>
              
                <td> <?php echo $row['idUser'] ?> </td>
            <td> <span><img width="50px" height="50px" style="clip-path:circle()" alt="" src="image/<?php echo $row['photo'] ?>"></span> </td>
            <td><?php echo $row['nom'] .' '. $row['prenom'] ?></td>    
            <td> <?php echo $row['nomRole'] ?> </td>
            <td> <?php echo $row['dateEnvoie'] ?> </td>
            <td>
              <a class="add" href="addFriend.php?id= <?php echo $row['idUser'] ?>">Confirmer</a>
              <a class="del" href="Supprimer.php?id= <?php echo $row['idUser'] ?>">Supprimer</a>
             </td>
        
          

           <?php }}?>
           </tr>
         </table>
</div>
 </center>

</body>
</html>