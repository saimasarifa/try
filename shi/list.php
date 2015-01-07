<?php
// Connects to your Database

$link = mysqli_connect("localhost",
    "root",
    "shimu",
    "students");



//Retrieves data from MySQL

$query = "SELECT * FROM `image` ";

$result= mysqli_query($link, $query);
$row = mysqli_fetch_array($result);
//header("content-type :image/jpeg");


//$data = mysql_query("SELECT * FROM image") or die(mysql_error());

//Puts it into an array;
/*
while($info = mysql_fetch_array( $data )) {
//Outputs the image and other data
    echo "<img src=localhost/picture_upload/uploads/".$info['photo'] ."> <br>";
    echo "<b>Name:</b> ".$info['name'] . "<br> ";

}*/

?>
<table border="1" width="70%">
    <tr>
        <td>ID</td>
        <td>name</td>
        <td>photo</td>
        <td>Action</td>

    </tr>

    <?php

    foreach($result as $row){



        ?>

        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['myfile']?></td>

            <td>
                <a href="view1.php?id=<?php echo $row['id']?>">view</a> |
                <a href="edit.php?id=<?php echo $row['id']?>">Edit</a> |
                <a href="delete.php?id=<?php echo $row['id']?>">Delete</a> |

            </td>
        </tr>


    <?php
    }



    ?>

</table>
<a href="index.php">upload new picture</a>


