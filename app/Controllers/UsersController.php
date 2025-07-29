<?php
require_once BASE_PATH . '/config/connection.php';
require_once BASE_PATH . '/app/Models/Users.php';

class UsersController {
    private $model;

    public function __construct() {
        $db = new Database();
        $koneksi = $db->connect();
        $this->model = new Users($koneksi);
    }

    public function index() { 
        return $this->model->getAllUsers();
    }

    public function store($post) { 
        return $this->model->insertUser($post);
    }
}
?>
