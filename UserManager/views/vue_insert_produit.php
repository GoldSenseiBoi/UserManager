<h3><?= isset($produit) ? "Modifier un produit" : "Ajouter un produit" ?></h3>
<form method="post" action="<?= isset($produit) ? 'traitement-update-produit.php' : 'traitement-insert-produit.php' ?>">
    <input type="hidden" name="id" value="<?= isset($produit) ? htmlspecialchars($produit['id']) : '' ?>">
    <div>
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" value="<?= isset($produit) ? htmlspecialchars($produit['nom']) : '' ?>" required>
    </div>
    <div>
        <label for="prix">Prix :</label>
        <input type="number" step="0.01" name="prix" id="prix" value="<?= isset($produit) ? htmlspecialchars($produit['prix']) : '' ?>" required>
    </div>
    <button type="submit"><?= isset($produit) ? "Modifier" : "Ajouter" ?></button>
</form>
