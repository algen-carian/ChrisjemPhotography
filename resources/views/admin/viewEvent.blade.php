<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Event</title>
    <link rel="icon" type="" href="../assets/style-lp/images/picxellence.png">

    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="../assets/css/sidebar.css">
    <link rel="stylesheet" href="../assets/css/viewevent.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
          -->
</head>


<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        
        <div class="navigation">
            <ul>
                <li>
                <br>
                    <a href="#">
                        <span class="icon">
                           <!-- <ion-icon name="camera-outline"></ion-icon> -->
                        </span>
                        
                        <span class="title"><img src="../assets/style-lp/images/picxellence.png" width="100" height="100" alt=""></span>
                    </a>
                </li>
                <br>

                <li>
                    <a href="adminAuth">
                        <span class="icon">
                        <ion-icon name="arrow-back-outline"></ion-icon>
                        </span>
                        <span onclick="history.back()" class="title">Back</span>
                    </a>
                </li>

               
 <input type="button" value="Go back!" onclick="history.back()">



                <li>
                    <a href="/">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>

              
            </ul>
        </div>
    <!-- ========================= Main ==================== -->
    <div class="main">
       
       <!-- SEARCH -->
       <div class="topbar">
           <div class="toggle">
               <ion-icon name="menu-outline"></ion-icon> 
           </div>

           <div class="search">
               <label>
               <ion-icon name="search-outline"></ion-icon>
                   <input type="text" placeholder="Search here">
               </label>
           </div>


           <div class="user">
                    <img src="../assets/style-lp/images/picxellence.png"alt="">
           </div>
       </div>
    


        <!-- Container Card -->
        <section class="service-section">
          <div class="text_permission">


            <div class="container-fluid" >
                <h2>Reservations</h2>
       

                <div class="containernimama">
             <div class="card">
                          <div class="card-header">
                             <h3> Details</h3>
                          </div>
                          <div class="card-body">
                              @foreach($Events as $ev)

                              <!-- <div class="input-field">
                            <label for="email">Name</label>
                            <input  class="form-control" name="Name" type="text" value="{{$ev->fname}} {{$ev->mname}} {{$ev->lname}}" readonly>
                        </div> -->


                              <div class="input-field">
                                  <input  class="form-control" name="Name" type="text" value="" readonly>
                                  <label for="Name">Name: {{$ev->fname}} {{$ev->mname}} {{$ev->lname}}</label>
                              </div>
                              <div class="input-field">
                                  <input  class="form-control" name="Email" type="text" value="" readonly>
                                  <label for="Email">Email: {{$ev->email}}</label>
                              </div>
                              <div class="input-field">
                                  <input  class="form-control" name="Location" type="text" value="" readonly>
                                  <label for="Location">Location of Event: {{$ev->Address}}</label>
                              </div>
                              <div class="input-field">
                                  
                                  <input  class="form-control" name="Contact" type="text" value="" readonly>
                                  <label for="Contact">Contact: {{$ev->contact}}</label>
                              </div>
                              <div class="input-field">
                                  
                                  <input  class="form-control" name="Alternate"type="text" value="" readonly>
                                  <label for="Alternate">Alternate Contact: {{$ev->alternate}}</label>
                              </div>
                              <div class="input-field">
                                 
                                  <input class="form-control"  name="status" type="text" value="" readonly>
                                  <label for="status">Status: {{$ev->event_status}}</label>
                              </div>
                              <div class="input-field">
                                 
                                  <input class="form-control"  name="data_event" type="text" value="" readonly>
                                  <label for="data_event">Event Date: {{$ev->Event_date}}</label>
                              </div>
                              <div class="input-field">
        
                                  <input  class="form-control" name="DoR" type="text" value="" readonly>
                                  <label for="DoR">Date of Reservation: {{$ev->created_at}}</label>
                              </div>
                               @endforeach   	
                                    
                          </div>
                      </div>
            
                      <div class="card">
                          <div class="card-header">
                             <h3>Services</h3>
                          </div>
                          <div class="card-body">
                              <div>
                                  <label for="DoR">Type of services:</label>
                                  @foreach($services as $serv)
                                      <input  class="form-control" name="service" type="text" value="{{$serv->Service}}" readonly>
                                      <br>
                                  @endforeach
                              </div>
                          </div>
                      </div>                    
                    </div>
                </div>        
            </div>
        </section>

 
</body>
<script src="js/script.js"></script>

<script>
    // alert("Welcome Admin")
let sidemenu = document.querySelector(".sidemenu");
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
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</html>