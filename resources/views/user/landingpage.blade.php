

<!DOCTYPE html>
<html lang="en">

   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>CHRISJEM PHOTOGRAPHY</title>
      <link rel="icon" type="" href="../assets/style-lp/images/picxellence.png">

      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="../assets/style-lp/css/bootstrap.min.css">
      <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
      <!-- style css -->
      <!-- <link rel="stylesheet" href="../assets/style-lp/css/landingpage.css">
      <link rel="stylesheet" type="text/css" href="../assets/style-lp/css/landingpage.css">  -->
      <link rel="stylesheet" type="text/css" href="../assets/style-lp/css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="../assets/style-lp/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="../assets/style-lp/images/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="../assets/style-lp/css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Righteous&display=swap" rel="stylesheet">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="../assets/style-lp/css/owl.carousel.min.css">
      <link rel="stylesheet" href="../assets/style-lp/css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      
      <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        
      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
   </head>
   <body>
  
      @if (session('Success'))
         <div class="alert alert-success" role="alert" >
            {{ session('Success') }}
         </div>
      @endif
      @if (session('Failed'))
         <div class="alert alert-danger" role="alert" >
            {{ session('Failed') }}
         </div>
      @endif
      <script>
         setTimeout(function() {
            $('.alert').fadeOut();
         }, 5000);
      </script>

      <!-- header section start -->
      <div class="header_section">
         <div class="header_main">
            <div class="mobile_menu">
               <nav class="navbar navbar-expand-lg navbar-light bg-light">
                  <div class="logo_mobile"><a href="index.html"><img src="../assets/picxellence.png"></a></div>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                     <ul class="navbar-nav">
                        <li class="nav-item">
                           <a class="nav-link" href="#index">Home</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#services">Services</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link " href="#blog">Blog</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link " href="#contact">Contact</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link " href="userlogin">Userlogin</a>
                        </li>
                     </ul>
                  </div>
               </nav>
            </div>
            <div class="container-fluid">
               <div class="logo"><img src="../assets/picxellence.png"  width="200" height="200" ></div>
               <div class="menu_main">
                  <ul>
                     <li class="active"><a href="#index">Home</a></li>
                     <li><a href="#about">About</a></li>
                     <li><a href="#service">Services</a></li>
                     <li><a href="#blog">Blog</a></li>
                     <li><a href="#contact">Contact us</a></li>
                     <li><a href="userlogin">Login</a></li>
                  </ul>
               </div>
            </div>
         </div>
         <!-- banner section start -->
         <div class="banner_section layout_padding" id="index">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container">
                        <h1 class="banner_taital">Birthday</h1>
                        <p class="banner_text">"Photographers and videographers work to capture still and moving moments respectively for a wide number of applications. Videography is used to create video content, and use audio equipment and video cameras to sound and capture moving scenes and document events. Photography creates visual content by capturing images of landscapes, events, and people."</p>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <h1 class="banner_taital">Wedding</h1>
                        <p class="banner_text">"Your inspiration is better if it comes from many different sources, and your sensibilities will transform all those influences and inspiration into your own visual world. It’s like reading a book instead of watching a movie.</p>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <h1 class="banner_taital">Debut</h1>
                        <p class="banner_text">"It’s your 18th birthday and its time to celebrate to the fullest! Make your 18th birthday an incredible day with our high quality photography and videography service.  Our team thinks out of the box producing modern and unique visual content appealing to younger generations. Count your age by friends, not years, your life by smile, not tears."</p>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <h1 class="banner_taital">Christening</h1>
                        <p class="banner_text">"The grace of being is gift of baptism by washing in water. And in spirit of Christ Jesus. Whoever believes and is baptized will be saved, but whoever does not believe will be condemned."</p>
                     </div>
                   </div>
                     <div class="carousel-item">
                     <div class="container">
                        <h1 class="banner_taital">Anniversary</h1>
                        <p class="banner_text">"I wish you a happy anniversary, my love. Remember the good times and leave the bad behind; reminisce about joyful memories while ignoring the sad. Take pleasure in a love that has endured so long that even angels are singing a song of joy."</p>
                     </div>
                   </div>
                   <div class="carousel-item">
                     <div class="container">
                        <h1 class="banner_taital">Team Building</h1>
                        <p class="banner_text">"Great teams do not hold back with one another. They are unafraid to air their dirty laundry. They admit their mistakes, their weaknesses, and their concerns without fear of reprisal.” — Patrick Lencioni, American author."</p>
                       </div>
                   </div>

                  
                  <div class="read_bt">
                    <a href="" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" id="reservenow">
                        Reserve Now!
                    </a>
                </div> 
                
                </div>
            </div>
         </div>
         <!-- banner section end -->
      </div>
    
    
        
      <!-- header section end -->
      <!-- services section start -->
      <div class="services_section layout_padding" id="service">
         <div class="container">
            <h1 class="services_taital">Services </h1>
            <p class="services_text">Our full-planning service handles the entire scope of your event, including all design, production management, and logistics. From the minute details to the major decisions, our team of experienced planners will ensure your event goes according to plan with full and transparent communication. From the very first meeting, we’ll turn your ideas into a vision board to develop a creative concept you’ll love, and take over the budgeting and payment tracking. </p>
            <div class="services_section_2">
               <div class="row">
                  <div class="col-md-3">
                     <div><img src="../assets/birthday3.png" class="services_img" style="max-height:300px;border-radius:9px;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;"></div>
                     <div class="btn_main"><a href="#">Birthday</a></div>
                  </div>
                  <div class="col-md-3">
                     <div><img src="../assets/wedding1.jpg" class="services_img" style="max-height:300px;border-radius:9px;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;"></div>
                     <div class="btn_main"><a href="#">Wedding</a></div>
                  </div>
                  <div class="col-md-3">
                     <div><img src="../assets/debut1.jpg" class="services_img" style="max-height:300px;border-radius:9px;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;"></div>
                     <div class="btn_main"><a href="#">Debut</a></div>
                  </div>
                  <div class="col-md-3">
                     <div><img src="../assets/christening3.jpeg" class="services_img" style="max-height:300px;border-radius:9px;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;"></div>
                     <div class="btn_main"><a href="#">Christening</a></div>
                  </div>
                  <div class="col-md-3"><br>
                     <div><img src="../assets/anniversary2.jpg" class="services_img" style="max-height:300px;border-radius:9px;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;"></div>
                     <div class="btn_main"><a href="#">Anniversary</a></div>
                  </div><br>
                  <div class="col-md-3"><br>
                     <div><img src="../assets/teambuilding1.jpg" class="services_img" style="max-height:300px;border-radius:9px;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;"></div>
                     <div class="btn_main"><a href="#">Team Building</a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- services section end -->

  <!-- End of Slide Show for Image -->
      <!-- about section start -->
      <div class="about_section layout_padding" id="about">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-6">
                  <div class="about_taital_main">
                     <h1 class="about_taital">About Us </h1>
                     <p class="about_text">Chrisjem Photography Services ...</p>
                     <div class="readmore_bt"><a href="#">Read More</a></div>
                  </div>
               </div>
               <div class="col-md-6 padding_right_0">
                  <div><img src="../assets/style-lp/images/poster.jpg" class="about_img"></div>
               </div>
            </div>
         </div>
      </div>
      <!-- about section end -->
      <!-- blog section start -->
      <div class="blog_section layout_padding" id="blog">
         <div class="videoplay">
            <video src="../assets/samplevid.mp4">
            sample video
               </video>
            <h1 class="blog_taital">See Our  Video</h1>
            <p class="blog_text">many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which</p>
            <div class="play_icon_main">
               <div class="play_icon"><a href="#">
            <img src="../assets/style-lp/images/play-icon.png"></a></div>
               </div>
            </div>
         </div>
      </div>
      <!-- blog section end -->
      <!-- client section start -->
      <div class="client_section layout_padding">
         <div class="container">
            <h1 class="client_taital">Testimonial</h1>
            <div class="client_section_2">
               <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                     <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                     <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                     <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="client_main">
                           <div class="box_left">
                              <p class="lorem_text">We now live in a world where almost everything is practically inseparable from the internet, businesses topping the list. It's now crucial that every business has a recognizable online presence, no matter its sector. Not only does modern technology help businesses get found online, but it also helps them easily convert visits into revenue through an online reservation system.</p>
                           </div>
                           <div class="box_right">
                              <div class="client_taital_left">
                                 <div class="client_img"><img src="../assets/style-lp/images/client-img.png"></div>
                                 <div class="quick_icon"><img src="../assets/style-lp/images/quick-icon.png"></div>
                              </div>
                              <div class="client_taital_right">
                                 <h4 class="client_name">Dame</h4>
                                 <p class="customer_text">Customer</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="client_main">
                           <div class="box_left">
                              <p class="lorem_text">We now live in a world where almost everything is practically inseparable from the internet, businesses topping the list. It's now crucial that every business has a recognizable online presence, no matter its sector. Not only does modern technology help businesses get found online, but it also helps them easily convert visits into revenue through an online reservation system.</p>
                           </div>
                           <div class="box_right">
                              <div class="client_taital_left">
                                 <div class="client_img"><img src="../assets/style-lp/images/client-img.png"></div>
                                 <div class="quick_icon"><img src="../assets/style-lp/images/quick-icon.png"></div>
                              </div>
                              <div class="client_taital_right">
                                 <h4 class="client_name">Algen</h4>
                                 <p class="customer_text">Customer</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="client_main">
                           <div class="box_left">
                              <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugia</p>
                           </div>
                           <div class="box_right">
                              <div class="client_taital_left">
                                 <div class="client_img"><img src="../assets/style-lp/images/client-img.png"></div>
                                 <div class="quick_icon"><img src="../assets/style-lp/images/quick-icon.png"></div>
                              </div>
                              <div class="client_taital_right">
                                 <h4 class="client_name">Yuri</h4>
                                 <p class="customer_text">Customer</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- client section ends -->
      <!-- choose section start -->
      <div class="choose_section layout_padding" id="contact">
         <div class="container">
            <h1 class="choose_taital">Why Choose Us</h1>
            <p class="choose_text">We now live in a world where almost everything is practically inseparable from the internet, businesses topping the list. It's now crucial that every business has a recognizable online presence, no matter its sector. Not only does modern technology help businesses get found online, but it also helps them easily convert visits into revenue through an online reservation system.</p>
            <div class="read_bt_1"><a href="#">Read More</a></div>
            <div class="newsletter_box">
               <h1 class="let_text">Let Start Talk with Us</h1>
               <div class="getquote_bt"><a href="#">Get A Quote</a></div>
            </div>
         </div>
      </div>
      <!-- choose section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="input_btn_main">
               <input type="text" class="mail_text" placeholder="Enter your email" name="Enter your email">
               <div class="subscribe_bt"><a href="#">Subscribe</a></div>
            </div>
            <div class="location_main">
               <div class="call_text"><img src="../assets/style-lp/images/call-icon.png"></div>
               <div class="call_text"><a href="#">Call +01 9489373399</a></div>
               <div class="call_text"><img src="../assets/style-lp/images/mail-icon.png"></div>
               <div class="call_text"><a href="#">christjemphotography@gmail.com</a></div>
            </div>
            <div class="social_icon">
               <ul>
                  <li><a href="https://www.facebook.com/profile.php?id=100063951038911"><img src="../assets/style-lp/images/fb-icon.png"></a></li>
                  <li><a href="#"><img src="../assets/style-lp/images/twitter-icon.png"></a></li>
                  <li><a href="#"><img src="../assets/style-lp/images/linkedin-icon.png"></a></li>
                  <li><a href="#"><img src="../assets/style-lp/images/instagram-icon.png"></a></li>
               </ul>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">2022 All Rights Reserved. Design by <a href="">Algen & Me</a></p>
         </div>
      </div>

            <!-- Large modal -->
            <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
               <div class="modal-dialog modal-lg" role="document">
                     <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title" id="exampleModalLabel">Reserve Events</h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>


                            <div class="modal-body">
                              <form action="{{ route('reserve') }}" method="POST">
                                 @csrf  

                                    <div class="form-group">
                                        <label for="message-text" class="col-form-label">Name:</label><br>
                                        <input name="fname"  class="form-control shadow" id="fname" style="width:30%;margin-right:5%;float:left;" placeholder="First name"  required>
                                        <input name="mname"  class="form-control shadow" id="mname" style="width:30%;margin-right:5%;float:left;" placeholder="Middle name">
                                        <input name="lname"  class="form-control shadow" id="lname" style="width:30%;float:left;" placeholder="Last name"  required>
                                    </div>
                                    <br>
                                    <div class="form-group" style="width:50%;padding:2%;float:left;">
                                        <label for="message-text" class="col-form-label">Email:</label>
                                        <input name="email"  class="form-control shadow" id="email" placeholder ="sample@gmail.com"   required>
                                    </div>
                                    <div class="form-group" style="width:50%;padding:2%;float:left;">
                                        <label for="message-text" class="col-form-label">Location:</label>
                                        <input name="Address"  class="form-control shadow" id="Address" required>
                                    </div>
                                    <div class="form-group" style="width:35%;padding:2%;float:left;">
                                        <label for="message-text" class="col-form-label">Contact:</label>
                                        <input name="contact"  type="number" class="form-control shadow" id="contact" required>
                                    </div>
                                    <div class="form-group" style="width:35%;padding:2%;float:left;">
                                        <label for="message-text" class="col-form-label">Alternate Number:</label>
                                        <input name="alternate"  type="number" class="form-control shadow" id="alternate" required>
                                    </div>
                                    
                                    <div class="form-group" style="width:30%;padding:2%;float:left;">
                                        <label for="message-text" class="col-form-label">Date of Event:</label>
                                        <input name="Event"  class="form-control shadow"  id="datepicker" autocomplete="off"  required >
                                    </div>    
                                      
                                    <div class="form-group" style="width:50%;padding:2%;float:left;">
                                 
                                      
                                          <label for="Services" >Events:</label>
                                                @foreach($Events as $ev)
                                                   @if($ev->event_content == "Event")
         
                                                      <div class="form-check" >
                                                         <input name="Services[]" value="{{$ev->id}}" class="form-check-input" type="checkbox"  id="flexCheckDefault">
                                                         <label class="form-check-label" for="flexCheckDefault">
                                                               {{$ev->event_title}}:{{$ev->event_price}}
                                                         </label>
                                                      </div>
                                                         @endif
                                                @endforeach                             
                                             <br><br>
                                    </div>

                                    <div class="form-group" style="width:50%;padding:2%;float:left;">

                                          <label for="Services" >Other Services:</label>

                                          @foreach($Events as $ev)
                                             @if($ev->event_content == "Services")
          
                                                <div class="form-check" >
                                                   <input name="Other_Services[]" value="{{$ev->id}}"  class="form-check-input" type="checkbox"  id="flexCheckDefault">
                                                   <label class="form-check-label" for="flexCheckDefault">
                                                      {{$ev->event_title}}:{{$ev->event_price}}
                                                   </label>
                                                </div>

                                             @endif
                                          @endforeach
                                    </div>
                                       <br>
                                       <br>
                                    <div class="modal-footer" style="width:50%;padding:2%;float:left;">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                          <button type="submit" class="btn btn-primary">Send message</button>
                                    </div>
                              </form>
                        </div>  
                     </div>
                  </div>
            </div>
      <!-- copyright section end -->

      <!-- Javascript files-->
      <script src="../assets/style-lp/js/jquery.min.js"></script>
      <script src="../assets/style-lp/js/popper.min.js"></script>
      <script src="../assets/style-lp/js/bootstrap.bundle.min.js"></script>
      <script src="../assets/style-lp/js/jquery-3.0.0.min.js"></script>
      <script src="../assets/style-lp/js/plugin.js"></script>
      <!-- sidebar -->
      <script src="../assets/style-lp/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="../assets/style-lp/js/custom.js"></script>
      <!-- javascript --> 
      <script src="../assets/style-lp/js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>    

      <script>
         let disabledDates = [];

         document.getElementById("reservenow").onclick = function() 
         {
            var reserve = {!! json_encode($reservation) !!};

           
            reserve.forEach(element => {
               disabledDates.push(element.Event_date);
            });
            console.log(disabledDates);

         };


        $(function() {

         var currentDate = new Date();
            $("#datepicker").datepicker({
               beforeShowDay: function(date) {
                  let formattedDate = $.datepicker.formatDate("yy-mm-dd", date);
                  return [disabledDates.indexOf(formattedDate) == -1];
               }
            });   
            
         });   
      </script>
      <!-- for dropdown --> 
      <!-- <script>

         $('.dropdown-menu a').click(function(){
            $('#selected').text($(this).text());
         });

         $('.dropdown-menu a').click(function(){
            $('#selected2').text($(this).text());
         });

      </script> -->

   </body>
</html>