<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=minichat2;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$nom = $_POST['nom'];
$message = $_POST['message'];

$req = $bdd->prepare('INSERT INTO message(nom, message) VALUES(:nom, :message)');
$req->execute(array(
    'nom' => $nom,
    'message' => $message
));

header('Location: minichat.php');

