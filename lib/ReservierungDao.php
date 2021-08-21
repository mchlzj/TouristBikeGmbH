<?php
    class ReservierungDao{
        private $db;
        
        public function __construct(){
            $this->db = new Database;
        }

        public function getAllReservierungen(){

                $this->db->query("SELECT reservierung.*, reservierungstatus.bezeichnung AS reservierungstatus
                                    FROM reservierung 
                                    INNER JOIN reservierungstatus 
                                    ON reservierung.statusId = reservierungstatus.id
                                    ORDER BY reservierung.erstelldatum DESC");
                                    
            $results = $this->db->resultSet();
            return $results;
        }

        public function getReservierungById($reservierungId){

            $this->db->query("SELECT reservierung.*, reservierungstatus.bezeichnung AS reservierungstatus, modell.bezeichnung AS modell
            FROM reservierung 
            INNER JOIN reservierungstatus 
            ON reservierung.statusId = reservierungstatus.id 
            INNER JOIN  modell
            ON reservierung.modellId = modell.id
            WHERE reservierung.id = :reservierung_id");

            $this->db->bind(':reservierung_id', $reservierungId);

            $row = $this->db->single();
            return $row;
        }

        public function create($reservierung) {
            $this->db->query("INSERT INTO reservierung(modellId, anzahl, von, bis, bemerkung)
                                VALUES (:modellId, :anzahl, :von, :bis, :bemerkung)");

            $this->db->bind(':modellId', $reservierung->getModellId());
            $this->db->bind(':anzahl', $reservierung->getAnzahl());
            $this->db->bind(':von', $reservierung->getVon());
            $this->db->bind(':bis', $reservierung->getBis());
            $this->db->bind(':bemerkung', $reservierung->getBemerkung());

            if($this->db->execute()){
                return true;
            } else {
                return false;
            }
        }
    }