<?php 
    session_start();
    if(!isset($_SESSION['login'])){
        header("Location: 4_session_index.php");
        // echo 'hello';
    }
    echo "<h2>This is time page</h2>";
    date_default_timezone_set("Asia/Dhaka");
    echo "<h2>".date('y-m-d h:i:sa')."</h2>";
    
?>