<?php
require_once('controllers/controller.class.php');
$unControleur = new Controller();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = htmlspecialchars($_POST['nom']);
    $prix = htmlspecialchars($_POST['prix']);

    if ($nom && $prix) {
        $data = ['nom' => $nom, 'prix' => $prix];

        try {
            $unControleur->insertProduit($data);
            header("Location: index.php?page=produits"); // Redirection après insertion
            exit();
        } catch (Exception $e) {
            echo "Erreur lors de l'insertion : " . $e->getMessage();
        }
    } else {
        echo "Veuillez remplir tous les champs.";
    }
}
?>
