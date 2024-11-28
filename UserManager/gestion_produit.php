<?php
require_once('controllers/controller.class.php');
$unControleur = new Controller();

$produit = null;
if (isset($_GET['action']) && isset($_GET['idProduit'])) {
    $idProduit = $_GET['idProduit'];
    switch ($_GET['action']) {
        case 'sup':
            $unControleur->deleteProduit($idProduit);
            break;
        case 'edit':
            $produit = $unControleur->selectWhereProduit($idProduit);
            break;
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['Modifier'])) {
        $unControleur->updateProduit($_POST);
    } elseif (isset($_POST['Valider'])) {
        $unControleur->insertProduit($_POST);
    }
    echo '<script>window.location.href="index.php?page=gestion_produits";</script>';
}

if (isset($_POST['Filtrer'])) {
    $lesProduits = $unControleur->selectLikeProduit($_POST['filtre']);
} else {
    $lesProduits = $unControleur->selectAllProduits();
}

require_once('views/vue_insert_produit.php');
require_once('views/vue_select_produit.php');
?>
