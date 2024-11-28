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
    $data = [
        'nom' => isset($_POST['nom']) ? htmlspecialchars($_POST['nom'], ENT_QUOTES, 'UTF-8') : '',
        'prenom' => isset($_POST['prenom']) ? htmlspecialchars($_POST['prenom'], ENT_QUOTES, 'UTF-8') : '',
        'email' => isset($_POST['email']) ? htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8') : '',
        'adresse' => isset($_POST['adresse']) ? htmlspecialchars($_POST['adresse'], ENT_QUOTES, 'UTF-8') : '',
        'code_postal' => isset($_POST['code_postal']) ? htmlspecialchars($_POST['code_postal'], ENT_QUOTES, 'UTF-8') : '',
        'ville' => isset($_POST['ville']) ? htmlspecialchars($_POST['ville'], ENT_QUOTES, 'UTF-8') : '',
        'admin' => isset($_POST['admin']) ? intval($_POST['admin']) : 0,
        'password' => isset($_POST['password']) && $_POST['password'] !== '' ? sha1($_POST['password']) : null
    ];
    
    

    if (isset($_POST['id']) && $_POST['id'] !== '') {
        $data['id'] = intval($_POST['id']);
        $unControleur->updateUser($data);
    } else {
        $unControleur->insertUser($data);
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
