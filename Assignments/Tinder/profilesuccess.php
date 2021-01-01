<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet.css">
    <title>Profile Created</title>
</head>
<body>
    <?php
        include "./includes/db.php";

         $firstname = $_POST["firstname"];
         $age = $_POST["age"];
         $city = $_POST["city"];
         $email = $_POST["email"];
         $gender = $_POST["gender"];
         $prefgender = $_POST["prefgender"];
        
        insertData("INSERT INTO `users` (`firstname`, `age`, `city`, `email`, `gender`, `prefgender`) VALUES ('$firstname','$age','$city','$email','$gender','$prefgender');");
        ?>
            <h1>Success!</h1>
        <div class="container">  
            <?php echo $firstname.", your profile has been created <br><br>";?>
            <a href="matchsignup.php" class="button">Start Matching</a>
        </div><br>
        <?php
         include "./includes/footer.php";
        ?>
</body>
</html>