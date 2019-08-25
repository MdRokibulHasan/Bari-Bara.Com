
<?php

include 'connection.php';

$id = $_GET['id'];

$result = mysqli_query($connect, "DELETE FROM user_details WHERE id=$id");

header('location: ../../tables.php');
