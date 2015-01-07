<?php
$yearOfBirth = $_POST['year'];
$monthOfBirth = $_POST['month'];
$dateOfBirth = $_POST['day'];
$birth_day = "$yearOfBirth-$monthOfBirth-$dateOfBirth";


$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "students");

$query = "INSERT INTO `students`.`ftflbook`(
`first_name`,
`last_name`,
`email`,
`password`,
`birth_day`,
`gender`,
`hobby`,
`favourite_food`,
`comment`,
`created`,
`modified`



)
VALUES ('".$_POST['first_name']."','".$_POST['last_name']."','".$_POST['email']."'
,'".$_POST['password']."','$birth_day','".$_POST['gender']."','".$_POST['hobby']."',
'".$_POST['favourite_food']."'
,'".$_POST['comment']."','".$_POST['created']."','".$_POST['modified']."');";


mysqli_query($link, $query);

header('location:list_ftflbookinfo.php');