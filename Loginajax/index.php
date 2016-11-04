<?php
session_start();
if (!empty($_SESSION['login_user']))
{
    header('Location: home.php');
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Page de Connexion</title>
    <link rel="stylesheet" href="form.css">
    <link rel="shortcut icon" href="logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="jquery.min.js"></script>


  </head>
  <body>

    <script>
       $(document).ready(function() {
          $('#login').click(function(){
          var username=$("#username").val();
          var password=$("#password").val();
          var dataString = 'username='+username+'&password='+password;

          if($.trim(username).length>0 && $.trim(password).length>0) {
          $.ajax({
                   type: "POST",
                   url: "ajaxLogin.php",
                   data: dataString,
                   cache: false,
                   beforeSend: function(){ $("#login").val('Connexion...');},
                   success: function(data){
                      if(data){
                         $("body").load("home.php").hide().fadeIn(1500).delay(6000);
                      }
                      else{
                         $("#login").val('Login')
                         $("#error").html("<span style='color:#cc0000'>Erreur:</span> Mauvais mot de passe. ");
                      }
                   }
                });
          }
          return false;
          });
       });
    </script>
     <div class="titre">
         <h2>Formulaire de Connexion</h2>
     </div>
     <div id="form">
         <form action="" method="post">
             <div class="row">
                 <div class="input-field col s6">
                   <input type="text" name="pseudo" pattern="{4,0}" required title="4 caractères minimum" class="input" autocomplete="off" placeholder="username" id="username"/>
                   <input type="password" name="password" pattern="{4,0}" required title="4 caractères minimum" class="input" placeholder="password" autocomplete="off" id="password"/><br/>
                   <input type="submit" class="btn waves-effect waves-light" value="Login" id="login"/>

                     <span class='msg'></span>
                     <div id="error">
                     </div>
                 </div>
               </div>
             </div>


</body>
</html>
