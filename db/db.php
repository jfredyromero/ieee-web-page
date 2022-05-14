<?php
    class DBConnection {
        private $host = 'localhost';
        private $dbname = 'miembros_rama_ieee';
        private $user = 'root';
        private $password = '';
        private $charset = 'utf8';
        private $db;

        public function __construct() {
          $this->db = new PDO("mysql:host=$this->host;dbname=$this->dbname;charset=$this->charset", $this->user, $this->password);
        }

        public function getConnection() {
          return $this->db;
        }

        public function closeConnection() {
          $this->db = null;
        }

        public function getData ($query){
            $stmt = $this->db->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }