<!-- 
    This is the background work to check that the user who entered the 
        information is in the database and that the password is correct.
 -->

<?php
    include_once 'dbh.inc.php';

    // getting the username and password input
    $userName = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['pwd']);
    $hashed_password = sha1($password);
    
    // checking to see if there are results in the database
    $sql = "SELECT userName, pwd FROM users;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            // echo $row["userName"] . "<br>";
            if (($userName == $row["userName"]) && ($row["pwd"] == $hashed_password)) {
                // echo "This is my username. <br>";
                header("Location: ../homepage.php?login=success");
            } else {
                header("Location: ../logIn.php");
            }
            //     if ($row["pwd"] == $hashed_password) {
            //         // echo "This is also my password.";
            //     } else {
            //         // echo "This is not my password";
            //         // echo $row["pwd"] . " =? " . $hashed_password;
            //     }
            // }
            // if (($userName == $row['userName']) && ($hashed_password == $row['password'])) {
            //     header("Location: ../homepage.php?login=success");
            // } else {
            //     header("Location: ../logIn.php");
            // }
        }
        
    }

    // if(isset($_POST['submit'])) {

    // } else {
    //     header("Location: ../index.php");
    //     exit();
    // }


    // $userName = $pwd = "";
    // $userName_err ="" ;
    // $pwd_err = "";
    // $login_err = "";

//     if(isset($_POST['submit'])) {

// //check for empty username
//         if($_SERVER["REQUEST_METHOD"]== "POST"){
//             if(empty(trim($_POST["userName"]))){
//                 $userName_err = "Please enter username.";
//             }
//         } else{
//             $userName = trim($_POST["userName"]);
//         }
// //check for empty password
//         if($_SERVER["REQUEST_METHOD"]== "POST"){
//             if(empty(trim($_POST["pwd"]))){
//                 $pwd_err = "Please enter password.";
//             }
//         } else{
//             $pwd = trim($_POST["userName"]);
//         }

// //validate
//         if(!empty($userName_err)&& !empty($pwd_err)){
//             $sql = "SELECT userID, userName, password FROM user WHERE userName = ? ;";
    
//             if($stmt = mysqli_prepare($conn, $sql)){
//                 mysqli_stmt_bind_param($stmt, "s", $param_userName);

//                 $param_userName = $userName;

//         //execute the prepared statement
//                 if(mysqli_stmt_execute($stmt)){
//             //store result
//                     mysqli_stmt_store_result($stmt);

//             //check if userName exists --> if yes verify pwd
//                     if(mysqli_stmt_num_rows($stmt)== 1){
                
//                 //bind variables
//                         mysqli_stmt_bind_result($stmt, $userID, $userName, $pwd);
                
//                         if(mysqli_stmt_fetch($stmt)){
//                             if(password_verify($password, $hashed_password)){
//                         // Password is correct, so start a new session
//                                 session_start();

//                          // Store data in session variables
//                                 $_SESSION["loggedin"] = true;
//                                 $_SESSION["userID"] = $id;
//                                 $_SESSION["username"] = $username;  
                         
//                             }
//                         }
//                     }
//                 }   
//             }
//         }
//     }
// Redirect user to welcome page
// header("location: ../homepage.php?login=success");

?>