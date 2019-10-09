<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <form method="post" action="cible.php">
        <label for="nom">Votre Nom</label>
        <input type="text" name="Nom" placeholder="Nom"><br><br>
        <label for="prenom">Votre votre prenom</label>
        <input type="text" name="Prenom" placeholder="Prenom"><br><br>
        <label for="date">Votre date de naisance</label>
        <input type="text" name="Date_de_naissance" placeholder="Date de naissance"><br><br>

        <label for="choix">Quel est ton plat préféré?</label>
        <select name="choix">
            <option value="carry poulet">Carry poulet</option>
            <option value="Rougail saucisses">Rougail saucisses</option>
            <option value="Civet Zourit">Civet Zourit</option>
        </select><br><br>
        <label for="case">que veux tu en accompagnement?</label>
        <input type="checkbox" name="case" id="case" value="soupe" /> <label for="case">soupe</label>
        <input type="checkbox" name="case" id="case" value="riz" /> <label for="case">riz</label>
        <input type="checkbox" name="case" id="case" value="pates" /> <label for="case">pates</label>
        <input type="checkbox" name="case" id="case" value="patates" /> <label for="case">patates</label><br><br>

        <input type="submit" value="valider"></form>
</body>



</html>