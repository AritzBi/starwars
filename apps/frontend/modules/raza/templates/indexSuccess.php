    <?php foreach ($Razas as $Raza): ?>
    <div class="description" style="width:100%;">
        <div class="details" style="width:100%;">
        <h1 style="margin-bottom:5px;"><?php echo $Raza->getName() ?></h1>
        <p><?php echo $Raza->getSummary() ?></p>
        <p><a class="more" href="/frontend_dev.php/raza/<?php echo $Raza->getSlug() ?>"><?php echo __("Mas") ?></a></p>
        </div>
    </div>
    <?php endforeach; ?>