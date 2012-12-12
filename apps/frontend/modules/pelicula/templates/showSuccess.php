<div class="post">            
            <h2 class="title"><a href="<?php echo url_for('pelicula/show?id='.$Pelicula->getId()) ?>"><?php echo $Pelicula->getName() ?></a></h2>
            <div id="description" class="film">
            <img src="/images/<?php echo $Pelicula->getPhoto() ?>" class="mPhoto" alt="<?php echo $Pelicula->getName() ?>"/>
				<div class="entry">
                    <span><?php echo $Pelicula->getSummary() ?></span>
                    <br/><br/><p><span  style="color:rgb(213,177,99);"><strong><?php echo __("Fecha de estreno") ?>: </strong></span><?php echo $Pelicula->getPremiereDate() ?></p>
				</div>
            </div>
</div>

<?php 	$Participaciones = $Pelicula->getParticipacions();?> 
        
           <?php foreach ($Participaciones as $Participacion): ?>
           <div class="viewport">
            <?php $actual=$Participacion->getPersonaje();?>
           <a href="<?php echo url_for('personaje/show?id='.$actual->getId()) ?>"><img  src="/images/<?php echo $Participacion->getPersonaje()->getPhoto() ?>" class="sPhoto" alt="<?php echo $Participacion->getPersonaje()->getName() ?>" />
           <span class="dark-background"><?php echo $actual->getName() ?> <em><?php echo $actual->getRaza() ?> </em></span> 
            </a>
            </div>
           <?php endforeach; ?>


