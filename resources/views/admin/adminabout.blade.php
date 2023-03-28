<!DOCTYPE html> 
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admindashboard</title>

   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"> <!-- for boxicons -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel = "stylesheet" href = " {{ URL::asset('assets/css/admindashboard.css'); }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body id = "boody">
    
    <!-- side -->
    @extends('admin.menu')
    
      <!-- front end header indicator -->
      <div class = "home-section">
        <center>
          <div class="text">Welcome back! Today is <div class = "time"><span id='date'></span></div>
            </div>
        </center>
      </div>
      <br>
      <section class="service-section">
          <div class="text_permission">
          <div class="container">
 
        <div class="row g-4">
            <div class="col-lg-4 col-sm-6">
                <center>
                <div class="service card-effect bounceInUp">
                    <h5 class="mt-1 mb-2">Chirstening</h5>
                    <i style="color:#cf3c4f" class='bx bxs-shopping-bag-alt bx-lg'></i></br>
                    <a href="inventory.php" class="btn btn-danger">Click Me</a>
                </div>
                </center>
            </div>
            <div class="col-lg-4 col-sm-6">
                <center>
                <div class="service card-effect">
                    <h5 class="mt-1 mb-2">Birthday</h5>
                    <i style="color:#cf3c4f" class='bx bxs-receipt bx-lg'></i></br>
                    <a href="sales_report.php" class="btn btn-danger">Click Me</a>
                </div>
                </center>
            </div>
            <div class="col-lg-4 col-sm-6">
                <center>
                <div class="service card-effect bounceInUp">
                    <h5 class="mt-1 mb-2">Wedding</h5>
                    <i style="color:#cf3c4f" class='bx bx-laptop bx-lg'></i></br>
                    <a href="pos.php" class="btn btn-danger">Click Me</a>
                </div>
                </center>
            </div>
            <!-- for spacing -->
            <div class="col-lg-4 col-sm-6">
                <!-- <center>
                <div class="service card-effect">
                    <h5 class="mt-1 mb-2">Log out</h5>
                    <i class='bx bx-log-out bx-lg'></i></br>
                    <button class="btn btn-primary">Click Me</button>
                </div>
                </center> -->
            </div>
            <!-- for spacing -->
            <div class="col-lg-4 col-sm-6">
                <center>
                <div class="service card-effect">
                    <h5 class="mt-1 mb-2">Profile</h5>
                    <i style="color:#cf3c4f" class='bx bx-user-circle bx-lg'></i></br>
                    <a href="profile.php" class="btn btn-danger">Click Me</a>
                </div>
                </center>
            </div>
            <!-- for spacing -->
            <div class="col-lg-4 col-sm-6">
                <!-- <center>
                <div class="service card-effect">
                    <h5 class="mt-1 mb-2">Log out</h5>
                    <i class='bx bx-log-out bx-lg'></i></br>
                    <button class="btn btn-primary">Click Me</button>
                </div>
                </center> -->
            </div>
            <!-- for spacing -->
        </div>
    </div>
          </div>
 
</section>

      <script src="js/script.js"></script>
 
</body>

</html>
 