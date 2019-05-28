<?php

$pdo = new PDO('mysql:host=localhost;dbname=upimg', 'root', '');

    if(isset($_FILES)){
        $img = $_FILES['img'];
        print_r($img);
        move_uploaded_file($img['tmp_name'], 'img' . DIRECTORY_SEPARATOR . $img['name']);
    }

$pdo->exec('INSERT INTO images (path) values("'. 'img/' . $img['name'] .'")');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post"  enctype="multipart/form-data">
        <input type="file" name="img">
        <input type="submit" value="Upload">
    </form>
</body>
</html>