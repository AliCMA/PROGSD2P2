<?php include '../../private/init.php'; ?>


<center>
<?php include SHARED_PATH . '/header.php';?>



<br>
<a href="<?php echo url_path(path: '/contentbeheer/index.php'); ?>">Beheer</a>
<br>
<a href="<?php echo url_path(path: '/contentbeheer/blogs.php'); ?>">Blogs</a>
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
<br>
<br>
<br>
<br>







<form action="" method="post">
    <p>
        <label for="naam">Naam:</label>
        <input type="text" name="naam" id="naam" />
    </p>
    <br>
    <br>
    <p>
        <label for="e-mail">E-mail:</label>
        <input type="text" name="e-mail" id="e-mail" />
    </p>
    <br>
    <br>
    <p>
        <label for="product">Wat wil je laten maken</label>
        <input type="text" name="product" id="product" />
    </p>
    <br>
    <br>
    <br>
    <br>
    <p>
        <input type="submit" value="Verzenden" />
    </p>
</form>





<?php include SHARED_PATH . '/footer.php'; ?>

</center>