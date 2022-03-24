<?php
    function input($data){
        $data = trim($data); // left-right space remove
        $data = stripcslashes($data); // slash remove
        $data = htmlspecialchars($data); // html character remove e.g- <b></b>, <iframe></iframe> etc.
        return $data;
    }

    $name = input($_POST['name']);
    $email = input($_POST['email']);
    $gender = input($_POST['gender']);

    echo $name."<br>"; 
    echo $email."<br>";
    echo $gender."<br>";
 ?>
