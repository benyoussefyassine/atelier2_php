<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exercice 5</title>
</head>
<body>

    <form method="POST">
        <input type="text" name="chaine" required>
        <input type="submit" value="Envoyer">
    </form>

    <?php
    if (isset($_POST['chaine'])) {
        $ch = $_POST['chaine'];
        $mots = explode(" ", $ch);
        $i = "";

        foreach ($mots as $m) {
            if ($m != "") {
                $i .= strtoupper($m[0]);
            }
        }

        echo $i;
    }
    ?>

</body>
</html>