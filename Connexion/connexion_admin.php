
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <link rel="stylesheet" href="connexion.css">
    <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
    <script nomodule src="https://unpkg.com/@google/model-viewer/dist/model-viewer-legacy.js"></script>
    <script src="https://kit.fontawesome.com/345710b615.js" crossorigin="anonymous"></script>
    <script src="connexion.js"> </script>
</head>
<body onload="generate()">
     <header>
        <div class="logo"><span class="N">N</span><span>ovA</span></div>
        <div class="menu">
        <ul>
          <a href="../Home_Produit/homeproduit.php" target="_blank" rel="noopener noreferrer">  <li><i class="fa-sharp fa-solid fa-house"></i></li></a>
          <a href="../Panier/Panier.php" target="_blank" rel="noopener noreferrer"> <li><i class="fa-sharp fa-solid fa-cart-shopping"></i></li></a>
          <a href="../Configuration/laptop.php" target="_blank" rel="noopener noreferrer"> <li><i class="fa-sharp fa-solid fa-envelope"></i></li></a>
          <a href="../Profil/profil.php" target="_blank" rel="noopener noreferrer"> <li><i class="fa-sharp fa-solid fa-user"></i></li></a>
        </ul>
        </div>
    </header>

<div class="left">
    <form  action="verif_admin.php" method="post" class="form">
        <div class="titre">ADMIN</div>
    <div class="container-left">
        <p>
            <i id="msg2" class="fa-solid fa-circle-xmark" ></i>   
            <label for="password">Password: </label> <br>
            <input type="password" name="mdp" id="mdp" required class="input">
            <input type="submit" class="connexion" value="connexion"><br>          
        </p>  
</div>
        
 </div>
    </form> 
  
    </div> 
    
</body>
</html>