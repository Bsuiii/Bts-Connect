<?php
session_start();
if(!$_SESSION['myId'])
header('location:accueil.html');
include('connect.php');
$me=$_SESSION['myId'];
$myname=$_SESSION['nom'];
$sql = "select idUser,nom,nomRole,prenom,photo from users u,amis a,roles r where (a.idUser2=u.idUser or a.idUser1=u.idUser) and r.idRole=u.idRole and (idUser1=$me or idUser2=$me) and nom!='$myname'; ";
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
    <style>
table {
  width: 50%;
  border-collapse: collapse;
  margin: 20px 0;
  font-family: Arial, sans-serif;
  
}

th {

  background-color: rgb(40,40,40);
  color: #ddd;
  text-align: left;
  padding: 8px;
  outline:none;
}

td {
  border: 0px solid #dddddd;
  text-align: left;
  padding: 8px;
    
}

tr:nth-child(even) {
  background-color: #dddddd;
}
td .add{
    background:rgb(21, 103, 21);
    color:white;
    width:30px;
    padding:7px;
    text-decoration:none;
    border-radius:5px;

}
td .add:hover{
    background:rgb(3, 77, 3);
box-shadow:1px 2px 3px rgb(3, 77, 3); 

}
td .del{
    background:#a32b2b;
    color:white;
    width:30px;
    padding:7px;
    text-decoration:none;
    border-radius:5px;

}
td .del:hover{
    background:#6c2222;
box-shadow:1px 2px 3px #6c2277; 

}

    </style>
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
            
            <th colspan="2">Action</th>
        </tr>

        <?php
       

         while($row = mysqli_fetch_assoc($res)){ ?>
                <tr>
                <td> <?php echo $row['idUser'] ?> </td>
            <td> <span><img width="50px" height="50px" style="clip-path:circle()" alt="" src="image/<?php echo $row['photo'] ?>"></span> </td>
            <td><?php echo $row['nom'] .' '. $row['prenom'] ?></td>    
            <td> <?php echo $row['nomRole'] ?> </td>
            <td >
              <a class="add" style="width:80px;" href="chat.php?id= <?php echo $row['idUser'] ?>">Envoyer un messager</a>
              <a class="del" style="width:80px;" href="delAmis.php?id= <?php echo $row['idUser'] ?>">Retirer</a>
             </td>
        
          

           <?php }?>
           </tr>
         </table>
</div>
 </center>

</body>
</html>