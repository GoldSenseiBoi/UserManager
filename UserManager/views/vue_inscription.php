<h2 style="text-align: center; color: #333; font-family: Arial, sans-serif; margin-bottom: 20px;">
    Inscription
</h2>
<form method="post" action="traitement_inscription.php" style="display: flex; flex-direction: column; align-items: center; width: 100%; max-width: 400px; margin: auto; background: #f9f9f9; padding: 20px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
    <label for="nom" style="width: 100%; text-align: left; margin-bottom: 5px; font-family: Arial, sans-serif; color: #555; font-size: 14px;">
        Nom :
    </label>
    <input type="text" name="nom" id="nom" required placeholder="Entrez votre nom" style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ddd; border-radius: 5px; font-size: 14px;">
    
    <label for="prenom" style="width: 100%; text-align: left; margin-bottom: 5px; font-family: Arial, sans-serif; color: #555; font-size: 14px;">
        Prénom :
    </label>
    <input type="text" name="prenom" id="prenom" required placeholder="Entrez votre prénom" style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ddd; border-radius: 5px; font-size: 14px;">
    
    <label for="email" style="width: 100%; text-align: left; margin-bottom: 5px; font-family: Arial, sans-serif; color: #555; font-size: 14px;">
        Email :
    </label>
    <input type="email" name="email" id="email" required placeholder="Entrez votre email" style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ddd; border-radius: 5px; font-size: 14px;">
    
    <label for="adresse" style="width: 100%; text-align: left; margin-bottom: 5px; font-family: Arial, sans-serif; color: #555; font-size: 14px;">
        Adresse :
    </label>
    <input type="text" name="adresse" id="adresse" required placeholder="Entrez votre adresse" style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ddd; border-radius: 5px; font-size: 14px;">
    
    <label for="code_postale" style="width: 100%; text-align: left; margin-bottom: 5px; font-family: Arial, sans-serif; color: #555; font-size: 14px;">
        Code Postale :
    </label>
    <input type="text" name="code_postale" id="code_postale" required placeholder="Entrez votre code postal" style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ddd; border-radius: 5px; font-size: 14px;">
    
    <label for="city" style="width: 100%; text-align: left; margin-bottom: 5px; font-family: Arial, sans-serif; color: #555; font-size: 14px;">
        Ville :
    </label>
    <input type="text" name="city" id="city" required placeholder="Entrez votre ville" style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ddd; border-radius: 5px; font-size: 14px;">
    
    <label for="password" style="width: 100%; text-align: left; margin-bottom: 5px; font-family: Arial, sans-serif; color: #555; font-size: 14px;">
        Mot de passe :
    </label>
    <input type="password" name="password" id="password" required placeholder="Entrez votre mot de passe" style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ddd; border-radius: 5px; font-size: 14px;">
    
    <button type="submit" style="width: 100%; padding: 10px; background: #28a745; color: white; border: none; border-radius: 5px; font-size: 16px; cursor: pointer; transition: background 0.3s;">
        S'inscrire
    </button>
</form>
<p style="text-align: center; margin-top: 10px; font-size: 14px; font-family: Arial, sans-serif;">
    Déjà un compte ? <a href="index.php?page=connexion" style="color: #007BFF; text-decoration: none;">Connectez-vous ici</a>
</p>
