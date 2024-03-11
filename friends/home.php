<?php
session_start();
if(!$_SESSION['myId'])
header('location:accueil.html');
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
    
<?php include "bars.php"; ?>
<div class="space-container">
    <div class="space-content">
        <h4>Votre Espace :<?php echo  $_SESSION['Role'];?></h4>
    </div>
</div>
 <center>
    <div class="head">
    <h1>
    Welcome Back <span><?php echo $_SESSION['nom'];?></span>
    </h1>
    </div>

 </center>

</body>
</html>