    <?php foreach ($Razas as $Raza): ?>
    <div class="description" style="width:100%;">
        <div class="details" style="width:100%;">
        <h1 style="margin-bottom:5px;"><?php echo $Raza->getName() ?></h1>
        <p><?php echo $Raza->getSummary() ?></p>
        <p class="see-more"><a href="/frontend_dev.php/raza/<?php echo $Raza->getSlug() ?>">Saber más...</a></p>
        </div>
    </div>
    <?php endforeach; ?>