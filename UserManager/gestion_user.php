<?php
echo '<h2> Gestion des Utilisateurs </h2><br /><br />';


$lUtilisateur = null;

if (isset($_GET['action']) && isset($_GET['idUser'])) {
    $idUser = $_GET['idUser'];
    $action = $_GET['action'];

    switch ($action) {
        case "sup":
            $unControleur->deleteUser($idUser);
            break;
        case "edit":
            $lUtilisateur = $unControleur->selectWhereUser($idUser);
            break;
        case "voir":
            $detailsUser = $unControleur->selectWhereUser($idUser);
            break;
    }
}


require_once("views/vue_insert_user.php");

if (isset($_POST['Valider'])) {
    $unControleur->insertUser($_POST);
}


if (isset($_POST['Modifier'])) {
    $unControleur->updateUser($_POST);
    echo '
    <script language="javascript">
        window.location.href="index.php?page=3";
    </script>';
}


if (isset($_POST['Annuler'])) {
    $lUtilisateur = null;
    echo '
    <script language="javascript">
        window.location.href="index.php?page=3";
    </script>';
}


$lesUtilisateurs = $unControleur->selectAllUsers();


$nb = $unControleur->count("user")['nb'];
echo "<br> Nombre d'utilisateurs : " . $nb;


require_once("views/vue_select_users.php");
?>
