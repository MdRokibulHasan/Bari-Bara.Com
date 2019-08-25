<?php
if (isset($_GET['result'])) {
  if ($_GET['result'] == 'usersnotupdated') {
    echo '<div class="alert alert-danger" style="margin-bottom:0px;text-align:center;">
      <strong>Something Worng ! </strong> User is not added.</div>';
  }
  if ($_GET['result'] == 'updateuser') {
    echo '<div class="alert alert-success" style="margin-bottom:0px;text-align:center;">
      <strong>Sussesfully added</strong></div>';
  }
}
?>
<?php

include('inc/connection.php');

// $user_data = mysqli_query($connect, "SELECT * FROM user_details ORDER BY id DESC");
// $user_slice = mysqli_fetch_array($user_data);

// $user_data = mysqli_query($connect, "SELECT * FROM user_details WHERE id = $id");
// $user_slice = mysqli_fetch_array($user_data);



// ?>
<!Doctype html>
<html class="no-js h-100" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>User Profile</title>
  <meta name="description" content="A high-quality &amp; free Bootstrap admin dashboard template pack that comes with lots of templates and components.">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" id="main-stylesheet" data-version="1.1.0" href="styles/shards-dashboards.1.1.0.min.css">
  <link rel="stylesheet" href="styles/extras.1.1.0.min.css">
  <script async defer src="https://buttons.github.io/buttons.js"></script>
</head>

<body class="h-100">
  <!-- Main Sidebar -->
  <aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
    <div class="main-navbar">
      <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
        <a class="navbar-brand w-100 mr-0" href="#" style="line-height: 25px;">
          <div class="d-table m-auto">
            <img id="main-logo" class="d-inline-block align-top mr-1" style="max-width: 25px;" src="images/shards-dashboards-logo.svg" alt="Shards Dashboard">
            <span class="d-none d-md-inline ml-1">Update User</span>
          </div>
        </a>
        <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
          <i class="material-icons">&#xE5C4;</i>
        </a>
      </nav>
    </div>
    <form action="#" class="main-sidebar__search w-100 border-right d-sm-flex d-md-none d-lg-none">
      <div class="input-group input-group-seamless ml-3">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fas fa-search"></i>
          </div>
        </div>
        <input class="navbar-search form-control" type="text" placeholder="Search for something..." aria-label="Search">
      </div>
    </form>
    <div class="nav-wrapper">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link " href="index.html">
            <i class="material-icons">edit</i>
            <span> Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="home.php">
            <i class="material-icons">home</i>
            <span>Home</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="add-new-post.html">
            <i class="material-icons">note_add</i>
            <span>Add New Post</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="tables.php">
            <i class="material-icons">table_chart</i>
            <span>Tables</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>
  <!-- End Main Sidebar -->
  <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
    <div class="main-navbar sticky-top bg-white">
      <!-- Main Navbar -->
      <nav class="navbar align-items-stretch navbar-light flex-md-nowrap p-0">
        <form action="#" class="main-navbar__search w-100 d-none d-md-flex d-lg-flex">
          <div class="input-group input-group-seamless ml-3">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fas fa-search"></i>
              </div>
            </div>
            <input class="navbar-search form-control" type="text" placeholder="Search for something..." aria-label="Search">
          </div>
        </form>
        <ul class="navbar-nav border-left flex-row ">
          <li class="nav-item border-right dropdown notifications">
            <a class="nav-link nav-link-icon text-center" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="nav-link-icon__wrapper">
                <i class="material-icons">&#xE7F4;</i>
                <span class="badge badge-pill badge-danger">2</span>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-small" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="#">
                <div class="notification__icon-wrapper">
                  <div class="notification__icon">
                    <i class="material-icons">&#xE6E1;</i>
                  </div>
                </div>
                <div class="notification__content">
                  <span class="notification__category">Analytics</span>
                  <p>Your website’s active users count increased by
                    <span class="text-success text-semibold">28%</span> in the last week. Great job!</p>
                </div>
              </a>
              <a class="dropdown-item" href="#">
                <div class="notification__icon-wrapper">
                  <div class="notification__icon">
                    <i class="material-icons">&#xE8D1;</i>
                  </div>
                </div>
                <div class="notification__content">
                  <span class="notification__category">Sales</span>
                  <p>Last week your store’s sales count decreased by
                    <span class="text-danger text-semibold">5.52%</span>. It could have been worse!</p>
                </div>
              </a>
              <a class="dropdown-item notification__all text-center" href="#"> View all Notifications </a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-nowrap px-3" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
              <img class="user-avatar rounded-circle mr-2" src=" " alt="User Avatar">
              <span class="d-none d-md-inline-block">Sierra Brooks</span>
            </a>
            <div class="dropdown-menu dropdown-menu-small">
              <a class="dropdown-item" href="user-profile-lite.html">
                <i class="material-icons">&#xE7FD;</i> Profile</a>
              <a class="dropdown-item" href="components-blog-posts.html">
                <i class="material-icons">home</i> Home</a>
              <a class="dropdown-item" href="add-new-post.html">
                <i class="material-icons">note_add</i> Add New Post</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item text-danger" href="#">
                <i class="material-icons text-danger">&#xE879;</i> Logout </a>
            </div>
          </li>
        </ul>
        <nav class="nav">
          <a href="#" class="nav-link nav-link-icon toggle-sidebar d-md-inline d-lg-none text-center border-left" data-toggle="collapse" data-target=".header-navbar" aria-expanded="false" aria-controls="header-navbar">
            <i class="material-icons">&#xE5D2;</i>
          </a>
        </nav>
      </nav>
    </div>
    <!-- / .main-navbar -->
    <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
      <i class="fa fa-check mx-2"></i>
      <strong>Success!</strong> Your profile has been updated! </div>
    <div class="main-content-container container-fluid px-4">
      <!-- Page Header -->
      <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
          <span class="text-uppercase page-subtitle">Overview</span>
          <h3 class="page-title">User Profile</h3>
        </div>
      </div>
      <!-- End Page Header -->
      <!-- Default Light Table -->
      <?php
      $id = $_GET['id'];
            $user_data = mysqli_query($connect, "SELECT * FROM user_details WHERE id = $id");
            $user_slice = mysqli_fetch_array($user_data);
            ?>
      <div class="row">
        <div class="col-lg-4">
          <div class="card card-small mb-4 pt-3">
            <div class="card-header border-bottom text-center">
              <div class="mb-3 mx-auto">
                <img class="rounded-circle" src="./admin/images/users/<?php echo $user_slice['user_img']; ?>" alt="User Avatar" width="110"> </div>
              <h4 class="mb-0"><?php echo $user_slice['first_name'] . ' ' . $user_slice['last_name']; ?></h4>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item p-4">
                <strong class="text-muted d-block mb-2"><?php echo $user_slice['description']; ?></strong>
                <span></span>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="card card-small mb-4">
            <div class="card-header border-bottom">
              <h6 class="m-0">Account Details</h6>
            </div>
            <?php

            include('admin/inc/connection.php');

            $id = $_GET['id'];
            $user_data = mysqli_query($connect, "SELECT * FROM user_details WHERE id = $id");
            $user_slice = mysqli_fetch_array($user_data);
            ?>
            <ul class="list-group list-group-flush">
              <li class="list-group-item p-3">
                <div class="row">
                  <div class="col">
                    <form action="admin/inc/edituser.php" method="POST" enctype="multipart/form-data">
                      <input type="hidden" name="id" value="<?php echo $id = $_GET['id']; ?>">
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="feFirstName">First Name</label>
                          <input type="text" class="form-control" id="feFirstName" name="feFirstName" placeholder="First Name" value="<?php echo $user_slice['first_name']; ?>"> </div>
                        <div class="form-group col-md-6">
                          <label for="feLastName">Last Name</label>
                          <input type="text" class="form-control" id="feLastName" name="feLastName" placeholder="Last Name" value="<?php echo $user_slice['last_name']; ?>"> </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="feEmailAddress">Email</label>
                          <input type="email" class="form-control" id="feEmailAddress" name="feEmailAddress" placeholder="example@gmail.com" value="<?php echo $user_slice['email']; ?>"> </div>
                        <div class="form-group col-md-6">
                          <label for="fePhone">Phone</label>
                          <input type="text" class="form-control" id="fePhone" name="fePhone" placeholder="Phone No." value="<?php echo $user_slice['phone']; ?>"> </div>
                      </div>
                      <div class="form-group">
                        <label for="feInputAddress">Address</label>
                        <input type="text" class="form-control" id="feInputAddress" name="feInputAddress" placeholder="" value="<?php echo $user_slice['address']; ?>"> </div>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="feInputCity">City</label>
                          <input type="text" class="form-control" id="feInputCity" name="feInputCity" value="<?php echo $user_slice['city']; ?>"> </div>
                        <div class="form-group col-md-4">
                          <label for="feInputState">State</label>
                          <input type="text" class="form-control" id="feInputState" name="feInputState" value="<?php echo $user_slice['state']; ?>"> </div>
                        <div class="form-group col-md-2">
                          <label for="inputZip">Zip</label>
                          <input type="text" class="form-control" id="inputZip" name="inputZip" value="<?php echo $user_slice['zip']; ?>"> </div>
                        <div class="form-group">
                          <input type="file" name="userimg" class="form-control-file mb-1">
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-12">
                          <label for="feDescription">Description</label>
                          <textarea class="form-control" name="feDescription" rows="5">
                                <?php echo $user_slice['description']; ?>
                                </textarea>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-accent">Update User</button>
                    </form>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- End Default Light Table -->
    </div>
    <footer class="main-footer d-flex p-2 px-3 bg-white border-top">
    </footer>
  </main>
  </div>
  </div>
  <!-- <div class="promo-popup animated">
      <a href="http://bit.ly/shards-dashboard-pro" class="pp-cta extra-action">
        <img src="https://dgc2qnsehk7ta.cloudfront.net/uploads/sd-blog-promo-2.jpg"> </a>
      <div class="pp-intro-bar"> Need More Templates?
        <span class="close">
          <i class="material-icons">close</i>
        </span>
        <span class="up">
          <i class="material-icons">keyboard_arrow_up</i>
        </span>
      </div>
      <div class="pp-inner-content">
        <h2>Shards Dashboard Pro</h2>
        <p>A premium & modern Bootstrap 4 admin dashboard template pack.</p>
        <a class="pp-cta extra-action" href="http://bit.ly/shards-dashboard-pro">Download</a>
      </div>
    </div> -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
  <script src="https://unpkg.com/shards-ui@latest/dist/js/shards.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Sharrre/2.0.1/jquery.sharrre.min.js"></script>
  <script src="scripts/extras.1.1.0.min.js"></script>
  <script src="scripts/shards-dashboards.1.1.0.min.js"></script>
</body>

</html>