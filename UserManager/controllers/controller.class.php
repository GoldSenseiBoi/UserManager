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

    public function selectLikeUser($keyword) {
        return $this->modele->selectLikeUser($keyword);
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

    public function selectAllProduits() {
        return $this->modele->selectAllProduits();
    }
    public function insertProduit($data) {
        $this->modele->insertProduit($data);
    }
    
    public function deleteProduit($id) {
        $this->modele->deleteProduit($id);
    }

    public function updateProduit($data) {
        $this->modele->updateProduit($data);
    }
    
    public function selectWhereProduit($id) {
        return $this->modele->selectWhereProduit($id);
    }
    
    public function selectLikeProduit($keyword) {
        return $this->modele->selectLikeProduit($keyword);
    }
    

    public function count($table) {
        return $this->modele->count($table);
    }
    
    public function verifConnexion($email, $password) {
        return $this->modele->verifConnexion($email, $password);
    }
}
?>
