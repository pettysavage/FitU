<?php
    include_once 'dbh.inc.php';

    $lookFor = mysqli_real_escape_string($conn, $_POST['contains']);

    if(isset($_POST['search'])) {
        $contains = $lookFor;
    }

    $sql = "SELECT brand,review FROM posts;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
                
    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['brand'] . ": " . "<br>";
            
        }
    }

    header("Location: ../homepage.php");

?>