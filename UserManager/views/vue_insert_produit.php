<h3 style="text-align: center; color: #ff69b4; font-family: 'Comic Sans MS', cursive; margin-bottom: 20px;">
    🍬 Ajout/Modification d'un produit 🍭
</h3>
<form method="post" style="background: #fff0f5; padding: 20px; border-radius: 15px; box-shadow: 0 4px 8px rgba(255, 105, 180, 0.3); width: 100%; max-width: 500px; margin: auto;">
    <table style="width: 100%; font-family: 'Comic Sans MS', cursive; color: #d10080; font-size: 14px;">
        <tr>
            <td style="padding: 10px;">Nom du produit :</td>
            <td><input type="text" name="nom" value="<?= isset($produit) ? htmlspecialchars($produit['nom']) : '' ?>" required style="width: 100%; padding: 8px; border: 2px solid #ff69b4; border-radius: 8px;"></td>
        </tr>
        <tr>
            <td style="padding: 10px;">Prix du produit :</td>
            <td><input type="number" step="0.01" name="prix" value="<?= isset($produit) ? htmlspecialchars($produit['prix']) : '' ?>" required style="width: 100%; padding: 8px; border: 2px solid #ff69b4; border-radius: 8px;"></td>
        </tr>
        <tr>
            <td style="padding: 10px;"></td>
            <td style="text-align: center;">
                <input type="submit" <?= isset($produit) ? 'name="Modifier" value="Modifier"' : 'name="Valider" value="Valider"' ?> style="background: #ff69b4; color: white; border: none; border-radius: 8px; padding: 10px 20px; font-size: 14px; cursor: pointer;">
                <input type="button" onclick="annulerModification()" value="Annuler" style="background: #ff8585; color: white; border: none; border-radius: 8px; padding: 10px 20px; font-size: 14px; cursor: pointer;">
            </td>
        </tr>
        <?= isset($produit) ? '<input type="hidden" name="id" value="'.htmlspecialchars($produit['id']).'">' : '' ?>
    </table>
</form>
<script>
function annulerModification() {
    window.location.href = "index.php?page=gestion_produits";
}
</script>
