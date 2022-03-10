<?php

$email = $_GET["email"];
$name = $_GET["name"];
$age = $_GET["age"];

//controllo che $name sia più lungo di 3 caratteri
//$email contenga sia @ che .
//$age sia un numero o una stringa numerica

if (strlen($name) > 3 && 
    strpos($email, '@') !== false &&
    strpos($email, '.') !== false &&
    is_numeric($age)) {

    echo "Accesso riuscito";
    
} else {
    echo "Accesso negato";
}

?>