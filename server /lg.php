<?php
    $login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);

    $conn_string = "host=127.0.0.1 port=5432 dbname=audit user=pc_client password=qwerty connect_timeout=5";
    $pg_sql = pg_connect($conn_string);
    $res = pg_query($pg_sql, "SELECT hash FROM accounts WHERE login = '{$login}' AND password = '{$pass}'");

    if (pg_num_rows($res) > 0){
        $hash = pg_fetch_array($res)["hash"];
        session_start();
        $_SESSION['hash'] = $hash;
        header("Location: main.php");
    } else {
        var_dump($res);
        header("Location: login.php");
    }

?>
