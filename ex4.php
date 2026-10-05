<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>

    <form method="POST">
        <label>Chaîne :</label>
        <input type="text" name="chaine" required><br><br>

        <label>Position de départ :</label>
        <input type="number" name="position" value="0" required><br><br>

        <label>Longueur de la sous-chaîne :</label>
        <input type="number" name="longueur" required><br><br>

        <input type="submit" value="Envoyer">
    </form>

    <hr>

    <?php
    if (isset($_POST['chaine'])) {
        $chaine = $_POST['chaine'];
        $position = $_POST['position'];
        $longueur = $_POST['longueur'];

        echo "Longueur totale: " . strlen($chaine) . "<br>";

        echo "Sous-chaîne :" . substr($chaine, $position, $longueur) . "<br>";

        $inverse = "";
        for ($i = strlen($chaine) - 1; $i >= 0; $i--) {
            $inverse .= $chaine[$i];
        }
        echo "Chaîne inversée : " . $inverse;
    }
    ?>

</body>
</html>