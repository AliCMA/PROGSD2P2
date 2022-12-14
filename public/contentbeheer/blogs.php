<?php include '../../private/init.php'; ?>
<?php include SHARED_PATH . '/header.php'; ?>
<h1>
    Dit is de blogs pagina
</h1>
    <?php
      // bestands_check('blogss.txt');  
        lees_bestand('blogs.txt');
      
    ?>
<?php include SHARED_PATH . '/footer.php'; ?>
