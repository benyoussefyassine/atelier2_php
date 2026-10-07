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
        $p=strpos($ch, " ");
        $i="";
        while ($p !== false) {
            $i.= strtoupper($ch[0]);
            $ch = substr($ch, $p + 1);
            $p = strpos($ch, " ");
        }
        if($ch!=""){
            $i.= strtoupper($ch[0]);
        }
      

     

        echo $i;
    }
    ?>

</body>
</html>