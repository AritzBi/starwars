<h1><?php echo __("Lista de Peliculas") ?></h1>

    <?php foreach ($Peliculas as $Pelicula): ?>
        <div class="post">
            <h2 class="title"><a href="<?php echo url_for('pelicula/show?id='.$Pelicula->getId()) ?>"><?php echo $Pelicula->getName() ?></a></h2>
            <div class="description">
            <img src="/images/<?php echo $Pelicula->getPhoto() ?>" class="mPhoto" alt="<?php echo $Pelicula->getName() ?>"/>
			<div class="details">
            <p class="meta"><span class="date">Fecha de estreno: <?php echo $Pelicula->getPremiereDate() ?></span></p>
			<div style="clear: both;">&nbsp;</div>
				<div class="entry">
					<?php echo $Pelicula->getSummary() ?>
					<p class="links"><a href="<?php echo url_for('pelicula/show?id='.$Pelicula->getId()) ?>" class="more">Saber m&aacute;s</a></p>
				</div>
            </div>
            </div>
		</div>
   <?php endforeach; ?>

