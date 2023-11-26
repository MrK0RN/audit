<?php
//ini_set('display_errors', 1);
echo 141;


$conn_string = "host=127.0.0.1 port=5432 dbname=audit user=pc_client password=qwerty connect_timeout=5";
$pg_sql = pg_connect($conn_string)
or die('Could not connect: ' . pg_last_error());
echo $pg_sql;

$result = pg_query($pg_sql, "CREATE TABLE `audit`.`admins` (`id` INT NOT NULL AUTO_INCREMENT , `login` INT NOT NULL , `password` INT NOT NULL , PRIMARY KEY (`id`));");

var_dump(pg_fetch_all($result));
pg_close($pg_sql);



?>