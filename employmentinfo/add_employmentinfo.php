<?php

$link = mysqli_connect("localhost",
    "root",
    "shimu",
    "students");

$query = "INSERT INTO `students`.`employment`(
`company_name`,
`company_business`,
`company_location`,
`position`,
`department`,
`from`,
`to`,
`duration`,`responsibility`

)
VALUES ('".$_POST['company_name']."','".$_POST['company_business']."',
'".$_POST['company_location']."','".$_POST['position']."','".$_POST['department']."','".$_POST['from']."',
'".$_POST['to']."','".$_POST['duration']."','".$_POST['responsibility']."')";



mysqli_query($link, $query);

header('location:list_employmentinfo.php');
