<?php

$ID= $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "shimu",
    "students");



//Retrieves data from MySQL

$query = "SELECT * FROM `image` WHERE `image` . `id`=$ID ";

$result= mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
header("content-type :myfile/jpeg");



//$data = mysql_query("SELECT * FROM image") or die(mysql_error());

//Puts it into an array
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

    </tr>

    <?php

    foreach($result as $row){



        ?>

        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['name']?></td>
            <td><?php header("Content-type: myfile/jpeg") echo $row['myfile']?></td>

            <td>
                <a href="view.php?ID=<?php echo $row['ID']?>">View</a> |
                <a href="edit.php?ID=<?php echo $row['ID']?>">Edit</a> |

                <a href="delete.php?ID=<?php echo $row['ID']?>">Delete</a> |

            </td>
        </tr>


    <?php
    }



    ?>

</table>


<a href="list.php">GO Back</a>