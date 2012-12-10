
 <?php foreach ($peliculas as $pelicula): ?>
 <li class="pelicula" id="<?php echo $pelicula->getName() ?>"><a href="/frontend_dev.php/pelicula/<?php echo $pelicula->getSlug() ?>"><?php echo $pelicula->getName() ?></a></li>
 <?php endforeach; ?>

