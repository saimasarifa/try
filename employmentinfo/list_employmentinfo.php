<?php


$link = mysqli_connect("localhost",
    "root",
    "shimu",
    "students");

$query = "select * from employment;";

$result = mysqli_query($link, $query);


?>
<h1> employment  information  list</h1>

<ul>

    <li><a href="create_employmentinfo.html">Create New </a> </li>
</ul>

<table border="1" width="100%">
    <tr>
        <td>ID</td>
        <td>company name</td>
        <td>company business</td>
        <td>address</td>
        <td>designation</td>
        <td>department</td>
        <td>from</td>
        <td>to</td>
        <td>employment duration</td>
        <td>responsibility</td>

        <td>Action</td>
    </tr>

    <?php
    foreach($result as $row){
        ?>

        <tr>

            <td><?php echo $row['id']?></td>
            <td><?php echo $row['company_name']?></td>
            <td><?php echo $row['company_business']?></td>
            <td><?php echo $row['company_location']?></td>
            <td><?php echo $row['position']?></td>
            <td><?php echo $row['department']?></td>
            <td><?php echo $row['from']?></td>
            <td><?php echo $row['to']?></td>
            <td><?php echo $row['duration']?></td>
            <td><?php echo $row['responsibility']?></td>

            <td>
                <a href="delete_employmentinfo.php?id=<?php echo $row['id']?>">Delete</a> |
                <a href="view_employmentinfo.php?id=<?php echo $row['id']?>">view</a> |
                <a href="edit_employmentinfo.php?id=<?php echo $row['id']?>">edit</a> |
            </td>


        </tr>

    <?php
    }
    ?>

</table>



