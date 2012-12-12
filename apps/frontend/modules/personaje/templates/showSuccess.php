    <div class="description">
        <div class="photo"><img class="actors" src="/images/<?php echo $Personaje->getPhoto() ?>" alt="<?php echo $Personaje->getName() ?>"/></div>
        <div class="details" >
        <p><span class="attr"><strong><?php echo __("Nombre") ?>: </strong></span><?php echo $Personaje->getName() ?></p>
        <p><span class="attr"><strong><?php echo __("Resumen") ?>: </strong></span><?php echo $Personaje->getSummary() ?></p>
        <p><span class="attr"><strong><?php echo __("Raza") ?>: </strong></span><?php echo $Personaje->getRaza() ?></p>
        </div>
    </div>

