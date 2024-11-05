<?php
session_start();
require_once("controller/controller.class.php");
$unControleur = new Controleur();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Bonbec - Site de Bonbons</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <style>
        .container {
            margin-top: 30px;
        }
        .card {
            margin-bottom: 20px;
        }
        .card-img-top {
            width: 100px;
            height: 100px;
            object-fit: cover;
        }
        .card-title {
            text-align: center;
            margin-top: 10px;
        }
        .footer {
            width: 100%;
            background-color: #f8f9fa;
            padding: 10px 0;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="container">
    <?php
    if (!isset($_SESSION['email'])) {
        require_once("views/vue_connexion.php");
    }

    if (isset($_POST['seConnecter'])) {
        $email = $_POST['email'];
        $mdp = $_POST['mdp'];
        $unUser = $unControleur->verifConnexion($email, $mdp);

        if ($unUser != null) {
            $_SESSION['prenom'] = $unUser['prenom'];
            $_SESSION['email'] = $unUser['email'];
            header("Location: index.php?page=1");
        } else {
            echo "<br>Identifiant ou mot de passe incorrect";
        }
    }

    if (isset($_SESSION['email'])) {
        echo "<div class='container'>
                <div class='row'>
                    <div class='col-md-9 offset-md-2 text-center'>
                        <h1>Bienvenue sur le site de Bonbec</h1>
                        <p class='lead'>Bonjour " . $_SESSION['prenom'] . ", explorez notre sélection de bonbons et gérez les fonctionnalités disponibles.</p>
                    </div>
                </div>
              </div>";

        
        echo '
        <div class="row justify-content-center">
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <a href="index.php?page=1" title="Accueil">
                            <img src="image/accueil.png" class="card-img-top" alt="Accueil">
                        </a>
                        <h5 class="card-title">Accueil</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <a href="index.php?page=2" title="Gestion des produits">
                            <img src="image/bonbon.png" class="card-img-top" alt="Gestion des produits">
                        </a>
                        <h5 class="card-title">Gestion des produits</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <a href="index.php?page=3" title="Gestion des utilisateurs">
                            <img src="image/utilisateur.png" class="card-img-top" alt="Gestion des utilisateurs">
                        </a>
                        <h5 class="card-title">Gestion des utilisateurs</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <a href="index.php?page=4" title="Déconnexion">
                            <img src="image/deconnexion.png" class="card-img-top" alt="Déconnexion">
                        </a>
                        <h5 class="card-title">Déconnexion</h5>
                    </div>
                </div>
            </div>
        </div>';
    }

    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = 1; 
    }

    switch ($page) {
        case 1: require_once("vue/vue_accueil.php"); break;
        case 2: require_once("gestion_produit.php"); break;
        case 3: require_once("gestion_user.php"); break;
        case 4:
            session_destroy();
            unset($_SESSION['email']);
            echo '<script language="javascript">window.location.href="index.php";</script>';
            break;
    }
    ?>
</div>

<br /><br />
<footer class="footer">
    <div class="container">
        <span class="text-muted">© 2024 Bonbec. Tous droits réservés.</span>
    </div>
</footer>

</body>
</html>
