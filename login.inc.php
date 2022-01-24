<?php
    include_once 'dbh.inc.php';

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

    header("Location: ../homepage.php?login=success");


?>