<!-- 
    This is the background work to check that the user who entered the 
        information is in the database and that the password is correct.
 -->

<?php
    include_once 'dbh.inc.php';

    $userName = $pwd = "";
    $userName_err ="" ;
    $pwd_err = "";
    $login_err = "";
//check for empty username
    if($_SERVER["REQUEST_METHOD"]== "POST"){
        if(empty(trim($_POST["userName"]))){
            $userName_err = "Please enter username.";
        }
    } else{
        $userName = trim($_POST["userName"]);
    }
//check for empty password
if($_SERVER["REQUEST_METHOD"]== "POST"){
    if(empty(trim($_POST["pwd"]))){
        $pwd_err = "Please enter password.";
    }
} else{
    $pwd = trim($_POST["userName"]);
}

//validate
if(!empty($userName_err)&& !empty($pwd_err)){
    $sql = "SELECT userID, userName, password FROM user WHERE userName = ? ;";
    
    if($stmt = mysqli_prepare($conn, $sql)){
        mysqli_stmt_bind_param($stmt, "s", $param_userName);

        $param_userName = $userName;

        //execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            //store result
            mysqli_stmt_store_result($stmt);

            //check if userName exists --> if yes verify pwd
            if(mysqli_stmt_num_rows($stmt)== 1){
                
                //bind variables
                mysqli_stmt_bind_result($stmt, $userID, $userName, $pwd);
                
                if(mysqli_stmt_fetch($stmt)){
                    if(password_verify($password, $hashed_password)){
                        // Password is correct, so start a new session
                        session_start();

                         // Store data in session variables
                         $_SESSION["loggedin"] = true;
                         $_SESSION["userID"] = $id;
                         $_SESSION["username"] = $username;  
                         
                    }
                }
            }
        }   
    }
}
// Redirect user to welcome page
header("location: ../homepage.php?login=success");

?>