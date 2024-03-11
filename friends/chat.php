<?php
 session_start();
if(!$_SESSION['myId'])
header('location:accueil.html');
include('connect.php');
$me=$_SESSION['myId'];
$myname=$_SESSION['nom'];
$him=$_GET['id'];
$sql="select idUser,nom,prenom,photo from users where idUser=$him; ";
$res=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($res)){
$photo=$row['photo'];
$code=$row['idUSer'];
$user=$row['prenom']." ".$row['nom'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
    <title>Document</title>
    <style>

        .chat-container{
            position:Relative;
            width:40%;
            height:100vh;
            top:150px;
            z-index:1;
            
        }
        .chat-header{
            position:absolute;
            top:-3%;
            height:15vh;
            padding:7px;
            border-radius:10px 0px 0px 0px;
            background:black;
            color:white;
            width:100%;
            

           }
           .chat-header img{
           float:left;
           
           clip-path:circle();

           }
           .chat-header h3{
           float:left;
           padding:5px;
           margin-left:5px;

           }
           .chat-header .close-btn{
           float:right;
           padding:5px;
           font-size:15px;
           background:none;
           color:white;
           z-index:0;
           }
           .close-btn:hover{
           color:Red;
           font-size:20px;
           cursor:pointer;
        
           color:Red;
           }
        .chat-block{
            position:absolute;
            top:5%;
            width:100%;
            height:65vh;
            background:rgb(237, 237, 237);
            overflow-y: scroll;
           
           
        }
         input{    
         position:absolute;
         bottom:0;
         left:0;
         padding:12px;
         margin:0px;
         box-sizing: border-box;
         width:90%;
         background:white;
         }
         .send-btn{
            position:absolute;
         bottom:0;
         right:0;
         padding:12px;
         padding-right:12px;         
         box-sizing: border-box;
         width:10%;
         background:#00004C;
         color:white;
         }
         .me{
            background:rgb(113, 113, 248);
            width:50%;
            float:right;
            padding:5px;;
            margin:5Px;
            border-radius:10px 0px 10px 10px;
         }
         .him{
            background:white;
            width:50%;
            float:left;
            padding:5px;;
            margin:5Px;
            border-radius:0px 10px 10px 10px;
           }
          
    </style>
</head>
<body>
    
   <?php
   include "bars.php";
?>

    <center>
        <div class="container">
        <div class="chat-container">
            <div class="chat-header">
            <img src="image/<?php echo $photo;?>" height="30Px"  width="30px" alt="Menu Icon">
                <h3><?php echo $user;?></h3>
                <button class="close-btn">x</button>
            </div>
            <div class="chat-block">
            <?php
$hisM="select*from messages where des=$me and exp=$him Order By dateEnvoi";
$result1=mysqli_query($con,$hisM);
$myM="select*from messages where des=$him and exp=$me Order By dateEnvoi";
$result=mysqli_query($con,$myM);
while(($cell=mysqli_fetch_array($result1)) || ($cell2=mysqli_fetch_array($result)) ){?>
       
               <div class="me">
                <?php  if(!empty($cell2['message']) && !is_null($cell2['message'])) 
                echo $cell2['message'] ;?>
            </div><br>
               <div class="him">
               <?php  if(!empty($cell['message']) && !is_null($cell['message'])) 
                echo $cell['message'] ;
                ;?>
            </div><br>
                <div>
<?php } ?>
                 <form action="insertChat.php" Method="POST">
                    <input type="hidden" name="to" value="<?php echo $him ;?>">
                    <input type="text" name="msg">
                    <button class="send-btn" type="submit">Send</button>
                    </form>
                </div>
                
            </div>
        </div>

        </div>
    </center>
    
</body>
</html>