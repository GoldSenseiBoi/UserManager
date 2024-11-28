<h3>Ajout/Modification d'un produit</h3>
<form method="post">
    <table>
        <tr>
            <td>Nom du produit</td>
            <td><input type="text" name="nom" value="<?= isset($produit) ? htmlspecialchars($produit['nom']) : '' ?>" required></td>
        </tr>
        <tr>
            <td>Prix du produit</td>
            <td><input type="number" step="0.01" name="prix" value="<?= isset($produit) ? htmlspecialchars($produit['prix']) : '' ?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" <?= isset($produit) ? 'name="Modifier" value="Modifier"' : 'name="Valider" value="Valider"' ?>>
                <input type="button" onclick="annulerModification()" value="Annuler">
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
