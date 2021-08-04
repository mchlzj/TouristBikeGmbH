<?php
    class Reservierung{
        private $db;
        
        public function __construct(){
            $this->db = new Database;
        }

        // Get all Reservierungen
        public function getAllReservierung(){
            $this->db->query("SELECT reservierung.*, fahrrad.seriennummer, fahrradtyp.bezeichnung 
                                FROM reservierung
                                INNER JOIN fahrrad
                                ON reservierung.fahrradId = fahrrad.id
                                INNER JOIN fahrradtyp
                                ON fahrrad.fahrradtypId = fahrradtyp.id");

            $results = $this->db->resultSet();

            return $results;
        }

        public function getReservierungById($reservierungId){
            $this->db->query("SELECT reservierung.*, fahrrad.seriennummer, fahrradtyp.bezeichnung 
                                FROM reservierung
                                INNER JOIN fahrrad
                                ON reservierung.fahrradId = fahrrad.id
                                INNER JOIN fahrradtyp
                                ON fahrrad.fahrradtypId = fahrradtyp.id
                                WHERE reservierung.id = :reservierung_id");
            $this->db->bind(':reservierung_id', $reservierungId);

            $row = $this->db->single();

            return $row;
        }

        public function create($data) {
            $this->db->query("INSERT INTO reservierung(von, bis, fahrradId, reservierungsvorgangId)
                                VALUES (:von, :bis, :fahrradId, :reservierungsvorgangId)");

            $this->db->bind(':von', $data['von']);
            $this->db->bind(':bis', $data['bis']);
            $this->db->bind(':fahrradId', $data['fahrradId']);
            $this->db->bind(':reservierungsvorgangId', $data['reservierungsvorgangId']);

            if($this->db->execute()){
                return true;
            } else {
                return false;
            }

        }
    }