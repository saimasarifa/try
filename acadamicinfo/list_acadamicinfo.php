<?php


$link = mysqli_connect("localhost",
    "root",
    "shimu",
    "students");

$query = "select * from academic;";

$result = mysqli_query($link, $query);


?>
<h1> Acadamic  information  list</h1>

<ul>

       <li><a href="create_acadamicinfo.html">Create New academic</a> </li>
</ul>

<table border="1" width="90%">
    <tr>
        <td>ID</td>
        <td>level of education</td>
        <td>exam title</td>
        <td>group/subject</td>
        <td>institution</td>
        <td>result type</td>
        <td>result</td>
        <td>scale</td>
        <td>passing year</td>
        <td>duration</td>
        <td>achievement</td>
        <td>Action</td>
    </tr>

    <?php
    foreach($result as $row){
        ?>

       <tr>

        <td><?php echo $row['id']?></td>
        <td><?php echo $row['level_of_education']?></td>
        <td><?php echo $row['exam_title']?></td>
        <td><?php echo $row['group_subject']?></td>
        <td><?php echo $row['institution']?></td>
        <td><?php echo $row['result_type']?></td>
        <td><?php echo $row['result']?></td>
        <td><?php echo $row['scale']?></td>
        <td><?php echo $row['passing_year']?></td>
        <td><?php echo $row['duration']?></td>
        <td><?php echo $row['achievement']?></td>

           <td>
               <a href="delete_acadamicinfo.php?id=<?php echo $row['id']?>">Delete</a> |
               <a href="view_acadamicinfo.php?id=<?php echo $row['id']?>">view</a> |
               <a href="edit_acadamicinfo.php?id=<?php echo $row['id']?>">edit</a> |
           </td>


        </tr>

    <?php
    }
    ?>

</table>



