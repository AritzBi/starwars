<h1>Personajes</h1>
<br/>
    <?php foreach ($pager->getResults() as $Personaje): ?>
    <div class="description">
        <div class="photo" ><img class="actors" src="/images/<?php echo $Personaje->getPhoto() ?>" alt="<?php echo $Personaje->getName() ?>"/></div>
        <div class="details">
        <div class="name"><h3><a href="<?php echo url_for('personaje/show?id='.$Personaje->getId()) ?>"><?php echo $Personaje->getName() ?></a></h3></div>
            <br/>
        <p><span class="attr"><strong>Resumen:</strong></span> <?php echo $Personaje->getSummary() ?></p>
        <p><span class="attr"><strong>Raza:</strong></span> <?php echo $Personaje->getRaza() ?></p>
        <p class="see-more"><a href="<?php echo url_for('personaje/show?id='.$Personaje->getId()) ?>">Saber más...</a></p>
        </div>
    </div>
    <?php endforeach; ?>

    <?php if($pager->haveToPaginate()): ?>
    <img class="prevPage" title="<?php echo url_for('personaje/index') ?>?page=1" src="/images/first.png" alt="First page" />
    <img class="prevPage" title="<?php echo url_for('personaje/index') ?>?page=<?php echo $pager->getPreviousPage() ?>" src="/images/previous.png" alt="Previous page" />
            
        <?php foreach ($pager->getLinks() as $page): ?>
            <?php if ($page == $pager->getPage()): ?>
                <?php echo $page ?>
            <?php else: ?>
                <span class="middle" title="<?php echo url_for('personaje/index') ?>?page=<?php echo $page ?>"><?php echo $page ?></span>
            <?php endif; ?>
        <?php endforeach; ?>
    <img class="nextPage" title="<?php echo url_for('personaje/index') ?>?page=<?php echo $pager->getNextPage() ?>" src="/images/next.png" alt="Next page" />
    <img class="nextPage" title="<?php echo url_for('personaje/index') ?>?page=<?php echo $pager->getLastPage() ?>" src="/images/last.png" alt="Last page" />
    <?php endif;?>
    
    
<script type="text/javascript">
    $(document).ready(function(){
        $('span.middle').click(function () { 
                $.ajax({
                    type: "GET",
                    url: $(this).attr("title"),
                    data: "html",
                    success: function(data){
                        $('#content').html(data);
                    }
                });
            });
    
        $('img.prevPage').click(function () { 
                $.ajax({
                    type: "GET",
                    url: $(this).attr("title"),
                    data: "html",
                    success: function(data){
                        $('#content').html(data);
                    }
                });
            });
             
        $('img.nextPage').click(function () { 
                $.ajax({
                    type: "GET",
                    url: $(this).attr("title"),
                    data: "html",
                    success: function(data){
                        $('#content').html(data);
                    }
                });
            });         
            
        $(this).ajaxComplete(function(){
            $('span.middle').click(function () { 
                $.ajax({
                    type: "GET",
                    url: $(this).attr("title"),
                    data: "html",
                    success: function(data){
                        $('#content').html(data);
                    }
                });
            });
            
            $('img.prevPage').click(function () { 
                $.ajax({
                    type: "GET",
                    url: $(this).attr("title"),
                    data: "html",
                    success: function(data){
                        $('#content').html(data);
                    }
                });
            });
             
            $('img.nextPage').click(function () { 
                    $.ajax({
                    type: "GET",
                    url: $(this).attr("title"),
                    data: "html",
                    success: function(data){
                        $('#content').html(data);
                    }
                });
            });   
        });
    });
</script>