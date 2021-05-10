<!-- Système d'upload d'image sans utiliser une base de données -->
<!-- Bootstrap 4 -- PHP -->

<!-- upload.php se charge recuperer les images sur le serveur et le copie à la racine
du projet. -->

<!-- Par JoelDeoKL -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-4 col-2">
                <div class="form-group">
                    <hr>
                    <label>Creer un dossier</label>
                    <input type="text" name="auteur" id="auteur"  class="form-control">
                </div>
                <div class="col-2">
                    <input type="submit" value="Ajouter" name="creer_dossier" class="btn btn-success float-right" name="inscrire">
                </div>
                <br><br>
                <div class="form-control">
                    <input type="hidden" name="MAX_FILE_SIZE" value="100000" />
                    <input type="file" name="img" id="img">
                    <input type="submit" value="uploader">
                </div>
            </div>
        </div>
    </div>

    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/jquery.min.js"></script>
</body>
</html>