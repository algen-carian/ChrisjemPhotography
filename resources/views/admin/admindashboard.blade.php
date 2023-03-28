
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pixcellence</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/css/sidebar.css">


 
</head>


<body>
        
    @include('admin/sample')

    <section class="service-section">
        <div class="text_permission">
            <div class="container">
                
        <!--======================================================  Content  ====================================================-->
                
                            <div class="row" style="margin-left: auto;margin-right: auto;width: 80%;padding: 10%px;" >

                              <div class="col-xl-3 col-sm-6 mb-3">
                                <div class="card dashboard text-white bg-primary o-hidden h-100">
                           
                                  <div class="card-body">
                                    <div class="card-body-icon">
                                        <i class="fa fa-folder-open-o" aria-hidden="true"></i>
                                    </div>
                                    <div class="mr-5"><h5>Revenue</h5></div>
                                          {{ $data[0] }}

                                    </div>
                                  <a class="card-footer text-white clearfix small z-1" href="reviews.html">
                                      <span class="float-left">view >>></span>
                                    <span class="float-right">
                                      <i class="fa fa-angle-right"></i>
                                    </span>
                                  </a>
                                </div>
                              </div>
                              <div class="col-xl-3 col-sm-6 mb-3">
                                <div class="card dashboard text-white bg-warning o-hidden h-100">
                                  <div class="card-body">
                                    <div class="card-body-icon">
                                        <i class="fa fa-folder-open-o" aria-hidden="true"></i>
                                    </div>
                              <div class="mr-5"><h5>Events</h5></div>
                                    {{ $data[1] }}
                                  </div>
                                  <a class="card-footer text-white clearfix small z-1" href="reviews.html">
                                      <span class="float-left"> >>></span>
                                    <span class="float-right">
                                      <i class="fa fa-angle-right"></i>
                                    </span>
                                  </a>
                                </div>
                              </div>
                              <div class="col-xl-3 col-sm-6 mb-3">
                                <div class="card dashboard text-white bg-success o-hidden h-100">
                                  <div class="card-body">
                                    <div class="card-body-icon">
                                      <i class="fa fa-fw fa-calendar-check-o"></i>
                                    </div>
                                    <div class="mr-5"><h5>Reservation</h5></div>
                                    {{ $data[2] }}
                                  </div>
                                  <a class="card-footer text-white clearfix small z-1" href="bookings.html">
                                      <span class="float-left">View >>></span>
                                    <span class="float-right">
                                      <i class="fa fa-angle-right"></i>
                                    </span>
                                  </a>
                                </div>
                              </div>
                              <div class="col-xl-3 col-sm-6 mb-3">
                                <div class="card dashboard text-white bg-danger o-hidden h-100">
                                  <div class="card-body">
                                    <div class="card-body-icon">
                                        <i class="fa fa-archive" aria-hidden="true"></i>
                                    </div>
                                    <div class="mr-5"><h5>Services</h5></div>
                                    {{ $data[3]}}
                                  </div>
                                  <a class="card-footer text-white clearfix small z-1" href="bookmarks.html">
                                      <span class="float-left">View</span>
                                    <span class="float-right">
                                      <i class="fa fa-angle-right"></i>
                                    </span>
                                  </a>
                                </div>
                              </div>
                          </div>
     <!--=================================================End ===================================================-->
     <div class="details">
                <div class="recentReservations">
                    <div class="cardHeader">
                        <h2>Recent Reservations</h2>
                        <a href="#" class="btn">View All</a>
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
                         <a href="#" class="btn">View All</a>
                    </div>

                    <table>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../assets/style-lp/images/icon1.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Algen <br> <span>Cabalan</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../assets/style-lp/images/icon.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Bryan <br> <span>Manggahan</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../assets/style-lp/images/icon1.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Algen <br> <span>Cabalan</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../assets/style-lp/images/icon.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Bryan <br> <span>Manggahan</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../assets/style-lp/images/icon1.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Algen <br> <span>Cabalan</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../assets/style-lp/images/icon.jpg" alt=""></div>
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
                                <div class="imgBx"><img src="../assets/style-lp/images/icon1.jpg" alt=""></di>
                            </td>
                            <td>
                                <h4>Bryan <br> <span>Manggahan</span></h4>
                            </td>
                        </tr>
                    </table>

    
            </div>
        </div>
    </section>

      <!-- =========== Scripts =========  -->
      <script src="assets/js/main.js"></script>

<!-- ====== ionicons ======= -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>