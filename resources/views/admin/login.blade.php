
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Login Account</title>
	  <link rel="icon" type="" href="picxellence.png">
</head>
<body>
    <div class="wrapper">

    @if(session()->has('status') || session() === null)

<div class="alert alert-primary ">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
    <strong>WARNING!</strong> {{ session()->get('status') }}
  
</div>
@endif




        <div class="container main">
            <div class="row">
                <div class="col-md-6 side-image">
                    <!-------Image-------->
                    <img src="assets/picxellence.png" alt="LOGO">
                    <div class="text">
                        <p>Photography and Videography  Online Reservation System <i>- picxellence</i></p>
                    </div>
                </div>
                <div class="col-md-6 right">
                     <div class="input-box">
                        <header>Login Account</header>
                        <form  method="post" action="/adminAuth">
                             @csrf

                        <div class="input-field">
                            <input type="text" class="input" id="email" required autocomplete="off">
                            <label for="email">Email</label>
                        </div>
                        <div class="input-field">
                            <input type="password" class="input" id="password" required>
                            <label for="password">Password</label>
                        </div>
                        <div class="input-field">

                            <input name="submit"  id="login" type="submit" class="submit" value="Sign in">
                        </div>
                        </form>   
                        <div class="signin">
                            <span>Forgot Password? <a href="forgotpassword">Click here</a></span>
                        </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>