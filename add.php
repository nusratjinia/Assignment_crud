<?php

$firstName = $_POST['firstName'];

$lastName = $_POST['lastName'];

$phone = $_POST['phone'];

$link = mysqli_connect("localhost", "root", "lict@2", "crud");



$query = "INSERT INTO `crud`.`Student_info`(`first_name`, `last_name`, `contact`)
                  VALUES ('$firstName', '$lastName', '$phone')";


mysqli_query($link, $query);

header('location:list.php');

?>