<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=bd_commerce', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
?>


<?php
                    $reponse = $bdd->query("SELECT * FROM produits");
                    while ($donne = $reponse->fetch()) ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap/bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-md ">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="../img/images.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link " href="../index.php">ACCUEIL</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">Produit</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#contact">CONTACT</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="lot">
            <P class="sa">Connexion</P>
            <hr>
        </div>
        <div class="container">
            <div class="">
                <div class="form-outline ">
                    <label class="fw-bold pb-3" for="">Login :</label>
                    <input type="login" id="form3Example2" class="form-control" name="login" required placeholder="saisir votre login" />

                </div>
            </div>
            <div>
                <div class="form-outline">
                    <label class="fw-bold pt-3  pb-3" for="">Mot de passe :</label>
                    <input type="password" id="form3Example2" class="form-control" name="Mot de passe" required placeholder="saisir votre mot de passe" />

                </div>
            </div>
        </div>
        <div class="text-center pt-4">
            <button type="submit" class="btn btn-success btn-block mb-4 ">Se connecter</button>
        </div>
    </div>
    <div class="container">
        <div class="row">

            <script src="../bootstrap/bootstrap-5.3.0-alpha3-dist/js/bootstrap.min.js"></script>

        </div>
    </div>
    <?php
    if (isset($_POST['login']) && ($_POST['login'] == 'yvettebamouni01@gmail.com') && ($_POST['password'] == 'password'))
    ?>
</body>

</html>