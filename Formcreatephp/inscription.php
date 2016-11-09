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
      <form action="insertPays.php" method="post">
          <div class="row">
              <div class="input-field col s6">
                <span id="result" </br></span>
                   <p>Nom du Pays :</p>
                     <input type="text" name="Nom" placeholder="Nom du Pays" required="required" />
                   <p>Capitale du Pays :</p>
                  <input type="text" name="Capitale" placeholder="Capitale du pays" required="required" />

                  <p>Drapeau du Pays :</p>
                  <input type="text" name="Drapeau" placeholder="Drapeau du pays" required="required" />

                  <p>Langue du Pays :</p>
                  <input type="text" name="NomLangue" placeholder="Langue du pays" required="required" />

                  <div id="buttonConIns">
                      <input class="btn waves-effect waves-light" class="material-icons right" type="submit" value="S'inscrire" name="submit" />
                  </div>
              </div>
          </div>
        </div>
      </div>
  </body>
  </html>
