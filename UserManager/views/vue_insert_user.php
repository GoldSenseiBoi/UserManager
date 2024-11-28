<h3>Ajout/Modification d'un utilisateur</h3>
<form method="post">
    <table>
        <tr>
            <td>Nom :</td>
            <td><input type="text" name="nom" value="<?= isset($user) ? htmlspecialchars($user['nom']) : '' ?>" required></td>
        </tr>
        <tr>
            <td>Prénom :</td>
            <td><input type="text" name="prenom" value="<?= isset($user) ? htmlspecialchars($user['prenom']) : '' ?>" required></td>
        </tr>
        <tr>
            <td>Email :</td>
            <td><input type="email" name="email" value="<?= isset($user) ? htmlspecialchars($user['email']) : '' ?>" required></td>
        </tr>
        <tr>
            <td>Adresse :</td>
            <td><input type="text" name="adresse" value="<?= isset($user) ? htmlspecialchars($user['adresse']) : '' ?>"></td>
        </tr>
        <tr>
            <td>Code postal :</td>
            <td><input type="text" name="code_postale" value="<?= isset($user) ? htmlspecialchars($user['code_postale']) : '' ?>"></td>
        </tr>
        <tr>
            <td>Ville :</td>
            <td><input type="text" name="city" value="<?= isset($user) ? htmlspecialchars($user['city']) : '' ?>"></td>
        </tr>
        <tr>
            <td>Mot de passe :</td>
            <td>
                <input type="password" name="password" <?= isset($user) ? '' : 'required' ?>>
                <?= isset($user) ? "<p>Laissez vide si inchangé</p>" : "" ?>
            </td>
        </tr>
        <tr>
            <td>Administrateur :</td>
            <td>
                <select name="admin">
                    <option value="1" <?= isset($user) && $user['admin'] == 1 ? 'selected' : '' ?>>Oui</option>
                    <option value="0" <?= isset($user) && $user['admin'] == 0 ? 'selected' : '' ?>>Non</option>
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" <?= isset($user) ? 'name="Modifier" value="Modifier"' : 'name="Valider" value="Valider"' ?>>
                <input type="button" onclick="annulerModification()" value="Annuler">
            </td>
        </tr>
        <?= isset($user) ? '<input type="hidden" name="id" value="'.htmlspecialchars($user['id']).'">' : '' ?>
    </table>
</form>
<script>
function annulerModification() {
    window.location.href = "index.php?page=gestion_user";
}
</script>
