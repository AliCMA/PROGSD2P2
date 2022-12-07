<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form.php</title>
    <link rel="stylesheet" href= <?php echo url_path("/css/style.css") ?>>
</head>
<body>
    



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
        <label for="commentaar">Commentaar</label>
        <input type="text" name="commentaar" id="commentaar" />
    </p>
    <br>
    <br>
    <br>
    <br>
    <p>
        <input type="submit" value="Verzenden" />
    </p>
    </form>




</body>
</html>