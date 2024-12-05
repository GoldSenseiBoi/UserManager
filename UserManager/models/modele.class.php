<?php

require_once('config/database.php');

$db = new database();
$conn = $db->getConnection();


class modele {
    private $conn;

    public function __construct() {
        $db = new database();
        $this->conn = $db->getConnection();
    }

    public function insertUser($data) {
        $query = "INSERT INTO user (nom, prenom, email, adresse, code_postale, city, password, admin)
                  VALUES (:nom, :prenom, :email, :adresse, :code_postale, :city, :password, :admin)";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([
            ':nom' => $data['nom'],
            ':prenom' => $data['prenom'],
            ':email' => $data['email'],
            ':adresse' => $data['adresse'],
            ':code_postale' => $data['code_postale'],
            ':city' => $data['city'],
            ':password' => $data['password'],
            ':admin' => 0 // Par défaut, non administrateur
        ]);
    }
    

    public function selectAllUsers() {
        $query = "SELECT * FROM user";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function selectLikeUser($filtre) {
        $query = "SELECT * FROM user WHERE nom LIKE :filtre OR prenom LIKE :filtre";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([':filtre' => "%$filtre%"]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    

    public function selectWhereUser($id) {
        $query = "SELECT * FROM user WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC); // Retourne un tableau associatif
    }
    

    public function updateUser($data) {
        $query = "UPDATE user SET 
                    nom = :nom, 
                    prenom = :prenom, 
                    email = :email, 
                    adresse = :adresse, 
                    code_postale = :code_postale, 
                    city = :city, 
                    password = :password, 
                    admin = :admin 
                  WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([
            ':nom' => $data['nom'],
            ':prenom' => $data['prenom'],
            ':email' => $data['email'],
            ':adresse' => $data['adresse'],
            ':code_postale' => $data['code_postale'],
            ':city' => $data['city'],
            ':password' => sha1($data['password']), // Crypter le mot de passe
            ':admin' => $data['admin'],
            ':id' => $data['id']
        ]);
    }
    

    public function deleteUser($id) {
        $query = "DELETE FROM user WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([':id' => $id]);
    }
    
    public function selectAllProduits() {
        $query = "SELECT * FROM produit"; // Assure-toi que la table s'appelle bien 'produit'
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function selectLikeProduit($filtre) {
        $requete = "SELECT * FROM produit WHERE nom LIKE :filtre";
        $donnees = array(":filtre" => "%".$filtre."%");
		$select = $this->conn->prepare($requete);
		$select->execute($donnees);
		return $select->fetchAll();
    }
    

    public function selectWhereProduit($id) {
        $query = "SELECT * FROM produit WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    public function updateProduit($data) {
        $query = "UPDATE produit SET nom = :nom, prix = :prix WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([
            ':nom' => $data['nom'],
            ':prix' => $data['prix'],
            ':id' => $data['id']
        ]);
    }
    
    
    public function deleteProduit($id) {
        $query = "DELETE FROM produit WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([':id' => $id]);
    }
    
    public function insertProduit($data) {
        $query = "INSERT INTO produit (nom, prix) VALUES (:nom, :prix)";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([
            ':nom' => $data['nom'],
            ':prix' => $data['prix']
        ]);
    }
    

    public function count($table) {
        $query = "SELECT COUNT(*) AS nb FROM $table";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Fonction verifConnexion pour authentifier l'utilisateur
    public function verifConnexion($email, $password) {
        $query = "SELECT * FROM user WHERE email = :email AND password = :password";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([
            ':email' => $email,
            ':password' => $password
        ]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getProduits()
{
    try {
        // Requête SQL pour récupérer les produits
        $query = "SELECT id, nom, prix FROM produit";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC); // Retourne un tableau de produits
    } catch (PDOException $e) {
        // Gestion des erreurs
        die("Erreur lors de la récupération des produits : " . $e->getMessage());
    }
}

    
}
?>
