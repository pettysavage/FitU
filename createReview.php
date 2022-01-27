<!-- This page is where the user is able to type in text boxes the name of the brand
    and the review that they would like to add with that brand. -->

    <!DOCTYPE html>
<html>
    <head>
        <title>Create a Review</title>
        <style>
            form, h3
            {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <h3>Tell us your thoughts:</h3>
        <form action="includes/post.inc.php" method="POST">
            <!-- brand input box -->
            Brand:
            <input type="text" name="brand" placeholder="Levi, Lucky Brand, etc." required><br>
            <!-- Review text box -->
            Review: <br>
            <textarea name="review" rows="5" cols="40" placeholder="Type your review here." required></textarea>
            <br>
            <!-- submit button -->
            <button type="submit" name="submit">Submit</button>
            <!-- reset button -->
            <input type="reset">
        </form>
    </body>
    
</html>