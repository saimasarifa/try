<?php
//$birth_day = $yearOfBirth.'-'.$monthOfBirth.'-'.$dateOfBirth;

$link = mysqli_connect("localhost",
    "root",
    "shimu",
    "students");

$query = "select * from ftflbook;";

$result = mysqli_query($link, $query);


?>

<ul>

    <li><a href="create_ftflbookinfo.html">Create New ftflbook information</a> </li>

</ul>

<table border="1" width="80%">
    <tr>
        <td>ID</td>
        <td>First Names</td>
        <td>Last Name</td>
        <td>Email</td>
        <td>Password</td>
        <td>date of birth</td>
        <td>Gender</td>
        <td>favourite_food</td>
        <td>Comment</td>
        <td>created</td>
        <td>modified</td>
        <td>Action</td>

    </tr>
    <h1> ftflbook information  form</h1>

    <?php
    foreach($result as $row){
        ?>

        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['first_name']?></td>
            <td><?php echo $row['last_name']?></td>
            <td><?php echo $row['email']?></td>
            <td><?php echo $row['password']?></td>
            <td><?php echo $row['birth_day']?></td>
            <td><?php echo $row['gender']?></td>
            <td><?php echo $row['favourite_food']?></td>
            <td><?php echo $row['comment']?></td>
            <td><?php echo $row['created']?></td>
            <td><?php echo $row['modified']?></td>

            <td>
                <a href="view_ftflbookinfo.php?id=<?php echo $row['id']?>">View/Show</a> |

                <a href="edit_ftflbookinfo.php?id=<?php echo $row['id']?>">Edit</a> |

                <a href="delete_ftflbookinfo.php?id=<?php echo $row['id']?>">Delete</a> |


            </td>
        </tr>

    <?php
    }
    ?>

</table>



