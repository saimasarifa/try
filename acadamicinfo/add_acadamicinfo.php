<?php

$link = mysqli_connect("localhost",
    "root",
    "shimu",
    "students");

$query = "INSERT INTO `students`.`academic`(
`level_of_education`,
`exam_title`,
`group_subject`,
`institution`,
`result_type`,
`result`,
`scale`,
`passing_year`,`duration`,`achievement`

)
VALUES ('".$_POST['level_of_education']."','".$_POST['exam_title']."',
'".$_POST['group_subject']."','".$_POST['institution']."','".$_POST['result_type']."','".$_POST['result']."',
'".$_POST['scale']."','".$_POST['passing_year']."','".$_POST['duration']."','".$_POST['achievement']."')";



mysqli_query($link, $query);

header('location:list_acadamicinfo.php');
