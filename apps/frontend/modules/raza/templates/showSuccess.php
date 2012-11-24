<h1>Personajes <?php echo $raza->getName() ?>s</h1> 
<hr/>
<?php if($raza->countPersonajes() > 0): ?>
 <?php foreach ($raza->getPersonajes() as $Personaje): ?>
   <h1><a href="<?php echo url_for('personaje/show?id='.$Personaje->getId()) ?>"><?php echo $Personaje->getName() ?></a></h1>
   <h3><?php echo $Personaje->getSummary() ?></h3>
   <img src="/images/<?php echo $Personaje->getPhoto() ?>" alt ="<?php echo $Personaje->getName() ?>"/>
   <p><a href="<?php echo url_for('personaje/show?id='.$Personaje->getId()) ?>">Read it...</a></p>
 <?php endforeach; ?>
 <?php else: ?> <br/>
 <p>There are <strong>no</strong> personajes in this raza.</p>
 <?php endif; ?> 