<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=bd_commerce', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

?>





<?php
if (isset($_POST['login']) && ($_POST['login'] == 'yvettebamouni01@gmail.com') && ($_POST['password'] == 'password'))



?>
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
                            <a class="nav-link " href="#">CONTACT</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="lot">
            <P class="sa">Dashboard</P>
            <hr>
        </div>
        <div class="container">
            <div class="se">
                <div class="row">
                    <div class="row  pb-5 pt-4  ">
                        <div class="col-md-4 text-center d-grid gap-2 d-block offset-md-1 mb-md-0 mb-5">
                            <a href="#voir_liste" class="btn btn-primary mb-5 p-3"> Voir la liste des produits</a>
                            <a href="" class="btn btn-primary  mt-5  p-3">Voir la liste des ventes </a>
                        </div>
                        <div class="col-md-4 text-center d-grid gap-2 d-block offset-md-2 mt-md-0 mt-5">
                            <a href="#ajout_prod" class="btn btn-primary btn-block mb-5 p-3 "> Ajouter un produits</a>
                            <a href="" class="btn btn-primary  btn-block mt-5 p-3">Ajouter une vente</a>
                        </div>
                    </div>
                    <hr>
                    <h5 class="fw-bold pb-5" id="voir_liste">Listes des Produits</h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">libellé</th>
                                <th scope="col">Prix Unitaire</th>
                                <th scope="col">Devise</th>
                            </tr>
                        </thead>
                        <?php
                    $reponse = $bdd->query("SELECT * FROM produits");
                    while ($donne = $reponse->fetch()) { ?>
                            <tbody>
                                <tr class="table-active">
                                    <th scope="row"> <?= $donne['id'] ?> </th>
                                    <td><?= $donne['libelle'] ?></td>
                                    <td><?= $donne['prix_unitaire'] ?></td>
                                    <td>FCFA</td>
                                </tr>
                            </tbody> <?php }
                                    $reponse->closeCursor(); ?>
                    </table>
                    <h5 class="fw-bold pt-5" id="ajout_prod">Ajout de Produits</h5>
                    <hr>
                    <form action="a.php" method="post">
                        <div class="row pt-4">
                            <div class="col-md mb-md-0 mb-3">
                                <div class="form-outline ">


                                    <label class="fw-bold pb-3" for="">Libellé :</label>
                                    <input type="text" id="" class="form-control" name="libelle" required />

                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-outline ">
                                    <label class="fw-bold pb-3" for="">Prix :</label>
                                    <input type="text" id="" class="form-control" name="prix" required />

                                </div>
                            </div>
                        </div>
                        
                        <div class="text-center pt-4">
                            <button type="submit" class="btn btn-success btn-block mb-4 ">Enregistrer</button>
                        </div>
                    </form>
                </div>
            </div>
            <script src="../bootstrap/bootstrap-5.3.0-alpha3-dist/js/bootstrap.min.js"></script>
        </div>
</body>

</html>