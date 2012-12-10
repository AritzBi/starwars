<div class="post">
            <h2 class="title"><a href="<?php echo url_for('pelicula/show?id='.$Pelicula->getId()) ?>"><?php echo $Pelicula->getName() ?></a></h2>
            <img src="/images/<?php echo $Pelicula->getPhoto() ?>" class="mPhoto" alt="<?php echo $Pelicula->getName() ?>"/>
				<div class="entry">
                    <span><?php echo $Pelicula->getSummary() ?><span>
                    <br/><br/><p>Fecha de estreno: <?php echo $Pelicula->getPremiereDate() ?></p>
				</div>
</div>

<?php 	$Participaciones = $Pelicula->getParticipacions();?>
<div name="personajes">
<h2>Personajes</h2><br/>     
        <div id="participaciones">
           <?php foreach ($Participaciones as $Participacion): ?>
           <a href="<?php echo url_for('personaje/show?id='.$Participacion->getPersonaje()->getId()) ?>"><img  src="/images/<?php echo $Participacion->getPersonaje()->getPhoto() ?>" class="sPhoto" alt="<?php echo $Participacion->getPersonaje()->getName() ?>" /></a>
           <?php endforeach; ?>
        </div>
</div>