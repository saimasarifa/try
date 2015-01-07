<?php

$link = mysqli_connect("localhost",
    "root",
    "shimu",
    "students");

$query = "INSERT INTO `students`.`reference`(
`Name`,
`organization`,
`address`,
`relation`,
`phone_office`,
`phone_home`,`mobile`,
`email`

)
VALUES ('".$_POST['Name']."','".$_POST['organization']."',
'".$_POST['address']."','".$_POST['relation']."','".$_POST['phone_office']."',
'".$_POST['phone_home']."','".$_POST['mobile']."','".$_POST['email']."')";



mysqli_query($link, $query);

header('location:list_referenceinfo.php');
