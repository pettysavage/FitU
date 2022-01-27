<!-- 
    This is the background work to check that the user who entered the 
        information is in the database and that the password is correct.
 -->

 <?php
    // including the database config file
    include_once 'dbh.inc.php';

    // getting the username/email and password input
    $userNameOrEmail = mysqli_real_escape_string($conn, $_POST['usernameOrEmail']);
    $password = mysqli_real_escape_string($conn, $_POST['pwd']);
    //hashing input password so that password check to database is equal
    $hashed_password = sha1($password);
    
    // checking to see if there are results in the database
    $sql = "SELECT user_email, userName, pwd FROM users;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    // checking if there are any rows in the database
    if ($resultCheck > 0) {
        // looping through the rows
        while ($row = mysqli_fetch_assoc($result)) {
            // checking if the username/email matching the password in the databases
            if ((($userNameOrEmail == $row["userName"]) && ($row["pwd"] == $hashed_password)) || (($userNameOrEmail == $row["user_email"]) && ($row["pwd"] == $hashed_password))) {
                // log in successful send to homepage
                header("Location: ../homepage.php?login=success");
            } else {
                // log in unsuccessful
                header("Location: ../logIn.php?login=fail");
                // if they dont match bring back to the logIn page
                //   need to add "Wrong password/username" message
            }
        }
        
    }

   
?>