<form method="post" action="traitement-insert-user.php">
    <label>Nom:</label>
    <input type="text" name="nom" required value="<?= $lUtilisateur['nom'] ?? '' ?>">
    <label>Prénom:</label>
    <input type="text" name="prenom" required value="<?= $lUtilisateur['prenom'] ?? '' ?>">
    <label>Email:</label>
    <input type="email" name="email" required value="<?= $lUtilisateur['email'] ?? '' ?>">
    <label>Adresse:</label>
    <input type="text" name="adresse" required value="<?= $lUtilisateur['adresse'] ?? '' ?>">
    <label>Code postal:</label>
    <input type="text" name="code_postale" required value="<?= $lUtilisateur['code_postale'] ?? '' ?>">
    <label>Ville:</label>
    <input type="text" name="city" required value="<?= $lUtilisateur['city'] ?? '' ?>">
    <label>Mot de passe:</label>
    <input type="password" name="password" required>
    <label>Admin:</label>
    <input type="checkbox" name="admin" <?= isset($lUtilisateur['admin']) && $lUtilisateur['admin'] == 1 ? 'checked' : '' ?>>
    <button type="submit" name="<?= $lUtilisateur ? 'Modifier' : 'Valider' ?>"><?= $lUtilisateur ? 'Modifier' : 'Ajouter' ?></button>
    <?php if ($lUtilisateur): ?>
        <button type="submit" name="Annuler">Annuler</button>
    <?php endif; ?>
</form>
