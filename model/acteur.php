<?php
    class Acteur {
        public string $nom;
        public string $prenom;
        public int $age;
        private $birthDate;
        private $deathDate;

        public function __construct(string $_nom, string $_prenom, $_birthDate, $_deathDate)
        {
            $this->nom = $_nom;
            $this->prenom = $_prenom;
            $this->birthDate = $_birthDate;
            $this->deathDate = $_deathDate;
            $this->age = $this->calculAge();
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
        public function calculAge()
        {
            if (!empty($this->deathDate)) {
                $origin = new DateTime($this->birthDate);
                $target = new DateTime($this->deathDate);
                $interval = date_diff($origin, $target);
                return $interval->format('%Y');
            }else {
                $origin = new DateTime($this->birthDate);
                $target = new DateTime(date('Y-m-d'));
                $interval = date_diff($origin, $target);
                return $interval->format('%Y');
            }
        }
        public function afficherDate()
        {
            $timestamp = strtotime($this->birthDate);

            $date = date('d/m/Y', $timestamp);

            return $date;
        }
        public function afficherMort()
        {
            $timestamp = strtotime($this->deathDate);

            $date = date('d/m/Y', $timestamp);

            return $date;
        }
        public function mortOuVivant()
        {
            if (!empty($this->deathDate)) {
                $origin = new DateTime(date('Y-m-d'));
                $target = new DateTime($this->deathDate);
                $interval = date_diff($origin, $target);
                return $interval->format('%Y');
            }else {
                $mov = 'Cette personne est vivante !';
                return $mov;
            }
        }
        }
?>