<!DOCTYPE html> 
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMINEVENT</title>
    <link rel="icon" type="" href="../assets/style-lp/images/picxellence.png">
    

    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/css/sidebar.css">
    <link rel="stylesheet" href="assets/css/adminevent.css">
 
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
            

            <!-- =============== top bar start =============== -->
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
                    <img src="../assets/style-lp/images/picxellence.png" alt="">
                </div>
            </div>
            

            <!-- ============= top bar end =============== -->


        <!-- side -->

        <section class="service-section" style="padding:5%;">
          <div class="text_permission">
            <div class="container-fluid">
                <h2>Events</h2>
                    <br>
                        <div class="container" >
                                <form  class="pigura" action="{{route('addEvent')}}" method="post">
                                    @csrf
                                        <div >
                                            Title:
                                            <input name="event_title" id="event_title" type="text" class="form-control" >
                                        </div>

                                        <div >
                                            Content:
                                            <select name="event_content" id="event_content" class="form-control">
                                                <option>Event</ption>
                                                <option>Services</ption>
                                                
                                            </select>
                                        </div>

                                        <div>
                                            Price:
                                            <input name="event_price" id="event_price" type="text" class="form-control">
                                        </div>
                                        <div >
                                            <button class='btn btn-primary'>Add</button>
                                        </div>
                                </form>
                        </div>
                <br>
                <table class="lamesa">
                    <thead class="thead-dark">
                    
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Type of Event</th>
                            <th scope="col">Price</th>
                    </thead>

                    <tbody>
                        @foreach ($Events as $ev)
                        <tr>
                            <th scope="row">{{ ++$i }}</th>
                            <td>{{$ev->event_title}}</td>
                            <td>{{$ev->event_content}}</td>
                            <td>{{$ev->event_price}}</td>
                        </tr>				
                        @endforeach   
                    </tbody>
                </table>
                
                <nav>
                    <ul class="pagination" style="float:right;">
                        <li class="page-item">
                            {!! $Events->appends(['sort' => 'event_title'])->links() !!}
                        </li>
                    </ul>
                </nav>

                </div>        
            </div>
        </section>


<!-- sample table -->

 <!-- =========== Scripts =========  -->
 <script src="assets/js/main.js"></script>

<!-- ====== ionicons ======= -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

 
</body>

</html>
 