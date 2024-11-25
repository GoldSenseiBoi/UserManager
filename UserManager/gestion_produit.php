<?php
echo '<h2> Gestion des Produits </h2><br /><br />';

$lesProduits = $unControleur->selectAllProduits();


if (isset($_GET['action']) && isset($_GET['idProduit'])) {
    $idProduit = $_GET['idProduit'];
    $action = $_GET['action'];

    switch ($action) {
        case "sup":
            $unControleur->deleteProduit($idProduit);
            break;
        case "edit":
            $leProduit = $unControleur->selectWhereProduit($idProduit);
            break;
        case "voir":
            $detailsProduit = $unControleur->selectWhereProduit($idProduit);
            break;
    }
}

require_once("views/vue_insert_produit.php");

if (isset($_POST['Valider'])) {
    $unControleur->insertProduit($_POST);
}

if (isset($_POST['Modifier'])) {
    $unControleur->updateProduit($_POST);
    echo '
    <script language="javascript">
        window.location.href="index.php?page=2";
    </script>';
}

if (isset($_POST['Annuler'])) {
    $leProduit = null;
    echo '
    <script language="javascript">
        window.location.href="index.php?page=2";
    </script>';
}

if (isset($_POST['Filtrer'])) {
    $filtre = $_POST['filtre'];
    $lesProduits = $unControleur->selectLikeProduit($filtre);
} else {
    $lesProduits = $unControleur->selectAllProduits();
}

$nb = $unControleur->count("produit")['nb'];
echo "<br> Nombre de produits : " . $nb;


require_once("views/vue_select_produit.php");
?>
