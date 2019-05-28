<?php

$pdo = new PDO('mysql:host=localhost;dbname=upimg', 'root', '');

$query = $pdo->query('SELECT * FROM images');

$a = $query->fetchAll();

foreach($a as $e){
    ?>
    <img src="<?= $e['path'] ?>">
    <?php
}
?>