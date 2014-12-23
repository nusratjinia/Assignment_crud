<?php
$link = mysqli_connect("localhost", "root", "lict@2", "crud");

$query = "SELECT * FROM Student_info;";

$result = mysqli_query($link, $query);
?>
<ul>
    <li><a href="#">Download as XL</a> </li>
    <li><a href="#">Download as PDF</a> </li>
    <li><a href="create.html">Create New Record</a> </li>
</ul>
<table>
    <tr>
        <td>ID</td>
        <td>First Name</td>
        <td>Last Name</td>
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
            <td> <a href="#">Edit</a> | <a href="delete.php?Id=<?php echo $row['Id']?>">Delete</a> | <a href="view.php?Id=<?php echo $row['Id']?>">View</a></td>
        </tr>
    <?php
    }
    ?>
</table>
