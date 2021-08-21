<?php
    class Reservierung {
        private $von;
        private $bis;
        private $modellId;
        private $anzahl;
        private $bemerkung;

        public function __construct($modellId, $anzahl,$von, $bis, $bemerkung) {
            $this->von = $von;
            $this->bis = $bis;
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

        public function getVon(){
            return $this->von;
        }

        public function getBis(){
            return $this->bis;
        }

        public function getBemerkung(){
            return $this->bemerkung;
        }

        public function setModell($modellId) {
            $this->modell = $modellId;
        }

        public function setAnzahl($anzahl){
            $this->anzahl = $anzahl;
        }

        public function setVon($von){
            $this->von = $von;
        }

        public function setBis($bis){
            $this->bis = $bis;
        }

        public function setBemerkung($bemerkung){
            $this->bemerkung = $bemerkung;
        }
    }
?>