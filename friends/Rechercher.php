<?php
session_start();
if(!$_SESSION['myId'])
header('location:accueil.html');
$me=$_SESSION['myId'];
$myname=$_SESSION['nom'];
include('connect.php');

$search = isset($_POST['rech']) ? $_POST['rech'] : "";
$sql = "select idUser,nom,nomRole,prenom,photo from roles r,users u where u.idRole=r.idRole and idUser!=$me";
if (!empty($search)) {
    $sql .= " and (nom like '%$search%'   or prenom like '%$search%')";
}
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
td a{
    background:rgb(21, 103, 21);
    color:white;
    width:30px;
    padding:7px;
    text-decoration:none;
    border-radius:5px;

}
td a:hover{
    background:rgb(3, 77, 3);
box-shadow:1px 2px 3px rgb(3, 77, 3); 

}
form input{
  width:30%;
    padding:8px;
    outline:none;
}
form button{
  width:10%;
    padding:10px;
    outline:none;
    color:white;
    background:rgb(21, 103, 21);
    border:none;  
    border-radius:4Px;  
}
    </style>
</head>
<body>
<?php include "bars.php";
?>
 <div class="container1">
 <center >
   
    <h1>
    Welcome Back <span><?php echo $_SESSION['nom'];?></span>
    </h1>
    <div class="search">
    <form action="#" method="POST" enctype="multipart/form-data">
            <input type="text" name="rech" placeholder="Rechercher par nom ou prenom">
            <button name="sub" type="submit">Rechercher</button>
    </form><br><br>
    <table >
        <tr>
            <th>#</th>
            <th>Photo</th>
            <th>Nom Complet</th>
            <th>Role</th>
            
            <th>Action</th>
        </tr>

        <?php
   
         while($row = mysqli_fetch_assoc($res)){ ?>
                <tr>
                <td> <?php echo $row['idUser'] ?> </td>
            <td> <span><img width="50px" height="50px" style="clip-path:circle()" alt="" src="image/<?php echo $row['photo'] ?>"></span> </td>
            <td><?php echo $row['nom'] .' '. $row['prenom'] ?></td>    
            <td> <?php echo $row['nomRole'] ?> </td>
            <?php if(mysqli_num_rows(mysqli_query($con,"select * from amis where idUser1=$me and idUser2=".$row['idUser']." or (idUser1=".$row['idUser']." and idUser2=$me)" ))>0)
            echo "<td><a class=\"add\" style=\"background:rgb(0, 119, 247) \"href=\"chat.php?id=".$row['idUser']."\">Message</a></td>";
            else
            echo "<td><a class=\"add\" href=\"Ajouter.php?id=".$row['idUser']."\">Ajouter</a></td>";
?>
           </tr>
           <?php
           }?>
         </table>
 </center>
 </div>
</body>
</html>