<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/GitHub/Ghost_reader/UserManager/UserManager/models/modele.class.php');

class controller {
    private $modele;

    public function __construct() {
        $this->modele = new modele('localhost', 'bonbec', 'root', '');
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
    
    public function verifConnexion($email, $password) {
        return $this->modele->verifConnexion($email, $password);
    }
}
?>
