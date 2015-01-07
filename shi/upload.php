<?php
//This is the directory where images will be saved

$target = "uploads/";
$target = $target . basename( $_FILES['myfile']['name']);

//This gets all the other information from the form
$name=$_POST['name'];
//$fileTmpLoc = $_FILES["photo"]["tmp_name"];
$photo=($_FILES['myfile']['name']);
//$image = addslashes(file_get_contents($_FILES['photo']['tmp_name']));

// Connects to your Database

$link = mysqli_connect("localhost",
    "root",
    "shimu",
    "students");


//Writes the information to the database

$query = "INSERT INTO `students`.`image` (
`id` ,

`name` ,
`myfile`

)
VALUES (
'', '$name', '$photo');";

mysqli_query($link, $query);


//mysql_query("INSERT INTO `image` VALUES ('$name', '$email', '$phone', '$pic')") ;

//Writes the photo to the server

//move_uploaded_file( $fileTmpLoc,"uploads/$photo");

if(move_uploaded_file($_FILES['myfile']['tmp_name'], $target))
{

    //Tells you if its all ok
    echo "The file ". basename( $_FILES['uploadedfile']['name']). " has been uploaded, and your information has been added to the directory";
}
else {

    //Gives and error if its not
    //echo "Sorry, there was a problem uploading your file.";
}
header('location:list.php');
?>