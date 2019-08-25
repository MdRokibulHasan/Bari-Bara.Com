<?php

include ('connection.php');

$firstname = $_POST['feFirstName'];

$lastname = $_POST['feLastName'];

$email = $_POST['feEmailAddress'];

$phone = $_POST['fePhone'];

$address = $_POST['feInputAddress'];

$city = $_POST['feInputCity'];

$state = $_POST['feInputState'];

$zip_code = $_POST['inputZip'];

$description = $_POST['feDescription'];

$user_img_name = $_FILES['userimg']['name'];
$user_img_tmp = $_FILES['userimg']['tmp_name'];
move_uploaded_file($user_img_tmp, '../images/users/' . $user_img_name);

if ($firstname && $lastname && $email && $phone && $address && $city && $state && $zip_code && $description && $user_img_name) {
    $upostinsert =  mysqli_query($connect, "INSERT INTO user_details(first_name,last_name,email,phone,address,city,state,zip,description,user_img) VALUES('$firstname','$lastname','$email','$phone','$address','$city','$state','$zip_code','$description','$user_img_name')");
    // header('location: ../pages/home.php?result=addbooks');
    echo "Successfully user add";

}else{
    // header('location: ../pages/home.php?result=booksnotadd');
    echo "Something is going wrong!";
}

