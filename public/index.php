

<!-- include  "../private/init.php";


include SHARED_PATH . "/header.php";


include SHARED_PATH . "/footer.php"; -->


<?php include '../private/init.php'; ?>
<?php include SHARED_PATH . '/header.php';?>

<h1>Home</h1>

<br>
<a href="<?php echo url_path(path: '/contentbeheer/index.php'); ?>">Beheer</a>
<br>
<a href="<?php echo url_path(path: '/contentbeheer/blogs.php'); ?>">Blogs</a>
<br>

<?php include SHARED_PATH . '/footer.php'; ?>





