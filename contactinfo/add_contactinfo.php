<?php


$link = mysqli_connect("localhost",
    "root",
    "shimu",
    "students");

$query = "INSERT INTO `students`.`contact_information`( `id`,
`present_address`,
`distric`,
`mobile`,
`emergency_contact`,
`email`

)
VALUES ('".$_POST['id']."','".$_POST['present_address']."','".$_POST['distric']."','".$_POST['mobile']."'
,'".$_POST['emergencycontact']."','".$_POST['email']."');";

mysqli_query($link, $query);

header('location:list_contactinfo.php');