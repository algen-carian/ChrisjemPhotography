<!DOCTYPE html> 
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMINHISTORY</title>
    <link rel="icon" type="" href="../assets/style-lp/images/picxellence.png">
   

     <!-- ======= Styles ====== -->
     <link rel="stylesheet" href="assets/css/sidebar.css">
     <link rel="stylesheet" href="assets/css/adminhistory.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     -->
    
     
<!-- PWA  -->
<meta name="theme-color" content="#6777ef"/>
<link rel="apple-touch-icon" href="{{ asset('../../../public/assets/PICXELLENCE LOGO.png') }}">
<link rel="manifest" href="{{ asset('/manifest.json') }}">

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
                    <a href="sidemenu">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="Reservation">
                        <span class="icon">
                            <ion-icon name="clipboard-outline"></ion-icon>
                        </span>
                        <span class="title">Reservation</span>
                    </a>
                </li>

                <li>
                    <a href="adminevent">
                        <span class="icon">
                            <ion-icon name="calendar-outline"></ion-icon>
                        </span>
                        <span class="title">Event</span>
                    </a>
                </li>

                <li>
                    <a href="adminhistory">
                        <span class="icon">
                            <ion-icon name="settings-outline"></ion-icon>
                        </span>
                        <span class="title">History</span>
                    </a>
                </li>

               
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
                    <img src="../assets/style-lp/images/icon1.jpg" alt="">
                </div>
            </div>

            <!-- side -->
    


        <section class="service-section" style="padding:5%;">
          <div class="text_permission">
            <div class="container-fluid">
                <h2>History</h2>
                <table class="">
                    <thead class="thead-dark">
                    
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Event Date</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                    
                    </thead>
                    <tbody>
                        @foreach ($Events as $ev)
                        <tr>
                            <th scope="row">{{ ++$i }}</th>
                            <td>{{$ev->fname.' '.$ev->mname.' '.$ev->lname}}</td>
                            <td>{{$ev->email}}</td>
                            <td>
                                @if($ev->event_status == "Canceled")
                                    <p style="color:red;">{{$ev->event_status}}</p>
                                @endif
                                @if($ev->event_status == "Finish")
                                    <p style="color:green;">{{$ev->event_status}}</p>
                                @endif
                            </td>
                            <td>{{$ev->Event_date}}</td>
                            <td>
                                    <a href="{{route('viewEvent',$ev->reservation_id)}}"><button class="custom-btn_btn-view">View</button></a>
                            </td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
                
                <nav>
                    <ul class="pagination" style="float:right; paddding: 2px">
                        <li class="page-item">
                            {!! $Events->appends(['sort' => 'Event_date'])->links() !!}
                        </li>
                    </ul>
                </nav>

                </div>        
            </div>
        </section>

      <script src="js/script.js"></script>s
      
 <!-- =========== Scripts =========  -->
 <script src="assets/js/main.js"></script>

 
<!-- ====== ionicons ======= -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<!-- PWA -->
<script src="{{ asset('/sw.js') }}"></script>
<script>
    if (!navigator.serviceWorker.controller) {
        navigator.serviceWorker.register("/sw.js").then(function (reg) {
            console.log("Service worker has been registered for scope: " + reg.scope);
        });
    }
</script>


 
</body>

</html>
 