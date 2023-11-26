<?php
    $AdmPass = filter_var(trim($_POST['AdmPass']),FILTER_SANITIZE_STRING);
    $conn_string = "host=127.0.0.1 port=5432 dbname=audit user=pc_client password=qwerty connect_timeout=5";
    $pg_sql = pg_connect($conn_string);
    echo 111;
    $res = pg_query($pg_sql, "SELECT * FROM admins WHERE password = '{$AdmPass}'");
    echo 111;
    if (pg_num_rows($res) > 0){
        echo 111;
        $login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
        $pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);

        $hash = substr(md5(substr(md5(time()), 0, 16) . $login . $pass), 0, 16);

        $f = pg_query($pg_sql, "INSERT INTO accounts (login, password, hash) VALUES ('{$login}', '{$pass}', '{$hash}')");
        echo 111;
        pg_close($pg_sql);
        header("Location: login.php");
    } else {
        var_dump($res);
        header("Location: registration.html");
    }
?>