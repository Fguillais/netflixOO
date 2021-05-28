<?php
    include 'model/film.php';
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
<?php include 'view/menu.php' ?>
    <h1>Ajout d'un film</h1>
    <form action="" method="POST">
        Titre : <input type="text" name="titre"><br/>
        Année de parution : <input type="text" name="annee"><br/>
        Durée : <input type="text" name="duree"><br/>
        <input type="submit" name="submit"><br/>
    </form>
    <?php
        if (isset($_POST['submit'])) {
            $newFilm = new Film;
            $newFilm -> creerFilm();
            ?>
                <h3>Titre : <?php $newFilm->afficherTilte()  ?></h3>
                <h4>Année de sortie : <?php $newFilm->afficherYear()  ?></h4>
                <h3>Durée du film : <?php echo $newFilm->afficherTime()  ?></h3>
                <hr>
        <?php
        }
    ?>
</body>
</html>