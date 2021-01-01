<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet.css">
    <title>Find Your Match</title>
</head>
<body>
    <h1>Enter your information:</h1>
    <div class="container">
       <?php
            include "./includes/db.php";
        ?>
        <form action="findmatch.php" method="post">
            <label for="firstname">First Name:</label><br>
            <input type="text" name="firstname" id="firstname" required />
            <br><br>
            <label for="gender">Your Gender:</label> <br>
            <input type="radio" id="male" name="gender" value="M" required/>
            <label for="male">M</label> <br>
            <input type="radio" id="female" name="gender" value="F" required/>
            <label for="female">F</label><br>
            <br>
            <label for="prefgender">Prefered Gender:</label> <br>
            <input type="radio" id="male" name="prefgender" value="M" required/>
            <label for="male">M</label> <br>
            <input type="radio" id="female" name="prefgender" value="F" required/>
            <label for="female">F</label><br>
            <br>
            <input type="submit" value="Find Your Match"><br>
            
       </form>
       
    </div><br>
    <?php
            include "./includes/footer.php";
        ?>
</body>
</html>