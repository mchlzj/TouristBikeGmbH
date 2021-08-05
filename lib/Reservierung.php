<?php
    class Reservierung {
        // private $erstelldatum;
        private $von;
        private $bis;
        private $modell;
        private $anzahl;
        // private $status;
        private $bemerkung;

        public function __construct($modell, $anzahl,
        // $erstelldatum, 
        $von, $bis, 
        // $status, 
        $bemerkung) {
            // $this->erstelldatum = $erstelldatum;
            $this->von = $von;
            $this->bis = $bis;
            // $this->status = $status;
            $this->modell = $modell;
            $this->anzahl = $anzahl;
            $this->bemerkung = $bemerkung;
          }
        
        public function getModell(){
            return $this->modell;
        }

        public function getAnzahl(){
            return $this->anzahl;
        }

        // public function getErstelldatum(){
        //     return $this->erstelldatum;
        // }

        public function getVon(){
            return $this->von;
        }

        public function getBis(){
            return $this->bis;
        }

        // public function getStatus(){
        //     return $this->status;
        // }

        public function getBemerkung(){
            return $this->bemerkung;
        }

        public function setModell($modell) {
            $this->modell = $modell;
        }

        public function setAnzahl($anzahl){
            $this->anzahl = $anzahl;
        }

        // public function setErstelldatum($erstelldatum){
        //     $this->erstelldatum = $erstelldatum;
        // }

        public function setVon($von){
            $this->von = $von;
        }

        public function setBis($bis){
            $this->bis = $bis;
        }

        // public function setStatus($status){
        //     $this->status = $status;
        // }

        public function setBemerkung($bemerkung){
            $this->bemerkung = $bemerkung;
        }
    }
?>