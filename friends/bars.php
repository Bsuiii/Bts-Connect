 <div>
    <div id="top-nav">
        <a href="Home.php">Home</a>
        <a href="filiére.php">Filiere</a>
        <a href="page3.php">about</a>
        <div class="dropdown">
          <img src="image/<?php echo $_SESSION['image'];?>" style="clip-path:circle()" height="30Px" width="30px" alt="Menu Icon">
          <div class="dropdown-content">
            <a href="logout.php" style="color:black;z-index:2">Deconnexion</a>

          </div>
          </div>
     

    </div>
    <div id="side-nav">
        <a href="Rechercher.php">Recherche</a>
        <a href="sendMes.php">Nouveau Message</a>
        <a href="MessageRecu.php">Message recue</a>
        <a href="messageEnvoye.php">Message Envoyé</a>
        <a href="friends.php">Amis</a>
        <a href="invitation.php">Invitation</a>
    </div>
</div>

