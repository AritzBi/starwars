
 <?php foreach ($razas as $raza): ?>
 <li id="<?php echo $raza->getName() ?>" class="raza"><a href="/frontend_dev.php/raza/<?php echo $raza->getSlug() ?>"><?php echo $raza->getName() ?></a></li>
 <?php endforeach; ?>

