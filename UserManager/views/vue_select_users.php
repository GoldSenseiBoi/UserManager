<h3 style="text-align: center; color: #ff69b4; font-family: 'Comic Sans MS', cursive; margin-bottom: 20px;">
    🍬 Liste des utilisateurs 🍭
</h3>
<form method="post" style="text-align: center; margin-bottom: 20px;">
    <p style="font-family: 'Comic Sans MS', cursive; color: #d10080; font-size: 16px;">Filtrer par :</p>
    <input type="text" name="filtre" placeholder="Nom ou prénom de l'utilisateur" style="padding: 8px; border: 2px solid #ff69b4; border-radius: 8px; font-size: 14px; width: 250px;">
    <input type="submit" name="Filtrer" value="Filtrer" style="background: #ff69b4; color: white; border: none; border-radius: 8px; padding: 8px 20px; font-size: 14px; cursor: pointer;">
</form>
<br>
<table class="table table-bordered" style="width: 100%; max-width: 900px; margin: auto; border-collapse: collapse; font-family: 'Comic Sans MS', cursive; color: #d10080; font-size: 14px;">
    <thead>
        <tr style="background: #ff69b4; color: white;">
            <th style="padding: 10px; border: 1px solid #ff69b4;">ID</th>
            <th style="padding: 10px; border: 1px solid #ff69b4;">Nom</th>
            <th style="padding: 10px; border: 1px solid #ff69b4;">Prénom</th>
            <th style="padding: 10px; border: 1px solid #ff69b4;">Email</th>
            <th style="padding: 10px; border: 1px solid #ff69b4;">Adresse</th>
            <th style="padding: 10px; border: 1px solid #ff69b4;">Code postal</th>
            <th style="padding: 10px; border: 1px solid #ff69b4;">Ville</th>
            <th style="padding: 10px; border: 1px solid #ff69b4;">Admin</th>
            <th style="padding: 10px; border: 1px solid #ff69b4;">Opérations</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if (isset($lesUtilisateurs)) {
            foreach ($lesUtilisateurs as $user) {
                echo "<tr style='text-align: center;'>";
                echo "<td style='padding: 10px; border: 1px solid #ff69b4;'>" . htmlspecialchars($user['id']) . "</td>";
                echo "<td style='padding: 10px; border: 1px solid #ff69b4;'>" . htmlspecialchars($user['nom']) . "</td>";
                echo "<td style='padding: 10px; border: 1px solid #ff69b4;'>" . htmlspecialchars($user['prenom']) . "</td>";
                echo "<td style='padding: 10px; border: 1px solid #ff69b4;'>" . htmlspecialchars($user['email']) . "</td>";
                echo "<td style='padding: 10px; border: 1px solid #ff69b4;'>" . htmlspecialchars($user['adresse']) . "</td>";
                echo "<td style='padding: 10px; border: 1px solid #ff69b4;'>" . htmlspecialchars($user['code_postale']) . "</td>";
                echo "<td style='padding: 10px; border: 1px solid #ff69b4;'>" . htmlspecialchars($user['city']) . "</td>";
                echo "<td style='padding: 10px; border: 1px solid #ff69b4;'>" . ($user['admin'] ? 'Oui' : 'Non') . "</td>";
                echo "<td style='padding: 10px; border: 1px solid #ff69b4;'>";
                echo "<a href='index.php?page=gestion_user&action=edit&idUser=" . $user['id'] . "' title='Modifier'>
                        <img src='image/editer.png' height='30' width='30' alt='Modifier' style='margin-right: 10px;'>
                      </a>";
                echo "<a href='index.php?page=gestion_user&action=sup&idUser=" . $user['id'] . "' title='Supprimer'>
                        <img src='image/supprimer.png' height='30' width='30' alt='Supprimer'>
                      </a>";
                echo "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='9' style='text-align: center; padding: 10px; border: 1px solid #ff69b4;'>Aucun utilisateur trouvé.</td></tr>";
        }
        ?>
    </tbody>
</table>
