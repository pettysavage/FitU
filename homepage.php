<!-- 
    This is the hompage of the webiste after a user has logged in. 
        All of the posts are shown here and there is a button to create
        a new review. 
-->


<?php
    include_once 'includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html>
    <head>
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
                /* color: #45B0FD; */
                text-align: right;
            }
        </style>
    </head>
    <body>
        <form id="logout">
            <a href="index.php"><button type="button">Log Out</button></a>
        </form>
        

        <h2>Reviews</h2>


        <form>
        <!-- <input type="text" name="contains" placeholder="Search...">
        <a href="homepage.inc.php"><button name="search">Search</button></a> -->
            <a href="createReview.php"><button type="button" name="review">Create Review</button></a>
            
        </form>

        <br>
        

        <!-- <table id="allPosts" align="center">
            <tbody>
                <tr id="row1">
                    <th width="150px">
                        Brand
                    </th>
                    <th width="350px">
                        Review
                    </th>
                </tr>
            </tbody>
        </table> -->

        <?php
            $sql = "SELECT brand, review FROM posts;";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
                
            if ($resultCheck > 0) {
                echo "<table align='center'><tr><th width='150px'>Brand</th><th width='350px'>Review</th></tr>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr><td>" . $row["brand"] . "</td><td>" . $row["review"] . "</td></td>";
                }
                echo "</table>";
            }

        ?>

        <!-- <?php
            $sql = "SELECT brand, review FROM"
        ?> -->

        <!-- Uncomment when you have the correct databases in place (Start)-->
        <!-- <?php
            $sql = "SELECT brand, review, photo FROM posts;";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
                
            if ($resultCheck > 0) {
                echo "<table align='center'><tr><th width='150px'>Brand</th><th width='350px'>Review</th><th>Photo</th></tr>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr><td>" . $row["brand"] . "</td><td>" . $row["review"] . "</td></td>";
                }
                echo "</table>";
            }

        ?> -->
        <!-- Uncomment when you have the correct databases in place (End)-->

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