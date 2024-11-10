<?php
class Modele {
    private $conn;

    public function __construct($host, $dbname, $username, $password) {
        try {
            $this->conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Erreur de connexion : " . $e->getMessage();
        }
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
            ':password' => password_hash($data['password'], PASSWORD_BCRYPT),
            ':admin' => isset($data['admin']) ? 1 : 0
        ]);
    }

    public function selectAllUsers() {
        $query = "SELECT * FROM user";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function selectWhereUser($id) {
        $query = "SELECT * FROM user WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function updateUser($data) {
        $query = "UPDATE user SET nom = :nom, prenom = :prenom, email = :email, adresse = :adresse, 
                  code_postale = :code_postale, city = :city, admin = :admin WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([
            ':nom' => $data['nom'],
            ':prenom' => $data['prenom'],
            ':email' => $data['email'],
            ':adresse' => $data['adresse'],
            ':code_postale' => $data['code_postale'],
            ':city' => $data['city'],
            ':admin' => isset($data['admin']) ? 1 : 0,
            ':id' => $data['id']
        ]);
    }

    public function deleteUser($id) {
        $query = "DELETE FROM user WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([':id' => $id]);
    }

    public function count($table) {
        $query = "SELECT COUNT(*) AS nb FROM $table";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Fonction verifConnexion pour authentifier l'utilisateur
    public function verifConnexion($email, $password) {
        $query = "SELECT * FROM user WHERE email = :email";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([':email' => $email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            // Mot de passe valide
            return $user;
        }
        
        // Retourne null si l'authentification échoue
        return null;
    }
}
?>
