<?php include '../../private/init.php'; ?>

<center>
<?php include SHARED_PATH . '/header.php'; ?>
<h1>
    Dit is de blogs pagina
</h1>
    <?php
      // bestands_check('blogss.txt');  
        lees_bestand('blogs.txt');
      
    ?>


<br>
<a href="<?php echo url_path(path: '/contentbeheer/index.php'); ?>">Beheer</a>
<br>
<a href="<?php echo url_path(path: '/contentbeheer/gamen.php'); ?>">Gamen</a>
<br>
<a href="<?php echo url_path(path: '/contentbeheer/website.php'); ?>">Website</a>
<br>
<br>    
<br>
<br>
<br>
<br>
<a href="<?php echo url_path(path: '/contentbeheer/inhuurform.php'); ?>">Form om mij in te huren</a>



<?php include SHARED_PATH . '/footer.php'; ?>
</center>