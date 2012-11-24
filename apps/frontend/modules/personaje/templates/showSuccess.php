    <div class="description">
        <div class="photo"><img src="/images/<?php echo $Personaje->getPhoto() ?>" alt="<?php echo $Personaje->getName() ?>"/></div>
        <div class="details" style="float:left;">
        <p>Nombre: <?php echo $Personaje->getName() ?></p>
        <p>Resumen: <?php echo $Personaje->getSummary() ?></p>
        <p>Raza: <?php echo $Personaje->getRaza() ?></p>
        </div>
    </div>

