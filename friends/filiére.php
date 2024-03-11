<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Présentation</title>
    <link rel="stylesheet" href="style.css">
<style>
    table{
        margin:auto;
    }
    h1{
        font-size: 40px;
        text-transform: uppercase;
        font-family:'Times New Roman', Times, serif;
        color: #f25a6c;
    }
    p{
        font-size: 30px;
        color:  #ffffff;
        padding:20px
    }
    .ok{
        font-size: 25px;
    }
    .no{
        font-size: 25px;
        color: #824f08;
    }
    .pi{
        background-color: #C4C9C7;
    }
    th,td{
        text-transform: uppercase;
        font-family: 'Bebas Neue', cursive;
    }
    #container{
        position:relative;
        top:80px;
        width:90%;
        height:100%;
        overflow-y:scroll;
        left:200px;
        z-index:-1;
        background-color: #C4C9C7;
        box-sizing:border-box;
    }
    .subn{
  background:rgb(21, 103, 21); 
  color:white; 
  border:none;
  padding:10px;
  border-radius:3px;
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

  <div id="container">
<center><h1>BTS AU MAROC</h1></center>

<p class="no"><u>Les filières du BTS au Maroc:</u></p>
<p><b>Les spécialités dispensées par les centres de préparation du Brevet de Technicien <br> Supérieur
     au Maroc s’élèvent à <i>22</i> spécialités, réparties <br>  entre le secteur industriel <i>(14 filières)</i> et le secteur commercial et de services <br><i>(8 filières)</i>. Sur les <i>4432</i> inscrits aux BTS en <i>2013-2014</i>, près de <i>58%</i> <br>
     suivaient des formations du <br>
      secteur industriel et <i>42%</i> des formations du secteur tertiaire.</b></p>

<table border="2" cellpadding="16px">
    <tr>
        <th class="pi">Secteur Industriel</th>
        <th class="pi">Secteur Commercial et de Service</th>
    </tr>
    <tr>
        <td>Mouliste</td>
        <td>Gestion Administrative</td>
    </tr>
    <tr>
        <td class="pi">Bâtiment</td>
        <td class="pi">Comptabilité et Gestion</td>
    </tr>
    <tr>
        <td>Productique</td>
        <td>Gestion des PME/PMI</td>
    </tr>
    <tr>
        <td class="pi">Energétique</td>
        <td class="pi">Management Commercial</td>
    </tr>
    <tr>
        <td>Electromécanique et Systèmes Automatisés</td>
        <td>Management Touristique</td>
    </tr>
    <tr>
        <td class="pi">Maintenance Automobile</td>
        <td class="pi">Technico-commercial</td>
    </tr>
    <tr>
        <td>Maintenance Industrielle</td>
        <td>Audiovisuel</td>
    </tr>
    <tr>
        <td class="pi">Electrotechnique</td>
        <td class="pi">Arts et Industries Graphiques</td>
    </tr>
    <tr>
        <td>Matières Plastiques et Composites</td>
        <td></td>
    </tr>
    <tr>
        <td class="pi">Conception du Produit Industriel</td>
        <td class="pi"></td>
    </tr>
    <tr>
        <td>Systèmes Electroniques</td>
        <td></td>
    </tr>
    <tr>
        <td class="pi">Développement des Systèmes d’Information</td>
        <td class="pi"></td>
    </tr>
    <tr>
        <td>Systèmes et Réseaux Informatiques</td>
        <td></td>
    </tr>
    <tr>
        <td class="pi">Multimédias et Conception WEB</td>
        <td class="pi"></td>
    </tr>
</table>
</div>

</body>
</html>