<!DOCTYPE html> 
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>userdashboard</title>

   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"> <!-- for boxicons -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel = "stylesheet" href = " {{ URL::asset('assets/css/userdashboard.css'); }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body id = "boody">
    <div class="sidebar" style = "padding-left: 0;">
        <div class="logo-details">
            <i class='bx bxl-heart-square icon'></i>
            <div class="logo_name"><br><br><br>
            <img src="assets/picxellence.png" alt="ADMIN" width="100" height="100">
                <a href = "/" style = "text-decoration: none; color: #fff;">Picxellence</a>
            </div>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <br><br><br>
        <ul class="nav-list" style = "padding-left: 15px;">
          <!-- <li>
              <i class='bx bx-search' ></i>
             <input type="text" placeholder="Search...">
             <span class="tooltip">Search</span>
          </li> -->
            <li>
            <a href="userdashboard">
                <i class='bx bx-grid-alt'></i>
                <span class="links_name">Dashboard</span>
            </a>
                <span class="tooltip">Dashboard</span>
            </li>
            <li>
            <a href="userreservation">
                <i class='bx bxs-shopping-bag-alt'></i>

                <span class="links_name">Reservation</span>
            </a>
            <span class="tooltip">Reservation</span>
            </li>
            <li>
            <a href="userprofile">
                <i class='bx bx-user-circle' ></i>
                <span class="links_name">User Profile</span>
            </a>
            <span class="tooltip">User Profile</span>
            </li>
            <li>
                <a href="userabout">
                    <i class='bx bx-receipt' ></i>
                    <span class="links_name">About</span>
                </a>
                <span class="tooltip">About</span>
            </li>
            <li>
                <a href="userevent">
                    <i class='bx bx-calendar' ></i>
                    <span class="links_name">Event</span>
                </a>
                <span class="tooltip">Event</span>
            </li>
            <a href = "/">
                <li class="profile">
                    <!-- <div class="profile-details">
                    <img src="profile.jpg" alt="profileImg">
                    <div class="name_email">
                        <div class="name">User One</div>
                        <div class="email">userone@email.com</div>
                    </div>
                    </div> -->
                    <div class = "text_logout">Log-Out</div>
                    <i class='bx bx-log-out' id="log_out" ></i>
                </li>
            </a>
        </ul>
      </div>
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
                    <h5 class="mt-1 mb-2">Birthday</h5>
                    <i style="color:#cf3c4f" class='bx bxs-shopping-bag-alt bx-lg'></i></br>
                    <a href="inventory.php" class="btn btn-danger">Click Me</a>
                </div>
                </center>
            </div>
            <div class="col-lg-4 col-sm-6">
                <center>
                <div class="service card-effect">
                    <h5 class="mt-1 mb-2">Christening </h5>
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
                    <a href="userlogin" class="btn btn-danger">Click Me</a>
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
 <script>
    
let sidebar = document.querySelector(".sidebar");
let closeBtn = document.querySelector("#btn");
let searchBtn = document.querySelector(".bx-search");
 
 
closeBtn.addEventListener("click", ()=>{
  sidebar.classList.toggle("open");
  menuBtnChange();//calling the function(optional)
});
 
searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
  sidebar.classList.toggle("open");
  menuBtnChange(); //calling the function(optional)
});

// following are the code to change sidebar button(optional)
function menuBtnChange() {
 if(sidebar.classList.contains("open")){
   closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
 }else {
   closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
 }
}
</script>
 
</body>

</html>
 