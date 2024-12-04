<h3 style="text-align: center; color: #ff69b4; font-family: 'Comic Sans MS', cursive; margin-bottom: 20px;">
    🍬 Ajout/Modification d'un utilisateur 🍭
</h3>
<form method="post" style="background: #fff0f5; padding: 20px; border-radius: 15px; box-shadow: 0 4px 8px rgba(255, 105, 180, 0.3); width: 100%; max-width: 600px; margin: auto;">
    <table style="width: 100%; font-family: 'Comic Sans MS', cursive; color: #d10080; font-size: 14px;">
        <tr>
            <td style="padding: 10px;">Nom :</td>
            <td><input type="text" name="nom" value="<?= isset($user) ? htmlspecialchars($user['nom']) : '' ?>" required style="width: 100%; padding: 8px; border: 2px solid #ff69b4; border-radius: 8px;"></td>
        </tr>
        <tr>
            <td style="padding: 10px;">Prénom :</td>
            <td><input type="text" name="prenom" value="<?= isset($user) ? htmlspecialchars($user['prenom']) : '' ?>" required style="width: 100%; padding: 8px; border: 2px solid #ff69b4; border-radius: 8px;"></td>
        </tr>
        <tr>
            <td style="padding: 10px;">Email :</td>
            <td><input type="email" name="email" value="<?= isset($user) ? htmlspecialchars($user['email']) : '' ?>" required style="width: 100%; padding: 8px; border: 2px solid #ff69b4; border-radius: 8px;"></td>
        </tr>
        <tr>
            <td style="padding: 10px;">Adresse :</td>
            <td><input type="text" name="adresse" value="<?= isset($user) ? htmlspecialchars($user['adresse']) : '' ?>" style="width: 100%; padding: 8px; border: 2px solid #ff69b4; border-radius: 8px;"></td>
        </tr>
        <tr>
            <td style="padding: 10px;">Code postal :</td>
            <td><input type="text" name="code_postale" value="<?= isset($user) ? htmlspecialchars($user['code_postale']) : '' ?>" style="width: 100%; padding: 8px; border: 2px solid #ff69b4; border-radius: 8px;"></td>
        </tr>
        <tr>
            <td style="padding: 10px;">Ville :</td>
            <td><input type="text" name="city" value="<?= isset($user) ? htmlspecialchars($user['city']) : '' ?>" style="width: 100%; padding: 8px; border: 2px solid #ff69b4; border-radius: 8px;"></td>
        </tr>
        <tr>
            <td style="padding: 10px;">Mot de passe :</td>
            <td>
                <input type="password" name="password" <?= isset($user) ? '' : 'required' ?> style="width: 100%; padding: 8px; border: 2px solid #ff69b4; border-radius: 8px;">
                <?= isset($user) ? "<p style='font-size: 12px; color: #555;'>Laissez vide si inchangé</p>" : "" ?>
            </td>
        </tr>
        <tr>
            <td style="padding: 10px;">Administrateur :</td>
            <td>
                <select name="admin" style="width: 100%; padding: 8px; border: 2px solid #ff69b4; border-radius: 8px;">
                    <option value="1" <?= isset($user) && $user['admin'] == 1 ? 'selected' : '' ?>>Oui</option>
                    <option value="0" <?= isset($user) && $user['admin'] == 0 ? 'selected' : '' ?>>Non</option>
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td style="text-align: center;">
                <input type="submit" <?= isset($user) ? 'name="Modifier" value="Modifier"' : 'name="Valider" value="Valider"' ?> style="background: #ff69b4; color: white; border: none; border-radius: 8px; padding: 10px 20px; font-size: 14px; cursor: pointer;">
                <input type="button" onclick="annulerModification()" value="Annuler" style="background: #ff8585; color: white; border: none; border-radius: 8px; padding: 10px 20px; font-size: 14px; cursor: pointer;">
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
