<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Luxurious+Script&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Notable&display=swap" rel="stylesheet">
    <title>Site de location</title>
</head>
<body>
    
    <nav>
        <a href="">Accueil</a>
        <a href="formulaire-client.php">Formulaire</a>
        <a href="">A propos</a>
    </nav>
    <div class="container">
         <img src="logo/banniere4.png" alt="banniere"> 
        <div class="titre">Prestige Auto Lease</div> 
    </div>
    
    
<div class="img-container"> 
<?php
// Paramètres de connexion
$serveur = "localhost";
$utilisateur = "root";
$mot_de_passe = "";
$base_de_donnees = "base_site_location";
// Établir la connexion
$connexion = mysqli_connect($serveur, $utilisateur, $mot_de_passe, $base_de_donnees);
// Vérifier la connexion
if (!$connexion) {
    die("Échec de la connexion : " . mysqli_connect_error());
} else {
    // echo "Connexion réussie à la base de données.<br><br>";
}

// Exécuter une requête SELECT
$sql = "SELECT * FROM vehicule";
$resultat = mysqli_query($connexion, $sql); // Correction : $sql au lieu de $mysql
// Vérifier si la requête a réussi
if ($resultat) {
    // Utilisation de la fonction mysqli_fetch_assoc pour obtenir les résultats sous forme de tableau associatif
    while ($vehicule = mysqli_fetch_assoc($resultat)) {
        echo  '<img class="voiture" title = "Image" src ="' . $vehicule['url']. '"></img' . "<br>"
            . "Marque : " . $vehicule['marque'] . "<br>"
            . "Modele : " . $vehicule['modele'] . "<br>"
            . "Type : " . $vehicule['type'] . "<br>"
            . "N.de place : " . $vehicule['nombre_de_place'] . "<br>"
            . "Puissance : " . $vehicule['puissance'] . "<br>"
            . "Transmission : " . $vehicule['transmission'] . "<br>"
            . "Boite de vitesse : " . $vehicule['boite_de_vitesse'] . "<br>"
            . "Carburant : " . $vehicule['carburant'] . "<br>"
            . "Prix : " . $vehicule['prix'] . "<br>";
        }
} else {
    echo "Erreur : " . mysqli_error($connexion);
}
// Fermer la connexion
mysqli_close($connexion);

?>  
</div>     
</body>
</html>


