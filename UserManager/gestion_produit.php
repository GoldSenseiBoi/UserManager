<?php
require_once('controllers/controller.class.php');
$unControleur = new Controller();

$produit = null;

// Gestion des actions (supprimer ou éditer un produit)
if (isset($_GET['action']) && isset($_GET['idProduit'])) {
    $idProduit = intval($_GET['idProduit']); // Sécurisation de l'ID
    switch ($_GET['action']) {
        case 'sup':
            $unControleur->deleteProduit($idProduit);
            break;
        case 'edit':
            $produit = $unControleur->selectWhereProduit($idProduit);
            break;
    }
}

// Gestion des actions via POST (ajout, modification, filtre)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['Modifier'])) {
        // Sécurisation des données utilisateur
        $data = array_map('htmlspecialchars', $_POST);
        $unControleur->updateProduit($data);
    } elseif (isset($_POST['Valider'])) {
        
        $data = array_map('htmlspecialchars', $_POST);
        $unControleur->insertProduit($data);
    }
}

// Gestion des filtres
$lesProduits = [];
if (isset($_POST['Filtrer']) && !empty($_POST['filtre'])) {
    $filtre = '%' . htmlspecialchars($_POST['filtre']) . '%'; // Ajout du caractère de filtre SQL
    $lesProduits = $unControleur->selectLikeProduit($filtre);
} else {
    $lesProduits = $unControleur->selectAllProduits();
}

// Appel des vues pour l'affichage
require_once('views/vue_insert_produit.php');
require_once('views/vue_select_produit.php');
?>
