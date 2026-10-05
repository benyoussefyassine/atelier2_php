<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.css">
</head>
<body class="container my-4">

    <?php
    $Notes = [
        "Rami" => 7.50,
        "Mohamed" => 19.00,
        "Amira" => 15.50,
        "Asma" => 10.00,
        "Ahmed" => 9.5,
        "Yassine" => 15.5,
        "Islem" => 12.0
    ];
    ?>

    <h3>1. Liste des étudiants ayant une note supérieure ou égale à 10 :</h3>
    <ul>
        <?php
        foreach ($Notes as $nom => $note) {
            if ($note >= 10) {
                echo "<li>$nom : $note</li>";
            }
        }
        ?>
    </ul>

    <h3>2. Nombre d'étudiants :</h3>
    <?php
    echo "Nombre d'étudiants : " . count($Notes) . "<br>";
    ?>

    <h3>3. Étudiant ayant la une bonne note :</h3>
    <?php
    $max = -1;
    $E = "";

    foreach ($Notes as $nom => $note) {
        if ($note > $max) {
            $max = $note;
            $E = $nom;
        }
    }

    echo "<p>" . $E . " avec la note" . $max . "</p>";
    ?>


    <h3>4. Liste de tous les étudiants  :</h3>
    <table border="1" class="table ">
        <tr>
            <th>NOM</th>
            <th>Note en PHP</th>
        </tr>
        <?php
        foreach ($Notes as $key => $value) {
            echo "<tr><td>" . $key . "</td><td>" . $value . "</td></tr>";
        }
        ?>
    </table>

    <h3>5. Tri par ordre croissant des notes :</h3>
    <table class="table table-triped table-hover ">
        <tr>
            <th>NOM</th>
            <th>Note en PHP</th>
        </tr>
    <?php
    $tc = $Notes;
    asort($tc); 

    foreach ($tc as $nom => $note) {
        echo "<tr><td>" . $nom . "</td><td>" . $note . "</td></tr>";
    }
    ?>
    </table>
    <h3>6. Tri par ordre décroissant des noms :</h3>
    <?php
    $tdec = $Notes;
    krsort($tdec);

    foreach ($tdec as $nom => $note) {
        echo $nom . " : " . $note . "<br>";
    }
    ?>

    <h3>7. Moyenne </h3>
    <?php
    $somme = 0;
    foreach ($Notes as $note) {
        $somme += $note;
    }
    $moyenne = $somme / count($Notes);

    echo "La moyenne :" . $moyenne . "<br>";
    ?>

 
   

</body>
</html>