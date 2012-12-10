<div class="post">
            <h2 class="title"><a href="<?php echo url_for('pelicula/show?id='.$Pelicula->getId()) ?>"><?php echo $Pelicula->getName() ?></a></h2>
            <img src="/images/<?php echo $Pelicula->getPhoto() ?>" class="mPhoto" alt="<?php echo $Pelicula->getName() ?>"/>
			<p class="meta"><span class="date"><?php echo $Pelicula->getPremiereDate() ?></span></p>
			<div style="clear: both;">&nbsp;</div>
				<div class="entry">
					<?php echo $Pelicula->getSummary() ?>
				</div>
			</div>

<?php 	$Participaciones = $Pelicula->getParticipacions();?>       
           <?php foreach ($Participaciones as $Participacion): ?>
           <a href="<?php echo url_for('personaje/show?id='.$Participacion->getPersonaje()->getId()) ?>"><img  src="/images/<?php echo $Participacion->getPersonaje()->getPhoto() ?>" class="sPhoto" alt="<?php echo $Participacion->getPersonaje()->getName() ?>" /></a>
           <?php endforeach; ?>
<hr />
