<?php
function verifierAge($age) {
   
    if (is_numeric($age) && $age >= 0 && $age <= 100) {
 
        if ($age >= 18) {
            echo "Vous êtes majeur";
        } else {
            echo "Vous êtes mineur";
        }
    } else {
        echo "Veuillez entrer un chiffre entre 0 et 100.";
    }
}

$age = readline("Entrez un chiffre : ");
verifierAge($age);
?>