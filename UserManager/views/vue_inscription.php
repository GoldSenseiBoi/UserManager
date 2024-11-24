<h2>Inscription</h2>
<form method="post" action="traitement_inscription.php">

    <label for="nom">Nom:</label>
    <input type="text" name="nom" required>
    <label for="prenom">Prénom:</label>
    <input type="text" name="prenom" required>
    <label for="email">Email:</label>
    <input type="email" name="email" required>
    <label for="adresse">Addresse:</label>
    <input type="adresse" name="adresse" required>
    <label for="code_postale">Code Postale:</label>
    <input type="code_postale" name="code_postale" required>
    <label for="city">Ville:</label>
    <input type="city" name="city" required>
    <label for="password">Mot de passe:</label>
    <input type="password" name="password" required>
    <button type="submit">S'inscrire</button>
</form>
<p>Déjà un compte ? <a href="index.php?page=connexion">Connectez-vous ici</a></p>
