<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Este es el dashboard</h1>

    <form action="<?php echo constant('URL')?>/crear" method="post">
        <label for="">Nombre</label>
        <input type="text" name="nombre">
        <input type="submit">
    </form>
</body>
</html>