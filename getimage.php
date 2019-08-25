<?php

include ('inc/connection.php');

$user_data = mysqli_query($connect, "SELECT * FROM user_details ORDER BY id DESC");
$user_slice = mysqli_fetch_array($user_data);
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php echo $user_slice['user_img']; ?>
    
</body>
</html>