<?php
require_once('controllers/controller.class.php');
$unControleur = new Controller();

$user = null;
if (isset($_GET['action']) && isset($_GET['idUser'])) {
    $idUser = $_GET['idUser'];
    switch ($_GET['action']) {
        case 'sup':
            $unControleur->deleteUser($idUser);
            break;
        case 'edit':
            $user = $unControleur->selectWhereUser($idUser);
            break;
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['Modifier'])) {
        $unControleur->updateUser($_POST);
    } elseif (isset($_POST['Valider'])) {
        $unControleur->insertUser($_POST);
    }
    echo '<script>window.location.href="index.php?page=gestion_user";</script>';
}




if (isset($_POST['Filtrer'])) {
    $lesUtilisateurs = $unControleur->selectLikeUser($_POST['filtre']);
} else {
    $lesUtilisateurs = $unControleur->selectAllUsers();
}

require_once('views/vue_insert_user.php');
require_once('views/vue_select_users.php');
?>
