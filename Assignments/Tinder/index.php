<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet.css">
    <title>Match</title>
</head>
<body>
    <img src="./images/match.jpg" id="image" alt="Match Logo" width="120px">
    <div class="container">
       <?php
            include "./includes/db.php";
        ?>
        
        <a href="createuser.php" class="button">Create Profile</a>
        <br>
         <a href="matchsignup.php" class="button">Match</a>
    </div><br>
    <?php
            include "./includes/footer.php";
        ?>
</body>
</html>