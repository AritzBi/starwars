<?xml version="1.0" encoding="ISO-8859-1"?>
<rss version="2.0">
<channel>
       <?php foreach ($Peliculas as $Pelicula): ?>
         <item>
            <title><?php echo $Pelicula->getName() ?></title>
            <description>Fecha estreno: <?php echo $Pelicula->getPremiereDate() ?> 
            </description>
            <link><?php echo url_for('pelicula/show?id='.$Pelicula->getId()) ?></link>
          </item>
        <?php endforeach; ?>
</channel>
</rss>
