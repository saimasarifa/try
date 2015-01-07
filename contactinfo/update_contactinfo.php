<?php

$id = $_POST['id'];
$presentaddress = $_POST['present_address'];
//$distric =$_POST['distric'];
$mobile =$_POST['mobile'];
$emergencycontact =$_POST['emergency_contact'];
$email = $_POST['email'];



$link = mysqli_connect("localhost",
    "root",
    "shimu",
    "students");

$query = "UPDATE `students`.`contact_information` SET `present_address` = '".$presentaddress."'
,`distric` = '".$_POST['distric']."',
`mobile` = '".$mobile."',`emergency_contact` = '".$emergencycontact."',`email` = '".$email."'
 WHERE `contact_information`.`id` = $id;";

mysqli_query($link, $query);

header('location:list_contactinfo.php');
