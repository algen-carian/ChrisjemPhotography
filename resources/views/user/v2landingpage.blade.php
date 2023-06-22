<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Picxellence</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="../assets/css/v2landingpage.css">
      
       
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">     
      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script> 

<!-- PWA  -->
<meta name="theme-color" content="#6777ef"/>
<link rel="apple-touch-icon" href="{{ asset('../../../public/assets/PICXELLENCE LOGO.png') }}">
<link rel="manifest" href="{{ asset('/manifest.json') }}">

        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->

            <!-- Include jQuery library -->
            <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
            <!-- Include Bootstrap JavaScript -->
            <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
            <!-- bootstrap css -->
            <!-- <link rel="stylesheet" type="text/css" href="../assets/style-lp/css/bootstrap.min.css"> -->
            
                
     
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="assets/js/scripts.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>


        
    <!-- @if (session('Success'))
         <div class="alert alert-success alertSaKanto" role="alert" >
            {{ session('Success') }}
         </div>
      @endif
      @if (session('Failed'))
         <div class="alert alert-danger alertSaKanto" role="alert" >
            {{ session('Failed') }}
         </div>
      @endif
      <script>
         setTimeout(function() {
            $('.alert').fadeOut();
         }, 5000);
      </script> -->

    </head>

    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top">
                    
                    <img src="assets/img/picxellence.png" alt="logo" style="width: 75px; z-index: index 1;">
                
                </a>
                
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                        <li class="nav-item"><a class="nav-link" href="#signup">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="login">Login/Signup</a></li>
                    </ul>
                </div>
            </div>
        </nav>


        <!-- Masthead-->
        <header class="masthead">
   
            <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
                <div class="d-flex justify-content-center">
                    <div class="text-center">
                                 
        @if (session('Success'))
         <div class="alert alert-success alertSaKanto" role="alert" >
            {{ session('Success') }}
         </div>
      @endif
      @if (session('Failed'))
         <div class="alert alert-danger alertSaKanto" role="alert" >
            {{ session('Failed') }}
         </div>
      @endif
      <script>
         setTimeout(function() {
            $('.alert').fadeOut();
         }, 5000);
      </script>
                        <h1 class="mx-auto my-0 text-uppercase">Picxellence</h1>
                        <h2 class="text-white-50 mx-auto mt-2 mb-5 text-align-center">Book for a Special Occasion.</h2>
						
						
                        <!-- <a class="btn btn-primary" href="#about"  data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" id="reservenow">
                        Reserve Now!
                    </a>  -->
            

            
						
						
						<div class="read_bt">
                    <button class="btn btn-primary"   data-toggle="modal" data-target="#myModal" data-whatever="@mdo" id="reservenow">
                        <p>Reserve Now!</p>
                    </button>
                </div> 

                
						
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="about-section text-center" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="text-white mb-4">About Us</h2>
                        <p class="text-white-50 ">
                        At Chrisjem Photography, we focus on offering our clients high-quality services and goods. Chris Jem Brion, who identified a need for a business that could provide outstanding customer service and high-quality products, launched us in 2005.

Our goal is to produce superior products and outstanding customer service in order to give our clients the greatest experience possible. We think that by doing this, we can establish enduring connections with our clients and establish ourselves as the go-to supplier for their requirements.

Professionals with exceptional skills and a love for what they do make up our team. Everyone at Chrisjem Photography, from our staff to our customer service reps, is dedicated to giving our customers the finest experience imaginable.
Please don't hesitate to get in touch with us if you have any queries or would want to know more about our products or services. We can be reached at  
                        <a href="#">chrisjemphotography@gmail.com or +63 09122490655.</a><br><br>                     
                            Thank you for choosing Chrisjem Photography!
                            </p>
                    </div>
                </div>
                <img class="img-fluid" src="assets/img/cam.png" alt="..." />
            </div>
        </section>
        <!-- Projects-->
        <section class="projects-section bg-light" id="projects">
            <div class="container px-4 px-lg-5">
                <!-- Featured Project Row-->
                <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                    <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="assets/img/wedding7 2.png" alt="..." /></div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="featured-text text-center text-lg-left">
                            <h4>Wedding</h4>
                            <p class="text-black-150 mb-0 ">Your inspiration is better if it comes from many different sources, and your sensibilities will transform all those influences and inspiration into your own visual world. It’s like reading a book instead of watching a movie.</p>
                        </div>
                    </div>
                </div>
                <!-- Project One Row-->
                <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="assets/img/birthday1 .png" alt="..." /></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">Birthday</h4>
                                    <p class="mb-0 text-white-50">Photographers and videographers work to capture still and moving moments respectively for a wide number of applications. Videography is used to create video content, and use audio equipment and video cameras to sound and capture moving scenes and document events. Photography creates visual content by capturing images of landscapes, events, and people.</p>
                                    <hr class="d-none d-lg-block mb-0 ms-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project Two Row-->
                <div class="row gx-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="assets/img/debut2.png" alt="..." /></div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-white">Debut</h4>
                                    <p class="mb-0 text-white-50">It’s your 18th birthday and its time to celebrate to the fullest! Make your 18th birthday an incredible day with our high quality photography and videography service.  Our team thinks out of the box producing modern and unique visual content appealing to younger generations. Count your age by friends, not years, your life by smile, not tears.</p>
                                    <hr class="d-none d-lg-block mb-0 me-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- PRoject three ROw-->
                <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="assets/img/chiristening1.png" alt="..." /></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">Christening</h4>
                                    <p class="mb-0 text-white-50">The grace of being is gift of baptism by washing in water. And in spirit of Christ Jesus. Whoever believes and is baptized will be saved, but whoever does not believe will be condemned.</p>
                                    <hr class="d-none d-lg-block mb-0 ms-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project four Row -->
                <div class="row gx-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="assets/img/anniversary1.png" alt="..." /></div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-white">Anniversary</h4>
                                    <p class="mb-0 text-white-50">I wish you a happy anniversary, my love. Remember the good times and leave the bad behind; reminisce about joyful memories while ignoring the sad. Take pleasure in a love that has endured so long that even angels are singing a song of joy.</p>
                                    <hr class="d-none d-lg-block mb-0 me-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- PRoject five ROw-->
                <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="assets/img/summerCamp 1.png" alt="..." /></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">Team Building</h4>
                                    <p class="mb-0 text-white-50">Great teams do not hold back with one another. At the team-building and ministry camp, we embarked on a journey of self-discovery, unity, and service, leaving us inspired and motivated to make a positive impact in our community.</p>
                                    <hr class="d-none d-lg-block mb-0 ms-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


            <!--Bidyo Starts Here-->
    <section class="bidyo">
       
       <div class="video-wrapper">
        <video class="w-100" autoplay loop muted>

            <source src="public/assets/intro.mp4" type="video/mp4" />
          </video>
      </div>
      
      </section>    
      <!--Bidyo Ends Here-->
  



        <!-- Signup-->
        <section class="signup-section" id="signup">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-10 col-lg-8 mx-auto text-center">
                        <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                        <h2 class="text-white mb-5">Subscribe to receive updates!</h2>
                    
                        <!-- to get an API token!-->
                        <form class="form-signup" id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <!-- Email address input-->
                            <div class="row input-group-newsletter">
                                <div class="col"><input class="form-control" id="emailAddress" type="email" placeholder="Enter email address..." aria-label="Enter email address..." data-sb-validations="required,email" /></div>
                                <div class="col-auto"><button class="btn btn-primary disabled" id="submitButton" type="submit">Notify Me!</button></div>
                            </div>
                            <div class="invalid-feedback mt-2" data-sb-feedback="emailAddress:required">An email is required.</div>
                            <div class="invalid-feedback mt-2" data-sb-feedback="emailAddress:email">Email is not valid.</div>
                          
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3 mt-2 text-white">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    To activate this form, sign up at
                                    <br />
                                    <a href="#">https://example.com/picxellence</a>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3 mt-2">Error sending message!</div></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    
        <!-- Contact-->
        <section class="contact-section bg-black">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Address</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small">Iram, New Cabalan Olongapo City</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-envelope text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Email</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small"><a href="#!">chrisjemphotography@gmail.com</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-mobile-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Phone</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small">+63 09122490655</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="social d-flex justify-content-center">
                    <a class="mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                    <a class="mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="mx-2" href="#!"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer bg-black small text-center text-white-50"><div class="container px-4 px-lg-5">Copyright &copy; Picxellence 2022</div></footer>
		
		
		
		
		  <!-- Large modal -->
            <div class="modal fade bd-example-modal-lg"  id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
               <div class="modal-dialog modal-lg" role="document">
                     <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title" id="exampleModalLabel">Reserve Events</h3>
                                <button type="button" STYLE="hover-color:red;"class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                
                              <form action="{{ route('reserve') }}" method="POST">                              
                                 @csrf  

                                    <div class="form-group">
                                        <label for="message-text" class="col-form-label"><i class="fa fa-user" style="color:#1795CE"></i> Name:</label><br>
                                        <input name="fname"  class="form-control shadow" id="fname" style="width:30%;margin-right:5%;float:left;" placeholder="First name"  required>
                                        <input name="mname"  class="form-control shadow" id="mname" style="width:30%;margin-right:5%;float:left;" placeholder="Middle name">
                                        <input name="lname"  class="form-control shadow" id="lname" style="width:30%;float:left;" placeholder="Last name"  required>
                                    </div>
                                    <br>
                                    <div class="form-group" style="width:50%;padding:2%;float:left;">
                                        <label for="message-text" class="col-form-label"><i class="fa fa-envelope" style="color:#1795CE"></i> Email:</label>
                                        <input name="email"  class="form-control shadow" id="email" placeholder ="sample@gmail.com"   required>
                                    </div>
                                    <div class="form-group" style="width:50%;padding:2%;float:left;">
                                        <label for="message-text" class="col-form-label"><i class="fa fa-address-card" style="color:#1795CE"></i> Location:</label>
                                        <input name="Address"  class="form-control shadow" id="Address" placeholder ="Location" required>
                                    </div>
                                    <div class="form-group" style="width:35%;padding:2%;float:left;">
                                        <label for="message-text" class="col-form-label"><i class="fa fa-phone" style="color:#1795CE"></i> Contact:</label>
                                        <input name="contact"  type="number" min="0"   maxlength="11"  class="form-control shadow" placeholder ="+63 xx-xxx-xxxx" id="contact" required>
                                    </div>
                                    <div class="form-group" style="width:35%;padding:2%;float:left;"> 
                                        <label for="message-text" class="col-form-label"><i class="fa fa-phone" style="color:#1795CE"></i> Alternate Number:</label>
                                        <input name="alternate"  type="number" min="0"  maxlength="11"  class="form-control shadow" placeholder ="+63 xx-xxx-xxxx" id="alternate" required>
                                    </div>

<!-- 
                                    <div class="form-group" style="width:35%;padding:2%;float:left;">
                                        <label for="message-text" class="col-form-label"><i class="fa fa-list-alt" style="color:#1795CE"></i>Others:</label>
                                        <input name="alternate"  type="number" min="0"  maxlength="11"  class="form-control shadow" placeholder ="Others" id="alternate" required>
                                    </div> -->
                             
                                    
                                    <div class="form-group" style="width:30%;padding:2%;float:left;">
                                        <label for="message-text" class="col-form-label"><i class="	fas fa-calendar-alt" style="color:#1795CE" aria-hidden="true"></i> Date of Event:</label>
                                        <input name="Event"  class="form-control shadow"  placeholder ="MM/DD/YY."id="datepicker" autocomplete="off"  required >
                                    </div>    
                                      
                                    <div class="form-group" style="width:50%;padding:2%;float:left;">
                                 
                                      
                                          <label for="Services" ><i class=" fas fa-camera-alt" style="color:#1795CE" aria-hidden="true"></i> Events:</label>
                                                @foreach($Events as $ev)
                                                   @if($ev->event_content == "Event")
         
                                                      <div class="form-check" >
                                                         <input name="Services[]" value="{{$ev->id}}" class="form-check-input" type="checkbox"  id="flexCheckDefault">
                                                         <label class="form-check-label" for="flexCheckDefault"> 
                                                               {{$ev->event_title}}: <span>&#8369;{{$ev->event_price}}</span>
                                                                                                  
                                                         </label>
                                                      </div>
                                                         @endif
                                                @endforeach
                                                <label for="services" style="display:table-cell;"><i class="fas fa-calendar-check" style="color:#1795CE"></i> Other?</label>
                                                        <input type="text" name="event_desc" placeholder="Description - Event" id="flexCheckDefault" class="form-control shadow"  style="display:table-cell; width:50%" />
                                                  <div class="form-group" style="width:35%;padding:2%;float:left;">


                                        <!-- <label for="message-text" class="col-form-label"><i class="fa fa-list-alt" style="color:#1795CE"></i>Others:</label>
                                        <input name="alternate"  type="text" min="0"  maxlength="11"  class="form-control shadow" placeholder ="Others" id="alternate" required> -->
                                    </div>
                                          
                                               

                                             <br><br>

                                    </div>

                                    <div class="form-group" style="width:50%;padding:2%;float:left;">

                                          <label for="Services" ><i class=" fas fa-copy" style="color:#1795CE" aria-hidden="true"></i> Services:</label>

                                          @foreach($Events as $ev)
                                             @if($ev->event_content == "Services")
          
                                                <div class="form-check" >
                                                   <input name="Other_Services[]" value="{{$ev->id}}"  class="form-check-input" type="checkbox"  id="flexCheckDefault">
                                                   <label class="form-check-label" for="flexCheckDefault">
                                                      {{$ev->event_title}}: <span>&#8369;{{$ev->event_price}}</span>                                                                                                                
                                                   </label>
                                                </div>
                                                

                                             @endif
                                          @endforeach
                                          <label for="services" style="display:table-cell;"><i class="fas fa-calendar-check" style="color:#1795CE"></i> Other?</label>
                                                 <input type="text" name="service_desc" placeholder="Description - Services" id="flexCheckDefault" class="form-control shadow"  style="display:table-cell; width:50%" />
                                    </div>
                                   
                                       <br>
                                       <br>
                                    <div class="modal-footer" style="width:50%;padding:2%;float:right;">
                                          <button type="button"  class="btn btn-secondary" data-dismiss="modal">Close</button>
                                          <button type="submit"  class="btn btn-primary">Send message</button>
                                    </div>      
                              </form>
                        </div>  
                     </div>
                  </div>
            </div>
        <!-- End of Large Modal -->



<!-- Javascript files-->
<script src="../assets/style-lp/js/jquery.min.js"></script>
      <script src="../assets/style-lp/js/popper.min.js"></script>
      <script src="../assets/style-lp/js/bootstrap.bundle.min.js"></script>
      <script src="../assets/style-lp/js/jquery-3.0.0.min.js"></script>
      <script src="../assets/style-lp/js/plugin.js"></script>
      <!-- sidebar -->
      <!-- <script src="../assets/style-lp/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="../assets/style-lp/js/custom.js"></script> -->
      <!-- javascript --> 
      <!-- <script src="../assets/style-lp/js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>      


    -->

      <script>
         let disabledDates = [];

         document.getElementById("reservenow").onclick = function() 
         {
            var reserve = {!! json_encode($reservation) !!};  
            reserve.forEach(element => {
               disabledDates.push(element.Event_date);
            });
            console.log('data'+disabledDates);
         };


        $(function() {

         var currentDate = new Date();
         var nextMonth = new Date();

        // Add 30 days to the current date
        nextMonth.setDate(currentDate.getDate() + 30);
    
            $("#datepicker").datepicker({
                
               beforeShowDay: function(date) {
                  let formattedDate = $.datepicker.formatDate("yy-mm-dd", date);
                  return [disabledDates.indexOf(formattedDate) == -1 && date >= nextMonth];
               }
            });         
         });   




// var d = new Date();
// var hours = d.getHours();
// var minutes = d.getMinutes();
// var seconds = d.getSeconds();
// var date = d.getDate();
// var month = d.getMonth();
// var year = d.getFullYear();
// if (month < 10) {
//     month = '0' + month;
// }
// if (date < 10) {
//     date = '0' + date;
// }
// $(".div_date_time").text(year + "-" + month + "-" + date + " " + hours + ":" + minutes + ":" + seconds);

//         let disabledDates = [];

// document.getElementById("reservenow").onclick = function() 
// {
//    var reserve = {!! json_encode($reservation) !!};

  
//    console.log(reserve);
//    reserve.forEach(element => {
//       disabledDates.push(element.Event_date);
//    });
//    console.log(disabledDates);

// };


// $(function() {

// var currentDate = new Date();
//    $("#datepicker").datepicker({
//       beforeShowDay: function(date) {
//          let formattedDate = $.datepicker.formatDate("yy-mm-dd", date);
//          return [disabledDates.indexOf(formattedDate) == -1];
//       }
//    });   
   
// });   
      </script>



<script>
        //  select all input type numbers
     document.querySelectorAll('input[type="number"]').forEach(input =>{
        input.oninput = () =>{
            if(input.value.length > input.maxLength) input.value = input.value.slice(0, input.maxLength);
        };
     });
</script>


<!-- PWA -->
<script src="{{ asset('/sw.js') }}"></script>
<script>
    if (!navigator.serviceWorker.controller) {
        navigator.serviceWorker.register("/sw.js").then(function (reg) {
            console.log("Service worker has been registered for scope: " + reg.scope);
        });
    }
</script>


      <scrip src="public/manifest.json"></scrip>
    

    
       
		
		
    </body>
</html>
