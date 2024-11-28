<h3>Liste des produits</h3>
<form method="post">
    <p>Filtrer par : </p>
    <input type="text" name="filtre" placeholder="Nom du produit">
    <input type="submit" name="Filtrer" value="Filtrer">
</form>
<br>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prix (€)</th>
            <th>Opérations</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if (isset($lesProduits)) {
            foreach ($lesProduits as $produit) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($produit['id']) . "</td>";
                echo "<td>" . htmlspecialchars($produit['nom']) . "</td>";
                echo "<td>" . htmlspecialchars($produit['prix']) . "</td>";
                echo "<td>";
                echo "<a href='index.php?page=gestion_produits&action=edit&idProduit=" . $produit['id'] . "'><img src='image/editer.png' height='30' width='30'></a>";
                echo "<a href='index.php?page=gestion_produits&action=sup&idProduit=" . $produit['id'] . "'><img src='image/supprimer.png' height='30' width='30'></a>";
                echo "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>Aucun produit trouvé.</td></tr>";
        }
        ?>
    </tbody>
</table>
