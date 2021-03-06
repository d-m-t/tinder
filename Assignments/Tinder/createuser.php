<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet.css">
    <title>Create Profile</title>
</head>
<body>
    <h1>Create Profile</h1>
    <div class="container">
        <form action="profilesuccess.php" method="post">
            <label for="firstname">First Name:</label><br>
            <input type="text" name="firstname" id="firstname" required />
            <br>
            <label for="age">Age:</label> <br>
            <input type="number" name="age" id="age" min="18" required/>
            <br>
            <label for="city">City:</label><br>
            <input type="text" name="city" id="city" required />
            <br>
            <label for="email">Email:</label> <br>
            <input type="text" name="email" id="email" required/>
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
            <input type="submit" value="Create Profile">
        </form>
    </div><br>
        <?php
            include "./includes/footer.php";
        ?>
</body>
</html>