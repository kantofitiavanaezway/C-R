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
    <title>Accueil|Admin</title>
</head>

<body>
    <div class="dashboard-main-wrapper">
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-dark fixed-top">
                <a class="navbar-brand" href="<?= URL ?>">W4Y</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item"></li>
                        <li class="nav-item dropdown notification">
                            <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span class="indicator"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                                <li>
                                    <div class="notification-title"> Notifications</div>
                                    <div class="notification-list">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item list-group-item-action active">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img">
                                                        <img src="<?= URL ?>assets/img/logos/avatar.png" alt="" class="user-avatar-md rounded-circle">
                                                    </div>
                                                    <div class="notification-list-user-block">
                                                        <span class="notification-list-user-name">Admin</span>
                                                        a ajoute une photo logo.
                                                        <div class="notification-date">
                                                            il ya 2 minutes
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-footer"> <a href="#">Tout marquer comme lus</a></div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="javascript:void(0)" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="<?= URL ?>assets/img/logos/avatar.png" alt="" class="user-avatar-md rounded-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">Admin </h5>
                                    <span class="status"></span><span class="ml-2">Actif</span>
                                </div>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="fas fa-user m-r-10"></i>Mon compte</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="fas fa-cog m-r-10"></i>Modifier le profil</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="fas fa-circle m-r-10  text-success"></i>Les admin actifs</a>
                                <a class="dropdown-item" href="javascript:void(0)" id="log-out"><i class="fas fa-power-off m-r-10"></i>Se deconnecter</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="<?= URL ?>accueil">Tableau de bord</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-item ">
                                <a class="nav-link active" href="javascript:void(0)" id="manage-link-accueil"><i class="fa fa-fw fa-home"></i>Accueil</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="javascript:void(0)" id="manage-link-info"><i class="fa fa-fw fa-info"></i>Info du page</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="javascript:void(0)" id="manage-link-service"><i class="fa fa-fw fa-globe"></i>Services</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="javascript:void(0)" id="manage-link-email"><i class="fa fa-fw fa-envelope"></i>E-Mail</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="javascript:void(0)" id="manage-link-stat"><i class="fa fa-fw fa-clipboard-list"></i>Demande d'administration</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="javascript:void(0)" id="manage-link-stat"><i class="fa fa-fw fa-chart-line"></i>Statistique de vues</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="javascript:void(0)" id="manage-link-historique"><i class="fa fa-fw fa-history"></i>Historique</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content" id="content-page-admin">
                     
                </div>
            </div>
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Slide -->
    <div class="modal fade" id="new">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Nouveau slide</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form enctype="multipart/form-data" id="new-form">
                            <div class="form-group">
                            <label for="titre">Titre</label>
                            <input type="text" class="form-control" id="titre" name="titre" placeholder="Titre" required />
                        </div>
                        <div class="form-group">
                            <input type="file" class="form-control" id="image" name="image" required />
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
                    <div class="message"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="delete-confirm">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Suppression d'un slide</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <h2>Tena sura ve ianao?</h2>
                    <div class="form-group">
                        <button class="btn btn-primary">Non</button>
                        <button class="btn btn-primary yes" id="id">Oui</button>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Service -->
    <div class="modal fade" id="atout-new">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Nouveau service</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form enctype="multipart/form-data" id="new-atout-form">
                        <div class="form-group">
                            <label for="titre">Titre</label>
                            <input type="text" class="form-control" id="titre" name="titre" placeholder="Titre" required />
                        </div>
                        <div class="form-group">
                            <label for="icon">Icon</label>
                            <input type="text" class="form-control" id="icon" name="icon" placeholder="Icon" required />
                        </div>
                        <div class="form-group">
                            <label for="image">Image Icon</label>
                            <input type="file" class="form-control" id="image" name="image" placeholder="Image Icon" required />
                        </div>
                        <div class="form-group">
                            <label for="lien">Lien</label>
                            <input type="text" class="form-control" id="lien" name="lien" placeholder="Lien" required />
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" name="description" id="description" placeholder="Description" required></textarea>
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
                    <div class="message"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="atout-edit">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Modifier service</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form enctype="multipart/form-data" id="edit-atout-form">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="titre">Titre</label>
                                    <input type="hidden" class="form-control" id="id" name="id" placeholder="id" required />
                                    <input type="text" class="form-control" id="titre" name="titre" placeholder="Titre" required />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="icon">Icon</label>
                                    <input type="text" class="form-control" id="icon" name="icon" placeholder="Icon" required />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="lien">Lien</label>
                            <input type="text" class="form-control" id="lien" name="lien" placeholder="Lien" required />
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" name="description" id="description" placeholder="Description" required></textarea>
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
                    <div class="message"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
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
            $("#content-page-admin").empty().load("<?= URL ?>accueil/container");
            getListSlide();
            getListService();
            $(function() {
                $("#new-form").on('submit', function(e){
                    e.preventDefault();
                    $.ajax({
                        type: 'POST',
                        url:'<?= URL ?>accueil/create',
                        data: new FormData(this),
                        dataType: 'json',
                        contentType: false,
                        cache: false,
                        processData:false,
                        success: function(response){ 
                            $('.message').html('');
                            if(response.trim()=='success')
                            {
                                $(this).reset();
                                $("#new").modal("hide");
                                getListSlide();
                            }
                            else
                            {
                                $('.message').html('<p class="alert alert-warning">'+response+'</p>');
                            }
                        },
                        error:function(err)
                        {
                            $('#new-form')[0].reset();
                            $("#new").modal("hide");
                            getListSlide();
                        }
                    });
                });
                // // File type validation
                // $("#image").change(function() {
                //     var file = this.files[0];
                //     var fileType = file.type;
                //     var match = ['application/pdf', 'application/msword', 'application/vnd.ms-office', 'image/jpeg', 'image/png', 'image/jpg'];
                //     if(!((fileType == match[0]) || (fileType == match[1]) || (fileType == match[2]) || (fileType == match[3]) || (fileType == match[4]) || (fileType == match[5]))){
                //         alert('Sorry, only PDF, DOC, JPG, JPEG, & PNG files are allowed to upload.');
                //         $("#image").val('');
                //         return false;
                //     }
                // });
                
                $(document).on("click", "a#log-out", function(){
                    window.location.href="<?= URL ?>admin/logout";
                });
                $(document).on("click", "button.delete", function(){
                    $("#delete-confirm button.yes").attr("id",$(this).attr("slide-id"));
                    $("#delete-confirm").modal("show");
                });
                $(document).on("click", "#delete-confirm button.yes", function(){ 
                    $.ajax({
                        type: "POST",
                        url: "<?= URL ?>accueil/delete",
                        data:"id="+$(this).attr("id").trim(),
                        success: function (data) {
                            if(data.trim()=="success")
                            {
                                getListSlide();
                            }
                        }
                    });
                    $("#delete-confirm").modal("hide");
                });
                // $(document).on("mouseover", "a.edit", function()
                // {
                //     $(this).attr("id","edit-slide");
                // });
                // $(document).on("mouseout", "a.edit", function()
                // {
                //     $(this).attr("id","");
                // });
                // $(document).on("mouseover", "a.delete-slide-id", function()
                // {
                //     $(this).attr("id","delete-slide-id");
                // });
                // $(document).on("mouseout", "a.delete-slide-id", function()
                // {
                //     $(this).attr("id","");
                // });
                // $(document).on("click", "a#edit-slide", function(){
                //     $("#edit-slide input#slide-id").val($(this).attr('slide-id-edit'));
                //     $("#edit-slide input#edit-title").val($(this).attr('slide-title-edit'));
                //     $("#edit-slide textarea#edit-description").empty();
                //     $("#edit-slide textarea#edit-description").append($(this).attr('slide-description-edit'));
                //     $("#edit-slide").modal("show");
                // });
                // $("#edit-slide-form").on('submit', function(e){
                //     e.preventDefault();
                //     $.ajax({
                //         type: 'POST',
                //         url:'accueil/update',
                //         data: new FormData(this),
                //         dataType: 'json',
                //         contentType: false,
                //         cache: false,
                //         processData:false,
                //         success: function(response){ 
                //             $('.message-update').html('');
                //             if(response.trim()=='success')
                //             {
                //                 $("#edit-slide").modal("hide");
                //                 $('#edit-slide-form')[0].reset();
                //                 getListSlide();
                //             }
                //             else
                //             {
                //                 $('.message-update').html('<p class="alert alert-warning">'+response+'</p>');
                //             }
                //         },
                //         error:function(err)
                //         {
                //             $('#edit-slide-form')[0].reset();
                //             $("#edit-slide").modal("hide");
                //             getListSlide();
                //         }
                //     });
                // });
                $("#new-atout-form").on('submit', function(e){
                    e.preventDefault();
                    $.ajax({
                        type: 'POST',
                        url:'<?= URL ?>atout/create',
                        data: new FormData(this),
                        dataType: 'json',
                        contentType: false,
                        cache: false,
                        processData:false,
                        success: function(response){ 
                        },
                        error:function(err)
                        {
                            $('#new-atout-form')[0].reset();
                            $("#atout-new").modal("hide");
                            getListAtout();
                        }
                    });
                });

                $(document).on("click", "button.delete", function(){
                    $("#delete-confirm button.yes").attr("id",$(this).attr("atout-id"));
                    $("#delete-confirm").modal("show");
                });
                $(document).on("click", "#delete-confirm button.yes", function(){ 
                    $.ajax({
                        type: "POST",
                        url: "<?= URL ?>atout/delete",
                        data:"id="+$(this).attr("id").trim(),
                        success: function (data) {
                            if(data.trim()=="success")
                            {
                                getListAtout();
                            }
                        }
                    });
                    $("#delete-confirm").modal("hide");
                });

                $(document).on("click", "button.edit", function(){
                    $("#atout-edit input#id").val($(this).attr("atout-id"));
                    $("#atout-edit input#titre").val($(this).attr("atout-titre"));
                    $("#atout-edit input#lien").val($(this).attr("atout-lien"));
                    $("#atout-edit input#icon").val($(this).attr("atout-icon"));
                    $("#atout-edit textarea#description").append($(this).attr("atout-description"));
                    $("#atout-edit").modal("show");
                });
                $("#edit-atout-form").on('submit', function(e){
                    e.preventDefault();
                    $.ajax({
                        type: 'POST',
                        url:'<?= URL ?>atout/update',
                        data: new FormData(this),
                        dataType: 'json',
                        contentType: false,
                        cache: false,
                        processData:false,
                        success: function(response){ 
                        },
                        error:function(err)
                        {
                            $('#edit-atout-form')[0].reset();
                            $("#atout-edit").modal("hide");
                            getListAtout();
                        }
                    });
                });
                /**
                 * Navigation
                */
                $(document).on("click", "a#manage-link-accueil", function(){
                    $("#content-page-admin").empty().load("<?= URL ?>accueil/container");
                    getListSlide();
                    getListService();
                });
                $(document).on("click", "a#manage-link-info", function(){
                    $("#content-page-admin").empty().load("<?= URL ?>page/container");
                });
                $(document).on("click", "a#manage-link-service", function(){
                    $("#content-page-admin").empty().load("<?= URL ?>service/container");
                });
                $(document).on("click", "a#manage-link-email", function(){
                    $("#content-page-admin").empty().load("<?= URL ?>email/container");
                });
                $(document).on("click", "a#manage-link-stat", function(){
                    $("#content-page-admin").empty().load("<?= URL ?>stat/container");
                });
                $(document).on("click", "a#manage-link-demande", function(){
                    $("#content-page-admin").empty().load("<?= URL ?>demande/container");
                });
                $(document).on("click", "a#manage-link-historique", function(){
                    $("#content-page-admin").empty().load("<?= URL ?>historique/container");
                });
            });
        });
        function getListSlide()
        {
            $.ajax({
                type: "POST",
                url:"<?= URL ?>accueil/list",
                dataType:'json',
                success: function (data) {
                    $('#slide-list').empty();
                    var html='';
                    $.each(data, function (key,value) {
                        if (data.length >= 0){
                            html+='<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12"><div class="card">';
                            html+='<div class="card-body">';
                            html+='<img src="<?= URL ?>assets/img/accueils/'+value['image']+'">';
                            html+='</div>';
                            html+='<div class="card-footer container-fluid">';
                            html+='<div class="row m-l-10">';
                            html+='<p class="text-dark">Atoute en </p>';
                            html+='</div>';
                            html+='<div class="row m-b-10 m-l-10">';
                            html+='<p class="text-dark">Par </p>';
                            html+='</div>';
                            html+='<div class="row">';
                            html+='<div class="col-6">';
                            html+='<button class="btn btn-outline-warning edit btn-block">Modifier</button>';
                            html+='</div>';
                            html+='<div class="col-6">';
                            html+='<button class="btn btn-outline-danger delete btn-block" slide-id="'+value['id']+'">Supprimer</button>';
                            html+='</div>';
                            html+='</div>';
                            html+='</div>';
                            html+='</div></div>';
                        }
                    });
                    $('#slide-list').append(html);
                }   
            }); 
        }
        function getListService()
        {
            $.ajax({
                type: "POST",
                url:"<?= URL ?>atout/list",
                dataType:'json',
                success: function (data) {
                    $('#atout-list').empty();
                    var html='';
                    $.each(data, function (key,value) {
                        if (data.length >= 0){
                            html+='<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12"><div class="card">';
                            html+='<div class="card-body">';
                            html+='<h1>'+value['titre']+'</h1>';
                            html+='<i class="fa '+value['icon']+'"></i>';
                            html+='<p>'+value['description']+'</p>';
                            html+='<p class="text-dark">Lien: '+value['lien']+'</p>';
                            html+='</div>';
                            html+='<div class="card-footer container-fluid">';
                            html+='<div class="row">';
                            html+='<div class="col-6">';
                            html+='<button class="btn btn-outline-warning edit btn-block" atout-id="'+value['id']+'" atout-titre="'+value['titre']+'" atout-description="'+value['description']+'" atout-icon="'+value['icon']+'" atout-lien="'+value['lien']+'">Modifier</button>';
                            html+='</div>';
                            html+='<div class="col-6">';
                            html+='<button class="btn btn-outline-danger delete btn-block" atout-id="'+value['id']+'">Supprimer</button>';
                            html+='</div>';
                            html+='</div>';
                            html+='</div>';
                            html+='</div></div>';
                        }
                    });
                    $('#atout-list').append(html);
                },
                error:function(err)
                {
                    console.log(err);
                }
            }); 
        }
    </script>
</body>
 
</html>