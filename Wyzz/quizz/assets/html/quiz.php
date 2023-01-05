<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>PHP Quizzer</title>
</head>

<body>
    <header>
        <div class="container">
            <h1>Quizz</h1>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="current">Question 1 of 5</div>
            <p class="question">
                <?php require "../../../quizz/process.php"; ?>
                <?php require "../../../quizz/rep.php"; ?>
            </p>
            <form action="../../../quizz/process.php" method="post">
                <ul class="choices">
                    <li><input type="radio" name="choice" value="1">1</li>
                    <li><input type="radio" name="choice" value="2">3</li>
                    <li><input type="radio" name="choice" value="3">6</li>
                    <li><input type="radio" name="choice" value="4">5</li>
                </ul>
                <input type="submit" value="Submit" />
            </form>
        </div>
    </main>
</body>

</html>