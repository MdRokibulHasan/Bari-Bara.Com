<?php

include 'connection.php';

$id = $_GET['id'];

$result = mysqli_query($connect, "DELETE FROM post_info WHERE id=$id");

header('location: ../../tables.php');
