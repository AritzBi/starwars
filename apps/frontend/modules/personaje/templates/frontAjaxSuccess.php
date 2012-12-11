    <ul class="anythingSlider">
    <?php foreach ($Personajes as $Personaje): ?>
    <li>
    <div class="description" id="<?php echo $Personaje->getRaza() ?>" >
        <div class="photo" ><a href="<?php echo url_for('personaje/show?id='.$Personaje->getId()) ?>"><img class="actors" src="/images/<?php echo $Personaje->getPhoto() ?>" alt="<?php echo $Personaje->getName() ?>"/></a></div>
        <div class="details">
        <p><span class="attr">Nombre:</span> <?php echo $Personaje->getName() ?></p>
        <p><span class="attr">Resumen:</span> <?php echo $Personaje->getSummary() ?></p>
        <p><span class="attr">Raza:</span> <?php echo $Personaje->getRaza() ?></p>
        <p style="text-align:right;"><a href="<?php echo url_for('personaje/show?id='.$Personaje->getId()) ?>">Saber más...</a></p>
        </div>
    </div>
    </li>
    <?php endforeach; ?>
    </ul>