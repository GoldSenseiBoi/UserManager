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
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($lesUtilisateurs as $user): ?>
            <tr>
                <td><?= htmlspecialchars($user['id']) ?></td>
                <td><?= htmlspecialchars($user['nom']) ?></td>
                <td><?= htmlspecialchars($user['prenom']) ?></td>
                <td><?= htmlspecialchars($user['email']) ?></td>
                <td><?= htmlspecialchars($user['adresse']) ?></td>
                <td><?= htmlspecialchars($user['code_postale']) ?></td>
                <td><?= htmlspecialchars($user['city']) ?></td>
                <td><?= $user['admin'] ? 'Oui' : 'Non' ?></td>
                <td>
                    <a href="gestion_user.php?action=sup&idUser=<?= $user['id'] ?>">Supprimer</a>
                    <a href="gestion_user.php?action=edit&idUser=<?= $user['id'] ?>">Modifier</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
