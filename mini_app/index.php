<form method="POST">
    <input type="text" name="nom" placeholder="Le nom" required /><br/>
    <input type="number" name="prix" placeholder="Le prix" required /><br/>
    <input type="number" name="quantite" placeholder="La quantité" required /><br/>
    <input type="submit" name="afficher" /><br/>
</form>
<?php
session_start(); // TOUJOURS en première ligne

// On crée le panier s'il n'existe pas
if(!isset($_SESSION["panier"])) {
    $_SESSION["panier"] = [];
}
if($_SERVER["REQUEST_METHOD"] === "POST") {
    require "fonction.php";
    
    $nom = $_POST['nom'] ?? '';
    $prix = $_POST['prix'] ?? '';
    $quantite = $_POST['quantite'] ?? '';

    if(verifier_champs($nom, $prix, $quantite) === false) {
        echo "Veuillez renseigner tous les champs";
    } else {
        if(verifier_type($prix, $quantite) === false) {
            echo "Veuillez vérifier le prix et/ou la quantité saisie";
        } else {
            $montant = $prix * $quantite;
// charger le panier
$_SESSION["panier"][] = [
    "nom" => $nom,
    "prix" => $prix,
    "quantite" => $quantite,
    "montant" => $montant
];
        }
    }
}
?>