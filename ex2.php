<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.css">
</head>
<body class="container my-4">

    <h3>1. Tableau numéroté tabpays1 :</h3>
    <?php
    $tabpays1 = ["Tunisie", "France", "Italie", "Algérie", "Espagne"];
    foreach ($tabpays1 as $p) {
        echo $p . " | ";
    }
    ?>

    <h3>2. Tri de tabpays1 :</h3>
    <p>Ordre croissant :</p>
    <?php
    $t1 = $tabpays1;
    sort($t1);
    foreach ($t1 as $p) {
        echo $p . " | ";
    }
    ?>

    <p>Ordre décroissant :</p>
    <?php
    $t1_dec = $tabpays1;
    rsort($t1_dec);
    foreach ($t1_dec as $p) {
        echo $p . " | ";
    }
    ?>

    <h3>4. Tableau associatif tabpays2 :</h3>
    <?php
    $tabpays2 = [
        "Tunis" => "Tunisie",
        "Paris" => "France",
        "Rome" => "Italie",
        "Alger" => "Algérie",
        "Madrid" => "Espagne"
    ];

    foreach ($tabpays2 as $cap => $pays) {
        echo $cap . " => " . $pays . "<br>";
    }
    ?>

    <p>Tri croissant des pays:</p>
    <?php
    $t2_val = $tabpays2;
    asort($t2_val);
    foreach ($t2_val as $cap => $pays) {
        echo $cap . " => " . $pays . "<br>";
    }
    ?>

    <p>Tri décroissant des pays :</p>
    <?php
    $t2_val_dec = $tabpays2;
    arsort($t2_val_dec);
    foreach ($t2_val_dec as $cap => $pays) {
        echo $cap . " => " . $pays . "<br>";
    }
    ?>

    <h3>5. Tri de tabpays2 selon les indices  :</h3>
    <p>Ordre croissant des capitales:</p>
    <?php
    $t2_key = $tabpays2;
    ksort($t2_key);
    foreach ($t2_key as $cap => $pays) {
        echo $cap . " => " . $pays . "<br>";
    }
    ?>

    <p>Ordre décroissant des capitales :</p>
    <?php
    $t2_key_dec = $tabpays2;
    krsort($t2_key_dec);
    foreach ($t2_key_dec as $cap => $pays) {
        echo $cap . " => " . $pays . "<br>";
    }
    ?>

    <h3>6. Affichage sous forme de tables HTML :</h3>

    <h4>Tableau tabpays1 :</h4>
    <table class="table table-bordered w-50">
        <tr>
            <th>Indice</th>
            <th>Pays</th>
        </tr>
        <?php
        foreach ($tabpays1 as $i => $p) {
            echo "<tr><td>" . $i . "</td><td>" . $p . "</td></tr>";
        }
        ?>
    </table>

    <h4>Tableau tabpays2 :</h4>
    <table class="table">
        <tr>
            <th>Capitale </th>
            <th>Pays</th>
        </tr>
        <?php
        foreach ($tabpays2 as $cap => $pays) {
            echo "<tr><td>" . $cap . "</td><td>" . $pays . "</td></tr>";
        }
        ?>
    </table>

</body>
</html>