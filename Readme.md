# Mini-projet SITE DE LOCATION
 
Site internet de présentation de mes locations de véhicules de luxe.
 
## Fonctionnalités
 
### Front-office
- Accueil : Liste de mes véhicules a louer en page d'accueil
- Page de détail : Présentation des véhicules (Type, Boite De Vitesse, Puissance, Nombre De Place, Transmission, Carburant)
 
### Back-office
- Page de création de réalisation (si possible)
- Thématiser les réalisations par types (si possible)
 
## Structure des données
 
Une réalisation sera composée de :
- Modèle du véhicule : varchar (petite zone de texte)
- Description du véhicule : texte(grande zone de texte)
- Année du véhicule : date
- Image du véhicule : url varchar (petite zone de texte)
* Champs obligatoires
 
## Etapes du projet
 
- Configuration de l'environnement de développement : vérifier configuration (xamp et visual studio), mise en place de l'arborescence, du fichier readme.md et du dépôt Git.
- Création de la BDD MySQL ainsi que les tables et les champs
- Création des pages PHP front-office
- Création des pages PHP back-office (si possible)
- Tests et recette : voir si les fonctionnalités prévues initialement sont présentes, faire des tests pour repérer les possibles bugs, optimisation du code, prise en compte de la sécurité.
- Mise en ligne (si possible)
 
## Script PHP - Page d'accueil
 
- 1) Connexion à la base de données
- 2) Requête SELECT de récupération les informations (musiques, articles, voitures, ...)
- 3) Boucler sur le résultat pour afficher chaque information.
 
## Script PHP - Page détails