<?php
class Film {
    public string $title = "Les Bisounours";
    public int $startYear = 1989;
    public int $runtimeMinutes = 96;

    public function creerFilm()
    {
        $this->title = $_POST['titre'];
        $this->startYear = $_POST['annee'];
        $this->runtimeMinutes = $_POST['duree'];
    }
    public function afficherTilte()
    {
        echo $this->title;
    }
    public function afficherYear()
    {
        echo $this->startYear;
    }
    public function afficherTime()
    {
       $duree = $this->runtimeMinutes;
       $dureeHeure = floor($duree / 60);
       $dureeMinute = $duree % 60;
       return $dureeHeure.'H'.$dureeMinute.'minutes';
    }
    }
?>
