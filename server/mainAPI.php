<?php


$comp_name = filter_var(trim($_POST['comp_name']),FILTER_SANITIZE_STRING);
$os_name = filter_var(trim($_POST['os_name']),FILTER_SANITIZE_STRING);
$version = filter_var(trim($_POST['version']),FILTER_SANITIZE_STRING);
$machine = filter_var(trim($_POST['machine']),FILTER_SANITIZE_STRING);
$name = filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
$phisycal_core = filter_var(trim($_POST['phisycal_core']),FILTER_SANITIZE_STRING);
$all_core = filter_var(trim($_POST['all_core']),FILTER_SANITIZE_STRING);
$freq_max = filter_var(trim($_POST['freq_max']),FILTER_SANITIZE_STRING);
$volume = filter_var(trim($_POST['volume']),FILTER_SANITIZE_STRING);
$avaiable = filter_var(trim($_POST['avaiable']),FILTER_SANITIZE_STRING);
$used = filter_var(trim($_POST['used']),FILTER_SANITIZE_STRING);
$filled = filter_var(trim($_POST['filled']),FILTER_SANITIZE_STRING);
$more_info = filter_var(trim($_POST['more_info']),FILTER_SANITIZE_STRING);

echo 111;

echo $comp_name . ", ";

echo $os_name. ", ";

echo $version. ", ";

echo $machine. ", ";
echo $name. ", ";
echo $phisycal_core. ", ";
echo $all_core. ", ";

echo $freq_max. ", ";

echo $volume. ", ";

echo $avaiable. ", ";

echo $used. ", ";

echo $filled;echo "<br>";

$conn_string = "host=127.0.0.1 port=5432 dbname=audit user=pc_client password=qwerty connect_timeout=5";
$pg_sql = pg_connect($conn_string);
$res = pg_query($pg_sql, "INSERT INTO machines (pc_name, os_name,version,fullname,proccessor_name,phisycal_core,all_core,freq_max,volume,aviable, used, filled, allinfo) VALUES ('{$comp_name}', '{$os_name}', '{$version}', '{$machine}', '{$name}', '{$phisycal_core}', '{$all_core}', '{$freq_max}', '{$volume}', '{$avaiable}', '{$used}', '{$filled}', '{$more_info}');");
pg_close($pg_sql)
?>