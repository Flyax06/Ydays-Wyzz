<?php

    $question = $_GET["question"];
    $reponse = $_GET["reponse"];
    $explication = $_GET["explication"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ywzz";

try {
    $conn = new PDO("mysql:host=localhost;dbname=ywzz", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("SELECT * FROM quest WHERE question=? AND reponse=? AND explication=?");
    $stmt->execute([$question, $reponse, $explication]); 
    $users = $stmt->fetch();
    if ($users) {
        $message='Cette question existe déjà';
        echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
    } else {
        $sql = "INSERT INTO quest (question, reponse, explication)
        VALUES ('$question', '$reponse', '$explication')";
    
        $conn->exec($sql);
        include("./valider.php");
    }
}
catch(PDOException $e)
{
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

$conn = null;

?>