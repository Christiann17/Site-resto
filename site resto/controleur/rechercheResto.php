<?php
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}
include_once "$racine/modele/bd.resto.inc.php";
 
// création du menu burger
$menuBurger = array();
$menuBurger[] = Array("url" => "./?action=recherche&critere=nom", "label" => "Recherche par nom");
$menuBurger[] = Array("url" => "./?action=recherche&critere=adresse", "label" => "Recherche par adresse");
 
// critère de recherche par défaut
$critere = "nom";
if (isset($_GET["critere"])) {
    $critere = $_GET["critere"];
}
// récupération des données GET, POST, et SESSION
// recherche par nom
$nomR = "";
// recherche par adresse
$voieAdrR = "";
$cpR = "";
$villeR = "";
 
// appel des fonctions permettant de récupérer les données utiles a l'affichage 
// Si on provient du formulaire de recherche : $critere indique le type de recherche à effectuer
if (!empty($_POST)) {
    switch ($critere) {
        case 'nom':
            // recherche par nom
 
            break;
        case 'adresse':
            // recherche par adresse
 
            break;
    }
}
 
// traitement si nécessaire des données récupérées
 
 
// appel du script de vue qui permet de gérer l'affichage des données
$titre = "Recherche d'un restaurant";
include "$racine/vue/entete.html.php";
include "$racine/vue/vueRechercheResto.php";
include "$racine/vue/pied.html.php";
?>