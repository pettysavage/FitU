<!-- 
    This is the log in page, the user is able to type in their username and
        password. There is an option to sign up if the user does not have an
        account.
 -->


<!DOCTYPE html>
<html>
    <head>
        <style>
            table, th, h1, h3, form, p
            {
                /* border: 2px solid #000000; */
                text-align: center;
            }
            /* td
            {
                border-bottom: 1px solid #000000;
            } */
        </style>
    </head>
    <body>
        <h3>Login to FitU!</h3>
        <form action="includes/logIn.inc.php" method="POST">
        <!-- Adjust for email at later version -->
        Username:
        <input type="text" name="username" placeholder="jsmith123" required><br>

        Password:
        <input type="password" name="pwd" placeholder="********" required><br>

        <button type="submit" name="submit">Log In</button>
        </form>
        <p> Don't have an account? <a href="signUp.php">Sign up now!</a></p>
    </body>
    
</html>