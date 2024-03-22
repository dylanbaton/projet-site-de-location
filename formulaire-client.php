<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-formulaire.css">
    <title>Formulaire de contact</title>
</head>
<body>
    
    <h1>Formulaire de contact</h1>
   
    <form class ="formu"action="formulaire-client-transmis.php" method="POST">
        <div>
            <label for="nom">Nom* :</label>
            <input type="text" id="nom" name="nom" required>
        </div>
            <br><br>
        <div>
            <label for="prenom">Prenom* :</label>
            <input type="text" id="prenom" name="prenom" required>
        </div>
            <br><br>
        <div>  
            <label for="telephone">Telephone* :</label>
            <input type="telephone" id="telephone" name="telephone" required>
        </div>
            <br><br>
        <div>
            <label for="email">Email* :</label>
            <input type="email" id="email" name="email" required>
        </div>
            <br><br>
        <div>
            <label for="datePermis">Date du Permis :</label>
            <input type="datePermis" id="datePermis" name="datePermis" required>
        </div>
            <br><br>
            <div>
            <input type="submit" value="Envoyer le message">
            </div>
            <!-- <img src="logo/logo-site.jpg" alt="logo"> -->
    </form>
</body>
</html>