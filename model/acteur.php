<?php
    class Acteur {
        public string $nom;
        public string $prenom;
        public int $age;
        private $birthDate;

        public function __construct($_nom, $_prenom, $_age, $_birthDate)
        {
            $this->nom = $_nom;
            $this->prenom = $_prenom;
            $this->age = $_age;
            $this->birthDate = $_birthDate;
        }
        public function afficherNom()
        {
            return $this->nom;
        }
        public function afficherPrenom()
        {
            return $this->prenom;
        }
        public function afficherAge()
        {
            return $this->age;
        }
        public function afficherDate()
        {
            $timestamp = strtotime($this->birthDate);

            $date = date('d/m/Y', $timestamp);

            return $date;
        }
        }
?>