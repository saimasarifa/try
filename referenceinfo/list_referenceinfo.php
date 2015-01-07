<?php


$link = mysqli_connect("localhost",
    "root",
    "shimu",
    "students");

$query = "select * from reference;";

$result = mysqli_query($link, $query);


?>
<h1> reference information  list</h1>

<ul>

    <li><a href="create_referenceinfo.html">Create New </a> </li>
</ul>

<table border="1" width="100%">
    <tr>
        <td>id</td>
        <td>Name</td>
        <td>Organization</td>
        <td>address</td>
        <td>relation</td>
        <td>phone office</td>
        <td>phone home</td>
        <td>mobile</td>
        <td>email</td>


        <td>Action</td>
    </tr>

    <?php
    foreach($result as $row){
        ?>

        <tr>

            <td><?php echo $row['id']?></td>
            <td><?php echo $row['Name']?></td>
            <td><?php echo $row['organization']?></td>
            <td><?php echo $row['address']?></td>
            <td><?php echo $row['relation']?></td>
            <td><?php echo $row['phone_office']?></td>
            <td><?php echo $row['phone_home']?></td>
            <td><?php echo $row['mobile']?></td>
            <td><?php echo $row['email']?></td>


            <td>
                <a href="delete_referenceinfo.php?id=<?php echo $row['id']?>">Delete</a> |
                <a href="view_referenceinfo.php?id=<?php echo $row['id']?>">view</a> |
                <a href="edit_referenceinfo.php?id=<?php echo $row['id']?>">edit</a> |
            </td>


        </tr>

    <?php
    }
    ?>

</table>



