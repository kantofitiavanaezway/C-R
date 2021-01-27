<!doctype html>
<html lang="fr">
 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?= URL ?>assets/back/bootstrap/css/bootstrap.min.css">
    <link href="<?= URL ?>assets/back/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= URL ?>assets/back/libs/css/style.css">
    <link rel="stylesheet" href="<?= URL ?>assets/back/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="<?= URL ?>assets/front/css/my.style.css" type="text/css">
    <title>Admin|Login</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title text-center">Authentification</h4>
                        </div>
                        <div class="modal-body">
                            <form enctype="multipart/form-data" id="sign-in">
                                <div class="form-group">
                                    <label for="departement">Departement</label>
                                    <select id="departement" class="form-control" name="departement">
                                        <option value="Informatique">Informatique</option>
                                        <option value="Finance-Compta">Finance et comptabilite</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="nomUtilisateur">Nom d'utilisateur</label>
                                    <input type="text" class="form-control" id="nomUtilisateur" name="nomUtilisateur" placeholder="Nom d'utilisateur" required />
                                </div>
                                <div class="form-group">
                                    <label for="mdp">Mot de passe</label>
                                    <input type="password" class="form-control" id="mdp" name="mdp" placeholder="Mot de passe" required />
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <input type="reset" value="Annuler" class="btn btn-block btn-primary">
                                        </div>
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn btn-primary btn-block">Valider</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>       
    <script src="<?= URL ?>assets/back/jquery/jquery-3.3.1.min.js"></script>
    <script src="<?= URL ?>assets/back/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="<?= URL ?>assets/back/slimscroll/jquery.slimscroll.js"></script>
    <script src="<?= URL ?>assets/back/libs/js/main-js.js"></script>
    <script type="text/javascript">
        $(document).ready(function()
        {
            $(function() {
                $("form#sign-in").on('submit', function(e){
                    e.preventDefault();
                    $.ajax({
                        type: 'POST',
                        url:'<?= URL ?>admin/login',
                        data: new FormData(this),
                        dataType: 'json',
                        contentType: false,
                        cache: false,
                        processData:false,
                        success: function(response){ 
                            if(response.trim()=="success")
                            {
                                window.location.href="<?= URL ?>accueil";
                            }
                            else
                            {
                                window.location.href="<?= URL ?>admin";
                            }
                        },
                        error:function(err)
                        {
                            console.log(err);
                            if(err["responseText"].trim()=="success")
                            {
                                window.location.href="<?= URL ?>accueil";
                            }
                            else
                            {
                                window.location.href="<?= URL ?>admin";
                            }
                        }
                    });
                });
            });
        });
    </script>
</body>
 
</html>