<?php
require_once BASE_PATH . '/config/connection.php';
require_once BASE_PATH . '/app/Models/Books.php';

class BooksController {
    private $model;

    public function __construct() {
        $db = new Database();
        $koneksi = $db->connect();
        $this->model = new Books($koneksi);
    }

    public function index() { 
        return $this->model->getAllBooks();
    }

    public function store($post) { 
        return $this->model->insertBook($post);
    }
}
?>
