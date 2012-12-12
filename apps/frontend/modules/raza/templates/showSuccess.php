<h1 class="title">Personajes <?php echo $raza->getName() ?>s</h1> 
<p style="margin-bottom:10px;"><?php echo $raza->getSummary() ?></p>
<?php if($raza->countPersonajes() > 0): ?>
     <?php foreach ($raza->getPersonajes() as $Personaje): ?>
     <div class="description">
     <div class="photo" ><img class="actors" src="/images/<?php echo $Personaje->getPhoto() ?>" alt="<?php echo $Personaje->getName() ?>"/></div>
     <div class="details">
       <h1><a href="<?php echo url_for('personaje/show?id='.$Personaje->getId()) ?>"><?php echo $Personaje->getName() ?></a></h1>
       <p><?php echo $Personaje->getSummary() ?></p>
       <p><a class="more" href="<?php echo url_for('personaje/show?id='.$Personaje->getId()) ?>">More</a></p>
     </div>
     </div>
     <?php endforeach; ?>
 <?php else: ?> <br/>
    <p>There are <strong>no</strong> personajes in this raza.</p>
 <?php endif; ?> 