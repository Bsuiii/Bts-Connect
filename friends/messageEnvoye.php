<?php
session_start();
if(!$_SESSION['myId'])
header('location:accueil.html');
include('connect.php');
$me=$_SESSION['myId'];
$myname=$_SESSION['nom'];
$sql = "select idUser,exp,message,des,nom,nomRole,prenom,photo,dateEnvoi from users u,messages m,roles r where  r.idRole=u.idRole and m.des=u.idUser and exp=$me;";

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
            <th>Message</th>
            <th>Date</th>
            <th colspan="2">Action</th>
           
        </tr>

        <?php
       

         while($row = mysqli_fetch_assoc($res)){ 
          ?>
                <tr>
              
                <td> <?php echo $row['exp'] ?> </td>
            <td> <span><img width="50px" height="50px" style="clip-path:circle()" alt="" src="image/<?php echo $row['photo'] ?>"></span> </td>
            <td><?php echo $row['nom'] .' '. $row['prenom'] ?></td>    
            <td> <?php echo $row['nomRole'] ?> </td>
            <td> <?php echo $row['message'] ?> </td>
            <td> <?php echo $row['dateEnvoi'] ?> </td>
            <td >

             
         </td>
            <td >
              <a class="del" href="delMessage1.php?id= <?php echo $row['idUser'] ?>">Annuler</a>
             
         </td>
        
          

           <?php }?>
           </tr>
         </table>
</div>
 </center>

</body>
</html>