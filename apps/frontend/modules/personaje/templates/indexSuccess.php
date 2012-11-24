<h1>Personajes</h1>

    <?php foreach ($Personajes as $Personaje): ?>
    <div class="description">
        <div class="photo" ><img src="/images/<?php echo $Personaje->getPhoto() ?>" alt="<?php echo $Personaje->getName() ?>"/></div>
        <div class="details">
        <p>Nombre: <a href="<?php echo url_for('personaje/show?id='.$Personaje->getId()) ?>"><?php echo $Personaje->getName() ?></a></p>
        <p>Resumen: <?php echo $Personaje->getSummary() ?></p>
        <p>Raza: <?php echo $Personaje->getRaza() ?></p>
        <p><a href="<?php echo url_for('personaje/show?id='.$Personaje->getId()) ?>">Saber mas...</a></p>
        </div>
    </div>
    <?php endforeach; ?>
