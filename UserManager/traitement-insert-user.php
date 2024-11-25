<?php
require_once('controllers/controller.class.php');
$unControleur = new Controller();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $password = sha1($_POST['password']);

    if ($nom && $prenom && $email && $password) {
        $data = [
            'nom' => $nom,
            'prenom' => $prenom,
            'email' => $email,
            'adresse' => '',
            'code_postale' => '',
            'city' => '',
            'password' => $password,
            'admin' => 0
        ];

        try {
            $unControleur->insertUser($data);
            header("Location: index.php?page=users"); // Redirection après insertion
            exit();
        } catch (Exception $e) {
            echo "Erreur lors de l'insertion : " . $e->getMessage();
        }
    } else {
        echo "Tous les champs sont obligatoires.";
    }
}
?>
