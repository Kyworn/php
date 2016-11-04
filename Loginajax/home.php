<?php
session_start();
if(empty($_SESSION['login_user']))
{
header('Location: index.php');
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Accueil</title>
		<link rel="stylesheet" href="home.css">
	</head>
	<body>
			<h1>Bienvenue dans la page d'accueil</h1>
			<a href="logout.php">Déconnection</a>

	</body>
</html>
