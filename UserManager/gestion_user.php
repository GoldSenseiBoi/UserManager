<?php
require_once('controllers/controller.class.php');
$unControleur = new Controller();

$user = null;

// Gestion des actions (supprimer ou éditer un utilisateur)
if (isset($_GET['action']) && isset($_GET['idUser'])) {
    $idUser = intval($_GET['idUser']); // Sécurisation de l'ID
    switch ($_GET['action']) {
        case 'sup':
            $unControleur->deleteUser($idUser);
            break;
        case 'edit':
            $user = $unControleur->selectWhereUser($idUser);
            break;
    }
}

// Gestion des actions via POST (ajout, modification)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['Modifier'])) {
        // Sécurisation des données utilisateur
        $data = array_map('htmlspecialchars', $_POST);
        $unControleur->updateUser($data);
    } elseif (isset($_POST['Valider'])) {
        
        $data = array_map('htmlspecialchars', $_POST);
        $unControleur->insertUser($data);
    }
}

// Gestion des filtres
$lesUtilisateurs = [];
if (isset($_POST['Filtrer']) && !empty($_POST['filtre'])) {
    $filtre = '%' . htmlspecialchars($_POST['filtre']) . '%'; // Ajout du caractère de filtre SQL
    $lesUtilisateurs = $unControleur->selectLikeUser($filtre);
} else {
    $lesUtilisateurs = $unControleur->selectAllUsers();
}


require_once('views/vue_insert_user.php');
require_once('views/vue_select_users.php');
?>
