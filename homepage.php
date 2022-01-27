<!-- 
    This is the hompage of the webiste after a user has logged in. 
        All of the posts are shown here and there is a button to create
        a new review. 
-->


<?php
    // including the database files
    include_once 'includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>FitU Homepage</title>
        <style>
            table, th
            {
                border: 2px solid #000000;
                text-align: center;
            }
            td
            {
                border-bottom: 1px solid #000000;
            }
            form, h2
            {
                text-align: center;
            }
            #logout
            {
                text-align: right;
            }
        </style>
    </head>
    <body>
        <!-- log out button -->
        <form id="logout">
            <a href="index.php"><button type="button">Log Out</button></a>
        </form>

        <h2>Reviews</h2>

        <!-- create review button -->
        <form>
            <a href="createReview.php"><button type="button" name="review">Create Review</button></a>
        </form>
        <br>
        
        <!-- The Reviews table 
                it updates each time there is a new review added/created-->

        <?php
            // getting all the review posts
            $sql = "SELECT brand, review FROM posts;";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            
            // checking if there are any reviews in the table
            if ($resultCheck > 0) {
                // table header
                echo "<table align='center'><tr><th width='150px'>Brand</th><th width='350px'>Review</th></tr>";
                while ($row = mysqli_fetch_assoc($result)) {
                    // showing the posts in table form
                    echo "<tr><td>" . $row["brand"] . "</td><td>" . $row["review"] . "</td></td>";
                }
                // end table
                echo "</table>";
            }

        ?>

        <!-- Uncomment when you have the correct databases in place v2(?) with photos added (Start)-->
        <!-- <?php
            $sql = "SELECT brand, review, photo FROM posts;";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
                
            if ($resultCheck > 0) {
                echo "<table align='center'><tr><th width='150px'>Brand</th><th width='350px'>Review</th><th>Photo</th></tr>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr><td>" . $row["brand"] . "</td><td>" . $row["review"] . "</td><td>" . $row["photo"] . "</td></td>";
                }
                echo "</table>";
            }

        ?> -->
        <!-- Uncomment when you have the correct databases in place v2(?) with photos added (End)-->

        <!-- Uncomment when you have the correct databases in place v3(?) with user who posted the review at front/end (Start)-->
        <!-- <?php
            $sql = "SELECT user, brand, review FROM posts;";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
                
            if ($resultCheck > 0) {
                echo "<table align='center'><tr><th>User</th><th width='150px'>Brand</th><th width='350px'>Review</th><th>Photo</th><th>User</th></tr>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr><td>" . $row["user"] . "</td><td>" .$row["brand"] . "</td><td>" . $row["review"] . "</td></td>";
                }
                echo "</table>";
            }

        ?> -->
        <!-- Uncomment when you have the correct databases in place v3(?) with user who posted the review at front/end (End)-->


    </body>
    
    
</html>