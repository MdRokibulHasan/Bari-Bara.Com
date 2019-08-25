<?php

include './inc/connection.php';



$title = $_POST['title'];
$detail = $_POST['details'];
$loc = $_POST['location'];
$cat = $_POST['rent_type'];
$rent = $_POST['rent'];
$img = $_FILES['userimg']['name'];
$user_img_tmp = $_FILES['userimg']['tmp_name'];
move_uploaded_file($user_img_tmp, './images/post/' . $img);

$runsql = mysqli_query($connect,"insert into post_info(title,details,location,category,rent,image) values('$title','$detail','$loc','$cat','$rent','$img')");

echo "Post Successfully Inserted";
header('location: ./user-home.php');

?>