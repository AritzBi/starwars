<h1><?php echo __("Lista de Peliculas") ?></h1>

    <?php foreach ($Peliculas as $Pelicula): ?>
        <div class="post">
            <h2 class="title"><a href="<?php echo url_for('pelicula/show?id='.$Pelicula->getId()) ?>"><?php echo $Pelicula->getName() ?></a></h2>
            <div class="description">
            <img src="/images/<?php echo $Pelicula->getPhoto() ?>" class="mPhoto" alt="<?php echo $Pelicula->getName() ?>"/>
			<div class="details">
            <p class="meta"><span class="date" style="margin-left:10px; color:rgb(213,177,99);">Fecha de estreno:</span> <?php echo $Pelicula->getPremiereDate() ?></p>
			<div style="clear: both;"></div>
				<div class="entry">
					<p style="margin-top:-20px;"><span class="attr">Sinopsis: </span><?php echo $Pelicula->getSummary() ?></p>
					<p class="links"><a href="<?php echo url_for('pelicula/show?id='.$Pelicula->getId()) ?>" class="more">Saber m&aacute;s</a></p>
				</div>
            </div>
            </div>
		</div>
   <?php endforeach; ?>

