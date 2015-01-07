
<?php
$target ='uploads/';
$target = $target . basename( $_FILES['myfile']['name']);


$ID = $_POST['id'];
$name=  $_POST['name'];
$photo = ($_FILES['myfile']['name']);

$link = mysqli_connect("localhost",
    "root",
    "shimu",
    "students");

$query = "UPDATE `students`.`image` SET `name` = '".$name."',`myfile` = '".$photo."'

       WHERE `image`.`id` =$ID;";

mysqli_query($link, $query);
header("content-type :myfile/jpeg");
//echo $query;


if(move_uploaded_file($_FILES['myfile']['tmp_name'], $target))
{

    //Tells you if its all ok
    echo "The file ". basename( $_FILES['uploadedfile']['name']). "all uploaded";
}
else {

    //Gives and error if its not
    //echo "Sorry, there was a problem uploading your file.";
}

header('location:list.php');

?>