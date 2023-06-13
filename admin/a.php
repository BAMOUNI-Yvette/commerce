<?php 
try {
    $bdd= new PDO('mysql:host=localhost;dbname=bd_commerce','root','' );
} catch (Exception $e) {
    die( 'Erreur : ' . $e->getMessage());
}

$req=$bdd->prepare('INSERT INTO produits(libelle,prix_unitaire) VALUES (?,?) ');
    $req->execute([$_POST['libelle'],$_POST['prix']]);
    header('location: dashboard.php');


?>
