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
        <title>

        </title>
    </head>

    <body>
        <h3>Sign Up with FitU!</h3>

        <form action="includes/signup.inc.php" method="POST">

            First Name:
            <input type="text" name="first" placeholder="John" required><br>

            Last Name:
            <input type="text" name="last" placeholder="Smith" required><br>

            Email: 
            <input type="text" name="email" placeholder="johnSmith@123mail.com" required>
            <br>

            <!-- Date of Birth:
            <label for="birthday"></label>
            <input type="date" id="birthday" name="birthday"><br> -->

            Create username:
            <input type="text" name="userName" placeholder="jsmith123" required><br>

            Create password:
            <input type="password" name="pwd" placeholder="********" required><br>

            <button type="submit" name="submit">Submit</button>
            <input type="reset">
        </form>

    <p> Already have an account? <a href="logIn.php">Login now!</a></p>


    </body>
</html>