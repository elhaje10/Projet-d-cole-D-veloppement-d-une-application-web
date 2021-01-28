<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
   <meta charset="utf-8">
   <link rel="stylesheet" href="css/style_connexion.css" />
   <link rel="stylesheet" href="css/navBar.css" />

   <title>Focus</title>
</head>

<body>

   <?php include("navBar.php"); ?>

   <div class="utilisateur">
      <a href="connexion.php"><img src="assets/logos/padlock.png"></img>Connexion</a>
      <a href="#"><img src="assets/logos/information.png"></img>Contact</a>
   </div>

   <section class="connexion open">
      <form action="/my-handling-form-page" method="post">
         <h2>Connexion</h2>
         <div>
            <label for="mail">Mail :</label>
            <input type="email" id="Adresse email" name="user_mail">
         </div>
         <div>
            <label for="pass">Mot de passe :</label>
            <input type="password" id="pass" name="password" minlength="8" required>
         </div>
         <div>
            <input class="buttonConnexion" type="submit" value="Connexion">
         </div>
      </form>
      <a class="buttonCreateCompte" href="#">Créer un compte...</a>
   </section>

   <section class="createCompte">
      <form action="/my-handling-form-page" method="post">
         <h2>Créer un compte</h2>
         <div>
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom">
         </div>
         <div>
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom">
         </div>
         <div>
            <label for="pseudo">Pseudo :</label>
            <input type="text" id="pseudo" name="pseudo">
         </div>
         <div>
            <label for="mail">Mail :</label>
            <input type="email" id="Adresse email" name="user_mail">
         </div>
         <div>
            <label for="pass">Mot de passe :</label>
            <input type="password" id="pass" name="password" minlength="8" required>
         </div>
         <div>
            <label for="confirmPass">Confirmer :</label>
            <input type="password" id="confirmPass" name="confirmPass">
         </div>
         <div>
            <input class="buttonConnexion" type="submit" value="Créer un compte">
         </div>
      </form>
   </section>


   <script type="text/javascript" src="js/connexion.js"></script>
</body>

</html>