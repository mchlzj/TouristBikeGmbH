<?php
    class ReservierungService{
        private $db;
        private $reservierungDao;
        private $reservierungen;
        
        public function __construct(){
            $this->db = new Database;
            $this->reservierungDao = new ReservierungDao;
            $this->reservierungen = [];
        }

        public function createReservierung($data) {
            $reservierung = new Reservierung(
                $data['modell'], 
                $data['anzahl'], 
                $data['von'], 
                $data['bis'],
                $data['bemerkung']);
            array_push($this->reservierungen, $reservierung);
        }

        public function persistReservierungen() {
            
            foreach($this->reservierungen as $reservierung){
                $this->reservierungDao->create($reservierung);
            }
            $this->reservierungen = [];

            return true;
        }

        public function getAllReservierungen(){
            return $this->reservierungDao->getAllReservierungen();
        }
    }
?>