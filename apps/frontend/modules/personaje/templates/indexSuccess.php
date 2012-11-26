<h1>Personajes</h1>
<br/>
    <?php foreach ($Personajes as $Personaje): ?>
    <div class="description">
        <div class="photo" ><img class="actors" src="/images/<?php echo $Personaje->getPhoto() ?>" alt="<?php echo $Personaje->getName() ?>"/></div>
        <div class="details">
        <div class="name"><h3><a href="<?php echo url_for('personaje/show?id='.$Personaje->getId()) ?>"><?php echo $Personaje->getName() ?></a></h3></div>
            <br/>
        <p><strong>Resumen:</strong> <?php echo $Personaje->getSummary() ?></p>
        <p><strong>Raza:</strong> <?php echo $Personaje->getRaza() ?></p>
        <p class="see-more"><a href="<?php echo url_for('personaje/show?id='.$Personaje->getId()) ?>">Saber m&aacute;s...</a></p>
        </div>
    </div>
    <?php endforeach; ?>
