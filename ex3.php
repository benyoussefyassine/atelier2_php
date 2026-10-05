<?php

$TAB = [
    "t1" => "Atelier N°2",
    "t2" => "Bonjour Tout le monde",
    "t3" => "Vous êtes les bienvenus"
];

$JSON = json_encode($TAB);

echo $JSON . "\n";


if (strpos($JSON, "Bonjour") !== false) {
    echo "Le mot 'Bonjour' existe bien dans la chaine JSON.\n";
} else {
    echo "Le mot 'Bonjour' n'a pas ete trouve.\n";
}

?>