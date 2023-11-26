<?php
session_start();
$hash = $_SESSION['hash'];
session_abort();
$conn_string = "host=127.0.0.1 port=5432 dbname=audit user=pc_client password=qwerty connect_timeout=5";
$pg_sql = pg_connect($conn_string);
$ishashcor = pg_query($pg_sql, "SELECT id FROM accounts WHERE hash = '{$hash}'");
if (pg_num_rows($ishashcor) <= 0){
    header("Location: login.php");
}
pg_close($pg_sql)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Результат</title>
    <style>
        .inb {
            padding:10px;
            border:0;
            box-shadow:0 0 15px 4px rgba(0,0,0,0.06);
            border-radius:10px;
            font-size: 20px;
        }
        .main {
            display: block;
            margin-left: 2%;
            margin-top: 1%;
            margin-right: auto;
        }
        .text {
            text-decoration: none;
            font-stretch: condensed;
            font-family: arial;
        }
        .btn {
            padding-left: 20px;
            padding-top: 10px;
            padding-right: 20px;
            padding-bottom: 10px;

            text-align: center;
            font-size: 16px;

            border-radius: 5px;
            border: none;

            background-color: cadetblue;

            box-shadow:0 0 15px 4px rgba(0,0,0,0.06);
        }
        .btn:hover{background-color: cornflowerblue;}
        .btn:active{box-shadow:0 0 15px 4px rgba(0,0,0,0.3);}
    </style>
</head>
<body>
<div class = "main text">
    <h1>Результат</h1><br>
    <?php
    $conn_string = "host=127.0.0.1 port=5432 dbname=audit user=pc_client password=qwerty connect_timeout=5";
    $pg_sql = pg_connect($conn_string);
    $a = pg_query($pg_sql,'SELECT id FROM machines;');
    for ($i = 1; $i < pg_num_rows($a)+1; $i++) {

        $FF = pg_query($pg_sql,"SELECT * FROM machines WHERE id = '{$i}';");
        echo "<table><tr>";
        $FF1 = pg_fetch_row($FF);

        for ($i1 = 0; $i1 < 13; $i1++){
            echo "<td> . $FF1[$i1] . </td>";
        }
        echo "</tr></table>";
    }

    ?>
</div>
</body>
</html>