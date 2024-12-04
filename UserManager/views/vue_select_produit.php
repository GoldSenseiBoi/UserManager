<h3 style="text-align: center; color: #ff69b4; font-family: 'Comic Sans MS', cursive; margin-bottom: 20px;">
    🍬 Liste des produits 🍭
</h3>
<form method="post" style="text-align: center; margin-bottom: 20px;">
    <p style="font-family: 'Comic Sans MS', cursive; color: #d10080; font-size: 16px;">Filtrer par :</p>
    <input type="text" name="filtre" placeholder="Nom du produit" style="padding: 8px; border: 2px solid #ff69b4; border-radius: 8px; font-size: 14px; width: 200px;">
    <input type="submit" name="Filtrer" value="Filtrer" style="background: #ff69b4; color: white; border: none; border-radius: 8px; padding: 8px 20px; font-size: 14px; cursor: pointer;">
</form>
<br>
<table class="table table-bordered" style="width: 100%; max-width: 800px; margin: auto; border-collapse: collapse; font-family: 'Comic Sans MS', cursive; color: #d10080; font-size: 14px;">
    <thead>
        <tr style="background: #ff69b4; color: white;">
            <th style="padding: 10px; border: 1px solid #ff69b4;">ID</th>
            <th style="padding: 10px; border: 1px solid #ff69b4;">Nom</th>
            <th style="padding: 10px; border: 1px solid #ff69b4;">Prix (€)</th>
            <th style="padding: 10px; border: 1px solid #ff69b4;">Opérations</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if (isset($lesProduits)) {
            foreach ($lesProduits as $produit) {
                echo "<tr style='text-align: center;'>";
                echo "<td style='padding: 10px; border: 1px solid #ff69b4;'>" . htmlspecialchars($produit['id']) . "</td>";
                echo "<td style='padding: 10px; border: 1px solid #ff69b4;'>" . htmlspecialchars($produit['nom']) . "</td>";
                echo "<td style='padding: 10px; border: 1px solid #ff69b4;'>" . htmlspecialchars($produit['prix']) . "</td>";
                echo "<td style='padding: 10px; border: 1px solid #ff69b4;'>";
                echo "<a href='index.php?page=gestion_produits&action=edit&idProduit=" . $produit['id'] . "' title='Modifier'>
                        <img src='image/editer.png' height='30' width='30' alt='Modifier' style='margin-right: 10px;'>
                      </a>";
                echo "<a href='index.php?page=gestion_produits&action=sup&idProduit=" . $produit['id'] . "' title='Supprimer'>
                        <img src='image/supprimer.png' height='30' width='30' alt='Supprimer'>
                      </a>";
                echo "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4' style='text-align: center; padding: 10px; border: 1px solid #ff69b4;'>Aucun produit trouvé.</td></tr>";
        }
        ?>
    </tbody>
</table>
