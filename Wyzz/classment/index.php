<?php
  
    $user = "root";
    $pass = "";
    $bdd = new PDO('mysql:host=localhost;dbname=ywzz', $user, $pass);

    try {

        $stmt = $bdd->prepare("SELECT pseudo, xp, filière FROM user ");

        $stmt->execute();
        $result = $stmt->fetchAll();
     
        usort($result, function ($a, $b) {
            $a = $a['xp'];
            $b = $b['xp'];
            return ($a == $b) ? 0 : (($a < $b) ? 1 : -1);
        });
        $ranking = 1;

    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./score.css">
    <title>LeaderBoard Using PHP</title>
</head>

<body>

    <h2 class="title_classement">Classement General</h2>

    <table>
        <thead>
            <td>Rang</td>
            <td>Pseudo</td>
            <td>Xp</td>
            <td>Filière</td>
            <thead>
            <tbody>
                <?php foreach($result as $row): ?>
                <tr>
                    <td>
                        <?php echo "$ranking" ?>
                    </td>
                    <td>
                        <?php echo $row['pseudo']?>
                    </td>
                    <td>
                        <?php echo $row['xp']?>
                    </td>
                    <td>
                        <?php echo $row['filière']?>
                    </td>
                </tr>
                <?php $ranking++; ?>
                <?php endforeach; ?>
            </tbody>
        </thead>
        </thead>
    </table>
</body>

</html>