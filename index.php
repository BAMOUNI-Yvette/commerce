<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=bd_commerce', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="img/images.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link " href="#acceuil">ACCUEIL</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="admin/index.php">Produit</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#contact">CONTACT</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <P>APROPOS</P>
        <hr>
        <div class="row">
            <div class="col-md-7">

                <div class="" style="background-color: transparent;">
                    <div class="card-body">
                        <br class="card-text">Lorem ipsum est simplement du
                        <br class="card-text">faux texte employé dans la
                        <br class="card-text">composition et la mise en plage
                        <br class="card-text">avant impression. Le lorem ipsum
                        <br class="card-text">est le texte standard de...
                    </div>

                    <?php
                    if (isset($_POST['login']) && ($_POST['login'] == 'yvettebamouni01@gmail.com') && ($_POST['password'] == 'password'))



                    ?>
                </div>
            </div>
            <div class="col-md-5 ps-5">
                <div class="img">
                    <img src="img/images.png" class="img-fluid rounded-circle" alt="...">
                </div>
            </div>
        </div>
        <div class=" container">
            <p>Produits</p>
            <hr>
            <?php
                    $resultat = $bdd->query("SELECT * FROM produits WHERE libelle='café'");
                    while ($produit = $resultat->fetch()) ?>

            <div class="row">
                <div class="col-6">
                    <div class=" ">
                        
                        <img src="img/café.jpg" alt="..." height="150px" width="250px" style="border-radius: 20px;">
                        <?=$produit[' prix_unitaire']."FCFA" ?>
                    </div>
                    <div class="card-body">
                        <br><br>
                    </div>
                </div>
                <div class="col-6">
                    <div class="">
                        <?php
                        $resultat = $bdd->query("SELECT * FROM produits WHERE libelle='sucre'");
                        while ($produit = $resultat->fetch()) ?>
                        <img src="img/sucre.jpg" alt="..." height="150px" width="250px" style="border-radius: 20px;">
                    </div>
                    <?php
                    $resultat = $bdd->query("SELECT * FROM produits WHERE libelle='sucre'");
                    while ($produit = $resultat->fetch()) ?>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="">
                        <img src="img/lait.jpg" alt="..." height="150px" width="250px" style="border-radius: 20px;">
                    </div>
                    <?php
                    $resultat = $bdd->query("SELECT * FROM produits WHERE libelle='lait'");
                    while ($produit = $resultat->fetch()) ?>
                </div>
                <div class="col-6">
                    <div class="">
                        <?php
                        $resultat = $bdd->query("SELECT * FROM produits WHERE libelle='miel'");
                        while ($produit = $resultat->fetch()) ?>

                        <img src="img/miel.jpg" alt="..." height="150px" width="250px" style="border-radius: 20px;">
                    </div>

                </div>
            </div>
        </div>
        <br><br>
        <p> <strong>Contacts</strong></p>
        <hr>
        <div class="tel">
            <p>70-48-50-44</p>
        </div>
        <div class="card-body">

        </div>
        <script src="../COMMERCE/bootstrap/bootstrap-5.3.0-alpha3-dist/js/bootstrap.min.js"></script>
    </div>
</body>

</html>