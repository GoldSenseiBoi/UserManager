<?php
ob_start(); // Empêche l'envoi prématuré d'en-têtes
require_once('controllers/controller.class.php'); // Chemin ajusté selon l'emplacement
$unControleur = new Controller();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données du formulaire
    $email = isset($_POST['email']) ? htmlspecialchars(trim($_POST['email'])) : null;
    $password = isset($_POST['password']) ? sha1(trim($_POST['password'])) : null;

    if ($email && $password) {
        try {
            // Vérifier les identifiants avec la méthode du contrôleur
            $user = $unControleur->verifConnexion($email, $password);

            if ($user) {
                // Authentification réussie
                session_start();
                $_SESSION['id'] = $user['id'];
                $_SESSION['nom'] = $user['nom'];
                $_SESSION['prenom'] = $user['prenom'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['admin'] = $user['admin']; // Stocke 1 pour admin, 0 sinon
                //var_dump($_SESSION);
                //exit();


                // Redirection vers la page d'accueil
                header("Location: index.php?page=accueil");
                exit();
            } else {
                // Authentification échouée
                echo "Identifiants incorrects. Veuillez réessayer.";
            }
        } catch (Exception $e) {
            echo "Erreur lors de la connexion : " . $e->getMessage();
        }
    } else {
        echo "Veuillez remplir tous les champs.";
    }
} else {
    echo "Méthode non autorisée.";
}
ob_end_flush();
