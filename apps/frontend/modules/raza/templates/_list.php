
 <?php foreach ($razas as $raza): ?>
 <li class="raza"><a href="/raza/<?php echo $raza->getSlug() ?>"><?php echo $raza->getName() ?></a></li>
 <?php endforeach; ?>

