<?php
    include_once 'dbh.inc.php';

    $brand = mysqli_real_escape_string($conn, $_POST['brand']);
    $review = mysqli_real_escape_string($conn, $_POST['review']);
    // $email = $_POST['email'];
    // $uid = $_POST['uid'];
    // $pwd = $_POST['pwd'];

    if(isset($_POST['submit'])) {
        $dateClicked = date('Y-m-d H:i:s');
    }

    $sql = "INSERT INTO posts (brand, review, date) VALUES ('$brand','$review', '$dateClicked');";
    mysqli_query($conn, $sql);
    // $resultCheck = mysqli_num_rows($result);
            
    // if ($resultCheck > 0) {
    //     while ($row = mysqli_fetch_assoc($result)) {
    //         echo $row['user_uid'] . "<br>";
    //     }
    // }
    header("Location: ../homepage.php?post=success");
?>
