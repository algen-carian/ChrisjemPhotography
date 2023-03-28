<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Login Form</title>
    <link rel="icon" type="" href="../assets/style-lp/images/picxellence.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!----CSS link----->
    <link rel="stylesheet" href="../assets/css/userlogin.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>

    


    <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
      <div class="container">
        <div class="card login-card">
          <div class="row no-gutters">
            <div class="col-md-4 Logobackground" >

           <!-- <img src="assets/Photography  Videography.png" style="width:100%;" class="login-card-img"> -->
              <img src="assets/picxellence.png"class="logolang"> 
            </div>

            <div class="col-md-8">
              <div class="card-body">
                <div class="brand-wrapper">
              <center>
                              
              @if(session()->has('status') || session() === null)

              <div class="alert alert-primary ">
                  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                  <strong>WARNING!</strong> {{ session()->get('status') }}
                
              </div>
              @endif


                  <img src="assets/picxellence.png"class="logo">
                </div>
              
                <p class="login-card-description">Sign in</p>
                <center>
              <form  method="post" action="/adminAuth">
                @csrf
                
                  <div class="form-group">
                  <!-- <i class="fa fa-envelope icon"> </i> -->
                 <label for="email" class="sr-only" >Email</label> 
                    
                    <input type="email" name="email"  id="email" class="form-control"   placeholder="Email">
                    
                  </div>
                  <div class="form-group mb-4">
                    <label for="Password" class="sr-only">Password</label>
                    
                    <input type="password" name="password" id="password" class="form-control"  placeholder="Password">
                  </div>
                  

                  <input name="submit" id="login" class="btn btn-block login-btn " type="submit" value="Login">

                  <div id="formFooter">
                          <a class="underlineHover" href="adminforgotpassword">Forgot Password?</a>
                  </div>
                  <!-- <a class="back" href="/"> Back to website</a> -->
                </center>
                <!-- Remind Password -->
                 
                <a class="back" href="/"> Back to website</a>
                </form>    
              </div>
            </div>
            <!-- <footer>
          <a href="#!">Developed by.</a>
          <a href="#!">Algen&Me</a>
        </footer>  -->
          </div>
        </div>      
      </div>     
    </main>
    
   
  </body>
        
</html>