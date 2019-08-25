<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="style.css" media="all"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!-- <link rel="stylesheet" href="style.css"> -->
    <title>Bari Bara.COM</title>
  </head>
  <body>
    <!-- Navbar start -->
    <header> <h1 class="h">Welcome <br>Bari Bara.Com</h1>
        <img src="img/tolet.jpg" alt="" class="logo"/>
        <div class ="menu">
        <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Rent/To-Let</a></li>
            <li><a href="./pages/signin.php">Sign In</a></li>
             </ul>
            </nav>
    </div>
    </header>
    <!-- Navbar end -->

    <div class="toletview container my-4">
           
      <?php

      include './inc/connection.php';
      
      $post = mysqli_query($connect, "select * from post_info");
      
      
      while($row = mysqli_fetch_assoc($post)):
            
      
      
      ?>
                <div class="card m-4" style="width: 14rem; display: inline-block;">
                <img class="card-img-top" src="./images/post/<?php echo $row['image']; ?>" />
                  <div class="card-body" style="text-align: center;">
                    <h5 class="card-title"><?php echo $row['title']; ?></h5>
                    <p class="card-text"><?php echo $row['details']; ?></p>
                    <b><?php echo $row['rent']."Taka"; ?></b>
                  </div>
                </div>
      
      <?php endwhile;?>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>