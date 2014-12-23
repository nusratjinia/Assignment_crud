<?php

$id = $_GET['Id'];
$link = mysqli_connect("localhost", "root", "lict@2", "crud");

$query = "SELECT * FROM Student_info WHERE Id = $id";

$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);

//print_r($row);
?>
<table>

    <tr>
        <td>ID</td>
        <td>First_Name</td>
        <td>Last_Name</td>
        <td>Contact</td>
        <td>Action</td>
    </tr>
    <?php
    foreach($result as $row){
        ?>
        <tr>
            <td><?php echo $row['Id']?></td>
            <td><?php echo $row['first_name']?></td>
            <td><?php echo $row['last_name']?></td>
            <td><?php echo $row['contact']?></td>

            <td> <a href="#">Edit</a> | <a href="delete.php?Id=<?php echo $row['Id']?>">Delete</a></a></td>
        </tr>
    <?php
    }
    ?>
</table>

<a href="list.php">Go to Home</a>