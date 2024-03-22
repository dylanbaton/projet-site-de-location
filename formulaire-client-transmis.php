<?php
$serveur = "localhost";
$utilisateur = "root";
$mot_de_passe = "";
$base_de_donnees = "base_site_location";
// Établir la connexion
$connexion = mysqli_connect($serveur, $utilisateur,
$mot_de_passe, $base_de_donnees);
// Vérifier la connexion
if (!$connexion) {
die("Échec de la connexion : " . mysqli_connect_error());
} else {
    
    print_r($_POST);
    // $_POST est t-il vide ?
    if(empty($_POST)){
        echo 'le formulaire n\'a pas été soumis correctement';
        exit();
    } else {
        echo 'Le formulaire a bien etait pris en compte';
        $marque = mysqli_real_escape_string($connexion, $_POST['marque']);
        $modele = mysqli_real_escape_string($connexion, $_POST['modele']);
        $type = mysqli_real_escape_string($connexion, $_POST['type']);
        $nombre_de_place = mysqli_real_escape_string($connexion, $_POST['nombre_de_place']);
        $puissance = mysqli_real_escape_string($connexion, $_POST['puissance']);
        $transmission = mysqli_real_escape_string($connexion, $_POST['transmission']);
        $boite_de_vitesse = mysqli_real_escape_string($connexion, $_POST['boite_de_vitesse']);
        $carburant = mysqli_real_escape_string($connexion, $_POST['carburant']);
        $prix = mysqli_real_escape_string($connexion, $_POST['prix']);
 
        $sql= "INSERT INTO vehicule( marque, modele, type, nombre_de_place, puissance, transmission, boite_de_vitesse, carburant, prix, url) VALUES ('$marque','$modele','$type','$nombre_de_place','$puissance','$transmission','$boite_de_vitesse','$carburant','$prix')";
        mysqli_query($connexion, $sql);
       
    }
 
}
 
 
?>
<br>
<a href="location.php">
    <button>ACCUEIL</button>    
</a>