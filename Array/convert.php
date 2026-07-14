<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HTML and PHP in One File</title>
</head>
<body>

    <h2>Enter Your Information</h2>
    
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <label for="username">Name:</label>
        <input type="text" id="username" name="username" required>
        <br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="user_email" required>
        <br><br>
        
        <input type="submit" value="Submit Data">
    </form>

    <hr>

    <?php
    // --- PHP PROCESSING SECTION ---
    
    // Check if the form was submitted via POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        // Fetch and sanitize the data
        $name = htmlspecialchars($_POST['username']);
        $email = htmlspecialchars($_POST['user_email']);

        // Display the fetched data right below the form
        echo "<h3>Data Received Successfully!</h3>";
        echo "<strong>Hello, </strong>" . $name . "<br>";
        echo "<strong>Your email is: </strong>" . $email;
    }
    ?>

</body>
</html>