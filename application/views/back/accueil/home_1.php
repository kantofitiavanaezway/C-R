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
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="index.html">W4Y</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                            <div id="custom-search" class="top-search-bar">
                                <input class="form-control" type="text" placeholder="Search..">
                            </div>
                        </li>
                        <li class="nav-item dropdown notification">
                            <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span class="indicator"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                                <li>
                                    <div class="notification-title"> Notification</div>
                                    <div class="notification-list">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item list-group-item-action active">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="images/avatar-2.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Jeremy Rakestraw</span>accepted your invitation to join the team.
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="images/avatar-3.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">John Abraham </span>is now following you
                                                        <div class="notification-date">2 days ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="images/avatar-4.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Monaan Pechi</span> is watching your main repository
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="images/avatar-5.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Jessica Caruso</span>accepted your invitation to join the team.
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-footer"> <a href="#">View all notifications</a></div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown connection">
                            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-fw fa-th"></i> </a>
                            <ul class="dropdown-menu dropdown-menu-right connection-dropdown">
                                <li class="connection-list">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="images/github.png" alt="" > <span>Github</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="images/dribbble.png" alt="" > <span>Dribbble</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="images/dropbox.png" alt="" > <span>Dropbox</span></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="images/bitbucket.png" alt=""> <span>Bitbucket</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="images/mail_chimp.png" alt="" ><span>Mail chimp</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="images/slack.png" alt="" > <span>Slack</span></a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="conntection-footer"><a href="#">More</a></div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">John Abraham </h5>
                                    <span class="status"></span><span class="ml-2">Available</span>
                                </div>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="fas fa-user m-r-2"></i>Account</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="fas fa-cog m-r-2"></i>Setting</a>
                                <a class="dropdown-item" href="javascript:void(0)" id="log-out"><i class="fas fa-power-off m-r-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Tableau de bord</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-item ">
                                <a class="nav-link active" href="#"><i class="fa fa-fw fa-user-circle"></i>Accueil</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="#"><i class="fa fa-fw fa-user-circle"></i>Atouts</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="#"><i class="fa fa-fw fa-user-circle"></i>Contact</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Gerer l'accueil</h2>
                                <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tableau de bord</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Accueil</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <h1 class="m-l-20">Gerer les slides</h1>
                    </div>
                    <div class="row">
                        <button title="Nouveau slide" type="button" class="btn btn-success m-l-30" data-toggle="modal" data-target="#new" id=""><i class="fa fa-plus"></i></button>
                    </div>
                    <div class="row m-t-20" id="slide-list">

                    </div>

                    <div class="row">
                        <h1 class="m-l-20">Gerer les atouts</h1>
                    </div>
                    <div class="row">
                        <button title="Nouveau atout" type="button" class="btn btn-success m-l-30" data-toggle="modal" data-target="#atout-new" id=""><i class="fa fa-plus"></i></button>
                    </div>
                    <div class="row m-t-20" id="atout-list">

                    </div>  
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

    <!-- Atouts -->
    <div class="modal fade" id="atout-new">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Nouveau atout</h4>
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
                    <h4 class="modal-title">Nouveau atout</h4>
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
            getListSlide();
            getListAtout();
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
                            console.log(response);
                        },
                        error:function(err)
                        {
                            $('#new-form')[0].reset();
                            $("#new").modal("hide");
                            getListSlide();
                            console.log(err);
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
                    var accueilItem='';
                    $.each(data, function (key,value) {
                        if (data.length >= 0){
                            accueilItem+='<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12"><div class="card">';
                            accueilItem+='<div class="card-body">';
                            accueilItem+='<img src="<?= URL ?>assets/img/accueils/'+value['image']+'">';
                            accueilItem+='</div>';
                            accueilItem+='<div class="card-footer container-fluid">';
                            accueilItem+='<div class="row m-l-10">';
                            accueilItem+='<p class="text-dark">Atoute en </p>';
                            accueilItem+='</div>';
                            accueilItem+='<div class="row m-b-10 m-l-10">';
                            accueilItem+='<p class="text-dark">Par </p>';
                            accueilItem+='</div>';
                            accueilItem+='<div class="row">';
                            accueilItem+='<div class="col-6">';
                            accueilItem+='<button class="btn btn-outline-warning edit btn-block">Modifier</button>';
                            accueilItem+='</div>';
                            accueilItem+='<div class="col-6">';
                            accueilItem+='<button class="btn btn-outline-danger delete btn-block" slide-id="'+value['id']+'">Supprimer</button>';
                            accueilItem+='</div>';
                            accueilItem+='</div>';
                            accueilItem+='</div>';
                            accueilItem+='</div></div>';
                        }
                    });
                    $('#slide-list').append(accueilItem);
                }   
            }); 
        }
        function getListAtout()
        {
            $.ajax({
                type: "POST",
                url:"<?= URL ?>atout/list",
                dataType:'json',
                success: function (data) {
                    $('#atout-list').empty();
                    var accueilItem='';
                    $.each(data, function (key,value) {
                        if (data.length >= 0){
                            accueilItem+='<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12"><div class="card">';
                            accueilItem+='<div class="card-body">';
                            accueilItem+='<h1>'+value['titre']+'</h1>';
                            accueilItem+='<i class="fa '+value['icon']+'"></i>';
                            accueilItem+='<p>'+value['description']+'</p>';
                            accueilItem+='<p class="text-dark">Lien: '+value['lien']+'</p>';
                            accueilItem+='</div>';
                            accueilItem+='<div class="card-footer container-fluid">';
                            accueilItem+='<div class="row">';
                            accueilItem+='<div class="col-6">';
                            accueilItem+='<button class="btn btn-outline-warning edit btn-block" atout-id="'+value['id']+'" atout-titre="'+value['titre']+'" atout-description="'+value['description']+'" atout-icon="'+value['icon']+'" atout-lien="'+value['lien']+'">Modifier</button>';
                            accueilItem+='</div>';
                            accueilItem+='<div class="col-6">';
                            accueilItem+='<button class="btn btn-outline-danger delete btn-block" atout-id="'+value['id']+'">Supprimer</button>';
                            accueilItem+='</div>';
                            accueilItem+='</div>';
                            accueilItem+='</div>';
                            accueilItem+='</div></div>';
                        }
                    });
                    $('#atout-list').append(accueilItem);
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