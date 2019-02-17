<?php

$value = "World";

$db = new PDO('mysql:host=database;dbname=mydb;charset=utf8mb4', 'myuser', 'secret');

$databaseTest = ($db->query('SELECT * FROM compteur'))->fetchAll(PDO::FETCH_OBJ);

 ?>
<html>
  <body>
    <h1>Hello, <?= $value ?>!</h1>

    <?php foreach($databaseTest as $row): ?>
            <h1>Compteur: <?= $row->cpt ?></h1>
        <?php endforeach; ?>
  </body>
</html>
<?php

$db2 = new PDO('mysql:host=database;dbname=mydb;charset=utf8mb4', 'myuser', 'secret');
$databaseTest2 = ($db2->query('UPDATE compteur SET cpt = cpt + 1'))->fetchAll(PDO::FETCH_OBJ);

 ?>
