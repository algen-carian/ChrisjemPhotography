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
  </head>
  <body>

    


    <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
      <div class="container">
        <div class="card login-card">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="assets/event10.jpg"  class="login-card-img">
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
              </center>
                </div>
              <center>
                <p class="login-card-description">Forgot Password</p>
              </center>
              <center>
              <form  method="post" action="/adminAuth">
                @csrf
                  <div class="form-group" >
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" name="email"  id="email" class="form-control"  placeholder="Email">
                  </div>
                  <div class="form-group mb-4">
                    <label for="Reenter Password" class="sr-only">New password</label>
                    <input type="password" name="password" id="password" class="form-control"  placeholder="New Password">
                  </div>
                  <div class="form-group mb-4">
                    <label for="Reenter Password" class="sr-only">Reenter Password</label>
                    <input type="password" name="password" id="password" class="form-control"  placeholder="Reenter Password">
                  </div>

                 


                  <input name="submit" id="login" class="btn btn-block login-btn mb-4" type="submit" value="submit">
                  <div id="formFooter"> 
                          <a class="underlineHover" href="userlogin">Already have an Account?</a>
                  </div>
                </center>
                  <!-- Remind Passowrd -->
                                    <center>
                 

                  <!-- <script>
                  function goBack()
                    {
                    window.history.back()
                    }
                  </script>
                  Go back to website? <input type="button" value="Back" onclick="goBack()"/> -->
                  </center>

                  <a class="back" href="/"> Back to website</a>

                </form>
                <br>
                <!-- <nav class="login-card-footer-nav">
                  <a href="#!">Developed by.</a>
                  <a href="#!">Algen&Me</a> -->
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

  </body>
</html>