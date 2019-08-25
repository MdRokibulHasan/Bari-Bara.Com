<?php

include 'connection.php';

echo $id = $_POST['id']; 

echo $firstname = $_POST['feFirstName'];

echo $lastname = $_POST['feLastName'];

echo $email = $_POST['feEmailAddress'];

echo $phone = $_POST['fePhone'];

echo $address = $_POST['feInputAddress'];

echo $city = $_POST['feInputCity'];

echo $state = $_POST['feInputState'];

echo $zip_code = $_POST['inputZip'];

echo $description = $_POST['feDescription'];

echo $user_img_name = $_FILES['userimg']['name'];
echo $user_img_tmp = $_FILES['userimg']['tmp_name'];
move_uploaded_file($user_img_tmp, '../images/users/' . $user_img_name);


if ($firstname && $lastname && $email && $phone && $address && $city && $state && $zip_code && $description && $user_img_name) {
    $result = mysqli_query($connect, "UPDATE user_details SET first_name='$_POST[feFirstName]', last_name='$_POST[feLastName]', email='$_POST[feEmailAddress]', phone='$_POST[fePhone]',address='$_POST[feInputAddress]', city='$_POST[feInputCity]', state='$_POST[feInputState]', zip='$_POST[inputZip]',description='$_POST[feDescription]', user_img='$user_img_name' WHERE id='$id'");
    echo "Update Successfully";
    // header("Location: ../pages/allbooks.php");

} else {
    // header('location: ../pages/home.php?result=booksnotadd');
    echo "Something is going wrong!";
}
