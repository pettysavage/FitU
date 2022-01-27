<!-- 
    This is the background work to insert the post that was created
        into the database.
 -->

 <?php
    // including the database config file
    include_once 'dbh.inc.php';

    // getting the review and brand input
    $brand = mysqli_real_escape_string($conn, $_POST['brand']);
    $review = mysqli_real_escape_string($conn, $_POST['review']);

    // getting the time stamp that the post was made
    if(isset($_POST['submit'])) {
        $dateClicked = date('Y-m-d H:i:s');
    }

    // checking if the review boxes are empty or filled with space character/blank space
    if (((ctype_space($brand)) || (ctype_space($review))) ||(($brand == "") && ($review == ""))) {
        // returning to homepage without adding blank review to database
        header("Location: ../homepage.php");
    } else {
        // adding review to the database
        $sql = "INSERT INTO posts (brand, review, date) VALUES ('$brand','$review', '$dateClicked');";
        mysqli_query($conn, $sql);
    }
    // returning to the hompage with the new post added
    header("Location: ../homepage.php?post=success");
?>