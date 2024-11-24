<h3>Liste des utilisateurs</h3>
<form method="post">
    <p>Filtrer par : </p>
    <input type="text" name="filtre" placeholder="Nom de l'utilisateur">
    <input type="submit" name="Filtrer" value="Filtrer">
</form>
<br>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Adresse</th>
            <th>Code postal</th>
            <th>Ville</th>
            <th>Admin</th>
            <th>Opération</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if (isset($lesUtilisateurs) && is_array($lesUtilisateurs)) {
            foreach ($lesUtilisateurs as $user) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($user['id']) . "</td>";
                echo "<td>" . htmlspecialchars($user['nom']) . "</td>";
                echo "<td>" . htmlspecialchars($user['prenom']) . "</td>";
                echo "<td>" . htmlspecialchars($user['email']) . "</td>";
                echo "<td>" . htmlspecialchars($user['adresse']) . "</td>";
                echo "<td>" . htmlspecialchars($user['code_postale']) . "</td>";
                echo "<td>" . htmlspecialchars($user['city']) . "</td>";
                echo "<td>" . ($user['admin'] ? 'Oui' : 'Non') . "</td>";
                echo "<td>";
                echo "<a href='gestion_user.php?action=sup&idUser=" . $user['id'] . "'><img src='image/supprimer.png' height='30' width='30'></a>";
                echo "<a href='gestion_user.php?action=edit&idUser=" . $user['id'] . "'><img src='image/editer.png' height='30' width='30'></a>";
                echo "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='9'>Aucun utilisateur trouvé.</td></tr>";
        }
        ?>
    </tbody>
</table>
