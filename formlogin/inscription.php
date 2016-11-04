<?php
session_start();
include 'pdoconnect.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Inscription</title>
  <link rel="stylesheet" href="form.css" media="screen" title="no title">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>


<div id="all">
  <div class="titre">
      <h2>Formulaire d'Inscription</h2>
  </div>
  <div id="form">
      <form action="insertUsers.php" method="post">
          <div class="row">
              <div class="input-field col s6">
                <span id="result" </br></span>
                   <p>Pseudo :</p> 
                     <input type="text" pattern=".{4,}"   required title="4 caractères minimum" name="username" placeholder="Pseudo" required="required" />
                   <p>Mot de passe :</p>
                  <input type="password" pattern=".{4,}"   required title="4 caractères minimum" name="password" placeholder="Mot de passe" required="required" />
                  <div id="buttonConIns">
                      <a href="connexion.php"><input type="button" class="btn waves-effect waves-light" value="Connexion" /></a>
                      <input class="btn waves-effect waves-light" class="material-icons right" type="submit" value="S'inscrire" name="submit" />
                  </div>
              </div>
          </div>
        </div>
      </div>
  </body>
  </html>
