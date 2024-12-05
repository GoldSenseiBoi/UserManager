<?php
// Démarrer la session si elle n'est pas déjà démarrée
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Charger les fichiers nécessaires
require_once('controllers/controller.class.php');
$unControleur = new Controller();

$isAdmin = isset($_SESSION['admin']) && $_SESSION['admin'] == 1;

?>
<!DOCTYPE html>
<html>
<head>
    <title>🍬 Bonbec Paradise 🍭</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <style>
        .container {
            margin-top: 10px;
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
<header style="background: linear-gradient(to right, #ff7eb3, #ff758c, #ff7eb3); padding: 20px; text-align: center; color: white; font-family: 'Comic Sans MS', cursive; box-shadow: 0 4px 8px rgba(255, 105, 180, 0.3);">
    <h1 style="font-size: 2.5em; margin: 0;">
        🍬 Bonbec Paradise 🍭
    </h1>
</header>

    <?php
    if (!isset($_SESSION['email'])) {
        if (isset($_GET['page']) && $_GET['page'] == 'inscription') {
            require_once("views/vue_inscription.php");
        } else {
            require_once("views/vue_connexion.php");
            $isAdmin = isset($_SESSION['admin']) && $_SESSION['admin'] == 1;
        }

        if (isset($_POST['seConnecter'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $user = $unControleur->verifConnexion($email, $password);
        
            if ($user) {
                // Authentification réussie
                $_SESSION['id'] = $user['id'];
                $_SESSION['nom'] = $user['nom'];
                $_SESSION['prenom'] = $user['prenom'];
                $_SESSION['email'] = $user['email'];
                header("Location: index.php?page=accueil");
                exit();
            } else {
                echo "<p class='text-danger'>Identifiant ou mot de passe incorrect</p>";
            }
        }
    } else {
        if ($isAdmin) {
        // Si l'utilisateur admin est connecté, afficher la page d'accueil avec les options
            echo "<div class='container'>
            <div class='row'>
                <div class='col-md-9 offset-md-2 text-center' style='margin-top: 20px;'>
                    
                    <p class='lead' style='font-family: \"Comic Sans MS\", cursive; color: #d10080;'>
                        Bonjour <strong>" . htmlspecialchars($_SESSION['prenom']) . "</strong>, explorez notre sélection de bonbons et gérez les fonctionnalités disponibles !
                    </p>
                </div>
            </div>
            </div>";

            echo '
            <div class="row justify-content-center" style="margin-top: 20px;">
            <div class="col-md-3">
            <div class="card text-center" style="border: 2px solid #ff69b4; border-radius: 15px;">
                <div class="card-body">
                    <a href="index.php?page=accueil" title="Accueil">
                        <img src="image/accueil.png" class="card-img-top" alt="Accueil" style="border-radius: 10px;">
                    </a>
                    <h5 class="card-title" style="font-family: \"Comic Sans MS\", cursive; color: #ff69b4;">Accueil</h5>
                </div>
            </div>
            </div>
            <div class="col-md-3">
            <div class="card text-center" style="border: 2px solid #ff69b4; border-radius: 15px;">
                <div class="card-body">
                    <a href="index.php?page=gestion_produits" title="Gestion des produits">
                        <img src="image/bonbon.png" class="card-img-top" alt="Gestion des produits" style="border-radius: 10px;">
                    </a>
                    <h5 class="card-title" style="font-family: \"Comic Sans MS\", cursive; color: #ff69b4;">Gestion des produits</h5>
                </div>
            </div>
            </div>
            <div class="col-md-3">
            <div class="card text-center" style="border: 2px solid #ff69b4; border-radius: 15px;">
                <div class="card-body">
                    <a href="index.php?page=gestion_user" title="Gestion des utilisateurs">
                        <img src="image/utilisateur.png" class="card-img-top" alt="Gestion des utilisateurs" style="border-radius: 10px;">
                    </a>
                    <h5 class="card-title" style="font-family: \"Comic Sans MS\", cursive; color: #ff69b4;">Gestion des utilisateurs</h5>
                </div>
            </div>
            </div>
            <div class="col-md-3">
            <div class="card text-center" style="border: 2px solid #ff69b4; border-radius: 15px;">
                <div class="card-body">
                    <a href="index.php?page=deconnexion" title="Déconnexion">
                        <img src="image/deconnexion.png" class="card-img-top" alt="Déconnexion" style="border-radius: 10px;">
                    </a>
                    <h5 class="card-title" style="font-family: \"Comic Sans MS\", cursive; color: #ff69b4;">Déconnexion</h5>
                </div>
            </div>
            </div>
            </div>';
        } else {
            
           // Affichage des produits pour les utilisateurs non-admins
        echo '<h2 class="text-center mt-4" style="font-family: \'Comic Sans MS\', cursive; color: #ff69b4;"> Nos produits </h2>';
        echo '<div class="container">';
        echo '<div class="row justify-content-center">';

        // Bouton Déconnexion placé en haut
        ?>
        <div class="col-12 text-right mb-3">
            <a href="index.php?page=deconnexion" class="btn btn-danger" style="background: #ff8585; border: none; font-family: 'Comic Sans MS', cursive;">Déconnexion</a>
        </div>

        <div class="col-12 text-center">
            <p class="lead" style="font-family: 'Comic Sans MS', cursive; color: #d10080;">
                Bonjour <strong><?= htmlspecialchars($_SESSION['prenom']); ?></strong>, explorez notre sélection de bonbons !
            </p>
        </div>

        <?php
        // Récupération des produits depuis le contrôleur
        $produits = $unControleur->getProduits();

        // Boucle pour afficher chaque produit sous forme de carte
        foreach ($produits as $produit): ?>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm text-center" style="border-radius: 15px; border: 2px solid #ff69b4;">
                    <div class="d-flex justify-content-center align-items-center" style="height: 200px; background: #fff0f5; border-radius: 15px 15px 0 0;">
                        <img class="card-img-top" src="image/bonbon.png" alt="<?= htmlspecialchars($produit['nom']); ?>" style="width: 50%; height: auto;">
                    </div>
                    <div class="card-body text-center" style="font-family: 'Comic Sans MS', cursive; color: #d10080;">
                        <h5 class="card-title"><?= htmlspecialchars($produit['nom']); ?></h5>
                        <p class="card-text font-weight-bold">Prix : <?= htmlspecialchars($produit['prix']); ?> €</p>
                    </div>
                </div>
            </div>
        <?php endforeach;

        echo '</div>'; // Fin row
        echo '</div>'; // Fin container


        }

    }

    // Gestion des pages avec switch
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = 'accueil';
    }

    //var_dump($page, $_GET); test 

    switch ($page) {
        case 'accueil':
            require_once("index.php");
            break;
        case 'gestion_produits':
            require_once("gestion_produit.php");
            break;
        case 'gestion_user': // Corrigé pour correspondre à l'URL
            require_once("gestion_user.php");
            break;
        case 'deconnexion':
            session_destroy();
            unset($_SESSION['email']);
            echo '<script language="javascript">window.location.href="index.php";</script>';
            exit();
            break;
        default:
            echo "<p>Erreur : Page non trouvée.</p>";
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
