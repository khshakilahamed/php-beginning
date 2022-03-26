<?php 

echo "fileName: ";
echo $_FILES['image']['name'];
echo "<br>";
echo "File Size: ";
echo $_FILES['image']['size'];
echo "<br>";
echo "file Temp Name: ";
echo $_FILES['image']['tmp_name'];

echo "<br>";
echo "File Extension: ";
echo $extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);

echo '<br>';
// die();

// echo rand(0000, 9999999);

if($extension == 'jpg' || $extension == 'JPG' || $extension == 'PNG'){
    echo "File Directory: ";
    echo $filename = 'uploads/'.rand(0000, 9999999).$_FILES['image']['name']; //image will be uploaded in the uploads folder 
    if(file_exists($filename)){
        echo '<br> file already exists';
    }
    else{
        // move_uploaded_file($_FILES['image']['tmp_name'],$_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'], $filename);
        ?> 
            <img src="<?php echo $filename; ?>" alt=""> 
        <?php 
    }
}
else{
    echo "<br> Invalid file";
}
?>
<br>
