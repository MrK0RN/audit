<?php
session_start();
$hash = $_SESSION['hash'];
session_abort();
$conn_string = "host=127.0.0.1 port=5432 dbname=audit user=pc_client password=qwerty connect_timeout=5";
$pg_sql = pg_connect($conn_string);
$ishashcor = pg_query($pg_sql, "SELECT id FROM accounts WHERE hash = '{$hash}'");
if (pg_num_rows($ishashcor) > 0){
  header("Location: main.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Логин</title>
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
        <h1>Вход</h1><br>
        <form action="lg.php" method="post">
            <input class="inb" name = "login" placeholder="Введите логин">
            <br><br>
            <input type="password" name = "pass" class="inb" placeholder="Введите пароль">
            <br><br>
            <button class = "btn">Войти</button>
        </form>
    </div>
</body>
</html>