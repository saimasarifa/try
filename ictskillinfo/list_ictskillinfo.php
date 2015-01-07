<?php


$link = mysqli_connect("localhost",
    "root",
    "shimu",
    "students");

$query = "select * from ict_skills;";

$result = mysqli_query($link, $query);


?>
<h1> employment  information  list</h1>

<ul>

    <li><a href="create_ictskillinfo.html">Create New </a> </li>
</ul>

<table border="1" width="100%">
    <tr>
        <td>ID</td>
        <td>experience category</td>
        <td>skill description</td>
        <td>extracurricular activities</td>

        <td>Action</td>
    </tr>

    <?php
    foreach($result as $row){
        ?>

        <tr>

            <td><?php echo $row['id']?></td>
            <td><?php echo $row['experience_category']?></td>
            <td><?php echo $row['skill_description']?></td>
            <td><?php echo $row['extracurricular_activities']?></td>

            <td>
                <a href="delete_ictskillinfo.php?id=<?php echo $row['id']?>">Delete</a> |
                <a href="view_ictskillinfo.php?id=<?php echo $row['id']?>">view</a> |
                <a href="edit_ictskillinfo.php?id=<?php echo $row['id']?>">edit</a> |
            </td>


        </tr>

    <?php
    }
    ?>

</table>



