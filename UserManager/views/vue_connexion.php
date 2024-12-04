<h2 style="text-align: center; color: #333; font-family: Arial, sans-serif; margin-bottom: 20px;">
    Connexion
</h2>
<form method="post" action="traitement_connexion.php" style="display: flex; flex-direction: column; align-items: center; width: 100%; max-width: 400px; margin: auto; background: #f9f9f9; padding: 20px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
    <label for="email" style="width: 100%; text-align: left; margin-bottom: 5px; font-family: Arial, sans-serif; color: #555; font-size: 14px;">
        Email :
    </label>
    <input type="email" name="email" id="email" required placeholder="Entrez votre email" style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ddd; border-radius: 5px; font-size: 14px;">
    <label for="password" style="width: 100%; text-align: left; margin-bottom: 5px; font-family: Arial, sans-serif; color: #555; font-size: 14px;">
        Mot de passe :
    </label>
    <input type="password" name="password" id="password" required placeholder="Entrez votre mot de passe" style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ddd; border-radius: 5px; font-size: 14px;">
    <button type="submit" style="width: 100%; padding: 10px; background: #007BFF; color: white; border: none; border-radius: 5px; font-size: 16px; cursor: pointer; transition: background 0.3s;">
        Se connecter
    </button>
</form>
<p style="text-align: center; margin-top: 10px; font-size: 14px; font-family: Arial, sans-serif;">
    Pas de compte ? <a href="index.php?page=inscription" style="color: #007BFF; text-decoration: none;">Inscrivez-vous ici</a>
</p>
