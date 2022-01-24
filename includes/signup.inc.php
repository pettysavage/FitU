<!-- 
    This is the background work too add the new user to the database.
 -->

<?php
    include_once 'dbh.inc.php';

    $first = mysqli_real_escape_string($conn, $_POST['first']);
    $last = mysqli_real_escape_string($conn, $_POST['last']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $userName = mysqli_real_escape_string($conn, $_POST['userName']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

    $hashed_password = sha1($pwd);

    // if(isset($_POST['submit'])) {
    //     if (empty($_POST["first"])) {
    //         $nameErr = "First name is required";
    //       } else {
    //         $first = mysqli_real_escape_string($conn, $_POST['first']);
    //     }
        
    //     if (empty($_POST["last"])) {
    //         $nameErr = "Last name is required";
    //       } else {
    //         $last = mysqli_real_escape_string($conn, $_POST['last']);;
    //     }

    //     if (empty($_POST["email"])) {
    //         $nameErr = "Email is required";
    //       } else {
    //         $email = mysqli_real_escape_string($conn, $_POST['email']);
    //     }

    //     if (empty($_POST["uid"])) {
    //         $nameErr = "Username is required";
    //       } else {
    //         $uid = mysqli_real_escape_string($conn, $_POST['uid']);
    //     }

    //     if (empty($_POST["pwd"])) {
    //         $nameErr = "Password is required";
    //       } else {
    //         $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
    //     }
    // }

    

    $sql = "INSERT INTO users (user_first, user_last, user_email, userName, password) VALUES ('$first','$last', '$email', '$userName', '$hashed_password');";
    mysqli_query($conn, $sql);
    // $resultCheck = mysqli_num_rows($result);
            
    // if ($resultCheck > 0) {
    //     while ($row = mysqli_fetch_assoc($result)) {
    //         echo $row['user_uid'] . "<br>";
    //     }
    // }
    header("Location: ../index.php?signup=success");