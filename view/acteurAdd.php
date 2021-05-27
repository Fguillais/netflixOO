<?php
    include '../model/acteur.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ajout d'un film</h1>
    <form action="" method="POST">
        Nom : <input type="text" name="nom"><br/>
        Prénom : <input type="text" name="prenom"><br/>
        Age : <input type="text" name="age"><br/>
        <input type="submit" name="submit"><br/>
    </form>
    <?php
        if (isset($_POST['submit'])) {
            $newActeur = new Acteur($_POST['nom'], $_POST['prenom'], $_POST['age']);
            ?>
                <h3><?php echo $newActeur->afficherNom()  ?></h3>
                <h4><?php echo $newActeur->afficherPrenom()  ?></h4>
                <h3><?php echo $newActeur->afficherAge()  ?></h3>
        <?php
        }
    ?>
</body>
</html>