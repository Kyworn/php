<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>DRAPEAU</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  </head>
  <body style="max-width:50em;margin:0 auto;text-align:center;font-family: 'Roboto', sans-serif;">
    <?php
    try
    {
        include 'pdoconnect.php';
        $test = "SELECT  Nom, Capitale, Drapeau FROM Pays";
        $test2 = "SELECT  Langue FROM Langue";
    $reponse = $pdo->query($test);
    while ($donnees = $reponse->fetch())
    {
        echo "<h1> $donnees[Nom] </h1>";
        echo "<p>Capitale : $donnees[Capitale]</p>";
        echo "<img src='$donnees[Drapeau]'/>";
    }
    $reponse = $pdo->query($test2);

    while ($donnees = $reponse->fetch())
    {
        echo "<p>Langue : $donnees[Langue]  </p>";
    }
    $reponse->closeCursor();
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
    ?>
  </body>
</html>
