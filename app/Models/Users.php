<?php
    require_once 'config/connection.php';
    $db = new Database();
    $koneksi = $db->connect();

    Class Users {
        private $koneksi;

        public function __construct($koneksi) {
            $this->koneksi = $koneksi;
        }

        public function getAllUsers() {
            $data = mysqli_query($this->koneksi, "SELECT * FROM users");
            return $data;
        }

        public function insertUser($post) {
            $name = $post['name'] ?? '';
            $email = $post['email'] ?? '';
            mysqli_query($this->koneksi, "INSERT INTO users (nama, email) VALUES ('$name', '$email')");

            header('Location: index.php?page=users');
        }
    }