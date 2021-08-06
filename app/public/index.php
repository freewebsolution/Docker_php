<?php //phpinfo()?>

<?php
$pdo = new PDO('mysql:dbname=tutorial_db;host=mysql','tutorial','secret',[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
$query = $pdo->query('SHOW VARIABLES like "version"');
$row = $query->fetch();
echo 'Mysql version: ' . $row['Value'];