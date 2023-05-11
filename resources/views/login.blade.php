<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css3/styles.css">
    <title>connexion</title>
</head>
<body>
    <div class="wrapper">
      <section class="form login">
        <header>CONNEXION</header>
        <form  method="POST" id="forms" enctype="multipart/form-data" autocomplete="off">
          <div class="error-text"></div>
          
          <div class="field input">
            <label>Email</label>
            <input type="objet" name="emai" id="email" placeholder="Entrer votre email" required>
          </div>

          <div class="field input">
            <label>mot de passe</label>
            <input type="password" name="pwde" id="pwd" placeholder="Entrer votre mot de passe" required>
          </div>
          <div id="res" style="color:red;"></div>
          <div id="res1" style="color: red"></div>

          <div class="field button" >
            <input type="submit" id="connexion" name="submit" value="Connexion" style="background-color: #098d32">
          </div>
         <p>si vous n'avez pas un compte<a href="inscription.php" style="color: #098d32"> cliquez ici</a></p>
        </form>
      </section>
    </div>
    
    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/connexion.js"></script>
  </body>
  </html>
