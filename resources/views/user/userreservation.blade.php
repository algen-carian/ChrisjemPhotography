<!DOCTYPE html> 
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/userreservation.css">
    <title>userdashboard</title>

   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"> <!-- for boxicons -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel = "stylesheet" href = " {{ URL::asset('assets/css/userdashboard.css'); }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body id = "boody" style="background-image: url('../event2.jpg')">
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
            <a href="profile.php">
                <i class='bx bx-user-circle' ></i>
                <span class="links_name">User Profile</span>
            </a>
            <span class="tooltip">User Profile</span>
            </li>
            <li>
                <a href="sales_report.php">
                    <i class='bx bx-receipt' ></i>
                    <span class="links_name">About</span>
                </a>
                <span class="tooltip">About</span>
            </li>
            <li>
                <a href="pos.php">
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
      <center>
      <div class = "bakground"> 
        <!-- <div class="header-title text-center m-5 mt-5"> -->
            <br><br>
        <h2 class>RESERVATION</h2>
        <p>RESERVATION
        Please fill out this form with your desired dates and we will get back to you asap.</p>


        <div class="container">
            <form action="">
            <div class="form-row">

            <div class="row align-items-center">
                <div class="col">

                    <div class="form-group col-md-6">
                    <label for="name">Name*</label>
                    <input type="text" class="form-control shadow" id="name" required>     
                    </div>

                    <div class="form-group col-md-6 mt-4">
                        <label for="email">Email*</label>
                        <input type="email" class="form-control shadow" id="email" required>     
                    </div>

                    <div class="form-group col-md-6 mt-4">
                        <label for="Address">Address*</label>
                        <input type="text" class="form-control shadow" id="country" required>     
                    </div>

                    <div class="form-group col-md-6 mt-4">
                        <label for="contact">Contact Number*</label>
                        <input type="text" class="form-control shadow" id="contact">     
                    </div>

                </div>
                <div class="col">
                    <div class="form-group col-md-6 mt-4">
                        <label for="alternate">Alternative Number</label>
                        <input type="text" class="form-control shadow" id="alternate">     
                    </div>

                    <div class="form-group col-md-6 mt-4">
                    <label for="arrival">Date of registration</label>
                    <input type="date" class="form-control shadow" id="arrival" required>     
                    </div>

                    <div class="form-group col-md-6 mt-4">
                    <label for="departure">Date of Event</label>
                    <input type="date" class="form-control shadow" id="departure" required>     
                    </div>

                    <form action="*">
                    <label for="Services">Choose a Services:</label>
                    <select name="Event" id="Event" class = "shadow mt-4">
                        <option value=""></option>
                        <option value="Birthday">Birthday (PHP 160)</option>
                        <option value="Wedding">Wedding</option>
                        <option value="Christening">Christening</option>
                        <option value="Debut">Debut</option>
                    </select>

                    <form action="*">
                    <label for="Services">Other Services:</label>
                    <select name="Event" id="Event" class = "shadow mt-4">
                        <option value=""></option>
                        <option value="Invitation Card">Invitation Card</option>
                        <option value="Souvenir">Souvenir</option>
                        <option value="tarpaulin">Tarpaulin</option>
                        <option value="Sintra baord">Sintra Board</option>
                        <option value="2X2 Picture">2X2 Picture</option>
                        <option value="Document Print">Document Print</option>
                        <option value="Lamination">Lamination</option>
                    </select>

                </div>
                <!-- <div class="col">
                One of three columns
                </div> -->
            </div>


            <div class="form-group col-md-6 mt-5">
                <label for="message">Other Message</label>
                <textarea class="form-control shadow" id="message" rows="3"></textarea>    
            </div>     


            <button type="submit" class="btn btn-primary mt-5">Submit</button>

            <br><br><br><br><br>

            </div>
            </form>
        </div>

    </div>

</center>

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
 