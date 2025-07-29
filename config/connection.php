<?php
    class Database{
        
        private $host = 'localhost';
        private $username = 'sumo';
        private $password = '1234'; 
        private $database = 'php_native';
        private $koneksi;
        
        
        public function connect() {
            $this->koneksi = mysqli_connect(
                $this->host,
                $this->username,
                $this->password,
                $this->database
            );

            if (!$this->koneksi) {
                die("Connection failed: " . mysqli_connect_error());
            }

            return $this->koneksi;
        } 
    }