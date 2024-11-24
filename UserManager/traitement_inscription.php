<?php
ob_start();
require_once('controllers/controller.class.php'); // Chemin ajusté
$unControleur = new Controller();

// Traitement du formulaire
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer et valider les données
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $password = sha1($_POST['password']);

    $adresse = isset($_POST['adresse']) ? htmlspecialchars($_POST['adresse']) : '';
    $code_postale = isset($_POST['code_postale']) ? htmlspecialchars($_POST['code_postale']) : '';
    $city = isset($_POST['city']) ? htmlspecialchars($_POST['city']) : '';

    if ($nom && $prenom && $email && $password) {
        $data = [
            'nom' => $nom,
            'prenom' => $prenom,
            'email' => $email,
            'password' => $password,
            'adresse' => $adresse,
            'code_postale' => $code_postale,
            'city' => $city
        ];

        try {
            $unControleur->insertUser($data);
            header("Location: index.php?page=accueil"); // Redirection vers l'accueil
            exit();
        } catch (Exception $e) {
            echo "Erreur : " . $e->getMessage();
        }
    } else {
        echo "Tous les champs sont obligatoires.";
    }
} else {
    echo "Méthode non autorisée.";
}
ob_end_flush();
