<?php
    require_once 'config/connection.php';
    $db = new Database();
    $koneksi = $db->connect();

    Class Books {
        private $koneksi;

        public function __construct($koneksi) {
            $this->koneksi = $koneksi;
        }

        public function getAllBooks() {
            $data = mysqli_query($this->koneksi, "SELECT * FROM books");
            return $data;
        } 

         public function insertBook($post) {
            $title = $post['title'] ?? '';
            $publisher = $post['publisher'] ?? '';
            $year = $post['year'] ?? '';
            mysqli_query($this->koneksi, "INSERT INTO books (title, year, publisher) VALUES ('$title', '$year', '$publisher')");

            header('Location: index.php?page=books');
        }
    }