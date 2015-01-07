<?php


$link = mysqli_connect("localhost",
    "root",
    "shimu",
    "students");

$query = "select * from traininginfo;";

$result = mysqli_query($link, $query);


?>
<h1> training  information  list</h1>

<ul>

    <li><a href="create_traininginfo.html">Create New training info</a> </li>
</ul>

<table border="1" width="90%">
    <tr>
        <td>ID</td>
        <td>Training Title</td>
        <td>Traning Description</td>
        <td>institute</td>
        <td>address</td>
        <td>training_year</td>
        <td>Duration in year</td>

        <td>Action</td>
    </tr>

    <?php
    foreach($result as $row){
        ?>

        <tr>

            <td><?php echo $row['id']?></td>
            <td><?php echo $row['training_title']?></td>
            <td><?php echo $row['training_description']?></td>
            <td><?php echo $row['institute']?></td>
            <td><?php echo $row['address']?></td>
            <td><?php echo $row['training_year']?></td>
            <td><?php echo $row['duration']?></td>

            <td>
                <a href="delete_traininginfo.php?id=<?php echo $row['id']?>">Delete</a> |
                <a href="view_traininginfo.php?id=<?php echo $row['id']?>">view</a> |
                <a href="edit_traininginfo.php?id=<?php echo $row['id']?>">edit</a> |
            </td>


        </tr>

    <?php
    }
    ?>

</table>



