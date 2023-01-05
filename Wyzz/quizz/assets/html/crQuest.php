<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Création des questions</h1>
    <form action="../../questGET.php" method="get">
        <input type="text" name="question" required="required">
        <span>Question</span><br>
        <input type="text" name="reponse" required="required">
        <span>Réponse</span><br>
        <input type="text" name="explication" required="required">
        <span>Explication</span><br>
        <input type="submit" value="Valider" />
    </form>
</body>

</html>