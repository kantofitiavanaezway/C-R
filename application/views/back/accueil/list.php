<?php
    $i=0;
    foreach ($data as $d) {
        if($i==0){
            $i++;
?>
            <div class="carousel-item active" style="width:100%;height:100%;background-image: url(<?= URL."assets/img/accueils/".$d->image; ?>)">
            <div class="carousel-container">
            <div class="container">
            <h2 class="animate__animated animate__fadeInDown">Izay ataony eto</h2>
            <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">En savoir plus ...</a>
            </div>
            </div>
            </div>
<?php
        }
        else
        {
?>
            <div class="carousel-item" style="width:100%;height:100%;background-image: url(<?= URL."assets/img/accueils/".$d->image; ?>)">
            <div class="carousel-container">
            <div class="container">
            <h2 class="animate__animated animate__fadeInDown">Izay ataony eto</h2>
            <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">En savoir plus ...</a>
            </div>
            </div>
            </div>
<?php     
        }
    }
?>