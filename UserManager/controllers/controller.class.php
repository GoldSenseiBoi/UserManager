<?php
require_once("modele.class.php");

class Controleur {
    private $modele;

    public function __construct() {
        $this->modele = new Modele('localhost', 'bonbec', 'root', '');
    }

    public function insertUser($data) {
        $this->modele->insertUser($data);
    }

    public function selectAllUsers() {
        return $this->modele->selectAllUsers();
    }

    public function selectWhereUser($id) {
        return $this->modele->selectWhereUser($id);
    }

    public function updateUser($data) {
        $this->modele->updateUser($data);
    }

    public function deleteUser($id) {
        $this->modele->deleteUser($id);
    }

    public function count($table) {
        return $this->modele->count($table);
    }
}
?>
