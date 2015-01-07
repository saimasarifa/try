<?php

$link = mysqli_connect("localhost",
    "root",
    "shimu",
    "students");

$query = "INSERT INTO `students`.`traininginfo`(
`training_title`,
`training_description`,
`institute`,
`address`,
`training_year`,
`duration`

)
VALUES ('".$_POST['training_title']."','".$_POST['training_description']."',
'".$_POST['institute']."','".$_POST['address']."','".$_POST['training_year']."','".$_POST['duration']."')";



mysqli_query($link, $query);

header('location:list_traininginfo.php');
