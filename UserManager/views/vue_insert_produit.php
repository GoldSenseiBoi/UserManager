<h2>Ajouter un produit</h2>
<form method="post" action="traitement-insert-produit.php">
    <div>
        <label for="nom">Nom du produit :</label>
        <input type="text" name="nom" id="nom" required>
    </div>
    <div>
        <label for="prix">Prix du produit :</label>
        <input type="number" step="0.01" name="prix" id="prix" required>
    </div>
    <button type="submit" name="ajouterProduit">Ajouter le produit</button>
</form>
