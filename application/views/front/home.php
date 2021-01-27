<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Correspondance Rapide</title>
    <link rel="stylesheet" href="<?= URL ?>assets/front/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?= URL ?>assets/front/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?= URL ?>assets/front/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?= URL ?>assets/front/css/my.style.css">
    <link rel="stylesheet" href="<?= URL ?>assets/front/css/style.css" type="text/css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                <div class="row">
                    <h1 class="text-center">Demande de provision</h1>
                </div>
                <div class="row">
                    <form action="" id="new-request" enctype="multipart/form-data" class="col-12">
                        <div class="form-group">
                            <label for="departement">Selectionner votre departement</label>
                            <select id="departement" class="form-control" name="departement">
                                <option value="Informatique">Informatique</option>
                                <option value="Finance-Compta">Finance et comptabilite</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nom">Votre nom</label>
                            <input type="text" placeholder="Votre nom" class="form-control" id="nom" name="nom"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="montant">Montant en Ariary</label>
                            <input type="number" placeholder="Montant (Ar)" class="form-control" id="montant"
                                name="montant" required>
                        </div>
                        <div class="form-group">
                            <label for="motif">Motif</label>
                            <textarea id="motif" class="form-control" placeholder="Votre motif" name="motif"
                                required></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-outline-success btn-block" type="submit">Valider la demande</button>
                            <button class="btn btn-outline-success btn-block" type="reset">Annuler la demande</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-9">
                <div class="row">
                    <div class="col-12">
                        <h1 class="text-center">Liste des approbations</h1>
                    </div>
                    <nav class="col-12">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#listes">Liste des demandes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#listes-demande">Liste des demandes
                                    validés</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#validation">Validation</a>
                            </li> -->
                        </ul>
                    </nav>
                    <div class="tab-content col-12">
                        <div id="listes" class="container tab-pane row active"><br>
                            <table class="table table-success table-hover">
                                <thead>
                                    <tr>
                                        <th>Departement</th>
                                        <th>Demandeur</th>
                                        <th>Montant</th>
                                        <th>Motif</th>
                                        <th>Date et heure</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody id="request-list"></tbody>
                            </table>
                        </div>
                        <div id="listes-demande" class="container tab-pane fade">
                            <div class="row justify-content-center">
                                <div class="col-10 m-t-30">
                                    <form class="row">
                                        <div class="form-group col-sm-4">
                                            <input type="text" placeholder="Demandeur" class="form-control">
                                        </div>
                                        <div class="form-group col-sm-3">
                                            <input type="text" placeholder="Motif" class="form-control">
                                        </div>
                                        <div class="form-group col-sm-3">
                                            <input type="number" placeholder="Montant" class="form-control">
                                        </div>
                                        <div class="form-group col-sm-2">
                                            <button class="btn btn-outline-success"><i
                                                    class="fa fa-search"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <table class="table table-success table-hover m-t-20">
                                <thead>
                                    <tr>
                                        <th>Departement</th>
                                        <th>Demandeur</th>
                                        <th>Montant</th>
                                        <th>Motif</th>
                                        <th>Date et heure</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody id="request-list-accepted"></tbody>
                            </table>
                        </div>
                        <!-- <div id="validation" class="container tab-pane fade">
                            <h1>Validation</h1>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="sendsuccess">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Notification</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="alert alert-success fade show">
                    <strong>Fait avec succes!</strong> La demande de provision est faite.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="login">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Notification</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form id="validate-sign-in" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="departement-log-in">Selectionner votre departement</label>
                            <select id="departement-log-in" class="form-control" name="departement">
                                <option value="Informatique">Informatique</option>
                                <option value="Finance-Compta">Finance et comptabilite</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="user">Votre pseudo</label>
                            <input type="text" class="form-control" id="user" name="user" required>
                        </div>
                        <div class="form-group">
                            <label for="mdp">Votre mot de passe</label>
                            <input type="password" class="form-control" id="mdp" name="mdp" autocomplete="false"
                                required>
                        </div>
                        <button type="submit" class="btn btn-primary">Se connecter</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="plus">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Information sur la demande</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body" id="admin-requested-list">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="validated">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Information sur la demande</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="alert alert-success fade show">
                    <strong>Notification!</strong> Demande accepté.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="notvalidated">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Information sur la demande</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="alert alert-danger fade show">
                    <strong>Notification!</strong> Demande non accepté.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="deja">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Information sur la demande</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="alert alert-primary fade show">
                    <strong>Notification!</strong> You are already accepted this request.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>
    <script src="<?= URL ?>assets/front/js/jquery-3.3.1.min.js "></script>
    <script src="<?= URL ?>assets/front/js/bootstrap.min.js "></script>
    <script src="<?= URL ?>assets/front/js/jquery.slicknav.js "></script>
    <script src="<?= URL ?>assets/front/js/owl.carousel.min.js "></script>

    <script type="text/javascript">
    let request_id;
    let ID = "<?php if (isset($_SESSION['id-user'])) echo $_SESSION['id-user']; ?>";
    $(document).ready(function() {
        getListDemande();
        getListDemandeAccepte();
        $(function() {
            $("#new-request").on('submit', function(e) {
                e.preventDefault();
                $.ajax({
                    type: 'POST',
                    url: '<?= URL ?>demande/create',
                    data: new FormData(this),
                    dataType: 'json',
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(response) {
                        $('.message').html('');
                        if (response.trim() == 'success') {
                            $(this).reset();
                            $("#sendsuccess").modal("show");
                            getListDemande();
                        } else {
                            $('.message').html('<p class="alert alert-warning">' +
                                response + '</p>');
                        }
                    },
                    error: function(err) {
                        $('#new-request')[0].reset();
                        $("#sendsuccess").modal("show");
                        getListDemande();
                        getListDemandeAccepte();
                    }
                });
            });

            $("#validate-sign-in").on('submit', function(e) {
                e.preventDefault();
                $.ajax({
                    type: 'POST',
                    url: '<?= URL ?>user/login',
                    data: new FormData(this),
                    dataType: 'json',
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(response) {
                        // if(response.trim()=="success")
                        // {
                        //     // window.location.href="<?= URL ?>accueil";
                        //     $("#login").modal("hide");
                        // }
                        // else
                        // {
                        //     // window.location.href="<?= URL ?>admin";
                        //     $('#validate-sign-in').append(`<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>Erreur!</strong> Nom d'utilisateur ou mot de passe incorrect.</div>`);
                        // }
                    },
                    error: function(err) {
                        if (err['responseText'].trim() == "success") {
                            // window.location.href="<?= URL ?>accueil";
                            $("#login").modal("hide");
                            ID =
                                "<?php if (isset($_SESSION['id-user'])) echo $_SESSION['id-user']; ?>";
                            valider();
                            // getListDemande();
                            // getListDemandeAccepte(); 
                            window.location.href = "<?= URL ?>";
                        } else {
                            // window.location.href="<?= URL ?>admin";
                            $('#validate-sign-in').append(`<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>Erreur!</strong> Nom d'utilisateur ou mot de passe incorrect.</div>`);
                        }
                    }
                });
            });
            $(document).on("click", "button.validate", function() {
                if (ID.trim() != "") {
                    request_id = $(this).attr("request-id");
                    $.ajax({
                        type: 'POST',
                        url: '<?= URL ?>signature/create',
                        data: "demande=" + request_id,
                        success: function(response) {
                            if (response.trim() == "success") {
                                $("#validated").modal("show");
                                // window.location.href="<?= URL ?>";
                            } else if (response.trim() == "ok") {
                                $("#deja").modal("show");
                            } else {
                                $("#notvalidated").modal("show");
                                // window.location.href="<?= URL ?>admin";
                            }
                        },
                        error: function(err) {
                            if (err['responseText'] == "success") {
                                $("#validated").modal("show");
                                // window.location.href="<?= URL ?>accueil";
                            } else if (err['responseText'].trim() == "ok") {
                                $("#deja").modal("show");
                            } else {
                                $("#notvalidated").modal("show");
                                // window.location.href="<?= URL ?>admin";
                            }
                        }
                    });
                } else {
                    $("#login").modal("show");
                    request_id = $(this).attr("request-id");
                }
            });
            $(document).on("click", "button.more", function() {
                request_id = $(this).attr("request-id");
                $.ajax({
                    type: 'GET',
                    url: '<?= URL ?>signature/finished',
                    data: "demande=" + request_id,
                    dataType: 'json',
                    success: function(data) {
                        $("#admin-requested-list").empty();
                        if (data.length > 0) {
                            $.each(data, function(key, value) {
                                $("#plus #admin-requested-list").append(
                                    `<div class="alert alert-success"><i class="fa fa-check-circle m-r-20"></i> Validé par <strong>` +
                                    value['user'] + `</strong> le ` +
                                    value['date'] + `</div>`);
                            });
                        } else {
                            $("#admin-requested-list").append(
                                `<div class="alert alert-warning fade show"><strong>Notification!</strong> Aucune validation disponible.</div>`
                            );
                        }
                        $("#plus").modal("show");
                    },
                    error: function(err) {
                        alert(err);
                    }
                });
            });
            $(document).on("click", "button.imprimer", function() {
                request_id = $(this).attr("request-id").trim();
                $.ajax({
                    type: 'POST',
                    url: '<?= URL ?>export/export',
                    data: "id=" + request_id + "&html=mlay",
                    dataType: 'json',
                    success: function(data) {
                        console.log(data);
                    },
                    error: function(err) {
                        console.log(err.responseText);
                    }
                });
            });
        });
    });

    function valider() {
        $.ajax({
            type: 'POST',
            url: '<?= URL ?>signature/create',
            data: "demande=" + request_id,
            success: function(response) {
                if (response.trim() == "success") {
                    $("#validated").modal("show");
                    // window.location.href="<?= URL ?>accueil";
                } else if (response.trim() == "ok") {
                    $("#deja").modal("show");
                } else {
                    $("#notvalidated").modal("show");
                    // window.location.href="<?= URL ?>admin";
                }
            },
            error: function(err) {
                if (err['responseText'].trim() == "success") {
                    $("#validated").modal("show");
                    // window.location.href="<?= URL ?>accueil";
                } else if (err['responseText'].trim() == "ok") {
                    $("#deja").modal("show");
                } else {
                    $("#notvalidated").modal("show");
                    // window.location.href="<?= URL ?>admin";
                }
            }
        });
    }

    function getListDemande() {
        $.ajax({
            type: "GET",
            url: "<?= URL ?>demande/list",
            dataType: 'json',
            success: function(data) {
                var html = ``;
                $("#request-list").empty();
                if (data.length > 0) {
                    $.each(data, function(key, value) {
                        html += `<tr>`;
                        html += `<td>` + value['departement'] + `</td>`;
                        html += `<td>` + value['nom'] + `</td>`;
                        html += `<td>` + value['montant'] + `Ar</td>`;
                        html += `<td>` + value['motif'] + `</td>`;
                        html += `<td>` + value['date'] + `</td>`;
                        html += `<td>`;
                        html += `<button class="btn btn-success validate" request-id=` + value[
                            'id'] + `>Valider</button>`;
                        html += `<button class="btn btn-success m-l-5 more" request-id=` + value[
                            'id'] + `><i class="fa fa-eye"></i></button>`;
                        html += `</td>`;
                        html += `</tr>`;
                    });
                } else {
                    html += `<tr>`;
                    html += `<td colspan="6">`;
                    html += `<div class="alert alert-warning fade show">`;
                    html += `<strong>Notification!</strong> Aucune demande`;
                    html += `</div>`;
                    html += `<td>`;
                    html += `</tr>`;
                }
                $("#request-list").append(html);
            }
        });
    }

    function getListDemandeAccepte() {
        $.ajax({
            type: "GET",
            url: "<?= URL ?>demande/accepted_list",
            dataType: 'json',
            success: function(data) {
                var html = ``;
                $("#request-list-accepted").empty();
                if (data.length > 0) {
                    $.each(data, function(key, value) {
                        html += `<tr>`;
                        html += `<td>` + value['departement'] + `</td>`;
                        html += `<td>` + value['nom'] + `</td>`;
                        html += `<td>` + value['montant'] + `Ar</td>`;
                        html += `<td>` + value['motif'] + `</td>`;
                        html += `<td>` + value['date'] + `</td>`;
                        html += `<td>`;
                        html += `<button class="btn btn-success imprimer" request-id=` + value['id'] + `><i class="fa fa-print m-r-10"></i>Imprimer</button>`;
                        html += `</td>`;
                        html += `</tr>`;
                    });
                } else {
                    html += `<tr>`;
                    html += `<td colspan="6">`;
                    html += `<div class="alert alert-warning fade show">`;
                    html += `<strong>Notification!</strong> Aucune demande accepté`;
                    html += `</div>`;
                    html += `<td>`;
                    html += `</tr>`;
                }
                $("#request-list-accepted").append(html);
            },
            error: function(err) {
                console.log(err);
            }
        });
    }
    </script>
</body>

</html>