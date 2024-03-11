<?php session_start();
if(!$_SESSION['myId'])
header('location:accueil.html');
include('connect.php');
$me=$_SESSION['myId'];
$myname=$_SESSION['nom'];
$him=$_GET['id'];

$sql="select nom,prenom from users u,roles r where  r.idRole=u.idRole and idUser=$him; ";


$res=mysqli_query($con,$sql);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href ="style.css">
    <title>Document</title>
    <style>
        .container {
          padding: 20px;
          margin: 100px;
          width:50%;
          background-color: #f2f2f2;
          border-radius: 10px;
        }
        
       
        .combobox, .message-input {
          margin-bottom: 20px;
        }

        .select, .textarea {
          width: 100%;
          padding: 12px;
          border: 1px solid #ccc;
          border-radius: 4px;
          box-sizing: border-box;
          margin-top: 6px;
          margin-bottom: 16px;
          resize: vertical;
        }
        
    
        label {
          font-size: 14px;
          font-weight: bold;
        }
        
        
        button {
          background-color: #4CAF50;
          color: white;
          padding: 12px 20px;
          border: none;
          border-radius: 4px;
          cursor: pointer;
        }
        
  
        button:hover {
          background-color: #45a049;
        }
        button a{
          text-decoration:none;
          color:white;
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
    <div class="container">
      <form action="SendMessage.php" method="POST">
        <div class="combobox">
          <label for="friends">To:</label>
          <select class="select" id="friends" name="to">
            <?php while($row=mysqli_fetch_assoc($res)){
              ?>
            <option 
            value="<?php echo $him ;?>" >
            <?php echo $row['nom']." ".$row['prenom'];}?>
          </option>
         
            </select>
          
        </div>
        <div class="message-input">
          <label for="message">Message:</label>
          <textarea class="textarea" id="message" name="msg"></textarea>
        </div>

        <button type="submit">Send</button>
        </formm>
      </div>
    </center>
</body>
</html>