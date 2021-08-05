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
            $reservierung = new Reservierung($data['modell'], $data['anzahl']);
            array_push($this->reservierungen, $reservierung);
        }

        public function persistReservierungen() {
            
            foreach($this->reservierungen as $reservierung){
                $this->reservierungDao->create($reservierung);
            }
            $this->reservierungen = [];
        }

        public function getAllReservierungen(){
            return $this->reservierungDao->getAllReservierungen();
        }
    }
?>