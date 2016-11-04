<?php
if(isset($_POST["submit"])){
include 'pdoconnect.php';

$sql = "INSERT INTO users (username, password)
VALUES ('".$_POST["username"]."','".sha1($_POST["password"])."')";
if ($pdo->query($sql)) {
echo "Vous êtes maintenant enregistré";
}
else{
echo "Les donnés n'ont pas été ajoutés.";
}

}

header( "Refresh:3; url=connexion.php", true, 303);
?>
