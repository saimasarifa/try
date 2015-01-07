<?php
//$yearOfBirth = $_POST['year'];
//$monthOfBirth = $_POST['month'];
//$dateOfBirth = $_POST['day'];
//$birth_day = "$yearOfBirth-$monthOfBirth-$dateOfBirth";
$day=$_POST['day'];
$month=$_POST['month'];
$year=$_POST['year'];


$dob = $year.'-'.$month.'-'.$day;

//echo $dob;


$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$favourite_food = $_POST['favourite_food'];
$comment = $_POST['comment'];
$created =  $_POST['created'];
$modified = $_POST['modified'];



$link = mysqli_connect("localhost",
    "root",
    "shimu",
    "students");

$query = "INSERT INTO `students`.`ftflbook`(
`first_name`,
`last_name`,
`email`,
`password`,
`birth_day`,
`gender`,
`favourite_food`,
`comment`,
`created`,
`modified`


)
VALUES ('".$first_name."', '".$last_name."', '".$email."', '".$password."', '".$dob."', '".$gender."',
'".$favourite_food."',
 '".$comment."','".$created."','".$modified."')";



mysqli_query($link, $query);
//var_dump($query);
header('location:list_ftflbookinfo.php');