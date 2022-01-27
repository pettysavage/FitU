<!-- 
    This is the log in page, the user is able to type in their username and
        password. There is an option to sign up if the user does not have an
        account.
 -->


 <!DOCTYPE html>
<html>
    <head>
        <title>Log In to FitU!</title>
        <style>
            table, th, h1, h3, form, p
            {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <h3>Login to FitU!</h3>
        <form action="includes/logIn.inc.php" method="POST">
            <!-- username/email input box -->
            Username or Email:
            <input type="text" name="usernameOrEmail" placeholder="jsmith123" required><br>
            <!-- password input box -->
            Password:
            <input type="password" name="pwd" placeholder="********" required><br>
            <!-- submit button -->
            <button type="submit" name="submit">Log In</button>
        </form>
        <!-- option to go to sign up page -->
        <p> Don't have an account? <a href="signUp.php">Sign up now!</a></p>

    
    </body>
    
</html>