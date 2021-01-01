<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet.css">
    <title>Document</title>
</head>
<body>
    <h1>Match</h1>
    <div class="container">
        
        <?php
        include "./includes/db.php";
         
        $firstname = $_POST['firstname'];//dom
        $gender = $_POST['gender'];//M
        $prefgender = $_POST["prefgender"];//F

        $conn= makeConnection();
        $sql="SELECT * FROM users WHERE gender='$prefgender' AND prefgender ='$gender';";
        $result= MYSQLI_QUERY($conn,$sql);

    if($firstname != null && $gender !=null && $prefgender !=null){
        
        foreach($result ->fetch_all(MYSQLI_ASSOC) as $item){
        ?>
        <div class="profile">
            <img src="./images/avatar.jpg" atl="Profile Picture" id="profilepicture"><br>
            <?php 
            echo $item["firstname"]."<br>";
            echo $item["age"]."<br>";
            echo $item["city"]."<br>";
            ?>
            <input type="button" class="button" value="no">
            <input type="button" class="button" value="yes">
        </div>
        <?php
       
        }
    }     
    ?>
   <br>
    <?php
            include "./includes/footer.php";
        ?>
    
</body>
</html>