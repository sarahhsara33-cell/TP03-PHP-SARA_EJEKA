<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice2</title>
</head>
<body>
<h1> Exercice 2.1 : `if / elseif / else`</h1>

<?php
include "config.php";

function mention($note) {
    if ($note >= 16) {
        return "Très bien";
    } elseif ($note >= 14) {
        return "Bien";
    } elseif ($note >= 12) {
        return "Assez bien";
    } elseif ($note >= SEUIL) {
        return "Passable";
    } else {
        return "Ajourné";
    }
}
$notes = [18, 15, 13, 11, 8, 10];

foreach ($notes as $note) {
    echo "Note : $note ==Mention : " . mention($note) . "<br>";
}
?>
<h1>Exercice 2.2 : `switch`</h1>
<?php
$mois = date("m");

switch ($mois) {
    case "01":
        echo "Janvier";
        break;
    case "02":
        echo "Février";
        break;
    case "03":
        echo "Mars";
        break;
    case "04":
        echo "Avril";
        break;
    case "05":
        echo "Mai";
        break;
    case "06":
        echo "Juin";
        break;
    case "07":
        echo "Juillet";
        break;
    case "08":
        echo "Août";
        break;
    case "09":
        echo "Septembre";
        break;
    case "10":
        echo "Octobre";
        break;
    case "11":
        echo "Novembre";
        break;
    case "12":
        echo "Décembre";
        break;
    default:
        echo "Mois invalide";
}
//Sans break, PHP continue à exécuter les instructions des case suivants, même si leurs valeurs ne correspondent pas.
?>

<h1>Exercice 2.3 : Boucles</h1>
<?php
for ($i = 1; $i <= 6; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}

$i = 0;

while ($i <= 20) {
    if ($i == 10) {
        echo "<strong>$i</strong><br>";
    } else {
        echo "$i<br>";
    }

    $i += 2;
}
for ($i = 0; $i <= 10; $i++) {
    if ($i % 2 != 0) {
        continue;
    }

    echo $i . "<br>";
}

$i = 1;

while ($i <= 15) {
    switch ($i) {
        case 5:
            echo "At 5<br>";
            break;

        case 10:
            echo "At 10; quitting<br>";
            break 2;
    }

    $i++;
}
?>
</body>
</html>