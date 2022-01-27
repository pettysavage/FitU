<!-- 
    This is the sign up page. The user is asked to enter their information to 
        create an account and then they will be sent to the front page to then
        log in to the website.
 -->


 <!DOCTYPE html>
<html>
    <head>
        <title>Sign Up for FitU!</title>
        <style>
            table, th, h1, h3, form, p
            {
                text-align: center;
            }
        </style>
        
    </head>

    <body>
        <h3>Sign Up with FitU!</h3>

        <form action="includes/signup.inc.php" method="POST">
            <!-- first name input box -->
            First Name:
            <input type="text" name="first" placeholder="John" required><br>
            <!-- last name input box -->
            Last Name:
            <input type="text" name="last" placeholder="Smith" required><br>
            <!-- email inpput box -->
            Email: 
            <input type="text" name="email" placeholder="johnSmith@123mail.com" required><br>
            <!-- password input box -->
            Create username:
            <input type="text" name="userName" placeholder="jsmith123" required><br>
            <!-- password input box -->
            Create password:
            <input type="password" name="pwd" placeholder="********" required><br>

            <!-- submit button -->
            <button type="submit" name="submit">Submit</button>
            <!-- reset button -->
            <input type="reset">
        </form>
        <!-- option to go to log in page -->
        <p> Already have an account? <a href="logIn.php">Login now!</a></p>


    </body>
</html>