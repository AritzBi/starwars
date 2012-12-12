
 <?php foreach ($peliculas as $pelicula): ?>
 <li class="pelicula" ><a href="/pelicula/<?php echo $pelicula->getSlug() ?>"><?php echo $pelicula->getName() ?></a></li>
 <?php endforeach; ?>

