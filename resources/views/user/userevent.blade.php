<!DOCTYPE html> 
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/userevent.css">
    <title>userdashboard</title>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
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
                <span class="links_name">sidemenu</span>
            </a>
                <span class="tooltip">sidemenu</span>
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
                    <i class='bx bx-laptop' ></i>
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
     
<section class="hero-section">
  <div class="card-grid">
      <div class="card__background" style="background-image: url('birthday3.png')
     </div>
      <div class="card__content">
      <div class="card__background" style="background-image: url(assets/event1.jpg)"></div>
        <p class="card__category">Category</p>
        <h3 class="card__heading"></h3>
      </div>
    </a>
    <a class="card" href="#">
      <div class="card__background" style="background-image: url(assets/birthday3.png)"></div>
      <div class="card__content">
        <p class="card__category">Event 1</p>
        <h3 class="card__heading">HAPPY BIRTHDAY</h3>
      </div>
    </a>
    <a class="card" href="#">
      <div class="card__background" style="background-image: url(assets/wedding1.jpg)"></div>
      <div class="card__content">
        <p class="card__category">Event 2</p>
        <h3 class="card__heading">WEDDING</h3>
      </div>
    </li>
    <a class="card" href="#">
      <div class="card__background" style="background-image: url(assets/christening3.jpeg)"></div>
      <div class="card__content">
        <p class="card__category">Event 3</p>
        <h3 class="card__heading">CHRISTENING</h3>
      </div>
    </a>
    <a class="card" href="#">
      <div class="card__background" style="background-image: url(assets/debut1.jpg)"></div>
      <div class="card__content">
        <p class="card__category">Event 4</p>
        <h3 class="card__heading">DEBUT</h3>
      </div>
    </a>
  <div>
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
 