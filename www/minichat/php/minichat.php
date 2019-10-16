<form action="minichat_post.php" method="post">
    <label for="nom">Votre nom :</label>
    <input type="text" name="nom" id="nom">
    <label for="message">Votre message :</label>
    <input type="text" name="message" id="message">
    <input type="submit">
</form>

<?php

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=minichat2;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT nom, message FROM message');

while ($donnees = $reponse->fetch())
{
?>
    <p><?php echo $donnees['nom']?></p>
    <p><?php echo $donnees['message']?></p>
<?php
}

$reponse->closeCursor()
?>