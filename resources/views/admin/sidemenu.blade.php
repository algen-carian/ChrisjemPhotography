<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pixcellence</title>
    <link rel="icon" type="" href="../assets/style-lp/images/picxellence.png">
    
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/css/sidebar.css">

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
                    <a href="{{ route('adminlogout')}}">
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
                    <img src="../assets/style-lp/images/icon1.jpg" alt="">
                </div>
            </div>
            

            <!-- ============= top bar end =============== -->


            <!-- ================= Insert content here algenaticsx =============== -->

            <!-- ======================= Cards ================== -->
            
          

            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers"> {{ $data[0] }}</div>
                        <div class="cardName">Revenue</div>
                       
                    </div>

                    <div class="iconBx">
                    <ion-icon name="cash-outline"></ion-icon>
                        
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers"> {{ $data[1] }}</div>
                        <div class="cardName">Events</div>
                       
                    </div>

                    <div class="iconBx">
                     <ion-icon name="calendar-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">{{ $data[2] }}</div>
                        <div class="cardName">Reservation</div>
                    </div>

                    <div class="iconBx">
                    <ion-icon name="document-attach-outline"></ion-icon>
                        </span>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">{{ $data[3] }}</div>
                        <div class="cardName">Services</div>
                    </div>

                    <div class="iconBx">
                       <ion-icon name="newspaper-outline"></ion-icon>
                    </div>
                </div>
            </div>

            <!-- ================ Reservation List ================= -->
            <div class="details">
                <div class="recentReservations">
                    <div class="cardHeader">
                        <h2>Recent Reservations</h2>
                        <a href="Reservation" class="btn">View All</a>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <td>#</td>
                                <td>Name</td>
                                <td>Email</td>
                                <td>Event Date</td>
                                <td>Status</td>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Algen</td>
                                <td>algen@email.com</td>
                                <td>2023-01-08</td>
                                <td><span class="status approved">Approved</span></td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>Bryan</td>
                                <td>bryan@email.com</td>
                                <td>2023-01-08</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>Mel</td>
                                <td>mel@email.com</td>
                                <td>2023-01-08</td>
                                <td><span class="status cancelled">Cancelled</span></td>
                            </tr>

                            <tr>
                                <td>4</td>
                                <td>Yuri</td>
                                <td>yuri@email.com</td>
                                <td>2023-01-08</td>
                                <td><span class="status inProgress">In Progress</span></td>
                            </tr>

                            <tr>
                                <td>5</td>
                                <td>Algen</td>
                                <td>algen@email.com</td>
                                <td>2023-01-08</td>
                                <td><span class="status approved">Approved</span></td>
                            </tr>

                            <tr>
                                <td>6</td>
                                <td>Bryan</td>
                                <td>bryan@email.com</td>
                                <td>2023-01-08</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>

                            <tr>
                                <td>7</td>
                                <td>Mel</td>
                                <td>mel@email.com</td>
                                <td>2023-01-08</td>
                                <td><span class="status cancelled">Cancelled</span></td>
                            </tr>

                            <tr>
                                <td>8</td>
                                <td>Yuri</td>
                                <td>yuri@email.com</td>
                                <td>2023-01-08</td>
                                <td><span class="status inProgress">In Progress</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- ================= History ================ -->
                <div class="recentReservations">
                    <div class="cardHeader">
                        <h2>Recent Customers</h2>
                         <a href="adminhistory" class="btn">View All</a>
                    </div>

                    <table>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../assets/style-lp/images/icon.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Algen <br> <span>Cabalan</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../assets/style-lp/images/icon1.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Bryan <br> <span>Manggahan</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../assets/style-lp/images/icon.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Algen <br> <span>Cabalan</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../assets/style-lp/images/icon1.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Bryan <br> <span>Manggahan</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../assets/style-lp/images/icon.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Algen <br> <span>Cabalan</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../assets/style-lp/images/icon1.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Bryan <br> <span>Manggahan</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../assets/style-lp/images/icon.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Algen <br> <span>Cabalan</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../assets/style-lp/images/icon1.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Bryan <br> <span>Manggahan</span></h4>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
<!-- PWA -->
<script src="{{ asset('/sw.js') }}"></script>
<script>
    if (!navigator.serviceWorker.controller) {
        navigator.serviceWorker.register("/sw.js").then(function (reg) {
            console.log("Service worker has been registered for scope: " + reg.scope);
        });
    }
</script>

    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>