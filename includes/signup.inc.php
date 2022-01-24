<?php
    include_once 'dbh.inc.php';

    $first = mysqli_real_escape_string($conn, $_POST['first']);
    $last = mysqli_real_escape_string($conn, $_POST['last']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $uid = mysqli_real_escape_string($conn, $_POST['uid']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

    // if(isset($_POST['submit'])) {
    //     $dateClicked = date('Y-m-d H:i:s');
    // }

    $sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES ('$first','$last', '$email', '$uid', '$pwd');";
    mysqli_query($conn, $sql);
    // $resultCheck = mysqli_num_rows($result);
            
    // if ($resultCheck > 0) {
    //     while ($row = mysqli_fetch_assoc($result)) {
    //         echo $row['user_uid'] . "<br>";
    //     }
    // }
    header("Location: ../index.php?signup=success");
