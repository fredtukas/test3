<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
$age = 16;
$gender = "femme";

if ($age >= 18 . $gender == "homme")
{
    echo "vous etes un homme et vous etes majeur";
}
elseif ($age <=17 . $gender == "homme")
{
    echo "vous etes un homme et vous etes mineur";
}

elseif ($gender == "femme" . $age >= 17)
{
    echo "vous etes une femme vous etes majeur";
}

elseif ( $gender == "femme" . $age <= 17)
{
    echo "vous etes une femme et vous etes mineure";
}




    ?>
</body>
</html>