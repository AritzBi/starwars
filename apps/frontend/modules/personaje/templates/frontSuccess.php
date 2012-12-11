<h1 class="title">Star Wars</h1>
<p>Bienvenidos a una de las miles páginas fans que la popular saga Star Wars posee alrededor del mundo. Aquí podreis encontrar todo tipo de contenido relacionado con los personajes, películas, libros... No dudeis en formar parte de este gran proyecto y participar en toda ocasión posible, espero que disfruteis de la experiencia.</p>
<p>A lo largo de las películas de Star Wars y sus múltiples libros podemos encontrar numerosos personajes, la lista podría ser infinita por lo que hemos seleccionado un personaje por cada raza de las once que conforman el elenco.</p>
<br/>    
    <ul class="anythingSlider">
    <?php foreach ($Personajes as $Personaje): ?>
    <li>
    <div class="description" >
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