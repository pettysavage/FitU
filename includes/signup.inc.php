<!-- 
    This is the background work too add the new user to the database.
 -->

 <?php
    // including the database config file
    include_once 'dbh.inc.php';

    // getting the input from the signup page
    $first = mysqli_real_escape_string($conn, $_POST['first']);
    $last = mysqli_real_escape_string($conn, $_POST['last']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $userName = mysqli_real_escape_string($conn, $_POST['userName']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

    // hashing the password 
    $hashed_password = sha1($pwd);

    // inserting the information into the database
    $sql = "INSERT INTO users (user_first, user_last, user_email, userName, pwd) VALUES ('$first','$last', '$email', '$userName', '$hashed_password');";
    mysqli_query($conn, $sql);
    
    // returning the back to the index page when successful
    header("Location: ../index.php?signup=success");