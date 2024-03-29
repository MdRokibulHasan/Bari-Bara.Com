<?php
session_start();
if (isset($_SESSION['user_email'])) {
    header('location: ../user-profile-lite.php');
};

?>

<!doctype html>
<html lang="en">

<head>
    <title>User Sign in Page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<style>
    body,
    html {
        height: 100%
    }

    .feather {
        width: 16px;
        height: 16px;
        vertical-align: text-bottom
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5
    }

    .form-signin {
        width: 100%;
        max-width: 330px;
        padding: 15px;
        margin: auto;
        text-align: center
    }

    .form-signin .checkbox {
        font-weight: 400
    }

    .form-signin .form-control {
        position: relative;
        box-sizing: border-box;
        height: auto;
        padding: 10px;
        font-size: 16px
    }

    .form-signin .form-control:focus {
        z-index: 2
    }

    .form-signin input[type=email] {
        margin-bottom: 10px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0
    }

    .form-signin input[type=password] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0
    }
</style>

<body>
    <form class="form-signin" action="../inc/usersignin.php" method="POST">
        <?php
        if (isset($_GET['result'])) {
            if ($_GET['result'] == 'somethingwrong') {
                echo '<div class="alert alert-danger">
      <strong>Something Worng ! </strong> Email Or pass do not match.</div>';
            }
        }
        ?>

        <h1 class="h3 mb-3 font-weight-normal"><b>Please sign in</b></h1>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" class="form-control" placeholder="Email address" name="email" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" class="form-control" placeholder="Password" name="pass" required>
     
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <div class="container">
        <p class="mt-5 mb-3 text-muted">Are you Admin?<a href="./index.php">Admin Signin </a></p>
            <p class="mt-5 mb-3 text-muted">Don't have account?<a href="./signup.php">Signup Here</a></p>
            <p class="mt-5 mb-3 text-muted"><a href="../landing.php">Go to home<span data-feather="arrow-right"></span></a></p>
            <p class="mt-5 mb-3 text-muted">&copy; 2019-2020</p>
        </div>
    </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <script src="../node_modules/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace()
    </script>
    <!-- / -->

</body>

</html>