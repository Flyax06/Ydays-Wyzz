<?php
try {
	require "database.php";
    $requete = 'SELECT * from quest WHERE id_quest LIMIT 1';
    foreach($dbh->query($requete) as $row) {
        // print_r($row);
        afficherReponse($row);
    };
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

function afficherReponse($row) {
    echo "<br>";
    echo "<br>";
    echo 'Réponse 1 : ' . $row['reponse'];
    echo "<br>";
    echo 'Réponse 2 : ' . $row['rep1'];
    echo "<br>";
    echo 'Réponse 3 : ' . $row['rep2'];
    echo "<br>";
    echo 'Réponse 4 : ' . $row['rep3'];
    echo "<br>";
}
?>