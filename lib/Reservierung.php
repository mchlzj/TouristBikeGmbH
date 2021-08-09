<?php
    class Reservierung {
        // private $erstelldatum;
        private $von;
        private $bis;
        private $modellId;
        private $anzahl;
        // private $status;
        private $bemerkung;

        public function __construct($modellId, $anzahl,
        // $erstelldatum, 
        $von, $bis, 
        // $status, 
        $bemerkung) {
            // $this->erstelldatum = $erstelldatum;
            $this->von = $von;
            $this->bis = $bis;
            // $this->status = $status;
            $this->modellId = $modellId;
            $this->anzahl = $anzahl;
            $this->bemerkung = $bemerkung;
          }
        
        public function getModellId(){
            return $this->modellId;
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

        public function setModell($modellId) {
            $this->modell = $modellId;
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