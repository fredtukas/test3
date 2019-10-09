<p>Bonjour !</p>

<form action="">
    <p>Ton nom est: <input type="text" value="<?php echo $_POST['Nom']; ?>"></p>
    <p>Ton prénom est: <input type="text" value="<?php echo $_POST['Prenom']; ?>"> </p>
    <p>Tu es né le: <input type="text" value="<?php echo $_POST['Date_de_naissance']; ?>"> </p>
    <p>Ton plat préféré est: <input type="text" value="<?php echo $_POST['choix']; ?>"></p>
    <p>En accompagnement, tu préfères: <input type="text" value="<?php echo $_POST['case']; ?>"> </p>
</form>
<p>Si tu veux faire des modifs <a href="formulaire.php">clique ici</a> pour revenir à la page formulaire.</p>