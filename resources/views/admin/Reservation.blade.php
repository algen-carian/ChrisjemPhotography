
  <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESERVATION</title>
    <link rel="icon" type="" href="../assets/style-lp/images/picxellence.png">

    <!-- ======= Styles ====== -->
    <!-- <link rel="stylesheet" href="assets/css/sidebar3.css"> -->
    <link rel="stylesheet" href="assets/css/sidebar.css">
    <link rel="stylesheet" href="assets/css/Reservation.css">
  
 
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
       
            <!-- SEARCH -->
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                       
                    </label>
                </div>


                <div class="user">
                         <img src="../assets/style-lp/images/picxellence.png"alt="">
                </div>
            </div>
         

            <div class="service-section"  style="padding:5%;">
                <div class="text_permission">   
                    <div class="container-fluid">
                        <h2>Recent Reservations</h2>
                        <a href="Reservation" class="btn-viewall">View All</a>
                    </div>
       
                <table class="lamesa">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Event Date</th>
                            <th scope="col">Status</th>
                            <th scope="col" colspan="2">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($Events as $ev)
                        <tr>
                            <th scope="row">{{ ++$i }}</th>
                            <td>{{$ev->fname.' '.$ev->mname.' '.$ev->lname}}</td>
                            <td>{{$ev->email}}</td>
                            <td>{{$ev->Event_date}}</td>
                            <td>{{$ev->event_status}}</td>
                            <td>
                            
                                @if($ev->event_status == "Pending")
                                    <a href="{{route('updateStatus',$ev->reservation_id)}}"><button class="custom-btn_btn-approve">Approve</button></a>
                                    
                                    <a href="{{route('updateCancel',$ev->reservation_id)}}"><button class="custom-btn_btn-cancel">Cancel</button></a>
                                @endif
                                @if($ev->event_status == "Approved")
                                    <a href="{{route('updateStatus',$ev->reservation_id)}}"><button class="custom-btn_btn-finished">Finished</button></a>
                                @endif
                            </td>
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

        
            <!-- ================ Reservation List ================= -->
            <!-- <div class="details">
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
                                <td>Action</td>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Algen</td>
                                <td>algen@email.com</td>
                                <td>2023-01-08</td>
                                <td><span class="status approved">Approved</span></td>
                                <td> 
                                    <button class="custom-btn_btn-approve">Approve</button>
                                    <button class="custom-btn_btn-cancel">Cancel</button>
                                    <button class="custom-btn_btn-view">View</button>
                                </td>
            
                                
                            <tr>
                                <td>2</td>
                                <td>Bryan</td>
                                <td>bryan@email.com</td>
                                <td>2023-01-08</td>
                                <td><span class="status pending">Pending</span></td>
                                <td> 
                                    <button class="custom-btn_btn-approve">Approve</button>
                                    <button class="custom-btn_btn-cancel">Cancel</button>
                                    <button class="custom-btn_btn-cancel">View</button>
                                </td>
            

                            <tr>
                                <td>3</td>
                                <td>Mel</td>
                                <td>mel@email.com</td>
                                <td>2023-01-08</td>
                                <td><span class="status cancelled">Cancelled</span></td>
                                 <td> 
                                    <button class="custom-btn_btn-approve">Approve</button>
                                    <button class="custom-btn_btn-cancel">Cancel</button>
                                    <button class="custom-btn_btn-view">View</button>
                                </td>
                            </tr>

                            <tr>
                                <td>4</td>
                                <td>Yuri</td>
                                <td>yuri@email.com</td>
                                <td>2023-01-08</td>
                                <td><span class="status inProgress">In Progress</span></td>
                                 <td> 
                                    <button class="custom-btn_btn-approve">Approve</button>
                                    <button class="custom-btn_btn-cancel">Cancel</button>
                                    <button class="custom-btn_btn-view">View</button>
                                </td>
                            </tr>

                            <tr>
                                <td>5</td>
                                <td>Algen</td>
                                <td>algen@email.com</td>
                                <td>2023-01-08</td>
                                <td><span class="status approved">Approved</span></td>
                                 <td> 
                                    <button class="custom-btn_btn-approve">Approve</button>
                                    <button class="custom-btn_btn-cancel">Cancel</button>
                                    <button class="custom-btn_btn-view">View</button>
                                </td>
                            </tr>

                            <tr>
                                <td>6</td>
                                <td>Bryan</td>
                                <td>bryan@email.com</td>
                                <td>2023-01-08</td>
                                <td><span class="status pending">Pending</span></td>
                                 <td> 
                                    <button class="custom-btn_btn-approve">Approve</button>
                                    <button class="custom-btn_btn-cancel">Cancel</button>
                                    <button class="custom-btn_btn-view">View</button>
                                </td>
                            </tr>

                            <tr>
                                <td>7</td>
                                <td>Mel</td>
                                <td>mel@email.com</td>
                                <td>2023-01-08</td>
                                <td><span class="status cancelled">Cancelled</span></td>
                                 <td> 
                                    <button class="custom-btn_btn-approve">Approve</button>
                                    <button class="custom-btn_btn-cancel">Cancel</button>
                                    <button class="custom-btn_btn-view">View</button>
                                </td>
                            </tr>

                            <tr>
                                <td>8</td>
                                <td>Yuri</td>
                                <td>yuri@email.com</td>
                                <td>2023-01-08</td>
                                <td><span class="status inProgress">In Progress</span></td>
                                 <td> 
                                    <button class="custom-btn_btn-approve">Approve</button>
                                    <button class="custom-btn_btn-cancel">Cancel</button>
                                    <button class="custom-btn_btn-view">View</button>
                                </td>
                            </tr>
     
                            <tr>
                                <td>9</td>
                                <td>Berwyn</td>
                                <td>berwyn@email.com</td>
                                <td>2023-01-08</td>
                                <td><span class="status pending">pending</span></td>
                                 <td> 
                                    <button class="custom-btn_btn-approve">Approve</button>
                                    <button class="custom-btn_btn-cancel">Cancel</button>
                                    <button class="custom-btn_btn-view">View</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="pagination">
                        <a href="#">&laquo;</a>
                        <a href="#">1</a>
                        <a href="#" class="active">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <a href="#">5</a>
                        <a href="#">6</a>
                        <a href="#">7</a>
                        <a href="#">8</a>
                        <a href="#">9</a>
                        <a href="#">&raquo;</a>
                    </div>
                </div>  -->

    <!-- ========== Scripts =========  -->
    
    <script src="js/script.js"></script>
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>