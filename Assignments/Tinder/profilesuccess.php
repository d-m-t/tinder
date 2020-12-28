<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet.css">
    <title>Profile Created</title>
</head>
<body>
    <div class="container">
        <h1>Success!<h1><br>
        <h4><?php
        echo $_POST["firstname"].", "."your profile has been been created"?></h4>
        <h4>Good Luck!</h4>

        <a href="match.php" class="button">Start Matching</a>
    </div>
</body>
</html>