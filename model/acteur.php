<?php
    class Acteur {
        public string $nom = "";
        public string $prenom = "";
        public int $age = 0;

        public function __construct($_nom, $_prenom, $_age)
        {
            $this->nom = $_nom;
            $this->prenom = $_prenom;
            $this->age = $_age;
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
        }
?>