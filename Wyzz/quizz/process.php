<?php
try {
	require "database.php";
    $requete = 'SELECT * from quest WHERE id_quest LIMIT 1' ;
    foreach($dbh->query($requete) as $row) {
        // print_r($row);
        afficherLigne($row);
    };
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

function afficherLigne($row) {
    echo 'Question : ' . $row['question'];
}
?>