
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 3 - Tableaux</title>
</head>
<body>

<?php
require "config.php";
require "includes/entete_inc.php";
require  "includes/menu_inc.php";
$notes = [
    "Mohamed" => 16,
    "Ahmed" => 14,
    "Hind" => 13,
    "Aicha" => 15,
    "Samir" => 13,
    "Zakaria" => 13,
    "Rafik" => 10,
    "Ilham" => 9,
    "Hamza" => 7,
    "Sami" => 7,
    "Noura" => 14
];

$modules = [
    "Recherche",
    "Base de Données",
    "Programmation Web"
];


echo "<h2>Exercice 3.1</h2>";

foreach ($modules as $m) {
    echo "- " . htmlspecialchars($m) . "<br>";
}

echo "Par indice :<br>";
echo "- " . htmlspecialchars($modules[0]) . "<br>";
echo "- " . htmlspecialchars($modules[1]) . "<br>";
echo "- " . htmlspecialchars($modules[2]) . "<br>";


function mention($note) {
    if ($note >= 16) return "Très bien";
    if ($note >= 14) return "Bien";
    if ($note >= 12) return "Assez bien";
    if ($note >= 10) return "Passable";
    return "Insuffisant";
}
?>


<h2>Exercice 3.2</h2>

<table border="1" cellpadding="5">
    <tr>
        <th>Nom</th>
        <th>Note</th>
        <th>Mention</th>
    </tr>

    <?php foreach ($notes as $nom => $note): ?>
        <tr style="<?= $note < SEUIL ? 'color:red; font-weight:bold;' : '' ?>">
            <td><?= htmlspecialchars($nom) ?></td>
            <td><?= $note ?></td>
            <td><?= mention($note) ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<?php
echo "<h2>Exercice 3.3 : Statistiques</h2>";

$somme = 0;
$max = $notes["Mohamed"];
$min = $notes["Mohamed"];

foreach ($notes as $n) {
    $somme += $n;

    if ($n > $max) {
        $max = $n;
    }

    if ($n < $min) {
        $min = $n;
    }
}

$moyenne = $somme / count($notes);

echo "1. Avec boucle : Somme = $somme, Moyenne = $moyenne, Max = $max, Min = $min<br>";

echo "2. Avec fonctions : Somme = " . array_sum($notes)
    . ", Moyenne = " . (array_sum($notes) / count($notes))
    . ", Max = " . max($notes)
    . ", Min = " . min($notes) . "<br>";


$effectifs = [];

foreach ($notes as $n) {
    $m = mention($n);

    if (!isset($effectifs[$m])) {
        $effectifs[$m] = 0;
    }

    $effectifs[$m]++;
}

echo "<h3>3. Effectifs par mention</h3>";

foreach ($effectifs as $ment => $nb) {
    echo "- " . htmlspecialchars($ment) . " : $nb<br>";
}


function afficher($tab, $titre) {
    echo "<h4>" . htmlspecialchars($titre) . "</h4>";

    foreach ($tab as $nom => $note) {
        echo htmlspecialchars((string)$nom) . " => "
            . htmlspecialchars((string)$note) . "<br>";
    }
}


echo "<h2>Exercice 3.4 : Tri</h2>";

$tri = $notes;
ksort($tri);
afficher($tri, "1. Tri par noms croissants (ksort)");

$tri = $notes;
arsort($tri);
afficher($tri, "2. Tri par notes décroissantes (arsort)");

$tri = $notes;
krsort($tri);
afficher($tri, "3. Tri par noms décroissants (krsort)");

$tri = $notes;
asort($tri);
afficher($tri, "4. Tri par notes croissantes (asort)");
// include : affiche un avertissement si le fichier est introuvable, mais la suite du script continue.

// require : provoque une erreur fatale si le fichier est introuvable,donc la suite du script ne s'exécute pas.
// include : le fichier est inclus à chaque appel.
// include_once : le fichier est inclus une seule fois.

?>

<?php require_once "includes/pied_inc.php"; ?>


</body>
</html>
