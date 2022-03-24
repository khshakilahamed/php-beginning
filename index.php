<?php
    if($_SERVER["REQUEST_METHOD"]=='POST'){
        echo $_POST['name']."<br>"; 
        echo $_POST['email']."<br>";
        echo $_POST['gender']."<br>";
        echo $_POST['gender2']."<br>";
    }
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="dataCheck.php" method="post">
        Name: <input type="text" name="name" /> <br> <br>
        Email: <input type="text" name="email" /> <br> <br>
        <!-- <select name="gender" id="">
            <option value="">Select Gender</option>
            <option value="male">Male</option>
            <option value="Female">Female</option>
        </select>
        <br> <br> -->
        Gender: <br>
        <input type="radio" name="gender" value="male" id=""> Male <br>
        <input type="radio" name="gender" value="female"> Female <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>