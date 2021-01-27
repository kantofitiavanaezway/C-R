<?php
    foreach ($data as $d) {
?>
        <div class="services__item">
        <div class="container-services row  p-t-20">
        <div class="container-services-image col-4 text-center">
        <img src="<?= URL."assets/img/services/".$d->image; ?>"/>
        </div>
        <div class="container-services-text col-8 text-center">
        <h1>Titre</h1>
        <p>Description</p>
        <a href="#" class="btn btn-primary">Lien</a>
        </div>
        </div>
        </div>
<?php
    }
?>