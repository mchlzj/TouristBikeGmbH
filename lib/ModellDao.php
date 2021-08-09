<?php
    class ModellDao{
        private $db;
        
        public function __construct(){
            $this->db = new Database;
        }

        // Get all Reservierungen
        public function getAllModelle(){

                $this->db->query("SELECT * FROM modell");
                                    
            $results = $this->db->resultSet();

            return $results;
        }

        public function getModellById($modellId) {
            $this->db->query("SELECT * 
            FROM modell 
            WHERE modell.id = :modell_id");

            $this->db->bind(':modell_id', $modellId);

            $row = $this->db->single();

            return $row;
        }
    }