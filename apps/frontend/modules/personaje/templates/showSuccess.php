    <div class="description">
        <div class="photo"><img class="actors" src="/images/<?php echo $Personaje->getPhoto() ?>" alt="<?php echo $Personaje->getName() ?>"/></div>
        <div class="details" >
        <p>Nombre: <?php echo $Personaje->getName() ?></p>
        <p>Resumen: <?php echo $Personaje->getSummary() ?></p>
        <p>Raza: <?php echo $Personaje->getRazaId() ?></p>
        </div>
    </div>

