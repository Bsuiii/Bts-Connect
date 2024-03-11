<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
  <style>
  table{
    margin-top:100px;
    display:none;
    width:45%;
    box-shadow:5px 5px 20px  #a8a8a8;
    border-radius: 4px;
    z-index:-1;
  }
  table tr td{
    width:50%;
  }
  table input{
    width:100%;
    padding:8px;
    outline:none;
  }
  table input:focus{
  border:none;
  border-bottom:2px solid rgb(21, 103, 21);
  }
  tr:nth-child(even){
background:rgb(242, 242, 242);
  }
  .subn{
  background:rgb(21, 103, 21); 
  color:white; 
  border:none;
  }
  .inscrire-button{
    border:none;
    background:rgb(17, 133, 17);
    color:white;
    border-radius:3px;
    width:150px;
  }
  .inscrire-button:hover{
    border:none;
    background:rgb(14, 123, 14);
    box-shadow: 1px 1px 5px 4px rgb(14, 96, 14) ;
  }
  .reset-button{
    border:none;
    background:rgb(167, 34, 34);
    color:white;
    border-radius:3px;
    width:150px;
  }
  .reset-button:hover{
    border:none;
    background:rgb(110, 20, 20);
    box-shadow: 1px 1px 5px 4px rgb(79, 12, 12) ;
  }
  .close{
    float:right;
    padding:10px;
    border:none;
    background:none;
    font-size: 20px;
  }
  .close:hover{
cursor:pointer;
font-size:22px;
color:red;
  }
  form button{
    padding:10px;
    border-radius: 3px;
  }
  #top-nav{
    z-index: 1;
  }
  #side-nav{
    z-index: 0;
  }
  </style>
</head>

<body>
  <?php include "AccBars.html"?>
<center>
<div class="registre" id="registre" >
    <form action="registration.php" method="post" enctype="multipart/form-data" >
      
      <table id="myTable">
        <thead><center>Formulaire</center></thead>
        <tr><td colspan="2"><button class="close" onClick=" document.getElementById('myTable').style='display:none'">x</button></td></tr>
        <tr><td><label>Nom :</label> <td><input type="text" name="nom"placeholder="Entrer votre Nom"></td> </tr>
        <tr><td><label>Prenom :</label> <td><input type="text"name="prenom" placeholder="Entrer votre Prenom"></td></tr>
        
        <tr><td><label>Email :</label> <td><input type="Email" name="email" placeholder="Entrer votre Email" required></td></tr>
        <tr><td><label>Password :</label> <td><input type="password" name="pwd" placeholder="Entrer votre Mot de passe" required></td></tr>
        <tr><td><label>Date Naissance :</label> <td><input type="date" name="ddn" placeholder="" required></td></tr>
         <tr><td><label>Filiére :</label></td><td>
          <select name="cmbf"  required>
        <option value="1">DSI</option>
        <option value="2">PME/PMI</option>
        <option value="3">CPI</option>
        <option value="4">SE</option>
        <option value="5">MI</option>
          </select>
        </td></tr><tr><td><label>Role :</label></td><td>
          <select name="cmbR" required>
        <option value="1">Etudiant</option>
        <option value="2">Professeur</option>

          </select>
        </td></tr>
        <tr><td><label for="">Image : </label></td><td> <input type="File" Methode="FILE" name="img"> </td></tr>
<tr>  <td><input  name="submit" class="inscrire-button" type="submit" value="s'inscrire"  ></td><td><input  name="botona" class ="reset-button" type="Reset" value="Annuler"  ></td></tr>
             
        </table>
        </form>

</div>
</center>

<script>
  function valider(){
if(document.getElementById('email').value=="" || document.getElementById('email').value=="" )
if(confirm("Remplir les champs !!!")) document.location = 'accueil.html';
document.getElementById("myForm").submit();
  }
</script>
</body>

</html>
