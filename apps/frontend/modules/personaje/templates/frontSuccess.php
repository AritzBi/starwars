<h1 class="title">Personajes</h1>
    <ul class="anythingSlider">
    <?php foreach ($Personajes as $Personaje): ?>
    <li>
    <div class="description" id="<?php echo $Personaje->getRaza() ?>" >
        <div class="photo" ><img class="actors" src="/images/<?php echo $Personaje->getPhoto() ?>" alt="<?php echo $Personaje->getName() ?>"/></div>
        <div class="details">
        <p>Nombre: <a href="<?php echo url_for('personaje/show?id='.$Personaje->getId()) ?>"><?php echo $Personaje->getName() ?></a></p>
        <p>Resumen: <?php echo $Personaje->getSummary() ?></p>
        <p>Raza: <?php echo $Personaje->getRaza() ?></p>
        <p style="text-align:right;"><a href="<?php echo url_for('personaje/show?id='.$Personaje->getId()) ?>">Saber mas...</a></p>
        </div>
    </div>
    </li>
    <?php endforeach; ?>
    </ul>